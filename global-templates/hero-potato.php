<?php
/**
 * Hero for Front Page
 */
?>

<section id="front-page-hero">
	<div class="container">
		<h1><?php the_field('hero_title'); ?></h1>
		<h2><?php the_field('hero_subtitle'); ?></h2>

		<img src="<?php the_field('hero_image')['url']; ?>" class="img-fluid">
	</div>
</section>
