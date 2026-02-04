<?php
// 获取当前页面参数
$current_page = isset($_GET['e']) ? $_GET['e'] : '';
// 判断是否为首页（没有 e 参数或 e 参数为空）
$is_home = empty($current_page);
?>
<div class="header">
    <div class="wrapper">
        <a href="/index.php" class="logo"></a>
        <div class="menu">
            <div class="nav">
                <ul>
    <li class="nav-item"><a href="/" class="<?php echo $is_home ? 'active' : ''; ?>">首页</a></li>
    <li class="nav-item"><a href="/index.php?e=index.affiliate" class="<?php echo ($current_page == 'index.affiliate') ? 'active' : ''; ?>">网站主</a></li>
    <li class="nav-item"><a href="/index.php?e=index.advertiser" class="<?php echo ($current_page == 'index.advertiser') ? 'active' : ''; ?>">广告商</a></li>
    <li class="nav-item"><a href="/index.php?e=index.help" class="<?php echo ($current_page == 'index.help') ? 'active' : ''; ?>">常见问题</a></li>
    <li class="nav-item"><a href="/index.php?e=index.contact" class="<?php echo ($current_page == 'index.contact') ? 'active' : ''; ?>">联系联盟</a></li>
    <li class="nav-item"><a href="/index.php?e=index.register" class="<?php echo ($current_page == 'index.register') ? 'active' : ''; ?>">在线申请</a></li>
	 <li class="nav-item"><a href="/index.php?e=index.login" class="<?php echo ($current_page == 'index.login') ? 'active' : ''; ?>">登陆中心</a></li>
                    </ul>
                <!--移动的滑动-->
                    <!----<div class="move-bg"></div>-->
                <!--移动的滑动 end-->
            </div>
        </div>
    </div>
</div> 