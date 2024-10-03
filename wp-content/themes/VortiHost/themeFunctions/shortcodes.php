<?php  
//Shortcode for the Blog Page
add_shortcode( 'base_url', 'getbaseurl' );
function getbaseurl($atts ){
    $html .= '';
    $html .=''.get_site_url();
    return $html;
}
add_shortcode( 'BlogPosts', 'getBlogPosts' );
function getBlogPosts($atts ){
	global $wpdb, $post;
	$html = '';
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array( 
		'post_type'         => 'post',
		'orderby'           => 'date',
		'order'             => 'DESC',
		'post_status'       => 'publish',
		'posts_per_page'    => 3,
		'paged'             => $paged,
	);
	query_posts( $args );
	$html .= '<div class="row">';		
	while ( have_posts() ) : the_post();
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		$url = ($src[0]=='')?get_bloginfo('stylesheet_directory').'/img/placeholder.png':$src[0];
        $des= get_the_content($post->ID);	
		$short = string_limit_letters(strip_tags(get_the_content($post->ID)),100);
		$short .= '...';
		$categories = get_the_category($post->ID);
		$html .= '<div class="col-lg-4">
                <div class="ip-architect-box ip-architect-box1" style="background: url('.$url.');">
                    <h4><span>'.get_the_date('d. M Y', $post->ID).'</span>'.get_the_title($post->ID).'</h4>
                        <p>'.$short.'</p>
                        <a href="'.get_permalink($post->ID).'" class="primary__btn">Explore full blog articke <span class="icon-arrow-6"></span> </a>
                </div>
            </div>';
            endwhile;			
		wp_reset_query();	
	     $html .= '</div>';
	return $html;
}
add_shortcode( 'TestimonialSlider', 'getAlltestimonials' );
function getAlltestimonials($atts ){
    global $wpdb, $post,  $theme_options;

    $html = '';
    $posts_array = get_posts(
                    array(
                        'posts_per_page' => -1,
                        'post_type' => 'testimonial',
                    )
                );
                
                
    $html .= '<div class="testimoial-carousel">                
                    <div class="owl-carousel">';
    if($posts_array){
        foreach($posts_array as $p){       
            setup_postdata( $p ); 
            $testi_client_name  = get_post_meta($p->ID, '_testi_client_name', true);
           $testi_client_destination  = get_post_meta($p->ID, '_testi_client_destination', true); 
            $src = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), 'full' );
            $url = ($src[0]=='')?get_bloginfo('stylesheet_directory').'/img/placeholder.png':$src[0];
            $html .= '<div class="item">
                            <div class="client-details">
                                <span class="indent"><img src="'.get_bloginfo('stylesheet_directory').'/img/indent.svg" class="img-fluid" style="height:43px;" alt=""></span>
                                <p>'.get_the_content($p->ID).'</p>
                                <div class="client-detail">
                                    <span><img src="'.$url.'" class="img-fluid" alt=""></span>
                                    <h5>'.$testi_client_name.' <span>'.$testi_client_destination.'</span></h5>
                                </div>
                            </div>                            
                        </div>';
        } 
        $html .= '';
    } 
        $html .= '</div>
                </div>';

    return $html;
}
add_shortcode( 'TestimonialList', 'getTestimonialList' );
function getTestimonialList($atts ){
    global $wpdb, $post,  $theme_options;

    $html = '<div class="testimonial-list">';
    $posts_array = get_posts(
                    array(
                        'posts_per_page' => -1,
                        'post_type' => 'testimonial',
                    )
                );
                
    if($posts_array){
        foreach($posts_array as $p){       
            setup_postdata( $p ); 
            $testi_client_name  = get_post_meta($p->ID, '_testi_client_name', true);
            $testi_client_destination  = get_post_meta($p->ID, '_testi_client_destination', true); 
            $src = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), 'full' );
            $url = ($src[0]=='')?get_bloginfo('stylesheet_directory').'/img/placeholder.png':$src[0];
            $html .= '<div class="testimonial-wrapper-box">
                           <span><img src="'.get_bloginfo('stylesheet_directory').'/img/indent-img.svg" class="img-fluid" alt=""></span>
                           <div class="testimonial-wrapper-content">
                            <h3>'.$testi_client_name.' <span>'.$testi_client_destination.'</span></h3>
                            <p>'.get_the_content($p->ID).'</p>
                           </div>
                       </div>';
        }         
    } 
    $html .= '</div>';
    return $html;
}
