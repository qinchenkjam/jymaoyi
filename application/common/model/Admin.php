<?php
namespace app\common\model;
use think\Model;

class Admin extends Model
{
     // 设置当前模型对应的完整数据表名称
    protected $table = 'tp_admin';

     /*新增*/
    public static function inserts($data)
    {
        $check =Admin::create($data);
    	if ($check) {
    		return true;
    	}else{
    		return false;
    	}
    }
  
    /*数据查询*/
    public static function lists($limit=5){
        $lists=Admin::where([])->paginate($limit);
    	// $lists=Admin::where([])->order('id asc')->select();
        return $lists;
    }


    /*删除数据*/
    public static function dels($id){
    	$info=Admin::where(["id"=>$id])->delete();
    	if ($info) {
    		return true;
    	}else{
    		return false;
    	}
    }

    /*查询一条数据*/
    public static function finds($id){
    	$info=Admin::where(["id"=>$id])->find();
    	return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$id){
    	// dump($data);
    	$info=Admin::where(["id"=>$id])->update($data);
    	if ($info) {
    		return true;
    	}
    }
   
   /*查询是否注册过*/
    public static function get_info($username){
    	$info=Admin::where(["user_name"=>$username])->find();
    	return $info;
    }

    /*查询是否一致*/
    public static function _check($name,$pwd){
        $info=Admin::where(["user_name"=>$name,"password"=>$pwd])->find();
        return $info;
    }


    /*查询状态*/
    public static function change_status($id){
        $info=Admin::where(["user_name"=>$name,"password"=>$pwd])->find();
        return $info;
    }

}