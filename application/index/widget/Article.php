<?php
namespace app\index\widget;

class Article {
    public function header()
    {
        return 'header';
    }

    public function left()
    {      
        
        return 'left';
       
    }

    public function menu($name)
    {
        return 'menu:'.$name;
    }
}

//{:widget('Article/left')}  模板中调用
             

