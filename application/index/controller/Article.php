<?php
namespace app\index\controller;
use think\Db;
use think\Request;
class Article extends Base
{
   
    public function lists()
    {
        
        $cid=get_urlid();   
        if($cid>0){
            $list = \app\common\model\Article::clist($cid,4);
          
        }else{
            $list = \app\common\model\Article::lists(4);

        }
    	$ArticleCate=\app\common\model\ArticleCate::lists(4);
        $this->assign('ArticleCate', $ArticleCate); 

    	$this->assign('list', $list);       
		return $this->fetch();
       
    }


    public function detail($id)
    {   
       
        //$id=input("get.id"); 无法获取
        $id=get_urlid(); 
        //dump($id);exit;         
        $msg=\app\common\model\Article::finds($id);  
        $this->assign('msg', $msg);	
                  
        $t_article=\app\common\model\Article::getDataById($id);
        //dump($t_article['prev']['content']);exit;
		$this->assign('t_article', $t_article);
        
        $ArticleCate=\app\common\model\ArticleCate::lists(4);
        $this->assign('ArticleCate', $ArticleCate); 
       return $this->fetch();
    }

    
}