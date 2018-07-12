<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 13:39
 */

namespace core\lib;

class Model extends \Medoo\Medoo
{
    public function __construct()
    {
        $database = Conf::all('database');
        parent::__construct($database);
    }
}