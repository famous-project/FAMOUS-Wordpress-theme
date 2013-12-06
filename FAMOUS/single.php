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
<style>
.menu-item{
	border-bottom: 1px solid #eee; 
	padding: 10px !important;
}
</style>
    <section class="bck dark">
        <div class="row text center">
            <nav data-famous="menu" class="column_12 padding text bold">
                <a href="<?php bloginfo('url'); ?>"><span class="icon home"></span> Home</a>
                <a href="<?php bloginfo('url'); ?>/about/"> About </a>
                <a href="<?php bloginfo('url'); ?>/team/"> Team </a>
                <a href="<?php bloginfo('url'); ?>#"> Technology </a>
                <a href="<?php bloginfo('url'); ?>/presse/"> Presse </a>
                <a href="<?php bloginfo('url'); ?>/blog/" class="active"> News </a>
            </nav>
        </div>
    </section>

    <section class="padding">
        <div class="row">
            
            
            <aside class="column_3">
                <h5 class="text normal bck midle" style="padding:10px;"><span class="color white">Navigation</span></h5>
                <br>                	
                	<?php // Loading WordPress Custom Menu
        				wp_nav_menu(
        				
        					array(
        						'theme_location'=>'blog',
    							'container'       => 'nav',
								'container_class' => 'margin-bottom',
								'items_wrap'      => '<ul style="list-style: none;">%3$s</ul>',
								'items_class' => 'navmenu',
								'depth'           => 0,
								'walker'          => ''
        						)
        				);
  					?> 
  					
  				<div class="padding color color margin-bottom">
                    <h5 class="text normal">Kategorien</h5>
          			<form id="form" name="form" class="margin-top">

                        <span class="select">
                            <select>
                                <option value="1">HTML5 Jedi</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </span>

                	</form>
          		</div>
                <div class="bck dark padding margin-bottom">
                    <h5 class="text color white normal">Wolke</h5>
                    <a href="#">Lorem</a>, ipsum, dolor, sit amet, consectetur, adipisicing, elit. Tempore, provident, ullam, eos, minus, neque reprehenderit veritatis deserunt.
                </div> 					
            </aside>
            
            
            
            <div class="column_9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<article class="margin-bottom">
                    <div class="margin-bottom">
                        <h1><a href="<?php the_permalink(); ?>" class="text bold color theme"><?php the_title(); ?></a></h1>
                        <small>Written by <a href="<?php bloginfo('url'); ?>/team/" class="text bold color theme">FAMOUS Team</a> on <?php the_time('l, F jS, Y'); ?></small>
                        <hr />
                    </div>
    				<?php the_content(); ?>
    			</article>

					<br>
					<br />
    		
    		<?php endwhile; ?>
    		<?php endif; ?>
            </div>    
                        
            
        </div>
    </section>
	


<?php get_footer(); ?>