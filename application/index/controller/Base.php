<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Cache;
class Base extends controller
{
	 protected function _initialize() {
		parent::_initialize();
		//$webConfig=\app\common\model\Config::lists();
		$webConfig=Cache::get('webConfig');
		if($webConfig==false){
			$webConfig= Db::name('config')->column('value','name');
			Cache::set('webConfig',$webConfig);
		}
		//dump($webConfig);exit();  
		$FriendLink=Cache::get('FriendLink');
		if($FriendLink==false){
			$FriendLink=\app\common\model\FriendLink::lists(10);
			Cache::set('FriendLink',$FriendLink);
			//dump(Cache::get('FriendLink'));exit();
		}
		
        //顶级产品分类
       $pro_cate=Cache::get('pro_cate');
       if($pro_cate==false){
        	$pro_cate=\app\common\model\ProductCate::topList();
        	Cache::set('pro_cate',$pro_cate);
        	//dump(Cache::get('pro_cate'));exit();
        }					
			
		$cid=get_urlid();
		//dump($cid);exit();
		/*if(!is_numeric($cid)){
			//echo "string";exit();
			$pro_list=Cache::get('pro_list');
			if($pro_list==false){
				$pro_list=\app\common\model\Product::lists(12);
				Cache::set('pro_list',$pro_list);
			}
		}  
		if($cid>0){
            Cache::rm('pro_list'); 
			$pro_list=\app\common\model\Product::k_lists($cid,12); 
		}*/

		if($cid>0){         
	      $pro_list=\app\common\model\Product::k_lists($cid,12);     
	    }else{      
	      $pro_list=\app\common\model\Product::lists(12);
	      Cache::set('pro_list',$pro_list);
	    }

	    //文字列表数据
		$new_list=Cache::get('new_list');
		if($new_list==false){
			$new_list=\app\common\model\Article::clist(); 
			Cache::set('new_list',$new_list);
		}
	    
	    //文章分类
	    $ArticleCate=Cache::get('ArticleCate');
		if($ArticleCate==false){
			$ArticleCate=\app\common\model\ArticleCate::lists(4);
			Cache::set('ArticleCate',$ArticleCate);
		}
	    
       
	   
		$this->assign('webConfig',$webConfig);
	    $this->assign("pro_list",$pro_list); 
	    $this->assign("pro_cate",$pro_cate); 	 
        $this->assign("new_list",$new_list);
        $this->assign("FriendLink",$FriendLink);
        $this->assign('ArticleCate', $ArticleCate);
        
	}

	public function news_left(){		

		return $this->fetch('public/news_left');
	}
}