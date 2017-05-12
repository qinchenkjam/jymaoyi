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
    // 生成应用公共文件
    '__file__' => ['common.php', 'config.php', 'database.php','function.php'],

    /*// 定义模块的自动生成 （按照实际定义的文件名生成）
    'index'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['controller', 'view'],
        'controller' => ['Index', 'Product', 'Article','Pages','Base'],   
        'view'       => ['index/index','product/index','product/pro_detail','page/pages','article/index','article/ar_detail'],
     ],
    // 其他更多的模块定义   
    'admin'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['behavior', 'controller', 'view','validate'],
        'controller' => ['Index', 'Product', 'Article','Banner','Page','Admin', 'System','Base','Link','Nav'
                      ],      
     
    ],

    // 其他更多的模块定义   
    'common'     => [     
        '__dir__'    => ['behavior', 'model'],      
        'model'      => ['Index', 'Product', 'Article','Banner','Page','Admin', 'System','Base','Link','Nav'],
        
    ],*/
];
