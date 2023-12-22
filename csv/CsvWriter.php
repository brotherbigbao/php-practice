<?php

class CsvWriter
{
    /**
     * @var resource
     */
    private $handle;

    public function __construct(string $file)
    {
        $this->handle = fopen($file, 'w');
    }

    public function writeCsv(array $row)
    {
        fputcsv($this->handle, $row);
    }

    public function close()
    {
        fclose($this->handle);
    }

    /**
     * csv没有标准格式 去除内容中的换行符 降低不兼容性
     * 双引号其实并不影响实际使用 无论是手动导入Excel还是直接用Excel打开都是正常的 但暂时先替换成单引号吧 默认情况下都
     * @param string $str
     * @return string
     */
    public static function filterSpecialChars(string $str): string
    {
        return str_replace(["\n", "\r", '"'], [' ', ' ', "'"], $str);
    }
}