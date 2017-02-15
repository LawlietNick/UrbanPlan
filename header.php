<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if( is_singular() && pings_open( get_queried_object() ) ); ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body>



<div class="content-fluid">
	<header class="site-header">
		<div class="logo">
			<a href="#">Page title</a>
		</div>
		<a href="#0" class="hamburger"><span></span></a>
	</header>

	<main class="site-main">