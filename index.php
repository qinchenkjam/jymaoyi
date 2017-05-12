<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


// [ 应用入口文件 ]
header("Content-Type:text/html;charset=utf-8");
// 定义应用目录
define('APP_PATH',  __DIR__ .'./application/');

//定义网站根目录
define('WEB_PATH',dirname(__FILE__));

define("SITE_URL","http://".$_SERVER['HTTP_HOST']."/");
//定义网站根目录
error_reporting(E_ALL ^ E_NOTICE);//显示除去 E_NOTICE 之外的所有错误信息
//图片上传路径
define("UPLODS", SITE_URL."public/uploads/");
// 加载框架引导文件
require  __DIR__ .'./thinkphp/start.php';

// 读取自动生成定义文件
//$build = include 'build.php';
// 运行自动生成
//\think\Build::run($build);

