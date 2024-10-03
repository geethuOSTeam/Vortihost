<?php
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');
global $wpdb;

/*
add_action('init', 'mainslider_register');
function mainslider_register() {
	$labels = array(
		'name' => __('Main Slider', 'post type general name'),
		'singular_name' => __('Slider', 'post type singular name'),
		'add_new' => __('Add New', 'Slider'),
		'add_new_item' => __('Add New Slider'),
		'edit_item' => __('Edit Slider'),
		'new_item' => __('New Slider'),
		'view_item' => __('View Slider'),
		'search_items' => __('Search Slider'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-slides',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','image')
	  ); 
 
	register_post_type( 'mainslider' , $args );
}

*/





add_action('init', 'testimonial_register');
function testimonial_register() {
	$labels = array(
		'name' => __('Testimonials', 'post type general name'),
		'singular_name' => __('Testimonial', 'post type singular name'),
		'add_new' => __('Add New', 'Testimonial item'),
		'add_new_item' => __('Add New Testimonial'),
		'edit_item' => __('Edit Testimonial'),
		'new_item' => __('New Testimonial'),
		'view_item' => __('View Testimonial'),
		'search_items' => __('Search Testimonial'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-testimonial',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','image')
	  ); 
 
	register_post_type( 'testimonial' , $args );
}
add_action("admin_init", "testimonial_init");
function testimonial_init(){
	global $post;
 	 add_meta_box("testimonial_credits_meta", "Client Details", "testimonial_credits_meta", "testimonial", "normal", "low");
}
function testimonial_credits_meta() {
	
  global $post;
  $testi_client_name 	= get_post_meta($post->ID, '_testi_client_name', true);
  $testi_client_destination 	= get_post_meta($post->ID, '_testi_client_destination', true);
  $testi_client_web 	= get_post_meta($post->ID, '_testi_client_web', true);
  $style = 'style="border-color: #DDDDDD;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.07) inset;width: 100%;background-color: #FFFFFF;color: #333333;border-style: solid;border-width: 1px;padding: 3px 5px;font-size: 14px;line-height: 15px;height:40px;"';
  ?>
   <p><label><b>Client Name :</b></label><br /><br />
  <input name="testi_client_name" <?php echo $style;?> value="<?php echo $testi_client_name; ?>" /></p>
  <p><label><b>Designation :</b></label><br /><br />
  <input name="testi_client_destination" <?php echo $style;?> value="<?php echo $testi_client_destination; ?>" /></p>  
  <?php /*<p><label><b>Client Facebook Url :</b></label><br /><br />
  <input name="testi_client_web" <?php echo $style;?> value="<?php echo $testi_client_web; ?>" /></p> */?>
<?php
}
//global $post;
//$custom = get_post_custom($post->ID);
add_action('save_post', 'save_testimony_details');
function save_testimony_details(){
  global $post; 
  update_post_meta($post->ID, "_testi_client_name", $_POST["testi_client_name"]);
 update_post_meta($post->ID, "_testi_client_destination", $_POST["testi_client_destination"]);
  //update_post_meta($post->ID, "_testi_client_web", $_POST["testi_client_web"]);

}
add_action("manage_posts_custom_column",  "testimonial_custom_columns");
add_filter("manage_edit-testimonial_columns", "testimonial_edit_columns");
function testimonial_edit_columns($details){
  $details = array(
    "cb" => '<input type="checkbox" />',
	"image" => 'Client Photo',
    "title" => 'Quote',
	"clientname" => 'Client Name',
    "date" => 'Date',
  );
 
  return $details;
}
function testimonial_custom_columns($detail){
  global $post;
  $custom = get_post_custom();
 // echo $custom["_testi_client_name"][0];
   switch ($detail) {
  	case "image" :
	  $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	
	  echo '<img src="'.$feat_image.'" width="50" />';	
	  break;	
	case "clientname":
      $custom = get_post_custom();
      echo $custom["_testi_client_name"][0];
      break; 
	  case "title":
      the_title();
      break;
    case "date":
 break;
    
  }
}
add_action('admin_head-post-new.php','change_thumbnail_html');
add_action('admin_head-post.php','change_thumbnail_html');
function change_thumbnail_html( $content ) {
    if ('testimonial' == $GLOBALS['post_type'])
      add_filter('admin_post_thumbnail_html','do_thumb');
}
function do_thumb($content){
	 return str_replace(__('featured image'), __('Client photo'),$content);
}


