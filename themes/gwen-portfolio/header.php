<?php
/**
 * The header for our theme.
 *
 * @package Gwen_Portfolio_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header">
        <div class="container">
          <div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            	<img src="<?php echo get_template_directory_uri() . '/assets/heading-logo.svg'; ?>" alt="Gwen Gong Logo" />
						</a>
          </div><!-- .site-branding -->

          <nav id="site-navigation" class="main-navigation">
            <ul>
							<li><a href="#gwen">Gwen</a></li>
							<li><a href="#projects">Projects</a></li>
							<li><a href="#resume">Resume</a></li>
							<li><a href="#why-me">Why</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
          </nav><!-- #site-navigation -->
        </div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">