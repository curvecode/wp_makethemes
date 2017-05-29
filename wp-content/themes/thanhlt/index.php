<?php
/** --------------------
 * Phan nay hien thi admin bar tren cac trang khac
 * ngoai trang home
 **/
    if (is_home()) {
        // show_admin_bar(false);
    } else {
        // show_admin_bar(true);
    }
?>
<?php get_header();?>
<div class="content">
    <div id="main-content">
        <?php query_posts( 'showposts=3' ); if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
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