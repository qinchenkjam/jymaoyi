<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Base extends controller
{
	 protected function _initialize() {
		parent::_initialize();
		//$webConfig=\app\common\model\Config::lists();
		
		$webConfig= Db::name('config')->column('value','name');
		$FriendLink=\app\common\model\FriendLink::lists(10);
		$this->assign("FriendLink",$FriendLink);
		$this->assign('webConfig',$webConfig);

        //顶级产品分类
		$pro_cate=\app\common\model\ProductCate::topList(); 	    
	    $cid=get_urlid(); 
	    if($cid>0){         
	      $pro_list=\app\common\model\Product::k_lists($cid,12);     
	    }else{      
	      $pro_list=\app\common\model\Product::lists(12);
	    
	    }
	    $this->assign("pro_list",$pro_list); 
	    $this->assign("pro_cate",$pro_cate); 
	    $new_list=\app\common\model\Article::clist();     
        $this->assign("new_list",$new_list);
        
	}

	public function news_left(){		

		return $this->fetch('public/news_left');
	}

	public function _empty($name)
    {
        //把所有城市的操作解析到city方法
        return  $this->fetch('public/404');
    }
}