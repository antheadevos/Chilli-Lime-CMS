<?php
/**
* Template Name:  Home 
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
$logo = get_sub_field('logo');
?>
<section class="banner" style="background: url(<?php echo $background_image;?>) 50% 50% no-repeat;background-size: cover;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9 text-center text-lg-right text-md-right ml-auto col-md-10 col-12">
				<img class="logo" src="<?php echo $logo;?>" alt="">
				<h2><?php echo $title;?></h2>
			</div>
		</div>
	</div>
</section>
<?php endwhile;?>
<?php endif;?>
<?php if( have_rows('about') ): ?>
<?php while( have_rows('about') ): the_row(); 
$image = get_sub_field('image');
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$content = get_sub_field('content');
$button_text = get_sub_field('button_text');
$button_url = get_sub_field('button_url');
?>
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img class="w-100" src="<?php echo $image;?>" alt="">
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 mt-md-0 col-md-6 col-12">
				<div class="section-title">
					<h2><?php echo $title;?></h2>
					<h3><?php echo $sub_title;?></h3>
					<div class="line"></div>
					<?php echo $content;?>
				</div>
				<div class="section-title text-right">
					<a class="btn-standard" href="<?php echo $button_url;?>"><?php echo $button_text;?> <img src="<?php echo get_template_directory_uri();?>/assets/img/arrow-right.png" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile;?>
<?php endif;?>
<?php if( have_rows('what_we_do') ): ?>
<?php while( have_rows('what_we_do') ): the_row(); 
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
?>
<section class="what-we-do">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="section-title">
					<h2><?php echo $title;?></h2>
					<h3><?php echo $sub_title;?></h3>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<div class="row mbs">
			<?php if( have_rows('points') ): ?>
			<?php $pcounter = 1;?>
			<?php while( have_rows('points') ): the_row(); 
			$title = get_sub_field('title');
			$content = get_sub_field('content');
			?>
			<div class="col-lg-4 col-md-4 col-12">
				<h4><?php echo $title;?></h4>
				<p><?php echo $content;?></p>
			</div>
			<?php if($pcounter%3==0) { ?>
		</div>
		<div class="row mbs">
			<?php } ?>
			<?php $pcounter++;?>
			<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>
<?php endwhile;?>
<?php endif;?>
<section class="latest-work">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-3 col-md-6 col-12">
				<div class="section-title">
					<h2><?php the_field('work_title');?></h2>
					<div class="line mt-5"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 p-0 col-md-12 col-12">
				<div class="owl-carousel owl-theme work-carousel">
					<?php 
					$args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
					$the_query = new WP_Query( $args ); 
					?>
					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="item">
						<a href="<?php the_permalink();?>"><img class="w-100" src="<?php the_field('image');?>" alt="" /></a>
					</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
					<?php else:  ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-right col-md-12 col-12">
				<div class="owl-theme normal-text mt-2">
					<div class="owl-controls  d-flex align-items-center justify-content-end">
						<div class="custom-nav owl-nav">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if( have_rows('brands') ): ?>
<?php while( have_rows('brands') ): the_row(); 
$title = get_sub_field('title');
?>
<section class="brands">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="section-title">
					<h2><?php echo $title;?></h2>
					<div class="line mt-4"></div>
				</div>
			</div>
		</div>
		<div class="row mbs text-center row-cols-lg-5 row-cols-1 row-cols-md-5">
			<?php if( have_rows('logos') ): ?>
			<?php $lcounter = 1;?>
			<?php while( have_rows('logos') ): the_row(); 
			$image = get_sub_field('image');
			?>
			<div class="col">
				<img src="<?php echo $image;?>" alt="" />
			</div>
			<?php if($lcounter%5==0) { ?>
		</div>
		<div class="row mbs text-center row-cols-lg-5 row-cols-1 row-cols-md-5">
			<?php } ?>
			<?php $lcounter++;?>
			<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>
<?php endwhile;?>
<?php endif;?>	
<?php
get_footer();
