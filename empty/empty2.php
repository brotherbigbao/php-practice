<?php
$a = ['name' => 'liuyibao', 'age' => 31, 'other' => ['company' => 'st']];

echo ($a['othe']['company'] ?? 'not found');