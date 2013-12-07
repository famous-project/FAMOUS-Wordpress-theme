<style>
/* Tab */
div#tabbg,
div#project {
	background: #fff;
	margin-left: -10px;
	margin-right: -11px;
	margin-top: -5px;
	margin-bottom: -7px;
	padding:10px;
}

/* Bereiche (Standard) */
div.wpa_group {
	padding: 10px;
	background: #eef;
	margin-bottom:10px;
}
/* Buttons */
a#button-create {
	text-shadow: none;
	background: #078CD6;
	border: 1px solid #065A7A;
	color: #fff;
	border-radius: 0px;
}
a#button-delete {
	text-shadow: none;
	background: #eee;
	border:1px solid #B10000;
	color: #B10000;
	border-radius: 0px;
	float:right;
}
</style>
<div id="tabbg" class="my_meta_control">
	<div id="project">
	
	
	<label>Bild URL</label>
	<?php $mb->the_field('project_img'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	
	<label>Projekt URL</label>
	<?php $mb->the_field('project_url'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		
	<label>Beschreibung</label>
	<?php $mb->the_field('project_description'); ?>
	<textarea type="text" name="<?php $mb->the_name(); ?>" ><?php $mb->the_value(); ?></textarea>
	
	<!--button erstellen-->
	<p><center><a id="button-create" href="#" class="docopy-project_data button" title="Erstellen">+Social Network Erstellen</a></center></p>

	<?php while($mb->have_fields_and_multi('project_data')): ?>	
	<?php 
	$mb->the_group_open(); 
	$selected = ' selected="selected"';
	?>

		<a href="#" id="button-delete" class="dodelete button" title="löschen">X</a>
		
 			<?php $mb->the_field('project_data_social'); ?>
    		<select name="<?php $mb->the_name(); ?>">
    			<option value=""></option>   			
    			<option value="adn"<?php if ($mb->get_the_value() == 'adn') echo $selected; ?>>ADN</option>
    			<option value="twitter"<?php if ($mb->get_the_value() == 'twitter') echo $selected; ?>>Twitter</option>
    			<option value="google-plus"<?php if ($mb->get_the_value() == 'google-plus') echo $selected; ?>>Google+</option>
    			<option value="facebook" <?php if ($mb->get_the_value() == 'facebook') { echo $selected; } ?>>Facebook</option>
    		</select>
    		
    		<?php $mb->the_field('project_data_url'); ?>
			<input type="text" name="<?php $mb->the_name(); ?>" placeholder="http://network.com/Username" value="<?php $mb->the_value(); ?>"/>
	

	<?php $mb->the_group_close(); ?>
	
	<?php endwhile; ?>
	</div>

    
    <?  ################################# SAVE ######################################  ?>  
    <input type="submit" class="button-primary" name="save" value="Speichern">
</div>