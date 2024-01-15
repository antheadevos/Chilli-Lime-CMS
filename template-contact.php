<?php
/**
* Template Name:  Contact 
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
<section class="contact-info">
	<div class="container">
		<?php if( have_rows('form') ): ?>
		<?php while( have_rows('form') ): the_row(); 
		$sub_title = get_sub_field('sub_title');
		$title = get_sub_field('title');
		?>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<h2><?php echo $title;?></h2>
			</div>
		</div>
		<?php endwhile;?>
		<?php endif;?>
		<div class="row">
			<?php if( have_rows('form') ): ?>
			<?php while( have_rows('form') ): the_row(); 
			$sub_title = get_sub_field('sub_title');
			$title = get_sub_field('title');
			?>
			<div class="col-lg-8 col-md-7 col-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<h3><?php echo $sub_title;?></h3>
					</div>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="517803d" title="Contact form" html_class="bg"]');?>
			</div>
			<?php endwhile;?>
			<?php endif;?>
			<?php if( have_rows('contact_details') ): ?>
			<?php while( have_rows('contact_details') ): the_row(); 
			$phone = get_sub_field('phone');
			$title = get_sub_field('title');
			$email = get_sub_field('email');
			?>
			<div class="col-lg-4 col-md-5 col-12">
				<h3><?php echo $title;?></h3>
				<p>
					<?php if( have_rows('locations') ): ?>
					<?php while( have_rows('locations') ): the_row(); 
					$title = get_sub_field('title');
					?>
					<?php echo $title;?><br/>
					<?php endwhile;?>
					<?php endif;?>
				</p>
				<p class="link mt-5"><a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
				<p class="link"><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></p>
				<ul class="social">
					<?php if( have_rows('social_media') ): ?>
					<?php while( have_rows('social_media') ): the_row(); 
					$icon = get_sub_field('icon');
					$url = get_sub_field('url');
					?>
					<li><a href="<?php echo $url;?>" target="_blank"><i class="<?php echo $icon;?>"></i></a></li>
					<?php endwhile;?>
					<?php endif;?>
				</ul>
			</div>
			<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>
<?php
get_footer();