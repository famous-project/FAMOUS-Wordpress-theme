<?php 
/*
 * Template Name: Welcome Page
 *
 * @package WordPress
 * @subpackage famous-project
 * @since FAMOUS 1.0
 *
**/

get_header(); ?>
	<!--welcome-->
    <section class="padding bck dark" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/famous-framework/img/land1.png) center center no-repeat #00BCEB;">
        <div class="row margin-top">
            <div class="column_3 padding" style="background: #FFF; border-radius: 20px;">
                <img src="https://raw.github.com/famous-project/FAMOUS-pictures/master/1.png" class="responsive" data-tip="Hello world!" />
            </div>
            <div class="column_9 color white">
                <h1 class="text bold" style="margin-bottom: 25px;">Willkommen</h1>
                <h5 class="text normal italic margin-bottom" style="border-radius: 10px 0px 0px 0px; background: rgba(255, 255, 255, 0.82); color: #000;padding: 10px; margin-bottom: 0px;">Famous Applications for Metadata Organizing and Utilizing Systems</h5>
                <h4 class="text justify margin-bottom" style="border-radius: 0px 0px 10px 0px; background: #000; padding: 10px;">Das FAMOUS Projekt besteht aus drei kleineren Projekten. Zum einen gibt es eine Definition eines JSON Austauschformats mit dem Namen JSON Objects Data Application.</h4>

                <div class="row text bold hide-phone">
                    <div class="column_9 text big right">
                    	<a href="http://famous-projekt.org" class="margin-right icon github"></a>
                        <a href="#" class="margin-right icon facebook"></a>
                        <a href="#" class="margin-right icon twitter"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--/welcome-->
	
	<!--nav-->
    <section class="bck dark">
        <div class="row text center">
            <nav data-famous="menu" class="column_12 padding text bold">
                <a href="<?php bloginfo('url'); ?>" class="active"><span class="icon home"></span> Home</a>
                <a href="<?php bloginfo('url'); ?>/about/"> About </a>
                <a href="<?php bloginfo('url'); ?>/team/"> Team </a>
                <a href="<?php bloginfo('url'); ?>#"> Technology </a>
                <a href="<?php bloginfo('url'); ?>/presse/"> Presse </a>
                <a href="<?php bloginfo('url'); ?>/blog/"> News </a>
            </nav>
        </div>
    </section>
	<!--/nav-->



    <section class="padding bck text center">
        
        <div class="row">
            <div class="column_4">
                <?php
                /*
                <a href="examples/blog.html" target="_blank" class="tip-right" data-tip="More about JODA">
                    <img style="width:50%;" src="https://raw.github.com/famous-project/FAMOUS-draft/master/logodrafts/d04.png" class="center responsive"/>
                </a>
                */
                ?>
                <style>
                h1#joda-1 { color:#0C354D; font-size: 180px; }
                h1#joda-2 { color:#063C77; font-size: 180px; margin-top: -180px; }
                h1#joda-3 { color:#00BCEB; font-size: 180px; margin-top: -180px; margin-left: 67px;}
                </style>
                <a href="#" target="_blank" class="tip-right" data-tip="More about JODA">
                <h1 id="joda-1" class="project project-joda-half1"></h1>
                <h1 id="joda-2" class="project project-joda-half2"></h1>
                <h1 id="joda-3" class="project project-joda-half2"></h1>
                </a>
                
                <h5><strong>JODA</strong></h5>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare. </p>
				<br><br>
            	<a href="#" class="button theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
            <div class="column_4">
                <style>
                h1#osmos-1 { color:#063C77; font-size: 180px; }
                h1#osmos-2 { color:#1B98C9; font-size: 180px; margin-top: -180px; }
                </style>
                <a href="#" target="_blank" class="tip-right" data-tip="More about OSMOS">
                <h1 id="osmos-1" class="project project-osmos-half1"></h1>
                <h1 id="osmos-2" class="project project-osmos-half2"></h1>
                </a>
                <h5><strong>OSMOS</strong></h5>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare. </p>
				<br><br>
            	<a href="#" class="button theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
            <div class="column_4">
                <style>
                h1#emis-1 { color:#00BCEB; font-size: 182px; }
                </style>
                <a href="#" target="_blank" class="tip-left" data-tip="More about EMIS">
                <h1 id="emis-1" class="project project-famous"></h1>
                </a>
                <h5><strong>EMIS</strong></h5>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare. </p>
				<br><br>
            	<a href="#" class="button theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>

        </div>
    </section>

    <hr />
    
<!--Homesite-->
    <section class="padding bck">
        <div class="row">
            <div class="column_6">
                <h2 style="font-size:50px; font-weight: 300;line-height: 1;letter-spacing: -1px;"><span class="color midle">Hallo und herzlich willkommen </span>. Auf dieser Seite</h2>
                <br>
                <p style="font-size:22px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare. </p>

            	<br>
            	<a href="#" class="button large theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
            <div class="column_6 text center">
                <a href="examples/profile.html" target="_blank" class="tip-left" data-tip="Click to view">
                    <img src="http://dev.wikibyte.org/FAMOS/img/right.png" class="responsive"/>
                </a>
            </div>

        </div>
    </section>
    
    <section class="padding bck light">
        <div class="row">
            <div class="column_6 text center">
                <a href="examples/profile.html" target="_blank" class="tip-right" data-tip="Click to view">
                    <img src="http://dev.wikibyte.org/FAMOS/img/left.png" class="responsive"/>
                </a>
            </div>
			 <div class="column_6">
                <h2 style="font-size:50px; font-weight: 300;line-height: 1;letter-spacing: -1px;"><span class="color midle">Hallo und herzlich willkommen </span>. Auf dieser Seite</h2>
                <br>
                <p style="font-size:22px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare. </p>
            	<br>
            	<a href="#" class="button large theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
        </div>
    </section>
    
    <section class="padding bck">
        <div class="row">
            <div class="column_6">
                <h2 style="font-size:50px; font-weight: 300;line-height: 1;letter-spacing: -1px;"><span class="color midle">Hallo und herzlich willkommen </span>. Auf dieser Seite</h2>
                <br>
                <p style="font-size:22px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel laoreet felis. Cras non enim in ligula porttitor faucibus. Proin lacus nisl, adipiscing in magna eu, venenatis euismod enim. Cras blandit in sem ac ornare. </p>

            	<br>
            	<a href="#" class="button large theme"><span class="icon right-sign"></span> Mehr erfahren </a>
            </div>
            <div class="column_6 text center">
                <a href="examples/profile.html" target="_blank" class="tip-left" data-tip="Click to view">
                    <img src="http://dev.wikibyte.org/FAMOS/img/right.png" class="responsive"/>
                </a>
            </div>

        </div>
    </section>
<!--Homesite-->


<?php 
/*
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>
<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; 
*/
?>




<?php get_footer(); ?>