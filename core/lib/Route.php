<?php

namespace core\lib;

class Route
{
    public $controller;
    public $action;

    public function __construct()
    {
        // 隐藏index.php
        // 添加.htaccess

        // 获取参数部分
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
            $patharr = explode('/', trim($path, '/'));
            if (isset($patharr[0])) {
                $this->controller = $patharr[0];
                unset($patharr[0]);
            }
            if (isset($patharr[1])) {
                $this->action = $patharr[1];
                unset($patharr[1]);
            } else {
                $this->action = 'index';
            }
            // URL多余部分转成GET
            $count = count($patharr);
            if ( $count % 2 == 1) {
                array_pop($patharr);
                $count--;
            }
            $i = 2;
            while ($i < $count + 2) {
                $_GET[$patharr[$i]] = $patharr[$i + 1];
                $i += 2;
            }
        } else {
            $this->controller = 'index';
            $this->action = 'index';
        }

        // 返回对应控制器和方法
    }
}