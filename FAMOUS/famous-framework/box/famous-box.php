<?php

//Einbindung Classe
include_once ('admin/MetaBox.php');

// global styles for the meta boxes
function metabox_style() {
	wp_enqueue_style('famous-metabox', get_stylesheet_directory_uri() . '/metaboxes/admin-meta.css');
}
if (is_admin()) add_action('admin_enqueue_scripts', 'metabox_style');



//Webplayer CSS/JS
#function admin_register_head() {
#		wp_enqueue_style( 'pwp-css', '/wp-content/plugins/podlove-web-player/static/podlove-web-player.css' );
#		wp_enqueue_script( 'colorconv', get_stylesheet_directory_uri() . '/pwpdesigner/colorconv.js' );
#		wp_enqueue_script( 'colorconv-script', get_stylesheet_directory_uri() . '/pwpdesigner/script.js' );
#		wp_enqueue_script( 'colorconv-script', get_stylesheet_directory_uri() . '/pwpdesigner/html5slider.js' );
#}
if (is_admin()) add_action('admin_enqueue_scripts', 'admin_register_head');

############## Boxen erstellen

$custom_checkbox_mb = $mytest = new PODBE_MetaBox(array
(
	'id' => '_custom_checkbox_meta', 											//Custon Type ID
	'title' => 'Podcaster',														//Name der Box
	'template' => get_stylesheet_directory() . '/metaboxes/podcast-meta.php',  //Einbindung (Startpage)
	'types' => array('post'), 													//Post_Types
));


$design = new PODBE_MetaBox(array
(
	'id' => '_Podbe_Design', 													//Custon Type ID
	'title' => 'Player Design',													//Name der Box
	'template' => get_stylesheet_directory() . '/metaboxes/player-meta.php',  //Einbindung (Startpage)
	'types' => array('post'), 													//Post_Types
));




/* eof */