﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/public/admin/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/public/admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/public/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 旅游管理
    <span class="c-gray en">&gt;</span> 探索方式添加
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <a class="btn btn-primary radius" href="javascript:;" onclick="increase_add('添加探索方式','increase_add','350','180')">
                <i class="Hui-iconfont">&#xe600;</i> 添加探索方式</a>
        </span>
        <span class="r">共有数据：<strong><?php echo count($increase); ?></strong> 条</span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="6">探索方式管理</th>
        </tr>
        <tr class="text-c">
            <th width="40">ID</th>
            <th width="200">探索方式名称</th>
            <th width="70">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($increase as $item => $value): ?>
            <tr class="text-c">
                <td><?php echo $value['increase_id']; ?></td>
                <td><?php echo $value['increase_name']; ?></td>
                <td class="td-manage">
                        <a title="编辑" href="javascript:;" onclick="increase_add('探索方式编辑','increase_add?id=<?php echo $value['increase_id']; ?>','350','200')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                        <a title="删除" href="javascript:;" onclick="increase_del(this,'<?php echo $value['increase_id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div id="test1"></div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

    /*添加*/
    function increase_add (title, url, w, h) {
        layer_show(title, url, w, h);
    }

    /*编辑*/
    function increase_edit (title, url, id, w, h) {
        layer_show(title, url, w, h);
    }

    /*删除*/
    function increase_del (obj, id) {
        layer.confirm('删除须谨慎，确认要删除吗？', function() {

            $.post('/index.php/admin/Increase/increase_del', {'id': id}, function(data) {
                if(data == 200)
                {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000},function() {
                        location.reload();
                    });
                }
                else
                {
                    layer.msg('删除失败!', {icon: 5, time: 1000},);
                }
            });
        });
    }
</script>
</body>
</html>