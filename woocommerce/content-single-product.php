<?php

global $product;
// attributes
$orientation = $product->get_attribute('orientation');
$play_mode = $product->get_attribute('play-mode');
$engine = $product->get_attribute('engine');
$genre = $product->get_attribute('genre');

// metas
$game_preview = get_post_meta($product->get_id(), 'game_preview', true);
$game_youtube_video = get_post_meta($product->get_id(), 'game_youtube_video', true);
$description = get_post_meta($product->get_id(), 'description', true);
$long_desc_title=get_post_meta(get_the_ID(),'long_description_title',true);
$terms = [];
$variations = [];

?>
<div class="page-wrapper single-product-wrapper">
    <h1><?php the_title(); ?></h1>
    <div class="page-content single-product-content">
        <div class="main-content">


            <!-- desktop slider -->

            <div class="card hide-in-mobile">
                <div class="top-slider">
                    <div class="top-slider-view">
                        <div class="top-slider-view-game active">
                            <?php
                            $iframe_game=get_post_meta(get_the_ID(),'iframe_link',true);
                            $iframe_video=get_post_meta(get_the_ID(),'youtub_link',true);
                            ?>
                            <iframe src="<?php echo $iframe_game; ?>" ></iframe>
                            <div class="top-slider-view-game-overlay" >
                                <img src="<?php echo theme_uri('assets/image/single-product/play-iframe.png') ?>" />
                                <h3>Tap to Play</h3>
                            </div>
                        </div>
                        <div class="top-slider-view-video">
                            <iframe width="560" height="315" src="<?php echo $iframe_video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="top-slider-view-images">
                            <div class="top-slider-view-images-carousel">
