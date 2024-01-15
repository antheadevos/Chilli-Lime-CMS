<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Chilli_&_Lime
 */

get_header();
?>
<?php if( have_rows('404_banner','option') ): ?>
<?php while( have_rows('404_banner','option') ): the_row(); 
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
<section class="errorpage">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<h2><?php the_field('404_page_title','option');?></h2>
				<?php the_field('404page_content','option');?>
				<p><?php the_field('404_menu_title','option');?></p>
				<?php
				wp_nav_menu( array(
					'container'=> false,
					'menu_class'=> false, 
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'        => 'primary-menu',
					'list_item_class'  => 'nav-item',
					'link_class'   => 'nav-link '
				) );
				?>
			</div>
		</div>
	</div>
</section>
<!---<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'chilli-lime' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'chilli-lime' ); ?></p>

			<?php
			get_search_form();

			the_widget( 'WP_Widget_Recent_Posts' );
			?>

			<div class="widget widget_categories">
				<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'chilli-lime' ); ?></h2>
				<ul>
					<?php
					wp_list_categories(
						array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						)
					);
					?>
				</ul>
			</div>

			<?php
			
			$chilli_lime_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'chilli-lime' ), convert_smilies( ':)' ) ) . '</p>';
			the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$chilli_lime_archive_content" );

			the_widget( 'WP_Widget_Tag_Cloud' );
			?>

		</div>
	</section>

</main>--->

<?php
get_footer();
