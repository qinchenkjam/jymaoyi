<?php
namespace app\mobile\controller;
use think\Cache;

class Pages extends Base
{
   public function index($id)
   {
     
     $m_page_list=\app\common\model\Page::lists();
     $m_page_list=Cache::get('$m_page_list');
		if($m_page_list==false){
			$m_page_list=\app\common\model\Page::lists(); 
			Cache::set('m_page_list',$m_page_list);
		}  
     $id=get_urlid();
   	 $page=\app\common\model\Page::finds($id);
   	 $this->assign('m_page_list', $m_page_list);
   	 $this->assign('page',$page);
   	 return $this->fetch();
   }
   
}