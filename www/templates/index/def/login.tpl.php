<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images//public.css">
<link href="<?php echo SRC_TPL_DIR?>/images/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo SRC_TPL_DIR?>/images/style_login.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/styles.css">
<script src="<?php echo SRC_TPL_DIR?>/images/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/bootstrap.min.js" type="text/javascript"></script>
<title>会员登陆—<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
<link rel="shortcut icon" href="<?php echo SRC_TPL_DIR?>/images/icon_logo.png">
<link rel="icon" type="image/png" href="<?php echo SRC_TPL_DIR?>/images/icon_logo.png">
</head>

<body>


    


<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header2'); ?>
<div class="subbanner subbanner_help">
    <div class="wrapper">
        <div class="sub_obj_a cd-headline letters scale">
            <span class="cd-words-wrapper" style="width: 337px;">
                <b class="is-visible"><i class="in">登</i><i class="in">陆</i><i class="in">中</i><i class="in">心</i><i class="in">&nbsp;</i><i class="in">-</i><i class="in">&nbsp;</i><i class="in">梦</i><i class="in">想</i><i class="in">之</i><i class="in">旅</i><i class="in">从</i><i class="in">此</i><i class="in">开</i><i class="in">始</i></b>
                <b><i class="in">登</i><i class="in">陆</i><i class="in">中</i><i class="in">心</i><i class="in">&nbsp;</i><i class="in">-</i><i class="in">&nbsp;</i><i class="in">梦</i><i class="in">想</i><i class="in">之</i><i class="in">旅</i><i class="in">从</i><i class="in">此</i><i class="in">开</i><i class="in">始</i></b>
                <b><i class="in">登</i><i class="in">陆</i><i class="in">中</i><i class="in">心</i><i class="in">&nbsp;</i><i class="in">-</i><i class="in">&nbsp;</i><i class="in">梦</i><i class="in">想</i><i class="in">之</i><i class="in">旅</i><i class="in">从</i><i class="in">此</i><i class="in">开</i><i class="in">始</i></b>
            </span>
        </div>
        <div class="sub_obj_b cd-headline letters scale">
            <span class="cd-words-wrapper" style="width: 281px;">
                
            </span>
        </div>
    </div>
</div>



<div class="about-bg">
<div class="container col-lg-4 col-lg-offset-4 denglu ">
  <br>
    <div id="login" class="panel panel-primary">
    <form id="form1" name="form1" method="post" action="/index.php?e=index.postlogin" onSubmit="return doLogin()">
        <div class="panel-body">
          <img src="<?php echo SRC_TPL_DIR?>/images/foot-logo02.png">
          <div class="form-group col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 shuru">
                <label><span>●&nbsp;</span>用户名:</label>
                <div style="color: red; font-size: 12px; " id="txt_username_tip"></div>
                <input type="text" class="form-control one" name="username" id="username" placeholder="请输入用户名" maxlength="20">
                
 <!--               <div class="alert alert-warning">用户名不能为空！</div>-->
                <label><span>●&nbsp;</span>密  &nbsp;&nbsp;&nbsp;码:</label>
                <div style="color: red; font-size: 12px;" id="txt_password_tip"></div>
                <input type="password" class="form-control one" name="password" id="password" placeholder="请输入密码" maxlength="20">
                
                <label><span>●&nbsp;</span>验证码:</label>
                <div style="color: red; font-size: 12px;" id="txt_code_tip"></div>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <input type="text" class="form-control" name="checkcode" id="checkcode" placeholder="请输入验证码" maxlength="10" style="flex: 1; height: 54px;">
                    <img src="<?php echo url("index.codeimage")?>" class="checkcode-img" align="absmiddle" title="看不清?请点击刷新验证码" onclick="this.src='<?php echo url("index.codeimage?rand=")?>'+Math.random();" style="cursor:pointer; height: 54px; border: 1px solid #ddd; border-radius: 4px; position: relative; vertical-align: middle;"/>
                </div>
                
            </div>
            <div class="form-group col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 text-right jizhumima" style="display: flex; justify-content: space-between; align-items: center;">
                <div><a href="/index.php?e=index.register" class="ljzc">立即注册</a></div>
                <div class="col-sm-offset-1 col-sm-6" style="    padding-right: 0;">
                    <div class="checkbox">
                        <label style="margin-bottom: 0;">
                            <input type="checkbox" name="remember" value="1" id="remember" style="margin-top: 10px;"> 记住密码
                        </label>
                    </div>
                </div>
            </div>
            
            
            
            <input type="submit" value="登录" class="btn btn-primary text-center col-xs-6 col-xs-offset-3 one" id="dl-btn">
           
            
               
        </div></form>
    </div>
</div>  



</div>

<script>
 function doLogin() {

   var username = $.trim($("#username").val());

     if (username == "") {
        $("#txt_username_tip").html('用户名不能为空').show();  
        return false;
     }
   $("#txt_username_tip").hide(); 
   var password = $.trim($("#password").val());
     if (password == "") {
        $("#txt_password_tip").html('密码不能为空').show(); 
        return false;
     }
   $("#txt_password_tip").hide(); 
   
   var checkcode = $.trim($("#checkcode").val());
     if (checkcode == "") {
        $("#txt_code_tip").html('验证码不能为空').show(); 
        return false;
     }
   $("#txt_code_tip").hide(); 

   
} 
</script> 



         
 <?php TPL::display('footer');?>
 </body></html>