<?php 
/*
 * Template Name: Presse Template
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
                <a href="<?php bloginfo('url'); ?>/team/"> Team </a>
                <a href="<?php bloginfo('url'); ?>#"> Technology </a>
                <a href="<?php bloginfo('url'); ?>/presse/" class="active"> Presse </a>
                <a href="<?php bloginfo('url'); ?>/blog/"> News </a>
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
        						'theme_location'=>'presse',
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
            
            
            
            <div class="column_9">
                
                <article class="row">
                    <div class="margin-bottom">
                        <h2><a href="#" class="text bold color theme">Podcastname / Blogartikel</a></h2>
                        <hr />
                    </div>


                    <div class="column_3 img margin-top margin-bottom bck color" style="height: 200px;"></div>
                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, dolorum, placeat, nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
					</p>
					
					<br>
					
					<p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, dolorum, placeat, nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, dolorum, placeat, nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
                    </p>
                </article>

			<br>
			<br />
	
                <article class="row">
                    <div class="margin-bottom">
                        <h2><a href="#" class="text bold color theme">Podcastname / Blogartikel</a></h2>
                        <hr />
                    </div>


                    <div class="column_3 img margin-top margin-bottom bck color" style="height: 200px;"></div>
                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, dolorum, placeat, nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
					</p>
					
					<br>
					
					<p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, dolorum, placeat, nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, dolorum, placeat, nobis molestiae eum dolor incidunt id nesciunt quas porro quaerat laboriosam assumenda voluptate ipsam cupiditate nam rem obcaecati error?
                    </p>
                </article>
            </div>

        </div>
    </section>


<?php get_footer(); ?>