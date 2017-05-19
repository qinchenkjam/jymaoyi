<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"./application/admin\view\user\reset_pwd.html";i:1494915091;}*/ ?>
﻿<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link href="__ADMIN__/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<include file="Public:header"/>
</head>
<body>
<form action="<?php echo url('admin/user/reSet'); ?>"  name="form" method="post" >
<form class="Huiform" id="loginform" action="" method="post">
 <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    <table class="table table-border table-bordered table-bg">
      <thead>
        <tr>
          <th colspan="2"></th>
        </tr>
      </thead>
      <tbody>
       
        <tr>
          <th class="text-r">新密码：</th>
          <td><input name="password" id="pwd1" class="input-text" type="password" > 
          </td>
        </tr>
        <tr>
          <th class="text-r">再次输入新密码：</th>
          <td><input name="newpassword2" id="pwd2" class="input-text" type="password" > 
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button type="submit" class="btn btn-success radius" id="stb_btn"><i class="icon-ok"></i> 确定</button><span id="chkmsg"></span></p> 
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</form>
</body>
<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script>
 $(function(){ 
 	$("#sub_btn").click(function(){ 
        var pwd1 = $("pwd1").val(); 
      	var pwd2 = $("pwd2").val();
        if(pwd1 != pwd2){ 
            $("#chkmsg").html("密码不一致"); 
        }else{ 
          document.form.submit();
        } 
    }); 
}) 
</script>
</html>