function company_change_featured_image_metabox_title( $post_type, $post ) {
	if ( $post_type === 'testimonial' ) {
		//remove original featured image metabox
		remove_meta_box( 'postimagediv', 'company', 'side' );

		//add our customized metabox
		add_meta_box( 'postimagediv', __('Client photo'), 'post_thumbnail_meta_box', 'Testimonial', 'side', 'low' );
		
	}
}
/*------------------ Additional settings page-------------------*/
/*add_action('admin_menu' , 'brdesign_enable_pages');

function brdesign_enable_pages() {
add_submenu_page('edit.php?post_type=testimonial', 'Custom Post Type Admin', 'Settings', 'edit_posts', basename(__FILE__), 'testimonial_settings');
}
function testimonial_settings(){
	admin_CustomHeader();
	echo 'settings sections goes here
	1. testimonmial title/heading
	2. Testimonial section description
	3. Testimonial limit in slider';
	admin_CustomFooter();
}*/


function getTestminoalSlider($n){
	global $post,$wpdb;
	$limit = ($n)?$n:5;
	
	$args = array( 'post_type' => 'testimonial','posts_per_page' => $limit );
	query_posts( $args ); 
	
	while ( have_posts() ) : the_post();
		$test_id=get_the_id();
		$quote_title=get_the_title($test_id);
		$quote_content=apply_filters('the_content', get_post_field('post_content', $test_id));
		$testi_client_name 	= get_post_meta($test_id, '_testi_client_name', true);
		$client_photo=get_the_post_thumbnail($test_id, 'testi_client_photo'); 
		$testi_client_designation 	= get_post_meta($test_id, '_testi_client_destination', true);
		$testi_client_web 	= get_post_meta($test_id, '_testi_client_web', true);
		?>
		<div class="client-item">
			<div class="cl-image">
				<?php echo $client_photo; ?>
			</div>
			<p><?php echo string_limit_words(strip_tags($quote_content),25).'...'; ?></p>
			<div class="cl-name">
				<h6><?php echo $testi_client_name; ?> <span><?php echo $testi_client_designation; ?></span></h6>
			</div>
		</div>
		<?php
	endwhile;
	wp_reset_query();
}

function getTestminoals($n){
	global $post,$wpdb,$theme_options;
	$limit = ($n)?$n:10;
	
	$args = array( 'post_type' => 'testimonial','posts_per_page' => $limit );
	query_posts( $args ); 
	?>
	
	
     <section class="testimonials">
        <div class="container">
            <div class="sec-head">
                 <?php echo $theme_options['testi_des']; ?>
            </div>
        </div>
        <div class="testi-wrapper">
            <div class="testi-slider">
              
   <?php          
	while ( have_posts() ) : the_post();
		$test_id=get_the_id();
		$quote_title=get_the_title($test_id);
		$quote_content=apply_filters('the_content', get_post_field('post_content', $test_id));
		$testi_client_name 	= get_post_meta($test_id, '_testi_client_name', true);
		$client_photo=get_the_post_thumbnail($test_id, 'testi_client_photo'); 
		$testi_client_designation 	= get_post_meta($test_id, '_testi_client_destination', true);
		$testi_client_web 	= get_post_meta($test_id, '_testi_client_web', true);
		?>
		
		   <div class="testi-item">
                    <div class="testi-box">
                        <div class="testi-avatar"> <?php echo $client_photo; ?></div>
                        <div class="testi-tag">
                            <h4><?php echo $testi_client_name; ?></h4>
                          <h5><?php echo $testi_client_designation; ?></h5> 
                        </div>
                        <div class="testi-msg">
                           <?php echo $quote_content; ?>
                        </div>
                    </div>
                </div>

		<?php
	endwhile;
	wp_reset_query(); ?>
      
            </div>
        </div>
    </section>
    
		
<?php }
?>