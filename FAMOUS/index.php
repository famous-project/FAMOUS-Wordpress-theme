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

	// Gets header.php
	get_header();
?>

<div class="row">
  <div class="col-md-12">
    <h1>Blogseite</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  	<p><em><?php the_time('l, F jS, Y'); ?></em></p>
  	
  	<hr>
    
    
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>