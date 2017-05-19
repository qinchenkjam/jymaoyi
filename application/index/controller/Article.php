<?php
namespace app\index\controller;
use think\Cache;
class Article extends Base
{
   
    public function lists()
    {
        
        $cid=get_urlid();   
        if($cid>0){
            $ar_list = \app\common\model\Article::calist($cid,12);
          //dump($ar_list);exit();
        }else{
            $ar_list = \app\common\model\Article::lists(12);
            Cache::set('ar_list',$ar_list);
        }     
    	$this->assign('ar_list', $ar_list);       
		return $this->fetch();
       
    }


    public function detail($id)
    {   
       
        //$id=input("get.id"); 无法获取
        $id=get_urlid(); 
        //dump($id);exit;         
        $msg=\app\common\model\Article::finds($id);  
        $this->assign('msg', $msg);	                 
        $relateData=\app\common\model\Article::getDataById($id);

        //dump($relateData['prev']['title']);exit;
    	$this->assign('prveId',$relateData['prev']['id']);
        $this->assign('nextId',$relateData['next']['id']);
        $this->assign('relateData', $relateData);                
        return $this->fetch();
    }

    
}