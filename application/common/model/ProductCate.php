<?php
namespace app\common\model;
use think\Model;

class ProductCate extends Model
{
    
    /*新增*/
    public static function insert($data)
    {
        $check = ProductCate::create($data);
        if ($check) {
            return true;
        }else{
            return false;
        }
    }
  
    /*数据查询*/
    public static function lists($id=0){
        $lists=ProductCate::where([])->order('cat_id asc')->paginate(20);      
        return $lists;
    }


    /*一级分类*/
    public static function topList($id=0){
        $lists=ProductCate::where(["pid"=>$id])->order('cat_id asc')->select();
       
        return $lists;
    }


    /*删除数据*/
    public static function dels($id){
       
        //dump($list);exit;
        $info=ProductCate::where(["cat_id"=>$id])->delete();
        if ($info) {
            return true;
        }else{
            return false;
        }
    }

    /*查询一条分类数据*/
    public static function finds($id){
        $info=ProductCate::where(["cat_id"=>$id])->find();
        return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$id){
        // dump($data);
        $info=ProductCate::where(["cat_id"=>$id])->update($data);
        if ($info) {
            return true;
        }
    }

    /*分类名是否存在*/
    public static function is_exist($cat_name){
        // dump($data);
        $info=ProductCate::where(["cat_name"=>$cat_name])->field('cat_name')->select();
        if ($info) {
            return true;
        }
    }

}