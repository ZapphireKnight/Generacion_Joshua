<?php get_header(); 
if( of_get_option('woocommercelayout',true) != ''){
	$woocommercelayout = of_get_option('woocommercelayout');
}
?>

<style>
<?php
	if( of_get_option('woocommercelayout', true) == 'woocommerceleft' ){
		echo '#sidebar{ float:left !important; }'; 
	}
?>
</style>
<div class="container content-area">
      <div id="sitemain" class="site-main <?php echo $woocommercelayout; ?>" >       
		<?php woocommerce_content(); ?>     
      </div>
     <?php 
		if( $woocommercelayout != 'woocommercesitefull' ){
		  get_sidebar();
	  } ?>
 	<div class="clear"></div>
  </div>
<?php get_footer(); ?>