<?php
/*
    Plugin Name: ThanhLT PLugin
    Plugin URI: http://thanhlt.wordpress.com
    Description: Tự làm plugin theo tài liệu wordpress
    Version: 1.0.1
    Author: ThanhLT
    Author URI: http://thanhlt.wordpress.com
    License: GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain: thanhlt
    Domain Path: http://thanhlt.wordpress.com
*/

/**
 * The 3 basic hooks you’ll need when creating a plugin are the 
 There are two types of hooks within WordPress: actions and filters.
 * register_activation_hook(), 
 * register_deactivation_hook() 
 * and the register_uninstall_hook().
 *
 *
 **/

if (!class_exists('thanhlt_plugin_class')) {
    class thanhlt_plugin_class {
        function __construct() {

            parent::__construct();
        }

    }
}

function thanhlt_plugin_load() {
    global $thanhltPlugin;
    $thanhltPlugin = new thanhlt_plugin_class();
}

/*
 @Ham dang ky kieu post moi
*/
if (!function_exists('thanhlt_reg_paper_postType')) {
    function thanhlt_reg_paper_postType() {
        $args = array(
            'labels' => array(
                'name'             => 'Paper',
                'singular_name'    => 'Paper',
                'add_new'          => __('Add new', 'thanhlt'),
                'add_new_item'     => __('Add new paper', 'thanhlt'),
                'edit_item'        => __('Edit paper', 'thanhlt'),
                'name_admin_bar'   => __('New paper'),
            ),
            'public'             => true,
            'menu_icon'          => 'dashicons-tickets',
            'description'        => __('Mo ta ve post type'),
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'menu_position'      => 5
        );
        register_post_type( 'paper', $args );
    }
    add_action('init', 'thanhlt_reg_paper_postType');
}

/*
 @Ham nay khoi chay khi plugin duoc active
*/
if (!function_exists('thanhlt_prefix_install')) {
    function thanhlt_prefix_install() {
        // trigger our function that registers the custom post type
        thanhlt_reg_paper_postType();

        // clear the permalink after the post type has been registered
        flush_rewrite_rules();

        // dang ky option cho plugin
        $thanhlt_option = 'thanhlt_option';
        add_option( $thanhlt_option, 'thanhlt plugin', '', 'yes' );
    }
    register_activation_hook( __FILE__, 'thanhlt_reg_paper_postType' );
}

if (!function_exists('thanhlt_prefix_deactivation')) {
    /**
     * Ham nay khoi chay khi plugin bi deactive
     **/
    function thanhlt_prefix_deactivation() {
        // our post type will be automatically removed, so no need to unregister it

        // clear the permalinks to remove our post type's rules
        flush_rewrite_rules();
    }
    register_deactivation_hook(__FILE__, 'thanhlt_prefix_deactivation');
}

/*
 @Ham nay khoi chay khi plugin bi remove
*/
if (!function_exists('thanhlt_prefix_uninstall')) {
    /**
     *Ham nay khoi chay khi plugin bi remove
     **/
    function thanhlt_prefix_uninstall() {
        $thanhlt_option = 'thanhlt_option';
        delete_option($thanhlt_option);
    }
    register_uninstall_hook(__FILE__, 'thanhlt_prefix_uninstall');
}

/*
@Ham dang ky style
*/
if (!function_exists('thanhlt_plugin_reg_style')) {
    function thanhlt_plugin_reg_style() {
        wp_register_style('thanhlt-plugin-style', plugin_dir_url(__FILE__).'css/style.css');
        wp_enqueue_style( 'thanhlt-plugin-style');
    }
    add_action('admin_enqueue_scripts', 'thanhlt_plugin_reg_style');
}

/*
@Ham dang ky script
*/


?>