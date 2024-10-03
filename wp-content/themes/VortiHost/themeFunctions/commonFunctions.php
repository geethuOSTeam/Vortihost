<?php
 global $theme_options1;
//Add theme class to all pages
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {
	$classes[] = 'Custom_container';
	return $classes;
}
//Limit letters

//Limit letters
function string_limit_words($string, $word_limit){
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
  }
//Add styles to admim editor
function my_theme_add_editor_styles() {
	$style_path = get_bloginfo('stylesheet_directory').'/themeFunctions/custom-editor-style.css?'. filemtime( get_stylesheet_directory() . '/themeFunctions/custom-editor-style.css');
	add_editor_style( $style_path );
}
add_action( 'init', 'my_theme_add_editor_styles' );

function wpshout_longer_excerpts( $length ) {
	// Don't change anything inside /wp-admin/
	if ( is_admin() ) {
		return $length;
	}
	// Set excerpt length to 25 words
	return 12;
}
// "999" priority makes this run last of all the functions hooked to this filter, meaning it overrides them
add_filter( 'excerpt_length', 'wpshout_longer_excerpts', 999 );


