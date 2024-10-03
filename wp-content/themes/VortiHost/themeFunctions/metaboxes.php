<?php
/********************************************************
Create metabox options 
********************************************************/
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');
global $wpdb;
add_action('admin_enqueue_scripts', 'my_admin_script');
function my_admin_script()
{
    wp_enqueue_script('page-templates', get_bloginfo('template_url').'/themeFunctions/page-templates.js', array('jquery'));
	wp_enqueue_style('meta-styles', get_bloginfo('template_url').'/themeFunctions/metabox-style.css', array());
}
add_action( 'add_meta_boxes', 'meta_box_contents' );
function meta_box_contents() {
		//Common to many pages
		add_meta_box( 'banner', 'Set banner content', 'banner', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'netrouting_guarantee', 'Set content for "Netrouting Guarantee" Block', 'netrouting_guarantee', 'page', 'advanced','core', '' ); 	
		
		//Homepage
		add_meta_box( 'partners_slider', 'Set Partner Slider content', 'partners_slider', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'text_4col_features', 'Set Content for text block with 4 column Features', 'text_4col_features', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'text_plus_video', 'Set Content for text block wth Video', 'text_plus_video', 'page', 'advanced','core', '' );
		add_meta_box( 'two_col_features', 'Set Content for 2 column features block', 'two_col_features', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'plan_choice_block', 'Set Content for "Plan Choice" block', 'plan_choice_block', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'home_datacenter_loc', 'Set Content for "Datacenter - Locations" block', 'home_datacenter_loc', 'page', 'advanced','core', '' ); 	
		
		//Twin Datacenters
		add_meta_box( 'multiple_datacenters', 'Multiple datacenters Block', 'multiple_datacenters', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'twin_datcntr_advntages', 'Set content for "Twin Datacenter advantages" Block', 'twin_datcntr_advntages', 'page', 'advanced','core', '' ); 	
		
		//Location List
		add_meta_box( 'location_table', 'Location Table', 'location_table', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'our_network_services', 'Our Network Services Block', 'our_network_services', 'page', 'advanced','core', '' ); 
		
		//Ecommerce
		add_meta_box( 'net_plan_features', 'Netrouting Plans Features', 'net_plan_features', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'ecommerce_system', 'Ecommerce System', 'ecommerce_system', 'page', 'advanced','core', '' ); 
		
		//Online Gaming
		add_meta_box( 'game_changers', 'Game Changers', 'game_changers', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'download_btn_blc', 'Download Button Block', 'download_btn_blc', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'three_features_blc', 'Features Block', 'three_features_blc', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'online_gaming_features', 'Netrouting Online Gaming Features', 'online_gaming_features', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'text_block', 'Text Block', 'text_block', 'page', 'advanced','core', '' ); 	
		
		//IT Companies
		add_meta_box( 'featured_customers', 'Our Featuerd Customers - Slider', 'featured_customers', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'netr_capabilities', 'Netrouting Capabilities', 'netr_capabilities', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'use_cases', 'Use Cases', 'use_cases', 'page', 'advanced','core', '' ); 	
		
		//Why Netrouting
		add_meta_box( 'two_by_three_features', '2 x 3 features block', 'two_by_three_features', 'page', 'advanced','core', '' ); 	
		
		//Disaster Recovery
		add_meta_box( 'disaster_recovery', 'Disaster Recovery block', 'disaster_recovery', 'page', 'advanced','core', '' ); 	
		add_meta_box( 'benefits_disaster_recovery', 'Benefits of Netrouting Disaster Recovery', 'benefits_disaster_recovery', 'page', 'advanced','core', '' ); 	
		
		//Netrouting Guarantee
		add_meta_box( 'service_level', 'Our Service Level', 'service_level', 'page', 'advanced','core', '' ); 
		
		//Web Hosting Providers
		add_meta_box( 'three_col_feature', 'Three Column Features Block', 'three_col_feature', 'page', 'advanced','core', '' ); 
		add_meta_box( 'two_col_text', 'Two Column Text Block', 'two_col_text', 'page', 'advanced','core', '' ); 
		add_meta_box( 'reseller_prgm_button', 'Reseller Program Button Block', 'reseller_prgm_button', 'page', 'advanced','core', '' ); 
		
		//Company
		add_meta_box( 'text_block_dark', 'Text Block - Dark Background', 'text_block_dark', 'page', 'advanced','core', '' ); 
		add_meta_box( 'get_to_know_us', 'Get to know us Block', 'get_to_know_us', 'page', 'advanced','core', '' ); 
		add_meta_box( 'why_choose_us', 'Why Choose Us Block', 'why_choose_us', 'page', 'advanced','core', '' );
		
		//MLPS
		add_meta_box( 'why_netrouting', 'Why Netrouting Block', 'why_netrouting', 'page', 'advanced','core', '' ); 
		add_meta_box( 'metro_ethernet', 'Metro Ethernet Line & Ring Block', 'metro_ethernet', 'page', 'advanced','core', '' ); 
		add_meta_box( 'product_table', 'Product Table', 'product_table', 'page', 'advanced','core', '' );
		add_meta_box( 'remote_ix_faq', 'Remote IX Faqs', 'remote_ix_faq', 'page', 'advanced','core', '' );//Common to MPLS & Remote IX
		
		//Remote IX
		add_meta_box( 'internet_exchange', 'Internet Exchange Block', 'internet_exchange', 'page', 'advanced','core', '' ); 
		add_meta_box( 'text_with_img', 'Text with Image Block', 'text_with_img', 'page', 'advanced','core', '' ); 
		add_meta_box( 'how_does_it_work', '"How Does It Work" Block', 'how_does_it_work', 'page', 'advanced','core', '' );
		add_meta_box( 'peering_exchange', 'Peering Exchange Block', 'peering_exchange', 'page', 'advanced','core', '' );
		
		//Bare Metal Managed Servers
		add_meta_box( 'signup_form', 'Signup Form', 'signup_form', 'page', 'advanced','core', '' ); //Common to many pages
		add_meta_box( 'image_text_blk1', 'Image Text Block 1', 'image_text_blk1', 'page', 'advanced','core', '' ); 
		add_meta_box( 'image_text_blk2', 'Image Text Block 2', 'image_text_blk2', 'page', 'advanced','core', '' );
		
		//Managed Services
		add_meta_box( 'text_blocks', 'Text Blocks', 'text_blocks', 'page', 'advanced','core', '' ); //Common to many pages
		add_meta_box( 'shipment_procedure', 'Shipment Procedure Block', 'shipment_procedure', 'page', 'advanced','core', '' ); 
		
		
		//add_meta_box( 'vps_hosting_selectionBox', 'Select VPS Hosting', 'vps_hosting_selectionBox', 'page', 'side','high', '' );
		//add_meta_box( 'footer_client', 'Footer Client logo section', 'footer_client', 'page', 'side','high', '' );
}
function vps_hosting_selectionBox($post){	
	global $post;
	$custom = get_post_custom($post->ID);
	$vps_hosting_type = $custom["vps_hosting_type"][0];
	?>
	<input type="radio" name="vps_hosting_type" value="Linux" <?php if( $vps_hosting_type == 'Linux' ) { ?>checked="checked"<?php } ?> />Linux VPS Hosting<br />
	<input type="radio" name="vps_hosting_type" value="Windows" <?php if( $vps_hosting_type == 'Windows' ) { ?>checked="checked"<?php } ?> />Windows VPS Hosting<br />	
<?php
}
function footer_client($post){
	global $post;
	$custom = get_post_custom($post->ID);
	$enable_footer_client = $custom["enable_footer_client"][0];
	?>
	<input type="checkbox" name="enable_footer_client" <?php if( $enable_footer_client == true ) { ?>checked="checked"<?php } ?> />Enable Client logo section in footer of this page<br />
<?php
}
/*********************************************************************************************************************************************/
function banner($post){
	wp_nonce_field( 'banner', 'banner_nonce' );
	echo '<label for="mg_banner">'._e( "Set Content for Banner").'</label> ';
	$value = get_post_meta( $post->ID, '_banner', true );
	get_default('banner'); 
	wp_editor($value, $id = 'mg_banner', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function partners_slider($post){
	wp_nonce_field( 'partners_slider', 'partners_slider_nonce' );
	echo '<label for="mg_partners_slider">'._e( "Set Content for Partner Slider").'</label> ';
	$value = get_post_meta( $post->ID, '_partners_slider', true );
	get_default('partners_slider');
	wp_editor($value, $id = 'mg_partners_slider', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function text_4col_features($post){
	wp_nonce_field( 'text_4col_features', 'text_4col_features_nonce' );
	echo '<label for="mg_text_4col_features">'._e( "Set Content for Text block with 4 column feature block").'</label> ';
	$value = get_post_meta( $post->ID, '_text_4col_features', true );
	get_default('text_4col_features');
	wp_editor($value, $id = 'mg_text_4col_features', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function text_plus_video($post){
	wp_nonce_field( 'text_plus_video', 'text_plus_video_nonce' );
	echo '<label for="mg_text_plus_video">'._e( "Set Content for Text block with Video").'</label> ';
	$value = get_post_meta( $post->ID, '_text_plus_video', true );
	get_default('text_plus_video');
	wp_editor($value, $id = 'mg_text_plus_video', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function two_col_features($post){
	wp_nonce_field( 'two_col_features', 'two_col_features_nonce' );
	echo '<label for="mg_two_col_features">'._e( "Set Content for 2 column features block").'</label> ';
	$value = get_post_meta( $post->ID, '_two_col_features', true );
	get_default('two_col_features');
	wp_editor($value, $id = 'mg_two_col_features', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function plan_choice_block($post){
	wp_nonce_field( 'plan_choice_block', 'plan_choice_block_nonce' );
	echo '<label for="mg_plan_choice_block">'._e( "Set Content for 'Make your Choice' block").'</label> ';
	$value = get_post_meta( $post->ID, '_plan_choice_block', true );
	get_default('plan_choice_block');
	wp_editor($value, $id = 'mg_plan_choice_block', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function home_datacenter_loc($post){
	wp_nonce_field( 'home_datacenter_loc', 'home_datacenter_loc_nonce' );
	echo '<label for="mg_home_datacenter_loc">'._e( "Set Content for 'Datacenter Locations' block").'</label> ';
	$value = get_post_meta( $post->ID, '_home_datacenter_loc', true );
	get_default('home_datacenter_loc');
	wp_editor($value, $id = 'mg_home_datacenter_loc', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function netrouting_guarantee($post){
	wp_nonce_field( 'netrouting_guarantee', 'netrouting_guarantee_nonce' );
	echo '<label for="mg_netrouting_guarantee">'._e( "Set content for 'Netrouting Guarantee' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_netrouting_guarantee', true );
	get_default('netrouting_guarantee');
	wp_editor($value, $id = 'mg_netrouting_guarantee', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function multiple_datacenters($post){
	wp_nonce_field( 'multiple_datacenters', 'multiple_datacenters_nonce' );
	echo '<label for="mg_multiple_datacenters">'._e( "Text with image in the Dark background").'</label> ';
	$value = get_post_meta( $post->ID, '_multiple_datacenters', true );
	get_default('multiple_datacenters');
	wp_editor($value, $id = 'mg_multiple_datacenters', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function twin_datcntr_advntages($post){
	wp_nonce_field( 'twin_datcntr_advntages', 'twin_datcntr_advntages_nonce' );
	echo '<label for="mg_twin_datcntr_advntages">'._e( "Set content for 'Twin Datacenter advantages' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_twin_datcntr_advntages', true );
	get_default('twin_datcntr_advntages');
	wp_editor($value, $id = 'mg_twin_datcntr_advntages', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function location_table($post){
	wp_nonce_field( 'location_table', 'location_table_nonce' );
	echo '<label for="mg_location_table">'._e( "Set content for 'Location Table'").'</label> ';
	$value = get_post_meta( $post->ID, '_location_table', true );
	get_default('location_table');
	wp_editor($value, $id = 'mg_location_table', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function our_network_services($post){
	wp_nonce_field( 'our_network_services', 'our_network_services_nonce' );
	echo '<label for="mg_our_network_services">'._e( "Set content for 'Our Network Services' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_our_network_services', true );
	get_default('our_network_services');
	wp_editor($value, $id = 'mg_our_network_services', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function net_plan_features($post){
	wp_nonce_field( 'net_plan_features', 'net_plan_features_nonce' );
	echo '<label for="mg_net_plan_features">'._e( "Set content for 'Netrouting Plans Features'").'</label> ';
	$value = get_post_meta( $post->ID, '_net_plan_features', true );
	get_default('net_plan_features');
	wp_editor($value, $id = 'mg_net_plan_features', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function ecommerce_system($post){
	wp_nonce_field( 'ecommerce_system', 'ecommerce_system_nonce' );
	echo '<label for="mg_ecommerce_system">'._e( "Set content for 'Ecommerce System' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_ecommerce_system', true );
	get_default('ecommerce_system');
	wp_editor($value, $id = 'mg_ecommerce_system', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Online Gaming
function game_changers($post){
	wp_nonce_field( 'game_changers', 'game_changers_nonce' );
	echo '<label for="mg_game_changers">'._e( "Set content for 'Game Changers' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_game_changers', true );
	get_default('game_changers');
	wp_editor($value, $id = 'mg_game_changers', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function download_btn_blc($post){
	wp_nonce_field( 'download_btn_blc', 'download_btn_blc_nonce' );
	echo '<label for="mg_download_btn_blc">'._e( "Set content for 'Download Button' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_download_btn_blc', true );
	get_default('download_btn_blc');
	wp_editor($value, $id = 'mg_download_btn_blc', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function three_features_blc($post){
	wp_nonce_field( 'three_features_blc', 'three_features_blc_nonce' );
	echo '<label for="mg_three_features_blc">'._e( "Set content for 'Features Block'").'</label> ';
	$value = get_post_meta( $post->ID, '_three_features_blc', true );
	get_default('three_features_blc');
	wp_editor($value, $id = 'mg_three_features_blc', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function online_gaming_features($post){
	wp_nonce_field( 'online_gaming_features', 'online_gaming_features_nonce' );
	echo '<label for="mg_online_gaming_features">'._e( "Set content for 'Netrouting Online Gaming Features' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_online_gaming_features', true );
	get_default('online_gaming_features');
	wp_editor($value, $id = 'mg_online_gaming_features', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function text_block($post){
	wp_nonce_field( 'text_block', 'text_block_nonce' );
	echo '<label for="mg_text_block">'._e( "Set content for Text Block").'</label> ';
	$value = get_post_meta( $post->ID, '_text_block', true );
	get_default('text_block');
	wp_editor($value, $id = 'mg_text_block', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//IT Companies
function featured_customers($post){
	wp_nonce_field( 'featured_customers', 'featured_customers_nonce' );
	echo '<label for="mg_featured_customers">'._e( "Set content for Feaured Customers Slider").'</label> ';
	$value = get_post_meta( $post->ID, '_featured_customers', true );
	get_default('featured_customers');
	wp_editor($value, $id = 'mg_featured_customers', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function netr_capabilities($post){
	wp_nonce_field( 'netr_capabilities', 'netr_capabilities_nonce' );
	echo '<label for="mg_netr_capabilities">'._e( "Set content for 'Netrouting Capabilities' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_netr_capabilities', true );
	get_default('netr_capabilities');
	wp_editor($value, $id = 'mg_netr_capabilities', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function use_cases($post){
	wp_nonce_field( 'use_cases', 'use_cases_nonce' );
	echo '<label for="mg_use_cases">'._e( "Set content for 'Use Cases' section").'</label> ';
	$value = get_post_meta( $post->ID, '_use_cases', true );
	get_default('use_cases');
	wp_editor($value, $id = 'mg_use_cases', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Why Netrouting
function two_by_three_features($post){
	wp_nonce_field( 'two_by_three_features', 'two_by_three_features_nonce' );
	echo '<label for="mg_two_by_three_features">'._e( "Set content for '2 x 3 features' section").'</label> ';
	$value = get_post_meta( $post->ID, '_two_by_three_features', true );
	get_default('two_by_three_features');
	wp_editor($value, $id = 'mg_two_by_three_features', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Disaster recovery
function disaster_recovery($post){
	wp_nonce_field( 'disaster_recovery', 'disaster_recovery_nonce' );
	echo '<label for="mg_disaster_recovery">'._e( "Set content for 'Disaster Recovery' section").'</label> ';
	$value = get_post_meta( $post->ID, '_disaster_recovery', true );
	get_default('disaster_recovery');
	wp_editor($value, $id = 'mg_disaster_recovery', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function benefits_disaster_recovery($post){
	wp_nonce_field( 'benefits_disaster_recovery', 'benefits_disaster_recovery_nonce' );
	echo '<label for="mg_benefits_disaster_recovery">'._e( "Set content for 'Benefits of Netrouting Disaster Recovery' section").'</label> ';
	$value = get_post_meta( $post->ID, '_benefits_disaster_recovery', true );
	get_default('benefits_disaster_recovery');
	wp_editor($value, $id = 'mg_benefits_disaster_recovery', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Netrouting Guarantee
function service_level($post){
	wp_nonce_field( 'service_level', 'service_level_nonce' );
	echo '<label for="mg_service_level">'._e( "Set content for 'Our Service Level' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_service_level', true );
	get_default('service_level');
	wp_editor($value, $id = 'mg_service_level', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Web Hosting Providers
function three_col_feature($post){
	wp_nonce_field( 'three_col_feature', 'three_col_feature_nonce' );
	echo '<label for="mg_three_col_feature">'._e( "Set content for 'Three Column Features' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_three_col_feature', true );
	get_default('three_col_feature');
	wp_editor($value, $id = 'mg_three_col_feature', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function two_col_text($post){
	wp_nonce_field( 'two_col_text', 'two_col_text_nonce' );
	echo '<label for="mg_two_col_text">'._e( "Set content for 'Two Column Text' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_two_col_text', true );
	get_default('two_col_text');
	wp_editor($value, $id = 'mg_two_col_text', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function reseller_prgm_button($post){
	wp_nonce_field( 'reseller_prgm_button', 'reseller_prgm_button_nonce' );
	echo '<label for="mg_reseller_prgm_button">'._e( "Set content for 'Reseller Program Button' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_reseller_prgm_button', true );
	get_default('reseller_prgm_button');
	wp_editor($value, $id = 'mg_reseller_prgm_button', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Company
function text_block_dark($post){
	wp_nonce_field( 'text_block_dark', 'text_block_dark_nonce' );
	echo '<label for="mg_text_block_dark">'._e( "Set content for Text Block - Dark Background").'</label> ';
	$value = get_post_meta( $post->ID, '_text_block_dark', true );
	get_default('text_block_dark');
	wp_editor($value, $id = 'mg_text_block_dark', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function get_to_know_us($post){
	wp_nonce_field( 'get_to_know_us', 'get_to_know_us_nonce' );
	echo '<label for="mg_get_to_know_us">'._e( "Set content for 'Get to know us' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_get_to_know_us', true );
	get_default('get_to_know_us');
	wp_editor($value, $id = 'mg_get_to_know_us', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function why_choose_us($post){
	wp_nonce_field( 'why_choose_us', 'why_choose_us_nonce' );
	echo '<label for="mg_why_choose_us">'._e( "Set content for 'Why Choose Us' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_why_choose_us', true );
	get_default('why_choose_us');
	wp_editor($value, $id = 'mg_why_choose_us', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//MLPS
function why_netrouting($post){
	wp_nonce_field( 'why_netrouting', 'why_netrouting_nonce' );
	echo '<label for="mg_why_netrouting">'._e( "Set content for 'Why Netrouting' Block").'</label> ';
	$value = get_post_meta( $post->ID, '_why_netrouting', true );
	get_default('why_netrouting');
	wp_editor($value, $id = 'mg_why_netrouting', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function metro_ethernet($post){
	wp_nonce_field( 'metro_ethernet', 'metro_ethernet_nonce' );
	echo '<label for="mg_metro_ethernet">'._e( "Set content for Metro Ethernet Line & Ring Block").'</label> ';
	$value = get_post_meta( $post->ID, '_metro_ethernet', true );
	get_default('metro_ethernet');
	wp_editor($value, $id = 'mg_metro_ethernet', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function product_table($post){
	wp_nonce_field( 'product_table', 'product_table_nonce' );
	echo '<label for="mg_product_table">'._e( "Set content for Product Table").'</label> ';
	$value = get_post_meta( $post->ID, '_product_table', true );
	get_default('product_table');
	wp_editor($value, $id = 'mg_product_table', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function remote_ix_faq($post){
	wp_nonce_field( 'remote_ix_faq', 'remote_ix_faq_nonce' );
	echo '<label for="mg_remote_ix_faq">'._e( "Set content for Remote IX Faqs Block").'</label> ';
	$value = get_post_meta( $post->ID, '_remote_ix_faq', true );
	get_default('remote_ix_faq');
	wp_editor($value, $id = 'mg_remote_ix_faq', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Remote IX
function internet_exchange($post){
	wp_nonce_field( 'internet_exchange', 'internet_exchange_nonce' );
	echo '<label for="mg_internet_exchange">'._e( "Set content for Internet Exchange Block").'</label> ';
	$value = get_post_meta( $post->ID, '_internet_exchange', true );
	get_default('internet_exchange');
	wp_editor($value, $id = 'mg_internet_exchange', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function text_with_img($post){
	wp_nonce_field( 'text_with_img', 'text_with_img_nonce' );
	echo '<label for="mg_text_with_img">'._e( "Set content for Text with Image Block").'</label> ';
	$value = get_post_meta( $post->ID, '_text_with_img', true );
	get_default('text_with_img');
	wp_editor($value, $id = 'mg_text_with_img', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function how_does_it_work($post){
	wp_nonce_field( 'how_does_it_work', 'how_does_it_work_nonce' );
	echo '<label for="mg_how_does_it_work">'._e( "Set content for 'How Does It Work' block").'</label> ';
	$value = get_post_meta( $post->ID, '_how_does_it_work', true );
	get_default('how_does_it_work');
	wp_editor($value, $id = 'mg_how_does_it_work', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function peering_exchange($post){
	wp_nonce_field( 'peering_exchange', 'peering_exchange_nonce' );
	echo '<label for="mg_peering_exchange">'._e( "Set content for Peering Exchange Block").'</label> ';
	$value = get_post_meta( $post->ID, '_peering_exchange', true );
	get_default('peering_exchange');
	wp_editor($value, $id = 'mg_peering_exchange', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Bare Metal Managed Servers
function signup_form($post){
	wp_nonce_field( 'signup_form', 'signup_form_nonce' );
	echo '<label for="mg_signup_form">'._e( "Set shortcode for the signup form").'</label> ';
	$value = get_post_meta( $post->ID, '_signup_form', true );
	get_default('signup_form');
	wp_editor($value, $id = 'mg_signup_form', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function image_text_blk1($post){
	wp_nonce_field( 'image_text_blk1', 'image_text_blk1_nonce' );
	echo '<label for="mg_image_text_blk1">'._e( "Set content for Text Block with Image").'</label> ';
	$value = get_post_meta( $post->ID, '_image_text_blk1', true );
	get_default('image_text_blk1');
	wp_editor($value, $id = 'mg_image_text_blk1', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function image_text_blk2($post){
	wp_nonce_field( 'image_text_blk2', 'image_text_blk2_nonce' );
	echo '<label for="mg_image_text_blk2">'._e( "Set content for Text Block with Image").'</label> ';
	$value = get_post_meta( $post->ID, '_image_text_blk2', true );
	get_default('image_text_blk2');
	wp_editor($value, $id = 'mg_image_text_blk2', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
//Managed Services
function text_blocks($post){
	wp_nonce_field( 'text_blocks', 'text_blocks_nonce' );
	echo '<label for="mg_text_blocks">'._e( "Set content for the Text Blocks").'</label> ';
	$value = get_post_meta( $post->ID, '_text_blocks', true );
	get_default('text_blocks');
	wp_editor($value, $id = 'mg_text_blocks', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
function shipment_procedure($post){
	wp_nonce_field( 'shipment_procedure', 'shipment_procedure_nonce' );
	echo '<label for="mg_shipment_procedure">'._e( "Set content for Shipment Procedure Block").'</label> ';
	$value = get_post_meta( $post->ID, '_shipment_procedure', true );
	get_default('shipment_procedure');
	wp_editor($value, $id = 'mg_shipment_procedure', $prev_id = 'title', $media_buttons = true, $tab_index = 2);
}
/*********************************************************************************************************************************************/

//////////////////////// Save Action ////////////////////////
/*add_action('save_post', 'save_details');
function save_details($post_ID = 0) {
	$post_ID = (int) $post_ID;
	$post_type = get_post_type( $post_ID );
	$post_status = get_post_status( $post_ID );
	
	if ($post_type) {
		update_post_meta($post_ID, "vps_hosting_type", $_POST["vps_hosting_type"]);
		update_post_meta($post_ID, "enable_footer_client", $_POST["enable_footer_client"]);
	}
	return $post_ID;
}*/
add_action( 'save_post', 'save_metabox_contents' );
function save_metabox_contents($post_id){
	/*----------------------- Common -----------------------------*/
	if ( ! isset( $_POST['banner_nonce'] ) )
	return $post_id;
	$nonce = $_POST['banner_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'banner' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_banner']) ;
	update_post_meta( $post_id, '_banner', $mydata );
	
	if ( ! isset( $_POST['netrouting_guarantee_nonce'] ) )
	return $post_id;
	$nonce = $_POST['netrouting_guarantee_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'netrouting_guarantee' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_netrouting_guarantee']) ;
	update_post_meta( $post_id, '_netrouting_guarantee', $mydata );
	/*----------------------- Homepage -----------------------------*/
	if ( ! isset( $_POST['partners_slider_nonce'] ) )
	return $post_id;
	$nonce = $_POST['partners_slider_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'partners_slider' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_partners_slider']) ;
	update_post_meta( $post_id, '_partners_slider', $mydata );
	
	if ( ! isset( $_POST['text_4col_features_nonce'] ) )
	return $post_id;
	$nonce = $_POST['text_4col_features_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'text_4col_features' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_text_4col_features']) ;
	update_post_meta( $post_id, '_text_4col_features', $mydata );
	
	if ( ! isset( $_POST['text_plus_video_nonce'] ) )
	return $post_id;
	$nonce = $_POST['text_plus_video_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'text_plus_video' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_text_plus_video']) ;
	update_post_meta( $post_id, '_text_plus_video', $mydata );
	
	if ( ! isset( $_POST['two_col_features_nonce'] ) )
	return $post_id;
	$nonce = $_POST['two_col_features_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'two_col_features' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_two_col_features']) ;
	update_post_meta( $post_id, '_two_col_features', $mydata );
	
	if ( ! isset( $_POST['plan_choice_block_nonce'] ) )
	return $post_id;
	$nonce = $_POST['plan_choice_block_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'plan_choice_block' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_plan_choice_block']) ;
	update_post_meta( $post_id, '_plan_choice_block', $mydata );
	
	if ( ! isset( $_POST['home_datacenter_loc_nonce'] ) )
	return $post_id;
	$nonce = $_POST['home_datacenter_loc_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'home_datacenter_loc' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_home_datacenter_loc']) ;
	update_post_meta( $post_id, '_home_datacenter_loc', $mydata );	
	/*-----------------------Twin Datacenters --------------------------*/
	if ( ! isset( $_POST['multiple_datacenters_nonce'] ) )
	return $post_id;
	$nonce = $_POST['multiple_datacenters_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'multiple_datacenters' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_multiple_datacenters']) ;
	update_post_meta( $post_id, '_multiple_datacenters', $mydata );
	
	if ( ! isset( $_POST['twin_datcntr_advntages_nonce'] ) )
	return $post_id;
	$nonce = $_POST['twin_datcntr_advntages_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'twin_datcntr_advntages' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_twin_datcntr_advntages']) ;
	update_post_meta( $post_id, '_twin_datcntr_advntages', $mydata );
	/*--------------------------Location List--------------------------*/
	if ( ! isset( $_POST['location_table_nonce'] ) )
	return $post_id;
	$nonce = $_POST['location_table_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'location_table' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_location_table']) ;
	update_post_meta( $post_id, '_location_table', $mydata );
	
	if ( ! isset( $_POST['our_network_services_nonce'] ) )
	return $post_id;
	$nonce = $_POST['our_network_services_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'our_network_services' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_our_network_services']) ;
	update_post_meta( $post_id, '_our_network_services', $mydata );
	/*-------------------------Ecommerce--------------------------*/
	
	if ( ! isset( $_POST['net_plan_features_nonce'] ) )
	return $post_id;
	$nonce = $_POST['net_plan_features_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'net_plan_features' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_net_plan_features']) ;
	update_post_meta( $post_id, '_net_plan_features', $mydata );
	
	if ( ! isset( $_POST['ecommerce_system_nonce'] ) )
	return $post_id;
	$nonce = $_POST['ecommerce_system_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'ecommerce_system' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_ecommerce_system']) ;
	update_post_meta( $post_id, '_ecommerce_system', $mydata );
	/*-----------------------Online Gaming-------------------------*/
	if ( ! isset( $_POST['game_changers_nonce'] ) )
	return $post_id;
	$nonce = $_POST['game_changers_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'game_changers' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_game_changers']) ;
	update_post_meta( $post_id, '_game_changers', $mydata );
	
	if ( ! isset( $_POST['download_btn_blc_nonce'] ) )
	return $post_id;
	$nonce = $_POST['download_btn_blc_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'download_btn_blc' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_download_btn_blc']) ;
	update_post_meta( $post_id, '_download_btn_blc', $mydata );
	
	if ( ! isset( $_POST['three_features_blc_nonce'] ) )
	return $post_id;
	$nonce = $_POST['three_features_blc_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'three_features_blc' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_three_features_blc']) ;
	update_post_meta( $post_id, '_three_features_blc', $mydata );
	
	if ( ! isset( $_POST['online_gaming_features_nonce'] ) )
	return $post_id;
	$nonce = $_POST['online_gaming_features_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'online_gaming_features' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_online_gaming_features']) ;
	update_post_meta( $post_id, '_online_gaming_features', $mydata );
	
	if ( ! isset( $_POST['text_block_nonce'] ) )
	return $post_id;
	$nonce = $_POST['text_block_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'text_block' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_text_block']) ;
	update_post_meta( $post_id, '_text_block', $mydata );
	/*------------------------IT Companies--------------------------*/
	if ( ! isset( $_POST['featured_customers_nonce'] ) )
	return $post_id;
	$nonce = $_POST['featured_customers_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'featured_customers' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_featured_customers']) ;
	update_post_meta( $post_id, '_featured_customers', $mydata );
	
	if ( ! isset( $_POST['netr_capabilities_nonce'] ) )
	return $post_id;
	$nonce = $_POST['netr_capabilities_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'netr_capabilities' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_netr_capabilities']) ;
	update_post_meta( $post_id, '_netr_capabilities', $mydata );
	
	if ( ! isset( $_POST['use_cases_nonce'] ) )
	return $post_id;
	$nonce = $_POST['use_cases_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'use_cases' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_use_cases']) ;
	update_post_meta( $post_id, '_use_cases', $mydata );
	/*-------------------------Why Netrouting--------------------------*/
	if ( ! isset( $_POST['two_by_three_features_nonce'] ) )
	return $post_id;
	$nonce = $_POST['two_by_three_features_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'two_by_three_features' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_two_by_three_features']) ;
	update_post_meta( $post_id, '_two_by_three_features', $mydata );
	/*-----------------------Disaster Recovery-------------------------*/
	if ( ! isset( $_POST['disaster_recovery_nonce'] ) )
	return $post_id;
	$nonce = $_POST['disaster_recovery_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'disaster_recovery' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_disaster_recovery']) ;
	update_post_meta( $post_id, '_disaster_recovery', $mydata );
	
	if ( ! isset( $_POST['benefits_disaster_recovery_nonce'] ) )
	return $post_id;
	$nonce = $_POST['benefits_disaster_recovery_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'benefits_disaster_recovery' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_benefits_disaster_recovery']) ;
	update_post_meta( $post_id, '_benefits_disaster_recovery', $mydata );
	/*------------------------Netrouting Guarantee--------------------------*/
	if ( ! isset( $_POST['service_level_nonce'] ) )
	return $post_id;
	$nonce = $_POST['service_level_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'service_level' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_service_level']) ;
	update_post_meta( $post_id, '_service_level', $mydata );
	/*------------------------Web Hosting Providers--------------------------*/
	if ( ! isset( $_POST['three_col_feature_nonce'] ) )
	return $post_id;
	$nonce = $_POST['three_col_feature_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'three_col_feature' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_three_col_feature']) ;
	update_post_meta( $post_id, '_three_col_feature', $mydata );
	
	if ( ! isset( $_POST['two_col_text_nonce'] ) )
	return $post_id;
	$nonce = $_POST['two_col_text_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'two_col_text' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_two_col_text']) ;
	update_post_meta( $post_id, '_two_col_text', $mydata );
	
	if ( ! isset( $_POST['reseller_prgm_button_nonce'] ) )
	return $post_id;
	$nonce = $_POST['reseller_prgm_button_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'reseller_prgm_button' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_reseller_prgm_button']) ;
	update_post_meta( $post_id, '_reseller_prgm_button', $mydata );
	/*------------------------Company--------------------------*/
	if ( ! isset( $_POST['text_block_dark_nonce'] ) )
	return $post_id;
	$nonce = $_POST['text_block_dark_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'text_block_dark' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_text_block_dark']) ;
	update_post_meta( $post_id, '_text_block_dark', $mydata );
	
	if ( ! isset( $_POST['get_to_know_us_nonce'] ) )
	return $post_id;
	$nonce = $_POST['get_to_know_us_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'get_to_know_us' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_get_to_know_us']) ;
	update_post_meta( $post_id, '_get_to_know_us', $mydata );
	
	if ( ! isset( $_POST['why_choose_us_nonce'] ) )
	return $post_id;
	$nonce = $_POST['why_choose_us_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'why_choose_us' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_why_choose_us']) ;
	update_post_meta( $post_id, '_why_choose_us', $mydata );
	/*------------------------MLPS--------------------------*/
	if ( ! isset( $_POST['why_netrouting_nonce'] ) )
	return $post_id;
	$nonce = $_POST['why_netrouting_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'why_netrouting' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_why_netrouting']) ;
	update_post_meta( $post_id, '_why_netrouting', $mydata );
	
	if ( ! isset( $_POST['metro_ethernet_nonce'] ) )
	return $post_id;
	$nonce = $_POST['metro_ethernet_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'metro_ethernet' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_metro_ethernet']) ;
	update_post_meta( $post_id, '_metro_ethernet', $mydata );
	
	 if ( ! isset( $_POST['product_table_nonce'] ) )
	return $post_id;
	$nonce = $_POST['product_table_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'product_table' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_product_table']) ;
	update_post_meta( $post_id, '_product_table', $mydata );
	
	 if ( ! isset( $_POST['remote_ix_faq_nonce'] ) )
	return $post_id;
	$nonce = $_POST['remote_ix_faq_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'remote_ix_faq' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_remote_ix_faq']) ;
	update_post_meta( $post_id, '_remote_ix_faq', $mydata );
	/*------------------------Remote IX--------------------------*/
	 if ( ! isset( $_POST['internet_exchange_nonce'] ) )
	return $post_id;
	$nonce = $_POST['internet_exchange_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'internet_exchange' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_internet_exchange']) ;
	update_post_meta( $post_id, '_internet_exchange', $mydata );
	
	 if ( ! isset( $_POST['text_with_img_nonce'] ) )
	return $post_id;
	$nonce = $_POST['text_with_img_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'text_with_img' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_text_with_img']) ;
	update_post_meta( $post_id, '_text_with_img', $mydata );
	
	 if ( ! isset( $_POST['how_does_it_work_nonce'] ) )
	return $post_id;
	$nonce = $_POST['how_does_it_work_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'how_does_it_work' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_how_does_it_work']) ;
	update_post_meta( $post_id, '_how_does_it_work', $mydata );
	
	 if ( ! isset( $_POST['peering_exchange_nonce'] ) )
	return $post_id;
	$nonce = $_POST['peering_exchange_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'peering_exchange' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_peering_exchange']) ;
	update_post_meta( $post_id, '_peering_exchange', $mydata );
	/*------------------------Bare Metal Managed Servers--------------------------*/
	 if ( ! isset( $_POST['signup_form_nonce'] ) )
	return $post_id;
	$nonce = $_POST['signup_form_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'signup_form' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_signup_form']) ;
	update_post_meta( $post_id, '_signup_form', $mydata );
	
	 if ( ! isset( $_POST['image_text_blk1_nonce'] ) )
	return $post_id;
	$nonce = $_POST['image_text_blk1_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'image_text_blk1' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_image_text_blk1']) ;
	update_post_meta( $post_id, '_image_text_blk1', $mydata );
	
	 if ( ! isset( $_POST['image_text_blk2_nonce'] ) )
	return $post_id;
	$nonce = $_POST['image_text_blk2_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'image_text_blk2' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_image_text_blk2']) ;
	update_post_meta( $post_id, '_image_text_blk2', $mydata );
	/*------------------------Managed Services--------------------------*/
	 if ( ! isset( $_POST['text_blocks_nonce'] ) )
	return $post_id;
	$nonce = $_POST['text_blocks_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'text_blocks' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_text_blocks']) ;
	update_post_meta( $post_id, '_text_blocks', $mydata );
	
	 if ( ! isset( $_POST['shipment_procedure_nonce'] ) )
	return $post_id;
	$nonce = $_POST['shipment_procedure_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'shipment_procedure' ) )
	  	return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	  	return $post_id;
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) )
		return $post_id;
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) )
		return $post_id;
	}
	$mydata =  stripslashes($_POST['mg_shipment_procedure']) ;
	update_post_meta( $post_id, '_shipment_procedure', $mydata );
	/*----------------------------------------------------------*/
}
//metabox creation ends here.....
?>