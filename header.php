<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_directory'); ?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--owl.carousel-->
  <link href="<?php bloginfo('template_directory'); ?>/assets/lib/owl.carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/assets/lib/owl.carousel/css/owl.theme.default.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/styles/main.css" rel="stylesheet">
</head>

<body>
	<main>
		<?php 
			$lang = get_bloginfo('language');
			get_template_part('includes/menu', 'menu'); 
		?>
	</main>
</body>