<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Elfinder</title>
	<meta name="description" content="">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jquery/ui-themes/smoothness/jquery-ui-1.8.18.custom.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/elfinder/css/elfinder.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/elfinder/css/theme.css">
	<script src="<?php echo base_url();?>assets/jquery/jquery-1.7.2.min.js"></script>
	<script src="<?php echo base_url();?>assets/jquery/jquery-ui-1.8.18.custom.min.js"></script>
	<script src="<?php echo base_url();?>assets/elfinder/js/elfinder.min.js"></script>
	<script src="<?php echo base_url();?>assets/grocery_crud/texteditor/tiny_mce_popup.js"></script>
	<script>
	var FileBrowserDialogue={
		init:function(){},
		mySubmit:function(URL){
			var win=tinyMCEPopup.getWindowArg('window');
			win.document.getElementById(tinyMCEPopup.getWindowArg('input')).value=URL;
			if (typeof(win.ImageDialog)!='undefined'){
				if (win.ImageDialog.getImageData){
					win.ImageDialog.getImageData();
				}
				if (win.ImageDialog.showPreviewImage){
					win.ImageDialog.showPreviewImage(URL);
				}
			}
			tinyMCEPopup.close();
		}
	};
	tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);
	$().ready(function(){
		var elf = $('#elfinder').elfinder({
			url:'<?php echo base_url()."elfiles/elfinder_init";?>',
			height:450,
			getFileCallback:function(url){
				
			    var url_c = url.replace("http://localhost", "");
				FileBrowserDialogue.mySubmit(url_c);
			}
		}).elfinder('instance');
	});
	</script>
</head>
<body>

	<div id="elfinder">Elfinder</div>
</body>
</html>
