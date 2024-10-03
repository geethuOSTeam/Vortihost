<?php get_header(); ?>
<!--Blog Section-->
<section class="blog-details">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-8">
                <div class="blog-detail">
                    <?php
                	if ( have_posts() ) {
                		while ( have_posts() ) {
                			the_post();
                	?>
                        <h1><?php the_title(); ?></h1>
                        <div class="post-deatils">
                            <div class="post-deatils-list"><span class="icon-post-time"></span> <label>Posted on:</label> <?php the_date('M d, Y'); ?></div>
                            <div class="post-deatils-list"><span class="icon-post-by"></span> <label>By:</label> <?php the_author(); ?></div>
                        </div>
                        <div class="blog-image">
                            <?php
                                if (has_post_thumbnail()) {
                                    echo get_the_post_thumbnail(get_the_ID(), 'full');
                                }
                            ?>
                        </div>
                        
                        <div class="blog-content"><?php the_content(); ?></div>
                    <?php
                		}
                	}
                	?>
                </div>
                <div class="share-form mt-5">
                    <img class="img-fluid dummy-shareform" src="<?php echo get_stylesheet_directory_uri(); ?>/images/dummy-shareform.png" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-right">
                    <?php get_search_form(); ?>
                    <!--<><><><> POST CATEGORIES <><><><>-->
                    <div class="categories">
                        <div class="heading-sidebar position-relative">
                            <h5>Blog post categories</h5>
                        </div>
                        <?php
                        $categories = get_categories();
                        echo '<ul class="p-0">';
                        foreach ( $categories as $category ) {
                            echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'<span class="categories-num">'.$category->count.'</span></a></li>';
                        }
                        echo '</ul>';
                        ?>
                    </div>
                    <!--<><> Recent and popular tab section <><>-->
                    <?php get_sidebar('blog'); ?>
                    <!--<><><><> POPULAR TAGS <><><><>-->
                    <div class="popular-tags">
                        <div class="heading-sidebar position-relative">
                            <h5>Tag</h5>
                        </div>
                        <?php
                        $tags = get_tags();
                        if ($tags) {
                            echo '<ul>';
                            foreach ($tags as $tag) {
                                echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>

                    <!--<><><><> Recent Posts <><><><>-->
                    <div class="recent-posts">
                        <h5>Recent Posts </h5>
                        <?php
                        	$recent_posts = wp_get_recent_posts(array(
                        		'numberposts' => 2, // Number of recent posts thumbnails to display
                        		'post_status' => 'publish' // Show only the published posts
                        	));
                        	foreach( $recent_posts as $post_item ) : ?>
                        	    <div class="posts">
                                    <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                        <i class="icon-news"></i>
                                        <section>
                                            <h6><?php echo $post_item['post_title'] ?></h6>
                                            <p><?php echo get_the_excerpt(); ?></p>
                                        </section>
                                    </a>
                                </div>
                                <hr>
                        <?php endforeach; ?>  
                        <div class="action">
                            <a class="arrow-link" href="<?php echo get_post_type_archive_link( 'post' ); ?>">More posts</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>