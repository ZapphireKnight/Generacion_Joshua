<?php
/**
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

<?php
if ( is_home() || is_front_page() ) {
 if( of_get_option('numsection', true) > 0 ) { 
        $numSections = esc_attr( of_get_option('numsection', true) );
        for( $s=1; $s<=$numSections; $s++ ){ 
            $title 			= ( of_get_option('sectiontitle'.$s, true) != '' ) ? esc_html( of_get_option('sectiontitle'.$s, true) ) : '';
			$secid			= ( of_get_option('menutitle'.$s, true) != '') ? esc_html( of_get_option('menutitle'.$s, true) ) : '';
            $class			= ( of_get_option('sectionclass'.$s, true) != '' ) ? esc_html( of_get_option('sectionclass'.$s, true) ) : '';
            $content		= ( of_get_option('sectioncontent'.$s, true) != '' ) ? of_get_option('sectioncontent'.$s, true) : ''; 
			$hide			= ( of_get_option('hidesec'.$s, true) != '' ) ? of_get_option('hidesec'.$s, true) : '';
            $bgcolor		= ( of_get_option('sectionbgcolor'.$s, true) != '' ) ? of_get_option('sectionbgcolor'.$s, true) : '';
            $bgimage		= ( of_get_option('sectionbgimage'.$s, true) != '' ) ? of_get_option('sectionbgimage'.$s, true) : '';
			if($hide == '') {
            ?>
            <section <?php if( $bgcolor || $bgimage || $hide) { ?>style="<?php echo ($bgcolor != '') ? 'background-color:'.$bgcolor.'; ' : '' ; echo ($bgimage != '') ? 'background-image:url('.$bgimage.'); background-repeat:no-repeat; background-position: center top;  background-attachment:fixed;  background-size:cover; ' : '' ; echo ($hide) != false ? 'display:none;': ''; ?>"<?php } ?> id="<?php echo $secid; ?>" class="<?php echo ( of_get_option('menutitle'.$s, true) != '' ) ? 'menu_page' : '';?>">
            	<div class="container">
                    <div class="<?php echo ( ($s>22) && $class=='') ? 'top-grey-box' : $class; ?>">
                        <?php if( $title != '' ) { ?>
                        <h2 class="section_title"><?php echo $title; ?></h2>
                    <?php } ?>
                    <?php the_content_format( $content ); ?>                     
                     </div><!-- .end section class -->  
                     <div class="clear"></div>                 
                 </div><!-- container -->
            </section>
        
  <?php } } }  ?>
<?php } else { ?> 
<div class="container content-area">
    <div class="middle-align content_sidebar">
        <div class="site-main" id="sitemain">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php
                //If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div>
</div>
<?php } ?>
<?php get_footer(); ?>