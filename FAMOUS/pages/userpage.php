<?php

/*
 * Template Name: Benutzerseite 1.Login
 */

get_header(); ?>

    <!-- Main Content -->
    <div class="large-12 columns" role="content">

	<?php global $user_ID, $user_identity; get_currentuserinfo(); if (!$user_ID) { ?>

	<ul class="tabs_login">
		<li class="active_login"><a href="#tab1_login">Anmelden</a></li>
		<li><a href="<?php echo home_url();  ?>/userpage/registrieren/">Registrieren</a></li>
		<li><a href="#tab3_login">Passwort vergessen?</a></li>
	</ul>
	
			<?php $register = $_GET['register']; $reset = $_GET['reset']; if ($register == true) { ?>
<div style="color: #0A0;
background: #EFE;
border: 1px solid #29A038;
padding: 10px;
margin-bottom: 20px;">
			<h3>Success!</h3>
			<p>Check your email for the password and then return to log in.</p>
</div>
			<?php } elseif ($reset == true) { ?>
<div style="color: #0A0;
background: #EFE;
border: 1px solid #29A038;
padding: 10px;
margin-bottom: 20px;">

			<h3>Perfeckt!</h3>
			<p>Siehe in deiner eMail nach dem Einwegpasswort.</p>
</div>
			<?php } else { ?>

		<header id="tab1_login">
		 	<h1 style="border-bottom:1px solid #eee;">Anmelden</h1>
		</header>
		<article class="page type-page status-publish hentry">

			<?php } ?>

			<form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form">
				<div class="username">
					<label for="user_login"><?php _e('Username'); ?>: </label>
					<input type="text" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="11" />
				</div>
				<div class="password">
					<label for="user_pass"><?php _e('Password'); ?>: </label>
					<input type="password" name="pwd" value="" size="20" id="user_pass" tabindex="12" />
				</div>
				<div class="login_fields">
					<div class="rememberme">
						<label for="rememberme">
							<input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13" /> Angemeldet bleiben
						</label>
					</div>
					<?php do_action('login_form'); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
/**
*	Callback Login
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
  url = "<?php bloginfo('template_directory'); ?>/templates/ajax-anmelden.php?&time="+now.getTime()+"&callback=callback";
  
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
					<?php
					/*
					<input type="submit" name="user-submit" value="Jetzt Anmelden" tabindex="14" class="button user-submit" />
					*/
					?>
					<span id="jsonp_antwort">
					<span id="start" class="submit button">OK?</span>
					</span>

					<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
					<input type="hidden" name="user-cookie" value="1" />
				</div>
			</form>
		</article>
		
		
		<header id="tab3_login">
		 	<h1 style="border-bottom:1px solid #eee;">Passwort vergessen?</h1>
		</header>
		<article class="page type-page status-publish hentry">
		
			<p>Enter your username or email to reset your password.</p>
			<form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
				<div class="username">
					<label for="user_login" class="hide"><?php _e('Username or Email'); ?>: </label>
					<input type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" />
				</div>
				<div class="login_fields">
					<?php do_action('login_form', 'resetpass'); ?>
					
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
/**
*	Callback Login
*/
$(function() {

$("#pwremove").mouseover(function() {

  // Löschen bereits vorhandener JSONP Skripte
  var scripts = document.getElementsByTagName("script");
  for (i=0; i<scripts.length; i++) {
    var url = scripts[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("remove")>=0) {
      scripts[i].parentNode.removeChild(scripts[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var now = new Date();
  url = "<?php bloginfo('template_directory'); ?>/templates/ajax-pwremove.php?&time="+now.getTime()+"&remove=remove";
  
  var script = document.createElement("script");
  	script.setAttribute("src", url);
  	script.setAttribute("type", "text/javascript");
  	document.getElementsByTagName("head")[0].appendChild(script);
	
	
	});
});
function remove(data) { 
  document.getElementById("jsonp_pwremove").innerHTML = data;
}
</script>
					<?php
					/*
					<input type="submit" name="user-submit" value="Passwort Zurücksetzen" class="button user-submit" tabindex="1002" />
					*/
					?>
					<span id="jsonp_pwremove">
					<span id="pwremove" class="submit button">OK?</span>
					</span>
								
					<?php $reset = $_GET['reset']; if($reset == true) { echo '<p>Wir senden Dir ein Einwegpasswort per eMail zu.</p>'; } ?>
					<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?reset=true" />
					<input type="hidden" name="user-cookie" value="1" />
				</div>
			</form>
		</article>
	</div>

	<?php } else { // is logged in ?>

	<div class="sidebox">
		<h2>
		
			<?php global $userdata; get_currentuserinfo(); 
			echo '<div style="float:right;">'. get_avatar($userdata->ID, 60). '</div>'; ?> 
			
			Hallo <?php echo $user_identity; ?> 
			
   		</h2>
   		<h3 style="color:#aaa;">Willkommen auf deiner Übersichtsseite in Podbe!</h3>
		<div class="userinfo">
			
			<?php
			/*
			<div class="usericon">
			<?php global $userdata; get_currentuserinfo(); #echo get_avatar($userdata->ID, 60); ?>
			</div>
			<p>You&rsquo;re logged in as <strong><?php echo $user_identity; ?></strong></p>
			<p>
				<a href="<?php echo wp_logout_url('index.php'); ?>">Log out</a> | 
				<?php if (current_user_can('manage_options')) { 
					echo '<a href="' . admin_url() . '">' . __('Admin') . '</a>'; } else { 
					echo '<a href="' . admin_url() . 'profile.php">' . __('Profile') . '</a>'; } ?>

			</p>*/
			?>
			<hr />
			<center>
			<a style="font-weight: bold;" href="<?php echo home_url() .'/wp-admin'; ?>/post-new.php">Deinen Podcast jetzt eintragen</a> | 
			<a href="<?php echo wp_logout_url('index.php'); ?>">Abmelden</a>
			
			</center>
			<hr />

			<?php


				echo do_shortcode('[podbeuserpage]');

			?>
		</div>
	</div>

	<?php } ?>

</div>




<!-- Custom Login/Register/Password Code @ http://digwp.com/2010/12/login-register-password-code/ -->
<?php get_footer(); ?>