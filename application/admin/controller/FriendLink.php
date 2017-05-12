<?php
namespace app\admin\controller;

use think\Request;
/**
 * 友情链接 参照tpshop
 */
class FriendLink extends Base
{
     
    public function _initialize()
    {       	
        
       
    }
   /*显示*/
    public function index()
    {
        $list=\app\common\model\FriendLink::lists(2);
        //dump($list);exit;
        $this->assign("list",$list);    
        return $this->fetch();
    }

   
    /*编辑页面*/
    public function edit($id=0){
    $id=input('param.id');                   
    $msg=\app\common\model\FriendLink::finds($id);
            
       
    $this->assign("msg",$msg);
    return $this->fetch();
    }

    public function save(){
        $data = input('post.');
        $id=input('param.id');
         //dump($id);exit();
            if($id>0){
               $result=\app\common\model\FriendLink::updatemsgs($data,$id);
            } else {
              $result=\app\common\model\FriendLink::inserts($data);
            }
            if(false !== $result){
                $this->success('保存信息成功','admin/FriendLink/index');
            }

     }

     public function removeinfo($id)
    {  
        \app\common\model\FriendLink::dels($id);
        //dump($res);exit();
       
    }


     public function update_status()
    { 
        
        $is_show = input('param.sid');
        $id=input('param.id');
        $re=\app\common\model\FriendLink::update_status($id,$is_show);
        //dump($res);exit();
            if($re){
                $res=['status' => 1, 'msg' => '操作成功'];
                echo json_encode($res);exit();
                
            }else{
            
                $res=['status' => -1, 'msg' => '操作失败'];
                echo json_encode($res);exit();  
            }
       
    }

}