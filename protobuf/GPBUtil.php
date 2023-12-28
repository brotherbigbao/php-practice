<?php

function checkInt32(&$var)
{
    if (is_numeric($var)) {
        $var = intval($var);
    } else {
        throw new \Exception("Expect integer.");
    }
}

function checkUint32(&$var)
{
    if (is_numeric($var)) {
        if (PHP_INT_SIZE === 8) {
            $var = intval($var);
            $var |= ((-(($var >> 31) & 0x1)) & ~0xFFFFFFFF);
        } else {
            if (bccomp($var, 0x7FFFFFFF) > 0) {
                $var = bcsub($var, "4294967296");
            }
            $var = (int) $var;
        }
    } else {
        throw new \Exception("Expect integer.");
    }
}

function checkInt64(&$var)
{
    if (is_numeric($var)) {
        if (PHP_INT_SIZE == 8) {
            $var = intval($var);
        } else {
            if (is_float($var) ||
                is_integer($var) ||
                (is_string($var) &&
                    bccomp($var, "9223372036854774784") < 0)) {
                $var = number_format($var, 0, ".", "");
            }
        }
    } else {
        throw new \Exception("Expect integer.");
    }
}

function checkUint64(&$var)
{
    if (is_numeric($var)) {
        if (PHP_INT_SIZE == 8) {
            $var = intval($var);
        } else {
            $var = number_format($var, 0, ".", "");
        }
    } else {
        throw new \Exception("Expect integer.");
    }
}