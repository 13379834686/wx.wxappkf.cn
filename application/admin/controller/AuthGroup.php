<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/5/28 0028
 * Time: 下午 6:49
 */

namespace app\admin\controller;
use app\admin\model\AuthGroup as AuthGroups;

use think\Db;

class AuthGroup extends Common
{
    public function index(){
        $authGroupRes = AuthGroups::paginate(1);

        $this->assign('authGroupRes',$authGroupRes);
        return $this->fetch();
    }

    public function add(){
        if (request()->isPost()){
            $data = input('post.');
            if (isset($data['rules'])){
                $data['rules']= implode(',',$data['rules']);
            }
            $add = Db::table('auth_group')->insert($data);
            if ($add){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
            return;
        }
        $authRule = new \app\admin\model\AuthRule();
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return $this->fetch();
    }

    public function edit(){

        if (request()->isPost()){
            $data = input('post.');
            if (isset($data['rules'])){
                $data['rules']= implode(',',$data['rules']);
            }
            $save = Db::table('auth_group')->update($data);
            if ($save){
                $this->success('编辑成功');
            }else{
                $this->error('编辑失败');
            }
            return;
        }
        $authRule = new \app\admin\model\AuthRule();
        $authRuleRes = $authRule->authRuleTree();
        $authGroups = Db::table('auth_group')->find(input('id'));
        $this->assign([
            'authGroups'=>$authGroups,
            'authRuleRes'=>$authRuleRes,
        ]);
        return $this->fetch();
    }
    public function del(){
        $id = input('id');
        $del = Db::table('auth_group')->where('id',$id)->delete();
        if ($del){
            $this->success('删除成功',url('auth_group/index'));
        }else{
            $this->error('删除失败');
        }
        return;
    }
}