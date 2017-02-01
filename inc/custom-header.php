<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package PR_Digital_Main
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses prdigital_header_style()
 */
function prdigital_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'prdigital_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'flex-height'            => true,
		'height'                 => 400,
		'flex-width'			=> true,
		'wp-head-callback'       => 'prdigital_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'prdigital_custom_header_setup' );

//Gets the header image's alt text.

/*function wpse_151850_get_header_image_alt() {
    $attachment_id = 0;

    if ( is_random_header_image() && $header_url = get_header_image() ) {
        // For a random header, we have to search for a match against all headers.
        foreach ( get_uploaded_header_images() as $header ) {
            if ( $header['url'] == $header_url ) {
                $attachment_id = $header['attachment_id'];
                break;
            }
        }

    } elseif ( $data = get_custom_header() ) {
        // For static headers, less intensive approach.
        $attachment_id = $data->attachment_id;
    } 

    if ( $attachment_id ) {
        $alt = trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );

        if ( ! $alt ) // Fallback to caption (excerpt)
            $alt = trim( strip_tags( get_post_field( 'post_excerpt', $attachment_id ) ) );
        if ( ! $alt ) // Fallback to title
            $alt = trim( strip_tags( get_post_field( 'post_title', $attachment_id ) ) );
    } else {
        $alt = '';
    }

    return $alt;
}


function get_attachment_id_from_src ($image_src) {
	global $wpdb;
	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
	$id = $wpdb->get_var($query);
	return $id;
}*/

/*
function get_header_caption(){
	$img_id = get_attachment_id_from_src(header_image());
	$img_info =  wp_get_attachment( $img_id );
	return $img_info['caption'];
}
*/


if ( ! function_exists( 'prdigital_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see prdigital_custom_header_setup().
 */
function prdigital_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: HEADER_TEXTCOLOR.
	 */
	if ( HEADER_TEXTCOLOR === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
