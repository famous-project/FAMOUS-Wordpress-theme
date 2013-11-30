<?php get_header(); ?>

<div class="row">
  	<div class="col-md-9">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<h1><?php the_title(); ?></h1>
	  	
	  		<?php the_content(); ?>

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