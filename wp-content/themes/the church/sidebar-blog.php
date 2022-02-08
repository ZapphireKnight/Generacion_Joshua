<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package The Church 
 */
?>
<div id="sidebar" <?php if( is_page_template('template-parts/blog-post-left-sidebar.php')){?> style="float:left;"<?php } ?>>
    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
    <h3 class="widget-title"><?php _e( 'Category', 'the-church' ); ?></h3>
       <aside id="categories" class="widget">
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
        
       <h3 class="widget-title"><?php _e( 'Archives', 'the-church' ); ?></h3>
        <aside id="archives" class="widget">
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>       
    <?php endif; // end sidebar widget area ?>
	
</div><!-- sidebar -->
