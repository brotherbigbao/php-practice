<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/3/22
 * Time: 上午10:05
 */
$key = file_get_contents('./key/rsa_public_key.pem');
$public_key = openssl_pkey_get_public($key);
$details = openssl_pkey_get_details($public_key);
print_r($details);