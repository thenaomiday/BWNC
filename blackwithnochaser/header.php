<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blackwithnochaser
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Montserrat + Raleway fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- social media icons -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<script src="https://use.fontawesome.com/fa595db62b.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blackwithnochaser' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<div class="menu-block">
				<a href="http://naomid5.sg-host.com/black-voices/" class="menu-item">Black Voices</a>
				<a href="http://naomid5.sg-host.com/shop/" class="menu-item">Shop</a>
			</div>
			<a href="https://blackwithnochaser.com/">
				<img class="header-logo" src="http://naomid5.sg-host.com/wp-content/uploads/2020/07/BWNC-FINAL-LOGO-white-W-TEXT-02.png" alt="BWNC logo"/>
			</a>
			<div class="menu-block">
				<a href="http://naomid5.sg-host.com/about/" class="menu-item">About</a>
				<a href="http://naomid5.sg-host.com/brands/" class="menu-item">Brands</a>
				<a href="http://naomid5.sg-host.com/contact/" class="menu-item">Contact</a>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
