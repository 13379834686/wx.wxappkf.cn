<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/5/23 0023
 * Time: 上午 3:38
 */
namespace app\api\controller;
use think\Db;
use think\Request;

class User{
    public function getSess(Request $request){
        $code           = $request->param('code');
        $encData  = $request->param('encryptedData');
        $iv             = $request->param('iv');
        $appid          =config('xcx.APPID');
        $secret         =config('xcx.SECRET');
        $url='https://api.weixin.qq.com/sns/jscode2session?appid='.$appid.'&secret='.$secret.'&js_code='.$code.'&grant_type=authorization_code';

        $res = file_get_contents($url);

        $res = json_decode($res,true);

            $ret = $this->decryUser($iv,$encData,$res['session_key'],$appid);
            $ret = json_decode($ret,true);


        $thr_session = md5($ret['openId'].$res['session_key']);

        $data = [
            'nick_name'=>$ret['nickName'],
            'open_id'=>$ret['openId'],
            'avatar_url'=>$ret['avatarUrl'],
            'session_key'=>$res['session_key'],
            'thr_session'=>$thr_session,
        ];
        $id = Db::table('wxuser')->where(['open_id'=>$ret['openId']])->value('id');
        if ($id){
            $ins = Db::table('wxuser')->where(['open_id'=>$ret['openId']])->update($data);
        }else {
            $ins = Db::table('wxuser')->insert($data);
        }
         if ($ins){
             return $thr_session;
         }





    }

    private function decryUser($iv,$encData,$session_key,$appid){
        import('wxBizDataCrypt', EXTEND_PATH);
        $pc = new \WXBizDataCrypt($appid, $session_key);
        $errCode = $pc->decryptData($encData,$iv,$data);
        return $data;
    }

}