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
		  Copyright © Creative Web Design <?php echo date('Y'); ?>
		</div>
	</div> <!-- // .container -->
<?php wp_footer(); ?>
</body>
</html>