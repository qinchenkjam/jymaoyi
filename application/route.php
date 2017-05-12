<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
     '/' => 'index/index/index',	
    'product' => 'index/product/index',
    'product_detail/[:id]' => 'index/product/product_show',
    'article' => 'index/article/lists',
    'article_detail/[:id]' => 'index/article/detail',
    'page' => ['index/Pages/index',['id' => '\d+']],
    'service' => ['index/CaseServe/index',['id' => '\d+']],
    'service_detail/[:id]' => 'index/CaseServe/detail',

];
//use think\Route;
// m子域名绑定到mobile模块
Route::domain('m','mobile');
