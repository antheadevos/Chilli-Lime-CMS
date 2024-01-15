<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chilli_&_Lime
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/boxicons.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontello.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<section class="header">
    <div class="container">
        <div class="row justify-content-center align-items-center">
			<div class="col-lg-12 xs-center col-md-12 col-12 ">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php the_field('logo','option');?>" alt=""/></a>
                    <button class="navbar-toggler menu-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">
						<?php
						wp_nav_menu( array(
							'container'=> false,
							'menu_class'=> false, 
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'        => 'navbar-nav ml-auto',
							'list_item_class'  => 'nav-item',
							'link_class'   => 'nav-link '
						) );
						?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>