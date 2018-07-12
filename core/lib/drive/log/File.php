<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 14:46
 */

namespace core\lib\drive\log;


use core\lib\Conf;

class File
{
    public $path;
    public function __construct()
    {
        $this->path = Conf::get('path', 'log');
    }

    public function log($message, $file = 'log')
    {
        // 判断文件是否存在 不存在则创建
        if (!is_dir($this->path.date('YmdH'))) {
            mkdir($this->path.date('YmdH'), 0777, true);
        }
        // 写日志
        $message = date('Y-m-d H:i:s') . json_encode($message);
        return file_put_contents($this->path .date('YmdH'). '/' . $file . '.php', $message . PHP_EOL, FILE_APPEND);
    }
}