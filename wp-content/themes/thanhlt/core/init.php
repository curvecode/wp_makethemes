<?php
    require_once dirname(__FILE__).'/class-tgm-plugin-activation.php';
    require_once dirname(__FILE__).'/plugins.php';
    require_once dirname(__FILE__).'/options.php';

    // function removeDemoModeLink() { // Be sure to rename this function to something more unique
    //     if ( class_exists('ReduxFrameworkPlugin') ) {
    //         remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    //     }
    //     if ( class_exists('ReduxFrameworkPlugin') ) {
    //         remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    //     }
    // }
    // add_action('init', 'removeDemoModeLink');
?>