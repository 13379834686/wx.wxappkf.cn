<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/3/19 0019
 * Time: 上午 11:43
 */

namespace app\admin\controller;

use think\Db;

class Index extends Common
{

    public function index(){
        $data = [
            'loginid'=>session('user_id'),
            'logintime'=>session('login_time'),
            'loginip'=>session('login_ip'),
        ];
        Db::table('admin')->where('id',session('user_id'))->update($data);
        return $this->fetch();

    }




}