<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"themes/admin_simpleboot3/kecheng\admin_classification\edit.html";i:1505460182;s:43:"themes/admin_simpleboot3/public\header.html";i:1504866290;}*/ ?>
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
<body>
<div class="wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo url('admin_classification/index'); ?>">课程列表</a></li>
        <li class="active"><a href="<?php echo url('admin_classification/edit'); ?>">编辑课程</a></li>
    </ul>
    <!-- form-horizontal js-ajax-form margin-top-20-->
    <form method="post" class="form-horizontal js-ajax-form margin-top-20" action="<?php echo url('admin_classification/addPost',array('id'=>$kecheng['id'])); ?>">
        <div class="form-group">
            <label for="input-name" class="col-sm-2 control-label">名称<span class="form-required">*</span></label>
            <div class="col-md-6 col-sm-10">
                <input type="text" class="form-control" id="input-name" name="name" value="<?php echo $kecheng['name']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="input-remark" class="col-sm-2 control-label"><?php echo lang('DESCRIPTION'); ?></label>
            <div class="col-md-6 col-sm-10">
                <textarea class="form-control" id="input-remark" name="desc"><?php echo $kecheng['desc']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('ADD'); ?></button>
                <a class="btn btn-default" href="<?php echo url('admin_classification/index'); ?>"><?php echo lang('BACK'); ?></a>
            </div>
        </div>
    </form>

</div>
<script src="__STATIC__/js/admin.js"></script>
</body>
</html>