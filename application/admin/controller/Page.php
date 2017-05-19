<?php
namespace app\admin\controller;

use app\common\model\Page as PageModel;  //别名避免冲突 
class Page extends Base
{
    protected $obj;
    public function _initialize(){
   
        $this->obj = new PageModel();
    }

    public function index(){
      
        $list=$this->obj->lists();
        //dump($list);exit();
        $this->assign('list', $list);
        return $this->fetch();
    }

     public function edit($id=0){      
        $id=input('param.id');
        //dump($id);exit();        
        $msg=\app\common\model\Page::finds($id); 
        $this->assign("msg",$msg);
        return $this->fetch();
    }

     public function save(){
        $data = input('post.');
        $id=input('param.id');
         //dump($id);exit();
            if($id>0){
               $result= $this->obj->updatemsgs($data,$id);
            } else {
              $result=\app\common\model\Page::inserts($data);
               action_log('add_page', 'page', $result, session('aid'));
            }
            if(false !== $result){
                $this->success('保存信息成功','admin/page/index');
            }

     }

     public function removeinfo($id)
    {  
        $res=$this->obj->where('id',input('get.id'))->delete();
        //dump($res);exit();
        if(false !== $res){
            action_log('del_page', 'page', $id, session('aid'));
            $data = [
                'status' => 0,
                'msg' => '删除成功！',
            ];
        }else {
            $data = [
                'status' => 1,
                'msg' => '删除失败！',
            ];
        }
        echo json_encode($data);
    }

}
