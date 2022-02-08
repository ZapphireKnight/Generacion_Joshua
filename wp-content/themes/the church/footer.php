<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package The Church 
 */
$footerlayout = of_get_option('footerlayout');
?>

<div id="footer-wrapper">
 <?php if($footerlayout!='fivecolumn'){ ?>
<div class="container footer"> 
 <div class="ftr_holder">
 

<!-- =============================== Column One - 1 =================================== -->
			<?php if($footerlayout=='onecolumn'){ ?>
                <div class="cols-1">    
                   <?php if(!dynamic_sidebar('footer-1')) : ?> 
                <div class="widget-column-1">
               <h5><?php if( of_get_option('abouttitle') != '') { echo of_get_option('abouttitle'); } ; ?></h5>
                <?php if( of_get_option('aboutusdescription') != '') { echo do_shortcode(of_get_option('aboutusdescription')); } ; ?> 
                <?php if( of_get_option('headersocial') != '') { echo do_shortcode(of_get_option('headersocial')); } ; ?>   
               </div>             
            <?php endif; ?>
                
                </div>
            <?php 
            }
             elseif ($footerlayout=='twocolumn'){ ?>

<!-- =============================== Column Two - 2 =================================== -->

            <div class="cols-2">    
               <?php if(!dynamic_sidebar('footer-1')) : ?> 
                <div class="widget-column-1">
                   <h5><?php if( of_get_option('abouttitle') != '') { echo of_get_option('abouttitle'); } ; ?></h5>
                   <?php if( of_get_option('aboutusdescription') != '') { echo do_shortcode(of_get_option('aboutusdescription')); } ; ?> 
                   <?php if( of_get_option('headersocial') != '') { echo do_shortcode(of_get_option('headersocial')); } ; ?> 
              </div>                  
			<?php  endif; ?>
           
                
            <?php if(!dynamic_sidebar('footer-2')) : ?>
              <div class="widget-column-2"> 
                 <h5><?php if( of_get_option('quicklinktitle') != ''){ echo of_get_option('quicklinktitle');}; ?></h5>
                 <?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>           
               </div>
             <?php endif; ?>
            
                <div class="clear"></div>
            </div><!--end .cols-2-->  
			<?php 
            }
            elseif($footerlayout=='threecolumn'){ ?>
        
<!-- =============================== Column Three - 3 =================================== -->
            <div class="cols-3">    
                <?php if(!dynamic_sidebar('footer-1')) : ?>  
                <div class="widget-column-1">            	
                   <h5><?php if( of_get_option('abouttitle') != '') { echo of_get_option('abouttitle'); } ; ?></h5>
                   <?php if( of_get_option('aboutusdescription') != '') { echo do_shortcode(of_get_option('aboutusdescription')); } ; ?>
                   <?php if( of_get_option('headersocial') != '') { echo do_shortcode(of_get_option('headersocial')); } ; ?>                    
              </div>                  
			<?php  endif; ?>
           
                
            <?php if(!dynamic_sidebar('footer-2')) : ?>
              <div class="widget-column-2"> 
                <h5><?php if( of_get_option('quicklinktitle') != ''){ echo of_get_option('quicklinktitle');}; ?></h5>
                 <?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>           
               </div>
            <?php endif; ?>
            
            <?php if(!dynamic_sidebar('footer-3')) : ?>
             	 <div class="widget-column-3"> 
                      <h5><?php if( of_get_option('letestpoststitle') != ''){ echo of_get_option('letestpoststitle');}; ?></h5>  
                  
                  <ul class="recent-post"> 
                	<?php query_posts(  array( 'posts_per_page'=> 2, 'post__not_in' => get_option('sticky_posts') )  ); ?>
                    <?php  while( have_posts() ) : the_post(); ?> 
                    <li>
                    <?php if ( has_post_thumbnail() ) { $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );   $thumbnailSrc = $src[0]; ?>
                    <div class="footerthumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnailSrc; ?>" alt="" ></a> </div>
					<?php } else { ?>
                    <div class="footerthumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/img_404.png" /></a></div>
                    <?php } ?>
                    <div class="ftrpostdesc">
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>   
                    	<span><?php the_date('F j, Y') ?></span>               	
                    </div>
                    <div class="clear"></div>
                    </li>
                    <?php endwhile; ?>
                    </ul>
                    <?php wp_reset_query(); ?>         	
              	 </div>
            <?php endif; ?>
                
                    <div class="clear"></div>
            </div><!--end .cols-3-->  
            <?php
            }
            elseif($footerlayout=='fourcolumn'){ ?>

<!-- =============================== Column Fourth - 4 =================================== -->
          
    		<div class="cols-4">    
                <?php if(!dynamic_sidebar('footer-1')) : ?>  
                <div class="widget-column-1"> 
                   <h5><?php if( of_get_option('abouttitle') != '') { echo of_get_option('abouttitle'); } ; ?></h5>
                   <?php if( of_get_option('aboutusdescription') != '') { echo do_shortcode(of_get_option('aboutusdescription')); } ; ?>
                   <?php if( of_get_option('headersocial') != '') { echo do_shortcode(of_get_option('headersocial')); } ; ?>           
              </div>                  
			<?php  endif; ?>
           
                
            <?php if(!dynamic_sidebar('footer-2')) : ?>
              <div class="widget-column-2"> 
                <h5><?php if( of_get_option('quicklinktitle') != ''){ echo of_get_option('quicklinktitle');}; ?></h5>
                 <?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
               </div>
            <?php endif; ?>
            
                <?php if(!dynamic_sidebar('footer-3')) : ?>
             	 <div class="widget-column-3"> 
                     <h5><?php if( of_get_option('ourservicestitle') != ''){ echo of_get_option('ourservicestitle');}; ?></h5>
                    <?php wp_nav_menu( array( 'theme_location' => 'services') ); ?>
              	 </div>
            	<?php endif; ?>
            
            
            <?php if(!dynamic_sidebar('footer-4')) : ?> 
              <div class="widget-column-4">
                  <h5><?php if( of_get_option('letestpoststitle') != ''){ echo of_get_option('letestpoststitle');}; ?></h5>  
                  
                 <ul class="recent-post"> 
                	<?php query_posts(  array( 'posts_per_page'=> 2, 'post__not_in' => get_option('sticky_posts') )  ); ?>
                    <?php  while( have_posts() ) : the_post(); ?> 
                    <li>
                    <?php if ( has_post_thumbnail() ) { $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );   $thumbnailSrc = $src[0]; ?>
                    <div class="footerthumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnailSrc; ?>" alt="" ></a> </div>
					<?php } else { ?>
                    <div class="footerthumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/img_404.png" /></a></div>
                    <?php } ?>
                    <div class="ftrpostdesc">
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>   
                    	<span><?php the_date('F j, Y') ?></span>               	
                    </div>
                    <div class="clear"></div>
                    </li>
                    <?php endwhile; ?>
                    </ul>
                    <?php wp_reset_query(); ?> 
              </div>             
            <?php endif; ?>
                
                    <div class="clear"></div>
                </div><!--end .cols-4-->
             <?php } ?>  
            <div class="clear"></div>
         </div><!--end .ftr_holder-->
    </div><!--end .container-->
<?php } ?>     
        <div class="copyright-wrapper">
        	<div class="container">                                        	
           		
                <div class="copyright-txt"><?php if( of_get_option('copytext',true) != ''){ echo of_get_option('copytext',true); }; ?></div>
                <?php /*?><div class="design-by"><?php if( of_get_option('ftlink') != '') { echo do_shortcode(of_get_option('ftlink')); } ; ?></div><?php */?>
                <div class="clear"></div>
            </div> 
       </div>
       
    </div>    
<?php if( of_get_option('backtotop') != '') { echo do_shortcode(of_get_option('backtotop')); } ; ?>
<?php wp_footer(); ?>
</div>
</body>
</html>