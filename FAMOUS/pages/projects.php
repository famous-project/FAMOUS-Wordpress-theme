<?php 
/*
 * Template Name: Projects Template
 *
 * @package WordPress
 * @subpackage famous-project
 * @since FAMOUS 1.0
 *
**/

get_header(); ?>

    <section class="bck dark">
        <div class="row text center">
            <nav data-famous="menu" class="column_12 padding text bold">
                <a href="<?php bloginfo('url'); ?>"><span class="icon home"></span> Home</a>
                <a href="<?php bloginfo('url'); ?>/about/"> About </a>
                <a href="<?php bloginfo('url'); ?>/team/" class="active"> Team </a>
                <a href="<?php bloginfo('url'); ?>#"> Technology </a>
                <a href="<?php bloginfo('url'); ?>/presse/"> Presse </a>
                <a href="<?php bloginfo('url'); ?>/blog/"> News </a>
            </nav>
        </div>
    </section>
    
<!--the projects-->
    <section class="padding">
        <div class="row">                 	
        	<aside class="column_3">
                <h5 class="text normal bck midle" style="padding:10px;"><span class="color white">Navigation</span></h5>
                <br>                	
                	<?php // Loading WordPress Custom Menu
        				wp_nav_menu(
        				
        					array(
        						'theme_location'=>'team',
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

			<!--PROJECTS-->
            <div class="column_9">
            	<!--Project header-->
            	<div class="margin-bottom">
                    <h2><a href="#" class="margin-bottom text color dark right"><span class="icon sitemap"></span> PROJECTS</a></h2>
                	<hr />
                    <p class="magrin-bottom">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>
                    <?php the_content(); ?>
            <?php endwhile;?>
            <?php endif; ?>
                    </p>
                </div>
				<!--article projects-->
            	<div class="row">
<?php 
query_posts('post_type=projects&posts_per_page=20&orderby=rand&showposts=30'); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	  			
	//my vars
	global $new_project;
	
	//Variable
	$the_project = $new_project->the_meta();


#echo '<pre>';
#print_r($the_project);
#echo '</pre>';

###----------


		//<!--1-->
        echo'<article class="column_3 margin-bottom">';
            echo '<div class="margin-bottom text center">';
            	echo '<h3><a href="'; the_permalink(); echo '" class="text bold color color">'. get_the_title() .'</a></h3>';
            	echo '<hr />';

        	echo '</div>';
            echo '<div class="row">';
            	//img
            	echo '<div class="column_3 margin-bottom text center" style="">
            			<img style="border: 1px solid #4389C0 !important;" class="responsive" src="'.$the_project['project_img'].'"><br><br />';
            			// check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) { 
  							echo '<a href="'; the_permalink();  echo '" title="Mehr erfahren über '.get_the_title().'">';
  								the_post_thumbnail('medium', array('class' => 'responsive'));
  							echo '</a>';
						}
            			
            			//Social Networks
						foreach ($the_project['project_data'] as $the_project_social){
							echo '<a href="'. $the_project_social['project_data_url'].'" class="color midle margin-right icon ' . $the_project_social['project_data_social'] . '"></a>';
						}
            	echo '</div>';
            		echo '<div class="column_3">';
            			#echo '<p>'.$the_project['project_description'].'</p>';
           				echo '<br>';
           			echo '</div>';	
           			echo '<div class="column_3 text big center">';
               				
            					//More
               					echo '<a class="button margin-bottom text center" href="'; the_permalink(); echo '" title="'.get_the_title().'"><span class="icon right-sign"></span> Mehr erfahren</a><br />';
	            	
           			echo '</div>';
           		echo '</div>';
           echo '<hr />';
		echo '</article>';
?>
				
<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

               		
				</div>
                <!--//article projects-->
        	</div>
        	<!--//PROJECTS-->
        </div><!--//row-->
    </section>
<!--//the projects-->

<?php get_footer(); ?>