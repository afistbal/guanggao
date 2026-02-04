<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="generator" content="37xs.net">
<meta name="author" content="The 37xs network Science and Technology CO.Ltd All rights reserved">
<meta name="copyright" content="2005-2016 37XS Inc.">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>提示-<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
<link rel="shortcut icon" href="<?php echo SRC_TPL_DIR?>/images/icon_logo.png">
<link rel="icon" type="image/png" href="<?php echo SRC_TPL_DIR?>/images/icon_logo.png">
<link href="<?php echo SRC_TPL_DIR?>/images/stylelog.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images//reset.css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images//public.css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/boot.css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/styles.css">
</head>
<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header2'); ?>
<link href="<?php echo SRC_TPL_DIR?>/css/site.css" type="text/css" rel="stylesheet">
<link href="<?php echo SRC_TPL_DIR?>/css/Revision.css" type="text/css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<script src="<?php echo SRC_TPL_DIR?>/js/jquery.min.js"></script>
<script src="<?php echo SRC_TPL_DIR?>/js/jquery.SuperSlide.js"></script>
<script src="<?php echo SRC_TPL_DIR?>/js/jquery.roundabout.min.js" type="text/javascript"></script>
<!--/header-->
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

<?php if($key == "success"){?>
<div style="margin-left:200px"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/success.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">注册成功，欢迎您：<?php echo $_SESSION["register_username"];?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页登入</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "u_p_null"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">必填选项不能为空</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo url("index.register")?>">返回注册</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "system_error"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">未知信息</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">首页</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "activate_repeat"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">帐号已激活过，请不要重复激活</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">首页</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "activate_success"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/success.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">激活成功，欢迎您：<?php echo $_SESSION["register_username"];?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页登入</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "login_username_password_error"){?>
<div align="center"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">用户名和密码错误，请重登入</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页登入</a></td>
  </tr>
</table></div>
<?php }?>
<?php if($key == "login_username_lock"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">用户已被锁定，无法登入，有疑问请联系我们客服</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "login_username_no_activation"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">用户名没有审核通过，请等待我们审核</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo url("index.contact")?>">联系我们客服</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "close_affiliate_register" or $key == "close_advertiser_register"  ){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">已关闭注册</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo url("index.contact")?>">联系我们客服</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "username_repeat_register"  ){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">用户名称重复，无法注册</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo url("index.contact")?>">联系我们客服</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "login_username_email_activation"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">邮箱地址没有认证通过，无法登入</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td> 请打开邮箱地址(<?php echo $_SESSION["activation_email"]?>)进行自动激活帐号 </td>
  </tr>
</table>
<?php }?>
<?php if($key == "register_email_activation"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/success.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">注册成功，请按以下步骤激活帐号(<?php echo $_SESSION["register_activation_email"]?>)</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td> 第一步：查看您的电子邮箱，我们给您发送了激活邮件 </td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td> 第二步：点击激活邮件中的链接，即可激活您的帐号 </td>
  </tr>
   
</table>
<?php }?>
<?php if($key == "login_timeout"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">登入超时，请重新登入</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页登入</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "register_24_repeat"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">24小时只注册<?php echo $GLOBALS['C_ZYIIS']['24_hours_register_num']?>次</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "close_repeat"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">已关闭注册</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "ban_ip"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">IP限制</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页</a></td>
  </tr>
</table>
<?php }?>
<?php if($key == "checkcode"){?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="100"><img src="<?php echo SRC_TPL_DIR?>/images/error.png"   border="0" align="absmiddle"  /></td>
    <td style="border-bottom:1px #CCCCCC solid"><span style="font-size:14px; color:#000000">验证码错误</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo WEB_URL?>">返回首页</a></td>
  </tr>
</table>
</div>
<?php }?>
<div style="margin-top:120px"></div>
<?php TPL::display('footer');?>
</body></html>
