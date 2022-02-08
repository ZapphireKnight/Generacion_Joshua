<?php
/**
 *The Church Lite About Theme
 *
 * @package The Church Lite
 */

//about theme info
add_action( 'admin_menu', 'the_church_lite_abouttheme' );
function the_church_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'the-church-lite'), __('About Theme Info', 'the-church-lite'), 'edit_theme_options', 'the_church_lite_guide', 'the_church_lite_mostrar_guide');   
} 

//Info of the theme
function the_church_lite_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'the-church-lite'); ?></h3>
		   </div>
          <p><?php esc_html_e('The Church Lite is an modern and feature-rich, professionally designed, clean and polished, flexible and amazing, popular and engaging, intuitive and easy to use, lively and highly responsive church and religious WordPress theme specially created for church, religious or non-profit organization website.','the-church-lite'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'the-church-lite'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'the-church-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'the-church-lite'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'the-church-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'the-church-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'the-church-lite'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'the-church-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'the-church-lite'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'the-church-lite'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">			
        <div>				
            <a href="<?php echo esc_url( THE_CHURCH_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'the-church-lite'); ?></a> | 
            <a href="<?php echo esc_url( THE_CHURCH_LITE_PROTHEME_URL ); ?>" target="_blank"><?php esc_html_e('Purchase Pro', 'the-church-lite'); ?></a> | 
            <a href="<?php echo esc_url( THE_CHURCH_LITE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'the-church-lite'); ?></a>
        </div>		
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>