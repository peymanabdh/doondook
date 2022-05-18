<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>


<div class="single-loop-game">
    <div class="card">
		<a href="<?php echo get_permalink(); ?>">
		<?php 
		   $address_post_id = get_the_ID();
		   $productc = wc_get_product(get_the_ID());
		   $product_attributes = $productc->get_attributes();
		   $manufacturer_id = $product_attributes['pa_license']['options']['0']; // returns the ID of the term
		   $manufacturer_name = get_term($manufacturer_id)->name; // gets the term name of the term from the ID   
		?>
			<!-- ribbon premium best-seller -->
			<div class="ribbon <?php if ($manufacturer_name == 'best-seller'){echo "best-seller";} elseif($manufacturer_name == 'premium'){ echo "premium";} ?>"></div>
	
			<div class="image" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div>
			<div class="related-content">
				<h3><?php the_title(); ?></h3>
				<p><?php echo strip_tags(get_the_content()); ?></p>
				<div class="price-area">
				<?php $price = get_post_meta( get_the_ID(), '_price', true );
				// wc_price( $price ); 
				// $product = wc_get_product( $post_id );
				// $get_regular_price=$product->get_regular_price();
				// $get_sale_price=$product->get_sale_price();
				// $get_price=$product->get_price();
				?>
					<?php if (isset($product->regular_price) && $product->regular_price != ''): ?><span class="off-price"><?php echo '$' . $product->regular_price; ?></span><?php endif; ?>
					<?php if (isset($product->sale_price) && $product->sale_price != ''): ?><span class="price"><?php echo '$' . $product->sale_price; ?></span><?php endif; ?>
				</div>
			</div>
		</a>
	</div>  

</div>