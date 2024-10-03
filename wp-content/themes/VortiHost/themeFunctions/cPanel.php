<?php
/********************************************************
Create a unique array that contains all theme settings
********************************************************/
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');
error_reporting(E_ALL & ~E_NOTICE);
global $wpdb;
class ControlPanel{
	var $default_settings = Array();
	var $options;
	
	//function ControlPanel() {
	 function __construct(){
		add_action('admin_menu', array(&$this, 'add_menu'));
		add_action('admin_head', array(&$this, 'admin_head'));
		if (!is_array(get_option('CommonThemeSettings')))
		add_option('CommonThemeSettings', $this->default_settings);
		$this->options = get_option('CommonThemeSettings');
	}
	function add_menu() {
		add_menu_page('Theme Settings', 'Theme Settings', 'edit_themes', "CommonThemeSettings", array(&$this, 'optionsmenu'),'',100);
	}
	function admin_head() {
		//print'<style type="text/css" media="screen">@import url( ' .get_template_directory_uri(). '/CommonControl/controlpanel.css );</style>';
	}
	function optionsmenu() {
	    if(isset($_POST['cp_save'])){
		if ($_POST['cp_save'] == 'Save Changes') {	//echo '<pre>'; print_r($_POST); echo '</pre>';		
			if($_FILES['theme_logo']['name']!="")	{
					$ext			=	array_pop(explode(".",$_FILES['theme_logo'.$i]['name']));
					$file 			= 	"/media/".$_FILES['theme_logo']['name'];
					$file_path		=	dirname(__FILE__).$file;
					$file_url		=   get_bloginfo( 'stylesheet_directory' ).'/themeFunctions'.$file;
					
					move_uploaded_file($_FILES['theme_logo']['tmp_name'],$file_path) or die("Could not upload ! File ".$file_path) ;
					chmod($file_path,0777) or die("Could not change permission".$file_path);
					$this->options["theme_logo"] = $file_url;
			}}
			else{
				$this->options["theme_logo"]  		=  stripslashes($_POST['old_theme_logo']);
			}if($_FILES['footer_logo']['name']!="")	{
					$ext			=	array_pop(explode(".",$_FILES['footer_logo'.$i]['name']));
					$file 			= 	"/media/".$_FILES['footer_logo']['name'];
					$file_path		=	dirname(__FILE__).$file;
					$file_url		=   get_bloginfo( 'stylesheet_directory' ).'/themeFunctions'.$file;
					
					move_uploaded_file($_FILES['footer_logo']['tmp_name'],$file_path) or die("Could not upload ! File ".$file_path) ;
					chmod($file_path,0777) or die("Could not change permission".$file_path);
					$this->options["footer_logo"] = $file_url;
			}else{
				$this->options["footer_logo"]  		=  stripslashes($_POST['old_footer_logo']);
			}
			

			
			$this->options["main_menu"]  		=  stripslashes($_POST['main_menu']);
		
				
			    $this->options["foot_menu1_caption"]  		=  $_POST['foot_menu1_caption'];
				$this->options["foot_menu2_caption"]  		=  $_POST['foot_menu2_caption'];
				$this->options["foot_menu3_caption"]  		=  $_POST['foot_menu3_caption'];
				$this->options["foot_menu4_caption"]  		=  $_POST['foot_menu4_caption'];
			$this->options["foot_menu1"]  		=  $_POST['foot_menu1'];
			$this->options["foot_menu2"]  		=  $_POST['foot_menu2'];
           $this->options["foot_menu3"]  		=  $_POST['foot_menu3'];
			    $this->options["foot_menu4"]  		=  $_POST['foot_menu4'];
			
			$this->options["footer_content"]			=  stripslashes($_POST['footer_content']);
			$this->options["creananaccount"]			=  stripslashes($_POST['creananaccount']);
			$this->options["privacy_link"]			=  stripslashes($_POST['privacy_link']);
			

			
			$this->options["foot_copy"]			=  stripslashes($_POST['foot_copy']);
			$this->options['enable_foot_copy']	=	isset($_POST['enable_foot_copy']) ? 1 : 0;
			
			$this->options["foot_netr_intr"]			=  stripslashes(isset($_POST['foot_netr_intr']));
			$this->options['enable_foot_netr_intr']	=	isset($_POST['enable_foot_netr_intr']) ? 1 : 0;
			
			$this->options['enable_fb']		=	isset($_POST['enable_fb']) ? 1 : 0;
			$this->options['enable_tw']		=	isset($_POST['enable_tw']) ? 1 : 0;
			$this->options['enable_lkn']	=	isset($_POST['enable_lkn']) ? 1 : 0;	
			$this->options['enable_gpls']	=	isset($_POST['enable_gpls']) ? 1 : 0;	
	    	$this->options['enable_inst']	=	isset($_POST['enable_inst']) ? 1 : 0;	
        	$this->options['enable_ytb']	=	isset($_POST['enable_ytb']) ? 1 : 0;

			$this->options["theme_fb"]  		=  stripslashes($_POST['theme_fb']);
			$this->options["theme_tw"]  	=  stripslashes($_POST['theme_tw']);
			$this->options["theme_ln"]  		=  stripslashes($_POST['theme_ln']);
			$this->options["theme_instagram"]	=  stripslashes($_POST['theme_instagram']);
			$this->options["theme_ytb"]	=  stripslashes($_POST['theme_ytb']);
			
	
			

			$this->options["zblog_news"]  		=  stripslashes($_POST['zblog_news']);
			$this->options["zblognewsleter"]  	=  stripslashes($_POST['zblognewsleter']);
			$this->options["zblog_bc"]  		=  stripslashes($_POST['zblog_bc']);
			$this->options["zsocial_media"]  		=  stripslashes($_POST['zsocial_media']);
			$this->options["zblog_bc"]  		=  stripslashes($_POST['zblog_bc']);
			
			//$this->options["ztop_menu"]  		=  stripslashes($_POST['ztop_menu']);
          	$this->options["zfooter_section"]  		=  stripslashes($_POST['zfooter_section']);
			
			update_option('CommonThemeSettings', $this->options);
			echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 500px; margin-left: 50px"><p class="pblc">Common theme settings <strong>saved</strong>.</p></div>';
		}
		?>
		<?php
		$menus = get_terms('nav_menu');// get list of menus 
		?>
		<?php admin_CustomHeader(); ?>
		<form action="" method="post" id="themeform" enctype="multipart/form-data">
			<div class="optionsForm">
				<div class="optionsContents">
					<div class="logotitleText">
						<label>-Developed by :  www.<a href="http://www.mindbees.com" target="_blank" style="color:#000000" >Mindbees</a>.com</label>
					</div>
					<div class="titleText">Header Settings</div> 
					<table cellspacing="5" cellpadding="5">
						<tr>
							<td width="250">Header Logo</td>
							<td width="1000"><input type="hidden" name="old_theme_logo" value="<?php echo $this->options["theme_logo"]; ?>" /><input type="file" name="theme_logo" value="" /><img src="<?php echo $this->options["theme_logo"]; ?>" width="100" /></td>
						</tr>
                      <tr>
							<td>Select Header Menu</td>
							<td colspan="2">
							<?php
							$main_menu = $this->options["main_menu"];
							echo '<select name="main_menu" id="main_menu">';
							echo '<option value="">--Select menu--</option>';
							  foreach ($menus as $menu) {//echo '<pre>'; print_r($menu); echo '</pre>';
								if($main_menu==$menu->term_id){
									$option = '<option value="'.$menu->term_id.'" selected="selected">';
								}else{
									$option = '<option value="'.$menu->term_id.'">';
								}
								$option .= $menu->name;
								$option .= '</option>';
								echo $option;
							  }
							echo '</select>' ;
							?>
							</td>
						</tr>
					
						<tr>
							<td width="250">Create an account Link</td>
						<td width="800"><input type="text" name="creananaccount" value="<?php echo $this->options['creananaccount']; ?>" /></td>
						</tr>
					
					</table>
					<div class="cp_separator"></div>
                         	<div class="titleText">Footer Settings</div> 
					<table cellspacing="5" cellpadding="5" >
					    
				
			         
						<tr>
							<td>Select Footer Menu 1</td>
							<td colspan="2">
							<?php
							$foot_menu1 = $this->options["foot_menu1"];
							echo '<select name="foot_menu1" id="foot_menu1">';
							echo '<option value="">--Select menu--</option>';
							  foreach ($menus as $menu) {//echo '<pre>'; print_r($menu); echo '</pre>';
								if($foot_menu1==$menu->term_id){
									$option = '<option value="'.$menu->term_id.'" selected="selected">';
								}else{
									$option = '<option value="'.$menu->term_id.'">';
								}
								$option .= $menu->name;
								$option .= '</option>';
								echo $option;
							  }
							echo '</select>' ;
							?>
							</td>
						</tr>
						
				
						  <tr>
							<td>Footer Content</td>
							<td>	<textarea name="footer_content" cols="120" rows="4"><?php echo $this->options["footer_content"]; ?></textarea></td>
						</tr>
					 
								
							<tr>
							<td width="250"> Footer Copyright Information block</td>
							<td width="800">
							<textarea name="foot_copy" cols="70" rows="2"><?php echo $this->options["foot_copy"]; ?></textarea>
							</td>
					     	</tr>

						<?php /*<tr>
							<td> Terms of Service Link</td>
							<td><input type="text" name="terms_link" value="<?php echo $this->options["terms_link"]; ?>" /></td>
						</tr>
					    <tr>
							<td>Privacy Policy Link</td>
							<td><input type="text" name="privacy_link" value="<?php echo $this->options["privacy_link"]; ?>" /></td>
						</tr>		

					     	<tr>
							<td width="250">Join Us Button Link</td>
						<td width="800"><input type="text" name="joinus_button_link" value="<?php echo $this->options['joinus_button_link']; ?>" /></td>
						</tr>
							
					     	</tr>*/?>
					      
					</table>
					<div class="cp_separator"></div>
					
					<div class="titleText">Social media Settings</div> 
					<table cellspacing="5" cellpadding="5" >
						<tr>
							<td width="250">Facebook</td>
							<td width="800"><input type="text" name="theme_fb" value="<?php echo $this->options['theme_fb']; ?>" /></td>
						<td>Enable? <input type="checkbox" name="enable_fb" <?php echo $this->options['enable_fb'] == 1 ? ' checked' : '' ;?> /></td>	
						</tr>
						<tr>
							<td>Twitter</td>
							<td><input type="text" name="theme_tw" value="<?php echo $this->options['theme_tw']; ?>" /></td>
							<td>Enable? <input type="checkbox" name="enable_tw" <?php echo $this->options['enable_tw'] == 1 ? ' checked' : '' ;?> /></td>
						</tr>
						<tr>
							<td>Instagram</td>
							<td><input type="text" name="theme_instagram" value="<?php echo $this->options['theme_instagram']; ?>" /></td>
							<td>Enable? <input type="checkbox" name="enable_inst" <?php echo $this->options['enable_inst'] == 1 ? ' checked' : '' ;?> /></td>
						</tr>
							<tr>
							<td>Youtube</td>
							<td><input type="text" name="theme_ytb" value="<?php echo $this->options['theme_ytb']; ?>" /></td>
							<td>Enable? <input type="checkbox" name="enable_ytb" <?php echo $this->options['enable_ytb'] == 1 ? ' checked' : '' ;?> /></td>
						</tr>
						<tr>
							<td>LinkedIn</td>
							<td><input type="text" name="theme_ln" value="<?php echo $this->options['theme_ln']; ?>" /></td>
							<td>Enable? <input type="checkbox" name="enable_lkn" <?php echo $this->options['enable_lkn'] == 1 ? ' checked' : '' ;?> /></td>
						</tr>
						
					</table>
					<table>
						<tr>
							<td align="center"><input type="submit" value="Save Changes"   id="buttonID"  name="cp_save" class="cButton" /></td>
						</tr>
					</table>
					<div class="cp_separator"></div>
				
				</div>
		</div>
		</form>	
		<?php admin_CustomFooter(); ?>	
		<?php
    	} 
}
$cpanel = new ControlPanel();
$theme_options = get_option('CommonThemeSettings');