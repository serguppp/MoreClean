<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moreclean
 */

get_header();
?>

	<section id="primary">
		<main id="main">

			<?php
				get_template_part( 'template-parts/content/content', 'page' );
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
