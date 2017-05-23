<?php 
/**
 * Plugin Name: Read RSS by Curvecode
 * Plugin URI:
 * Description: Plugin dung de doc tin RSS
 * Version: 1.0
 * Author: Curvecode
 * Author URI: https://thachpham.com/wordpress/wordpress-development/lap-trinh-plugin-wordpress-part-2.html
 * License: GPLv2
 */''
?>

<!-- include file -->
<?php include 'inc/rdss_create_ui.php'; ?>
<!-- include file tao giao dien -->


<?php
  
  if (!class_exists('Read_rss')) {
    class Read_rss{
      function __construct() {
        if (!function_exists('add_shortcode')) {
          return;
        }
        add_shortcode('hello', array(&$this, 'hello_func'));
      }

      function hello_func($atts = array(), $content = null) {
        // extract(shortcod_atts(array('name' => 'World'), $atts));
        return '<div><p>Hello '.$name. '!!! </p></div>';
      }
    }
  }

  /**
   * function load: ham de load short code
   */
  function rdss_load() {
    global $rdss;
    $rdss = new Read_rss();
  }

  add_action('plugins_loaded', 'rdss_load'); // chay rdss_load function khi plugins duocj load
  add_action('admin_menu', 'rdss_create_menu'); 
?>