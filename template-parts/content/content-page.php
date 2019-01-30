<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
$bottomBannerImage = get_field('bottombannerimage');
$callouts_background_image = get_field('callouts_background_image');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && !is_page(18) ) ) && has_post_thumbnail( get_queried_object_id() ) ):
		$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	$imgAlt = get_post_meta( $imgID, '_wp_attachment_image_alt', true );
	?>
	<div class="single-featured-image-header" style="background-image:  linear-gradient(to right, rgba(36,66,125,1) 0%,rgba(36,66,125,0.99) 1%,rgba(40,110,163,0.86) 15%,rgba(42,141,192,0.66) 37%,rgba(77,154,176,0.51) 54%,rgba(82,155,174,0.5) 55%,rgba(145,170,143,0.66) 69%,rgba(177,171,97,0.81) 83%,rgba(229,184,19,1) 100%), url(<?php echo $backgroundImg[0]; ?>);"><img src="/wp-content/uploads/2019/01/transparent.png" alt="<?php echo $imgAlt; ?>">
	<div class="pageTitle">
		<?php echo the_title();?>
		</div>
	</div><!-- .single-featured-image-header -->

	<?php
	endif; ?>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<!--<header class="entry-header">
		<?php //get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>-->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php if($bottomBannerImage){ ?>
	<div class="bottomBannerImageContainer" style="background-image: url('<?php echo $bottomBannerImage ?>'); background-size: cover; height: 288px;"></div>

<?php } ?>
	
<div class="vc_row wpb_row vc_row-fluid homeSection testimonials"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid containerRow"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<div class="bg-wordBubble"></div>
<h2>WHAT OUR CLIENTS ARE SAYING</h2>
<div class="lgx-carousel-section"><?php echo do_shortcode('[lgx-carousel]'); ?></div>
<p><a class="orangeButton yellowButton" href="#">Read More</a></p>

		</div>
	</div>
</div></div></div></div></div></div></div></div>
<div class="vc_row wpb_row vc_row-fluid homeSection"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid containerRow"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h1>How Can We Help You?</h1>
<p>Need professional services, fall protection solutions, or have a question?</p>

		</div>
	</div>
	<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
</div></div></div></div></div></div></div></div>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
