<?php
// Create a curl handle to a non-existing location
$ch = curl_init('http://404.php.net/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if(curl_exec($ch) === false)
{
    echo 'Curl error: ' . curl_error($ch);
    echo 'Curl code: ' . curl_errno($ch);
}
else
{
    echo 'Operation completed without any errors';
}

// Close handle
curl_close($ch);