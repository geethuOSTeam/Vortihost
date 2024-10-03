<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<section class="common-banner error404-content">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="common-banner-content sm-height">
                    <h1><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>
                    <p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p>
                    <?php
                		get_search_form(
                			array(
                				'aria_label' => __( '404 not found', 'twentytwenty' ),
                			)
                		);
                		?>
                </div> 
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<?php
get_footer();
