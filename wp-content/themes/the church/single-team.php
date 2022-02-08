<?php
/**
 * The Template for displaying all single posts.
 *
 * @package The Church 
 */
get_header(); 

if( of_get_option('teamsinglelayout',true) != ''){
	$layout = of_get_option('teamsinglelayout');
}
?>

<style>
<?php
if( of_get_option('teamsinglelayout', true) == 'singleleft' ){
	echo '#sidebar { float:left !important; }'; 
}
?>
</style>	

<div class="container content-area">
    <div class="middle-align">
        <div class="site-main <?php echo $layout; ?>" id="sitemain">
			<?php while ( have_posts() ) : the_post(); ?>
            <h1 class="entry-title"><?php the_title();?></h1>
               <div class="post-thumb"><?php the_post_thumbnail('medium', array( 'class' => 'alignleft' ) ); ?></div><!-- post-thumb -->
               <?php the_content();?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <?php 
		if( $layout != 'sitefull' && $layout != 'nosidebar' ){
		  get_sidebar();
		} ?>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>