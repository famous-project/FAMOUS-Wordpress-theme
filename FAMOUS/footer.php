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
<?php wp_footer(); ?>
</body>
</html>
