<?php 
/*
 * Template Name: Team Template
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
    
<!--the MEMBERS-->
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

			<!--MEMBERS-->
            <div class="column_9">
            	<!--Project header-->
            	<div class="margin-bottom">
                    <h2><a href="#" class="margin-bottom text color dark right"><span class="icon group"></span> Mitglieder</a></h2>
                    <hr />
                    <p class="magrin-bottom">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
                    quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                
                </div>
                
                <br><br>
                
                <!--article MEMBERS-->
            	<div class="row">            
					<!--1-->
               		<article class="column_9 padding margin-bottom bck light">                    	                   
                    	<div class="row">                   		
                    		<div class="column_2 margin-bottom">
                    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/famous-framework/img/user-300.png" class="responsive" style="border-left: 5px solid #55A5EE;">
                    		</div>
                    		<div class="column_6">                   		
                    			<h4><a href="#" class="text bold color midle"> Person Name </a></h4>
                         		<hr />
                    		
                    			<p>
                        		eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
                    			quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                   				</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	<br><br>
                    	</div>                		
					</article>
				
					<!--2-->
               		<article class="column_9 padding margin-bottom bck light">                    	                   
                    	<div class="row">                   		
                    		<div class="column_2 margin-bottom">
                    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/famous-framework/img/user-300.png" class="responsive" style="border-left: 5px solid #55A5EE;">
                    		</div>
                    		<div class="column_6">                   		
                    			<h4><a href="#" class="text bold color midle"> Person Name </a></h4>
                         		<hr />
                    		
                    			<p>
                        		eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
                    			quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                   				</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	<br><br>
                    	</div>                		
					</article>

					<!--3-->
               		<article class="column_9 padding margin-bottom bck light">                    	                   
                    	<div class="row">                   		
                    		<div class="column_2 margin-bottom">
                    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/famous-framework/img/user-300.png" class="responsive" style="border-left: 5px solid #55A5EE;">
                    		</div>
                    		<div class="column_6">                   		
                    			<h4><a href="#" class="text bold color midle"> Person Name </a></h4>
                         		<hr />
                    		
                    			<p>
                        		eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
                    			quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                   				</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	<br><br>
                    	</div>                		
					</article>
					
					<!--4-->
               		<article class="column_9 padding margin-bottom bck light">                    	                   
                    	<div class="row">                   		
                    		<div class="column_2 margin-bottom">
                    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/famous-framework/img/user-300.png" class="responsive" style="border-left: 5px solid #55A5EE;">
                    		</div>
                    		<div class="column_6">                   		
                    			<h4><a href="#" class="text bold color midle"> Person Name </a></h4>
                         		<hr />
                    		
                    			<p>
                        		eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
                    			quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                   				</p>
                    		<br>
                    		<div class="column_3 text big">
                        		<a href="#" class="margin-right icon facebook"></span></a>
                        		<a href="#" class="icon twitter"></span></a>
                    		</div>
                    	<br><br>
                    	</div>                		
					</article>
			
					
				</div>
                <!--//article MEMBERS-->
        	</div>
        	<!--//MEMBERS-->
        </div><!--//row-->
    </section>
<!--//the MEMBERS-->

<?php get_footer(); ?>