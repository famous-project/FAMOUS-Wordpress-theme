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
                    <?php the_content(); ?>
                    </p>
                </div>
				<!--article projects-->
            	<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php
                /*
                <!--article projects-->
            	<div class="row">            
					<!--1-->
               		<article class="column_3 margin-bottom"> 
                    	<div class="margin-bottom">
                        	<h3><a href="#" class="text bold color success">Project title</a></h3>
                         	<hr />
                    	</div>                    
                    	<div class="row">
                    		<div class="column_3 img margin-bottom" style="height: 200px;"></div>
                    		<div class="column_3">
                    		<p>
                        		Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. 
                        	Molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
                    		</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	</div>
                		<hr />
					</article>
					*/
					?>


<?php	  			
	  			
	//my vars
	global $new_project;
	
	//Variable
	$the_project = $new_project->the_meta();


###----------


#echo '<pre>';
#print_r($the_project);
#echo '</pre>';


echo '<img src="'.$the_project['project_img'].'">';
echo $the_project['project_url'];


echo $the_project['project_description'];


		//<!--1-->
        echo'<article class="column_3 margin-bottom">';
            echo '<div class="margin-bottom">';
            	echo '<h3><a href="#" class="text bold color success">'. get_the_title() .'</a></h3>';
            	echo '<hr />';
        	echo '</div>';
            echo '<div class="row">';
            	//img
            	echo '<div class="column_3 margin-bottom" style="height: 200px;"><img src="'.$the_project['project_img'].'"></div>';
            		echo '<div class="column_3">';
            			echo '<p>'.$the_project['project_description'].'</p>';
           				echo '<br>';
           			echo '</div>';	
           			echo '<div class="column_3 text big">';
               				echo '<a href="#" class="margin-right icon facebook"></span></a>';
               				echo '<a href="#" class="icon twitter"></span></a>';
           			echo '</div>';
           		echo '</div>';
           echo '<hr />';
		echo '</article>';



/*
foreach ($meta['project_img'] as $podbe_user_s){



    	//Podcast (Avatar)
		echo '<a href="#top" style="width:100% !important;" class="th"><img id="podcast-cover" style="float: left; width:100% !important;" 
				src="';
			#Gravatar?
			if ($podbe_user_s['podbe_user_avatar_input'] == 'Gravatar') {
				echo 'http://www.gravatar.com/avatar/'.md5($podbe_user_s['podbe_user_avatar']).'?s=500" id="gravatar"';
			}
			#URL
			elseif ($podbe_user_s['podbe_user_avatar_input'] == 'URL') {
				echo 'http'.preg_replace("/(http)+/","",$podbe_user_s['podbe_user_avatar']). '" id="urlavatar"';
			}
			#NIX von beiden!
			else {
				echo '<!--Kein Cover-->';	
			}
			echo ' /></a>';
			
echo '</div>';	//-end 3
*/
?>
				
<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

               		<article class="column_3 margin-bottom"> 
                    	<div class="margin-bottom">
                        	<h3><a href="#" class="text bold color success">Project title</a></h3>
                         	<hr />
                    	</div>                    
                    	<div class="row">
                    		<div class="column_3 img margin-bottom" style="height: 200px;"></div>
                    		<div class="column_3">
                    		<p>
                        		Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. 
                        	Culpa, dolorum, placeat, nobis molestiae eum dolor Quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
                    		</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	</div>
                		<hr />
					</article>
				
               		<article class="column_3 margin-bottom"> 
                    	<div class="margin-bottom">
                        	<h3><a href="#" class="text bold color success">Project title</a></h3>
                         	<hr />
                    	</div>                    
                    	<div class="row">
                    		<div class="column_3 img margin-bottom" style="height: 200px;"></div>
                    		<div class="column_3">
                    		<p>
                        		Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. 
                        	Culpa, dolorum, placeat, nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
                    		</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	</div>
                		<hr />
					</article>
			
					<!--2-->
				    <article class="column_3 margin-bottom"> 
                    	<div class="margin-bottom">
                        	<h3><a href="#" class="text bold color success">Project title</a></h3>
                         	<hr />
                    	</div>                    
                    	<div class="row">
                    		<div class="column_3 img margin-bottom" style="height: 200px;"></div>
                    		<div class="column_3">
                    		<p>
                        		Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. 
                        	Nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
                    		</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	</div>
                		<hr />
					</article>
					
               		<article class="column_3 margin-bottom"> 
                    	<div class="margin-bottom">
                        	<h3><a href="#" class="text bold color success">Project title</a></h3>
                         	<hr />
                    	</div>                    
                    	<div class="row">
                    		<div class="column_3 img margin-bottom" style="height: 200px;"></div>
                    		<div class="column_3">
                    		<p>
                        		Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. 
                        	Culpa, dolorum, placeat, nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
                    		</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	</div>
                		<hr />
					</article>
					
               		<article class="column_3 margin-bottom"> 
                    	<div class="margin-bottom">
                        	<h3><a href="#" class="text bold color success">Project title</a></h3>
                         	<hr />
                    	</div>                    
                    	<div class="row">
                    		<div class="column_3 img margin-bottom" style="height: 200px;"></div>
                    		<div class="column_3">
                    		<p>
                        		Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. 
                        	Culpa, dolorum, placeat, dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
                    		</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	</div>
                		<hr />
					</article>
					<!--//2-->
				</div>
                <!--//article projects-->
        	</div>
        	<!--//PROJECTS-->
        </div><!--//row-->
    </section>
<!--//the projects-->

<?php get_footer(); ?>