<?php
/**
 * Languages setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get all selected languages
$languages = get_field('programming_languages');

// Did we get any languages?
if ($languages) {
	// GREAT SUCCESS!
	?>
		<section id="wrapper-languages">
			<div class="container">
				<div class="row">
					<!-- Loop over the languages -->
					<?php
						foreach ($languages as $post) {
							setup_postdata($post);
							?>
								<!-- For each language, include a template part -->
								<?php get_template_part('loop-templates/content', 'us_language'); ?>
							<?php
						}

						// DON'T FORGET TO RESET POSTDATA!
						wp_reset_postdata();
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /#wrapper-languages -->
	<?php
}
