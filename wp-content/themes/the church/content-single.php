<?php
/**
 * @package The Church 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
 <div class="blog-post-repeat">      
   
    
      <?php if ( has_post_thumbnail() ) : ?>
             <div class="post-thumb"><?php the_post_thumbnail(); ?></div>    			
        <?php endif; ?>
        
       <header class="entry-header">
          <h3 class="post-title"><?php the_title(); ?></h3>
       </header><!-- .entry-header -->

    <div class="entry-content">
        <div class="postmeta">
            <div class="post-date"><?php echo get_the_date('F j, Y'); ?></div><!-- post-date -->
            <div class="post-comment"> | <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
            <div class="clear"></div>
        </div><!-- postmeta -->
		
        
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'the-church' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="postmeta blogfooter">
            <div class="post-categories"><?php echo getPostCategories();?></div>
            <div class="post-tags"><?php the_tags(' | Tags: ', ', ', '<br />'); ?> </div>
            <div class="clear"></div>
        </div><!-- postmeta -->
    </div><!-- .entry-content -->
   
    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'the-church' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
  </div>
</article>