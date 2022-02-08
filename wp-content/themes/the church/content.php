<?php
/**
 * @package The Church 
 */
?>
			<div class="blog-post-repeat blogrightsidebar">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>	          
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="post-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>    			
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="post-thumb"><?php the_post_thumbnail(); ?></div>    			
                                <?php endif; ?>
                            <?php endif; ?>
                            
                        <header class="entry-header">
                            <h3 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                            <?php if ( 'post' == get_post_type() ) : ?>
                                <div class="postmeta">
                                    <div class="post-date"><?php echo get_the_date('F j, Y'); ?></div><!-- post-date -->
                                    <div class="post-comment"> | <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
                                    <div class="post-categories"> | <?php echo getPostCategories();?></div>                                   
                                </div><!-- postmeta -->
                            <?php endif; ?>
                            
                            
                        </header><!-- .entry-header -->
                    
                        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
                            <div class="entry-summary">
                                <?php echo content( of_get_option('blogpostexcerptlength') ); ?>                  
                                <p class="read-more"><a href="<?php the_permalink(); ?>"><?php echo of_get_option('readmoretext'); ?></a></p>
                            </div><!-- .entry-summary -->
                        <?php else : ?>
                            <div class="entry-content">
                                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'the-church' ) ); ?>
                                <?php
                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . __( 'Pages:', 'the-church' ),
                                        'after'  => '</div>',
                                    ) );
                                ?>
                            </div><!-- .entry-content -->
                        <?php endif; ?>        
                    </article><!-- #post-## -->  
		</div><!-- blog-post-repeat -->