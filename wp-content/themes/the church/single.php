<?php
/**
 * The Template for displaying all single posts.
 *
 * @package The Church 
 */
get_header(); 

if( of_get_option('singlelayout',true) != ''){
	$layout = of_get_option('singlelayout');
}
?>

<style>
<?php
if( of_get_option('singlelayout', true) == 'singleleft' ){
	echo '#sidebar { float:left !important; }'; 
}
?>
</style>

<div class="container content-area">
    <div class="middle-align">
        <div class="site-main <?php echo $layout; ?>" id="sitemain">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'single' ); ?>
                <?php the_church_content_nav( 'nav-below' ); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <?php 
		if( $layout != 'sitefull' && $layout != 'nosidebar' ){
		  get_sidebar('blog');
		} ?>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>