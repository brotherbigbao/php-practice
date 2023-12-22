<?php
include_once 'CsvReader.php';
include_once 'CsvWriter.php';

$csv = new CsvWriter('test.csv');
$csv->writeCsv([CsvWriter::filterSpecialChars("测试\n测试"), "myname'is", "my,age,is"]);
$csv->writeCsv([CsvWriter::filterSpecialChars("测试\n测试"), "myname'is", "my,age,is"]);
$csv->writeCsv([CsvWriter::filterSpecialChars("测试\n测试"), "myname'is", "my,age,is"]);
$csv->writeCsv([CsvWriter::filterSpecialChars("测试\n测试"), "myname'is", "my,age,is"]);
$csv->writeCsv([CsvWriter::filterSpecialChars("测试\n测试"), "myname'is", CsvWriter::filterSpecialChars('my"age"is')]);
$csv->writeCsv([CsvWriter::filterSpecialChars("测试\n测试"), "myname'is", CsvWriter::filterSpecialChars('my"age"is')]);
$csv->close();