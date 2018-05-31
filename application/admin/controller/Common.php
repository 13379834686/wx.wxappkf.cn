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

        $auth = new Auth();
        $request = Request::instance();
        $con = $request->controller();
        $action = $request->action();
        $notCheck = array('Index/index');
        $name = $con.'/'.$action;
        if (session('user_id') != 1){
            if (!in_array($name,$notCheck)){
                if (!$auth->check($name,session('user_id'))){
                    $this->error('该管理员无权访问',url('index/index'));
                }
            }
        }
    }


}