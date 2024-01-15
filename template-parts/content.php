<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Chilli_&_Lime
 */

?>
<?php
if ( is_singular() ) :?>
<div class="col-lg-12 small-text-center col-sm-12 col-xs-12">
	<p><?php the_content();?></p>
</div>
<?php else :?>
<div class="col-lg-6 col-md-6 col-12">
	<a href="<?php the_permalink();?>" class="workbtn">
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<div class="img">
			<img class="w-100" src="<?php echo $thumb['0'];?>" alt="" />
		</div>
		<div class="text">
			<h4><?php the_title();?> <img class="arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrow-right.png" alt="" /></h4>
		</div>
	</a>
</div>
<?php endif; ?>