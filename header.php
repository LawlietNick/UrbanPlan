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



<?php wp_nav_menu( array('theme_location' => 'primary')); ?>