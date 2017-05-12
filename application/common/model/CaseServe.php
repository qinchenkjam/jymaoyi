<?php
namespace app\common\model;
use think\Model;

class CaseServe extends Model
{
    
    /*新增*/
    public static function inserts($data)
    {
        $data['add_time']=time();       
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');
        //dump($file);exit;
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
           $data['image']=$info->getSaveName();
        //dump($data);exit();          
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
        $check = CaseServe::create($data);
        if ($check) {
            return true;
        }else{
            return false;
        }
    }
  
    /*特定分类数据查询*/
    public static function clists($cat_id=1,$limit=20){
    $lists=CaseServe::where(["is_show"=>1,'cat_id'=>$cat_id])->order('id desc')->paginate($limit);
        // $lists=CaseServe::where([])->order('id asc')->select();
        return $lists;
    }

     /*数据查询*/
    public static function lists($cat_id=1,$limit=20){
    $lists=CaseServe::where(["is_show"=>1])->order('id desc')->paginate($limit);     
        return $lists;
    }


    /*删除数据*/
    public static function dels($id){
        $info=CaseServe::where(["id"=>$id])->delete();
        if ($info) {
            return true;
        }else{
            return false;
        }
    }

    /*查询一条数据*/
    public static function finds($id){
        $info=CaseServe::where(["id"=>$id])->find();
        return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$id){
       if( $file = request()->file('image')){      
        // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
               $data['image']=$info->getSaveName();
            //dump($data);exit();          
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            } 

        } 
        $info=CaseServe::where(["id"=>$id])->update($data);
        if ($info) {
            return true;
        }
    }

   

}