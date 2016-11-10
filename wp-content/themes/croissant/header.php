<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package croissant
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'croissant' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="nav navbar-nav">
			<a class="navbar-brand" href="/fairmount-co">
				<img class="nav-logo" src="http://localhost:8888/fairmount-co/wp-content/uploads/2016/11/FCO_ALT_LOGO_2.png" height="50" alt="">
		  </a>
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id' => 'primary-menu'
			) ); ?>
		</div>
	</nav><!-- #site-navigation -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
