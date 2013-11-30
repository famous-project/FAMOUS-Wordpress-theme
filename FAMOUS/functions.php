<?php 
/**
 * Enqueues scripts and styles for front end.
 *
 * @package WordPress
 * @subpackage famous-project
 * @since FAMOUS 1.0
 *
 * @return void
 */

################################################# HEADER #################################################

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
		return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'add_opengraph_doctype');

//Lets add Open Graph Meta Info
function insert_fb_in_head() {
	global $post;
	if ( !is_singular()) //if it is not a post or a page
		return;
		echo '<meta property="fb:admins" content="FAMOUS Team"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="FAMOUS Project"/>';
	if(!has_post_thumbnail( $post->ID )) { 
		
		//the post does not have featured image, use a default image
		$default_image="http://famous-project.org/image.jpg"; 
		
		//replace this with a default image on your server or an image in your media library
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
		echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	}
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );


 
################################################# FOOTER #################################################
function cwd_wp_bootstrap_scripts_styles() {
  
  // Loads Bootstrap minified JavaScript file.
  wp_enqueue_script('bootstrapjs', '//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js', array('jquery'),'3.0.2', true );
  
  // Loads Bootstrap minified CSS file.
  wp_enqueue_style('bootstrapwp', '//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css', true ,'3.0.2');
  
  // Loads our main stylesheet.
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('bootstrapwp') ,'1.0');

}
add_action('wp_enqueue_scripts', 'cwd_wp_bootstrap_scripts_styles');



################################################# NAVIGATION #################################################

if ( ! function_exists( 'cwd_wp_bootstrapwp_theme_setup' ) ):
  function cwd_wp_bootstrapwp_theme_setup() {
    // Adds the main menu
    register_nav_menus( array(
      'main-menu' => __( 'Main Menu', 'cwd_wp_bootstrapwp' ),
    ) );
  }
endif;
add_action( 'after_setup_theme', 'cwd_wp_bootstrapwp_theme_setup' );

//include navigation
require_once 'inc/nav.php';

