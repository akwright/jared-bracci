<?php
/**
 * Header file common to all
 * templates
 *
 */
?>
<!doctype html>
<html class="site no-js" <?php language_attributes(); ?>>
<head>
	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<title><?php wp_title(); ?></title>

	<?php // replace the no-js class with js on the html element ?>
	<script>document.documentElement.className=document.documentElement.className.replace(/\bno-js\b/,'js')</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class( 'site-body' ); ?>>
<?php // <body> closes in footer.php ?>


<header class="site-header" role="header">
	<a class="site-logo" href="<?php echo get_home_url(); ?>">
		<?php echo get_bloginfo(); ?>
	</a>
	<?php JAREDBRACCI_Menu::nav_menu( 'primary' ); ?>
	<button class="site-mobile-trigger  js-mobile-nav">Menu</button>
</header>

<main class="site-content">