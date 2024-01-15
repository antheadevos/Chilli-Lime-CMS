<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Chilli_&_Lime
 */

get_header();
?>
<?php if( have_rows('news_banner','option') ): ?>
<?php while( have_rows('news_banner','option') ): the_row(); 
$background_image = get_sub_field('background_image');
$title = get_sub_field('title');
?>
<section class="page-banner" style="background: url(<?php echo $background_image;?>) 50% 50% no-repeat;background-size: cover;">
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="col-12 text-center">
				<h1><?php echo $title;?></h1>
			</div>
		</div>
	</div>
</section>
<?php endwhile;?>
<?php endif;?>
<section class="our-work">
	<div class="container">
		<div class="row">

			<?php
			if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
			the_post();

			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part( 'template-parts/content', get_post_type() );

			endwhile;


			else :

			get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</div>
		<div class="row mt-5">
			<div class="col-12 text-center">
				<?php wpbeginner_numeric_posts_nav(); ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
