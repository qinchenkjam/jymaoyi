<?php
namespace app\mobile\controller;
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
		if($cid>0){         
	      $m_pro_list=\app\common\model\Product::k_lists($cid,6);     
	    }else{      
	      $m_pro_list=\app\common\model\Product::lists(6);
	      Cache::set('m_pro_list',$m_pro_list);
	    }
		
	    //文字列表数据
		$m_new_list=Cache::get('m_new_list');
		if($m_new_list==false){
			$m_new_list=\app\common\model\Article::clist(); 
			Cache::set('m_new_list',$m_new_list);
		}
	    
	    //文章分类
	    $ArticleCate=Cache::get('ArticleCate');
		if($ArticleCate==false){
			$ArticleCate=\app\common\model\ArticleCate::lists(4);
			Cache::set('ArticleCate',$ArticleCate);
		}
	    
       
	   
		$this->assign('webConfig',$webConfig);
	    $this->assign("pro_list",$m_pro_list); 
	    $this->assign("pro_cate",$pro_cate); 	 
        $this->assign("new_list",$m_new_list);
        $this->assign("FriendLink",$FriendLink);
        $this->assign('ArticleCate', $ArticleCate);

	}
}