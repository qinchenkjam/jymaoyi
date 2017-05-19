<?php
namespace app\admin\controller;
use think\Request;
use think\Db;
class ProductCate extends Base
{
    public function _initialize()
    {           
        //$Tree = new \util\Tree;
        $Tree = new \util\Tree;
        $list=\app\common\model\ProductCate::lists(2);           
        $list=$Tree->tree($list);
        //dump($list);exit; 
        $this->assign("proCate",$list);
       
    }

    public function index()
    {   
        
      return $this->fetch('product/cate_index');
    }

     public function cateAdd()
    {
        
        if (Request::instance()->isPost()) {
           $data=input('post.');
           $inserts=\app\common\model\ProductCate::insert($data);
           if($inserts){
            //行为记录
            action_log('add_product_cat', 'product', $inserts, session('aid'));
                return $this->success('添加成功');
                //return $this->success('添加成功',url('Product/cateIndex'));
            }else{

                $this->error('添加失败');
            }
        }      
       //dump($list);exit;
    	return $this->fetch('product/cate_add');
    }

    public function cateEdit($id)
    {     
       if(request()->isPost()){ 
        $data=[];          
        $data['cat_name']=input('post.cat_name');
        //$data=Request::instance()->post();
         $id=input("param.cat_id");
         //dump($data);exit();
         $list=\app\common\model\ProductCate::is_exist($data);
        //var_dump($list);exit();
          if(!empty($list)){         
              $this->error('分类已存在');            
          }
        $edit=\app\common\model\ProductCate::updatemsgs($data,$id);
      
         
        }else{
          $id=input("get.id");     
          $msg=\app\common\model\ProductCate::finds($id);        
          $this->assign('msg', $msg);
          return $this->fetch('product/cate_edit');
        }
    }


    public function cateDel($cid)
    {
    	//$cid=input("get.cid");
    	//dump($cid);exit;
        $list=\app\common\model\Product::has_data($cid);
        //var_dump($list);exit();
        if(!empty($list)){
            //exit('<script>alert("分类下有内容");</script>');
            $this->error('分类下有内容');            
        }
        $res=\app\common\model\ProductCate::dels($cid);
        if($res){         
          action_log('del_product_cat', 'product', $cid, session('aid'));
          $this->success('删除成功');
          //echo '<script>alert("删除成功");</script>';
        }      
    }
}