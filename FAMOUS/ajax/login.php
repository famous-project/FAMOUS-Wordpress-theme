<div id="default_modal" data-famous="modal" class="column_5">
<?php 
global $user_ID, $user_identity; 


get_currentuserinfo(); 

if (!$user_ID) { 
?>
<!--login--> 	
	<header>
        <h4 class="inline text book"><span class="icon user"></span> Willkommen</h4>
        <button data-modal="close" class="transparent small on-right inline icon remove"></button>
    </header>
     <article class="form">
			<form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form">
			<div id="jsonp_antwort">
				<div id="start">
					<label for="user_login"><?php _e('Username'); ?>: </label>
					<div class="large inputer login">Username</div>
					
					<label for="user_pass"><?php _e('Password'); ?>: </label>
					<div class="large inputer login">
						<div class="icon circle"></div>
						<div class="icon circle"></div>
						<div class="icon circle"></div>
						<div class="icon circle"></div>
					</div>
					
					<br>
					<br>
					<?php do_action('login_form'); ?>
					<div class="button" data-modal="close">Jetzt Anmelden</div>
					<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
					<input type="hidden" name="user-cookie" value="1" />
				</div>
			</div>
			</form>
		</article>     
<!--/login--> 
<?php } else { ?>
<!--logout--> 
	<header class="bck success">
        <h4 class="inline text book"><span class="icon user"></span> Bye Bye</h4>
        <button data-modal="close" class="transparent small on-right inline icon remove"></button>
    </header>
     <article class="form">
		<form class="wp-user-form">
			<h3 class="text bold">Jetzt Abmelden?</h3><hr />
			<p class="text normal">Du kannst dich hier aus FAMOUS ausloggen.</p>
				<br>
				<br>
			<a href="http://cm.wikibyte.org/famous/wp-login.php?action=logout&_wpnonce=7b0a95ddaf" class="button success"><span class="icon signout"></span> Abmelden</a>
		</form>
	</article>
<!--/logout--> 
<?php } ?>    
</div> 