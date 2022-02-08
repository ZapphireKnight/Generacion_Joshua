<?php    
/**
 *The Church Lite Theme Customizer
 *
 * @package The Church Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function the_church_lite_customize_register( $wp_customize ) {	
	
	function the_church_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );
	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function the_church_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}  
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	 //Panel for section & control
	$wp_customize->add_panel( 'the_church_lite_panel_area', array(
		'priority' => null,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Options Panel', 'the-church-lite' ),		
	) );
	
	//Layout Options
	$wp_customize->add_section('layout_option',array(
		'title' => __('Site Layout','the-church-lite'),			
		'priority' => 1,
		'panel' => 	'the_church_lite_panel_area',          
	));		
	
	$wp_customize->add_setting('sitebox_layout',array(
		'sanitize_callback' => 'the_church_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'sitebox_layout', array(
    	'section'   => 'layout_option',    	 
		'label' => __('Check to Box Layout','the-church-lite'),
		'description' => __('If you want to box layout please check the Box Layout Option.','the-church-lite'),
    	'type'      => 'checkbox'
     )); //Layout Section 
	
	$wp_customize->add_setting('the_church_lite_color_scheme',array(
		'default' => '#a65418',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'the_church_lite_color_scheme',array(
			'label' => __('Color Scheme','the-church-lite'),			
			'description' => __('More color options in PRO Version','the-church-lite'),
			'section' => 'colors',
			'settings' => 'the_church_lite_color_scheme'
		))
	);	
	
	//Header Contact Info
	$wp_customize->add_section('header_supportinfo_section',array(
		'title' => __('Header Support Details','the-church-lite'),				
		'priority' => null,
		'panel' => 	'the_church_lite_panel_area',
	));
	
	$wp_customize->add_setting('header_phoneno',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('header_phoneno',array(	
		'type' => 'text',
		'label' => __('Add phone number here','the-church-lite'),
		'section' => 'header_supportinfo_section',
		'setting' => 'header_phoneno'
	));	
	
	$wp_customize->add_setting('support_mailid',array(
		'sanitize_callback' => 'sanitize_email'
	));
	
	$wp_customize->add_control('support_mailid',array(
		'type' => 'text',
		'label' => __('Add email address here.','the-church-lite'),
		'section' => 'header_supportinfo_section'
	));	
	
	$wp_customize->add_setting('the_church_lite_show_supportdetails',array(
		'default' => false,
		'sanitize_callback' => 'the_church_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'the_church_lite_show_supportdetails', array(
	   'settings' => 'the_church_lite_show_supportdetails',
	   'section'   => 'header_supportinfo_section',
	   'label'     => __('Check To show This Section','the-church-lite'),
	   'type'      => 'checkbox'
	 ));//Show header contact info
	 
	 $wp_customize->add_setting('the_church_lite_hide_searchbarfromtop',array(
		'default' => true,
		'sanitize_callback' => 'the_church_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'the_church_lite_hide_searchbarfromtop', array(
	   'settings' => 'the_church_lite_hide_searchbarfromtop',
	   'section'   => 'header_supportinfo_section',
	   'label'     => __('Uncheck To hide search bar from top','the-church-lite'),
	   'type'      => 'checkbox'
	 ));//hide search bar from header
	
	
	 
	 //Header social icons
	$wp_customize->add_section('the_church_lite_social_section',array(
		'title' => __('Header social icons','the-church-lite'),
		'description' => __( 'Add social icons link here to display icons in header', 'the-church-lite' ),			
		'priority' => null,
		'panel' => 	'the_church_lite_panel_area', 
	));
	
	$wp_customize->add_setting('the_church_lite_fb_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('the_church_lite_fb_link',array(
		'label' => __('Add facebook link here','the-church-lite'),
		'section' => 'the_church_lite_social_section',
		'setting' => 'the_church_lite_fb_link'
	));	
	
	$wp_customize->add_setting('the_church_lite_twitt_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('the_church_lite_twitt_link',array(
		'label' => __('Add twitter link here','the-church-lite'),
		'section' => 'the_church_lite_social_section',
		'setting' => 'the_church_lite_twitt_link'
	));
	
	$wp_customize->add_setting('the_church_lite_gplus_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('the_church_lite_gplus_link',array(
		'label' => __('Add google plus link here','the-church-lite'),
		'section' => 'the_church_lite_social_section',
		'setting' => 'the_church_lite_gplus_link'
	));
	
	$wp_customize->add_setting('the_church_lite_linked_link',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('the_church_lite_linked_link',array(
		'label' => __('Add linkedin link here','the-church-lite'),
		'section' => 'the_church_lite_social_section',
		'setting' => 'the_church_lite_linked_link'
	));
	
	$wp_customize->add_setting('the_church_lite_show_socialsection',array(
		'default' => false,
		'sanitize_callback' => 'the_church_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'the_church_lite_show_socialsection', array(
	   'settings' => 'the_church_lite_show_socialsection',
	   'section'   => 'the_church_lite_social_section',
	   'label'     => __('Check To show This Section','the-church-lite'),
	   'type'      => 'checkbox'
	 ));//Show Header Social icons Section 			
	
	// Slider Section		
	$wp_customize->add_section( 'the_church_lite_slider_options', array(
		'title' => __('Header Slider Section', 'the-church-lite'),
		'priority' => null,
		'description' => __('Default image size for slider is 1400 x 567 pixel.','the-church-lite'), 
		'panel' => 	'the_church_lite_panel_area',           			
    ));
	
	$wp_customize->add_setting('the_church_lite_slidepageno1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'the_church_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('the_church_lite_slidepageno1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide one:','the-church-lite'),
		'section' => 'the_church_lite_slider_options'
	));	
	
	$wp_customize->add_setting('the_church_lite_slidepageno2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'the_church_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('the_church_lite_slidepageno2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide two:','the-church-lite'),
		'section' => 'the_church_lite_slider_options'
	));	
	
	$wp_customize->add_setting('the_church_lite_slidepageno3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'the_church_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('the_church_lite_slidepageno3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide three:','the-church-lite'),
		'section' => 'the_church_lite_slider_options'
	));	// Slider Section	
	
	$wp_customize->add_setting('the_church_lite_slide_morebtn',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('the_church_lite_slide_morebtn',array(	
		'type' => 'text',
		'label' => __('Add slider Read more button name here','the-church-lite'),
		'section' => 'the_church_lite_slider_options',
		'setting' => 'the_church_lite_slide_morebtn'
	)); // Slider Read More Button Text
	
	$wp_customize->add_setting('the_church_lite_showslide_section',array(
		'default' => false,
		'sanitize_callback' => 'the_church_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'the_church_lite_showslide_section', array(
	    'settings' => 'the_church_lite_showslide_section',
	    'section'   => 'the_church_lite_slider_options',
	     'label'     => __('Check To Show This Section','the-church-lite'),
	   'type'      => 'checkbox'
	 ));//Show Slider Section	
	 
	 
	 // Three column Services section
	$wp_customize->add_section('the_church_lite_top_3_services_section', array(
		'title' => __('Top Three Services Section','the-church-lite'),
		'description' => __('Select pages from the dropdown for services section','the-church-lite'),
		'priority' => null,
		'panel' => 	'the_church_lite_panel_area',          
	));	
	
	$wp_customize->add_setting('the_church_lite_top_srvpagebx1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'the_church_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'the_church_lite_top_srvpagebx1',array(
		'type' => 'dropdown-pages',			
		'section' => 'the_church_lite_top_3_services_section',
	));		
	
	$wp_customize->add_setting('the_church_lite_top_srvpagebx2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'the_church_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'the_church_lite_top_srvpagebx2',array(
		'type' => 'dropdown-pages',			
		'section' => 'the_church_lite_top_3_services_section',
	));
	
	$wp_customize->add_setting('the_church_lite_top_srvpagebx3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'the_church_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'the_church_lite_top_srvpagebx3',array(
		'type' => 'dropdown-pages',			
		'section' => 'the_church_lite_top_3_services_section',
	));
	
	
	$wp_customize->add_setting('the_church_lite_show_top_3_services_section',array(
		'default' => false,
		'sanitize_callback' => 'the_church_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'the_church_lite_show_top_3_services_section', array(
	   'settings' => 'the_church_lite_show_top_3_services_section',
	   'section'   => 'the_church_lite_top_3_services_section',
	   'label'     => __('Check To Show This Section','the-church-lite'),
	   'type'      => 'checkbox'
	 ));//Show services section
	 
	 
	 // Why Choose section 
	$wp_customize->add_section('the_church_lite_whychoose_section', array(
		'title' => __('Why Choose Section','the-church-lite'),
		'description' => __('Select Pages from the dropdown for why choose section','the-church-lite'),
		'priority' => null,
		'panel' => 	'the_church_lite_panel_area',          
	));		
	
	$wp_customize->add_setting('the_church_lite_whychoose_page',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'the_church_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'the_church_lite_whychoose_page',array(
		'type' => 'dropdown-pages',			
		'section' => 'the_church_lite_whychoose_section',
	));		
	
	$wp_customize->add_setting('show_the_church_lite_whychoose_page',array(
		'default' => false,
		'sanitize_callback' => 'the_church_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_the_church_lite_whychoose_page', array(
	    'settings' => 'show_the_church_lite_whychoose_page',
	    'section'   => 'the_church_lite_whychoose_section',
	    'label'     => __('Check To Show This Section','the-church-lite'),
	    'type'      => 'checkbox'
	));//Show Why Choose Section 
	 
	
		 
}
add_action( 'customize_register', 'the_church_lite_customize_register' );

function the_church_lite_custom_css(){ 
?>
	<style type="text/css"> 					
        a, .poststyle_listing h2 a:hover,
        #sidebar ul li a:hover,								
        .poststyle_listing h3 a:hover,					
        .recent-post h6:hover,				
        .pagebx_3cols:hover .button,									
        .postmeta a:hover,
        .button:hover,
		.whychooseus_contentbx h3 span,
        .footercolumn ul li a:hover, 
        .footercolumn ul li.current_page_item a,      
        .pagebx_3cols:hover h3 a,	      
		.footer-wrapper h2 span,
		.footer-wrapper ul li a:hover, 
		.footer-wrapper ul li.current_page_item a        				
            { color:<?php echo esc_html( get_theme_mod('the_church_lite_color_scheme','#a65418')); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover, 
        #commentform input#submit:hover,
		.header-top,
		.sitenav ul li ul,					
        .nivo-controlNav a.active,
        .learnmore,	
		.donatenow:hover,
		.nivo-caption .slide_more:hover,
		.pagebx_3cols .pagebx_thumbx,												
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit'],				
        nav.pagination .page-numbers.current,       		
        .toggle a	
            { background-color:<?php echo esc_html( get_theme_mod('the_church_lite_color_scheme','#a65418')); ?>;}	
			
		#sitelayout_type a:focus,
		button:focus,
		input[type="button"]:focus,
		input[type="reset"]:focus,
		input[type="submit"]:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="week"]:focus,
		input[type="time"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="color"]:focus,
		textarea:focus,
		a:focus   
            { outline:thin dotted <?php echo esc_html( get_theme_mod('the_church_lite_color_scheme','#a65418')); ?>;}			
			
         	
    </style> 
<?php                                   
}
         
add_action('wp_head','the_church_lite_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function the_church_lite_customize_preview_js() {
	wp_enqueue_script( 'the_church_lite_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20171016', true );
}
add_action( 'customize_preview_init', 'the_church_lite_customize_preview_js' );