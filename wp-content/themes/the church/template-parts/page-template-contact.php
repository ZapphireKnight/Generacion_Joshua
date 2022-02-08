<?php
/**
Template name: Contact Us

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package The Church 
 */

get_header(); ?>

<div class="container content-area">
    <div class="middle-align">
        <div class="site-main sitefull contactpanel"> 
        
               <header class="entry-header">
           	      <h1 class="entry-title"><?php the_title(); ?></h1>
       	        </header><!-- .entry-header -->
                                    
			  <?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>	                			
			  <?php endwhile; // end of the loop. ?>
              
              <div class="clear space40"></div>
              
              <?php if( of_get_option('contactpagedetails') != '' ){ echo do_shortcode( of_get_option('contactpagedetails', true ));} ?>
              
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>