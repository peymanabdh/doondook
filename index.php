<?php get_header(); ?>



<div class="page-wrapper archive-product-wrapper">
    <?php $archive_product_meta = pishro_get_option('archive_product_meta');
    ?>
    <h1><?php echo $archive_product_meta[0]['archive_product_title_meta']; ?></h1>
    <div class="card archive-description-box-blog">
        <div class="archive-description-content">
            <?php echo $archive_product_meta[0]['archive_product_content']; ?>
        </div>
    </div>
</div>

<div class="page-wrapper page">
    <div class="page-content">
        <div class="client-story-main-content">
            <div class="main-back-image-blog" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/image/blog/main-image.png);">

            </div>
            <div class="card-story">
                <div class="card-story-content">
                    <div class="gb-story-content">
                        <p class="gb-story-content-top-title">Customer’s Story <span>| Jul 21st 2022</span></p>
                        <h1 class="gb-story-content-title">How We Made A White Label Game for Famobi Just in 3 Days...</h1>
                        <div class="gb-story-content-title-bottom-section">
                            <!-- <img src="http://localhost:8080/wordpress/doondook/wp-content/uploads/2022/03/Ellipse-9.png"> -->
                            <?php
                            $client_auther_image = get_post_meta(get_the_ID(), 'client_auther_image', true);
                            $client_auther_name = get_post_meta(get_the_ID(), 'client_auther_name', true);
                            $client_auther_description = get_post_meta(get_the_ID(), 'client_auther_description', true);
                            ?>
                            <img src="<?php if ($client_auther_image) {
                                            echo $client_auther_image;
                                        } ?>">
                            <div class="gb-story-content-title-bottom-section-title">
                                <p><?php if ($client_auther_name) {
                                        echo $client_auther_name;
                                    } ?></p>
                                <p><?php if ($client_auther_description) {
                                        echo $client_auther_description;
                                    } ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="all-client-box-blog">

                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'post_type' => 'post'
                );
                $wp_query = new WP_Query($args);
                ?>
                <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :
                        $wp_query->the_post();
                ?>

                        <div class="client-boxes-blog">
                            <a href="<?php the_permalink(); ?>">
                                <div class="client-story-image-blog" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                            </a>
                            <div class="client-story-contents-blog">
                                <a href="<?php the_permalink(); ?>">
                                    <h4><?php the_title(); ?></h4>
                                </a>

                                <div class="client-story-content-tags">
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'category');
                                    // var_dump($terms);  
                                    foreach ($terms as $term) {
                                        echo '<span>' . $term->name . '</span>';
                                    }
                                    ?>
                                    <!-- <span>Development</span>
                                                        <span>White Label</span>
                                                        <span>Reskin</span> -->
                                </div>
                            </div>
                        </div>

                <?php endwhile;
                endif; ?>
                <?php wp_reset_query(); ?>
                <?php
                $pagination = get_the_posts_pagination();
                if ($pagination != null) :
                ?>
                    <div class="pagination-wrapper-blog">
                        <div class="card">
                            <?php
                            the_posts_pagination(array(
                                'mid_size'     => 2,
                                // 'prev_next' => false,
                                'prev_text' => '<span class="prev-next pagination-prev"></span>',
                                'next_text' => '<span class="prev-next pagination-next"></span>',
                            ));
                            ?>
                        </div>
                    </div>
                <?php endif; ?>


            </div>


        </div>

        <div class="sidebar-content">
            <?php $adds_baner = pishro_get_option('adds-section'); ?>
            <?php if ($adds_baner) : ?>
                <?php foreach ($adds_baner as  $item) : ?>
                    <div class="ads-card" style="background-image:url(<?php echo $item['blog_adds']; ?>);height:<?php echo $item['blog_adds_height']; ?>px">
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="card">
                <div class="contact-form-box" id="contact-us">
                    <div class="description-title">

                        <div class="description-title-image" style="background-image: url(http://localhost/wordpress/wp-content/uploads/2022/03/image-13.png);"></div>
                        <div class="description-title-text">
                            <h2>Get latest blog posts</h2>
                        </div>
                    </div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="11405" title="client story"]') ?>
                    </div>
                    <hr class="client-story-hr">
                    <div class="share-icons">

                        <div class="share-title">
                            Share it via
                        </div>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>&title=tttt" class="single-badge-client-linkedin">
                            <div class="icon quality" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Linkedin-LogoPNG2-1.png);"></div>
                            <!-- <div class="title" style="background-image: url(http://localhost:8080/wordpress/doondook/wp-content/uploads/2022/03/Linkedin-LogoPNG2-1.png);"></div> -->
                        </a>
                        <a href="http://twitter.com/share?text=text goes here&url=<?php the_permalink();  ?>" class="single-badge-client-twitter">
                            <div class="icon support" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/ezgif-1.png);"></div>
                            <!-- <div class="title" style="background-image: url(http://localhost:8080/wordpress/doondook/wp-content/uploads/2022/03/ezgif-1.png);"></div> -->
                        </a>
                        <button class="single-badge-client-link">
                            <div class="icon support" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/ezgif-1-1.png);"></div>
                            <!-- <div class="title" style="background-image: url(http://localhost:8080/wordpress/doondook/wp-content/uploads/2022/03/ezgif-1.png);"></div> -->
                        </button>

                    </div>

                </div>
            </div>



        </div>

    </div>





</div>


<?php get_footer() ?>