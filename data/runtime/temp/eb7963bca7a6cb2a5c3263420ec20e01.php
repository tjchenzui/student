<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"themes/admin_simpleboot3/kecheng\admin_classification\index.html";i:1505379622;s:43:"themes/admin_simpleboot3/public\header.html";i:1504866290;}*/ ?>
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
    <?php endif; ?>
</head>
<style type="text/css">
    .kecheng{
        border: solid 0px;
        margin-top: 30px;
        font-size: 16px;
    }
    .page{
        margin: 10px;
        font-size: 16px;
        text-align: center;
    }
</style>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="<?php echo url('admin_classification/index'); ?>">课程列表</a></li>
        <li><a href="<?php echo url('admin_classification/add'); ?>">添加课程</a></li>
        <!--<li><a href="<?php echo url('AdminIndex/add'); ?>">添加课程</a></li>-->
    </ul>
    <div class="kecheng">
        <form action="#" method="post">
            <table>
                <tr>
                    <td width="50%">
                        课程名称：
                        <select name="chenzui">
                            <?php if(is_array($kecheng) || $kecheng instanceof \think\Collection || $kecheng instanceof \think\Paginator): if( count($kecheng)==0 ) : echo "" ;else: foreach($kecheng as $key=>$vo): ?>
                                <option><?php echo $vo['name']; ?></option>
                             <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </td>
                    <td>
                        <form action="<?php echo url('admin_classification/index'); ?>" method="post">
                            输入课程名称：<input type="text" name="query"/>
                            <input type="submit" value="查询"/>
                        </form>
                    </td>
                    <td width="10%">
                        <form action="<?php echo url('admin_classification/index'); ?>" method="post">
                            <input type="submit" value="显示所有课程"/>
                        </form>

                    </td>

                </tr>
            </table>

        </form>

    </div>
    <table class="table table-hover table-bordered margin-top-20">
        <thead>
        <tr>
            <th width="50">ID</th>
            <th>课程名称</th>
            <th>上传时间</th>
            <th>更新时间</th>
            <th>上传人</th>
            <th width="260">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php 

         if(is_array($kecheng) || $kecheng instanceof \think\Collection || $kecheng instanceof \think\Paginator): if( count($kecheng)==0 ) : echo "" ;else: foreach($kecheng as $key=>$vo): ?>
            <tr>
                <td><?php echo $vo['id']; ?></td>
                <td><?php echo $vo['name']; ?></td>
                <td><?php echo $vo['create_time']; ?></td>
                <td><?php echo $vo['update_time']; ?></td>
                <td>上传人</td>
                <td>
                    <a href="<?php echo url('admin_classification/edit',array('id'=>$vo['id'])); ?>"><?php echo lang('EDIT'); ?></a>|
                    <a href="javascript:parent.openIframeLayer('<?php echo url('admin_classification_item/index',array('id'=>$vo['id'])); ?>','管理 <?php echo $vo['name']; ?> 页面',{});">管理页面</a> |
                    <a href="<?php echo url('admin_classification/delete',array('id'=>$vo['id'])); ?>" class="js-ajax-delete"><?php echo lang('DELETE'); ?></a>
                </td>
            </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page">
        上一页 1 2 3 4 5 6 下一页 【课程多了需要分页】
    </div>
</div>
</div>
<script src="__STATIC__/js/admin.js"></script>
</body>
</html>