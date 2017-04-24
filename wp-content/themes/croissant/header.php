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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'croissant' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="nav navbar-nav">
			<a class="navbar-brand" href="/fairmount-co">
				<img class="nav-logo" src="wp-content/uploads/2016/11/FCO_ALT_LOGO_2.png" height="50" alt="">
		  </a>
			<nav class="navbar navbar-light">
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
			    &#9776;
			  </button>
				<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id' => 'primary-menu'
			) );

			function add_menuClass($ulclass) {
				return preg_replace('/<a /', '<a class="nav-link jawn"', $ulclass);
			}

			add_filter('wp_nav_menu', 'add_menuclass');
			?>
		</div>
	</div>
</nav><!-- #site-navigation -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
