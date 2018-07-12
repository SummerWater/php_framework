<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 14:41
 */

namespace core\lib;


class Log
{
    static $class;
    static public function init()
    {
        // 确定保存方式
        $drive = Conf::get('drive', 'log');
        $class = '\\core\\lib\\drive\\log\\' . $drive;
        self::$class = new $class;
    }

    public static function log($name)
    {
        self::$class->log($name);
    }
}