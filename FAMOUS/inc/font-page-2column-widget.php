<?php
/**
 * Plugin Name: Front-Widget 2 column
 * Plugin URI: http://wikibyte.org
 * Description: A widget that displays projects in 3 columns.
 * Version: 0.1
 * Author: Michael Kaufmann (Michael McCouman Jr.)
 * Author URI: http://famous-project.org
 *
 * textdomain() used - fontpage
 *
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
add_action( 'widgets_init', 'font_page_widgets' );

/**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
function font_page_widgets() {
	register_widget( 'Font_Page_Widget' );
}

/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class Font_Page_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function Font_Page_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Font_Page_Widget', 'description' => __('A widget to display 3 column Infos in Page.', 'fontpage') );

		/* Widget control settings. */
		//$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'Testimonial_Widget' );

		/* Create the widget. */
		$this->WP_Widget( 'Font_Page_Widget', __('FONT PAGE (2x)', 'fontpage'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract($args, EXTR_SKIP);

		#1
		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$title2 = $instance['title2'];
		$position = $instance['position'];
		$hr = $instance['hr'];
		$image = $instance['image'];
		$urls = $instance['urls'];
		$text = $instance['text'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;
			
########## OUT:
?>
	<section class="padding bck">
        <div class="row">
        	<?php if ( $position == 'left' ) { ?>
        	<div class="column_6 text center">
                <a href="examples/profile.html" target="_blank" class="tip-right" data-tip="More about <?php if ( $title ) echo $title; ?>">
                    <img src="<?php echo $image; ?>" class="responsive"/>
                </a>
            </div>
        	<?php } ?>
            <div class="column_6">
                <h2 style="font-size:50px; font-weight: 300;line-height: 1;letter-spacing: -1px;"><?php if ( $title2 ) { echo '<span class="color midle">'.$title.'</span>'; } else { echo $title;} ?>. <?php echo $title2; ?></h2>
                <br>
                <p style="font-size:22px;"><?php echo $text; ?></p>

            	<br>
            	<a href="<?php echo $urls; ?>" class="button large theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
            <?php if ( $position == 'right' ) { ?>
        	<div class="column_6 text center">
                <a href="examples/profile.html" target="_blank" class="tip-left" data-tip="More about <?php if ( $title ) echo $title; ?>">
                    <img src="<?php echo $image; ?>" class="responsive"/>
                </a>
            </div>
        	<?php } ?>
            
        </div>
    </section>
    <?php if ( $hr == 'y' ) { echo '<hr />'; } else { echo '<!--more-->';}?>
<?php
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		#1
		$instance['title'] = strip_tags( $new_instance['title'] );
				$instance['title2'] = strip_tags( $new_instance['title2'] );
		$instance['position'] = strip_tags( $new_instance['position'] );
		$instance['hr'] = strip_tags( $new_instance['hr'] );	
		$instance['urls'] = strip_tags( $new_instance['urls'] );	
		$instance['image'] = strip_tags( $new_instance['image'] );		
		$instance['text'] = stripslashes( $new_instance['text']);

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
		
		'title' => __('Hallo und herzlich willkommen', 'fontpage'),
		'title2' => __('Auf dieser Seite', 'fontpage'),
		'hr' => __('y', 'fontpage'),
		'link' => '',
		'name' => '',
		'position' => __('left', 'fontpage'),
		'urls' => __('#100', 'fontpage'),
		'image' => __('http://dev.wikibyte.org/FAMOS/img/right.png', 'fontpage'),
		'text' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare.', 'fontpage'),
		
		);
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input (1)-->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'fontpage'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:95%;" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'title2' ); ?>"><?php _e('Title (2):', 'fontpage'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title2' ); ?>" name="<?php echo $this->get_field_name( 'title2' ); ?>" value="<?php echo $instance['title2']; ?>" style="width:95%;" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'urls' ); ?>"><?php _e('ULR:', 'fontpage') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'urls' ); ?>" name="<?php echo $this->get_field_name( 'urls' ); ?>" value="<?php echo $instance['urls']; ?>" style="width:95%;"/>
		</p>
		
        <p>
			<label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e('Image URL (300 x 300 px):', 'fontpage') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php echo $instance['image']; ?>" style="width:95%;"/>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'position' ); ?>"><?php _e('Image Position:', 'fontpage') ?></label>
			<div style="float:left; width: 50px;"><input type="radio" class="widefat" id="<?php echo $this->get_field_id( 'position' ); ?>" name="<?php echo $this->get_field_name( 'position' ); ?>" value="left" <?php if($instance['position']=='left') { echo 'checked'; } ?>/> <span>left</span> </div>
			<div style="float:left; width: 50px;"><input type="radio" class="widefat" id="<?php echo $this->get_field_id( 'position' ); ?>" name="<?php echo $this->get_field_name( 'position' ); ?>" value="right" <?php if($instance['position']=='right') { echo 'checked'; } ?>/> <span>right</span> </div>
		</p>
        <div style="clear:both; margin-bottom:12px;"></div>
    	<p>
			<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e('Text:', 'fontpage'); ?></label>
			<textarea style="height:200px;" class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo stripslashes(htmlspecialchars(( $instance['text'] ), ENT_QUOTES)); ?></textarea>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'hr' ); ?>"><?php _e('&lt;hr /&gt; ?', 'fontpage') ?></label>
			<input type="checkbox" class="widefat" id="<?php echo $this->get_field_id( 'hr' ); ?>" name="<?php echo $this->get_field_name( 'hr' ); ?>" value="y" <?php if($instance['hr']=='y') { echo 'checked'; } ?>/> <span>Am Ende ein <i>horizontal rule </i> einbringen? </span>
		</p>
	<?php
	}
}

?>
