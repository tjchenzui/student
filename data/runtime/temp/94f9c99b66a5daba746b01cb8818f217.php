<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"themes/admin_simpleboot3/admin\main\index.html";i:1506308037;s:43:"themes/admin_simpleboot3/public\header.html";i:1506308038;}*/ ?>
<?php function _get_system_widget($name){ } ?>
<link href="__TMPL__/public/assets/layout.css" rel="stylesheet">
<link href="__TMPL__/public/assets/control_index.css" rel="stylesheet">

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="__TMPL__/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="__TMPL__/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="__STATIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "__ROOT__/",
            WEB_ROOT: "__WEB_ROOT__/",
            JS_ROOT: "static/js/",
            APP: '<?php echo \think\Request::instance()->module(); ?>'/*当前应用名*/
        };
    </script>
    <script src="__TMPL__/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="__STATIC__/js/wind.js"></script>
    <script src="__TMPL__/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; 
    \think\Hook::listen('admin_before_head_end',$temp59c872b7de0a7,null,false);
 ?>
</head>
<style type="text/css">
    .padding-big2{
        padding: 20px 20px 0px 20px;
        text-align: center;
        font-size: 30px;
        font-family: 隶书;
    }
    .padding-big2 #time{
        text-align: right;
        font-size: 16px;
        margin: 0px;

    }
    .padding-big {
        padding: 0px 20px;
    }
</style>

