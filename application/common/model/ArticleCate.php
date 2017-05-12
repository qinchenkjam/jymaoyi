<?php
namespace app\common\model;
use think\Model;

class ArticleCate extends Model
{
    
    /*新增*/
    public static function inserts($data)
    {
        $check = ArticleCate::create($data);
        if ($check) {
            return true;
        }else{
            return false;
        }
    }
  
    /*数据查询*/
    public static function lists($limit=20){
    $lists=ArticleCate::where([])->order('cat_id desc')->paginate($limit);
        // $lists=ArticleCate::where([])->order('cat_id asc')->select();
        return $lists;
    }


    /*删除数据*/
    public static function dels($cat_id){
        $info=ArticleCate::where(["cat_id"=>$cat_id])->delete();
        if ($info) {
            return true;
        }else{
            return false;
        }
    }

    /*查询一条数据*/
    public static function finds($cat_id){
        $info=ArticleCate::where(["cat_id"=>$cat_id])->find();
        return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$cat_id){
        // dump($data);
        $info=ArticleCate::where(["cat_id"=>$cat_id])->update($data);
        if ($info) {
            return true;
        }
    }

    /*分类名是否存在*/
    public static function is_exist($cat_name){
        // dump($data);
        $info=ArticleCate::where(["cat_name"=>$cat_name])->field('cat_name')->select();
        if ($info) {
            return true;
        }
    }

}