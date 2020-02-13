<?php
function customize_register($wp_customize) {
	// Registrazione controlli sezione impostazioni homepage
	$wp_customize->add_setting('section_banner_title', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_banner_subtitle', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_banner_button_name', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_banner_button_link', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_banner_background', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_banner_background_overlay', ['transport' => 'refresh', 'sanitize_callback' => 'theme_sanitize_checkbox']);

	$wp_customize->add_setting('section_features_title', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_features_subtitle', ['transport' => 'refresh']);

	$wp_customize->add_setting('section_call_to_action_title', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_call_to_action_subtitle', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_call_to_action_button_name', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_call_to_action_button_link', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_call_to_action_background', ['transport' => 'refresh']);
	$wp_customize->add_setting('section_call_to_action_background_overlay', ['transport' => 'refresh', 'sanitize_callback' => 'theme_sanitize_checkbox']);

	$wp_customize->add_setting('show_section_banner', ['transport' => 'refresh', 'sanitize_callback' => 'theme_sanitize_checkbox']);
	$wp_customize->add_setting('show_section_content', ['transport' => 'refresh', 'sanitize_callback' => 'theme_sanitize_checkbox']);
	$wp_customize->add_setting('show_section_widgets', ['transport' => 'refresh', 'sanitize_callback' => 'theme_sanitize_checkbox']);
	$wp_customize->add_setting('show_section_features', ['transport' => 'refresh', 'sanitize_callback' => 'theme_sanitize_checkbox']);
	$wp_customize->add_setting('show_section_call_to_action', ['transport' => 'refresh', 'sanitize_callback' => 'theme_sanitize_checkbox']);

	// Pannello impostazioni e sezioni homepage nel panello customize
	$wp_customize->add_panel('sezioni_homepage', array(
		'title'             => __('Sezioni Homepage', 'templated_spatial'), 
		'priority'          => 71,
	));
	$wp_customize->add_section('section_banner', array(
		'title'             => __('Sezione banner', 'templated_spatial'), 
		'priority'          => 10,
		'panel'				=> 'sezioni_homepage'
	));
	$wp_customize->add_section('section_features', array(
		'title'             => __('Sezione features', 'templated_spatial'), 
		'priority'          => 20,
		'panel'				=> 'sezioni_homepage'
	));
	$wp_customize->add_section('section_call_to_action', array(
		'title'             => __('Sezione call-to-action', 'templated_spatial'), 
		'priority'          => 30,
		'panel'				=> 'sezioni_homepage'
	));
	$wp_customize->add_section('sezione_home_others', array(
		'title'             => __('Altre sezioni', 'templated_spatial'), 
		'priority'          => 40,
		'panel'				=> 'sezioni_homepage'
	));

	// Controlli sezione impostazioni homepage
	// -- Sezione banner
	$wp_customize->add_control('show_section_banner', array(
		'label'             => __('Mostra sezione banner', 'templated_spatial'),
		'type'				=> 'checkbox',
		'section'           => 'section_banner'
	));
	$wp_customize->add_control('section_banner_title', array(
		'label'             => __('Titolo sezione', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_banner'
	));
	$wp_customize->add_control('section_banner_subtitle', array(
		'label'             => __('Sottotitolo sezione', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_banner'
	));
	$wp_customize->add_control('section_banner_button_name', array(
		'label'             => __('Testo bottone', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_banner'
	));
	$wp_customize->add_control('section_banner_button_link', array(
		'label'             => __('Link bottone', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_banner'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_banner_background', array(
		'label'             => __('Sfondo della sezione', 'templated_spatial'),
		'section'           => 'section_banner'
	)));
	$wp_customize->add_control('section_banner_background_overlay', array(
		'label'             => __('Mostra overlay sfondo banner', 'templated_spatial'),
		'type'				=> 'checkbox',
		'section'           => 'section_banner'
	));

	// -- Sezione features
	$wp_customize->add_control('show_section_features', array(
		'label'             => __('Mostra la sezione features', 'templated_spatial'),
		'description'		=> __('&Egrave; possibile aggiungere le features tramite il custom post "features"', 'templated_spatial'),
		'type'				=> 'checkbox',
		'section'           => 'section_features'
	));
	$wp_customize->add_control('section_features_title', array(
		'label'             => __('Titolo sezione', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_features'
	));
	$wp_customize->add_control('section_features_subtitle', array(
		'label'             => __('Sottotitolo sezione', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_features'
	));

	// -- Sezione call-to-action
	$wp_customize->add_control('show_section_call_to_action', array(
		'label'             => __('Mostra sezione call-to-action', 'templated_spatial'),
		'type'				=> 'checkbox',
		'section'           => 'section_call_to_action'
	));
	$wp_customize->add_control('section_call_to_action_title', array(
		'label'             => __('Titolo sezione', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_call_to_action'
	));
	$wp_customize->add_control('section_call_to_action_subtitle', array(
		'label'             => __('Sottotitolo sezione', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_call_to_action'
	));
	$wp_customize->add_control('section_call_to_action_button_name', array(
		'label'             => __('Testo bottone', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_call_to_action'
	));
	$wp_customize->add_control('section_call_to_action_button_link', array(
		'label'             => __('Link bottone', 'templated_spatial'),
		'type'				=> 'text',
		'section'           => 'section_call_to_action'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_call_to_action_background', array(
		'label'             => __('Sfondo della sezione', 'templated_spatial'),
		'section'           => 'section_call_to_action'
	)));
	$wp_customize->add_control('section_call_to_action_background_overlay', array(
		'label'             => __('Mostra overlay sfondo call-to-action', 'templated_spatial'),
		'type'				=> 'checkbox',
		'section'           => 'section_call_to_action'
	));

	// -- Sezione content
	$wp_customize->add_control('show_section_content', array(
		'label'             => __('Mostra sezione contenuto', 'templated_spatial'),
		'description'		=> __('Mostra il contenuto della homepage (se selezionato tipo "con articoli")', 'templated_spatial'),
		'type'				=> 'checkbox',
		'section'           => 'sezione_home_others'
	));

	// -- Sezione widgets
	$wp_customize->add_control('show_section_widgets', array(
		'label'             => __('Mostra sezione widgets', 'templated_spatial'),
		'description'		=> __('&Egrave; possibile modificare il contenuto della sezione tramite la pagina "Widget" in personalizza.', 'templated_spatial'),
		'type'				=> 'checkbox',
		'section'           => 'sezione_home_others'
	));
}
?>