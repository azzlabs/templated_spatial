<?php $home_menu = is_home() && get_theme_mod('show_section_banner', false); ?>
<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('title'); wp_title(); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        
        <?php wp_head(); ?>
	</head>
	<body <?= $home_menu ? ' class="landing"' : '' ?>>

		<!-- Header -->
			<header id="header"<?= $home_menu ? ' class="alt"' : '' ?>>
				<h1><strong><a href="/"><?php bloginfo('name'); ?></a></strong> <?php bloginfo('description'); ?></h1>
				<nav id="nav">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'ul'
                        ));
                    ?> 
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>