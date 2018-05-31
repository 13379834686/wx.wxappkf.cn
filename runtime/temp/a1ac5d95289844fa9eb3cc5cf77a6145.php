<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:77:"F:\phpstudy\PHPTutorial\WWW\public/../application/admin\view\admin\index.html";i:1527736649;s:67:"F:\phpstudy\PHPTutorial\WWW\application\admin\view\public\meta.html";i:1521453044;s:69:"F:\phpstudy\PHPTutorial\WWW\application\admin\view\public\header.html";i:1522047570;s:67:"F:\phpstudy\PHPTutorial\WWW\application\admin\view\public\menu.html";i:1527516685;s:69:"F:\phpstudy\PHPTutorial\WWW\application\admin\view\public\footer.html";i:1521443164;}*/ ?>
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


<title>管理员列表</title>
<meta name="keywords" content="##">
<meta name="description" content="##">
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
                    <li><a href="<?php echo url('auth_group/index'); ?>" title="用户列表">用户列表</a></li>
                    <li><a href="<?php echo url('auth_rule/index'); ?>" title="权限列表">权限列表</a></li>

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


<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
		<span class="c-gray en">&gt;</span>
		管理员管理
		<span class="c-gray en">&gt;</span>
		管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a> </nav>
	<div class="Hui-article">
		<article class="cl pd-20">

			<div class="cl pd-5 bg-1 bk-gray mt-20">
                <span class="l">

                    <a href="javascript:;" onclick="admin_add('添加管理员','<?php echo url('admin/add'); ?>','650','400')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a> </span>


			</div>
			<table class="table table-border table-bordered table-bg">
				<thead>
				<tr>
					<th scope="col" colspan="9">员工列表</th>
				</tr>
				<tr class="text-c">

					<th width="40">ID</th>
					<th width="150">登录名</th>
					<th width="100">所属用户</th>

					<th width="100">上一次登录日期</th>
					<th width="100">上一次登录IP</th>
					<th width="50">状态</th>
					<th width="100">操作</th>
				</tr>
				</thead>
				<tbody>

				<?php if(is_array($lis) || $lis instanceof \think\Collection || $lis instanceof \think\Paginator): $i = 0; $__LIST__ = $lis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><?php echo $v['id']; ?></td>
					<td><?php echo $v['adminname']; ?></td>
					<td><?php echo $v['groupTitle']; ?></td>

					<td><?php echo date("Y-m-d",$v['logintime']); ?></td>
					<td><?php echo $v['loginip']; ?></td>
					<?php if($v['status'] == 1): ?>
					<td class="td-status"><span class="label label-success radius">启用</span></td>
					<?php else: ?>
					<td class="td-status"><span class="label label-error radius">禁用</span></td>
					<?php endif; ?>

					<td class="td-manage"><a style="text-decoration:none" onClick="admin_stop(this,'10001')" href="javascript:;" title="停用"></a>
						<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','<?php echo url('admin/updata',array('id'=>$v['id'])); ?>','','600','400')" class="ml-5" style="text-decoration:none">修改</a>

						<?php if($v['id'] > 1): ?>
						<a title="删除" href="javascript:;" onclick="admin_del(this,'<?php echo $v['id']; ?>')" class="ml-5" style="text-decoration:none">删除</a>
						<?php endif; ?>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<style>
				.pagination li{
					float: left;
					text-align: center;
					margin:10px 1px 0 1px;
					padding:2px 10px 2px 10px;
					border: 1px solid #ddd;
				}
			</style>
			<?php echo $lis->render(); ?>
		</article>
	</div>
</section>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/admin/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    /*
        参数解释：
        title	标题
        url		请求的url
        id		需要操作的数据id
        w		弹出层宽度（缺省调默认值）
        h		弹出层高度（缺省调默认值）
    */
    /*管理员-增加*/
    function admin_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*管理员-删除*/
    function admin_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……
            $.post("<?php echo url('admin/del'); ?>",{id:id});
            $(obj).parents("tr").remove();
            layer.msg('已删除!',{icon:1,time:1000});
        });
    }
    /*管理员-编辑*/
    function admin_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*管理员-停用*/
    function admin_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……

            $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
            $(obj).remove();
            layer.msg('已停用!',{icon: 5,time:1000});
        });
    }

    /*管理员-启用*/
    function admin_start(obj,id){
        layer.confirm('确认要启用吗？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……

            $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
            $(obj).remove();
            layer.msg('已启用!', {icon: 6,time:1000});
        });
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>