<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 11:01
 */
define('ROOT_PATH', __DIR__);
define('CORE', ROOT_PATH . '/core');
define('APP', ROOT_PATH . '/app');
define('DEBUG', true);
if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}
include CORE . '/common/function.php';
include CORE . '/Imooc.php';
\core\Imooc::run();