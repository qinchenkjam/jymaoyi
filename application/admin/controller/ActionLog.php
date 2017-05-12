<?php
namespace app\admin\controller;
use think\Db;
class ActionLog extends Base
{
	//首页
	public function index(){
			  
	    $map['status']    =   array('gt', -1);
        $list   = Db::name('action_log')->order('create_time desc')->paginate(10);      
        $this->assign('list', $list);
        $this->meta_title = '行为日志';
    	return $this->fetch('system/log_index');
	}

	/**
     * 删除
    */
    public function del(){    	    		
	    if(request()->isPost()){
	    	 $ids=input('param.','int');
	    	 //dump($ids);exit();
	    	 foreach ($ids as $key => $value) {
	    	 	$ids= $value; 	 		
	    	 }	
	    	  //dump($ids);exit();   	 	
    		 $map['id'] = ['in',$ids];
	    }
	    if(request()->isGet()){
	    	 $ids=input('get.id',0,'int');	
    		 $map['id'] = $ids;
	    }	     	
     	$res=Db::name('action_log')->where($map)->delete();;    
        if($res){
          //unlink("./Uploads/".$data['__HOME__/__HOME__/images']);
          //行为记录 
          action_log('del_product', 'product', $res, session('aid'));
          $this->success('删除成功',url('index'),'1');
        }else{
          $this->error('删除失败');
        }
    }


    public function map_del(){
      $map  = [];
      $sTime=strtotime(input("post.dateStart"));
      $dTime=strtotime(input("post.dateEnd")); 
       //按时间    
        if(!empty($sTime)){     
          $map['create_time'] = ['gt',$sTime];//查询条件

        }
        if(!empty($dTime)){     
          $map['create_time'] = ['lt',$dTime];//查询条件
        }
      $res=Db::name('action_log')->where($map)->delete();
       if($res){
        
          $this->success('删除成功',url('index'));
        }else{
          $this->error('删除失败');
        }

    }
}