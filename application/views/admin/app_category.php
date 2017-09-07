<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/admin/css/public.css' ?>">
	<title>Document</title>
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看栏目</td>
		</tr>
		<tr>
			<td>ID</td>
			<td>应用名称</td>
			<td>操作</td>
		</tr>

		<?php foreach($category as $v): ?>
		<tr>
			<td><?php echo $v['cid'] ?></td>
			<td><?php echo $v['cname']?></td>
			<td>
				[<a href="<?php echo site_url('admin/category/edit/' . $v['cid']) ?>">编辑</a>]

				[<a href="<?php echo site_url('admin/category/del/' . $v['cid']) ?>">删除</a>]
			</td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>