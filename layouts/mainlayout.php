<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<title>Home Travel</title>

		

		<link rel="stylesheet" type="text/css" href="<?= asset('some.css'); ?>">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body <?php if($fileName == 'home')echo 'class="slider-collapse"'; ?> >
		<div id="site-content">
			<?php 
				# if you want to include header
				
				#include(ABSPATH ."/header.php");

				includeFileToView($db);

				# if you want to include header
				#include(ABSPATH ."/footer.php");

			?>
			</div>
		<script type="text/javascript" src="<?= asset('some.js'); ?>"></script>
	</body>

</html>