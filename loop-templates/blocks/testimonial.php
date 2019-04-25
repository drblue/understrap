<?php
/**
 * Testimonial Block Template
 *
 * loop-templates/blocks/testimonial.php
 */

$image = get_field('image');
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>

<div id="testimonial-<?php echo $block['id']; ?>" class="testimonial">
	<blockquote class="blockquote">
		<div class="testimonial-text">
			<span class="fa fa-quote-left"></span><?php the_field('testimonial'); ?><span class="fa fa-quote-right"></span>
		</div>
		<div class="testimonial-author">
			<?php the_field('author'); ?>
		</div>
		<div class="testimonial-role">
			<?php the_field('role'); ?>
		</div>
	</blockquote>
	<?php if ($image): ?>
		<div class="testimonial-image">
			<?php echo wp_get_attachment_image($image, 'medium'); ?>
		</div>
	<?php endif; ?>
</div>

<style>
	#testimonial-<?php echo $block['id']; ?> {
		background-color: <?php echo $background_color; ?>;
		color: <?php echo $text_color; ?>;
	}
</style>
