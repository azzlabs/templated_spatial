<?php
    if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="post">

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-thumbnail">
                <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="<?php the_title(); ?>" />
			</a>
		<?php endif; ?>
		<!-- ./post thumbnail -->

		<div class="text-holder">
            <div class="post-header">
                <?php if (!is_page()) { ?>
                <div class="post-meta">
                    <time class="post-date"><?php the_time(get_option('date_format')); ?></time>
                </div>
                <!-- ./post-meta -->
                <?php } ?>
                <?php if (is_archive()) { ?>
                    <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <?php } else { ?>
                    <h2 class="post-title"><?php the_title(); ?></h2>
                <?php } ?>
            </div>
            <!-- ./post-header -->
            <div class="post-content">
                <?php if (is_archive()) { the_excerpt(); } else { the_content(); } ?>
            </div>
            <!-- ./post-content -->
            <footer class="post-footer">
                <?php if (is_archive()) { ?>
                    <p class="read-more">
                        <a href="<?php the_permalink() ?>"><?php _e( 'Continua a leggere', 'templated_spatial' ); ?> <i class="fa fa-angle-double-right"></i></a>
                    </p>
                <?php } ?>
                <?php
                    edit_post_link('<i class="fa fa-pencil"></i> ' . __( 'Modifica', 'templated_spatial' ), 
                    '<span class="edit-link">', '</span>', null, 'post-edit-link' );
                ?>
            </footer>
            <!-- ./post-footer -->
        </div>
        <!-- ./text-holder -->

	</article>
	<!-- ./article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e('Nessun articolo inserito.', 'templated_spatial'); ?></h2>
	</article>
	<!-- ./article -->

<?php endif; ?>
