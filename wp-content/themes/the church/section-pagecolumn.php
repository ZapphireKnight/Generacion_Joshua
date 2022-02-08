<?php if ( is_home() || is_front_page() ) { ?>

<?php $hidefourbxsec = of_get_option('hidefourbxsec', '1'); ?>
<?php if($hidefourbxsec == ''){ ?>                    
<section id="pagearea">
  <div class="container"> 
  <div class="row-wrapper">
		<?php
			$title_arr = array( esc_attr__('Our mission','the-church'),  esc_attr__('Our community','the-church'), esc_attr__('join a group','the-church'));
			$boxArr = array();
			   if( of_get_option('box1',true) != '' ){
				$boxArr[] = of_get_option('box1',false);
			   }
			   if( of_get_option('box2',true) != '' ){
				$boxArr[] = of_get_option('box2',false);
			   }
			   if( of_get_option('box3',true) != '' ){
				$boxArr[] = of_get_option('box3',false);
			   }
			   if( of_get_option('box4',true) != '' ){
				$boxArr[] = of_get_option('box4',false);
			   }
			   if( of_get_option('box5',true) != '' ){
				$boxArr[] = of_get_option('box5',false);
			   }
			    if( of_get_option('box6',true) != '' ){
				$boxArr[] = of_get_option('box6',false);
			   }			   			 			
			
			if (!array_filter($boxArr)) { for($fx=1; $fx<=3; $fx++) { ?>
            <div class="fourpagebox">             
<div class="thumbbx"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/services-icon<?php echo $fx; ?>.png" alt="" /></a></div>
             <div class="pagecontent">
             <a href="#"><h3><?php echo $title_arr[$fx-1]; ?></h3></a>                                       
               <p><?php _e('Donec in metus lectus. Integer vulputate porta elittin fringilla mollis mag luctus vel. Interdum et malsuada fames ac ante ipsum primis in fauci.', 'the-church') ?></p>            
             </div>
         	</div>
			<?php 
			} 
			} else {			
				$box_column = array('no_column','one_column','two_column','three_column','four_column','five_column','six_column');
				$fx = 1;				
				$queryvar = new wp_query(array('post_type' => 'page', 'post__in' => $boxArr, 'posts_per_page' => 6, 'orderby' => 'post__in' ));				
				while( $queryvar->have_posts() ) : $queryvar->the_post(); ?> 
        	    <div class="fourpagebox <?php echo $box_column[count($boxArr)]; ?>" >
				<?php if( of_get_option('boximg'.$fx, true) != '') { ?>	
                <div class="thumbbx imgbx"> <a href="<?php the_permalink(); ?>"><img alt="" src="<?php echo esc_url( of_get_option( 'boximg'.$fx, true )); ?>" / ></a></div>
                <?php } ?>
                <div class="pagecontent">
                 <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                  <p><?php echo wp_trim_words( get_the_content(), of_get_option('pageboxlength'), '' ); ?></p>				  
                </div>
        	   </div>
             <?php 
			 $fx++; 
			 endwhile;
			 wp_reset_postdata();
			 }		
		 ?>  
         
        <div class="clear"></div>
    </div><!-- .row-wrapper-->
    </div><!-- .container -->
</section><!-- #pagearea -->
<?php } ?>


<?php $hidewelcome = of_get_option('hidewelcomesection', '1'); ?>
		<?php if($hidewelcome == ''){ ?>
<section id="welcomearea">
    <div class="container">  
        <div class="welcomebx">
            <?php if( of_get_option('welcomebox',false) ) { ?>
        	<?php $queryvar = new wp_query('page_id='.of_get_option('welcomebox',true));				
			while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>                                           
                <div class="one_half">     
                    <?php if( of_get_option('welcomeimage', true) != '') { ?>	
                        <div class="welcomebox"><img alt="" src="<?php echo esc_url( of_get_option( 'welcomeimage', true )); ?>" / ></div> 
                    <?php } ?>
                </div>
                <div class="one_half last_column"><h2 class="section_title">
                    <?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <div class="space" style="height:20px"></div>
                    <?php if( of_get_option('welcomefeatured') != '') { echo do_shortcode(of_get_option('welcomefeatured')); } ; ?>
                </div>
				<div class="clear"></div>     	  
             <?php endwhile; wp_reset_postdata(); ?>
        <?php } else { ?>         
        	<div class="one_half">
            	<div class="welcomebox"><img alt="" src="<?php echo get_template_directory_uri();?>/images/welcomeimage.jpg" / ></div> 
            </div>
<div class="one_half last_column">
<h2 class="section_title"><?php _e('WHY OUR  CHURCH','the-church'); ?></h2>
<h2><?php _e('We are a church that believes in Jesus, loves God and people','the-church'); ?></h2>

<?php _e('<p>Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuada fames ac ante ipsum primis in fauci. Pellentesque in aliquam enim, quis lobortis arcu. Curabitur quis ultrices est</p>','the-church'); ?>
<?php if( of_get_option('welcomefeatured') != '') { echo do_shortcode(of_get_option('welcomefeatured')); } ; ?>
</div>
              
               <div class="clear"></div>	       
		<?php } ?>
       
        </div>  
    </div><!-- .container -->
</section><!-- #welcomearea -->
<?php } ?>

<?php } ?>