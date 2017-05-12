<?php
return [
     // 视图输出字符串内容替换
    'view_replace_str'       => [     
        '__HOME__'  =>'/template/pc/default/static',
    ],  

    'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => './template/pc/default/',
        // 模板后缀
        'view_suffix'  => 'html',
       
    ],
     'DEFAULT_THEME' =>'default', // 模板名称
];
        ?>