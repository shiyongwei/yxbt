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
    <title>导航管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 导航管理
    <span class="c-gray en">&gt;</span> 导航编辑
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <table class="table table-border table-bordered table-hover table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="6">导航管理</th>
        </tr>
        <tr class="text-c">
            <th width="40">ID</th>
            <th width="200">导航名称</th>
            <th width="70">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($product as $item => $value): ?>
            <tr class="text-c">
                <td><?php echo $value['brand_id']; ?></td>
                <td><?php echo $value['product_brand']; ?></td>
                <td class="td-manage">
                        <a title="编辑" href="javascript:;" onclick="product_brand_edit('角色编辑','product_brand_edit?id=<?php echo $value['brand_id']; ?>','1','350','200')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
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

    /*品牌-添加*/
    function product_brand_add (title, url, w, h) {
        layer_show(title, url, w, h);
    }

    /*品牌-编辑*/
    function product_brand_edit (title, url, id, w, h) {
        layer_show(title, url, w, h);
    }

    /*品牌-删除*/
    function product_brand_del (obj, id) {
        layer.confirm('删除须谨慎，确认要删除吗？', function() {

            $.post('/index.php/admin/BrandController/product_del', {'id': id}, function(data) {
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

    function product_brand_stop (obj, id) {
        layer.confirm('确认要下热门吗？', function(index) {
            //此处请求后台程序，下方是成功后的前台处理……
            $.post('/index.php/admin/BrandController/product_status',{'id':id,'status':1},function (data)
            {
                if(data == 200){
                    $(obj).parents("tr").find(".td-manage").prepend('<a onClick="product_brand_start(this,id)" href="javascript:;" title="热门" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">非热门</span>');
                    $(obj).remove();
                    layer.msg('已下热门!', {icon: 6, time: 1000},function() {
                        location.reload();
                    });
                }else{
                    layer.msg('修改失败!', {icon: 5, time: 1000});
                }
            });


        });
    }

    function product_brand_start(obj,id){
        layer.confirm('确认要热门吗？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……
            $.post('/index.php/admin/BrandController/product_status',{'id':id,'status':0},function (data)
            {
                if(data == 200){
                    $(obj).parents("tr").find(".td-manage").prepend('<a onClick="product_brand_stop(this,id)" href="javascript:;" title="非热门" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">热门</span>');
                    $(obj).remove();
                    layer.msg('已热门!', {icon: 1,time:1000});
                }else{
                    layer.msg('修改失败!', {icon: 5, time: 1000});
                }

            });


        });
    }
</script>
</body>
</html>