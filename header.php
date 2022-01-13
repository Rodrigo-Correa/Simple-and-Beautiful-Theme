<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>

		<title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<!-- Prints scripts or data in the head tag on the front end -->
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header class="flex-container">
		
			<div class="flex-item-left logo">

				<?php

					//Displays the website logo with a link to the homepage, or if it doesn't have a logo, it displays the website title with a link to the homepage
					// Custom Logo | Theme Developer Handbook | WordPress Developer Resources
					// https://developer.wordpress.org/themes/functionality/custom-logo/
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

					if ( has_custom_logo() ) {
						echo '<a href="' . esc_url( home_url( '/' ) ) . '"> <img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"> </a>';
					} else {
						echo '<h1> <a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo('name') . '</a> </h1>';
					}

				?>

			</div>

			<div class="flex-item-right">

				<ul class="social-icon">

					<?php do_action('header_social_media_icons'); ?>

				</ul>

			</div>

		</header>

		<nav class="topnav">

			<ul>

				<!-- Displays the Header Menu -->
				<?php wp_nav_menu( array( 

				'container'  => '',
				'items_wrap' => '%3$s',
				'header-menu' => 'header-menu' ) ); ?>

			</ul>

			<div class="search-container">
			
				<?php get_search_form(); ?>

			</div>

		</nav><!-- .primary-menu-wrapper -->
