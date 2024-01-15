<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h1>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'chilli-lime' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
			</div>
		</div>
	</div>
</section>
<section class="our-work single single-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">

				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">

					</h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div>
		</div>
	</div>
</section>
<?php
get_footer();
