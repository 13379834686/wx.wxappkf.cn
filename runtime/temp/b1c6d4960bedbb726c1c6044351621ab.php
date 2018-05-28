<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:78:"/www/wwwroot/blog.wxappkf.cn/public/../application/admin/view/index/index.html";i:1522749186;s:68:"/www/wwwroot/blog.wxappkf.cn/application/admin/view/public/meta.html";i:1521453044;s:70:"/www/wwwroot/blog.wxappkf.cn/application/admin/view/public/header.html";i:1522047570;s:68:"/www/wwwroot/blog.wxappkf.cn/application/admin/view/public/menu.html";i:1523257176;s:70:"/www/wwwroot/blog.wxappkf.cn/application/admin/view/public/footer.html";i:1521443164;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/admin/lib/html5.js"></script>
    <script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/admin/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/static/admin/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->


	<title>后台首页</title>
	<meta name="keywords" content="###">
	<meta name="description" content="###">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">后台管理系统</a>

            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>管理员：</li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo session('user_name')?> <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="<?php echo url('login/logout'); ?>">退出</a></li>
                        </ul>
                    </li>
                    <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe62f;</i></a> </li>
                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!--/_header 作为公共模版分离出去-->
<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">

    <div class="menu_dropdown bk_2">
        <!--<dl id="menu-article">-->
            <!--<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
            <!--<dd>-->
                <!--<ul>-->
                    <!--<li><a href="article-list.html" title="资讯管理">资讯管理</a></li>-->
                <!--</ul>-->
            <!--</dd>-->
        <!--</dl>-->
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 后台首页<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('index/index'); ?>" title="首页">首页</a></li>
                </ul>
            </dd>
        </dl>
        <!--<dl id="menu-product">-->
            <!--<dt><i class="Hui-iconfont">&#xe620;</i> 轮播图<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
            <!--<dd>-->
                <!--<ul>-->
                    <!--<li><a href="<?php echo url('banner/index'); ?>" title="品牌管理">轮播图列表</a></li>-->
                <!--</ul>-->
            <!--</dd>-->
        <!--</dl>-->
        <!--<dl id="menu-product">-->
            <!--<dt><i class="Hui-iconfont">&#xe620;</i> 视频管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
            <!--<dd>-->
                <!--<ul>-->
                    <!--<li><a href="<?php echo url('video/index'); ?>" title="品牌管理">上传视频</a></li>-->
                    <!--&lt;!&ndash;<li><a href="product-category.html" title="分类管理">分类管理</a></li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li><a href="product-list.html" title="产品管理">产品管理</a></li>&ndash;&gt;-->
                <!--</ul>-->
            <!--</dd>-->
        <!--</dl>-->
        <!--<dl id="menu-comments">-->
            <!--<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
            <!--<dd>-->
                <!--<ul>-->
                    <!--<li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>-->
                    <!--<li><a href="feedback-list.html" title="意见反馈">意见反馈</a></li>-->
                <!--</ul>-->
            <!--</dd>-->
        <!--</dl>-->
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i>微信管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('parameter/index'); ?>" title="订单列表">微信列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/index'); ?>" title="管理员列表">管理员列表</a></li>
                    <!--<li><a href="admin-role.html" title="角色管理">角色管理</a></li>-->
                    <!--<li><a href="admin-permission.html" title="权限管理">权限管理</a></li>-->

                </ul>
            </dd>
        </dl>
        <!--<dl id="menu-tongji">-->
            <!--<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
            <!--<dd>-->
                <!--<ul>-->
                    <!--<li><a href="charts-1.html" title="折线图">折线图</a></li>-->
                    <!--<li><a href="charts-2.html" title="时间轴折线图">时间轴折线图</a></li>-->
                    <!--<li><a href="charts-3.html" title="区域图">区域图</a></li>-->
                    <!--<li><a href="charts-4.html" title="柱状图">柱状图</a></li>-->
                    <!--<li><a href="charts-5.html" title="饼状图">饼状图</a></li>-->
                    <!--<li><a href="charts-6.html" title="3D柱状图">3D柱状图</a></li>-->
                    <!--<li><a href="charts-7.html" title="3D饼状图">3D饼状图</a></li>-->
                <!--</ul>-->
            <!--</dd>-->
        <!--</dl>-->
        <!--<dl id="menu-system">-->
            <!--<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
            <!--<dd>-->
                <!--<ul>-->
                    <!--<li><a href="system-base.html" title="系统设置">系统设置</a></li>-->
                    <!--<li><a href="system-category.html" title="栏目管理">栏目管理</a></li>-->
                    <!--<li><a href="system-data.html" title="数据字典">数据字典</a></li>-->
                    <!--<li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>-->
                    <!--<li><a href="system-log.html" title="系统日志">系统日志</a></li>-->
                <!--</ul>-->
            <!--</dd>-->
        <!--</dl>-->
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->

<!--content-->
<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a>
		<span class="c-999 en">&gt;</span>
		<span class="c-666">我的桌面</span>
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<p>上次登录IP：<?php echo session('login_ip_info')?>  上次登录时间：<?php echo session('login_time_info')?> </p>
			<table class="table table-border table-bordered table-bg">
				<thead>
				<tr>
					<th colspan="7" scope="col">信息统计</th>
				</tr>
				<tr class="text-c">
					<th>统计</th>
					<th>资讯库</th>
					<th>图片库</th>
					<th>产品库</th>
					<th>用户</th>
					<th>管理员</th>
				</tr>
				</thead>
				<tbody>
				<tr class="text-c">
					<td>总数</td>
					<td>92</td>
					<td>9</td>
					<td>0</td>
					<td>8</td>
					<td>20</td>
				</tr>
				<tr class="text-c">
					<td>今日</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
				</tr>
				<tr class="text-c">
					<td>昨日</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
				</tr>
				<tr class="text-c">
					<td>本周</td>
					<td>2</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
				</tr>
				<tr class="text-c">
					<td>本月</td>
					<td>2</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
				</tr>
				</tbody>
			</table>

		</article>
	</div>
</section>
<!--content-->

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/admin/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

</script>
<!--/请在上方写此页面业务相关的脚本-->

<!--此乃百度统计代码，请自行删除-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!--/此乃百度统计代码，请自行删除-->
</body>
</html>