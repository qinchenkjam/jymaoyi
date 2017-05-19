<?php
namespace app\admin\controller;
use think\Controller;
class Base extends controller 
{
	protected function _initialize() {
		//parent::_initialize();

		//session不存在时，不允许直接访问
		if(!session('aname')){
			$this->error('还没有登录，正在跳转到登录页',url('user/login'));
		}

		// 第二方式判断是否登录，并定义用户ID常量
        //defined('UID') or define('UID', $this->isLogin());
	}

}