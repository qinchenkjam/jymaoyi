<?php
namespace app\common\model;
use think\Model;
class Banner extends Model
{
	/*新增*/
    public static function inserts($data)
    {
    	 
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
           $data['show_img']=$info->getSaveName();               
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
                 
        $check = Banner::create($data);
    	if ($check) {
    		return true;
    	}else{
    		return false;
    	}
    }


    /*数据查询*/
    public static function lists($limit=10){
        $lists=Banner::where(["is_show"=>1])->order('id asc')->paginate($limit);
    	// $lists=Banner::where([])->order('id asc')->select();
        return $lists;
    }


    /*删除数据*/
    public static function dels($id){
      
        $res=Banner::where(["id"=>$id])->delete();
        return $res;
        
    }



    /*查询一条数据*/
    public static function finds($id){
    	$info=Banner::where(["id"=>$id])->find();
    	return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$id){
    	// dump($data);
        if( $file = request()->file('image')){      
        // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
               $data['show_img']=$info->getSaveName();
            //dump($data);exit();          
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            } 

        } 
        
    	$info=Banner::where(["id"=>$id])->update($data);
    	if ($info) {
    		return true;
    	}
    }

   
    
}
