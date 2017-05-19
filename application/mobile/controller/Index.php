<?php
namespace app\mobile\controller;
use think\Cache;
class Index extends Base
{
    public function index()
    {
    	$Banner=Cache::get('Banner');
        if($Banner==false){
            $Banner=\app\common\model\Banner::lists(5);
            Cache::set('Banner',$Banner);
        }
        
        $m_pro_recommend=Cache::get('m_pro_recommend');
        if($m_pro_recommend==false){
           $m_pro_recommend=\app\common\model\Product::is_recommends(4);
            Cache::set('m_pro_recommend',$m_pro_recommend);
        }
        //dump(Cache::get('m_pro_recommend'));exit();

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
        $this->assign("pro_recommend",$m_pro_recommend);
        return $this->fetch();
    }

    public function catalog(){

    return $this->fetch('public/catalog');
    }
}
