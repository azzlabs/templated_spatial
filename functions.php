<?php
// Registro i menu
register_nav_menus(['primary' => 'Menu principale', 
                    'footer_credits' => 'Crediti footer', 
                    'footer_social' => 'Social footer']);
// Aggiungo script e stili
add_action('wp_enqueue_scripts', 'template_assets');
// Registro le aree widget
add_action('widgets_init', 'template_widgets');

function template_assets() {
	// Stili
	// wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css');
	wp_enqueue_style('main', get_stylesheet_uri());
	// Script
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], false, true);
	wp_enqueue_script('skel', get_template_directory_uri() . '/assets/js/skel.min.js', [], false, true);
	wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', [], false, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
function template_widgets() {
	register_sidebar([
		'name'          => 'Widget',
		'id'            => 'widget',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);
}

class Social_Nav_Walker extends Walker_Nav_Menu {
	// Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
		if (isset($item->classes))
			$output .= '<li class="' . implode(' ', array_slice($item->classes, 1)) . '"><a href="' . $item->url . '" class="icon ' .  $item->classes[0] . '" title="' . $item->title . '">'
				. $item->description . '</a>';
    }
}
?>