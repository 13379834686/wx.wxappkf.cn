<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/3/19 0019
 * Time: 下午 3:12
 */

namespace app\admin\controller;

use app\admin\validate\Adminval;
use app\admin\model\Admin as Admins;
use think\Db;
use think\Loader;
use think\Request;

class Admin extends Common
{
    public function index(){

        $auth = new Auth();
        $admin=new Admins();
        $lis=$admin->getadmin();

        foreach ($lis as $k => $v) {
            $_groupTitle=$auth->getGroups($v['id']);
            $groupTitle=$_groupTitle[0]['title'];
            $v['groupTitle']=$groupTitle;
        }
        $this->assign('lis',$lis);
        return $this->fetch();

    }



    public function add(){
        if(request()->isPost()){
            $data = input('post.');
            $admin = new Admins;
            $validate = Loader::validate('Adminval');
            if(!$validate->scene('add')->check($data)){
                dump($validate->getError());
            }else{
                $add = $admin->addAdmin($data);
                if ($add){
                    $this->success('添加成功');
                }else{
                    $this->error('添加失败');
                }
                return;
            }
        }
        $authGroupRes = Db::table('auth_group')->select();
        $this->assign('authGroupRes',$authGroupRes);
        return $this->fetch();
    }




    public function updata($id){
        $id = input('id');
        $lis = db('admin')->where('id',$id)->find();
        if (request()->isPost()){
            $data = input('post.');
            $data['adminpass'] = md5($data['adminpass']);
            $data['createtime'] = time();
            $validate = new Adminval();
            if ($validate->scene('edit')->check($data)){
                $info = db('admin')->where('id',$id)->update($data);
                db('auth_group_access')->where('uid',$id)->update(array('group_id'=>input('group_id')));
                if ($info){
                    $this->success('编辑成功');
                }else{
                    $this->error('编辑失败');
                }
            }else{
                dump ($validate->getError());
            }
        }
        $authGroupAccess = db('auth_group_access')->where('uid',$id)->find();
        $authGroupRes = db('auth_group')->select();
        $this->assign([
            'lis'=>$lis,
            'authGroupRes'=>$authGroupRes,
            'groupId'=>$authGroupAccess['group_id'],
        ]);
        return $this->fetch('edit');
    }

    public function del(Request $request){
          $id = $request->param('id');
          Db::table('admin')->where('id',$id)->delete();

    }

}