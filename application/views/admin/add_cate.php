<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/admin/css/public.css' ?>">
	<title>Document</title>
	<style type="text/css">
		span{
			color: #f00;
		}
	</style>
</head>
<body>
	<form method="POST">
	<table class="table">
		<tr>
			<td class="th" colspan="10">添加app</td>
		</tr>
		<tr>
			<td>应用名称</td>
			<td><input type="text" name="cname" value="<?= set_value('cname') ?>"/><?php echo form_error('cname', '<span>', '</span>') ?></td>
		</tr>
		<tr>
			<td colspan="10"><input type="submit" value="添加" class="input_button"/></td>
		</tr>
	</table>
	</form>
</body>
</html>