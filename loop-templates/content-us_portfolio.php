<?php
	$logo = get_field('logo');
?>
<div class="wrapper-portfolio col-md-6 col-lg-4">
	<article class="portfolio">
		<header>
			<?php if ($logo) : ?>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $logo['url']; ?>" class="img-fluid">
				</a>
			<?php endif; ?>

			<h1><?php the_title(); ?></h1>
		</header>

		<main>
			<?php the_excerpt(); ?>
		</main>

		<footer>
			<?php
				if ($client = get_field('client')) {
					printf(__('<div class="client">Client: %s</div>', 'understrap'), $client);
				}
			?>

			<div class="branch">
				<?php
					the_terms(
						get_the_ID(),
						'us_portfolio_branch',
						__('Branch: ', 'understrap')
					);
				?>
			</div><!-- /.branch -->
		</footer>
	</article>
</div>
