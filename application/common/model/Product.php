<?php
namespace app\common\model;
use think\Model;
class Product extends Model
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
            
        //$data['content']=input('post.editorValue');
        $check = Product::create($data);
    	if ($check) {
    		return true;
    	}else{
    		return false;
    	}
    }


    /*数据查询*/
    public static function lists($map,$limit=12){
        $lists=Product::alias('a')->join('__PRODUCT_CATE__ b ','b.cat_id= a.cat_id')->where($map)->order(['sorts'=>'desc','id'=>'desc'])->paginate($limit);
    	// $lists=Product::where([])->order('id asc')->select();
        return $lists;
    }

    /*分类id数据查询*/
    public static function k_lists($cat_id,$limit=12){
        //$lists=Product::where(["is_show"=>1,'cat_id'=>$cid])->alias('a')->join('__PRODUCT_CATE__ b ','b.cat_id= a.cat_id')->order('id asc')->paginate($limit);
         $lists=Product::where(["is_show"=>1,'cat_id'=>$cat_id])->order(['sorts'=>'desc','id'=>'desc'])->paginate($limit);
        return $lists;
    }


    /*删除数据*/
    public static function dels($map){
    	//$info=Product::where(["id"=>$id])->delete();
        $info=Product::where($map)->delete();
    	if ($info) {
    		return true;
    	}else{
    		return false;
    	}
    }

    /*查询一条数据*/
    public static function finds($id){
    	$info=Product::where(["id"=>$id])->find();
    	return $info;
    }

    /*查询分类下是否有数据*/
    public static function has_data($cid){
        $info=Product::where(["cat_id"=>$cid])->limit(1)->select();
        return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$id){
    	// dump($data);
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
        
    	$info=Product::where(["id"=>$id])->update($data);
    	if ($info) {
    		return true;
    	}
    }

    public function profile()
    {
        return $this->hasOne('Profile','uid')->bind('nickname,email');
    }


    /**
     * 推荐
     */
    public static function is_recommends($limit=10)
    {
        $is_recommend=Product::where(["is_show"=>1,"is_recommend"=>1])->alias('a')->join('__PRODUCT_CATE__ b ','b.cat_id= a.cat_id')->order('id asc')->paginate($limit);     
        //dump($is_recommend);exit;
        return $is_recommend;
    }
    
    /*查找上下文*/
    public static function getDataById($id=0){
       /* $prev_map['aid']=;
        $next_map['aid']=;*/      
        $info['prev']=Product::where('id','<',$id)->order('id desc')->limit(1)->find();
       // $info['next']=Article::where(['id','<',$id])->limit(1)->find();
        $info['next']=Product::where('id','>',$id)->limit(1)->find();
        return $info;
    }
}