<!--                                <img class="lazy-image" data-src="https://doondook.studio/wp-content/uploads/2021/12/1.png" >-->
<!--                                <img class="lazy-image" data-src="https://doondook.studio/wp-content/uploads/2021/12/1.png" >-->
<!--                                <img class="lazy-image" data-src="https://doondook.studio/wp-content/uploads/2021/12/1.png" >-->
<!--                                <img class="lazy-image" data-src="https://doondook.studio/wp-content/uploads/2021/12/1.png" >-->

                                <?php
                                $attachment_ids = $product->get_gallery_image_ids();
                                foreach( $attachment_ids as $attachment_id ): ?>
                                    <?php echo wp_get_attachment_image($attachment_id, 'full'); ?>
                                <?php endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="top-slider-btns">
                        <div class="top-slider-single-btn active" id="game"><span></span></div>
                        <div class="top-slider-single-btn" id="video"><span></span></div>
                        <div class="top-slider-single-btn" id="images"><span></span></div>
                    </div>
                </div>
            </div>


            <!-- mobile slider -->

            <div class="hide-in-tablet hide-in-desktop mobile-slider">
                <iframe width="560" height="315" src="<?php echo $iframe_video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php
                         $attachment_ids = $product->get_gallery_image_ids();
                         foreach( $attachment_ids as $attachment_id ): ?>
                          <?php echo wp_get_attachment_image($attachment_id, 'full'); ?>
                        <?php endforeach;
                     ?>
            </div>


            <!-- taxonomies -->

            <div class="game-details-row">
                <div class="card taxonomy-box">
                    <div class="taxonomy-box-row">
                        <div class="taxonomy-box-col">
                            <div class="taxonomy-detail genre">
                                <div>
                                    <span class="taxonomy-title ">
                                        Genre:
                                    </span>
                                    <span class="taxonomy-value">
                                       <?php echo $genre ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="taxonomy-box-col">
                            <div class="taxonomy-detail play-mode">
                                <div>
                                    <span class="taxonomy-title ">
                                        Play Mode:
                                    </span>
                                    <span class="taxonomy-value">
                                       <?php echo $play_mode ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="taxonomy-box-row">
                        <div class="taxonomy-box-col">
                            <div class="taxonomy-detail engine">
                                <div>
                                    <span class="taxonomy-title ">
                                        Engine:
                                    </span>
                                    <span class="taxonomy-value">
                                      <?php echo $engine ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="taxonomy-box-col">
                            <div class="taxonomy-detail orientation">
                                <div>
                                    <span class="taxonomy-title ">
                                        Orientation:
                                    </span>
                                    <span class="taxonomy-value">
                                      <?php echo $orientation ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="taxonomy-box-row">
                        <div class="taxonomy-detail tag">
                            <div>
                                <span class="taxonomy-title ">
                                    Tags:
                                </span>
                                <span class="taxonomy-value">
                                    <?php
                                    $current_tags = get_the_terms( get_the_ID(), 'product_tag' );
                                    if ( $current_tags && ! is_wp_error( $current_tags ) ) {
                                        foreach ($current_tags as $tag) {
                                            $tag_title = $tag->name; // tag name
                                            $tag_link = get_term_link( $tag );// tag archive link
                                            echo '<a href="'.$tag_link.'">'. $tag_title.' '.'</a>';
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card play-on-mobile-box">
                    <div class="mobile-icon"></div>
                    <div class="play-on-mobile-text">
                        <?php   $paly_mobile_meta=get_post_meta(get_the_ID(),'play_on_mobile_title',true); ?>
                        <?php   $paly_mobile_link_meta=get_post_meta(get_the_ID(),'play_on_mobile_url',true); ?>
                        <h3><?php echo $paly_mobile_meta; ?></h3>
                        <a href="#"><?php echo $paly_mobile_link_meta; ?></a>
                    </div>
                </div>
            </div>


            <!-- content -->

            <div class="card game-description-box pdng">
                <div class="description-title">
                    <?php   $description_icon_meta=get_post_meta(get_the_ID(),'description_icon',true); ?>
                    <div class="description-title-image" style="background-image: url(<?php echo $description_icon_meta; ?>);"></div>
                    <div class="description-title-text">
                        <?php   $description_title_meta=get_post_meta(get_the_ID(),'description_title',true); ?>
                        <h2><?php echo $description_title_meta; ?></h2>
                    </div>
                </div>
                <div class="content-area">
                    <!-- https://coderwall.com/p/c6ifsw/simple-way-to-insert-a-string-into-another-string-at-any-position-in-php -->
                    <div class="content hide-in-mobile hide-in-tablet">
                        <?php remove_filter ('the_content', 'wpautop'); the_content(); ?>                    </div>
                    <div class="content hide-in-desktop">
                   <span id="excerpt-content"><?php remove_filter ('the_excerpt', 'wpautop'); the_excerpt(); ?></span><span class="dots">...</span><span class="more" style="display:none"> <?php remove_filter ('the_content', 'wpautop'); the_content(); ?> </span> <span onclick="onClickSeeMore()" id="see-more-btn">see more</span>
                    </div>
                    <div class="feature-suitable">
                        <div class="features">
                            <?php
                            $Doondook_general_Features=get_post_meta(get_the_ID(),'Doondook_general_Features',true);
                            $Doondook_general_Suitable=get_post_meta(get_the_ID(),'Doondook_general_Suitable',true);

                            ?>
                            <h4><?php echo  $Doondook_general_Features[0]['doondook_Features_title_option']; ?> </h4>
                            <ul>
                                <?php foreach ( $Doondook_general_Features[0]['doondook_Features_option'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="suitable">
                            <h4><?php echo   $Doondook_general_Suitable[0]['doondook_Suitable_title_option']; ?> </h4>
                            <ul>
                                <?php foreach (  $Doondook_general_Suitable[0]['doondook_Suitable_option'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- services -->

              <div class="card game-services-box pdng hide-in-tablet hide-in-mobile">
                <div class="description-title">
                    <div class="description-title-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                    <div class="description-title-text">
                        <h2>Want to recieve additional services on this game? Good news! We provide everything you need!</h2>
                    </div>
                </div>

                <div class="services-box">

                <?php
                        $feild=get_field('sercice_id_option','option');
                        $val=implode(',',$feild);
                        $attachments = get_posts( array(
                            'post_type'      => 'service',
                            'posts_per_page'=>4,
                            'include'   => $val,
                        ) );
                        ?>

                        <?php if ($attachments ) {
                            foreach ( $attachments as $post ) { 
                                $post_title =$post->the_title;
                               
                        ?>
                             
                            <div class="game-single-service">
                                <div class="game-service-icon" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
                                <div class="game-service">
                                <a href="<?php the_permalink($post->ID); ?>"> <h4 class="game-service-title"> <?php echo $post->post_title; ?> </h4>  </a>
                                <a href="<?php the_permalink($post->ID); ?>"><p class="game-service-content">
                                    <?php echo $post->post_excerpt; ?>
                                    </p>
                                    </a>
                                    <div class="game-service-btns">
                                        <button class="small-btn blue">Learn More</button>
                                        <button class="small-btn yellow">Contact Us</button>
                                    </div>
                                </div>
                               
                            </div>
                           
                            <?php } ?>
                            <?php wp_reset_postdata(); ?>
                            <?php } ?>
                                    
                </div>

            </div>

        </div>

        <!-- sidebar -->

        <div class="sidebar-content">
            <div class="card">
                <div class="price-license-box">
                    <div class="header-area">
                        <div class="price-area">
                            <span class="off-price">$<?php echo $product->regular_price; ?></span>
                            <span class="price">$<?php echo $product->sale_price; ?></span>
                        </div>
                        <h3>Single License</h3>
                    </div>
                    <div class="license-area">
                        <?php   $sigle_license_meta=get_post_meta(get_the_ID(),'Doondook_general_single_license',true); ?>
                        <h3><?php echo $sigle_license_meta[0]['doondook_details_title_option']; ?> </h3>
                        <ul>
                            <?php foreach ($sigle_license_meta[0]['doondook_details_option'] as $item): ?>
                            <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div>
                        <?php $popups =pishro_get_option('Doondook_general_popup_options'); ?>
                            <span class="<?php echo trim($popups[0]['doondook_price_box_popup_option']); ?>">Learn more</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="contact-form-box">
                    <div class="description-title">
                        <?php $contact_us_icon=get_post_meta(get_the_ID(),'contact_form_icon',true); ?>
                        <div class="description-title-image" style="background-image: url(<?php echo $contact_us_icon; ?>);"></div>
                        <div class="description-title-text">
                        <?php $contact_us_title=get_post_meta(get_the_ID(),'contact_form_title',true); ?>
                            <h2><?php echo $contact_us_title; ?></h2>
                        </div>
                    </div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="11279" title="Untitled"]') ?>
                    </div>
                    <div class="product-badges">
                        <div class="single-badge">
                            <div class="icon quality"></div>
                            <div class="title">Quality Checked</div>
                        </div>
                        <div class="single-badge">
                            <div class="icon device"></div>
                            <div class="title">Run on All Devices</div>
                        </div>
                        <div class="single-badge">
                            <div class="icon support"></div>
                            <div class="title">6 Months Support</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- services -->

            <div class="card game-services-box pdng hide-in-desktop">
                <div class="description-title">
                    <div class="description-title-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                    <div class="description-title-text">
                        <h2>Want to recieve additional services on this game? Good news! We provide everything you need!</h2>
                    </div>
                </div>

               
                <div class="services-box">

                <?php
                        $feild=get_field('sercice_id_option','option');
                        $val=implode(',',$feild);
                        // $attachments = get_posts( array(
                        //     'post_type'      => 'service',
                        //     'include'   => $val,
                        // ) );
                        $args = array(
                            'post_type' => array( 'service' ),
                            'posts_per_page'  => 4,
                            'meta_key' => 'sercice_id_option',
                            'orderby' => 'meta_value',
                            'order'	=> 'DESC'
                        );
                        $att=new WP_Query($args);
                        ?>

                        <?php if ($att ) {
                            foreach ( $att as $post ) { 
                                $post_title =$post->the_title;
                               
                        ?>
                             
                            <div class="game-single-service">
                                <div class="game-service-icon" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
                                <div class="game-service">
                                <a href="<?php the_permalink($post->ID); ?>"> <h4 class="game-service-title"> <?php echo $post->post_title; ?> </h4>  </a>
                                <a href="<?php the_permalink($post->ID); ?>"><p class="game-service-content">
                                    <?php echo $post->post_excerpt; ?>
                                    </p>
                                    </a>
                                    <div class="game-service-btns">
                                        <button class="small-btn blue">Learn More</button>
                                        <button class="small-btn yellow">Contact Us</button>
                                    </div>
                                </div>
                               
                            </div>
                           
                            <?php } ?>
                            <?php wp_reset_postdata(); ?>
                            <?php } ?>
                                    
                </div>

            </div>

        </div>


        
        
    </div>
    
    <hr class="hr-top-similar">

    <div class="similar-games">
        <div class="header-s-a-link">
            <h3>Similar Games</h3>
            <a href="#">See All ></a>
        </div>
        
        <div class="all-game-box">

        <?php
            $post_id = get_the_ID();
            $cat_ids = array();
            $categories = get_the_category( $post_id );
           
            
            if(!empty($categories) && !is_wp_error($categories)):
                foreach ($categories as $category):
                    array_push($cat_ids, $category->term_id);
                endforeach;
            endif;
            
            $current_post_type = get_post_type($post_id);
            
            $query_args = array( 
                'category__in'   => $cat_ids,
                'post_type'      => $current_post_type,
                'post__not_in'    => array($post_id),
                'posts_per_page'  => '8',
             );
            
            $related_cats_post = new WP_Query( $query_args );
            if($related_cats_post->have_posts()):
            

        ?>
        <?php while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?> 

            <?php wc_get_template_part( 'content', 'product' ) ?>
            
            
	<?php 
	endwhile;
    wp_reset_postdata();
	endif;
	?>


        </div>
    </div>

</div>

<script>    
    function onClickSeeMore(){
        jQuery(document).ready(function(){
            $('#see-more-btn').css('display', 'none')
            $('.content .dots').css('display', 'none')
            $('.content .more').css('display', 'inline')
            $('#excerpt-content').css('display', 'none')
            
        })
    }
</script>