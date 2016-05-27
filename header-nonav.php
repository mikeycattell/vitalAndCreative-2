<?php do_action('before_html'); ?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="<?php bloginfo('charset'); ?>"/>
<title>
<?php wp_title(); ?>
</title>
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fallback/selectivizr.min.js"></script>
	<![endif]-->
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/fallback/html5.js" type="text/javascript"></script>
	<![endif]-->

	<!-- Mobile resize fix -->
	<meta content="True" name="HandheldFriendly">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<!-- end Mobile resize fix -->

	<!-- Header Scripts -->
	<?php get_template_part('scripts', 'header'); ?>
	<!-- End Header Scripts -->

	<?php wp_head(); ?>

<body <?php body_class(); ?>>
<div itemscope itemtype="http://schema.org/LocalBusiness">
<header class="group" role="banner">
  <div class="wrapper">
    <div class="grid-half">
      <div class="logo--holder"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/header/vc--logo.png" alt="Vital and Creative Digital Marketing"></div>
    </div>

    
  </div>
</header>
<div id="page-wrap" >
