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
<<<<<<< HEAD
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
=======
	<div class="well well-sm">
		  <a href="#top" class="pull-right">Back to top</a>
	</div>
	<footer>
	   <!-- footer widgets 4x -->
	     <!--I.A.-->
	
	
	
	  <!-- footer copyright informations-->
	  <div>
	    <span>Copyright © <?php echo get_bloginfo('title'); ?>, <?php echo date('Y'); ?></span>
	  </div>
	</footer>
	

</div> <!-- // .container -->
>>>>>>> df3739a3077c5f067c1e63acdb4cf83c9b0aff43
<?php wp_footer(); ?>
</body>
</html>
