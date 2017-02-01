<div class="text-center col-sm-6">
  <div class="thumbnail">
      <?php if ( has_post_thumbnail() ) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive" height="10" />
<?php endif; ?>
    <div class="caption">
<hr>
      <?php
		if ( is_single() ) :
			the_title( '<h3>', '</h3>' );
		else :
			the_title( '<h3>', '</h3>' );
		endif;

		?>
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
  </div>
</div>