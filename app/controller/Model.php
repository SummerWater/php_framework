<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 13:39
 */

namespace app\controller;


class Model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:dbname=test;host=127.0.0.1';
        $username = 'root';
        $passwd = '';

        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}