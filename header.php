<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header_1">
	<div style="width: 50%; text-align: left; float: left;">
		<h1 style="color: #be3600; font-size: 13px;">
			CALL US NOW! <span style="color:white; font-size: 13px;">385.154.11.28.35</span>
		</h1>
	</div>
	<div style="width: 50%; text-align: right; float:left;">
		<h1 style="color: #be3600; font-size: 13px;">LOGIN <span style="color: white; font-size: 13px;">SIGNUP</span></h1> 
	</div>
</div>
<div class="header_2">
	<div style="width: 50%; text-align: left; float: left;">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ct-custom' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php $logo_url = get_option('logo');  ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php 
				echo $logo_url; ?>" width="200" /></a> </h1>
		</div><!-- .site-branding -->
	</div>
		<?php // <h2><a href="<?php get_option('facebook_url');">Facebook</a></h2> ?>
	<div style="width: 50%; text-align: right; float:left;">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ct-custom' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div>
	<div style="padding-top: 40px;">
		<h2 style="color: #a7a7a7; font-size: 13px; font-weight: 300;">
				Home / Who we are / <a style="font-weight: bold; color: #535353; text-decoration: none;" href="#">Contact</a>
		</h2>
	</div>
</div>
	</header><!-- #masthead -->
