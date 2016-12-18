<!--?php 
if (!isset($_COOKIE['ourtown_newvisitor']))
{
    header('Location:http://www.ourtownnashville.org/landing-page');
    exit;
};
?-->
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<link href='http://fonts.googleapis.com/css?family=Economica|Contrail+One' rel='stylesheet' type='text/css'>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript">// <![CDATA[
jQuery(document).ready(function($){
    /* prepend menu icon */
	$('.homepage_headerStuff').append('<div id="mobile-menu">navigate</div>');
 
	/* toggle nav */
	$("#mobile-menu").on("click", function(){
		$("#site-navigation").slideToggle();
		$(this).toggleClass("active");
	});
});
// ]]></script>

</head>

<body <?php body_class(); ?>>
<script>
 
    jQuery("document").ready(function($){
    
    var nav = $('.nav-menu');
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
 
});	
 
    </script>
    <div class="homepage_headerStuff">
    <div class="homepage_headerButtons">
    	<div class="homepage_headerSocial"><a class="twitter" href="https://twitter.com/ourtownbikecart" target="_blank"></a><a class="instagram" href="http://instagram.com/ourtownbikecart" target="_blank"></a><a class="facebook" href="https://www.facebook.com/ourtownnashville" target="_blank"></a></div>
    	<div class="homepage_headerEmail"><a class="email_signup" href="https://app.e2ma.net/app2/audience/signup/1749498/1729314/?v=a" onclick="window.open('https://app.e2ma.net/app2/audience/signup/1749498/1729314/?v=a', 'signup', 'menubar=no, location=no, toolbar=no, scrollbars=yes, height=500'); return false;"></a></div>
    </div>
    <div class="homepage_headerBack">
    <div class="homepage_headerLogo"></div></div>
     
    </div>
<div id="page" class="hfeed homepage_site">

	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
        
        
<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		
	</header><!-- #masthead -->
    
	<div id="main" class="wrapper">