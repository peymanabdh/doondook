<footer>
<?php 
        $terms = get_terms( array( 
            'taxonomy' => 'pa_genre',
            'fields' => 'all',
            'orderby' => 'name',
            'order' => 'ASC',
            'include' => 'all',
            'exclude' => 'all',
            'exclude_tree' => 'all',
            'hide_empty' => false,
        ) );
?>
    <div class="footer-wrapper footer-tags">
        <?php  foreach ( $terms as $term ):?>
            <?php $term_link = get_term_link( $term ); ?>
            <a href="<?php echo $term_link; ?>" title=""><?php echo $term->name; ?></a>
        <?php endforeach; ?>
    </div>

    <div class="footer-wrapper footer-links">
        <div class="footer-link-col">
        <?php $Footer_co_sec =pishro_get_option('footer_first_section');?>
            <h4>Company</h4>
            <?php foreach($Footer_co_sec as $item): ?>
                <a href="<?php echo $item['footer_company_section_url'] ?>" title="link"><?php echo $item['footer_company_section_title'] ?></a>
            <?php endforeach; ?>
        </div>
        <div class="footer-link-col">
            <h4>Services</h4>
            <?php 
                 $quey=new WP_Query(
                    array(
                         'post_type'=>'service',
                         'posts_per_page'=>'4',
                    )
                );
                while($quey->have_posts()):
                     $quey->the_post();?>
                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
               <?php endwhile;
               wp_reset_query();
            ?> 
            <?php $countPostType=wp_count_posts($post_type ='service')->publish; ?>
                <?php if($countPostType>8): ?>
                <a href="#" title="">See All ></a>
                <?php endif; ?>      
        </div>

        <div class="footer-link-col">
            <h4>Latest Games </h4>
            <?php 
                 $quey=new WP_Query(
                    array(
                         'post_type'=>'product',
                         'posts_per_page'=>'4',
                         'order' => 'DESC',
                        'post_status' => 'publish',
                    )
                );
                while($quey->have_posts()):
                     $quey->the_post();?>
                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
               <?php endwhile;
               wp_reset_query();
            ?> 
            <a href="#" title="">See All ></a>
        </div>
        <div class="footer-link-col">
            <h4>Best Seller Games </h4>  
            <?php 
                 $quey=new WP_Query(
                    array(
                         'post_type'=>'product',
                         'posts_per_page'=>'4',
                        'product_cat' => 'best-seller',
                         'order' => 'DESC',
                        'post_status' => 'publish',
                    )
                );
                while($quey->have_posts()):
                     $quey->the_post();?>
                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
               <?php endwhile;
               wp_reset_query();
            ?> 
            <a href="#" title="">See All ></a>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-logo"></div>
        <div class="footer-bottom-logo-text">
        DoonDookStudio
        </div>
        <div class="footer-bottom-copyright">
        Copyright © 2018-<?php echo date("Y"); ?> by DoonDookStudio All Rights Reserved.
        </div>
    </div>
</footer>
        <?php wp_footer(); ?>
        <script src="<?php echo theme_uri('assets/javascript/script.js') ?>"></script>
    </body>
</html>