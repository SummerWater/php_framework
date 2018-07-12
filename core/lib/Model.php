<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 13:39
 */

namespace core\lib;

class Model extends \PDO
{
    public function __construct()
    {
        $database = \core\lib\Conf::all('database');
        $dsn = 'mysql:dbname=' . $database['database'] . ';host=' . $database['host'];
        try {
            parent::__construct($dsn, $database['username'], $database['passwd']);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}