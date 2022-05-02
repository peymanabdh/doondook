<?php

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<div class="page-wrapper archive-product-wrapper">
    <h1><?php the_title(); ?></h1>
	<div class="card archive-description-box">
		<div class="archive-description-content">
			There are many variations of passages of Lorem Ipsum available. 
			But the majority have suffered alteration in some form, by injected humour.
			Order randomised words which don't look even slightly believable. 
			If you are going to use a passage of Lorem Ipsum.
			You need to be sure there isn't anything embarrassing hidden in the middle of text. 
			There are many variations of passages. 
			The first option
			The Mandatory Selection
			And the end of the file
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
