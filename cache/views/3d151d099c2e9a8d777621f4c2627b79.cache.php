<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>luos/css/style.min.css?v=4.1.0" rel="stylesheet"><link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<script type="text/javascript">var sitepath = "<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>";</script>
<script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>
	<?php include $this->_include('admin/top.html'); ?>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/block'); ?>"><em><?php echo lang('a-men-30'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/block/add'); ?>" class="on"><em><?php echo lang('a-add'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/block/cache'); ?>"><em><?php echo lang('a-cache'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-responsive mytable">
		<form action="" method="post">
		<input name="id" type="hidden" value="<?php echo $data['id']; ?>">
		<table width="100%" class="table table-striped">
		<tr>
			<th width="200"><?php echo lang('a-blo-7'); ?>： </th>
			<td><input class="input-text" type="text" name="data[name]" value="<?php echo $data['name']; ?>" size="30" required /></td>
		</tr>
		<tr>
			<th><?php echo lang('a-blo-8'); ?>： </th>
			<td>
			<select id="type" name="data[type]" onChange="select_type(this.value)" required />
			<option value="0"> ... <?php echo lang('a-select'); ?></option>
			<?php if (is_array($type)) { $count=count($type);foreach ($type as $i=>$v) { ?>
			<option value="<?php echo $i; ?>" <?php if ($data['type']==$i) { ?>selected<?php } ?>><?php echo $v; ?></option>
			<?php } } ?>
			</select></td>
		</tr>
		<tr id="text_2" style="display:none">
			<th><?php echo lang('a-blo-9'); ?>： </th>
			<td><input type="text" class="input-text" size="50" value="<?php echo $data[content]; ?>" name="data[content_2]" id="thumb" />
				<input type="button" style="width:66px;cursor:pointer;" class="btn btn-success btn-sm" onClick="preview('thumb')" value="<?php echo lang('a-mod-118'); ?>">
				<input type="button" style="width:66px;cursor:pointer;" class="btn btn-success btn-sm" onClick="uploadImage('thumb')" value="<?php echo lang('a-mod-119'); ?>">
				<div id="urlTip" class="onShow"><?php echo lang('a-pic'); ?></div></td>
		</tr>
		<tr id="text_1" style="display:none">
			<th><?php echo lang('a-blo-9'); ?>： </th>
			<td><textarea name="data[content_1]" id="data[content]" cols="91" rows="8" /><?php echo $data['content']; ?></textarea>
			<br><div class="onShow"><?php echo lang('a-blo-10'); ?></div></td>
		</tr>
		<tr id="text_3" style="display:none;">
			<th><?php echo lang('a-blo-9'); ?>：</th>
			<td>
			<?php App::auto_load('fields');echo content_editor('content_3', array(0=>$data['content']), array('system'=>1)); ?>
			<br><div class="onShow"><?php echo lang('a-blo-11'); ?></div></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><input class="btn btn-success btn-sm" type="submit" name="submit" value="<?php echo lang('a-submit'); ?>" /></td>
		</tr>
		</table>
		</form>
	</div>
</div>
<script type="text/javascript">
function select_type(id) {
	$("#text_1").hide();
	$("#text_2").hide();
	$("#text_3").hide();
	$("#text_"+id).show();
}
<?php if ($data['type']) { ?>
$("#text_<?php echo $data['type']; ?>").show();
<?php } ?>
</script>
</body>
</html>