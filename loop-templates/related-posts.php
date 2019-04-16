<?php

// Get all related posts for the current post

$related_posts = get_field('related_posts');

if ($related_posts) {
	?>
		<h1><?php _e('Related Posts', 'understrap'); ?></h1>
	<?php

	// Loop over all related posts
	foreach ($related_posts as $post) {
		// For each related post, set it as the post object.
		setup_postdata($post);

		// Then include the post excerpt template file.
		get_template_part('loop-templates/content');
	}

	// Reset back to the original post.
	wp_reset_postdata();
}
