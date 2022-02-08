<?php
/*
Template Name: No Sidebar
*/

get_header(); ?>

<div class="container content-area">
    <div class="middle-align">
        <div class="site-main nosidebar">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php
                //If comments are open or we have at least one comment, load up the comment template
                //if ( comments_open() || '0' != get_comments_number() )
                    //comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>