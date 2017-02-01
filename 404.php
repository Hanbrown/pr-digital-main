<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package PR_Digital_Main
 */

get_header( '404' ); ?>

	<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
					<h2 class="text-center">Oh No!</h2>
            <h5 class="text-capitalize text-center">I can't find the page you're looking for!</h5>
            <br>
            <div><p>But here's a sitemap:</p>
					
                <?php wp_nav_menu( array( 
    'menu'       => 'sitemap',
    'menu_class' => 'list-group',
    

) ); ?>
					
            </div>
            <br>
        </div>
      </div>
    </div>
    <hr>

<?php
get_footer();
