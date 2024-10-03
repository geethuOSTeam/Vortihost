<?php
		define('WP_USE_THEMES', false);
		require_once('../../../../wp-blog-header.php');
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
		require_once(ABSPATH .'wp-load.php');
		global $wpdb;
		extract($_POST);
		
		switch($action){
			case 'datacenter' 		: 	datacenterPDF($pid);
						  		break;
			case 'metabox_add' 		: 	metabox_add($page, $metabox_name, $metabox_id);
						  		break;
			case 'plandelete' 	: 	plandelete($pid);
						  		break;
			case 'planedit' 	: 	planedit($pid);
						  		break;
			default  		: 	break;
		}
		
	function datacenterPDF($pid){
		echo '<pre>'; print_r($_REQUEST); echo '</pre>';
	}
	function metabox_add($page, $metabox_name, $metabox_id){
		if(isset($page) && isset($metabox_name) && isset($metabox_id) ){
			add_meta_box( $metabox_id, $metabox_name, 'customMeta', 'page', 'advanced','core', '' ); 
		}else{
			echo 'daivame...';
		}
	}
	function customMeta($post){
				wp_nonce_field( $metabox_id, $metabox_id.'_nonce' );
				echo '<label for="mg_'.$metabox_id.'">'._e( "Set Content for".$metabox_name).'</label> ';
				$value = get_post_meta( $post->ID, '_'.$metabox_id, true );
				get_default($metabox_id); 
				wp_editor($value, $id = 'mg_'.$metabox_id, $prev_id = 'title', $media_buttons = true, $tab_index = 2);
			}