<?php

	// wp_enqueue_style() | Function | WordPress Developer Resources
	// https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	function simpleandbeautifultheme_add_google_fonts() {
		
		//Load Google Fonts - Font-family: 'PT Sans', sans-serif;
		wp_enqueue_style( 'google-fonts-font-family-PT-Sans', 'https://fonts.googleapis.com/css2?family=PT+Sans&display=swap', false );

		//Load Google Fonts - Font-family: 'Karla', sans-serif;
		wp_enqueue_style( 'google-fonts-font-family-Karla', 'https://fonts.googleapis.com/css2?family=Karla&display=swap', false );

		//Load Google Fonts - Font-family: 'EB Garamond', serif;
		wp_enqueue_style( 'google-fonts-font-family-EB-Garamond', 'https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap', false );

	}

	add_action( 'wp_enqueue_scripts', 'simpleandbeautifultheme_add_google_fonts' );

	 // wp_enqueue_scripts | Hook | WordPress Developer Resources
	 // https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/	 
	function simpleandbeautifultheme_register_scripts() {
		
		//Loads jQuery CDN
		wp_enqueue_script('jQuery','https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
		
		//Loads Font Awesome CDN 
		wp_enqueue_script('font-awesome', "https://kit.fontawesome.com/35be336604.js");

	}

	add_action('wp_enqueue_scripts','simpleandbeautifultheme_register_scripts');
	
	// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL.
	// Here we use an online version of the css file.
	function add_normalize_CSS() {
		wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
	}

	// wp_enqueue_scripts | Hook | WordPress Developer Resources
	// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
	// Hook to the wp_enqueue_scripts action, and run the add_normalize_CSS function
	add_action( 'wp_enqueue_scripts', 'add_normalize_CSS' );

	// Register a new sidebar simply named 'sidebar'
	function add_widget_Support() {
		
		register_sidebar( array(
						'name'          => 'Sidebar',
						'id'            => 'sidebar',
						'description' => 'Appears on the right sidebar area',
						'class'         => '',
						'before_widget' => '<div class="sidebar-widget">',
						'after_widget' => '</div>',
						'before_title' => '<h4>',
						'after_title' => '</h4>',
		) );

		register_sidebar( array(
						'name'          => 'Footer Widget',
						'id'            => 'footer-widget',
						'description' => 'Appears in the footer area',
						'class'         => '',
						'before_widget' => '<div class="sidebar-widget">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2>',
						'after_title'   => '</h2>',
		) );

	}

	// Hook the widget initiation and run our function
	add_action( 'widgets_init', 'add_Widget_Support' );

	// Register a new navigation menu
	function add_Main_Nav() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}

	// Hook to the init action hook, run our navigation menu function
	add_action( 'init', 'add_Main_Nav' );

	//Add support for post featured image
	add_theme_support( 'post-thumbnails' );

	// Custom Logo | Theme Developer Handbook | WordPress Developer Resources
	// https://developer.wordpress.org/themes/functionality/custom-logo/
	function simpleandbeautifultheme_custom_logo_setup() {
		$defaults = array(
			'height'               => 100,
			'width'                => 150,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
		);

		add_theme_support( 'custom-logo', $defaults );
	}

	add_action( 'after_setup_theme', 'simpleandbeautifultheme_custom_logo_setup' );

	// get_template_directory() | Function | WordPress Developer Resources
	// https://developer.wordpress.org/reference/functions/get_template_directory/
	// Returns an absolute server path (eg: /home/user/public_html/wp-content/themes/my_theme), not a URI.
	require_once get_template_directory() . '/inc/customizer.php';
	require_once get_template_directory() . '/inc/extras.php';

?>