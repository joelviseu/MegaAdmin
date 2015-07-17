<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Elfinder</title>
	<meta name="description" content="">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jquery/ui-themes/smoothness/jquery-ui-1.8.18.custom.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/grocery_crud/elfinder/css/elfinder.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/grocery_crud/elfinder/css/theme.css">
	<script src="<?php echo base_url();?>assets/jquery/jquery-1.7.2.min.js"></script>
	<script src="<?php echo base_url();?>assets/jquery/jquery-ui-1.8.18.custom.min.js"></script>
	<script src="<?php echo base_url();?>assets/grocery_crud/elfinder/js/elfinder.min.js"></script>
	<script>
	$().ready(function(){
		var elf = $('#elfinder').elfinder({
			url:'<?php echo base_url("examples/elfinder_init");?>',
			height:460,
		}).elfinder('instance');
	});
	</script>	
</head>
<body>
	<div id="elfinder">Elfinder</div>
</body>
</html>
