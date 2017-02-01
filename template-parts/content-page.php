<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PR_Digital_Main
 */

?>

<?php the_title( '<h2 class="text-center">', '</h2>' ); ?>
<hr>
<br>
<div>
	<!--p-->
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'prdigital' ),
				'after'  => '</div>',
			) );
		?>
	<!--/p><!-- .entry-content -->
</div>