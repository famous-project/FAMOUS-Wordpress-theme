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
</head>
<body <?php body_class(); ?>>
<div class="container">


	<h3 class="text-muted"><a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('title'); ?>"><img style="width:200px;" src="https://raw.github.com/SimonWaldherr/PIS-draft/master/logodrafts/d01.png" alt="FAMOUS"></a></h3>
  	<div id="login-members"><a id="log-in" href="#">Login <span class="glyphicon glyphicon-log-in"></span></a></div>
 
 
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
      <span class="sr-only">Navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  	<!-- Collect the nav links for toggling -->
  <?php // Loading WordPress Custom Menu
	wp_nav_menu( array(
		'container_class' => 'collapse navbar-collapse navbar-collapse',
		'menu_class'      => 'nav navbar-nav',
		'container_id'    => 'bs-example-navbar-collapse-2',
		'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
	) );
  ?>
</nav>
    

<?php
//home nav
/*
    <div class="masthead">
       <h3 class="text-muted"><a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('title'); ?>"><img style="width:200px;" src="https://raw.github.com/SimonWaldherr/PIS-draft/master/logodrafts/d01.png" alt="FAMOUS"></a></h3>
       		<!-- Collect the nav links for toggling -->
      		<?php // Loading WordPress Custom Menu
         		wp_nav_menu( array(
            		'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
            		'menu_class'      => 'nav nav-justified',
            		#'menu_id'         => 'main-menu',
            		'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
        		) );
      		?>   
    </div>
*/
?>