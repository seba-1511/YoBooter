<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jqueryui-1.10.3.css" />
	<?php
	echo $css;
	?>
</head>
<body>
	<?php
	echo $output;
	?>

	<!-- Script Loading -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.0.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/jqueryui-1.10.3.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/handlebars.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/less-1.3.3.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/booter.utils.js" type="text/javascript" charset="utf-8" defer></script>
	<?php
	echo $js;
	?>
</body>
</html>