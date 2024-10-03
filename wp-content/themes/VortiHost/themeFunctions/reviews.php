<?php
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
require_once(ABSPATH .'wp-load.php');
global $wpdb;

add_action('admin_menu', 'add_ReviewMenu');
function add_ReviewMenu() {
		add_menu_page('Reviews', 'Reviews', 'edit_themes', "Reviews", 'reviewsList');
}
function reviewsList(){
	$curl = curl_init();
	curl_setopt_array($curl, Array(
		CURLOPT_URL            => 'https://www.real.reviews/jaguarpc/feed',
		CURLOPT_USERAGENT      => 'spider',
		CURLOPT_TIMEOUT        => 120,
		CURLOPT_CONNECTTIMEOUT => 30,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_ENCODING       => 'UTF-8'
	));
	$data = curl_exec($curl);
	curl_close($curl);
	$xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);
	$arr = json_decode( json_encode($xml) , 1);
	$items = $arr['channel']['item'];
	foreach($items as $item){
		//echo '<pre>'; print_r($item); echo '</pre>';
		if($item && $item['author']!=''&& count($item['content'])!=0){
				echo '<div class="review-item clearfix">
								<div class="tag-info">
									<h4><a href="'.$item['link'].'" style="color:#fff;">'.$item['author'].'</a></h4>
									<span class="review-star"><img class="img-responsive" src="'.get_stylesheet_directory_uri().'/img/review-star.png" alt=""></span>
								</div>
								<div class="review-text">';
									print_r($item['content']);
						echo '		</div>
							</div>';
			  } 
	}
	//echo $html;
}