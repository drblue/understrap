<?php
/**
 * The template for displaying a single Portfolio post.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main col-md-9" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content-us_portfolio', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<aside class="col-md-3">
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
			</aside>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
