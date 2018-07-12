<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 13:16
 */

namespace app\controller;

use core\Imooc;
use core\lib\Conf;
use core\lib\Model;

class Index extends Imooc
{
    public function index()
    {
        p(Conf::get('controller', 'route'));
        p(Conf::get('action', 'route'));
        $data = 'hello world';
        $title = '视图文件';
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display('index.html');
    }

    public function db()
    {
        $db = new Model;
        $data = $db->query('SELECT * FROM order_queue');
        p($data->fetchAll());
    }
}