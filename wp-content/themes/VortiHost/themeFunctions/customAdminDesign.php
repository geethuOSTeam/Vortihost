<?php
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');
global $wpdb;

///class customAdminDesign(){
	function admin_CustomHeader(){ 
		print '<style type="text/css" media="screen">@import url( ' .get_template_directory_uri(). '/themeFunctions/adminStyle.css );</style>';
	?>
		<div class="adminbody">
			<div class="adminhead">
				<div class="adminleft">
				Theme Settings
				</div>
				<div class="adminright"><img height="50" src="<?php bloginfo('template_url'); ?>/img/logo.png" /></div>
			</div>
			<div class="admininner">
	<?php }
	function admin_CustomFooter(){ ?>
			</div>
		</div>
	<?php }
//}
//$customAdminDesignObj = new customAdminDesign;
?>