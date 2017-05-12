<?php
namespace app\index\controller;
class Product extends Base
{
  public function index()
  {
    
    	
    return $this->fetch();
  }



  public function product_show($id)
  {
    
    $id=get_urlid();
    //dump($id);exit;
   	$pro=\app\common\model\Product::finds($id);  
    $this->assign("pro",$pro);    

    //上下文
    $relateData=\app\common\model\Product::getDataById($id);
    //dump($relateData['next']['id']);exit();
    $this->assign('prveId',$relateData['prev']['id']);
    $this->assign('nextId',$relateData['next']['id']);
    $this->assign('relateData', $relateData);
    return $this->fetch();
  }
}