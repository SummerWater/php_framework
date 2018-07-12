<?php
/**
 * 从零搭建PHP框架
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 11:01
 */
define('ROOT_PATH', __DIR__);
define('CORE', ROOT_PATH . '/core');
define('APP', ROOT_PATH . '/app');
define('MODULE', '\\app');
define('DEBUG', true);

ini_set('date.timezone', 'Asia/Shanghai');
include './vendor/autoload.php';
if (DEBUG) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

include CORE . '/common/function.php';
include CORE . '/Imooc.php';

spl_autoload_register('\core\Imooc::load');
\core\Imooc::run();
