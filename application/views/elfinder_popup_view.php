<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Elfinder</title>
	<meta name="description" content="">
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
			url:'<?php echo base_url()."examples/elfinder_init";?>',
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
