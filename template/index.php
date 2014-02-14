<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<title>Notes</title>

		<!-- font link -->
		<link href='http://fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
		
		<!-- stylesheets -->
		<link rel="stylesheet" type="text/css" href="template/css/restart.css" />
		<link rel="stylesheet" type="text/css" href="template/css/styles.css" />

		<!-- javascript -->
		<script type="text/javascript" src="template/js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
			tinymce.init({
				content_css : "template/css/editor.css",
				plugins: "link",
				selector: "textarea",
				menubar: false
			})
		</script>

	</head>

	<body">
		<?php echo $content; ?>
	</body>
	
</html>