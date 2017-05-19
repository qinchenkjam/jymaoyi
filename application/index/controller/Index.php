<?php
namespace app\index\controller;
use think\Cache;
class Index extends Base
{
    public function index()
    {
        // 如果是手机跳转到 手机模块
        if(true == isMobile()){
            header("Location: ".url('Mobile/Index/index'));
        }

        $Banner=Cache::get('Banner');
        if($Banner==false){
            $Banner=\app\common\model\Banner::lists(6);
            Cache::set('Banner',$Banner);
        }
    	
        $pro_recommend=Cache::get('pro_recommend');
        if($pro_recommend==false){
           $pro_recommend=\app\common\model\Product::is_recommends(12);
            Cache::set('pro_recommend',$pro_recommend);
        }
    	//dump(Cache::get('pro_recommend'));exit();

        $about=Cache::get('about');
        if($about==false){
            $about=\app\common\model\Page::finds(1); //关于我们
            $about['content']=strip_tags($about['content']); //过滤html标签
            $about['content']=getSubstr($about['content'],0,200);
            Cache::set('about',$about);
        }
        

        $new_list=\app\common\model\Article::clist(1);
        $cnew_list=\app\common\model\Article::clist(2);


        //dump($new_list);exit;
        $this->assign("Banner",$Banner);    	   
        $this->assign("about",$about);
        $this->assign("pro_recommend",$pro_recommend);
        return $this->fetch();
    }
}
