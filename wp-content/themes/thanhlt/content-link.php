<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php thanhlt_thumbnail('thumbnail'); ?>
    </div>
    <div class="entry-header">
        <?php 
            $link = get_post_meta( $post->ID, 'format_link_url', true );
            $link_description( $post->ID, 'format_link_description', true );

            if ( is_single() ) {
                printf('<h2 class="entry-title"><a href="%1$s" target="_blank">%2$s</a></h2>', $link, get_the_title());
            } else {
                printf('<h3 class="entry-title"><a href="%1$s" target="_blank">%2$s</a></h3>', $link, get_the_title());
            }

        ?>
    </div>
    <div class="entry-content">
        <?php 
            printf( '<a href="%1$s" target="_blank">%2$s</a> ', $link, $link_description);
        ?>
    </div>
</article>