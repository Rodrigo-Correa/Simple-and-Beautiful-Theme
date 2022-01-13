<?php 

	if( !function_exists('header_social_links') ) {

		function header_social_links() {

			$facebook = get_theme_mod('social_icon_facebook');
			$twitter = get_theme_mod('social_icon_twitter');
			$linkedin = get_theme_mod('social_icon_linkedin');
			$youtube = get_theme_mod('social_icon_youtube');
			$instagram = get_theme_mod('social_icon_instagram');
			$github = get_theme_mod('social_icon_github');

			if($facebook)
				echo '<li><a href="'.esc_url( $facebook ).'" target="_blank"><i class="fa fa-facebook"></i></a></li>';

			if($twitter)
				echo '<li><a href="'.esc_url( $twitter ).'" target="_blank"><i class="fa fa-twitter"></i></a></li>';

			if($linkedin)
				echo '<li><a href="'.esc_url( $linkedin ).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';

			if($youtube)
				echo '<li><a href="'.esc_url( $youtube ).'" target="_blank"><i class="fa fa-youtube"></i></a></li>';

			if($instagram)
				echo '<li><a href="'.esc_url( $instagram ).'" target="_blank"><i class="fa fa-instagram"></i></a></li>';			
			
			if($github)
				echo '<li><a href="'.esc_url( $github ).'" target="_blank"><i class="fa fa-github"></i></a></li>';			

		}

	}

	function footer_social_links() {

		$facebook = get_theme_mod('social_icon_facebook');
		$twitter = get_theme_mod('social_icon_twitter');
		$linkedin = get_theme_mod('social_icon_linkedin');
		$youtube = get_theme_mod('social_icon_youtube');
		$instagram = get_theme_mod('social_icon_instagram');
		$github = get_theme_mod('social_icon_github');

		if($facebook)
			echo '<li><a href="'.esc_url( $facebook ).'" target="_blank"><i class="fa fa-facebook"></i></a></li>';

		if($twitter)
			echo '<li><a href="'.esc_url( $twitter ).'" target="_blank"><i class="fa fa-twitter"></i></a></li>';

		if($linkedin)
			echo '<li><a href="'.esc_url( $linkedin ).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';

		if($youtube)
			echo '<li><a href="'.esc_url( $youtube ).'" target="_blank"><i class="fa fa-youtube"></i></a></li>';

		if($instagram)
			echo '<li><a href="'.esc_url( $instagram ).'" target="_blank"><i class="fa fa-instagram"></i></a></li>';		

		if($github)
			echo '<li><a href="'.esc_url( $github ).'" target="_blank"><i class="fa fa-github"></i></a></li>';

	}

	add_action( 'header_social_media_icons', 'header_social_links', 10);
	
	add_action( 'footer_social_media_icons', 'footer_social_links');

?>