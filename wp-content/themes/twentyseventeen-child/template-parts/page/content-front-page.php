<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php
	if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">

			<!--//BEE 20240723 -->
			<table style="margin-top: -70px;margin-bottom: -10px;">
				<tr style="">
					<td style=""><img src="/wp-content/uploads/2024/07/ayndrilla_sm.jpg" width="100%" height="auto" alt=""></td>
					<td style="padding-left: 188px;border: 0px solid red;">&nbsp;</td>
					<td style="padding: 0;font-weight: bold;text-align: left; vertical-align: top;margin">I’m Ayndrilla (An-drill-ah, she/her), a humanistic counsellor and a member of the BACP offering sessions in central Brighton.  I can offer you the time and space to explore whatever is happening for you right now.</td>
				</tr>
			</table>

			<header class="entry-header">

				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<?php twentyseventeen_edit_link( get_the_ID() ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">

				<?php
					the_content(
						sprintf(
							/* translators: %s: Post title. Only visible to screen readers. */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
							get_the_title()
						)
					);
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
							'after'  => '</div>',
						)
					);
					?>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-<?php the_ID(); ?> -->
