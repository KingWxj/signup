<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/signup/Public/Admin/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/signup/Public/Admin/Js/index.js"></script>
<link rel="stylesheet" href="/signup/Public/Admin/Css/public.css" />
<link rel="stylesheet" href="/signup/Public/Admin/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>后台管理-学院列表</title>

	<style type="text/css">
		#add_college {
			margin: 20px 0 0 30px;
		}
		
		#add_college h1 {
			color: #777;
			font-size: 16px;
		}
		
		#add_college input[type=text] {
			padding: 3px;
		}
		
		#add_college input[type=submit] {
			padding: 3px;
		}
		
		/*#tips{*/
		/*margin: 20px 0 0 30px;*/
		/*color: #999;*/
		/*}*/
	</style>
	<script>
		function deleteReal($url) {
			var $del = confirm("确认删除吗？");
			if ($del) {
				window.location.href = $url;
			} else {
				return false;
			}
		}
	</script>

<head>
</head>
<body>
	<div id="top">
		<div>
		</div>
		<div class="menu">
			<a href="javascript:void(0)" >当前位置:学院列表</a>
			

		</div>
		<div class="exit">
			<a href="<?php echo U('Login/logout');?>">退出</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>首页</dt>
			<dd><a href="<?php echo U('Index/index');?>">登录信息</a></dd>
		</dl>
		<dl>
			<dt>内容管理</dt>
			<dd><a href="<?php echo U('Teashow/index');?>">人才管理</a></dd>
			<dd><a href="<?php echo U('Teashow/add');?>">新增人才</a></dd>
			<dd><a href="<?php echo U('Match/index');?>">比赛管理</a></dd>
			<dd><a href="<?php echo U('College/index');?>">学院管理</a></dd>
			<dd><a href="<?php echo U('Type/index');?>">作品类型管理</a></dd>
		</dl>
		<dl>
			<dt>账户管理</dt>
			<dd><a href="<?php echo U('Account/adminlist');?>">管理员账户管理</a></dd>
			<dd><a href="<?php echo U('Account/teaList');?>">教师账户管理</a></dd>
			<dd><a href="<?php echo U('Account/stuList');?>">学生账户管理</a></dd>
		</dl>
		<dl>
			<dt>任务分配</dt>
			<dd><a href="<?php echo U('Task/index');?>">评分任务分配</a></dd>
		</dl>
		<dl>
			<dt>作品管理</dt>
			<dd><a href="<?php echo U('Reginfo/index');?>">作品列表</a></dd>
		</dl>
	</div>
	<div id="right">
		
	<div id="add_college">
		<form action="<?php echo U('College/runAdd');?>" method="post">
			<h1>添加学院</h1>
			<label for="college">请输入学院名:<input type="text" name="college" id="college" placeholder="输入学院名" required="required"/></label>
			<label for="code">请输入学院代码:<input type="text" name="code" id="code" placeholder="例如：计算机->jsj" required="required"/></label>
			<input type="submit" id="sub_college" value="添加学院 [Add College]"/>
		</form>
	</div>
	<!--	<div id="tips">-->
	<!--	    <p>由于删除学院会影响到很多数据,此处不提供学院的删除功能,如果需要删除学院,请直接使用软件连接数据库进行操作</p>-->
	<!--	</div>-->
	<table border="1" style="width: 97%; margin: 20px 0 0 2%;">
		<tr>
			<th width="20%">ID</th>
			<th width="60%">学院</th>
			<th width="10%">代号</th>
			<th width="10%">操作</th>
		</tr>
		<?php
 foreach ($college_list as $vo) { if ($vo['del'] == 0) { ?>
				<tr>
					<td align="center"><?php echo ($vo['id']); ?></td>
					<td><?php echo ($vo['college']); ?></td>
					<td align="center"><?php echo ($vo['code']); ?></td>
					<td align="center">
						<button style="border: 2px solid red;padding: 3px;" onclick="deleteReal('<?php echo U('College/runRealDelCollege',array('id'=>$vo['id']));?>')">删除！</button>
					</td>
				</tr>
				<?php
 } } ?>
	</table>

	</div>
	<div id="footer" style="clear: both;">
	    <p align="center">copyright &copy; 2016 <a>行思工作室</a>　版权所有</p>
	</div>
</body>
</html>