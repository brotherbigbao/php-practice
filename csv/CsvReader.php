<?php

class CsvReader
{
    /**
     * @var resource
     */
    private $handle;


    public function __construct(string $file)
    {
        $this->handle = fopen($file, 'r');
        if ($this->handle === false) {
            throw new \Exception('文件不存在');
        }
    }

    public function getArray(): array
    {
        $result = [];
        while (($row = fgetcsv($this->handle)) !== FALSE) {
            $result[] = $row;
        }
        return $result;
    }

    public function close()
    {
        fclose($this->handle);
    }
}