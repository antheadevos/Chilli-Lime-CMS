<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Chilli_&_Lime
 */

get_header();
?>
<section class="page-banner" style="background: url(<?php the_field('banner_image');?>) 50% 50% no-repeat;background-size: cover;">
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="col-12 text-center">
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
</section>
<section class="our-work single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<h2><?php the_field('content_title');?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 img col-md-6 col-12">
				<?php if( have_rows('images') ): ?>
				<?php while( have_rows('images') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<img class="w-100" src="<?php echo $image;?>" alt="" />
				<?php endwhile;?>
				<?php endif;?>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<?php the_field('content');?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
