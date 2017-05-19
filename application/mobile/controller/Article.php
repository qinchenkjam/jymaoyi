<?php
namespace app\mobile\controller;
use think\Cache;
class Article extends Base
{
   
    public function index()
    {
        
        $cid=get_urlid(); 
       
        //dump($cid);exit;  
        if($cid>0){
            $m_ar_list = \app\common\model\Article::clist($cid,4);
          
        }else{
            $m_ar_list = \app\common\model\Article::lists(4);
            Cache::set('m_ar_list',$m_ar_list);
        }
        
    	$this->assign('list',$m_ar_list);       
		return $this->fetch();
       
    }


    public function detail($id)
    {   
       
        $id=input("get.id"); 
        //dump($id);exit;         
        $msg=\app\common\model\Article::finds($id);  
        $this->assign('msg', $msg);	

        $relateData=\app\common\model\Article::getDataById($id);  
        $this->assign('prveId',$relateData['prev']['id']);
        $this->assign('nextId',$relateData['next']['id']);
        $this->assign('relateData', $relateData);
        
      
       return $this->fetch();
    }

    
}