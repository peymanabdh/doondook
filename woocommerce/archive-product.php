<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
?>
<div class="page-wrapper archive-product-wrapper">
	<?php $archive_product_meta =pishro_get_option('archive_product_meta');
	?>
    <h1><?php echo $archive_product_meta[0]['archive_product_title_meta']; ?></h1>
	<div class="card archive-description-box">
		<div class="archive-description-content">
		<?php echo $archive_product_meta[0]['archive_product_content']; ?>
		</div>
	</div>
    <div class="page-content archive-product-content">
		
		<div class="all-game-box">
			<?php
				if ( woocommerce_product_loop() ) {
					// do_action( 'woocommerce_before_shop_loop' );

					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();
							do_action( 'woocommerce_shop_loop' );
							wc_get_template_part( 'content', 'product' );
						}
					}
					woocommerce_product_loop_end();
					
					?>
				<?php 
					$pagination=get_the_posts_pagination();
					if($pagination !=null):
				?>
					<div class="pagination-wrapper">
						<div class="card">
							<?php
							the_posts_pagination( array( 
								'mid_size' 	=> 2,
								// 'prev_next' => false,
								'prev_text' => '<span class="prev-next pagination-prev"></span>',
								'next_text' => '<span class="prev-next pagination-next"></span>',
								) );
							?>
						</div>
					</div>
				<?php endif; ?>	
					<?php
					// do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				}
			?>
		</div>
			
    </div>
</div>
<?php get_footer( 'shop' );
