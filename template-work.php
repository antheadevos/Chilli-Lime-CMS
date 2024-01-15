<?php
/**
* Template Name:  Work 
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package Chilli_&_Lime
*/
get_header(); ?>
<?php if( have_rows('banner') ): ?>
<?php while( have_rows('banner') ): the_row(); 
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
			$args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
			$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-lg-6 col-md-6 col-12">
				<a href="<?php the_permalink();?>" class="workbtn">
					<div class="img">
						<img class="w-100" src="<?php the_field('image');?>" alt="" />
					</div>
					<div class="text">
						<h4><?php the_title();?> <img class="arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrow-right.png" alt="" /></h4>
					</div>
				</a>
			</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
			<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php
get_footer();