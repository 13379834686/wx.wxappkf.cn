<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/3/22 0022
 * Time: 下午 5:22
 */
namespace app\admin\validate;
use think\Validate;
class Adminval extends Validate
{
    protected $rule = [
        'adminname'  =>  'require|unique:admin',
        'adminpass'  =>  'require|unique:admin',

        'code'=>'require|captcha',
    ];

    protected $message = [
        'adminname.require' => '用户名不能为空',
        'adminname.unique' => '用户名已存在',
        'adminpass.require' => '请输入密码',
        'adminpass.unique' => '密码已存在',
        'code.require' => '请输入验证码',
        'code.captcha' => '验证码错误',
    ];

    protected $scene = [
        'add'   =>  ['adminname'=>'require|unique:admin'],
        'login' =>  ['adminname'=>'require','adminpass'=>'require','code'=>'require|captcha',],
        'edit'  =>  ['adminname'=>'require','adminpass'=>'unique:admin',],
    ];

}