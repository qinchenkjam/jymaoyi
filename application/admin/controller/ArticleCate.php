<?php
namespace app\admin\controller;
use think\Request;
use think\Db;
class ArticleCate extends Base
{
    public function _initialize()
    {                
        $Tree = new \util\Tree;
        $list=\app\common\model\ArticleCate::lists(20);           
        $list=$Tree->tree($list);
        //dump($list);exit; 
        $this->assign("list",$list);
       
    }

    public function index()
    {   
        
      return $this->fetch('article/cate_index');
    }

     public function cateAdd()
    {
        
        if (Request::instance()->isPost()) {
           $data=input('post.');
           $inserts=\app\common\model\ArticleCate::inserts($data);
           if($inserts){
             action_log('add_article_cat', 'article', $inserts, session('aid'));
                return $this->success('添加成功','admin/ArticleCate/index');
                //return $this->success('添加成功',url('article/cate_index'));
            }else{

                $this->error('添加失败');
            }
        }      
       //dump($list);exit;
    	return $this->fetch('article/cate_add');
    }

    public function cateEdit($id)
    {
      
       if(request()->isPost()){           
        $data=input('post.cat_name');
        $id=input("param.cat_id");
       //dump($data);exit;
         $list=\app\common\model\ArticleCate::is_exist($data);
        //var_dump($list);exit();
          if(!empty($list)){         
              $this->error('分类已存在');            
          }
        $edit=\app\common\model\ArticleCate::updatemsgs($data,$id);
      
         
        }else{
          $id=input("get.id");     
          $msg=\app\common\model\ArticleCate::finds($id);           
          $this->assign('msg', $msg);
          return $this->fetch('article/cate_edit');
        }
    }
    


    public function cateDel($cid)
    {
    	//$cid=input("get.cid");
    	//dump($cid);exit;
        $list=\app\common\model\Article::has_data($cid);
      //var_dump($list);exit();
        if(!empty($list)){         
            $this->error('分类下有内容');            
        }
        $res=\app\common\model\ArticleCate::dels($cid);
        if($res){
          //行为记录
            action_log('del_article_cat', 'article', $cid, session('aid'));
          $this->success('删除成功');       
        }      
    }
}