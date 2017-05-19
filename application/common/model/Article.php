<?php
namespace app\common\model;
use think\Model;

class Article extends Model
{
	// 设置当前模型对应的完整数据表名称
    //protected $table = 'tp_article';
    // 定义时间戳字段名
    //protected $createTime = 'add_time';

   /* public function profile()
    {
        return $this->hasOne('ArticleCate');
    }*/

     /*新增*/
    public static function inserts($data)
    {
    	$check = Article::create($data);
    	if ($check) {
    		return true;
    	}else{
    		return false;
    	}
    }
  
    /*数据查询*/
    public static function lists($map,$limit=10){    
        //$map['is_show']=1;

        //$lists=Article::where(["is_show"=>1])->alias('a')->join('__ARTICLE_CATE__ b ','b.cat_id= a.cat_id')->order('id asc')->paginate($limit);
       $lists=Article::where($map)->alias('a')->join('__ARTICLE_CATE__ b ','b.cat_id= a.cat_id')->order('id desc')->paginate($limit);    	
        return $lists;
    }

    /*数据分类查询*/
    public static function calist($cat_id,$limit=10){
        $lists=Article::where(['cat_id'=>$cat_id])->order('sort desc')->paginate($limit);
    	// $lists=Article::where([])->order('id asc')->select();
        return $lists;
    }

    /*数据分类查询*/
    public static function clist($limit=10){
        $lists=Article::where([])->order('sort desc')->paginate($limit);
        // $lists=Article::where([])->order('id asc')->select();
        return $lists;
    }


    /*删除一条数据*/
    public static function dels($id){
    	$res=Article::where(["id"=>$id])->delete();
    	return $res;
    }

    /*删除数据*/
    public static function del_all($map){
        //$info=Product::where(["id"=>$id])->delete();
        $info=Article::where($map)->delete();
        if ($info) {
            return true;
        }else{
            return false;
        }
    }

    /*查询一条数据*/
    public static function finds($id){
    	$info=Article::where(["id"=>$id])->find();
    	return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$id){
    	// dump($data);
    	$info=Article::where(["id"=>$id])->update($data);   	
    	return $info;
    	
    }

    /*查询分类下是否有数据*/
    public static function has_data($cat_id){
        $info=Article::where(["cat_id"=>$cat_id])->limit(1)->select();
        return $info;
    }

    /*查找上下文*/
    public static function getDataById($id=0){
       /* $prev_map['aid']=;
        $next_map['aid']=;*/      
        $info['prev']=Article::where('id','<',$id)->order('id desc')->limit(1)->find();
       // $info['next']=Article::where(['id','<',$id])->limit(1)->find();
        $info['next']=Article::where('id','>',$id)->limit(1)->find();
        return $info;
    }
    
}