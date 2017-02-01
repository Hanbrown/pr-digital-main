<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PR_Digital_Main
 */

get_header(); ?>

	<div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</div>
      </div>
    </div>
    <hr>

<?php
get_footer();
