<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!--?php wp_enqueue_script('jquery'); ?-->
		<!--?php wp_head(); ?-->
		<?php wp_head(); ?>
		

<script type="text/javascript" src="/js/jquery.bxslider.js"></script>
<script type="text/javascript">
$(function(){
	$('#slides').bxSlider({
    	auto: true,
		mode: 'fade'
  	});
});
</script>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
			
			
				
				<h1 class="header_h1">
					Hannah Tabram
				</h1>	
				<h2 class="header_h2">copy • SEO • social media • web design</h2>
				
				<p class="header_p">
				E: hannah@tabram.com<br>T: 07791 085 504     
				</p>
			
					
			
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
						<div class="clear"></div>
					</nav>
					<!-- /nav -->

			
		</header>
			<!-- /header -->
