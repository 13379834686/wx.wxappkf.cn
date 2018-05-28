<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/4/9 0009
 * Time: 下午 4:05
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class Base extends Controller
{
    public $appid = 'wx6b55d012f8bfe791';
    public $appsecret ='7b929a61c2dea3341389195e3a992f74';
    public $redirect_uri ='http://wx.wxappkf.cn/index.php';
    public $code;
    public $openid;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);

        if (!session('openid')) {
            //如果$_SESSION中没有openid，说明用户刚刚登陆，就执行getCode、getOpenId、getUserInfo获取他的信息
            $this->code = $this->getCode();
            $this->access_token = $this->getAccessToken();
            $userInfo = $this->getUserInfo();
            $wxUser = Db::table('wxuser')->find();
            var_dump($userInfo);
            var_dump('<br />');

            if(isset($userInfo)){
                session('open_id',$userInfo['openid']);
                session('nick_name',$userInfo['nickname']);
                session('headimg_url',$userInfo['headimgurl']);
                if ($userInfo['openid'] != null && $userInfo['openid'] != $wxUser['openid']){
                    $data = [
                      'openid' => $userInfo['openid'],
                      'nickname' => $userInfo['nickname'],
                      'headimgurl' => $userInfo['headimgurl'],
                    ];
                    Db::table('wxuser')->insert($data);
                    exit;
                }

                var_dump(session('open_id'));
                var_dump(session('nick_name'));
                var_dump(session('headimg_url'));
            }


        }
    }


    public function getCode()
    {
        if (isset($_GET["code"])) {
            return $_GET["code"];
        } else {
            $str = "location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=" . $this->appid . "&redirect_uri=" . urlencode($this->redirect_uri) . "&response_type=code&scope=snsapi_userinfo&state=test123#wechat_redirect";

            header($str);
            exit;
        }
    }

    /**
     * @explain
     * 用于获取用户openid
     **/
    public function getAccessToken()
    {
        $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . $this->appid . "&secret=" . $this->appsecret . "&code=" . $this->code . "&grant_type=authorization_code";
        $access_token_json = $this->https_request($access_token_url);
        $access_token_array = json_decode($access_token_json, TRUE);

        return $access_token_array;
    }


    /**
     * @explain
     * 通过code获取用户openid以及用户的微信号信息
     * @return
     * @remark
     * 获取到用户的openid之后可以判断用户是否有数据，可以直接跳过获取access_token,也可以继续获取access_token
     * access_token每日获取次数是有限制的，access_token有时间限制，可以存储到数据库7200s. 7200s后access_token失效
     **/
    public function getUserInfo()
    {
        if (isset($this->access_token['access_token'])){
            $userinfo_url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$this->access_token['access_token'] ."&openid=" . $this->access_token['openid']."&lang=zh_CN";

            $userinfo_json = $this->https_request($userinfo_url);
            $userinfo_array = json_decode($userinfo_json, TRUE);

            return $userinfo_array;
        }

    }

    /**
     * @explain
     * 发送http请求，并返回数据
     **/
    public function https_request($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }
}