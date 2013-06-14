<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mobile.theme-1.3.1.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mobile.structure-1.3.1.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mobile-1.3.1.css" />
	<?php
	echo $css;
	?>
</head>
<body>
	<div data-role="page" data-add-back-btn="true">

		<div data-role="header">
			<a data-icon="back" data-rel="back">Back</a>
			<h1><?php echo $title; ?></h1>
			<a data-icon="home" href="<?php echo base_url(); ?>">Home</a>
		</div><!-- /header -->

		<div data-role="content">

		<?php
		echo $output;
		?>

		</div><!-- /content -->

		<div data-role="footer">
			<h1>made with Booter</h1>
		</div><!-- /footer -->

	</div>

	<!-- Script Loading -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.0.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.mobile-1.3.1.js" type="text/javascript" charset="utf-8" defer></script>
	<?php
	echo $js;
	?>
</body>
</html>