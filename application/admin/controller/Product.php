<?php
namespace app\admin\controller;
use think\Request;
use think\Db;
class Product extends Base
{
    public function _initialize()
    {           
        //$Tree = new \util\Tree;
        $Tree = new \util\Tree;
        $list=\app\common\model\ProductCate::lists();           
        $list=$Tree->tree($list);
        //dump($list);exit; 
        $this->assign("proCate",$list);
       
    }
    /*显示*/
    public function index()
    {
        $map  = [];
        if(request()->isPost()){
          $data=input('post.');
          $keyword=input('post.name');
          $Catid=intval(input('param.cid')); //input('param.cat_id') 只能post
          $sTime=strtotime(input("post.dateStart"));
          $dTime=strtotime(input("post.dateEnd")); 
          //dump($data);exit;
        }
         //按关键词显示
        if (!empty($keyword)) {
            $map['name'] = ['like', "%{$keyword}%"];
            //dump($map['title']);exit;
        }       
        //按分类显示     
        if(!empty($Catid)){         
            $map['a.cat_id'] =['EQ',$Catid];  //数据库是数字
            //dump($map['cid']);exit;
        }
        
        //按时间显示     
        if(!empty($sTime)){         
            $map['add_time'] = ['gt',$sTime];//查询条件

        }
        if(!empty($dTime)){         
            $map['add_time'] = ['lt',$dTime];//查询条件
        }
    	$list=\app\common\model\Product::lists($map,10);
    	//dump($list);exit;
    	$this->assign("list",$list);   	
        return $this->fetch();
    }

    /*新增*/
    public function add()
    {
    	if (Request::instance()->isPost()) {     
    	    $data=[];
            $data['content']=input('post.editorValue');
            $data['add_time']=time();          
            $data=input('post.');
            //获取全部的post变量
            //dump($data);exit;
    		$insert=\app\common\model\Product::inserts($data);
    		if ($insert) {
                action_log('add_product', 'product', $insert, session('aid'));  			
    			$this->success("操作成功","admin/product/index");
    		}else{
    			$this->error("操作失败");
    		}
    		  
    	}
    	return $this->fetch();
    }

   
    

   /*更新数据*/
    public function edit($id)
    {
        $msg=\app\common\model\Product::finds($id);
        $img=$msg['image']; //用于修改时删除
        //dump($img);exit();
        $this->assign("msg",$msg);
        if (Request::instance()->isPost()) {
            $data=Request::instance()->post();
            // dump($data);
            $edit=\app\common\model\Product::updatemsgs($data,$id);
            if ($edit){
                $img=UPLODS.$msg['image'];
                //dump($img);exit();
                if(file_exists($img)){
                   unlink($img);
                }
                 action_log('edit_product', 'product',$edit, session('aid'));              
                $this->success("更新成功","admin/product/index",1);
            }else{
                 $this->error('操作失败');
            }

        }else{

            return $this->fetch();
        }
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
     	$res=\app\common\model\Product::dels($map);    
        if($res){
          //unlink("./Uploads/".$data['__HOME__/__HOME__/images']);
          //行为记录 
          if(is_array($ids)){
             $ids=implode(",",$ids);
          }
          action_log('del_product', 'product', $ids, session('aid'));
          $this->success('删除成功',url('index'),'1');
        }else{
          $this->error('删除失败');
        }
    }
   
    //更新点击
    public function updateHits(){
    $id=input('get.id',0,'int');  
    $edit=Db::table('tp_product')->where('id',$id)->setInc('hit');
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