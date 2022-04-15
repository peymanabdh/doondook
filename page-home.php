<?
/*
 * Template Name: home page themeplaet
 */
?>
<?php get_header() ?>


<div class="page-wrapper page-wrapper-full-width home-page-wrapper">
    <div class="page-content home-page-content">

        <div class="first-box card" style="background-image: url(https://picsum.photos/id/108/1240/384);">
            <div class="text-content">
                <h2>
                    WE HELP COMPANIES IMPROVE PERFORMANCE THROUGH
                    <span>Games</span>
                </h2>
            </div>
        </div>

        <div class="home-introduce-section">
            <div class="video card">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Wch3gJG2GJ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="contact-us card">
                <div class="description-title">
                    <div class="description-title-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                    <div class="description-title-text">
                        <h2>How DoonDookStudio works?</h2>
                    </div>
                </div>
                <div class="content">
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by <strong>injected humour</strong>, or randomised words which don't look even slightly believable. 
                    </p> 
                    <p>
                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There are many variations of passages. 
                    </p>
                </div>
                <div class="btn-box">
                    <button class="small-btn green">Contact Us</button>
                </div>
            </div>
        </div>

        <div class="home-page-services-box card">
            <div class="description-title">
                <div class="description-title-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                <div class="description-title-text">
                    <h2>Some of our services that we do in the best way.</h2>
                </div>
            </div>
            <div class="home-services-container">
                <div class="service">
                    <div class="service-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                    <h4 class="service-title">Leaderboard</h4>
                    <p class="service-text">Lorem Ipsum is simply dummy text of the print and typesetting industry of texts. </p>
                    <button class="small-btn blue">Learn More</button>
                </div>
                <div class="service">
                    <div class="service-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                    <h4 class="service-title">Leaderboard</h4>
                    <p class="service-text">Lorem Ipsum is simply dummy text of the print and typesetting industry of texts. </p>
                    <button class="small-btn blue">Learn More</button>
                </div>
                <div class="service">
                    <div class="service-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                    <h4 class="service-title">Leaderboard</h4>
                    <p class="service-text">Lorem Ipsum is simply dummy text of the print and typesetting industry of texts. </p>
                    <button class="small-btn blue">Learn More</button>
                </div>
                <div class="service">
                    <div class="service-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                    <h4 class="service-title">Leaderboard</h4>
                    <p class="service-text">Lorem Ipsum is simply dummy text of the print and typesetting industry of texts. </p>
                    <button class="small-btn blue">Learn More</button>
                </div>
                
            </div>

        </div>

        <div class="game-loop tablet-mobile-carousel">
            <div class="header-s-a-link">
                <h3>Similar Games</h3>
                <a href="#">See All ></a>
            </div>
            
            <div class="all-game-box">

            <?php
                $post_id = 11270;
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
                    'posts_per_page'  => '4',
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

        <div class="our-customer-box card">
            <div class="description-title">
                <div class="description-title-image" style="background-image: url(<?php echo theme_uri('assets/image/single-product/services.svg') ?>);"></div>
                <div class="description-title-text">
                    <h2>Some of our happy clients that we are proud to work with.</h2>
                </div>
            </div>
            <div class="customer-box-icons owl-carousel">
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
                <img src="<?php echo theme_uri('assets/image/single-product/services.svg') ?>" />
            </div>
        </div>

        <div class="customer-comment-box owl-carousel owl-theme">
            <div class="customer-single-comment card">
                <div class="comment-section">
                    <p>
                        DoonDookStudio’s team have shown that they have a great proficiency in Construct game engine in a collaboration with AvaGames, and their HTML5 game license have met our requirements in terms of
                        performance and quality. An important feature of DoonDookStudio is proper support that they have been
                        available until fixing all the bugs of the project.
                    </p>
                </div>
                <div class="line"></div>
                <div class="user-section">
                    <div class="customer-avatar" style="background-image: url(https://picsum.photos/200/200);"></div>
                    <div class="name-position">
                        <span class="name">Ali Sheikhshab</span>
                        <span class="position">Product Manager at AvaGames</span>
                    </div>
                </div>
            </div>
            <div class="customer-single-comment card">
                <div class="comment-section">
                    <p>
                        DoonDookStudio’s team have shown that they have a great proficiency in Construct game engine in a collaboration with AvaGames, and their HTML5 game license have met our requirements in terms of
                        available until fixing all the bugs of the project.
                    </p>
                </div>
                <div class="line"></div>
                <div class="user-section">
                    <div class="customer-avatar" style="background-image: url(https://picsum.photos/200/200);"></div>
                    <div class="name-position">
                        <span class="name">Ali Sheikhshab</span>
                        <span class="position">Product Manager at AvaGames</span>
                    </div>
                </div>
            </div>
            <div class="customer-single-comment card">
                <div class="comment-section">
                    <p>
                        available until fixing all the bugs of the project.
                    </p>
                </div>
                <div class="line"></div>
                <div class="user-section">
                    <div class="customer-avatar" style="background-image: url(https://picsum.photos/200/200);"></div>
                    <div class="name-position">
                        <span class="name">Ali Sheikhshab</span>
                        <span class="position">Product Manager at AvaGames</span>
                    </div>
                </div>
            </div>
            <div class="customer-single-comment card">
                <div class="comment-section">
                    <p>
                        available until fixing all the bugs of the project.
                    </p>
                </div>
                <div class="line"></div>
                <div class="user-section">
                    <div class="customer-avatar" style="background-image: url(https://picsum.photos/200/200);"></div>
                    <div class="name-position">
                        <span class="name">Ali Sheikhshab</span>
                        <span class="position">Product Manager at AvaGames</span>
                    </div>
                </div>
            </div>
            <div class="customer-single-comment card">
                <div class="comment-section">
                    <p>
                        available until fixing all the bugs of the project.
                    </p>
                </div>
                <div class="line"></div>
                <div class="user-section">
                    <div class="customer-avatar" style="background-image: url(https://picsum.photos/200/200);"></div>
                    <div class="name-position">
                        <span class="name">Ali Sheikhshab</span>
                        <span class="position">Product Manager at AvaGames</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer() ?>