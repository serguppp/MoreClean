<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both
 * the current comments and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moreclean
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments">

	<?php
	if ( have_comments() ) :
		?>
		<h2>
			<?php
			$moreclean_comment_count = get_comments_number();
			if ( '1' === $moreclean_comment_count ) {
				// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
				printf(
					/* translators: 1: title. */
					esc_html__( 'One comment on &ldquo;%1$s&rdquo;', 'moreclean' ),
					get_the_title()
				);
				// phpcs:enable WordPress.Security.EscapeOutput.OutputNotEscaped
			} else {
				// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $moreclean_comment_count, 'comments title', 'moreclean' ) ),
					number_format_i18n( $moreclean_comment_count ),
					get_the_title()
				);
				// phpcs:enable WordPress.Security.EscapeOutput.OutputNotEscaped
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol>
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'callback'   => 'moreclean_html5_comment',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

		// If there are existing comments, but comments are closed, display a
		// message.
		if ( ! comments_open() ) :
			?>
			<p><?php esc_html_e( 'Comments are closed.', 'moreclean' ); ?></p>
			<?php
		endif;

	endif;

	comment_form();
	?>

</div><!-- #comments -->
