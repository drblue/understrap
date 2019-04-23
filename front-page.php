<?php
/**
 * The template for displaying the front page.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<!-- hero -->
<?php get_template_part( 'global-templates/hero-potato' ); ?>
<!-- end hero -->

<!-- usps -->
<?php get_template_part( 'global-templates/usps' ); ?>
<!-- end usps -->

<!-- portfolio -->
<?php get_template_part( 'global-templates/portfolio-items' ); ?>
<!-- end portfolio -->

<!-- languages -->
<?php get_template_part( 'global-templates/languages' ); ?>
<!-- end languages -->

<!-- contact -->
<?php get_template_part( 'global-templates/contact' ); ?>
<!-- end contact -->

<!-- page content -->
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'loop-templates/content', 'frontpage' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->
<!-- end page content -->

<?php get_footer(); ?>
