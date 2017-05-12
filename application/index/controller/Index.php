<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        // 如果是手机跳转到 手机模块
        if(true == isMobile()){
            header("Location: ".url('Mobile/Index/index'));
        }
    	$Banner=\app\common\model\Banner::lists(10);

    	$pro_list=\app\common\model\Product::lists(10);
    	$pro_recommend=\app\common\model\Product::is_recommends(10);

        $about=\app\common\model\Page::finds(1); //关于我们
        $about['content']=strip_tags($about['content']); //过滤html标签
        $about['content']=getSubstr($about['content'],0,200);

        $new_list=\app\common\model\Article::clist(1);
        $cnew_list=\app\common\model\Article::clist(2);


        //dump($new_list);exit;
        $this->assign("Banner",$Banner);
    	
    	$this->assign("pro_list",$pro_list);
        $this->assign("about",$about);
        $this->assign("pro_recommend",$pro_recommend);
        return $this->fetch();
    }
}
