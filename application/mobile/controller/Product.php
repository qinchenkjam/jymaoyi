<?php
namespace app\mobile\controller;
class Product extends Base
{
  public function index()
  {
     
    return $this->fetch();
  }



  public function detail($id)
  {
    
    $id=get_urlid();
   	$pro=\app\common\model\Product::finds($id);
  
    $this->assign("pro",$pro); 
    return $this->fetch();
  }
}