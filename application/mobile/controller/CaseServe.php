<?php
namespace app\mobile\controller;
class CaseServe extends Base
{
   protected function _initialize() {
    parent::_initialize();

  }
   public function index($id)
   {
     $id=get_urlid();
     $serveList=\app\common\model\CaseServe::clists($id,12);
     //dump($serveList);exit();
      $serveTitle='Technical service';
     if ($id==2) {
        $serveTitle='Agents';
     } else if($id==3) {
        $serveTitle='PMU training';
     }

     $this->assign('serveTitle',$serveTitle);   
     $this->assign('serveList',$serveList);   
     return $this->fetch('service/index');
   }
       
    public function detail($id)
  {
    
    $id=get_urlid();
    //dump($id);exit;
    $pro=\app\common\model\CaseServe::finds($id);  
    $this->assign("pro",$pro); 
    return $this->fetch('service/detail');
  }
}