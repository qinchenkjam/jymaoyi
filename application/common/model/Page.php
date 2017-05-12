<?php
namespace app\common\model;
use think\Model;

class Page extends Model
{
	 /*新增*/
    public static function inserts($data)
    {       
    	$check = Page::create($data);
    	if ($check) {
    		return true;
    	}else{
    		return false;
    	}
    }
  
    /*数据查询*/
    public static function lists($limit=5){
        $lists=Page::where([])->order('id desc')->paginate($limit);
    	// $lists=Page::where([])->order('id asc')->select();
        return $lists;
    }


    /*删除数据*/
    public static function dels($id){
    	$info=Page::where(["id"=>$id])->delete();
    	if ($info) {
    		return true;
    	}else{
    		return false;
    	}
    }

    /*查询一条数据*/
    public static function finds($id){
    	$info=Page::where(["id"=>$id])->find();
    	return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$id){
    	// dump($data);
    	$info=Page::where(["id"=>$id])->update($data);
    	if ($info) {
    		return true;
    	}
    }
}