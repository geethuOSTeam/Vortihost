<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwenty_unique_id = twentytwenty_unique_id( 'search-form-' );

$twentytwenty_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if ( empty( $twentytwenty_aria_label ) && ! empty( $args['label'] ) ) {
	$twentytwenty_aria_label = 'aria-label="' . esc_attr( $args['label'] ) . '"';
}
?>
<form role="search" <?php echo $twentytwenty_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form search-blog-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group search-with-icon">
        <input type="search" id="<?php echo esc_attr( $twentytwenty_unique_id ); ?>" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <div class="input-group-btn">
            <!--<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty' ); ?>" />-->
            <button class="btn searhicon-btn" type="submit"><span class="icon-search"></span></button>
        </div>
    </div>
</form>
