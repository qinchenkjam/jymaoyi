<?php
namespace app\mobile\controller;

class Index extends Base
{
    public function index()
    {
    	$Banner=\app\common\model\Banner::lists(10);

    	$pro_list=\app\common\model\Product::lists(10);
    	

        $about=\app\common\model\Page::finds(1); //关于我们
        $about['content']=strip_tags($about['content']); //过滤html标签
        $about['content']=getSubstr($about['content'],0,200);

        $new_list=\app\common\model\Article::clist(1);
        $cnew_list=\app\common\model\Article::clist(2);


        //dump($new_list);exit;
        $this->assign("Banner",$Banner);
    	
    	$this->assign("pro_list",$pro_list);
        $this->assign("about",$about);
       
        return $this->fetch();
    }
}
