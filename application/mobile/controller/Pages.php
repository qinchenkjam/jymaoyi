<?php
namespace app\mobile\controller;


class Pages extends Base
{
   public function index($id)
   {
     //$id=input("get.id");
     $id=get_urlid();
   	 $page=\app\common\model\Page::finds($id);
   	 $this->assign('page',$page);
   	 return $this->fetch();
   }
   
}