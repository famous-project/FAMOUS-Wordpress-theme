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

<<<<<<< HEAD
################################################# SETUP #################################################

function famous_setup() {
	/*
	 * Makes Twenty Twelve available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Twelve, use a find and replace
	 * to change 'twentytwelve' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'famous', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'famous' ) );

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'fff',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 300, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'famous_setup' );


####### Image

/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 300;

	
####### Fonts

/**
 * Returns the Google font stylesheet URL if available.
 *
 * The use of Open Sans by default is localized. For languages that use
 * characters not supported by the font, the font can be disabled.
 */
function famous_get_font_url() {
	$font_url = '';

	/* translators: If there are characters in your language that are not supported
	 by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'famous' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Open Sans character subset specific to your language, translate
		 this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'famous' );

		if ( 'cyrillic' == $subset )
			$subsets .= ',cyrillic,cyrillic-ext';
		elseif ( 'greek' == $subset )
			$subsets .= ',greek,greek-ext';
		elseif ( 'vietnamese' == $subset )
			$subsets .= ',vietnamese';

		$protocol = is_ssl() ? 'https' : 'http';
		$query_args = array(
			'family' => 'Open+Sans:400italic,700italic,400,700',
			'subset' => $subsets,
		);
		$font_url = add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" );
	}

	return $font_url;
}

function famous_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

}
add_action( 'wp_enqueue_scripts', 'famous_scripts_styles' );



=======
>>>>>>> df3739a3077c5f067c1e63acdb4cf83c9b0aff43
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
<<<<<<< HEAD
  wp_enqueue_style('bootstrapwp', '//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css', false ,'3.0.2');
=======
  wp_enqueue_style('bootstrapwp', '//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css', true ,'3.0.2');
>>>>>>> df3739a3077c5f067c1e63acdb4cf83c9b0aff43
  
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

<<<<<<< HEAD



################################################# Widgets #################################################

function famous_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'famous' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'famous' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer (1)', 'famous' ),
		'id' => 'footer-1',
		'description' => __( 'Footer Angaben', 'famous' ),
		'before_widget' => '<div class="col-md-4">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


}
add_action( 'widgets_init', 'famous_widgets_init' );
=======
>>>>>>> df3739a3077c5f067c1e63acdb4cf83c9b0aff43
