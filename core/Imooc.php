<?php

namespace core;

use core\lib\Log;

class Imooc
{
    public static $classMap = [];
    public $assign = [];

    static public function run()
    {
        // 启动日志
        Log::init();
        // 加载路由
        $route = new \core\lib\Route();
        // 路由获取控制器和方法
        $controller = $route->controller;
        $controllerPath = APP . '/controller/' . $controller . '.php';
        $action = $route->action;
        // 检测控制器文件是否存在
        if (is_file($controllerPath)) {
            // 包含控制器(自动加载类)
            $classPath = MODULE . '\\' . 'controller\\' . $controller;
            $cls = new $classPath;
            $cls->$action();
            Log::log('Controller:' . $controller . ' Action:' . $action);
        } else {
            // 异常：控制器不存在
            throw new \Exception('找不到控制器:' . $controller);
        }
    }

    static public function load($class)
    {
        // 自动加载
        $class = str_replace('\\', '/', $class);
        if (isset($class[$class])) {
            return true;
        } else {
            $path = ROOT_PATH . '/' . $class . '.php';
            if (is_file($path)) {
                include $path;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $dir = APP . '/view/';
        $path = $dir . $file;
        if (is_file($path)) {
            extract($this->assign);
            $loader = new \Twig_Loader_Filesystem($dir);
            $twig = new \Twig_Environment($loader, array(
                'cache' => ROOT_PATH . '/log/twig/',
                'debug' => DEBUG
            ));

            echo $twig->render($file, $this->assign ? $this->assign : []);
        } else {
            echo '视图文件不存在:' . $file;
            exit();
        }
    }
}