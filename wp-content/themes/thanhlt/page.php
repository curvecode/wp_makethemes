<?php get_header(); ?>
<div class="content">
    <div id="main-content">
        <?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile; ?>
        <?php comments_template(); ?>
        <?php else: ?>
            <?php get_template_part('content', 'none') ?>
        <?php endif; ?>
    </div>
    <ul id="sidebar">
        <?php get_sidebar() ?>
    </ul>
</div>
<?php get_footer(); ?>