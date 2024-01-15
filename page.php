<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Chilli_&_Lime
 */

get_header();
?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section class="page-banner" <?php if ( has_post_thumbnail() ) {?> style="background: url(<?php echo $thumb['0'];?>) 50% 50% no-repeat;background-size: cover;" <?php } ?>>
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="col-12 text-center">
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
</section>
<section class="our-work single single-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
