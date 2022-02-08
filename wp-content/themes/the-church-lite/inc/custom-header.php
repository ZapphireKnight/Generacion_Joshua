<?php
/**
 * @package The Church Lite
 * Setup the WordPress core custom header feature.
 *
 * @uses the_church_lite_header_style()

 */
function the_church_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'the_church_lite_custom_header_args', array(		
		'default-text-color'     => '111111',
		'width'                  => 1400,
		'height'                 => 200,
		'wp-head-callback'       => 'the_church_lite_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'the_church_lite_custom_header_setup' );

if ( ! function_exists( 'the_church_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see the_church_lite_custom_header_setup().
 */
function the_church_lite_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.site-header{
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
		.logo h1 a { color:#<?php echo esc_html(get_header_textcolor()); ?>;}
	<?php endif; ?>	
	</style>
    
    <?php
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}

	// If the header text has been hidden.
	?>
    <style type="text/css">
		.logo {
			margin: 0 auto 0 0;
		}

		.logo h1,
		.logo p{
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
    </style>
    
	<?php     
} 
endif; // the_church_lite_header_style 