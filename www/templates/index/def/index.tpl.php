<!DOCTYPE html>
<html class="js flexbox canvas rgba backgroundsize borderradius boxshadow cssanimations csstransforms csstransforms3d csstransitions video audio svg" lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo SRC_TPL_DIR?>/images/icon_logo.png">
    <link rel="icon" type="image/png" href="<?php echo SRC_TPL_DIR?>/images/icon_logo.png">
    <link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/flexslider.css">
    <link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/styles.css">
    <link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/animate.min.css">

<style>
.my-btnStyle{position:fixed;bottom:10%;right:10%; z-index:9999}
.my-btnStyle button{ width:62px; height:62px; border:none; background:rgba(255,100,69,0.6); border-radius:50% !important;}
.my-btnStyle button img{ margin:0 auto;}
.my-btnStyle .dropdown-menu img{ margin:5px; display:inline-block;}
.my-btnStyle .dropdown-menu span{ line-height:50px;color:#3d4351;}
.my-btnStyle .dropdown-menu li a{ text-decoration:none;}
.my-btnStyle .dropdown-menu{ animation:.3s linear fadeIn; left:-58px;margin-bottom:10px;}
.my-btnStyle h5{ font-size:18px;color:#3d4351;}
.my-btnStyle button{ display:block; margin-bottom:10px; }
.my-btnStyle .zhiding{ 
    background:rgba(73,80,97,0.6);
    outline: none;
    border: none;
    border-radius:50% !important;
}
.my-btnStyle .zhiding:hover{ background:rgba(73,80,97,1)}
.my-btnStyle .zhiding:focus,
.my-btnStyle .zhiding:active,
.my-btnStyle .zhiding:focus-visible {
    outline: none !important;
    border: none !important;
    box-shadow: none !important;
    border-radius:50% !important;
}
/* 移除 dropdown-toggle 按钮的置灰效果 */
.my-btnStyle .dropdown-toggle {
    outline: none;
    border: none;
    border-radius:50% !important;
}
.my-btnStyle .dropdown-toggle:hover {
    background:rgba(255,100,69,0.8);
}
.my-btnStyle .dropdown-toggle:focus,
.my-btnStyle .dropdown-toggle:active,
.my-btnStyle .dropdown-toggle.active,
.my-btnStyle .dropdown-toggle:focus-visible,
.my-btnStyle.open .dropdown-toggle {
    background:rgba(255,100,69,0.6) !important;
    outline: none !important;
    border: none !important;
    box-shadow: none !important;
    border-radius:50% !important;
}


@keyframes fadeIn{
  0%{ opacity:0; transform:translateX(-20px);}
  100%{ opacity:1; transform:translateX(0px);}
}

</style>
    
<style type="text/css">.fancybox-margin{margin-right:0px;}</style><style>.fluidvids-elem{position:absolute;top:0px;left:0px;width:100%;height:100%;}.fluidvids{width:100%;position:relative;}</style></head>
<body id="top">
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h1>海森广告 · 一站式移动广告平台</h1>
                        <p class="intro">丰富的广告模式提升用户的收益转化、最佳的流量变现方案(通栏、插屏、跳转)、丰富的网络广告<br>投放经验帮助品牌瞬间传递！</p>
                        <a href="/index.php?e=index.register" class="btn btn-fill btn-large btn-margin-right">立即加入</a> 
                        
                        <div class="logo-placeholder floating-logo" style="position:absolute;left:50%;top:128%"><img src="<?php echo SRC_TPL_DIR?>/images/gd.png"></div>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
    </section>
    
<!--跑分-->    
     <section class="row section">
          <div class="row-content buffer even clear-after">
            <div class="column three">
              <div class="count-item">
                <div class="small-icon red"><i><img src="<?php echo SRC_TPL_DIR?>/images/two-01.png"></i></div>
                <div class="count-number" data-from="0" data-to="1583" data-speed="1000" data-refresh-interval="25"></div>
                <div class="count-subject">与我们合作的网站主</div>
              </div><!-- count-item -->
            </div>
            <div class="column three">
              <div class="count-item">
                <div class="small-icon red"><i><img src="<?php echo SRC_TPL_DIR?>/images/two-02.png"></i></div>
                <div class="count-number" data-from="0" data-to="215" data-speed="1500" data-refresh-interval="25"></div>
                <div class="count-subject">与我们合作的广告主</div>
              </div><!-- count-item -->
            </div>
            <div class="column three">
              <div class="count-item">
                <div class="small-icon red"><i><img src="<?php echo SRC_TPL_DIR?>/images/two-03.png"></i></div>
                <div class="count-number" data-from="0" data-to="266" data-speed="2000" data-refresh-interval="25"></div>
                <div class="count-subject">收到的用户好评数</div>
              </div><!-- count-item -->
            </div>
            <div class="column three last">
              <div class="count-item">
                <div class="small-icon red"><i><img src="<?php echo SRC_TPL_DIR?>/images/two-04.png"></i></div>
                <div class="count-number" data-from="0" data-to="851" data-speed="2500" data-refresh-interval="25"></div>
                <div class="count-subject">总累计合作用户</div>
              </div><!-- count-item -->
            </div><div class="clear"></div>
          </div>  
  </section>
    
    
<section class="features-extra section-padding" id="assets" style="overflow:hidden">
        <div class="macbook-wrap animated fadeInLeft"></div>
        <div class="responsive-feature-img"><img src="<?php echo SRC_TPL_DIR?>/images/devices.png" alt="responsive devices"></div>

        <div class="container jm-wz">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list text-center">
                        <h3>网站主、广告主的最佳赚钱平台</h3>
            <h3>你还在等什么？</h3>
                        <i></i>

                        <a href="/index.php?e=index.register" class="btn btn-ghost btn-accent btn-small">现在加入</a>
                    </div>
                </div>
            </div>
        </div>

</section>
    
<!--合作伙伴--> 
  <section class="bg-color">
      <div class="container hzhb">
          <div class="row hz-bt text-center">
              <h3>合作伙伴</h3>
                <span></span>
            </div>
            <div class="row text-center hz-img">
              <img class="col-md-2" src="<?php echo SRC_TPL_DIR?>/images/hz-01.png">
                <img class="col-md-2" src="<?php echo SRC_TPL_DIR?>/images/hz-02.png">
                <img class="col-md-2" src="<?php echo SRC_TPL_DIR?>/images/hz-03.png">
                <img class="col-md-2" src="<?php echo SRC_TPL_DIR?>/images/hz-04.png">
                <img class="col-md-2" src="<?php echo SRC_TPL_DIR?>/images/hz-05.png">
                <img class="col-md-2" src="<?php echo SRC_TPL_DIR?>/images/hz-06.png">
            </div>
       </div>
  
     </section>   
     
<!--底部--> 

    
    <?php TPL::display('footer');?>
    

    <script>window.jQuery || document.write('<script src="/templates/index/def/static001/jquery-1.11.2.min.js"><\/script>')</script><script src="<?php echo SRC_TPL_DIR?>/images/jquery-1.11.2.min.js"></script>    
    <script src="<?php echo SRC_TPL_DIR?>/images/jquery.fancybox.pack.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/images/bootstrap.min.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/images/scripts.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/images/jquery.flexslider-min.js"></script>  
    <script src="<?php echo SRC_TPL_DIR?>/images/jquery.waypoints.min.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/images/beetle.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/images/plugins.js"></script>
    
    <script>
        // zhiding 按钮点击后移除 focus 样式
        $(document).ready(function() {
            $('.zhiding').on('click', function() {
                $(this).blur(); // 移除焦点，消除蓝色边框
            });
            
            // dropdown-toggle 按钮点击后移除 focus 样式
            $('.my-btnStyle .dropdown-toggle').on('click', function() {
                var $btn = $(this);
                setTimeout(function() {
                    $btn.blur(); // 移除焦点，消除置灰效果
                }, 100);
            });
        });
    </script>

</body></html>