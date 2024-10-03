// JavaScript Document
//For default template
var a1 = jQuery.noConflict();
jQuery().ready(function(a1) {
a1('#page_template').change(function() {
    var val1 = a1('#page_template :selected').val();
	if(val1 =='home.php'){//Homepage
		a1('#banner').show();
		a1('#partners_slider').show();
		a1('#text_4col_features').show();
		a1('#text_plus_video').show();
		a1('#two_col_features').show();
		a1('#plan_choice_block').show();
		a1('#datacenter_loc').show();
		
		a1('#netrouting_guarantee').hide();
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();		
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if (val1 == 'page-templates/twin-datacenter.php' ) {
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();
		
		a1('#netrouting_guarantee').show();
		a1('#multiple_datacenters').show();
		a1('#twin_datcntr_advntages').show();
		
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if (val1 == 'page-templates/location-list.php' ) {
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();		
		a1('#netrouting_guarantee').hide();
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		
		a1('#location_table').show();
		a1('#our_network_services').show();
		
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if (val1 == 'page-templates/ecommerce.php' ) {
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();		
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		
		a1('#net_plan_features').show();
		a1('#ecommerce_system').show();
		a1('#netrouting_guarantee').show();
		
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if (val1 == 'page-templates/online-gaming.php' ) {
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();		
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		
		a1('#game_changers').show();
		a1('#download_btn_blc').show();
		a1('#three_features_blc').show();
		a1('#online_gaming_features').show();
		a1('#text_block').show();
		a1('#netrouting_guarantee').show();
		
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if (val1 == 'page-templates/it-companies.php' ) {
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();		
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		
		a1('#featured_customers').show();
		a1('#netr_capabilities').show();
		a1('#use_cases').show();
		a1('#netrouting_guarantee').show();
		
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if (val1 == 'page-templates/why-netrouting.php' ) {
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();		
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		
		a1('#two_by_three_features').show();
		a1('#netrouting_guarantee').show();
		
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if(val1 == 'page-templates/disaster-recovery.php' ){
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();		
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		
		a1('#disaster_recovery').show();
		a1('#benefits_disaster_recovery').show();
		a1('#netrouting_guarantee').show();
		
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if(val1 == 'page-templates/netrouting-guarantee.php' ){
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();		
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		
		a1('#netrouting_guarantee').show();
		a1('#service_level').show();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if(val1 == 'page-templates/data-center.php'){ 
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();
		
		a1('#netrouting_guarantee').show();
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if(val1 == 'page-templates/web-hosting-providers.php'){ 
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();
		
		a1('#netrouting_guarantee').show();
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').show();
		a1('#two_col_text').show();
		a1('#reseller_prgm_button').show();
		
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}else if(val1 == 'page-templates/company.php'){ 
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();
		
		a1('#netrouting_guarantee').hide();
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		
		a1('#text_block_dark').show();
		a1('#get_to_know_us').show();
		a1('#why_choose_us').show();
	}else{
		a1('#banner').show();
		a1('#partners_slider').hide();
		a1('#text_4col_features').hide();
		a1('#text_plus_video').hide();
		a1('#two_col_features').hide();
		a1('#plan_choice_block').hide();
		a1('#datacenter_loc').hide();
		
		a1('#netrouting_guarantee').show();
		a1('#multiple_datacenters').hide();
		a1('#twin_datcntr_advntages').hide();
		a1('#location_table').hide();
		a1('#our_network_services').hide();
		a1('#net_plan_features').hide();
		a1('#ecommerce_system').hide();
		a1('#game_changers').hide();
		a1('#download_btn_blc').hide();
		a1('#three_features_blc').hide();
		a1('#online_gaming_features').hide();
		a1('#text_block').hide();
		a1('#featured_customers').hide();
		a1('#netr_capabilities').hide();
		a1('#use_cases').hide();
		a1('#two_by_three_features').hide();
		a1('#disaster_recovery').hide();
		a1('#benefits_disaster_recovery').hide();
		a1('#service_level').hide();
		
		a1('#three_col_feature').hide();
		a1('#two_col_text').hide();
		a1('#reseller_prgm_button').hide();
		a1('#text_block_dark').hide();
		a1('#get_to_know_us').hide();
		a1('#why_choose_us').hide();
	}
}).change();

});

