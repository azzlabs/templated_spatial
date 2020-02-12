<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="article-content">

		<div class="text-holder">
            <!-- post thumbnail -->
            <?php if (!(is_page() || is_single()) && has_post_thumbnail()) : // Check if thumbnail exists ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-thumbnail-link">
                        <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="<?php the_title(); ?>" />
                    </a>
                </div>
            <?php endif; ?>
            <!-- ./post thumbnail -->
        
            <div class="post-header">
                <?php if (!is_page()) { ?>
                <div class="post-meta">
                    <span class="posted-calendar">
                        <a href="#"><i class="fa fa-calendar"></i></a> <a href="#"><time class="post-date"><?php the_time(get_option('date_format')); ?></time></a>&nbsp;
                    </span>
                    <span class="article-categories">
                        <a href="#"><i class="fa fa-archive"></i></a> <?php the_category(', '); ?>
                    </span>
                    <span class="article-tags">
                        <?php the_tags(' <a href="#"><i class="fa fa-tag"></i></a> ', ', '); ?>
                    </span>
                    <!--span class="comments-link">
                        <?php if (comments_open( get_the_ID() ) ): ?><a href="#"><i class="fa fa-comment"></i></a> <?php comments_popup_link( __( 'Lascia un commento', 'templated_spatial' ), __( 'Un commento', 'templated_spatial' ), __( '% commenti', 'templated_spatial' )); endif; ?>
                    </span-->
                </div>
                <!-- ./post-meta -->
                <?php } ?>
                <h2 class="post-title"><?php the_title(); ?></h2>
            </div>
            <!-- ./post-header -->
            <div class="post-content">
                <?php if (is_archive()) { the_excerpt(); } else { the_content(); } ?>
            </div>
            <!-- ./post-content -->
            <footer class="post-footer">
                <?php if (is_archive()) { ?>
                    <p class="read-more">
                        <a href="<?php the_permalink() ?>"><?php _e( 'Continua a leggere', 'templated_spatial' ); ?> &#187;</a>
                    </p>
                <?php } 
                    edit_post_link(__( 'Modifica', 'templated_spatial' ), '<span class="edit-link">', '</span>', null, 'post-edit-link' );
                ?>
            </footer>
            <!-- ./post-footer -->
            <div class="clearfix"></div>
        </div>
        <!-- ./text-holder -->

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Nessun articolo inserito.', 'templated_spatial' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
