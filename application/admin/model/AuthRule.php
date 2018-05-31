<?php
/**
 * Created by 香农
 * User: 香农
 * Date: 2018/5/28 0028
 * Time: 下午 10:10
 */

namespace app\admin\model;


use think\Model;

class AuthRule extends Model
{
    public function authRuleTree(){
        $authRuleRes = $this->order('sort desc')->select();
        return $this->sort($authRuleRes);
    }

    public function sort($data,$pid=0){
        static $arr = array();
        foreach ($data as $k => $v){
            if ($v['pid'] == $pid){
                $v['dataid']=$this->getParentId($v['id']);
                $arr[]=$v;
                $this->sort($data,$v['id']);
            }
        }
        return $arr;
    }

    public function getChilrenId($authRuleId){
        $authRules = $this->select();
        return $this->_getChilrenId($authRules,$authRuleId);
    }
    public function _getChilrenId($authRules,$authRuleId){
        static $arr = array();
        foreach($authRules as $k=>$v){
            if ($v['pid'] == $authRuleId){
                $arr[]=$v['id'];
                $this->_getChilrenId($authRules,$v['id']);
            }
        }
        return $arr;
    }

    public function getParentId($authRuleId){
        $authRules = $this->select();
        return $this->_getParentId($authRules,$authRuleId,True);
    }
    public function _getParentId($authRules,$authRuleId,$clear=False){
        static $arr = array();
        if ($clear){
            $arr = array();
        }
        foreach($authRules as $k=>$v){
            if ($v['id'] == $authRuleId){
                $arr[]=$v['id'];
                $this->_getParentId($authRules,$v['pid'],False);
            }
        }
        asort($arr);
        $arrStr=implode('-',$arr);
        return $arrStr;
    }
}