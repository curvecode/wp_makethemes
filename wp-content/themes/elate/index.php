<?php get_header(); ?>

    <?php
        // $arrPages = elate_getContent_Subpage('elate');
        // echo "<pre>";
        // var_dump($arrPages);
        // echo "</pre>";
        // die();
        // $name = 'elate';
        // $result = new WP_Query( 'pagename=' .$name);
        // $my_wp_query = new WP_Query();
        // $all_wp_pages = $my_wp_query->query(array(
        //     'post_type' => 'page', 
        //     'posts_per_page' => '-1'
        // ));
        // $childPages = get_page_children( $result->post->ID, $all_wp_pages );
        // echo "<pre>";
        // var_dump($childPages);
        // echo "</pre>";
        // die();
        $arrPages = elate_getContent_Subpage('elate');
        foreach ($arrPages as $page) {
            $content = apply_filters('the_content', $page->post_content);
            echo $content;
        }
    ?>

<?php get_footer(); ?>