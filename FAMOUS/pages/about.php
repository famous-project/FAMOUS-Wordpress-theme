<?php 
/*
 * Template Name: About Template
 *
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
      </style>
      
      
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


    <!-- ========================== FEATURES ========================== -->
    <section class="padding bck light features">
        <div class="row text center book">
            <div class="column_10 offset_1">
                <h1 class="color withe big margin-bottom"><strong>Über</strong> FAMOUS</h1>
                <div class="row">
                	<div class="column_3">
                		<img src="https://raw.github.com/famous-project/FAMOUS-pictures/master/1.png" class="responsive rounded margin-bottom"/>
                	</div>
                </div>
                <h3>
                    <strong>Not trying</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </h3>
            </div>
        </div>
    </section>

 
 
    <!-- ========================== EXAMPLES ========================== -->
    <section class="padding text center">
        <div class="row text center normal margin-top">
            <div class="column_3">
                <h1 class="icon dashboard color default"></h1>
                <h4 class="text color success">Wordpress Powered</h4>
                <p class="text normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="column_3">
                <h1 class="icon leaf text color default"></h1>
                <h4 class="text color success">Lightweight & fast</h4>
                <p class="text normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="column_3">
                <h1 class="icon cogs text color default"></h1>
                <h4  class="text color success">Object Oriented</h4>
                <p class="text normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="column_3">
                <h1 class="icon github text color default"></h1>
                <h4  class="text color success">Community Project</h4>
                <p class="text normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <!-- ========================== EMAIL ========================== -->
      <section class="bck dark landing text center" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/famous-framework/img/land1.png) center center no-repeat #0C354D">
        <div class="row">
            <div class="column_10 offset_1">
                <h1><strong>FA</strong>MOUS</h1>
                <h2 class="color white margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
            </div>
        </div>
        <div class="row">
            <div class="column_6 offset_3 form subscribe">
                <input style="padding: 12px;" type="email" id="mail" class="large" placeholder="Your email address"> <button class="button large alert icon envelope"></button>
            </div>
        </div>
        <h5 class="text book">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
    </section>


   

   


    <!-- ========================== FORMS & TABLES ========================== -->
    <section class="padding">
         <div class="row">
            
            <div class="column_12">
                <h1 class="color dark text book center">Nächste Termine</h1>
                <h3 class="text book center">...</h3>
                <table class="margin-top">
                    <thead>
                        <tr>
                            <th>Conf. Nr.</th>
                            <th>Ort</th>
                            <th>Infos</th>
                            <th>Uhrzeit</th>
                            <th ><span class="right">Datum</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="highlight">005</td>
                            <td class="highlight">Mumble Shownotes</td>
                            <td class="highlight">Umsetzungen und Nachbesprechungen</td>
                            <td class="highlight">19.00 Uhr</td>
                            <td class="highlight"><span class="right">11.12.2014</span></td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>Mumble Shownotes</td>
                            <td>Webpage und Strukturen</td>
                            <td>19.00 Uhr</td>
                            <td><span class="right">00.00.2013</span></td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Mumble Shownotes</td>
                            <td>Funktionsweisen</td>
                            <td>19.00 Uhr</td>
                            <td><span class="right">00.00.2013</span></td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Mumble Shownotes</td>
                            <td>Ideen und Konzepte</td>
                            <td>19.00 Uhr</td>
                            <td><span class="right">00.00.2013</span></td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Mumble Shownotes</td>
                            <td>Welcome</td>
                            <td>19.00 Uhr</td>
                            <td><span class="right">00.00.2013</span></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </section>

<?php get_footer(); ?>