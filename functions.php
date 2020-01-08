<?php

require get_template_directory() . "/include/setup.php";
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('wp_enqueue_scripts','rt_theme_styles');
add_action('after_setup_theme','rt_after_setup');
add_action('widgets_init','rt_widgets');
//CUSTOMIZANDO O CSS DOS BOTOS PREV E NEXT
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
// CUSTOMIZANDO O LEIA MAIS 
add_filter('excerpt_length', 'new_excerpt_more', 999);