<?php
namespace app\admin\controller;
use think\Request;
use think\Db;
use think\Model;
use think\Controller;
class User extends Controller
{
	public function login(){
		if(Request::instance()->isAjax()){
     
			  $this->check_code();      
		    $this->check_acount(); 
		}
		 

      return $this->fetch('user/login'); 
    }

	  public function check_code(){
		    $captcha=input('post.vertify');
        //$captcha=$this->request->post('vertify', '');
        //dump($captcha);exit;
        if(!captcha_check($captcha)){
         $res=['status' => -2, 'msg' => '验证码错误'];
         echo json_encode($res);exit();
        };
    
    }

    public function check_acount(){
    	  $data['user_name'] = input('post.username');
        $data['password']  =encrypt(input('post.password'));
        $re=\app\common\model\Admin::_check($data['user_name'],$data['password']);
       
        if(empty($re)) {
              $res=['status' => -1, 'msg' => '用户名或密码错误'];
        }else{

	        $d=\app\common\model\Admin::get_info($data['user_name']);
	        session('aid',$d['id']);
          session('aname',$d['user_name']);
	        session('aip',$d['last_ip']);
	        session('last_login',$d['last_login']);
	        session('login_count',$d['login_count']);
	        $data['last_login']=time();
          $data['last_ip']=get_client_ip();
	        $data['login_count'] =$d['login_count'] + 1;
	        $result=\app\common\model\Admin::updatemsgs($data,$d['id']);
	        //dump($data);exit;
          
          //行为记录 
          action_log('user_login', 'user', $result, session('aid'));
	        $res=['status' => 1, 'msg' => '验证通过'];
        }
        echo json_encode($res);exit();
    
    }


    public function login_out()
    {
      if(Request::instance()->isAjax()){
       session(null);
       $res=['status' => -1, 'msg' => '退出登陆'];
       echo json_encode($res);exit();
      }
      	$this->success('未登陆',url('admin/User/login')); 
      
    }

    public function tomail() {

        if($_POST){
            $email = input('post.email');
            //dump($email);
            $model = model('admin');
            $condition['email'] = $email;
            $result = $model->where($condition)->find();
            //var_dump($result);exit();
            if (!$result) exit('该邮箱尚未注册');
            //同时我们为了控制URL链接的时效性
            $passwordToken = md5($result['id'] . $result['user_name'] . $result['password']);
     $link = "http://{$_SERVER["HTTP_HOST"]}/index.php/admin/user/resetPassword/email/{$email}/passwordToken/{$passwordToken}";
            $str = "您好!{$result['user_name']}， 请点击下面的链接重置您的密码：<p></p>" . $link;
            //Loader::import('PHPMailer.PHPMailerAutoload'); 版本问题
            import('phpmailer.PHPMailerAutoload');
            $title='重置密码';
                if(SendMail($email,$title,$str)){
                    
                    session('expires_time',$_SERVER['REQUEST_TIME']);
                    //echo $expires_time;
                    //dump($_SERVER['REQUEST_TIME']);exit;
                    exit('发送成功！请登录到您的邮箱及时重置您的密码');
                    
                } else {
                    $this->error('发送失败');
                }
            }
       
        return $this->fetch('user/tomail');  
    }

     /**
     * 
     */
    
     public function resetPassword() {
        //判断地址合法来源 待完善
        //if($_SERVER['HTTP_REFERER']!='https://mail.qq.com/')exit('地址不合法');
        //$email = input('get.email');
        // $passwordToken = input('get.passwordToken');
        //dump($email);exit;
        $url=$_SERVER['REQUEST_URI'];
        $data=(parse_url_param($url)); //从连接中取数据
        $email =$data[2];
        $passwordToken = $data[0];
        $model = model('admin');
        $condition['email'] = $email;
        $result = $model->where($condition)->find();
        //dump($passwordToken);exit;
        if (!$result) exit('error link');
        $checkToken = md5($result['id'] . $result['user_name'] . $result['password']);

        if ($checkToken != $passwordToken) exit('this no exit link');
            //$_SESSION['expires_time']
        //var_dump($result['passwordtime']);
        if (time()-session('expires_time') > 10 * 60) exit('The link has expires');
        $link = "http://{$_SERVER["HTTP_HOST"]}/index.php/Admin/user/reSet?id={$result['id']}"; //这里跳转到一个个人博客的二维码
        //dump($link);exit();
        // 跳转至客户密码重置页面
        //header("location:http://baidu.com");
        echo '<script>location.href ="'.$link.'"</script>';
        //header('location:'.$link);
     }


      /**
     * 重设密码验证
     */
    public function reSet()
    {
        $model = model('admin');
        $id = input('get.id');
        //dump($id);die();
        $condition['id'] = $id;
        $info = $model->where($condition)->find();      
        if (request()->isPost()) {
            //dump($id);die();
           
            $data['password'] = encrypt(input('post.password'));       
            $id   = input("post.id",0,"int");
            $res = $model->where('id='.$id)->update($data);
            if($res){
            $this->success('保存信息成功','admin/user/login');
            }
            if (!$res) exit('修改密码失败');

            exit('update password success');
        }      
        $this->assign('info', $info); 
        return $this->fetch('user/reset_pwd');
    }
}