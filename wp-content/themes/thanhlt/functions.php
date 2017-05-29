<?php 
/** 
@ Khai bao hang gia tri
    @ THEME_URL = lay duong dan thu muc theme
    @ CORE = lay duong dan cua thu muc core
**/

define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . "/core");

/**
@ Nhung file /core/init.php
**/
require_once(CORE."/init.php");

/**
@ Thiet lap chieu rong noi dung
**/
if ( !isset($content_width) ) {
    $content_width = 620;
}

/**
@ Khai bao chuc nang cua theme 
**/
if ( !function_exists('thanhlt_theme_setup')) {
    function thanhlt_theme_setup() {
        /* Thiet lap text domain */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('thanhlt', $language_folder);

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
        register_nav_menu( 'primary-menu', __('Primary Menu', 'thanhlt') );

        /** Tao sidebar */
        $sidebar = array(
            'name' => __('Main Sidebar', 'thanhlt'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar', 'thanhlt'),
            'class' => 'main-sidebar',
            'before_title' => '<h2 class="widgettile">',
            'after_title' => '</h2>'
        );
        register_sidebar( $sidebar );
    }

    add_action('init', 'thanhlt_theme_setup');
}

/*-------------------
TEMPLATE function */
if (!function_exists('thanhlt_header')) {
    function thanhlt_header() {?>
        
        <div class="site-name">
            <?php 
                if (is_home()) {
                    printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>', 
                        get_bloginfo('url'),
                        get_bloginfo('description'),
                        get_bloginfo('sitename')
                    );
                }
                // if (is_user_logged_in()) {
                //     printf('<p>%1$s</p>',
                //         get_bloginfo('admin_email')
                //     );
                // }
            ?>
        </div>
        <div class="site-description">
            <?php bloginfo("description") ?>
        </div>
        <?php
    }
}

/** ------------------
Thiet lap menu **/
if (!function_exists('thanhlt_menu')) {
    function thanhlt_menu($menu) {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu
        );
        wp_nav_menu($menu);
    }
}
/*-----------------
 * Ham tao phan trang don gian
 */
if (!function_exists("thanhlt_phantrang")) {
    function thanhlt_phantrang() {
        if ($GLOBALS['wp_query']->max_num_pages < 2) {
            return '';
        } ?>
        <nav class="pagination" role="navigation">
            <?php if ( get_next_posts_link() ) : ?>
                <div class="prev"><?php next_posts_link( __('Older Posts', 'thanhlt')) ?></div>
        <?php endif; ?>
        <?php if (get_previous_posts_link()) : ?>
            <div class="next"><?php previous_posts_link(__('Newsest Posts', 'thanhlt')) ?></div>
        </nav> 
        <?php endif; ?>
    <?php }
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