<?php 
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage famous-project
 * @since FAMOUS 1.0
 *
 */
 
// Gets all the scripts included by wordpress, wordpress plugins or functions.php 
// using wp_enqueue_script if it has $in_footer set to true
?>
</div> <!-- // .container -->

<!--randompage (post_type: projects)-->
<div class="container">
<div class="row">




</div>
</div>

<!-- Footer -->
<div class="footer">
<div class="container">	
	<div class="row">
	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		
			<?php dynamic_sidebar( 'footer-1' ); ?>
		
	<?php endif; ?>
	</div>
    
    
    <hr />
          <!-- footer copyright informations-->
          <div>
            <span>Copyright © <?php echo get_bloginfo('title'); ?>, <?php echo date('Y'); ?></span>
          </div>
    <br>
    <br>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>