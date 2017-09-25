<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:35:"themes/simpleboot3/tiku\\index.html";i:1506308040;s:35:"themes/simpleboot3/public\head.html";i:1506308040;s:39:"themes/simpleboot3/public\function.html";i:1506308040;s:34:"themes/simpleboot3/public\nav.html";i:1506308040;s:38:"themes/simpleboot3/public\scripts.html";i:1506308040;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>首页 <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<?php 
/*可以加多个方法哟！*/
function _sp_helloworld(){
	echo "hello ThinkCMF!";
}

function _sp_helloworld2(){
	echo "hello ThinkCMF2!";
}


function _sp_helloworld3(){
	echo "hello ThinkCMF3!";
}

 ?>
<meta name="author" content="ThinkCMF">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<!-- HTML5 shim for IE8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="icon" href="__TMPL__/public/assets/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="__TMPL__/public/assets/images/favicon.ico" type="image/x-icon">
<link href="__TMPL__/public/assets/simpleboot3/themes/simpleboot3/bootstrap.min.css" rel="stylesheet">
<link href="__TMPL__/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css">
<!--[if IE 7]>
<link rel="stylesheet" href="__TMPL__/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="__TMPL__/public/assets/css/style.css" rel="stylesheet">
<style>
    /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
    #backtotop {
        position: fixed;
        bottom: 50px;
        right: 20px;
        display: none;
        cursor: pointer;
        font-size: 50px;
        z-index: 9999;
    }

    #backtotop:hover {
        color: #333
    }

    #main-menu-user li.user {
        display: none
    }
</style>
	
    <link href="__TMPL__/public/assets/css/shitilist/base.css" rel="stylesheet" type="text/css" />
    <link href="__TMPL__/public/assets/css/shitilist/chen.css" rel="stylesheet" type="text/css" />
    <link href="__TMPL__/public/assets/css/shitilist/list.css" rel="stylesheet" type="text/css" />



    <style>
        .caption-wraper {
            position: absolute;
            left: 50%;
            bottom: 2em;
        }

        .caption-wraper .caption {
            position: relative;
            left: -50%;
            background-color: rgba(0, 0, 0, 0.54);
            padding: 0.4em 1em;
            color: #fff;
            -webkit-border-radius: 1.2em;
            -moz-border-radius: 1.2em;
            -ms-border-radius: 1.2em;
            -o-border-radius: 1.2em;
            border-radius: 1.2em;
        }

        .tc-gridbox {
            margin: 0;
        }

        @media (max-width: 767px) {
            .caption-wraper {
                left: 0;
                bottom: 0.4em;
            }

            .caption-wraper .caption {
                left: 0;
                padding: 0.2em 0.4em;
                font-size: 0.92em;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                -ms-border-radius: 0;
                -o-border-radius: 0;
                border-radius: 0;
            }
        }

    </style>
    <?php 
    \think\Hook::listen('before_head_end',$temp59c8740b32cc0,null,false);
 ?>
</head>
<body class="body-white">
<nav class="navbar navbar-default navbar-fixed-top active">
    <div class="container active">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="__ROOT__/">学生在线测试系统 <!--<?php echo (isset($theme_vars['company_name']) && ($theme_vars['company_name'] !== '')?$theme_vars['company_name']:'ThinkCMF5'); ?>--></a>
        </div>

        <div class="collapse navbar-collapse active" id="bs-example-navbar-collapse-1">
            <ul id="main-menu" class="nav navbar-nav">
                <?php

function __parse_navigation58b20b73ebb06233300fd87549fa6616($menus,$level=1){
$_parse_navigation_func_name = '__parse_navigation58b20b73ebb06233300fd87549fa6616';
if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$menu): if(empty($menu['children'])): ?>
    <li class="menu-item menu-item-level-<?php echo $level; ?>">
    
                        <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                            <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?>
                        </a>
                    
    </li>
<?php endif; if(!empty($menu['children'])): ?>
    <li class="dropdown dropdown-custom dropdown-custom-level-<?php echo $level; ?>">
        
                        <a href="#" class="dropdown-toggle dropdown-toggle-<?php echo $level; ?>" data-toggle="dropdown">
                            <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?><span class="caret"></span>
                        </a>
                    
        <ul class="dropdown-menu dropdown-menu-level-<?php echo $level; ?>">
            <?php 
            $mLevel=$level+1;
             ?>
            <?php echo $_parse_navigation_func_name($menu['children'],$mLevel); ?>
        </ul>
    </li>
