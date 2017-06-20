<?php

define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . "/core");

/**
@ Khai bao chuc nang cua theme 
**/
if ( !function_exists('elate_theme_setup')) {
    function elate_theme_setup() {
        /* Thiet lap text domain */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('elate', $language_folder);

        /** Tu dong them link RSS len <head> **/
        add_theme_support( 'automatic-feed-links' );

        /** Them post thumbnail **/
        add_theme_support( 'post-thumbnails' );

        /** post format */
        add_theme_support( 'post-formats', array(
            'image', 'video', 'gallery', 'quote', 'link'
        ) );

        /** Them title-tag **/
        add_theme_support('title-tag');

        /** Them custom background **/
        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support( 'custom-background',  $default_background); // tham so mau mac dinh

        /** Them menu */
        register_nav_menu( 'primary-menu', __('Primary Menu', 'elate') );

        /** Tao sidebar */
        $sidebar = array(
            'name' => __('Main Sidebar', 'elate'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar', 'elate'),
            'class' => 'main-sidebar',
            'before_title' => '<h2 class="widgettile">',
            'after_title' => '</h2>'
        );
        register_sidebar( $sidebar );
    }

    add_action('init', 'elate_theme_setup');
}

/** Ham them style vao cho page **/
if (!function_exists('elate_style')) {
    function elate_style() {
        wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700', 'all');
        wp_enqueue_style('font-style');
        wp_register_style('animate-style', get_template_directory_uri().'/css/animate.css', 'all');
        wp_enqueue_style('animate-style');
        wp_register_style('icomoon-style', get_template_directory_uri().'/css/icomoon.css', 'all');
        wp_enqueue_style('icomoon-style');
        wp_register_style('simple-style', get_template_directory_uri().'/css/simple-line-icons.css', 'all');
        wp_enqueue_style('simple-style');
        wp_register_style('magnific-style', get_template_directory_uri().'/css/magnific-popup.css', 'all');
        wp_enqueue_style('magnific-style');
        wp_register_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.css', 'all');
        wp_enqueue_style('bootstrap-style');
        wp_register_style('main-style', get_template_directory_uri().'/css/style.css', 'all');
        wp_enqueue_style('main-style');
        wp_register_style('original-style', get_template_directory_uri().'/style.css', 'all');
        wp_enqueue_style('original-style');
        wp_register_style('background-img-style', get_template_directory_uri().'/css/background-img.css', 'all');
        wp_enqueue_style('background-img-style');
        wp_register_style('theme-switch', get_template_directory_uri().'/css/style.css', 'all');
        wp_enqueue_style('theme-switch');
        wp_register_style('colour-style', get_template_directory_uri().'/css/colour.css', 'all');
        wp_enqueue_style('colour-style');
    }
    add_action('wp_enqueue_scripts', 'elate_style');
}

/** Ham them script vao cho page o phan header **/
if (!function_exists('elate_scripts_header')) {
    function elate_scripts_header() {
        wp_register_script('modernizr', get_template_directory_uri().'/js/modernizr-2.6.2.min.js', 'all');
        wp_enqueue_script('modernizr');
        wp_register_script('respond', get_template_directory_uri().'/js/respond.min.js', 'all');
        wp_script_add_data('respond', 'conditional', 'lt IE 9');
        // wp_enqueue_script('respond', 'conditional');
    }
    add_action('wp_head', 'elate_scripts_header');
}

/** Ham them script vao cho page o phan footer **/
if (!function_exists('elate_scripts_footer')) {
    function elate_scripts_footer() {
        wp_register_script('jquery-script', get_template_directory_uri().'/js/jquery.min.js', 'all');
        wp_enqueue_script('jquery-script');
        wp_register_script('jquery-easing-script', get_template_directory_uri().'/js/jquery.easing.1.3.js', 'all');
        wp_enqueue_script('jquery-easing-script');
        wp_register_script('bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js', 'all');
        wp_enqueue_script('bootstrap-script');
        wp_register_script('jquery-waypoints-script', get_template_directory_uri().'/js/jquery.waypoints.min.js', 'all');
        wp_enqueue_script('jquery-waypoints-script');
        wp_register_script('jquery-stellar-script', get_template_directory_uri().'/js/jquery.stellar.min.js', 'all');
        wp_enqueue_script('jquery-stellar-script');
        wp_register_script('jquery-countTo-script', get_template_directory_uri().'/js/jquery.countTo.js', 'all');
        wp_enqueue_script('jquery-countTo-script');
        wp_register_script('jquery-magnific-popup-script', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', 'all');
        wp_enqueue_script('jquery-magnific-popup-script');
        wp_register_script('magnific-popup-options-script', get_template_directory_uri().'/js/magnific-popup-options.js', 'all');
        wp_enqueue_script('magnific-popup-options-script');
        wp_register_script('googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false', 'all');
        wp_enqueue_script('googlemap');
        wp_register_script('google_map-script', get_template_directory_uri().'/js/google_map.js', 'all');
        wp_enqueue_script('google_map-script');
        wp_register_script('jquery-switcher-script', get_template_directory_uri().'/js/jquery.style.switcher.js', 'all');
        wp_enqueue_script('jquery-switcher-script');
        wp_register_script('colour-script', get_template_directory_uri().'/js/colour.js', 'all');
        wp_enqueue_script('colour-script');
        wp_register_script('main-script', get_template_directory_uri().'/js/main.js', 'all');
        wp_enqueue_script('main-script');
    }
    add_action('wp_footer', 'elate_scripts_footer');
}

if (!function_exists('elate_theme_url')) {
    function elate_theme_url(){
        return get_template_directory_uri();
    }
    add_shortcode('themeurl_elate', 'elate_theme_url');
}

/*---------------
thanhlt_thumbnail */
if (!function_exists('thanhlt_thumbnail')) {
    function thanhlt_thumbnail($size) {
        if (!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
            <figure class="post_thumbnail">
                <?php the_post_thumbnail( $size ); ?>
            </figure>
        <?php endif; ?>
    <?php }
}

/*---------------
thanhlt_entry_header */
if (!function_exists('thanhlt_entry_header')) {
    function thanhlt_entry_header() {
        if (!is_single()) : ?>
        <h3 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute( ); ?>">
                <?php the_title( ); ?>
            </a>
        </h3>
        <?php else : ?>
        <h4>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute( ); ?>">
                <?php the_title() ?>
            </a>
        </h4>
        <?php 
            endif;
    }
}

/*------------------------
@ Ham hien thi thong tin cua post (Post Meta)
@ thanhlt_entry_meta */
if (!function_exists('thanhlt_entry_meta')) {
    function thanhlt_entry_meta() {
        if (!is_page()) : 
            echo '<div class="entry-meta">';
            // Hien thi ten tac gia, ten category va ngay thang dang bai
            printf(__('<span class="author">Posted by : %1$s </span>', 'thanhlt'), get_the_author());
            printf(__('<span class="post-format"> Posts Format :  %1$s </span>', 'thanhlt'), get_post_format());
            printf(__('<span class="date-published"> %1$s </span>', 'thanhlt'), get_the_date());
            printf(__('<span class="category"> in %1$s </span>', 'thanhlt'), get_the_category_list(','));

            // Hien thi so dem luot binh luan
            if (comments_open()) :
                echo '<p class="meta-reply">';
                comments_popup_link( 
                    __('Leave a comment' ,'thanhlt'), 
                    __('One comment ','thanhlt'), 
                    __('% comments', 'thanhlt'), 
                    'css_class', 
                    __('Read all comments', 'thanhlt') );
                echo '</p>';
            endif;
            echo '</div>';
        endif;
    }
}

/*------------------------
thanhlt_entry_content */
if (!function_exists('thanhlt_entry_content')) {
    function thanhlt_entry_content() {
        if (!is_single() && !is_page()) :
            the_excerpt();
        else:
            the_content(); // Phai dua vao vong lap moi hien thi
            // Code hien thi phan trang trong post type
            $link_pages = array(
                'before' => __('<p>Page: ', 'thanhlt'),
                'after' => '</p>',
                'nextpagelink' => __('Next page', 'thanhlt'),
                'previouspagelink' => __('Previous page', 'thanhlt')
            );
            wp_link_pages($link_pages);
        endif;
        
    }
}

/** Lay toan bo content cua page con khi biet slug cua page cha **/
if (!function_exists('elate_getContent_Subpage')) {
    function elate_getContent_Subpage($slug) {
        // $argSubpage = array(
        //     'child_of' => $slug,
        //     'parent'   => $slug,
        //     'hierarchical' => 0,
        //     'sort_column' => 'menu_order',
        //     'sort_order' => 'asc'
        // );
        // $myPages = get_pages( $argSubpage );

        // $result = new WP_Query( 'pagename='.$slug );
        // $lookup = array(
        //     'post_parent' => $result->post->ID,
        //     'post_type'   => 'page',
        //     'order'       => 'ASC',
        //     'orderby'     => 'menu_order'
        // );
        // $childPages = get_page_children( $result->post->ID );
        $name = $slug;
        $result = new WP_Query( 'pagename=' .$name);
        $my_wp_query = new WP_Query();
        // $current_lang = pll_current_language();
        $all_wp_pages = $my_wp_query->query(array(
            'post_type' => 'page', 
            'posts_per_page' => '-1',
            'order' => 'asc'
            // 'lang' => $current_lang
        ));
        return get_page_children( $result->post->ID, $all_wp_pages );
    }
}