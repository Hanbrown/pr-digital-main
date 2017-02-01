<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PR_Digital_Main
 */

?>

<div class="container-fluid">
    <div class="row"><h2 class="text-center"><?php esc_html_e( 'Nothing Here...', 'prdigital' ); ?></h2>
    <!-- .page-header --></div>

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Did you forget to write something? <a href="%1$s">Click Here</a>.', 'prdigital' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'prdigital' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. But here&rsquo;s a sitemap.', 'prdigital' ); ?></p>
			<?php wp_nav_menu( array( 
    'menu'       => 'sitemap',
    'menu_class' => 'list-group',
) ); 
        endif;
        ?>
	</div><!-- .page-content -->
</div><!-- .no-results -->
