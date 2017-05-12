<?php
namespace app\admin\controller;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

     public function welcome()
    {
    	
    	$this->login_city();
        return $this->fetch('index/welcome');
    }

     public function login_city(){
     	$ip2region = new \Ip2Region();
    	$ip=Session('aip');
    	$info = $ip2region->btreeSearch($ip);
        //$info = $ip2region->btreeSearch('210.21.15.69');    	
	    $info = explode('|',$info['region']);
	    //dump($info);exit();
	    
	    $addr= $info[2].$info[3];
	    $addr=='00'?$addr='内网IP':$addr;
    	//dump($addr);exit();
    	$this->assign('addr',$addr);

     }

    public function article_add()
    {
         return $this->redirect('Article/newsAdd');
    }

     public function banner_add()
    {
         return $this->redirect('Banner/add');
    }

     public function product_add()
    {
         return $this->redirect('Product/add');
    }

     public function member_add()
    {
         return $this->redirect('Admin/edit');
    }
}
