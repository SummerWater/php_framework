<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 13:16
 */

namespace app\controller;

use app\model\Guestbook;
use core\Imooc;

class Index extends Imooc
{
    // 所有留言
    public function index()
    {
        $guestbook = new Guestbook;
        $items = $guestbook->all();
        $this->assign('items', $items);
        $this->assign('action', 'index');
        $this->display('index.html');
    }

    // 添加留言
    public function add()
    {
        $this->assign('action', 'add');
        $this->display('add.html');
    }

    // 保存留言
    public function save()
    {
        $data['title'] = post('title');
        $data['author'] = post('author');
        $data['content'] = post('content');
        $data['ctime'] = date('Y-m-d H:i:s');
        $guestbook = new Guestbook;
        $res = $guestbook->addOne($data);
        if ($res) {
            jump('/php_framework/');
        } else {
            p('error');
        }
    }
}