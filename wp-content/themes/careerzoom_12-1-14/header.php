<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mytheme.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat|Roboto' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">

		<div class="subpage-logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_white_no_text.png"></a></div>
		<div class="main-nav"><?php wp_nav_menu(); ?></div>
		<div class="social">
			<div class="social-icon"><a href="<?php the_field('facebook_link', 'user_1'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a></div>
			<div class="social-icon"><a href="<?php the_field('twitter_link', 'user_1'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></a></div>
			<div class="social-icon"><a href="<?php the_field('google_plus_link', 'user_1'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplus.png"></a></div>
			<div class="social-icon"><a href="<?php the_field('linkedin_link', 'user_1'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"></a></div>

		</div>
	</header><!-- #masthead -->

