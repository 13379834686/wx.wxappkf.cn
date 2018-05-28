<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/4/9 0009
 * Time: 下午 2:57
 */

namespace app\admin\controller;


use think\Db;
use think\Request;

class Parameter extends Common
{
    public function index(){
        $lis = Db::table('wxparameter')->select();
        $this->assign('lis',$lis);
        return $this->fetch();
    }

    public function add(){
        if(request() ->isPost()){
            $data = [
                'appid'         => input('appid'),
                'appsecret'     => input('appsecret'),
                'redirect_uri'  => input('redirect_uri'),
            ];
            $insert = Db::table('wxparameter')->insert($data);
            if ($insert){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        return $this->fetch();
    }

    public function edit(Request $request){
        $id = $request->param('id');
        $show = Db::table('wxparameter')->where('id',$id)->find();
        if (request()->isPost()){
            $data = [
                'appid'         => input('appid'),
                'appsecret'     => input('appsecret'),
                'redirect_uri'  => input('redirect_uri'),
            ];
            $update = Db::table('wxparameter')->where('id',$id)->update($data);
            if ($update != null){
                $this->success('编辑成功');
            }else{
                $this->error('编辑失败');
            }
            return;
        }
        $this->assign('show',$show);
        return $this->fetch();
    }

    public function del( Request $request){
        $id = $request->param('id');
        if ($id){
            Db::table('wxparameter')->where('id',$id)->delete();
        }

    }
}