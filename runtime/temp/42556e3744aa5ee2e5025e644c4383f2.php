<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\wamp\www\jymaoyi./application/admin\view\public\jump_url.html";i:1493282867;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: "Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif; color: #333; font-size: 16px; }
        .system-message{ padding: 24px 48px; }
        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
        .system-message .jump{ padding-top: 10px;}
        .system-message .jump a{ color: #333; }
        .system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px; }
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display: none; }
    </style>

</head>
<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script>
<body>
    <div class="system-message">
        <?php switch ($code) {case 1:?>
            
            <?php echo '<script> layer.alert("'.$msg.',跳转中..");</script>';break;case 0:?>
          
             <?php echo '<script> layer.alert("'.$msg.',跳转中..");</script>';break;} ?>

      <!--   <?php switch ($code) {case 1:?>
          <h1></h1>
          <p class="success"><?php echo(strip_tags($msg));?></p>
          <?php break;case 0:?>
          <h1></h1>
          <p class="error"><?php echo(strip_tags($msg));?></p>
          <?php break;} ?> -->
        <p class="detail"></p>
        <p class="jump" style="display:none">
            页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
        </p>
    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
