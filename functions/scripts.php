<?php

// Bring in Genesis's Styles.
add_action('wp_enqueue_scripts', 'bring_in_parent_styles');

function bring_in_parent_styles() {
	// Bring's in Genesis's Default styling first so child theme overwrites it.
	wp_enqueue_style('parent_theme_styles', get_template_directory_uri() . '/style.css', 5);
}