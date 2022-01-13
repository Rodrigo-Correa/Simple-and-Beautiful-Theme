<?php

	function simpleandbeautifultheme_customizer($wp_customize) {

		$wp_customize->add_section(
			'social_icons_section',
			array(
				'title'	=> __( 'Social Media Icons', 'simpleandbeautifultheme' ),
				 'description' => 'Add the URL for each of your social profiles.'
			)
		);

		$wp_customize->add_setting(
			'social_icon_facebook',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			'social_icon_facebook',
			array(
				'settings'		=> 'social_icon_facebook',
				'section'		=> 'social_icons_section',
				'type'			=> 'url',
				'label'			=> __( 'Facebook', 'simpleandbeautifultheme' )
			)
		);

		$wp_customize->add_setting(
			'social_icon_twitter',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			'social_icon_twitter',
			array(
				'settings'		=> 'social_icon_twitter',
				'section'		=> 'social_icons_section',
				'type'			=> 'url',
				'label'			=> __( 'Twitter', 'simpleandbeautifultheme' )
			)
		);

		$wp_customize->add_setting(
			'social_icon_linkedin',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			'social_icon_linkedin',
			array(
				'settings'		=> 'social_icon_linkedin',
				'section'		=> 'social_icons_section',
				'type'			=> 'url',
				'label'			=> __( 'Linkedin', 'simpleandbeautifultheme' )
			)
		);

		$wp_customize->add_setting(
			'social_icon_youtube',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			'social_icon_youtube',
			array(
				'settings'		=> 'social_icon_youtube',
				'section'		=> 'social_icons_section',
				'type'			=> 'url',
				'label'			=> __( 'Youtube', 'simpleandbeautifultheme' )
			)
		);

		$wp_customize->add_setting(
			'social_icon_instagram',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			'social_icon_instagram',
			array(
				'settings'		=> 'social_icon_instagram',
				'section'		=> 'social_icons_section',
				'type'			=> 'url',
				'label'			=> __( 'Instagram', 'simpleandbeautifultheme' )
			)
		);

		$wp_customize->add_setting(
		'social_icon_github',
		array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			'social_icon_github',
			array(
				'settings'		=> 'social_icon_github',
				'section'		=> 'social_icons_section',
				'type'			=> 'url',
				'label'			=> __( 'Github', 'simpleandbeautifultheme' )
			)
		);

	}

	add_action('customize_register', 'simpleandbeautifultheme_customizer');

?>