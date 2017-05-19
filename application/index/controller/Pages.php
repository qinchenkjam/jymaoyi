<?php
namespace app\index\controller;
use think\Cache;

class Pages extends Base
{
   public function index($id)
   {
     //$id=input("get.id");
     $id=get_urlid();
   	 $page=\app\common\model\Page::finds($id);

     $pageList=Cache::get('pageList');
     if($pageList==false){
      $pageList=\app\common\model\Page::lists();
      Cache::set('pageList',$pageList);
     }
   	 $this->assign('pageList',$pageList);
   	 $this->assign('page',$page);
   	 return $this->fetch();
   }
   
}