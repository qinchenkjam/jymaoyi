<?php
namespace app\admin\controller;

use think\Request;
//use think\Db;
class Banner extends Base
{
     
    public function _initialize()
    {       	
      
       
    }

    /*显示*/
    public function index()
    {
        $list=\app\common\model\Banner::lists(10);
        //dump($list);exit;
        $this->assign("list",$list);    
        return $this->fetch();
    }

    /*新增*/
    public function add()
    {
        if (Request::instance()->isPost()) {                     
            //$data=Request::instance()->post();
            $data=input('post.');
            //获取全部的post变量
            //dump($data);exit;
            $insert=\app\common\model\Banner::inserts($data);
            if ($insert) {
                $this->success("新增成功","admin/Banner/index");
            }
        }
        return $this->fetch();
    }
  
   /*更新数据*/
    public function edit($id)
    {
        $msg=\app\common\model\Banner::finds($id);    
        $this->assign("msg",$msg);
        if (Request::instance()->isPost()) {
            $data=Request::instance()->post();
            // dump($data);
            $edit=\app\common\model\Banner::updatemsgs($data,$id);
            if ($edit){
               /* $img=UPLODS.$msg['image'];
                dump($img);exit();
                if(file_exists($img)){
                   unlink($img);
                }  */            
                $this->success("更新成功","admin/Banner/index");
            }
        }else{

            return $this->fetch();
        }
    }

     public function removeinfo($id)
    {  
       
        $del=\app\common\model\Banner::dels($id);
        //dump($res);exit();
        if(false !== $del){
            action_log('del_banner', 'baner', $id, session('aid'));
            $res=['status' => 1, 'msg' => '操作成功'];
            echo json_encode($res);exit();
        }else {
            $res=['status' => -1, 'msg' => '操作失败'];
            echo json_encode($res);exit();
        }
       
    }
}