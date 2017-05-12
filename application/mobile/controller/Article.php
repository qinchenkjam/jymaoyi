<?php
namespace app\mobile\controller;
class Article extends Base
{
   
    public function lists()
    {
        
        $cid=get_urlid(); 
       
        //dump($cid);exit;  
        if($cid>0){
            $list = \app\common\model\Article::clist($cid,4);
          
        }else{
            $list = \app\common\model\Article::lists(4);

        }
        
    	$ArticleCate=\app\common\model\ArticleCate::lists(4);
        $this->assign('ArticleCate', $ArticleCate); 

    	$this->assign('list', $list);       
		return $this->fetch();
       
    }

    public function ajax_data(){
        $cid=input('get.');
        if ($cid) {
                $res=['status' => 1, 'msg' => '添加成功'];

                
                echo json_encode($res);exit();
        }

     }


    public function detail($id)
    {   
       
        $id=input("get.id"); 
        //dump($id);exit;         
        $msg=\app\common\model\Article::finds($id);  
        $this->assign('msg', $msg);	
         
        $cid=get_urlid();
    
        $t_article=\app\common\model\Article::getDataById($cid);
        //dump($t_article['prev']['content']);exit;
		$this->assign('t_article', $t_article);
        
        $ArticleCate=\app\common\model\ArticleCate::lists(4);
        $this->assign('ArticleCate', $ArticleCate); 
       return $this->fetch();
    }

    
}