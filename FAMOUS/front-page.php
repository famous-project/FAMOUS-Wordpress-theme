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




             <?php if ( is_active_sidebar( 'font-page' ) ) : ?>		
					<?php dynamic_sidebar( 'font-page' ); ?>		
			<?php endif; ?>


<?php get_footer(); ?>