<?php endif; endforeach; endif; else: echo "" ;endif; 
}

    $navMenuModel = new \app\admin\model\NavMenuModel();
    $menus = $navMenuModel->navMenusTreeArray('',0);
if(''==''): ?>
    <?php echo __parse_navigation58b20b73ebb06233300fd87549fa6616($menus); else: ?>
    < id="main-navigation" class="nav navbar-nav navbar-nav-custom">
        <?php echo __parse_navigation58b20b73ebb06233300fd87549fa6616($menus); ?>
    </>
<?php endif; ?>

            </ul>
            <ul class="nav navbar-nav navbar-right" id="main-menu-user">
                <!--
                <li class="login">
                    <a class="dropdown-toggle notifactions" href="/index.php/user/notification/index"> <i
                            class="fa fa-envelope"></i> <span class="count">0</span></a>
                </li>
                -->
                <li class="dropdown user login">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <?php $user=cmf_get_current_user(); if(empty($user['avatar'])): ?>
                            <img src="__TMPL__/public/assets/images/headicon.png" class="headicon">
                            <?php else: ?>
                            <img src="<?php echo cmf_get_user_avatar_url($user['avatar']); ?>" class="headicon" width="30"/>
                        <?php endif; ?>
                        <span class="user-nickname"></span><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo cmf_url('user/Profile/center'); ?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo cmf_url('user/Index/logout'); ?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
                    </ul>
                </li>
                <li class="dropdown user offline" style="display: list-item;">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <img src="__TMPL__/public/assets/images/headicon.png" class="headicon">
                        登录<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo cmf_url('user/Login/index'); ?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo cmf_url('user/Register/index'); ?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" method="post" action="<?php echo cmf_url('portal/Search/index'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Search"
                           value="<?php echo input('param.keyword',''); ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Go" style="margin:0"/>
            </form>
        </div>
    </div>
</nav>
<div class="main_content clearfix">
    <div class="caption bor">
        <p class="caption-lf"><span class="name">JAVA试题</span><a href="/exam/" style="cursor:pointer;" class="other">[切换考试]</a></p>
        <p class="caption-rt"><a href="http://passport.233.com/login/?redirecturl=http://wx.233.com/tiku/history/"><i></i>我的记录</a></p>
    </div>
    <div class="list-main-con">
        <div class="pracl-dalist pracl-moni-dalist bor">
            <ul><li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364356" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1140/n/364356.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1140/n/364356.html">2017年一级消防工程师考试《消防安全技术实务》模拟试卷（二）</a> </h3><p  style="display:block"> <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>86人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364355" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1140/n/364355.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1140/n/364355.html">2017年一级消防工程师考试《消防安全技术实务》模拟试卷（一）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>81人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364354" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1139/n/364354.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1139/n/364354.html">2017年一级消防工程师考试《消防安全技术综合能力》模拟试卷（二）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>95人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364352" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1139/n/364352.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1139/n/364352.html">2017年一级消防工程师考试《消防安全技术综合能力》模拟试卷（一）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>88人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364319" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1142/n/364319.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1142/n/364319.html">2017年一级消防工程师考试《消防安全案例分析》模拟试卷（二） </a> </h3><p > <span>作答时间180分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:20%;"></b></i> </span> <span>104人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364318" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1142/n/364318.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1142/n/364318.html">2017年一级消防工程师考试《消防安全案例分析》模拟试卷（一） </a> </h3><p > <span>作答时间180分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>90人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364278" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1142/n/364278.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1142/n/364278.html">2017年一级消防工程师考试《消防安全案例分析》高频考点卷（三） </a> </h3><p > <span>作答时间180分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:20%;"></b></i> </span> <span>94人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364277" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1142/n/364277.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1142/n/364277.html">2017年一级消防工程师考试《消防安全案例分析》高频考点卷（二） </a> </h3><p > <span>作答时间180分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:20%;"></b></i> </span> <span>94人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364276" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1142/n/364276.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1142/n/364276.html">2017年一级消防工程师考试《消防安全案例分析》高频考点卷（一） </a> </h3><p > <span>作答时间180分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>96人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364230" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1139/n/364230.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1139/n/364230.html">2017年一级消防工程师考试《消防安全技术综合能力》高频考点卷（三）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>99人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364229" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1139/n/364229.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1139/n/364229.html">2017年一级消防工程师考试《消防安全技术综合能力》高频考点卷（二）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:20%;"></b></i> </span> <span>93人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364228" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1139/n/364228.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1139/n/364228.html">2017年一级消防工程师考试《消防安全技术综合能力》高频考点卷（一）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>93人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364227" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1140/n/364227.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1140/n/364227.html">2017年一级消防工程师考试《消防安全技术实务》高频考点卷（三）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>97人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364226" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1140/n/364226.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1140/n/364226.html">2017年一级消防工程师考试《消防安全技术实务》高频考点卷（二）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:80%;"></b></i> </span> <span>98人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/364225" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1140/n/364225.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1140/n/364225.html">2017年一级消防工程师考试《消防安全技术实务》高频考点卷（一）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>98人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/361295" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1139/n/361295.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1139/n/361295.html">2017年一级消防工程师考试《消防安全技术综合能力》精选试题（四）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>406人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/361294" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1139/n/361294.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1139/n/361294.html">2017年一级消防工程师考试《消防安全技术综合能力》精选试题（三）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>312人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/361293" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1139/n/361293.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1139/n/361293.html">2017年一级消防工程师考试《消防安全技术综合能力》精选试题（二）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>345人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/361291" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1140/n/361291.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1140/n/361291.html">2017年一级消防工程师考试《消防安全技术实务》精选试题（三）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:100%;"></b></i> </span> <span>358人参考</span></p></div></li>
                <li><span class="dal-but"> <a target="_blank" href="http://wx.233.com/tiku/down/361290" class="downPage"> 下载试卷 </a> <a  href="http://ks.233.com/1140/n/361290.html"  target="_blank" class="zt-go"><i></i>做题</a></span><div><h3> <a href="http://ks.233.com/1140/n/361290.html">2017年一级消防工程师考试《消防安全技术实务》精选试题（二）</a> </h3><p > <span>作答时间150分钟，卷面总分120分</span> <span><em>质量</em><i class="vso-star"><b style=" width:80%;"></b></i> </span> <span>345人参考</span></p></div></li>
            </ul><div id="list-page" class="lmj-page-main" data-page="1" data-maxpage="7"><a class="lmj-page-on">上一页</a> <a class="lmj-page-on">1</a> <a href="../../../index.php">2</a> <a href="../../../index.php">3</a> <a href="../../../index.php">4</a> <a href="../../../index.php">5</a><b>...</b> <a href="../../../index.php">7</a><a href="../../../index.php">下一页</a><i>共 139 条</i><input type="text" class="lmj-page-input" name="input"><a class="lmj-page-go">跳转</a></div>
        </div>
        <div class="le-pracright bor">
            <div class="le-pracrcon">
               <!-- <div class="prlist client">
                    <h3>扫一扫 手机做题</h3>
                    <div class="img" > <img src="http://img.233.com/ks/2016/ewm.png" /> </div>
                </div>-->
                <div class="prlist"><h3>热门课程</h3><ul>
                    <li>
                        <a class="img" href="http://wx.233.com/cfe/">
                            <img alt="2017一级消防高端班，双名师解密90%考点，送VIP题库，全科送教材+实操班+规范班" src="http://img3.233.com/2017-07/21/150060542032521.jpg">
                            <h4>双名师解密核心考点，全科送教材+实操班+规范班+三合一班，不限次免费重学至通关，助力零基础过3科</h4>
                            <p><i></i>88670人参加</p>
                        </a></li>
                    <li class="line"></li><li>
                    <a class="img" href="http://wx.233.com/cfe/">
                        <img alt="2017一级消防规范套餐班，详解六大规核心考点，含建规、火规、水规、灭火器、人防、汽车库" src="http://img3.233.com/2017-07/21/150060586682951.jpg">
                        <h4>详解六大规核心考点，含建规、火规、水规、灭火器、人防、汽车库</h4>
                        <p><i></i>69698人参加</p>
                    </a></li>
                </ul></div>

                <div class="prlist clearfix">
                    <h3><em>2895人</em>正在练习</h3>
                    <div class="pright-box clearfix">
                        <ul class="list-item clearfix" >
                            <li class="item clearfix"> <i class="ico-d this"></i> <span class="time"><i></i> 25分钟前</span> <span class="content"><a href="http://wx.233.com/quan/u/23567487" target="_blank" class="gry"><img class="head-pic" src="http://img.233.com/wx/img/uc/Avatar.png"> <font>mobile_9r9og1s：</font></a><p class="kc-name1"><em>学习了:</em><a href="http://wx.233.com/tiku/exam/item/364623">2017年9月计算机二级考试《MS Office高级应用》操作题强化提分卷(2)</a></p></span></li><li class="line clear"></li>
                            <li class="item clearfix"> <i class="ico-d this"></i> <span class="time"><i></i> 49分钟前</span> <span class="content"><a href="http://wx.233.com/quan/u/23538006" target="_blank" class="gry"><img class="head-pic" src="http://img.233.com/wx/img/uc/Avatar.png"> <font>mobile_9r9og1s：</font></a><p class="kc-name1"><em>学习了:</em><a href="http://wx.233.com/tiku/exam/item/364622">2017年9月计算机二级考试《MS Office高级应用》操作题强化提分卷(1)</a></p></span></li><li class="line clear"></li>
                            <li class="item clearfix"> <i class="ico-d this"></i> <span class="time"><i></i> 3小时前</span> <span class="content"><a href="http://wx.233.com/quan/u/22240483" target="_blank" class="gry"><img class="head-pic" src="http://img.233.com/wx/img/uc/Avatar.png"> <font>mobile_9r9og1s：</font></a><p class="kc-name1"><em>学习了:</em><a href="http://wx.233.com/tiku/exam/item/364216">2017年中级会计师考试《财务管理》摸底试卷(1)</a></p></span></li><li class="line clear"></li>
                        </ul>
                    </div></div>
                <div class="prlist baidugg clearfix" id="PAGE_AD_4382807"></div>
                <script type="text/javascript" src="http://cbjs.baidu.com/js/m.js?v=1.0.0"></script>
                <script type="text/javascript">BAIDU_CLB_fillSlotAsync('4382807','PAGE_AD_4382807');</script>
            </div>

        </div>

    </div>
</div>


<!-- /container -->
<script type="text/javascript">
//全局变量
var GV = {
    ROOT: "__ROOT__/",
    WEB_ROOT: "__WEB_ROOT__/",
    JS_ROOT: "static/js/"
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="__TMPL__/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="__TMPL__/public/assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="__STATIC__/js/wind.js"></script>
    <script src="__TMPL__/public/assets/simpleboot3/bootstrap/js/bootstrap.min.js"></script>
    <script src="__STATIC__/js/frontend.js"></script>
	<script>
	$(function(){
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$("#main-menu a").each(function() {
			if ($(this)[0].href == String(window.location)) {
				$(this).parentsUntil("#main-menu>ul>li").addClass("active");
			}
		});
		
		$.post("<?php echo url('user/index/isLogin'); ?>",{},function(data){
		    console.log(data);
			if(data.code==1){
				if(data.data.user.avatar){
				}

				$("#main-menu-user span.user-nickname").text(data.data.user.user_nickname?data.data.user.user_nickname:data.data.user.user_login);
				$("#main-menu-user li.login").show();
                $("#main-menu-user li.offline").hide();

			}

			if(data.code==0){
                $("#main-menu-user li.login").hide();
				$("#main-menu-user li.offline").show();
			}

		});

        ;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


<script src="__TMPL__/public/assets/js/slippry.min.js"></script>
<script>
    $(function () {
        $("#home-slider").slippry({
            transition: 'fade',
            useCSS: true,
            captions: false,
            speed: 1000,
            pause: 3000,
            auto: true,
            preload: 'visible'
        });
        $("#home-slider").show();
    });
</script>
<?php 
    \think\Hook::listen('before_body_end',$temp59c8740b32d7e,null,false);
 ?>
</body>
</html>
