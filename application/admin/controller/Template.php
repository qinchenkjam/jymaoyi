<?php
namespace app\admin\controller;

use think\Request;
/**
 * 
 */
class Template extends Base
{

	public function index()
    {
    	 $t = input('t','pc'); // pc or  mobile  
        
         //dump($t);exit;
         $m = ($t == 'pc') ? 'index' : 'mobile';
         $arr = scandir("./template/$t/");
         foreach($arr as $key => $val)
         {
                if($val == '.' || $val == '..' )
                    continue;                 
                 $template_config[$val] = include "./template/$t/$val/config.php";
         }
        //dump($template_config);exit;
        $this->assign('t',$t);             
        $template_arr = include("./Application/$m/config.php");
        //dump($template_arr);exit;   
        $this->assign('default_theme',$template_arr['DEFAULT_THEME']);
        $this->assign('template_config',$template_config);
        return $this->fetch('template/templatelist');
    }

    public function mtemplate()
    {
         $t = input('t','pc'); // pc or  mobile  
        
         //dump($t);exit;
         $m = 'mobile';
         $arr = scandir("./template/$t/");
         foreach($arr as $key => $val)
         {
                if($val == '.' || $val == '..' )
                    continue;                 
                 $template_config[$val] = include "./template/$t/$val/config.php";
         }
        //dump($template_config);exit;
        $this->assign('t',$t);             
        $template_arr = include("./Application/$m/config.php");
        //dump($template_arr);exit;   
        $this->assign('default_theme',$template_arr['DEFAULT_THEME']);
        $this->assign('template_config',$template_config);
        return $this->fetch('template/templatelist');
    }

   
    /**
     * 魔板选择
     */
    public function changetemplate(){        
        
        $t = input('t','pc'); // pc or  mobile        
        $m = ($t == 'pc') ? 'index' : 'mobile';
        $k=input('param.key');
        //dump($k);exit;
        //$default_theme = tpCache("hidden.{$t}_default_theme"); // 获取原来的配置                
        //tpCache("hidden.{$t}_default_theme",$_GET['key']);
        //tpCache('hidden',array("{$t}_default_theme"=>$_GET['key']));                         
        // 修改文件配置  
         if(!is_writeable("./Application/$m/config.php"))
            return "文件/Application/$m/config.php不可写,不能启用魔板,请修改权限!!!";           
         
        $config_html ="<?php
return [
     // 视图输出字符串内容替换
    'view_replace_str'       => [     
        '__HOME__'  =>'/template/$t/$k/Static',
    ],  

    'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => './template/$t/$k/',
        // 模板后缀
        'view_suffix'  => 'html',
       
    ],
     'DEFAULT_THEME' =>'$k', // 模板名称
];
        ?>";
         file_put_contents("./application/$m/config.php", $config_html);
       /* if($a=input('param.a')=='m'){
               $this->success("切换移动端设置",url('admin/template/index',array('t'=>$t)));
        }
        if($a=input('param.a')=='pc'){
               $this->success("切换PC端设置",url('admin/template/index',array('t'=>$t)));
        }*/
        $this->success("操作成功",url('admin/template/index',array('t'=>$t)));      
    }
}