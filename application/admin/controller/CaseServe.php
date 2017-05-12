<?php
namespace app\admin\controller;
use think\Request;
use think\Db;
class CaseServe extends Base
{
    public function _initialize()
    {                
   
       
    }

    public function index()
    {   

      $list=\app\common\model\CaseServe::lists();   
      //dump($list);exit;
      $this->assign("list",$list);
      return $this->fetch('service/index');
    }

     public function add()
    {
        
        if (Request::instance()->isPost()) {
           $data=input('post.');
           $inserts=\app\common\model\CaseServe::inserts($data);
           if($inserts){
               // return $this->success('添加成功','admin/CaseServe/index');
            return $this->success('添加成功','CaseServe/index');
            }else{

                $this->error('添加失败');
            }
        }      
       //dump($list);exit;
    	return $this->fetch('service/add');
    }

    public function edit($id)
    {
      
       $msg=\app\common\model\CaseServe::finds($id);
        $img=$msg['image']; //用于修改时删除
        //dump($img);exit();
        $this->assign("msg",$msg);
        if (Request::instance()->isPost()) {
            $data=Request::instance()->post();
            // dump($data);
            $edit=\app\common\model\CaseServe::updatemsgs($data,$id);
            if ($edit){
                $img=UPLODS.$msg['image'];
                //dump($img);exit();
                if(file_exists($img)){
                   unlink($img);
                }
                              
              $this->success("更新成功","admin/CaseServe/index");
            }else{
                 $this->error('操作失败');
            }

        }else{

            return $this->fetch('service/edit');
        }
    }
    


    public function del($id)
    {  	

        $res=\app\common\model\CaseServe::dels($id);
        if($res){        
          $this->success('删除成功');       
        }      
    }


    //更新点击
    public function updateHits(){
    $id=input('get.id',0,'int');  
    $edit=Db::table('tp_case_serve')->where('id',$id)->setInc('hit');
    //dump($edit);exit(); 
    if($edit){
                $res=['status' => 1, 'msg' => '操作成功'];
                echo json_encode($res);exit();
                
            }else{
            
                $res=['status' => -1, 'msg' => '操作失败'];
                echo json_encode($res);exit();  
            }     
     }
}