<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package The Church 
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="all" />
<![endif]-->
<?php 
	wp_head(); 
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	if( !get_option( $themename ) ) {
	require get_template_directory() . '/index-default.php';
	exit;
	}
?>
</head>

<body id="top" <?php body_class(); ?>>
<div class="sitewrapper <?php if( of_get_option('boxlayout', true) != '' ) { ?>boxlayout<?php } ?>">

<div class="site-header">	
        <div class="header-top">
          <div class="container">
           
             
<div class="left">
		<div class="toggle">
    	<a class="toggleMenu" href="#">
		<?php if( of_get_option('menuwordchange',true) != '') { ?>
            <?php echo of_get_option('menuwordchange'); ?>         
        <?php } else { ?>                 
            <?php _e('Menu','the-church'); ?>                
        <?php } ?>
                  </a>
    </div><!-- toggle -->
    <div class="sitenav"><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></div><!--.sitenav --> 

	    	<?php if( of_get_option('headerseacrh',true) != true) { ?>
                <div class="sd-menu-search">
                    <div class="sd-search">
                        <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input class="sd-search-input" name="s" type="text" size="25"  maxlength="128" value="" placeholder="" />
                            <button class="sd-search-button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>                 
            <?php } ?>
            
            </div>
             
             <div class="right"><?php if( of_get_option('headersocial') != '' ){ echo do_shortcode( of_get_option('headersocial', true ));} ?></div>
             <div class="clear"></div>
           
          </div>
       </div><!--end header-top-->
 
 
 
	<div class="container">    
     <div class="logo">
        <?php if( of_get_option( 'logo', true ) != '' ) { ; ?>
               <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url( of_get_option( 'logo', true )); ?>" / ></a>               
            <?php } ?>
            <?php $hidettldesc = of_get_option('hide_titledesc', '1'); ?>
				<?php if($hidettldesc == ''){ ?>
                <div class="site-branding-text">
                  <a href="<?php echo esc_url(home_url('/')); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                  <span class="tagline"><?php bloginfo('description'); ?></span>                  
               </div> 
               
             <?php } ?>
    </div><!-- .logo -->  
 
 
<div class="header_right"> 
<?php if( of_get_option('headerinfoemail',true) != ''){ ?>
	<div class="header-infobox">
		<?php echo of_get_option('headerinfoemail'); ?>
    </div>
<?php } ?>
<?php if( of_get_option('headerinfophone',true) != ''){ ?>
	<div class="header-infobox">
		<?php echo of_get_option('headerinfophone'); ?>
    </div>
<?php } ?>

<?php if( of_get_option('headerinfobutton',true) != ''){ ?>
	<div class="header-infobox">
		<?php echo of_get_option('headerinfobutton'); ?>
    </div>
<?php } ?>
<div class="clear"></div>  
</div>
 
 
 <div class="clear"></div>
</div><!-- .container-->
</div><!-- .logonavi -->

<?php if ( is_home() || is_front_page() ) { ?>
<?php if( of_get_option('customslider',true) == ''){ ?>
    <div class="slider-main">
       <?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<11; $i++) {
				if ( of_get_option('slide'.$i, true) != "" ) {
					$imgSrc 	= of_get_option('slide'.$i, true);
					$imglink	= of_get_option('slidelink'.$i, true);
					$slidebutton	= of_get_option('slidebutton'.$i, true);
					$slideurl	= of_get_option('slideurl'.$i, true);
					if ( strlen($imgSrc) > 10 ) {
						$slAr[$m]['image_src'] = of_get_option('slide'.$i, true);
						$slAr[$m]['image_button'] = of_get_option('slidebutton'.$i, true);
						$slAr[$m]['image_url'] = of_get_option('slidelink'.$i, true);
						$m++;
					}
				}
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo '#slidecaption'.$n ; ?>"/><?php
                    $slideno[] = $n;
                }
                ?>
                </div> 
                
                 <?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                       <div class="custominfo">
                        <?php if( of_get_option('slidetitle'.$sln, true) != '' ){ ?>                          
                        <?php echo of_get_option('slidetitle'.$sln, true); ?>				
                        <?php } ?>
                         <?php if( of_get_option('slidedesc'.$sln, true) != '' ){ ?>                         
                             <p><?php echo do_shortcode(of_get_option('slidedesc'.$sln, true)); ?></p>
                         <?php } ?>						                        
                        <?php if( of_get_option('slideurl'.$sln, true) != '' ){ ?>
                             <a class="button" href="<?php echo of_get_option('slideurl'.$sln, true); ?>">							
                               <?php echo of_get_option('slidebutton'.$sln, true); ?>
                             </a>
                         <?php } ?> 
                         
                         </div><!-- .custominfo -->                   
                    </div><!-- #slidecaption -->
                    
					<?php } } ?>            
    </div><!-- slider -->
    
<?php } else {
 $short_code = of_get_option('customslider');
 echo do_shortcode($short_code);
 } ?>
	<?php } else { 
		if( of_get_option('innerpagebanner',true) == '') { $cls = 'style="display:none"'; } else { $cls = ''; }
	?>        
		<div class="innerbanner" <?php echo $cls; ?>>                
          <?php
			$header_image = get_header_image();
			
			if( is_single() || is_archive() || is_category() || is_author()|| is_search()) { 
				if(!empty($header_image)){
					echo '<img src="'.esc_url( $header_image ).'" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" />';
				} elseif( of_get_option('innerpagebanner',true) != '') { 
        			echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';
				}
			}
			elseif( has_post_thumbnail() ) {
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$thumbnailSrc = $src[0];
				echo '<img src="'.$thumbnailSrc.'" alt="">';
			} 
			elseif ( ! empty( $header_image ) ) {
				echo '<img src="'.esc_url( $header_image ).'" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" />';
            }	
			elseif( of_get_option('innerpagebanner',true) != '') { 
            	echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';
		    } ?>
        </div> 
	<?php }	?> 
    
<?php include ('section-pagecolumn.php'); ?>    