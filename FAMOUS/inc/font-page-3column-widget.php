<?php
/**
 * Plugin Name: Front-Widget 3 column
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
add_action( 'widgets_init', 'Font_Page_Three_Widgets' );

/**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
function Font_Page_Three_Widgets() {
	register_widget( 'Font_Page_Three_Widget' );
}

/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class Font_Page_Three_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function Font_Page_Three_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Font_Page_Three_Widget', 'description' => __('A widget to display 3 column Infos in Page.', 'fontpage') );

		/* Widget control settings. */
		//$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'Testimonial_Widget' );

		/* Create the widget. */
		$this->WP_Widget( 'Font_Page_Three_Widget', __('FONT PAGE (3x)', 'fontpage'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract($args, EXTR_SKIP);

		#1
		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$image = $instance['image'];
		$urls = $instance['urls'];
		$text = $instance['text'];

		#2
		/* Our variables from the widget settings. */
		$title2 = apply_filters('widget_title', $instance['title2'] );
		$image2 = $instance['image2'];
		$urls2 = $instance['urls2'];
		$text2 = $instance['text2'];
		
		#3
		/* Our variables from the widget settings. */
		$title3 = apply_filters('widget_title', $instance['title3'] );
		$image3 = $instance['image3'];
		$urls3 = $instance['urls3'];
		$text3 = $instance['text3'];
		
		#hr
		$hr = $instance['hr'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;
			
########## OUT:
?>    <section class="padding bck text center">        
        <div class="row">
			<div class="column_4">
                <a href="<?php echo $urls; ?>" target="_blank" class="tip-right" data-tip="More about <?php if ( $title ) echo $title; ?>">
                <img class="responsive" src="<?php echo $image; ?>">
                </a>
                
                <h5><strong><?php if ( $title ) echo $title; ?></strong></h5>
                <br>
                <p><?php echo $text; ?></p>
                <br><br>
            	<a href="<?php echo $urls; ?>" class="button theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
            
            <div class="column_4">
                <a href="<?php echo $urls2; ?>" target="_blank" class="tip-right" data-tip="More about <?php if ( $title2 ) echo $title2; ?>">
                <img class="responsive" src="<?php echo $image; ?>">
                </a>
                
                <h5><strong><?php echo $title2; ?></strong></h5>
                <br>
                <p><?php echo $text2; ?></p>
                <br><br>
            	<a href="<?php echo $urls2; ?>" class="button theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
            
            <div class="column_4">
                <a href="<?php echo $urls3; ?>" target="_blank" class="tip-right" data-tip="More about <?php if ( $title3 ) echo $title3; ?>">
                <img class="responsive" src="<?php echo $image3; ?>">
                </a>
                
                <h5><strong><?php echo $title3; ?></strong></h5>
                <br>
                <p><?php echo $text3; ?></p>
                <br><br>
            	<a href="<?php echo $urls3; ?>" class="button theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
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
		$instance['urls'] = strip_tags( $new_instance['urls'] );	
		$instance['image'] = strip_tags( $new_instance['image'] );		
		$instance['text'] = stripslashes( $new_instance['text']);
		
		#2
		$instance['title2'] = strip_tags( $new_instance['title2'] );
		$instance['urls2'] = strip_tags( $new_instance['urls2'] );	
		$instance['image2'] = strip_tags( $new_instance['image2'] );		
		$instance['text2'] = stripslashes( $new_instance['text2']);
		
		#3
		$instance['title3'] = strip_tags( $new_instance['title3'] );
		$instance['urls3'] = strip_tags( $new_instance['urls3'] );	
		$instance['image3'] = strip_tags( $new_instance['image3'] );		
		$instance['text3'] = stripslashes( $new_instance['text3']);

		#hr
		$instance['hr'] = strip_tags( $new_instance['hr'] );	

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
		
		'title' => __('JODA', 'fontpage'),
		'link' => '', //seperate wp_
		'name' => '', //seperate wp_
		'urls' => __('#1', 'fontpage'),
		'image' => __('http://localhost:8888/wordpress2/wp-content/uploads/2013/12/famous-150x150.png', 'fontpage'),
		'text' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare.', 'fontpage'),
		
		'title2' => __('OSMOS', 'fontpage'),
		'link2' => '', //seperate wp_
		'name2' => '', //seperate wp_
		'urls2' => __('#2', 'fontpage'),
		'image2' => __('http://localhost:8888/wordpress2/wp-content/uploads/2013/12/famous-150x150.png', 'fontpage'),
		'text2' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare.', 'fontpage'),
		
		'title3' => __('EMIS', 'fontpage'),
		'link3' => '', //seperate wp_
		'name3' => '', //seperate wp_
		'urls3' => __('#3', 'fontpage'),
		'image3' => __('http://localhost:8888/wordpress2/wp-content/uploads/2013/12/famous-150x150.png', 'fontpage'),
		'text3' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare.', 'fontpage'),
		
		'hr' => __('y', 'fontpage'),
		
		);
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input (1)-->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'fontpage'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:95%;" />
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
			<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e('Text:', 'fontpage'); ?></label>
			<textarea style="height:200px;" class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo stripslashes(htmlspecialchars(( $instance['text'] ), ENT_QUOTES)); ?></textarea>
		</p>
		
		<hr />
		<!-- Widget Title: Text Input (2)-->
		<p>
			<label for="<?php echo $this->get_field_id( 'title2' ); ?>"><?php _e('2) Title:', 'fontpage'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title2' ); ?>" name="<?php echo $this->get_field_name( 'title2' ); ?>" value="<?php echo $instance['title2']; ?>" style="width:95%;" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'urls2' ); ?>"><?php _e('2) ULR:', 'fontpage') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'urls2' ); ?>" name="<?php echo $this->get_field_name( 'urls2' ); ?>" value="<?php echo $instance['urls2']; ?>" style="width:95%;"/>
		</p>
		
        <p>
			<label for="<?php echo $this->get_field_id( 'image2' ); ?>"><?php _e('2) Image URL (300 x 300 px):', 'fontpage') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" value="<?php echo $instance['image2']; ?>" style="width:95%;"/>
		</p>
        
    	<p>
			<label for="<?php echo $this->get_field_id( 'text2' ); ?>"><?php _e('2) Text:', 'fontpage'); ?></label>
			<textarea style="height:200px;" class="widefat" id="<?php echo $this->get_field_id( 'text2' ); ?>" name="<?php echo $this->get_field_name( 'text2' ); ?>"><?php echo stripslashes(htmlspecialchars(( $instance['text2'] ), ENT_QUOTES)); ?></textarea>
		</p>

		<hr />
		<!-- Widget Title: Text Input (3)-->
		<p>
			<label for="<?php echo $this->get_field_id( 'title3' ); ?>"><?php _e('3) Title:', 'fontpage'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title3' ); ?>" name="<?php echo $this->get_field_name( 'title3' ); ?>" value="<?php echo $instance['title3']; ?>" style="width:95%;" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'urls3' ); ?>"><?php _e('3) ULR:', 'fontpage') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'urls3' ); ?>" name="<?php echo $this->get_field_name( 'urls3' ); ?>" value="<?php echo $instance['urls3']; ?>" style="width:95%;"/>
		</p>
		
        <p>
			<label for="<?php echo $this->get_field_id( 'image3' ); ?>"><?php _e('3) Image URL (300 x 300 px):', 'fontpage') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'image3' ); ?>" name="<?php echo $this->get_field_name( 'image3' ); ?>" value="<?php echo $instance['image3']; ?>" style="width:95%;"/>
		</p>
        
    	<p>
			<label for="<?php echo $this->get_field_id( 'text3' ); ?>"><?php _e('3) Text:', 'fontpage'); ?></label>
			<textarea style="height:200px;" class="widefat" id="<?php echo $this->get_field_id( 'text3' ); ?>" name="<?php echo $this->get_field_name( 'text3' ); ?>"><?php echo stripslashes(htmlspecialchars(( $instance['text3'] ), ENT_QUOTES)); ?></textarea>
		</p>
		
		<hr />
		
		<p>
			<label for="<?php echo $this->get_field_id( 'hr' ); ?>"><?php _e('&lt;hr /&gt; ?', 'fontpage') ?></label>
			<input type="checkbox" class="widefat" id="<?php echo $this->get_field_id( 'hr' ); ?>" name="<?php echo $this->get_field_name( 'hr' ); ?>" value="y" <?php if($instance['hr']=='y') { echo 'checked'; } ?>/> <span>Am Ende ein <i>horizontal rule </i> einbringen? </span>
		</p>

		<br>
	<?php
	}
}

?>
