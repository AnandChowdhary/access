<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Access
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'access' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	  <div class="social-links">
	  
	  
		<a target="_blank" href="https://twitter.com/AnandChowdhary">
		  	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 -1 16 16" enable-background="new 0 -1 16 16" xml:space="preserve"> <title>twitter</title> <desc>Created with Sketch.</desc> <g id="Page-1"> <g id="Artboard-Copy-13" transform="translate(-954.000000, -32.000000)"> <path id="twitter" fill="#FFFFFF" d="M970,33.9c-0.6,0.3-1.2,0.4-1.9,0.5c0.7-0.4,1.2-1.1,1.4-1.8c-0.6,0.4-1.3,0.6-2.1,0.8 c-0.6-0.6-1.5-1-2.4-1c-1.8,0-3.3,1.5-3.3,3.3c0,0.3,0,0.5,0.1,0.8c-2.7-0.1-5.1-1.4-6.8-3.4c-0.3,0.5-0.4,1-0.4,1.6 c0,1.1,0.6,2.1,1.5,2.7c-0.5,0-1-0.2-1.5-0.4v0c0,1.6,1.1,2.9,2.6,3.2c-0.3,0.1-0.6,0.1-0.9,0.1c-0.2,0-0.4,0-0.6-0.1 c0.4,1.3,1.6,2.3,3.1,2.3c-1.1,0.9-2.5,1.6-4.1,1.6c-0.3,0-0.5,0-0.8-0.1c1.4,0.9,3.2,1.3,5,1.3c6,0,9.3-5,9.3-9.3v-0.4 C969,35.1,969.6,34.5,970,33.9z"/> </g> </g> </svg>
		</a>
		<a target="_blank" href="mailto:hello@anandchowdhary.com" style="margin-right: 13px">
		  	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0.5 -2 16 16" enable-background="new 0.5 -2 16 16" xml:space="preserve"> <title>mail</title> <desc>Created with Sketch.</desc> <g id="Page-1"> <g id="Artboard-Copy-13" transform="translate(-887.000000, -33.000000)"> <path id="mail" fill="#FFFFFF" d="M887.5,35.8l8,6l8-6V44c0,0.6-0.4,1-1,1h-14c-0.6,0-1-0.4-1-1V35.8z M903.5,34l-8,6l-8-6 c0-0.6,0.4-1,1-1h14C903.1,33,903.5,33.4,903.5,34z"/> </g> </g> </svg>
		</a>
		<a target="_blank" href="https://facebook.com/AnandChowdhary">
			<svg viewBox="383 210 267 267" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch --> <desc>Created with Sketch.</desc> <defs> <polygon id="path-1" points="133.44655 267 266.893 267 266.893 0.105 133.44655 0.105 0.0001 0.105 0.0001 267 133.44655 267"></polygon> </defs> <g id="Group-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(383.000000, 210.000000)"> <mask id="mask-2" fill="white"> <use xlink:href="#path-1"></use> </mask> <g id="Clip-2"></g> <path d="M252.1631,267 C260.2971,267 266.8931,260.404 266.8931,252.27 L266.8931,14.836 C266.8931,6.699 260.2971,0.105 252.1631,0.105 L14.7301,0.105 C6.5931,0.105 0.0001,6.699 0.0001,14.836 L0.0001,252.27 C0.0001,260.404 6.5931,267 14.7301,267 L252.1631,267 Z M184.1514,267 L184.1514,163.645 L218.8444,163.645 L224.0384,123.365 L184.1514,123.365 L184.1514,97.648 C184.1514,85.986 187.3894,78.039 204.1134,78.039 L225.4434,78.029 L225.4434,42.003 C221.7534,41.513 209.0924,40.416 194.3624,40.416 C163.6094,40.416 142.5564,59.187 142.5564,93.66 L142.5564,123.365 L107.7754,123.365 L107.7754,163.645 L142.5564,163.645 L142.5564,267 L184.1514,267 Z" id="Combined-Shape" fill="#3C5999" mask="url(#mask-2)"></path> </g> </svg>
		</a>
	  
	  
	  </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
