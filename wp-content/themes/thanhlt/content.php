<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php thanhlt_thumbnail('thumbnail'); ?>
    </div>
    <div class="entry-header">
        <?php thanhlt_entry_header() ?>
        <?php thanhlt_entry_meta() ?>
    </div>
    <div class="entry-content">
        <?php thanhlt_entry_content() ?>
        <?php is_single() ? thanhlt_entry_tag() : ''; ?>
    </div>
</article>