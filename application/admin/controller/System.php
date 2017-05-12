<?php
namespace app\admin\controller;

use app\common\model\Config as WConfig;
//use think\request;
use think\Db;
class System extends Base
{    
	
    public function _initialize()
    {       	
       

    }

	// 网站配置首页
	public function index()
	{     

		if(request()->isPost()){		 
		 	$data=input('post.');
		 	$ids = implode(',', array_keys($data)); 
		 	//dump($ids);exit;
		 	//dump($data);exit;
		 $list=\app\common\model\Config::lists(); 
		
		}else{           
           $list=\app\common\model\Config::lists();
	           if ($list){
			    	foreach($list as $k=>$v){
			    		switch ($v->field_type){//必须实例模型 得出对象
			    			case 'input':
			    				$list[$k]->_html = '<div class="formControls col-xs-8 col-sm-9"><input name="value[]" type="text" class="input-text" value="'.$v->value.'"></div>';
			    				break;
			    			case 'textarea':
			    				$list[$k]->_html = '<div class="formControls col-xs-8 col-sm-9"><textarea name="value[]" class="input-text" >'.$v->value.'</textarea></div>';
			    				break;
			    			case 'radio':			    			    
						        $str = '';
			    				//1|开启,0|关闭
			    				$arr = explode(',',$v->field_value);
			    				foreach ($arr as $m=>$n){
			    					$r = explode('|',$n);
			    					$c = $v->value==$r[0] ? 'checked' : '';
			    					$str .= '<input type="radio" name="value[]" value="'.$r[0].'" '.$c.'><span class="label ilC">'.$r[1].'</span>';
			    				}
			    				$list[$k]->_html = $str;
	    				    break;
			    			default:
			    				$list[$k]->_html = '';
			    		}
		    	}
	    	//dump($list);exit;
            
    		}
    		
    		$this->assign("list",$list);   		
		 	return $this->fetch('system/index');
		}
	}
    
	public function edit()
	{
		if(request()->isPost()){		 
		 	//$input=input('post.');
		 	$input = input('post.','','strip_tags,strtolower');
		 	//dump($input);exit;
		 	foreach ($input['id'] as $k=>$v){
    		//var_dump($input['o_id'][$k]);
    		//var_dump($input['o_value'][$k]);
    		$this->obj= new \app\common\model\Config();
    		$this->obj->where('id',$v)->update(['value'=>$input['value'][$k]]);
    		}
		 	//dump($data);exit;
		 
		 	return $this->success('修改成功','admin/System/index');
		 	
		 	
		 }else{

		 	return $this->fetch('system/system-base');
		 }
	}
}