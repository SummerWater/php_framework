<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 13:16
 */

namespace app\controller;
use app\controller\Model;
use core\Imooc;

class Index extends Imooc
{
    public function index()
    {
        $data = 'hello world';
        $title = '视图文件';
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display('index.html');
    }
}