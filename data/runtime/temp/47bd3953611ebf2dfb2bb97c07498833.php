<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:41:"themes/simpleboot3/datiyemian\\index.html";i:1506308039;s:35:"themes/simpleboot3/public\head.html";i:1506308040;s:39:"themes/simpleboot3/public\function.html";i:1506308040;s:34:"themes/simpleboot3/public\nav.html";i:1506308040;s:38:"themes/simpleboot3/public\scripts.html";i:1506308040;}*/ ?>
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
    <!--jiade kaishi-->
    <link href="__TMPL__/public/assets/css/xuanzheti/iconfont.css" rel="stylesheet" type="text/css"/>
    <!--<link href="__TMPL__/public/assets/css/xuanzheti/main.css" rel="stylesheet" type="text/css"/>
    --><link href="__TMPL__/public/assets/css/xuanzheti/test.css" rel="stylesheet" type="text/css"/>
    <style>
        .hasBeenAnswer {
            background: #5d9cec;
            color:#fff;
        }

    </style>
    <!--jiade end-->

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
    \think\Hook::listen('before_head_end',$temp59c8740dd178b,null,false);
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

function __parse_navigatione23149f94cf9aa8302c60b2934b96d6c($menus,$level=1){
$_parse_navigation_func_name = '__parse_navigatione23149f94cf9aa8302c60b2934b96d6c';
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
    <?php echo __parse_navigatione23149f94cf9aa8302c60b2934b96d6c($menus); else: ?>
    < id="main-navigation" class="nav navbar-nav navbar-nav-custom">
        <?php echo __parse_navigatione23149f94cf9aa8302c60b2934b96d6c($menus); ?>
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
<div class="main">
    <!--nr start-->
    <div class="test_main">
        <div class="nr_left">
            <div class="test">
                <form action="" method="post">
                    <div class="test_title">
                        <p class="test_time">
                            <i class="icon iconfont">&#xe6fb;</i><b class="alt-1">01:40</b>
                        </p>
                        <font><input type="button" name="test_jiaojuan" value="交卷"></font>
                    </div>

                    <div class="test_content">
                        <div class="test_content_title">
                            <h2>单选题</h2>
                            <p>
                                <span>共</span><i class="content_lit">60</i><span>题，</span><span>合计</span><i class="content_fs">60</i><span>分</span>
                            </p>
                        </div>
                    </div>
                    <div class="test_content_nr">
                        <ul>
                            <li id="qu_0_0">
                                <div class="test_content_nr_tt">
                                    <i>1</i><span>(1分)</span><font>在生产管理信息系统中，下列操作步骤能正确将工单推进流程的是（  ）</font><b class="icon iconfont">&#xe881;</b>
                                </div>

                                <div class="test_content_nr_main">
                                    <ul>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer1"
                                                   id="0_answer_1_option_1"
                                            />


                                            <label for="0_answer_1_option_1">
                                                A.
                                                <p class="ue" style="display: inline;">在工具栏中点击“workflow”标签</p>
                                            </label>
                                        </li>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer1"
                                                   id="0_answer_1_option_2"
                                            />


                                            <label for="0_answer_1_option_2">
                                                B.
                                                <p class="ue" style="display: inline;">在缺陷单界面中点击“推进流程”按钮</p>
                                            </label>
                                        </li>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer1"
                                                   id="0_answer_1_option_3"
                                            />


                                            <label for="0_answer_1_option_3">
                                                C.
                                                <p class="ue" style="display: inline;">在缺陷单界面中点击“提交”按钮</p>
                                            </label>
                                        </li>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer1"
                                                   id="0_answer_1_option_4"
                                            />


                                            <label for="0_answer_1_option_4">
                                                D.
                                                <p class="ue" style="display: inline;">后台启动流程推进</p>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li id="qu_0_1">
                                <div class="test_content_nr_tt">
                                    <i>2</i><span>(1分)</span><font>在营销系统中查询客户有无欠费、余额及抄表数据接待客户时应做到哪些最基本的礼仪？</font><b class="icon iconfont">&#xe881;</b>
                                </div>

                                <div class="test_content_nr_main">
                                    <ul>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer2"
                                                   id="0_answer_2_option_1"
                                            />


                                            <label for="0_answer_2_option_1">
                                                A.
                                                <p class="ue" style="display: inline;">起身、微笑、示坐、问候客户</p>
                                            </label>
                                        </li>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer2"
                                                   id="0_answer_2_option_2"
                                            />


                                            <label for="0_answer_2_option_2">
                                                B.
                                                <p class="ue" style="display: inline;">坐着，问候客户</p>
                                            </label>
                                        </li>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer2"
                                                   id="0_answer_2_option_3"
                                            />


                                            <label for="0_answer_2_option_3">
                                                C.
                                                <p class="ue" style="display: inline;">坐着，问候客户</p>
                                            </label>
                                        </li>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer2"
                                                   id="0_answer_2_option_4"
                                            />


                                            <label for="0_answer_2_option_4">
                                                D.
                                                <p class="ue" style="display: inline;">请问需要办理什么业务</p>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li id="qu_0_2">
                                <div class="test_content_nr_tt">
                                    <i>3</i><span>(1分)</span><font>请在下列选项中选择正确进入电力营销系统网址</font><b class="icon iconfont">&#xe881;</b>
                                </div>

                                <div class="test_content_nr_main">
                                    <ul>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer3"
                                                   id="0_answer_3_option_1"
                                            />


                                            <label for="0_answer_3_option_1">
                                                A.
                                                <p class="ue" style="display: inline;">http://10.113.225.24:83/epm/static/logon/logon.jsp</p>
                                            </label>
                                        </li>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer3"
                                                   id="0_answer_3_option_2"
                                            />


                                            <label for="0_answer_3_option_2">
                                                B.
                                                <p class="ue" style="display: inline;">http://10.113.255.24:83/epm/static/logon/logon.jsp</p>
                                            </label>
                                        </li>

                                        <li class="option">

                                            <input type="radio" class="radioOrCheck" name="answer3"
                                                   id="0_answer_3_option_3"
                                            />


                                            <label for="0_answer_3_option_3">
                                                C.
                                                <p class="ue" style="display: inline;">http://10.113.255.24:81/epm/static/logon/logon.jsphttp://10.113.245.24:81/epm/static/logon/logon.jsp</p>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
                <p style="text-align: center">单项选择题【底部】</p>
            </div>
            <h3 style="align-content: center">单项选择题</h3>
        </div>
        <div class="nr_right">
            <div class="nr_rt_main">
                <div class="rt_nr1">
                    <div class="rt_nr1_title">
                        <h1>
                            答题卡
                        </h1>
                        <p class="test_time">
                            <i class="icon iconfont">&#xe6fb;</i><b class="alt-1">01:40</b>
                        </p>
                    </div>

                    <div class="rt_content">
                        <div class="rt_content_tt">
                            <h2>单选题</h2>
                            <p>
                                <span>共</span><i class="content_lit">60</i><span>题</span>
                            </p>
                        </div>
                        <div class="rt_content_nr answerSheet">
                            <ul>
                                <li><a href="#qu_0_0">1</a></li>

                                <li><a href="#qu_0_1">2</a></li>

                                <li><a href="#qu_0_2">3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--nr end-->
    <div class="foot">

    </div>
</div>

<script src="__TMPL__/public/assets/js/xuanzheti/jquery-1.11.3.min.js"></script>
<script src="__TMPL__/public/assets/js/xuanzheti/jquery.easy-pie-chart.js"></script>
<!--时间js-->
<script src="__TMPL__/public/assets/js/xuanzheti/time/jquery.countdown.js"></script>
<script>
    window.jQuery(function($) {
        "use strict";

        $('time').countDown({
            with_separators : false
        });
        $('.alt-1').countDown({
            css_class : 'countdown-alt-1'
        });
        $('.alt-2').countDown({
            css_class : 'countdown-alt-2'
        });

    });


    $(function() {
        $('li.option label').click(function() {
            debugger;
            var examId = $(this).closest('.test_content_nr_main').closest('li').attr('id'); // 得到题目ID
            var cardLi = $('a[href=#' + examId + ']'); // 根据题目ID找到对应答题卡
            // 设置已答题
            if(!cardLi.hasClass('hasBeenAnswer')){
                cardLi.addClass('hasBeenAnswer');
            }

        });
    });
</script>


<!--jieshu and-->



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
    \think\Hook::listen('before_body_end',$temp59c8740dd1800,null,false);
 ?>
</body>
</html>
