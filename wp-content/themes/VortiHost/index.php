<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<!--<><><> Sub banner <><><>-->
<section class="sub-banner blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sub-banner-content">
                    <?php
                    $archive_title    = '';
                	$archive_subtitle = '';
                
                	if ( is_search() ) {
                		global $wp_query;
                
                		$archive_title = sprintf(
                			'%1$s %2$s',
                			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
                			'&ldquo;' . get_search_query() . '&rdquo;'
                		);
                
                		if ( $wp_query->found_posts ) {
                			$archive_subtitle = sprintf(
                				_n(
                					'We found %s result for your search.',
                					'We found %s results for your search.',
                					$wp_query->found_posts,
                					'twentytwenty'
                				),
                				number_format_i18n( $wp_query->found_posts )
                			);
                		} else {
                			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
                		}
                	} elseif ( is_archive() && ! have_posts() ) {
                		$archive_title = __( 'Nothing Found', 'twentytwenty' );
                	} elseif ( ! is_home() ) {
                		$archive_title    = get_the_archive_title();
                		$archive_subtitle = get_the_archive_description();
                	}else if(is_home()){
                	    $archive_title    = 'Our Blog';
                        $archive_subtitle = 'Curious about our services? Here you can find answers to the most frequently asked questions about AltusHost.';
                	}
                
                	if ( $archive_title || $archive_subtitle ) {
                		?>
                		<?php if ( $archive_title ) { ?>
                			<h2 class="blog-main-head"><?php echo $archive_title; ?></h2>
                		<?php } ?>
                		<?php if ( $archive_subtitle ) { ?>
                			<p><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></p>
                		<?php } ?>
                		<?php
                	}
                	?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-listing">
    <!--Blog listing-->
    <div class="blog-listing-wrap">
        <div class="container">
            <?php
            if ( have_posts() ) {
        		$i = 0;
        		while ( have_posts() ) {
        		    the_post();
        		    $categories = get_the_category();
        		    $pcat  = '';
                    if ( ! empty( $categories ) ) {
                    	$pcat .= '<span class="post-label"><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></span>';
                    }
        			if($i==1){ echo '<div class="more-blogs">';}
        			if ( $i == 0 ) {
        				?>
        				<div class="pinned-article">
                            <div class="blog-article-image">
                                <?php
                                if (has_post_thumbnail()) {
                                    echo get_the_post_thumbnail(get_the_ID(), 'full');
                                }
                                ?>
                            </div>
                            <div class="blog-article-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="post-deatils">
                                    <div class="left">
                                        <?php echo $pcat; ?>
                                        <span class="post-date"><?php echo get_the_date('M d, Y'); ?></span>
                                    </div>
                                    <div class="right">
                                        <span class="post-by">By: <strong><?php the_author(); ?></strong></span>
                                    </div>
                                </div>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
        				<?php
        				echo '<div class="blog-tab">';
        				get_sidebar('blog');
        				echo '</div>';
        			}else{
        			    ?>
        			    <div class="blog-card">
                                <div class="blog-article-image">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        echo get_the_post_thumbnail(get_the_ID(), 'full');
                                    }
                                    ?>
                                </div>
                                <div class="blog-article-content">
                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <div class="post-deatils">
                                        <div class="left">
                                            <?php echo $pcat; ?>
                                        </div>
                                        <div class="right">
                                            <span class="post-date"><?php echo get_the_date('M d, Y'); ?></span>
                                        </div>
                                    </div>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        <?php
        			}
                    $i++;
        		}
        		?>
        		</div>
        		<div class="blog-pagination">
                    <?php get_template_part( 'template-parts/pagination' ); ?>
                </div>
        	<?php
        	} elseif ( is_search() ) {
        		?>
        		<div class="no-search-results-form section-inner thin">
        			<?php
        			get_search_form(
        				array(
        					'aria_label' => __( 'search again', 'twentytwenty' ),
        				)
        			);
        			?>
        		</div>
        		<?php
        	}
        	?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
