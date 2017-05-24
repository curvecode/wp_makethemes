<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		if (!is_page('top-page')) {
			echo '<header class="entry-header">';
	?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php
			echo '</header><!-- .entry-header -->';
		}
	?>

	<?php 
		if (is_page('top-page')) {
			echo '<div class="wrapper">';
		}
		else {
			echo '<div class="entry-content">';
		}
	?>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
