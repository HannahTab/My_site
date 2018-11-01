<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,400|Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_enqueue_script('jquery'); ?>
		<!--?php wp_head(); ?-->
		<?php wp_head(); ?>
		


		

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
			
				<button class="nav__button"><i class="fas fa-bars fa-3x"></i></button>
				
				<h1 class="header_h1">
					Hannah Tabram
				</h1>	
				<h2 class="header_h2">copy • SEO • social media • web design</h2>
				
				<p class="header_p">
				<a class="header_link" href="mailto:hannah@tabram.com">E: hannah@tabram.com</a><br><a class="header_link" href="tell:07791085504">T: 07791 085 504</a>     
				</p>
			
					
			
					<!-- nav -->
					<nav class="nav nav__toggle" role="navigation">
					<nav class="nav">
						<?php html5blank_nav(); ?>
						<div class="clear"></div>
					</nav>
					<!-- /nav -->

			
		</header>
			<!-- /header -->
