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
article#contents a { color: #1B98C9; font-weight: bold; }
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
            <article class="column_9" id="contents">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php	  			
	  			
	//my vars
	global $new_project;
	
	//Variable
	$the_project = $new_project->the_meta();
	
	//tests
	echo '<pre>';
	#print_r($the_project);
	echo '</pre>';
?>
<div class="row">
<div class="column_4 margin-bottom">
<?php
echo '<img class="responsive" src="'.$the_project['project_img'].'">';
?>
</div>
<div class="column_5">
<?php
	echo '<h2 class="margin-bottom"><a href="'.$the_project['project_url'].'">'.get_the_title().'</a></h2><hr />';
	echo '<p class="text normal">'.$the_project['project_description'].'</p>';
	echo '<br>';
	echo '<a class="button margin-bottom" href="'.$the_project['project_url'].'" title="'.get_the_title().'"><span class="icon right-sign"></span> Zur Website</a>';
	  			
//Social Networks
foreach ($the_project['project_data'] as $the_project_social){
	echo '<a href="'. $the_project_social['project_data_url'].'" class="margin-left icon ' . $the_project_social['project_data_social'] . '"></a>';
}
?>
</div>
</div>
	  			<?php endwhile; else: ?>
					<p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>
            </div>
        </div>
    </section>
 	

<?php get_footer(); ?>