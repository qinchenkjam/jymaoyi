<?php
namespace app\index\controller;


class Pages extends Base
{
   public function index($id)
   {
     //$id=input("get.id");
     $id=get_urlid();
   	 $page=\app\common\model\Page::finds($id);
   	 $pageList=\app\common\model\Page::lists();
   	 $this->assign('pageList',$pageList);
   	 $this->assign('page',$page);
   	 return $this->fetch();
   }
   
}