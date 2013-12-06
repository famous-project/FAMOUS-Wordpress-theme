<?php 
/**
 * Default Header
 *
 * @package WordPress
 * @subpackage famous-project
 * @since FAMOUS 1.0
 *
 */?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
 
  <?php 
  // Fires the 'wp_head' action and gets all the scripts included by wordpress, wordpress plugins or functions.php 
  // using wp_enqueue_script if it has $in_footer set to false (which is the default)
  wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
  <![endif]-->
  
  
<style>
body > header .logo {
    margin-top: 7px;
    margin-right: 8px;
    max-height: 40px; 
}

body > footer img {
    height: 18px;
    position: relative;
    top: 5px;
    left: 2px; 
}
</style>
</head>
<body <?php body_class(); ?>>
	<header class="padding">
        <div class="row">
            <div class="column_6">
                <a href="<?php bloginfo('url'); ?>"><img src="https://raw.github.com/famous-project/FAMOUS-pictures/master/1.png" class="logo on-left"/>
                <h2 class="text thin">FAMOUS</h2></a>
            </div>
            <nav class="column_6  text right bold">
            	<a class="button" data-famous-modal="default_modal"><span class="icon user"></span> Login</a>
            	<a class="button alert" data-famous-modal="big_modal"><span class="icon comments-alt"></span> Kontakt</a>
            </nav>
        </div>
    </header>