<?php
if (isset($_GET["callback"]) && !empty($_GET["callback"])) {
  $callback = $_GET["callback"];

	//Header für ein JavaScript
  	header("Content-Type: application/javascript");
	
  	echo $callback. "('";
	
				echo '<label for="user_login">Benutzername: </label><input type="text" name="log" class="large" value="" size="20" id="user_login" tabindex="11" placeholder="Username"><label for="user_pass">Passwort: </label><input type="password" name="pwd" class="large" value="" size="20" id="user_pass" tabindex="12" placeholder="1234"><label for="rememberme"><input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13"> Angemeldet bleiben</label><br><br><input type="submit" name="user-submit" value="Jetzt Anmelden" tabindex="14" class="button user-submit">';
	
	echo "')";
}
?>