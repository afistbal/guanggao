<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/reset.css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/public.css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/styles.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<title>关于我们_<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
<link rel="shortcut icon" href="<?php echo SRC_TPL_DIR?>/images/icon_logo.png">
<link rel="icon" type="image/png" href="<?php echo SRC_TPL_DIR?>/images/icon_logo.png">
<style>
    a {
        text-decoration: none;
    }
    a:hover {
        text-decoration: none;
    }
    .contact-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        background: linear-gradient(135deg, #0088cc 0%, #0066aa 100%);
        color: #fff;
        font-size: 13px;
        font-weight: 500;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 136, 204, 0.2);
        min-width: 80px;
        justify-content: center;
    }
    .contact-link:hover {
        background: linear-gradient(135deg, #0099dd 0%, #0077bb 100%);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 136, 204, 0.3);
        text-decoration: none;
        color: #fff;
    }
    .contact-link img {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
    }
    .contact-link.outline {
        background: #e0e0e0;
        color: #999;
        cursor: not-allowed;
        box-shadow: none;
    }
    .contact-link.outline:hover {
        background: #e0e0e0;
        transform: none;
        box-shadow: none;
    }
    .contact-link.btn-tg {
        background: url("<?php echo SRC_TPL_DIR?>/images/btn_tg.png") no-repeat center;
        background-size: cover;
        filter: brightness(1.05);
        position: relative;
    }
    .contact-link.btn-tg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 4px;
        pointer-events: none;
    }
    .contact-link.btn-tg:hover {
        background: url("<?php echo SRC_TPL_DIR?>/images/btn_tg.png") no-repeat center;
        background-size: cover;
        filter: brightness(1.1);
    }
    .content_contact .contactus .contactlist dd li {
        margin-right: 15px;
        margin-bottom: 15px;
    }
    .content_contact .contactus .contactlist dt {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
    }
</style>
</head>
<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header2'); ?>

<div class="subbanner subbanner_contact">
    <div class="wrapper">
        <div class="sub_obj_a cd-headline letters scale">
            <span class="cd-words-wrapper" style="width: 337px;">
                <b class="is-visible"><i class="out">联</i><i class="out">系</i><i class="out">我</i><i class="out">们</i><i class="out">&nbsp;</i><i class="out">-</i><i class="out">&nbsp;</i><i class="out">给</i><i class="out">您</i><i class="out">最</i><i class="out">好</i><i class="out">的</i><i class="out">服</i><i class="out">务</i></b>
                <b><i class="in">联</i><i class="in">系</i><i class="in">我</i><i class="in">们</i><i class="in">&nbsp;</i><i class="in">-</i><i class="in">&nbsp;</i><i class="in">给</i><i class="in">您</i><i class="in">最</i><i class="in">好</i><i class="in">的</i><i class="in">服</i><i class="in">务</i></b>
                <b><i class="out">联</i><i class="out">系</i><i class="out">我</i><i class="out">们</i><i class="out">&nbsp;</i><i class="out">-</i><i class="out">&nbsp;</i><i class="out">给</i><i class="out">您</i><i class="out">最</i><i class="out">好</i><i class="out">的</i><i class="out">服</i><i class="out">务</i></b>
            </span>
        </div>
        <div class="sub_obj_b cd-headline letters scale">
            <span class="cd-words-wrapper" style="width: 281px;">
                <b class="is-visible"><i class="in">C</i><i class="in">o</i><i class="in">n</i><i class="in">t</i><i class="in">a</i><i class="in">c</i><i class="in">t</i><i class="in">&nbsp;</i><i class="in">U</i><i class="in">s</i><i class="in">&nbsp;</i><i class="in">-</i><i class="in">&nbsp;</i><i class="in">T</i><i class="in">o</i><i class="in">&nbsp;</i><i class="in">G</i><i class="in">i</i><i class="in">v</i><i class="in">e</i><i class="in">&nbsp;</i><i class="in">Y</i><i class="in">o</i><i class="in">u</i><i class="in">&nbsp;</i><i class="in">T</i><i class="in">h</i><i class="in">e</i><i class="in">&nbsp;</i><i class="in">B</i><i class="in">e</i><i class="in">s</i><i class="in">t</i><i class="in">&nbsp;</i><i class="in">S</i><i class="in">e</i><i class="in">r</i><i class="in">v</i><i class="out">i</i><i class="out">c</i><i class="out">e</i></b>
                <b><i class="out">C</i><i class="out">o</i><i class="out">n</i><i class="out">t</i><i class="out">a</i><i class="out">c</i><i class="out">t</i><i class="out">&nbsp;</i><i class="out">U</i><i class="out">s</i><i class="out">&nbsp;</i><i class="out">-</i><i class="out">&nbsp;</i><i class="out">T</i><i class="out">o</i><i class="out">&nbsp;</i><i class="out">G</i><i class="out">i</i><i class="out">v</i><i class="out">e</i><i class="out">&nbsp;</i><i class="out">Y</i><i class="out">o</i><i class="out">u</i><i class="out">&nbsp;</i><i class="out">T</i><i class="out">h</i><i class="out">e</i><i class="out">&nbsp;</i><i class="out">B</i><i class="out">e</i><i class="out">s</i><i class="out">t</i><i class="out">&nbsp;</i><i class="out">S</i><i class="out">e</i><i class="out">r</i><i class="out">v</i><i class="out">i</i><i class="out">c</i><i class="out">e</i></b>
                <b><i class="out">C</i><i class="out">o</i><i class="out">n</i><i class="out">t</i><i class="out">a</i><i class="out">c</i><i class="out">t</i><i class="out">&nbsp;</i><i class="out">U</i><i class="out">s</i><i class="out">&nbsp;</i><i class="out">-</i><i class="out">&nbsp;</i><i class="out">T</i><i class="out">o</i><i class="out">&nbsp;</i><i class="out">G</i><i class="out">i</i><i class="out">v</i><i class="out">e</i><i class="out">&nbsp;</i><i class="out">Y</i><i class="out">o</i><i class="out">u</i><i class="out">&nbsp;</i><i class="out">T</i><i class="out">h</i><i class="out">e</i><i class="out">&nbsp;</i><i class="out">B</i><i class="out">e</i><i class="out">s</i><i class="out">t</i><i class="out">&nbsp;</i><i class="out">S</i><i class="out">e</i><i class="out">r</i><i class="out">v</i><i class="in">i</i><i class="in">c</i><i class="in">e</i></b>
            </span>
        </div>
    </div>
