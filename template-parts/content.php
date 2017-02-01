<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PR_Digital_Main
 */

?>
<div class="well well-sm post col-lg-2">
        <span id="the-title">
		<?php
		if ( is_single() ) :
			the_title( '<h3 class="text-center">', '</h3>' );
		else :
			the_title( '<h3 class="text-center">', '</h3>' );
		endif;

		?>
            </span>
        <?php if ( has_post_thumbnail() ) : ?>
        <span id="img-ref"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive" height="10" /></span>
<?php endif; ?>

    <div id="main-text" class="sr-only">
		<?php
			echo the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'prdigital' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'prdigital' ),
				'after'  => '</div>',
			) );
		?>
    </div>
	<!-- .entry-content -->
</div>
