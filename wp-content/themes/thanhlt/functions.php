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
                } else {
                    printf('<h2><a href="%1$s" title="%2$s">%3$s</a></h2>', 
                        get_bloginfo('url'),
                        get_bloginfo('description'),
                        get_bloginfo('sitename')
                    );
                }
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
/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
if (!function_exists('wpdocs_excerpt_more')) {
    function wpdocs_excerpt_more( $more ) {
        return sprintf( '...<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'thanhlt' )
        );
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
if (!function_exists('wpdocs_custom_excerpt_length')) {
    function wpdocs_custom_excerpt_length( $length ) {
        return 10;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
}

/*----------------
thanhlt_entry_tag */
if (!function_exists('thanhlt_entry_tag')) {
    function thanhlt_entry_tag() {
        if (has_tag()) {
            echo '<div class="tag">';
            printf(__('Tagged in %1$s,', 'thanhlt'), get_the_tag_list('', ', '));
            echo '</div>';
        }
    }
}

/* ------------ 
 Nhung style.css */
function thanhlt_style() {
    wp_register_style('main-style', get_template_directory_uri().'/style.css', 'all');
    wp_enqueue_style('main-style');
    wp_register_style('new-style', get_template_directory_uri().'/css/new_style.css', 'all');
    wp_enqueue_style('new-style');
    wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Gentium+Book+Basic|Lato|Open+Sans|Yeseva+One', 'all');
    wp_enqueue_style('font-style');
}
add_action('wp_enqueue_scripts', 'thanhlt_style');