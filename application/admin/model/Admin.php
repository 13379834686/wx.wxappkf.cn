<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/3/20 0020
 * Time: 上午 11:44
 */
namespace app\admin\model;
use app\admin\validate\Adminval;
use think\Loader;
use think\Model;
class Admin extends Model
{

    protected $table = "admin";

    /**
     * @ 1.验证用户输入信息
     * @ 2.比对用户信息
     * @ 3.如果正确存入session
     */
    public function login($data){

        $validate = new Adminval();
        $result = $validate->scene('login')->check($data);
        if (!$result){
            return ['valid'=>0,'msg'=>$validate->getError()];
        }
        $userInfo = $this->where('adminname',$data['adminname'])->where('adminpass',md5($data['adminpass']))->find();
//        halt($userInfo);
        if (!$userInfo){
            //如果不正确返回
            return ['valid'=>0,'msg'=>'用户名或密码错误'];
        }
        session('user_id',$userInfo['id']);
        session('user_name',$userInfo['adminname']);
        session('login_time',time());
        session('login_ip',request()->ip());

        $admin = \db('admin')->where('id',session('user_id'))->find();
        session('login_time_info',date("Y-m-d H:i:s", $admin['logintime']));
        session('login_ip_info',$admin['loginip']);
        return ['valid'=>1,'msg'=>'登录成功'];

    }

}