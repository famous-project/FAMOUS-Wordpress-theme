<?php 
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage famous-project
 * @since FAMOUS 1.0
 *
 */
 
// Gets all the scripts included by wordpress, wordpress plugins or functions.php 
// using wp_enqueue_script if it has $in_footer set to true
?>
</div> <!-- // .container -->

<hr />

<!--footer mit Banner 6x-->
	<section class="margin-bottom">
        <div class="row padding-top padding-bottom">
			<?php 
				query_posts('post_type=projects&posts_per_page=20&orderby=rand&showposts=6'); 
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 

					echo '<div class="column_2 responsive">'; 
						// check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) { 
  							echo '<a href="'; the_permalink(); echo '" title="FAMOUS Podcast Project: '.get_the_title().'" class="tip-right" data-tip="'.get_the_title().'">';  
  								the_post_thumbnail('large', array('class' => 'img responsive'));
  							echo '</a>';
						}
					echo '</div>';
            
				endwhile; 
				endif; 
			?>
		</div>
    </section>
<!--//footer-->

    <footer class="bck dark padding">
        <div class="row margin-top margin-bottom">
            
            <div class="column_2 center">
                <center><h1 class="podcast podcast-famous" style="font-size: 80px; color: #2EACDD;"></h1></center>
            </div>
             <div class="column_2">
                <p class="text bold big">FAMOUS</p>
                <a href="#" target="_blank" class="text color theme"><span class="podcast podcast-joda"></span> JODA</a><br>
                <a href="#" target="_blank" class="text color theme"><span class="podcast podcast-osmos"></span> OSMOS</a><br>
                <a href="#" target="_blank" class="text color theme">EMIS</a>
            </div>
            <div class="column_3">
                <p class="text bold big">Unterstützen</p>
                Du kannst uns über <a href="#" target="_blank" class="text color theme">flattr</a> unterstützen.
            </div>          
            <div class="column_2">
                <p class="text bold big">Kontakts</p>
                <a href="mailto:hello@famous-project.org?subject=FAMOUS: --HIER DEIN BETREFF!!!--" class="text color theme"><span class="icon big envelope"></span> Email</a><br>
            	<a href="#" target="_blank" class="text color theme"><span class="icon big twitter"></span> Twitter</a><br>
            	<a href="#" target="_blank" class="text color theme"><span class="icon big google-plus"></span> App.Net</a>
            </div>
            <div class="column_3">
                <p class="text bold big"><span class="text normal">FAMOUS</span> Project</p>
                Copyright &copy; 2013 - <?php echo date('Y'); ?>
                <br>
                <br>
                <a href="#" target="_blank" class="text color theme">Impressum</a> | <a href="#" target="_blank" class="text color theme">Disclaimer</a>
            </div>
        </div>
    </footer>


    <?php /* if ( is_active_sidebar( 'footer-1' ) ) : ?>
		
			<?php dynamic_sidebar( 'footer-1' ); ?>
		
	<?php endif; */ ?>



 <!-- ========================== MODALS ========================== -->
	
  	<?php
  	
  	/*AJAX Framework*/
  	#<!--login-->   
  	include("ajax/login.php");
  	?>
	
	
	<!--kontakt-->
	<div id="big_modal" data-famous="modal" class="column_8">
        <header class="bck alert">
            <h4 class="inline text book"><span class="icon comments-alt"></span> Kontakt</h4>
            <button data-modal="close" class="transparent small on-right inline icon remove"></button>
        </header>
        <article class="form">
        <p class="text bold">Hast Du Fragen oder Anregungen?</p>
        <p class="margin-bottom"> Dann nimm mit uns Kontakt auf!</p>
            <fieldset>
                <label>Name</label>
                <input type="text" name="default" id="default">
            </fieldset>
             <fieldset>
                <label>Email</label>
                <input type="text" name="default" id="default">
            </fieldset>
            <fieldset>
                <label>Website</label>
                <input type="text" name="default" id="default">
            </fieldset>
            <fieldset>
                <label>Feedback</label>
                <textarea name="user_eingabe" cols="50" rows="10"></textarea>
            </fieldset>
		</article>
        <footer>
            <button data-modal="close" class="alert">Senden</button>
        </footer>
    </div>
	<!--/kontakt-->
    

<?php wp_footer(); ?>
<script>
        (function() {
          famous.dom("button").on("click", function() {
            that = this;
            famous.Button.loading(that, true);
            setTimeout(function() {
                famous.Button.loading(that, false);
            }, 2000);
          });
        });
</script>


<script>
/**
*	Callback Login
jQuery(function($) - for wp session
*/
$(function() {

$("#start").mouseover(function() {

  // Löschen bereits vorhandener JSONP Skripte
  var scripts = document.getElementsByTagName("script");
  for (i=0; i<scripts.length; i++) {
    var url = scripts[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("callback")>=0) {
      scripts[i].parentNode.removeChild(scripts[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var now = new Date();
  url = "<?php bloginfo('template_directory'); ?>/ajax/ajax-anmelden.php?&time="+now.getTime()+"&callback=callback";
  
  var script = document.createElement("script");
  	script.setAttribute("src", url);
  	script.setAttribute("type", "text/javascript");
  	document.getElementsByTagName("head")[0].appendChild(script);
	
	
	});
});
function callback(data) { 
  document.getElementById("jsonp_antwort").innerHTML = data;
}
</script>    

</body>
</html>
