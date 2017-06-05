<?php get_header();?>
<div class="content">
    <div id="main-content">
    <div class="archive-title">
        <?php
            if ( is_tag()) :
                printf( __('Posts tagged: %1$s', 'thanhlt'), single_tag_title( '', false ) );
            elseif (is_category( )) :
                printf( __('Posts categorized: %1$s', 'thanhlt'), single_cat_title( '', false ));
            elseif (is_day()):
                printf( __('Daily archive: %1$s', 'thanhlt'), get_the_time( 'l, F j, Y'));
            elseif (is_month()) :
                printf(__('Monthly archive: %1$s', 'thanhlt'), get_the_time( 'F Y') );
            elseif (is_year()):
                printf(__('Yearly archive: %1$s', 'thanhlt'), get_the_time( 'Y' ));
            endif;
        ?>
    </div>
    <?php if (is_tag() || is_category()) : ?>
    <div class="archive-description">
        <?php echo term_description( ) ?>
    </div>
    <?php endif; ?>
        <?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
        <?php else: ?>
            <?php get_template_part('content', 'none') ?>
        <?php endif; ?>
        <?php thanhlt_phantrang() ?>
    </div>
    <div id="sidebar">
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer();?>