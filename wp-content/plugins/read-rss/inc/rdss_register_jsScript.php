<?php 
  function rdss_register_jsScript() {
    
    // wp_register_script( 'custom-script', plugins_url( '/read-rss/js/main.js', __FILE__ ), array( 'jquery', 'jquery-ui-core' ), '20120208', true );
    
    wp_enqueue_style('piala-rss-style', plugins_url() .'/read-rss/css/rdss_style.css' , array(), false, 'all');
    // wp_enqueue_script( 'piala-rss', plugins_url() . '/rss/rss.js', array( 'jquery' ), '20170421', true );
    // wp_localize_script( 'piala-rss', 'ajax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
  }
  // add_action('wp_enqueue_scripts', 'rdss_register_jsScript');
  // add_action('admin_enqueue_scripts', 'rdss_register_jsScript');

 ?>