<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chilli_&_Lime
 */

?>
<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-12">
				<a href="<?php echo home_url();?>"><img src="<?php the_field('footer_logo','option');?>" alt="" /></a>
			</div>
			<div class="col-lg-10 pl-lg-5 mts ml-auto col-md-10 col-12">
				<div class="row">
					<div class="col-lg-8 col-md-9 col-12">
						<?php $locations = get_nav_menu_locations(); //get all menu locations
						$menu = wp_get_nav_menu_object($locations['footer-menu']);?>
						<h3><?php echo $menu->name;?></h3>
						<?php
						wp_nav_menu( array(
							'container'=> false,
							'menu_class'=> false, 
							'theme_location' => 'footer-menu',
							'menu_id'        => 'footer-menu',
							'menu_class'        => 'footer-menu',
						) );
						?>
					</div>
					<?php if( have_rows('social_media', 'option') ): ?>
					<?php while( have_rows('social_media', 'option') ): the_row(); ?>
					<div class="col-lg-4 social col-md-3 col-12">
						<h3><?php the_sub_field('title'); ?></h3>
						<ul>
							<?php if( have_rows('cta', 'option') ): ?>
							<?php while( have_rows('cta', 'option') ): the_row(); ?>
							<li><a href="<?php the_sub_field('url'); ?>" target="_blank"><i class="<?php the_sub_field('icon'); ?>"></i></a></li>
							<?php endwhile;?>
							<?php endif;?>
						</ul>
					</div>
					<?php endwhile;?>
					<?php endif;?>
					<div class="col-lg-12 copy col-md-12 col-12">
						<p><?php the_field('copyright_text','option');?></p>
					</div>
				</div>                
			</div>
		</div>
	</div>
</section>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>
<?php wp_footer(); ?>

</body>
</html>
