<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/3/19 0019
 * Time: 下午 3:12
 */

namespace app\admin\controller;

use app\admin\validate\Adminval;
use think\Db;
use think\Request;

class Admin extends Common
{
    public function index(){


        $count = Db::table('admin')->count();
        $lis = Db::table('admin')->select();

        $this->assign('lis',$lis);
        $this->assign('count',$count);
        return $this->fetch();

    }



    public function add(){
        if(request()->isPost()){
            if (input('adminpass')==null || input('adminpass')!=input('repassword')){
                dump('密码不能为空或不一致');
                exit;
            }
            $data = [
                'adminname' => input('adminname'),
                'adminpass' => md5(input('adminpass')),
                'status' => input('status'),
                'roleid' => input('roleid'),
                'createtime' => time(),
            ];
            $validate = new Adminval();
            if ($validate->scene('add')->check($data)){
                $info = Db::table('admin')->insert($data);
                if ($info){
                    $this->success('添加成功');
                }else{
                    $this->error('添加失败');
                }
            }else{
                dump ($validate->getError());
            }

        }
        return $this->fetch();
    }




    public function updata($id){
        $id = input('id');
        $lis = Db::table('admin')->where('id',$id)->find();
        if (request()->isPost()){
            if (input('adminpass')==null || input('adminpass')!=input('repassword')){
                dump('密码不能为空或不一致');
                exit;
            }
            $data = [
                'adminname' => input('adminname'),
                'adminpass' => md5(input('adminpass')),
                'status' => input('status'),
                'roleid' => input('roleid'),
            ];
            $validate = new Adminval();
            if ($validate->scene('edit')->check($data)){
                $info = Db::table('admin')->where('id',$id)->update($data);
                if ($info){
                    $this->success('编辑成功');
                }else{
                    $this->error('编辑失败');
                }
            }else{
                dump ($validate->getError());
            }

        }

        $this->assign('lis',$lis);
        return $this->fetch('edit');

    }

    public function del(Request $request){
          $id = $request->param('id');
          Db::table('admin')->where('id',$id)->delete();

    }

}