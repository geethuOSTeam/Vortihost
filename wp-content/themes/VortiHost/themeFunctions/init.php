<?php 
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');
global $wpdb;

//Common frontend functions
require_once('commonFunctions.php');

//Common admin header and footer design
require_once('customAdminDesign.php');

//Cpanel settings/theme settings
require_once('cPanel.php');

//User manual
//require_once('userManual.php'); 

require_once('dev-info.php');
//Developer Informations


require_once('shortcode.php');