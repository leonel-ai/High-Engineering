<?php
/*
* Template Name: Overview Page
*/

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();


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
	<div class="single-featured-image-header" style="background-image:  linear-gradient(to right, rgba(36,66,125,1) 0%,rgba(36,66,125,0.99) 1%,rgba(40,110,163,0.86) 15%,rgba(42,141,192,0.66) 37%,rgba(77,154,176,0.51) 54%,rgba(82,155,174,0.5) 55%,rgba(145,170,143,0.66) 69%,rgba(177,171,97,0.81) 83%,rgba(249,159,41,1) 100%), url(<?php echo $backgroundImg[0]; ?>);"><img src="/wp-content/uploads/2019/01/transparent.png" alt="<?php echo $imgAlt; ?>">
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

	
</article><!-- #post-<?php the_ID(); ?> -->
<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->
<?php if (is_page(124)){}else{ ?>
	<div class="vc_row wpb_row vc_row-fluid homeSection contactForm"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid containerRow"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h1>How Can We Help You?</h1>
      <p class="lead">Need professional services, fall protection solutions, or have a question?</p>

		</div>
	</div>
	<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
</div></div></div></div></div></div></div></div>
<?php } ?>

<?php
get_footer();
