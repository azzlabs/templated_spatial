<?php
// Registro i menu
register_nav_menus(['primary' => 'Menu principale', 
                    'footer_credits' => 'Crediti footer', 
                    'footer_social' => 'Social footer']);
// Aggiungo script e stili
add_action('wp_enqueue_scripts', 'template_assets');
// Registro le aree widget
add_action('widgets_init', 'template_widgets');
// Registro impostazioni tema
add_action('customize_register', 'customize_register');
// Inizializzo i custom post
add_action('init', 'features_custom_post');
// Funzioni tema
add_theme_support('post-thumbnails');

function template_assets() {
	// Stili
	wp_enqueue_style('main', get_stylesheet_uri());
	// Custom CSS
	$banner_overlay = get_theme_mod('section_banner_background_overlay') ? 'url("' . get_template_directory_uri() . '/images/overlay.png"), ' : '';
	$banner_cta = get_theme_mod('section_call_to_action_background_overlay') ? 'url("' . get_template_directory_uri() . '/images/overlay.png"), ' : '';
	$custom_css = '#banner { 
		background-image: ' . $banner_overlay . 'url("' . get_theme_mod('section_banner_background') . '");
	}
	.wrapper.style3 { 
		background-image: ' . $banner_cta . 'url("' . get_theme_mod('section_call_to_action_background') . '");
	}';
	wp_add_inline_style('main', $custom_css);

	// Script
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], false, true);
	wp_enqueue_script('skel', get_template_directory_uri() . '/assets/js/skel.min.js', [], false, true);
	wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', [], false, true);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
function template_widgets() {
	register_sidebar([
		'name'          => 'Homepage widget',
		'id'            => 'homepage_widget',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);
}

// Includo altre funzioni
include_once "inc/cutomize_register.inc.php";
include_once "inc/custom_post.inc.php";
include_once "inc/utilities.inc.php";
?>