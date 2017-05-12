<?php
return [
     // 视图输出字符串内容替换
    'view_replace_str'       => [     
        '__HOME__'  =>'/template/mobile/new/Static',
    ],  

    'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => './template/mobile/new/',
        // 模板后缀
        'view_suffix'  => 'html',
       
    ],
     'DEFAULT_THEME' =>'new', // 模板名称
];
        ?>