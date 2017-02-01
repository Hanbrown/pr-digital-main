<?php
/**
 * The template for displaying category pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PR_Digital_Main
 */

get_header(); ?>

	<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

		<?php
		if ( have_posts() ) : 
				
					single_cat_title( '<h2 class="text-center">', '</h2>' );
					the_archive_description( '<h4 class="text-center">', '</h4>' );
            
				?>
			<br>
          </div>  
      </div>
<hr>
    <p class="alert alert-info">
		<a href="#" data-dismiss="alert" aria-label="close" title="Close">
		Please click on a post for an expanded view
		</a>
	</p>
    <div id="post-container" class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div><!-- #primary -->
<hr>
<a class="sr-only" href="#footer"><?php esc_html_e( 'Skip to footer', 'prdigital' ); ?></a>
		
<?php
get_template_part('template-parts/content', 'blowup');
get_footer();
