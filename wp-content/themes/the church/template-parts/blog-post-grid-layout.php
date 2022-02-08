<?php
/* Template Name: Blog - Grid Layout */
get_header(); ?>

<div class="container content-area">
    <div class="middle-align">
        <div class="site-main sitefull bloggridlayout">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            <header><h1 class="entry-title"><?php the_title(); ?></h1></header>
            <?php endwhile; else: endif; ?>

			<?php 
			$n = 0;
            if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
            elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
            else { $paged = 1; }
            $query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ) ); ?>
            <?php if( $query->have_posts() ) : ?>
                <?php while( $query->have_posts() ) : $query->the_post(); 
				  $n++;
					 if( $n%3==0 )  $nomgn = 'last';	else $nomgn = ' ';
				?>
                   <div class="blog-post-repeat <?php echo $nomgn; ?>">
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
                <?php endwhile; ?>
                <?php the_church_custom_blogpost_pagination( $query ); ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'index' ); ?>
            <?php endif; ?>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>