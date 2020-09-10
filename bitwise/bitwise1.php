<?php
const RIGHT_TYPE_TEAM     = 0b00000010;

if ((RIGHT_TYPE_TEAM & 3) === RIGHT_TYPE_TEAM) {
    echo 'yes';
} else {
    echo 'no';
}