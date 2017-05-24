<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	</div><!-- #content -->
	<footer id="footer">
		<p class="pos-center copyright">© WaterWhy, 2014. All rights reserved. Done by Olia Gozha</p>
	</footer>
	
</div><!-- #page -->
<!-- Them script dung cho footer -->
<?php
	wp_enqueue_script( 'jquery', get_template_directory_uri().'./js/lib/jquery.js', '', 'all' );
	wp_enqueue_script( 'jquery-bx-slider', get_template_directory_uri().'./js/lib/jquery.bxslider.min.js', '', 'all' );
	wp_enqueue_script( 'jquery-main', get_template_directory_uri().'./js/main.js', '', 'all' )
?>
<?php wp_footer(); ?>

</body>
</html>
