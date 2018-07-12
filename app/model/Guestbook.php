<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/12
 * Time: 16:39
 */

namespace app\model;


use core\lib\Model;

class Guestbook extends Model
{
    public $table = 'gb_message';

    public function all()
    {
        return $this->select($this->table, '*');
    }

    public function addOne($data)
    {
        return $this->insert($this->table, $data);
    }
}