<?php
/**
 * The Template for displaying all single posts.
 *
 * @package The Church
 */
get_header(); ?>

<div class="container content-area">
    <div class="middle-align">
        <div class="site-main sitefull">
			<?php while ( have_posts() ) : the_post(); ?>
            <h1 class="entry-title"><?php the_title();?></h1>
               <div class="post-thumb"><?php the_post_thumbnail('medium', array( 'class' => 'alignleft' ) ); ?></div><!-- post-thumb -->
				<?php
                    $custom = get_post_custom(get_the_ID());
                    $gt_event_ctdate = esc_html( get_post_meta( get_the_ID(), 'gt_event_ctdate', true ) );					
					$gt_event_cttime = esc_html( get_post_meta( get_the_ID(), 'gt_event_cttime', true ) );					
					$gt_event_vanue = esc_html( get_post_meta( get_the_ID(), 'gt_event_vanue', true ) );
					$gt_event_pastor = esc_html( get_post_meta( get_the_ID(), 'gt_event_pastor', true ) ); 
                ?>
<div class="fullcolumn-event-right">  
   <?php if(!empty($gt_event_ctdate)) { ?>
    <div class="vanuetiemhost">
        <i class="far fa-calendar-alt"></i>
        <div class="vanue-tiem-host"><strong><?php _e('Date','the-church'); ?> : </strong><div> <?php echo $gt_event_ctdate;?> </div></div>
    </div>
   <?php } ?>
   <?php if(!empty($gt_event_vanue)) { ?>
    <div class="vanuetiemhost">
        <i class="fas fa-map-marker-alt"></i>
        <div class="vanue-tiem-host"><strong><?php _e('Venue','the-church'); ?> : </strong><div> <?php echo $gt_event_vanue; ?> </div></div>
    </div>
  <?php } ?>
  <?php if(!empty($gt_event_cttime)) { ?>
    <div class="vanuetiemhost">
        <i class="far fa-clock"></i>
        <div class="vanue-tiem-host"><strong><?php _e('Time','the-church'); ?> : </strong><div class="time"><?php echo $gt_event_cttime; ?></div></div>
    </div>
   <?php } ?>
    
</div>                                    
                                    
			<?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>