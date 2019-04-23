<?php
/**
 * Contact Section for Front Page
 */

$contact_form_id = get_field('contact_form_id');

if (!$contact_form_id) {
	return;
}

?>

<section id="front-page-contact">
	<div class="container">
		<h1><?php the_field('contact_title'); ?></h1>

		<div id="contact-form-wrapper">
			<?php the_field('contact_form'); ?>
			<?php //echo do_shortcode("[contact-form-7 id={$contact_form_id}]"); ?>
		</div>
	</div>
</section>
