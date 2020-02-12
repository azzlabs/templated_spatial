<?php get_template_part('header'); ?>
        <?php if (get_theme_mod('show_section_banner', false)) { ?>
        <!-- Banner -->
        <section id="banner">
            <h2><?= get_theme_mod('section_banner_title', false) ?></h2>
            <p><?= get_theme_mod('section_banner_subtitle', false) ?></p>
            <ul class="actions">
                <li><a href="<?= get_theme_mod('section_banner_button_link', false) ?>" class="button special big"><?= get_theme_mod('section_banner_button_name', false) ?></a></li>
            </ul>
        </section>
        
        <?php } if (get_theme_mod('show_section_content', false)) { ?>
        <!-- One / home content -->
        <section id="one" class="wrapper style1">
            <div class="container">
                <?php get_template_part('loop'); ?>
            </div>
        </section>

        <?php } if (get_theme_mod('show_section_widgets', false)) { ?>
        <!-- Two / widgets -->
        <section id="two" class="wrapper style2 special">
            <div class="container">
                <?php dynamic_sidebar('homepage_widget'); ?>
            </div>
        </section>

        <?php } if (get_theme_mod('show_section_features', false)) { ?>
        <!-- Three / features -->
        <section id="three" class="wrapper style1">
            <div class="container">
                <header class="major special">
                    <h2><?= get_theme_mod('section_features_title', false) ?></h2>
                    <p><?= get_theme_mod('section_features_subtitle', false) ?></p>
                </header>
                <div class="feature-grid">
                    <?php
                    $loop = new WP_Query(['post_type' => 'features']);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="feature">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="image rounded">
                                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>"/>
                                    </div>
                                <?php } ?>
                                <div class="content">
                                    <header>
                                        <h4><?= get_the_title(); ?></h4>
                                    </header>
                                    <?php the_content(); ?>    
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

        <?php } if (get_theme_mod('show_section_call_to_action', false)) { ?>
        <!-- Four / hero -->
        <section id="four" class="wrapper style3 special">
            <div class="container">
                <header class="major">
                    <h2><?= get_theme_mod('section_call_to_action_title', false) ?></h2>
                    <p><?= get_theme_mod('section_call_to_action_subtitle', false) ?></p>
                </header>
                <ul class="actions">
                    <li><a href="<?= get_theme_mod('section_call_to_action_button_link', false) ?>" class="button special big"><?= get_theme_mod('section_call_to_action_button_name', false) ?></a></li>
                </ul>
            </div>
        </section>
        <?php } ?>

<?php get_template_part('footer'); ?>