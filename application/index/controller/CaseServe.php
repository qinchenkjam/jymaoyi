<?php
namespace app\index\controller;


class CaseServe extends Base
{
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
     Cache::set('serveTitle',$serveTitle);
        }
     $this->assign('serveList',$serveList);
     $this->assign('serveTitle',$serveTitle);
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