<?php
namespace app\common\model;
use think\Model;

class Config extends Model
{

	// 设置当前模型对应的完整数据表名称
    //protected $table = 'tp_system';
    /*数据查询*/
    public static function lists(){
        $lists=Config::where([])->field('id,name,value,field_type,field_value')->select();     
        return $lists;
    	
    }


    /*修改数据*/
    public static function updatemsgs($data,$id){
    	// dump($data);
    	$info=Config::where(["id"=>$id])->update($data);
    	if ($info) {
    		return true;
    	}
    }
}