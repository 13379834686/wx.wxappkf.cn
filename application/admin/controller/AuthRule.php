<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/5/28 0028
 * Time: 下午 10:10
 */

namespace app\admin\controller;
use app\admin\model\AuthRule as AuthRules;
use think\Db;

class AuthRule extends Common
{
    public function index(){
        $authRule = new AuthRules;
        if (request()->isPost()){
            $sorts = input('post.');
            foreach ($sorts as $k=>$v){
                $authRule->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功');
            return;
        }
        $authRule = new AuthRules;
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return $this->fetch();
    }

    public function add(){

        if (request()->isPost()){
            $data = input('post.');

            $plevel = db('auth_rule')->where('id',$data['pid'])->field('level')->find();
            if ($plevel){
                $data['level']=$plevel['level']+1;
            }else{
                $data['level']=0;
            }
            $add = db('auth_rule')->insert($data);
            if ($add){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
            return;
        }
        $authRule = new AuthRules;
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return $this->fetch();
    }

    public function edit(){
        if (request()->isPost()){
            $data = input('post.');
            $level = db('auth_rule')->where('id',$data['pid'])->field('level')->find();
            if ($level){
                $data['level']=$level['level']+1;
            }else{
                $data['level']=0;
            }

            $save = db('auth_rule')->update($data);
            if ($save !== false){
                $this->success('编辑成功');
            }else{
                $this->error('编辑失败');
            }
            return;
        }

        $authRule = new AuthRules;
        $authRuleRes = $authRule->authRuleTree();
        $authRules = $authRule->find(input('id'));
        $this->assign([
            'authRuleRes'=>$authRuleRes,
            'authRules'=>$authRules,
            ]);
        return $this->fetch();
    }
    public function del(){
        $authRule = new AuthRules;
        $authRule->getParentId(input('id'));
        $authRuleIds = $authRule->getChilrenId(input('id'));
        $authRuleIds[] = input('id');
        $del = AuthRules::destroy($authRuleIds);
        if ($del){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
}