<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php bloginfo('title'); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>

<?php wp_nav_menu(array(
    'theme_location' => 'primary'
)); ?>

Sisältö

</body>
</html>
