<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jPushMenu.css" />

	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
	<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body>
	<header>
		<aside><a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/datem-water-logo.png"></a></aside>
		<nav class="nav-main">
			<ul>
				<li><a href="<?php echo site_url() ?>">HOME</a></li>
				<li><a href="<?php echo get_the_permalink(9) ?>">ABOUT US</a></li>
				<li><a href="<?php echo get_the_permalink(13) ?>">SERVICES</a></li>
				<li><a href="<?php echo get_the_permalink(15) ?>">PROJECTS</a></li>
				<li><a href="<?php echo get_the_permalink(11) ?>">CONTACT US</a></li>
			</ul>
		</nav>
		<button class="toggle-menu menu-right push-body"><i class="fa fa-bars" aria-hidden="true"></i> MENU</button>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
			<h3>Menu</h3>
			<p><a href="<?php echo site_url() ?>">HOME</a></p>
			<p><a href="<?php echo get_the_permalink(9) ?>">ABOUT US</a></p>
			<p><a href="<?php echo get_the_permalink(13) ?>">SERVICES</a></p>
			<p><a href="<?php echo get_the_permalink(15) ?>">PROJECTS</a></p>
			<p><a href="<?php echo get_the_permalink(11) ?>">CONTACT US</a></p>
		</nav>
	</header>
