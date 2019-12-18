<!DOCTYPE HTML>
<html>
	<head>        
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        
        <?php wp_head(); ?>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="/"><?php echo get_bloginfo('name'); ?></a></strong> <?php echo get_bloginfo('description'); ?></h1>
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