<?php
/**
* The functions file for the Lander child theme
*/

function lander_scripts(){
	if ( is_front_page() ) {
		wp_enqueue_style('lander-styles', get_stylesheet_directory_uri() . '/lander-style.css');
	}
}

add_action('wp_enqueue_scripts', 'lander_scripts');
add_image_size('testimonial-mug', 253, 253, true);