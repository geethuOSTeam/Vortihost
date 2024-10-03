<?php

add_shortcode( 'resentblogsection', 'getresentblogs' );
function getresentblogs($atts ){
     global $wpdb, $post,  $theme_options;

    $html = '';  
    
 $html .= '


 <h3>'.$theme_options['zblog_news'].'  </h3> <div class="row">';
            // define query arguments
    $posts_array1 = get_posts(
                    array(
                        'posts_per_page' => -1,
                        'post_type' => 'post',
                        'nopaging' => true
                    )
                );
         

            // set up new query
         if($posts_array1){
        foreach($posts_array1 as $tyler_query){       
            setup_postdata( $tyler_query ); 

            // loop through found posts
          
           
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($tyler_query->ID), array(770, 339));
                            if($thumb[0]){
                            $img = '<a href="'.get_the_permalink($tyler_query->ID).'"><img class="img-fluid" src="'.$thumb[0].'" alt="" ></a>';
                            }else{
                            $img = '<a href="'.get_the_permalink($tyler_query->ID).'"><img class="img-fluid" src="'.get_bloginfo('stylesheet_directory').'/img/default-img.jpg" alt="" ></a>';
                            }
              
           
            $html .= '<div class="col-lg-3 col-md-6">
                <div class="new__layerswitch--box">
                    <div class="new__image">
                      '.$img.'
                    </div>
                    <div class="new__layerswitch--body">
                        <span class="new__date">
                           '.get_the_date( 'd. F Y',$tyler_query->ID ).'
                        </span>
                        <a href="'.get_the_permalink($tyler_query->ID).'"><h5> '.get_the_title($tyler_query->ID).'</h5></a>
                        <p>'.get_the_excerpt($tyler_query->ID).'</p>
                        <a href="'.get_the_permalink($tyler_query->ID).'" class="primary__link">
                            Read all blog article
                        </a>
                    </div>
                </div>
            </div>
            
            

              ';


        
           }}   
                            
 $html .= '</div>
';
    return $html;
    }
