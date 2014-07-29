<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; | '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive | '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' | '; }
		      elseif (is_404()) {
		         echo 'Not Found | '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' | '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' | page '. $paged; }
		   ?>
	</title>
	
	<meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=0, initial-scale=1">

	<link rel="icon" 
      type="image/png" 
      href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css" />


	<!-- Jquery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>


	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" />
	<script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>
	<![endif]-->


	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Open+Sans:400,700|Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="outer-wrap">
<div id="inner-wrap">


		<nav id="nav" role="navigation">
	        <div class="block">
	            <?php wp_nav_menu(array('menu' => 'Main Navigation Menu')); ?>
	            <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
	        </div>
    	</nav>
		<section class="header">
			<div class="wrapper">
				<div class="full inner">
					<a class="logo" href="<?php bloginfo('siteurl'); ?>"></a>
					<a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
					<nav class="mainmenu">
				        <?php wp_nav_menu(array('menu' => 'Main Navigation Menu')); ?>
			        </nav>
		        </div>
			</div>
		</section>