<script language="javascript">
function showTime(){
var date=new Date(); //获取时间集
<!--获取年月日时分秒 -->
var year =date.getYear();
var month=date.getMonth()+1;
var day=date.getDate();
var hours = date.getHours();
var minutes = date.getMinutes();
var seconds = date.getSeconds();
<!--获取一周中系统日期的编号，星期天开始编号，编号从0开始；即星期天的编号为0...-->
var myWeekDay = date.getDay();
var weekDay = "";
<!--根据日期在一周中的编号确定weekDay的值 ;-->
if(myWeekDay==0) weekDay = "星期日";
if(myWeekDay==1) weekDay = "星期一";
if(myWeekDay==2) weekDay = "星期二";
if(myWeekDay==3) weekDay = "星期三";
if(myWeekDay==4) weekDay = "星期四";
if(myWeekDay==5) weekDay = "星期五";
if(myWeekDay==6) weekDay = "星期六";
<!--定义变量根据需求按自己喜欢的格式保存日期-->
var word = "";
if(hours < 6){word="AM 凌晨好!";}
else if (hours < 9){word="AM 早上好!";}
else if (hours < 12){word="AM 上午好!";}
else if (hours < 14){word="NOON 中午好!";}
else if (hours < 17){word="PM 下午好!";}
else if (hours < 19){word="PM 傍晚好!";}
else if (hours < 22){word="PM 晚上好!";}
else {word="DEEP NIGHT 深夜好!";}

if(month.toString().length == 1){
month='0'+month;
}
if(day.toString().length == 1){
day='0'+day;
}
if(hours.toString().length == 1){
hours='0'+hours;
}
if(minutes.toString().length == 1){
minutes='0'+minutes;
}
if(seconds.toString().length == 1){
seconds='0'+seconds;
}
<!--按自己喜欢的格式保存日期-->
var formatTime=/*year+"年"+*/month+"月"+day+"日 "+hours+":"+minutes+":"+seconds+" "+weekDay+" "+word;
window.setInterval("showTime()",1000);
document.getElementById("time").innerHTML=formatTime;//document.getElementById("time").innerText=formatTime;
}
</script>
<body onload = "showTime()">
<div class="view-product background-color">
    <div class="padding-big2">
            欢迎进入学生在线测试
        <div id ="time" align="center" style="color:#3366FF">
            <span></span>
        </div>
    </div>
    <div class="padding-big background-color">
        <div class="account-info clearfix">
            <div class="text-box-main min-width-300 fl">
                <dl>
                    <dt class="padding-big-left lists-border-list clearfix">
                        <div class="title fl padding-big-top padding-big-bottom">
                            <p><?php echo $user['user_login']; ?></p>
                            <p class="margin-small-top clearfix">
                                <span class="fl">账户安全级别：<em class="text-blue-deep">高</em></span>
                                <!--没有实名认证-->
                                <!-- <a class="button bg-blue-deep icon icon-button-blue fl margin-left" href="#">立即实名认证</a> -->
                                <!--通过实名认证-->
                                <a class="button bg-green-deep icon icon-button-green fl margin-left" href="#">通过实名认证</a>
                            </p>
                        </div>
                        <span class="fr icon-head">
                            <img src="Images/noavatar_middle.gif" alt="账户头像">
                        </span>
                    </dt>
                    <dd class="padding-big clearfix">
                        <p class="w50 fl">
                            <i class="fl icon icon-mobile"></i>

                            <span class="fl margin-left">手机：已绑定</span>
                        </p>
                        <p class="w50 fl">
                            <i class="fl icon icon-email"></i>

                            <span class="fl margin-left">邮箱：已绑定</span>
                        </p>
                        <!-- <p class="w50 fl">
                            <i class="fl icon icon-wechat"></i>
                            <span class="fl margin-left">微信：<a class="text-underline" href="#">未绑定</a></span>
                        </p>
                        <p class="w50 fl">
                            <i class="fl icon icon-password"></i>
                                                                    <span class="fl margin-left">支付密码：<a class='text-underline' href="#"> 未设置</a></span>
                                                                </p>  -->
                    </dd>
                </dl>
            </div>
            <div class="text-box-main min-width-360 fl">
                <dl>
                    <dt class="padding-big lists-border-list clearfix">
                        <div class="fl w50 title">
                            <p>账户余额</p>
                            <p class="margin-small-top clearfix">
                                <span class="fl"><em class="h3 text-red-deep">0.00 </em>元</span>
                                <a class="fl margin-left button btn-red text-white"  href="<?php echo url('kecheng/admin_classification/index'); ?>">充值</a>
                            </p>
                        </div>
                        <div class="fl w50 padding-left title">
                            <p>短信条数</p>
                            <p class="margin-small-top clearfix">
                                <span class="fl"><em class="h3 text-blue-deep">0 </em>条</span>
                                <a class="fl margin-left button btn-red text-white" target="view_window" href="#">购买</a>
                            </p>
                        </div>
                    </dt>
                    <dd class="padding-big">
                        <div class="account-class text-hidden">
                            <a href="#">未支付订单</a>
                            <a href="#">已支付订单</a>
                            <a href="#">充值记录</a>
                            <a href="#">消费记录</a>
                            <a href="#">提交工单</a>
                        </div>
                    </dd>
                </dl>
            </div>
            <div class="text-box-main min-width-300 fl margin-right-none">
                <dl>
                    <dt class="padding-big lists-border-list clearfix">
                        <div class="fl title">
                            <p>交流群：</p>
                            <p class="text-sliver text-default margin-small-top">
                                <em class="h3 text-golden margin-big-right">❹群：</em>537054447  更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a>
                            </p>
                        </div>
                        <div class="fr">
                            <a class="button btn-orange text-white" href="http://jq.qq.com/?_wv=1027&k=28Xajoq" target="_blank">点击加入</a>
                        </div>
                    </dt>
                    <dd class="padding-big">
                        <div class="account-class text-hidden">
                            <p>您好，我是您的交流群：，在使用中有任何问题，欢迎随时联系！</p>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>

        <!--产品-->
        <div class="account-product margin-big-top clearfix">
            <div class="text-box-main padding-big fl mine-product">
                <h2 class="h6 margin-big-bottom">我的产品</h2>
                <div class="mine-product-content clearfix">
                    <ul class="w50 fl lists">
                        <!-- <li class="w70 lists-border-list">
                            <p class="border-list-text">云托管服务： <em class="orange">0</em>  台
                                <a class="text-main fr" href="#">查看</a>
                            </p>
                        </li>  -->
                        <li class="w70 lists-border-list">
                            <p class="border-list-text">云市场应用： <em class="orange">0</em> 台
                                <a class="text-main fr" href="#">查看</a>
                            </p>
                        </li>
                        <li class="w70 lists-border-list">
                            <p class="border-list-text">云市场模块： <em class="orange">0</em> 台
                                <a class="text-main fr" href="#">查看</a>
                            </p>
                        </li>
                        <li class="w70 lists-border-list">
                            <p class="border-list-text">云市场模板： <em class="orange">0</em> 台
                                <a class="text-main fr" href="#">查看</a>
                            </p>
                        </li>

                    </ul>
                    <ul class="w50 fl lists">
                        <!-- <li class="w80 lists-border-list">
                            <p class="border-list-text">15天内到期的云托管服务： <em class="orange">0</em>  台
                                <a class="text-main fr" href="#">查看</a>
                            </p>
                        </li>  -->
                        <li class="w80 lists-border-list">
                            <p class="border-list-text">15天内到期的云市场应用： <em class="orange">0</em> 台
                                <a class="text-main fr" href="#">查看</a>
                            </p>
                        </li>
                        <li class="w80 lists-border-list">
                            <p class="border-list-text">15天内到期的云市场模块： <em class="orange">0</em> 台
                                <a class="text-main fr" href="#">查看</a>
                            </p>
                        </li>
                        <li class="w80 lists-border-list">
                            <p class="border-list-text">15天内到期的云市场模板： <em class="orange">0</em> 台
                                <a class="text-main fr" href="#">查看</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-box-main padding-big fl w25">
                <h2 class="h6 margin-big-bottom">我的产品</h2>
                <ul class="lists">
                    <li class="lists-list"><a href="#">05-10 云托管服务临时维护公告管服务临时维护公告管服务临时维护公告管服务临时维护公告管服务临时维护公告管服务临时维护公告</a></li>
                    <li class="lists-list"><a href="#">05-10 云托管服务临时维护公告</a></li>
                    <li class="lists-list"><a href="#">05-10 云托管服务临时维护公告</a></li>
                    <li class="lists-list"><a href="#">05-10 云托管服务临时维护公告</a></li>
                    <li class="lists-list"><a href="#">05-10 云托管服务临时维护公告</a></li>
                    <li class="lists-list"><a href="#">05-10 云托管服务临时维护公告</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php 
    \think\Hook::listen('admin_before_body_end',$temp59c872b7de108,null,false);
 ?>
</body>
</html>