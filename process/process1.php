<?php

use Symfony\Component\Process\InputStream;
use Symfony\Component\Process\Process;

require_once '../vendor/autoload.php';

$input = new InputStream();
$input->write('foo');

$process = new Process(['php -m']);
$process->setInput($input);
$process->start();

echo $process->getOutput();