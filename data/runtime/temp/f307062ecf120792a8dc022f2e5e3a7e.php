<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:38:"themes/simpleboot3/kecheng\\index.html";i:1505099760;s:35:"themes/simpleboot3/public\head.html";i:1504866290;s:39:"themes/simpleboot3/public\function.html";i:1504866290;s:34:"themes/simpleboot3/public\nav.html";i:1504940378;s:38:"themes/simpleboot3/public\scripts.html";i:1504866290;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>首页 <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
    
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
	
    <link href="__TMPL__/public/assets/css/slippry/slippry.css" rel="stylesheet">
    <link href="__TMPL__/public/assets/css/kecheng/chen.css" rel="stylesheet">

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
    \think\Hook::listen('before_head_end',$temp59bb7bca99297,null,false);
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

function __parse_navigation782d25de6c9353d301f32f4729e7549d($menus,$level=1){
$_parse_navigation_func_name = '__parse_navigation782d25de6c9353d301f32f4729e7549d';
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
    <?php echo __parse_navigation782d25de6c9353d301f32f4729e7549d($menus); else: ?>
    < id="main-navigation" class="nav navbar-nav navbar-nav-custom">
        <?php echo __parse_navigation782d25de6c9353d301f32f4729e7549d($menus); ?>
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
<!--jiade kaishi-->
<section class="class-section ">
    <div class="container">
        <div class="text-line">
            <h2 style="text-align: center">
                <span>推荐课程</span>
                <div class="line"></div>
            </h2>
            <div class="subtitle">班级化学习体系，给你更多的课程相关服务。</div>
        </div>
        <div class="recommend-class-list row">
            <div class="col-md-3 col-xs-6">
                <div class="class-item">
                    <div class="class-img-wrap">
                        <a class="class-img" href="/classroom/58">
                            <img src="__TMPL__/public/assets/images/kecheng/001.jpg" alt="《深度学习》第五期" class="img-responsive" data-echo="http://scb1a9q0-sb.qiqiuyun.net/files/course/2017/08-28/10144661b8b6898371.png" />
                        </a>
                        <div class="mask">

                            <a href="/classroom/58" class="btn btn-warning">立即加入</a>
                        </div>
                    </div>
                    <h3><a class="link-dark" href="/classroom/58">《深度学习》第五期</a></h3>
                    <div class="metas">共有3门课程</div>
                </div>          </div>
            <div class="col-md-3 col-xs-6">
                <div class="class-item">
                    <div class="class-img-wrap">
                        <a class="class-img" href="/classroom/57">
                            <img src="__TMPL__/public/assets/images/kecheng/001.jpg" alt="《BAT面试算法特训班》" class="img-responsive" data-echo="http://scb1a9q0-sb.qiqiuyun.net/files/course/2017/08-14/131454e3cc73024860.jpg" />
                        </a>
                        <div class="mask">

                            <a href="/classroom/57" class="btn btn-warning">立即加入</a>
                        </div>
                    </div>
                    <h3><a class="link-dark" href="/classroom/57">《BAT面试算法特训班》</a></h3>
                    <div class="metas">共有3门课程</div>
                </div>          </div>
            <div class="col-md-3 col-xs-6">
                <div class="class-item">
                    <div class="class-img-wrap">
                        <a class="class-img" href="/classroom/56">
                            <img src="__TMPL__/public/assets/images/kecheng/001.jpg" alt="《CTA投资与程序化交易》第一期" class="img-responsive" data-echo="http://scb1a9q0-sb.qiqiuyun.net/files/course/2017/07-31/182324c3f8b1412065.png" />
                        </a>
                        <div class="mask">

                            <a href="/classroom/56" class="btn btn-warning">立即加入</a>
                        </div>
                    </div>
                    <h3><a class="link-dark" href="/classroom/56">《CTA投资与程序化交易》第一期</a></h3>
                    <div class="metas">共有3门课程</div>
                </div>          </div>
            <div class="col-md-3 col-xs-6">
                <div class="class-item">
                    <div class="class-img-wrap">
                        <a class="class-img" href="/classroom/55">
                            <img src="__TMPL__/public/assets/images/kecheng/001.jpg" alt="《机器学习》升级版VI" class="img-responsive" data-echo="http://scb1a9q0-sb.qiqiuyun.net/files/course/2017/07-18/1808226c52f1301450.png" />
                        </a>
                        <div class="mask">

                            <a href="/classroom/55" class="btn btn-warning">立即加入</a>
                        </div>
                    </div>
                    <h3><a class="link-dark" href="/classroom/55">《机器学习》升级版VI</a></h3>
                    <div class="metas">共有3门课程</div>
                </div>          </div>
            <div class="col-md-3 col-xs-6">
                <div class="class-item">
                    <div class="class-img-wrap">
                        <a class="class-img" href="/classroom/17">
                            <img src="__TMPL__/public/assets/images/kecheng/001.jpg" alt="《数据科学的数学、概率和统计》" class="img-responsive" data-echo="http://scb1a9q0-sb.qiqiuyun.net/files/default/2016/05-15/2253073d73ce463384.jpg" />
                        </a>
                        <div class="mask">

                            <a href="/classroom/17" class="btn btn-warning">立即加入</a>
                        </div>
                    </div>
                    <h3><a class="link-dark" href="/classroom/17">《数据科学的数学、概率和统计》</a></h3>
                    <div class="metas">共有3门课程</div>
                </div>          </div>
            <div class="col-md-3 col-xs-6">
                <div class="class-item">
                    <div class="class-img-wrap">
                        <a class="class-img" href="/classroom/18">
                            <img src="__TMPL__/public/assets/images/kecheng/001.jpg" alt="《数据分析和数据挖掘》第一期" class="img-responsive" data-echo="http://scb1a9q0-sb.qiqiuyun.net/files/default/2016/05-29/1632502b61fc662144.jpg" />
                        </a>
                        <div class="mask">

                            <a href="/classroom/18" class="btn btn-warning">立即加入</a>
                        </div>
                    </div>
                    <h3><a class="link-dark" href="/classroom/18">《数据分析和数据挖掘》第一期</a></h3>
                    <div class="metas">共有2门课程</div>
                </div>          </div>
            <div class="col-md-3 col-xs-6">
                <div class="class-item">
                    <div class="class-img-wrap">
                        <a class="class-img" href="/classroom/24">
                            <img src="__TMPL__/public/assets/images/kecheng/001.jpg" alt="《大数据平台之Linux、Java、Scala》" class="img-responsive" data-echo="http://scb1a9q0-sb.qiqiuyun.net/files/course/2016/08-24/121544033c08892051.jpg" />
                        </a>
                        <div class="mask">

                            <a href="/classroom/24" class="btn btn-warning">立即加入</a>
                        </div>
                    </div>
                    <h3><a class="link-dark" href="/classroom/24">《大数据平台之Linux、Java、Scala》</a></h3>
                    <div class="metas">共有3门课程</div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section-more-btn" style="text-align: center">
            <a href="#">
                更多课程
            </a>
        </div>
    </div>
</section>


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
    \think\Hook::listen('before_body_end',$temp59bb7bca992d1,null,false);
 ?>
</body>
</html>
