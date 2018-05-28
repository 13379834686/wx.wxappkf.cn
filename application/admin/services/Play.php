<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/5/26 0026
 * Time: 下午 11:06
 */
namespace app\admin\services;

use app\admin\model\Admin;

class Play
{
        public function playpingp($uid, $methpd) {
           $info =  (new user(1, 'xiaom'))->getuser();
           model('persson')->play($info);
        }
}
