<<<<<<< HEAD
<?php get_header(); ?>

<div class="row">
  	<div class="col-md-9">
=======
<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage famous-project
 * @since FAMOUS 1.0
 */
get_header(); ?>
</div>
<div class="container marketing" style="paddin: 5px;">

<div class="row">
    <div class="col-md-3">
	<h2>Sidebar</h2>	
    </div>
    <div class="col-md-9">
>>>>>>> df3739a3077c5f067c1e63acdb4cf83c9b0aff43
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<h1><?php the_title(); ?></h1>
	  	
	  		<?php the_content(); ?>
<<<<<<< HEAD

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
	</div>
    <div class="col-md-3">
		<h2>Sidebar</h2>
		<?php get_sidebar(); ?> 	
  	</div>
</div>

</div>
<?php get_footer(); ?>
=======

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
    </div>
</div>

</div><!--//marketing-->
<?php get_footer(); ?>
>>>>>>> df3739a3077c5f067c1e63acdb4cf83c9b0aff43
