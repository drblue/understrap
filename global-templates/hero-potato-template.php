<?php
/**
 * Hero potato.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$section_background_color = get_field('hero_background_color');
$hero_image = get_field('hero_image');

?>

<section id="hero" style="background-color: <?php echo $section_background_color; ?>">
	<div class="container">
		<h1 class="text-center"><?php the_field('hero_title'); ?></h1>
		<h2 class="text-center"><?php the_field('hero_subtitle'); ?></h2>

		<img src="<?php echo $hero_image['url']; ?>" class="img-fluid">
	</div>
</section>
