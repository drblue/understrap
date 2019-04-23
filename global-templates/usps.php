<?php
/**
 * USPs setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the three latest USPs
$usps = get_field('usps');

// Did we get any USPs?
if ($usps) {
	// GREAT SUCCESS!
	?>
		<section id="wrapper-usps">
			<div class="container">
				<div class="row">
					<!-- Loop over the USPs -->
					<?php
						foreach ($usps as $post) {
							setup_postdata($post);
							?>
								<!-- For each USP, include a template part? -->
								<?php get_template_part('loop-templates/content', 'usp'); ?>
							<?php
						}

						// DON'T FORGET TO RESET POSTDATA!
						wp_reset_postdata();
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /#wrapper-usps -->
	<?php
}
