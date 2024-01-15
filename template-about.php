<?php
/**
* Template Name:  About 
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
<?php if( have_rows('about') ): ?>
<?php while( have_rows('about') ): the_row(); 
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$content = get_sub_field('content');
?>
<section class="about inner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-3 col-md-12 col-12">
				<div class="section-title">
					<h2><?php echo $title;?></h2>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="section-title">
					<h3 class="mt-0"><?php echo $sub_title;?></h3>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 mt-md-0 col-md-6 col-12">
				<div class="section-title">
					<?php echo $content;?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile;?>
<?php endif;?>
<?php if( have_rows('team') ): ?>
<?php while( have_rows('team') ): the_row(); 
$title = get_sub_field('title');
?>
<section class="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5 col-md-12 col-12">
				<div class="section-title">
					<h2><?php echo $title;?></h2>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if( have_rows('members') ): ?>
			<?php $mcounter = 1;?>
			<?php while( have_rows('members') ): the_row(); 
			$image = get_sub_field('image');
			$name = get_sub_field('name');
			$designation = get_sub_field('designation');
			?>
			<div class="col-lg-6 <?php if($mcounter%2==0) { ?> mt-4 mt-lg-0 mt-md-0 <?php } ?> col-md-6 col-12">
				<img class="w-100" src="<?php echo $image;?>" alt="" />
					<h4><?php echo $name;?></h4>
					<p><?php echo $designation;?></p>	
			</div>
			<?php $mcounter++;?>
			<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>
<?php endwhile;?>
<?php endif;?>	
<?php
get_footer();