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
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
                    quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>
                
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