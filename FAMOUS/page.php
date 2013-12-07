<?php 
/*
 * @package WordPress
 * @subpackage famous-project
 * @since FAMOUS 1.0
 *
**/

get_header(); ?>
<style>
          body > header .logo {
              margin-top: 11px;
              max-height: 28px; }

          body > header .tapquo > img {
              max-height: 48px; }

          body > footer img {
              height: 18px;
              position: relative;
              top: 5px;
              left: 2px; }

          body .devices span {
            font-size: 128px; }

          body .icons .icon {
            font-size: 32px;
            width: 44px;
            display: inline-block;
            margin: 5px;
            text-align: center;
          }
.menu-item{
	border-bottom: 1px solid #eee; 
	padding: 10px !important;
}
div#contents a { color: #1B98C9; font-weight: bold; }
</style>
      
    <!-- ========================== NAVIGATION ========================== --> 
    <section class="bck dark">
        <div class="row text center">
            <nav data-famous="menu" class="column_12 padding text bold">
                <a href="<?php bloginfo('url'); ?>"><span class="icon home"></span> Home</a>
                <a href="<?php bloginfo('url'); ?>/about/" class="active"> About </a>
                <a href="<?php bloginfo('url'); ?>/team/"> Team </a>
                <a href="<?php bloginfo('url'); ?>#"> Technology </a>
                <a href="<?php bloginfo('url'); ?>/presse/"> Presse </a>
                <a href="<?php bloginfo('url'); ?>/blog/"> News </a>
            </nav>
        </div>
    </section>
    
    <section style="padding:10px;" class="bck light">
        <div class="row">
            <div class="column_12">
            	<h4 class="text bold"><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </section>
	<!-- ========================== CONTENT ========================== -->
    <section class="padding features">
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
            </aside>
            <div class="column_9" id="contents">
            	<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  			<?php the_content(); ?>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>
            </div>
        </div>
    </section>
 	

<?php get_footer(); ?>