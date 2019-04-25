<?php
/**
 * Register ACF Blocks
 *
 * inc/acf-blocks.php
 */

function register_acf_blocks() {

	// register a testimonial block.
	acf_register_block(array(
		'name'              => 'testimonial',
		'title'             => __('Testimonial', 'understrap'),
		'description'       => __('A custom testimonial block.', 'understrap'),
		'render_template'   => 'loop-templates/blocks/testimonial.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array('testimonial', 'quote'),
	));
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block')) {
	add_action('acf/init', 'register_acf_blocks');
}
