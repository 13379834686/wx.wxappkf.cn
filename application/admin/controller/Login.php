<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/3/22 0022
 * Time: 下午 12:05
 */

namespace app\admin\controller;


use think\captcha\Captcha;
use think\Controller;
use think\Db;

use think\Session;
use app\admin\model\Admin as Admins;
class Login extends Controller
{

    public function index(){
        if(request()->isPost()){

            $res = (new Admins())->login(input('post.'));
            if ($res['valid']){
                $this->success($res['msg'],url('admin/index/index'));
            }else{
                $this->error($res['msg']);
            }

        }

        return $this->fetch('index');
    }


    public function captcha(){
        $captcha = new \think\captcha\Captcha();
        $captcha->imageW=135;
        $captcha->imageH = 40;  //图片高
        $captcha->fontSize =14;  //字体大小
        $captcha->length   = 2;  //字符数
        $captcha->fontttf = '5.ttf';  //字体
        $captcha->expire = 30;  //有效期
        // 验证码字体大小(px)
        $captcha->useCurve = true;
        $captcha->useNoise = false;  //不添加杂点
        return $captcha->entry();
    }



    public function logout(){
        session(null);
        $this->success('退出成功', 'login/index');


    }


}