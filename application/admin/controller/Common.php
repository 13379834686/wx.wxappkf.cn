<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/3/21 0021
 * Time: 下午 3:52
 */

namespace app\admin\controller;


use think\Controller;
use think\Request;

class Common extends Controller
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        if (!session('user_id')){
            $this->error('请先登录',url('admin/login/index'));
        }



    }


}