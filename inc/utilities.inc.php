<?php 
// Walker menu personalizzato
class Social_Nav_Walker extends Walker_Nav_Menu {
	// Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
		if (isset($item->classes))
			$output .= '<li class="' . implode(' ', array_slice($item->classes, 1)) . '"><a href="' . $item->url . '" class="icon ' .  $item->classes[0] . '" title="' . $item->title . '">'
				. $item->description . '</a>';
    }
}

// Utility sanitize
function theme_sanitize_checkbox($checked) { return ((isset($checked) && true == $checked) ? true : false); }
?>