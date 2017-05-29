<?php
    // get_header(); // get_header('shop') neu co tap tin header-shop.php
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" type="" href="http://gmgp.org/xfn/11">
        <link rel="pingback" type="" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="container">
            <div class="logo">
                <?php thanhlt_header(); ?>
                <?php thanhlt_menu('primary-menu') ?>
            </div>
    