</div>
<div class="content_contact">
    <div class="aboutus">
        <div class="wrapper">
            <h2>海森广告-专业PC和移动端CPC,CPV,CPA,CPM网络广告联盟简介</h2>
            <p>海森广告-专业PC和移动端CPC,CPV,CPA,CPM网络广告联盟，专注于互联网广告的策划、推广、营销服务，是一家致力于挖掘网站媒体流量价值，助广大商家实现精准营销的第三方交易平台。技术创新、模式创新、服务贴心作为公司的发展源动力；在海森广告-专业PC和移动端CPC,CPV,CPA,CPM网络广告联盟的广告平台上您可以定时、定量、定区域、定行业的进行广告投放；海森广告-专业PC和移动端CPC,CPV,CPA,CPM网络广告联盟可以为客户量身订作整个网络广告宣传过程，全程跟踪监测广告效果，为您的每一个流量负责，真正做到效果营销，精准定位。 海森广告-专业PC和移动端CPC,CPV,CPA,CPM网络广告联盟自成立以来，发展非常迅猛，合作会员网站累计达3万多家，并以每天数十家的速度递增；吸纳了大批经验丰富的网络营销人才和实力强大的技术研发人员，拥有多台高性能服务器和稳定的系统平台，具备雄厚的技术力量及资金实力，完善的信息管理和客户服务管理制度，有足够的实力为广大客户提供优质的服务。热诚欢迎广大商家和网站媒体的加盟，共创美好未来!</p>
        </div>
    </div>
    <div class="contactus">
        <div class="wrapper">
            <div class="contactlist">
                <dl>
                    <dt>网站主合作联系</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="https://t.me/dandan" target="_blank" class="contact-link btn-tg"><img src="<?php echo SRC_TPL_DIR?>/images/TG.png" alt="Telegram">蛋蛋</a></li>
                            <li><a href="https://t.me/doudou" target="_blank" class="contact-link"><img src="<?php echo SRC_TPL_DIR?>/images/TG.png" alt="Telegram">豆豆</a></li>
                            <li><a href="https://t.me/yanyan" target="_blank" class="contact-link"><img src="<?php echo SRC_TPL_DIR?>/images/TG.png" alt="Telegram">燕燕</a></li>
                            <li><a href="https://t.me/bingbing" target="_blank" class="contact-link"><img src="<?php echo SRC_TPL_DIR?>/images/TG.png" alt="Telegram">冰冰</a></li>
                        </ul>
                    </dd>
                    <dt>广告主合作联系</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="https://t.me/guoguo" target="_blank" class="contact-link"><img src="<?php echo SRC_TPL_DIR?>/images/TG.png" alt="Telegram">果果</a></li>
                        </ul>
                    </dd>
                    <dt>质监佣金</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="https://t.me/xiaowang" target="_blank" class="contact-link"><img src="<?php echo SRC_TPL_DIR?>/images/TG.png" alt="Telegram">小王</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
 ﻿<?php TPL::display('footer');?>


<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery.pngFix.pack.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/placeholders.jquery.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery.movebg.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/slide.js"></script>
<!--[if !IE 9]><!-->
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/main.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/public.js"></script></body></html>