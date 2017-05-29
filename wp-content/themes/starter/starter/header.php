<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<!-- ################################## 
     Them custom style vao phan header 
 -->
<?php
	// wp_enqueue_style( "jquery.bxslider.min", get_template_directory_uri().'/css/jquery.bxslider.min.css', array(), '', 'all' );
	// wp_enqueue_style( "new-style", get_template_directory_uri().'/new_style.css', array(), '', 'all' );
?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="content" class="site-content">
