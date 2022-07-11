<?php get_header(); ?>

<div class="page-wrapper page">
    <div class="page-content">
        <div class="client-story-main-content">
            <div class="main-back-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/image/image-21.png);">
                <div class="story-overlay"></div>
                <div class="gb-story-content">
                    <p class="gb-story-content-top-title">Customer’s Story</p>
                    <h1 class="gb-story-content-title"><?php the_title(); ?></h1>
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
            <div class="card-story">
                <div class="card-story-content">
                    <?php
                    if (have_posts()) while (have_posts())  the_post();
                    the_content();
                    ?>
                </div>
            </div>
        </div>

        <div class="sidebar-content">
            <div class="card">
                <div class="contact-form-box" id="contact-us">
                    <div class="description-title">

                        <div class="description-title-image" style="background-image: url(http://localhost/wordpress/wp-content/uploads/2022/01/services.svg);"></div>
                        <div class="description-title-text">
                            <h2>Do you know about White Label HTML5 games?</h2>
                        </div>
                    </div>
                    <div class="client-story-discription">
                        <p>
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <?php $exerpttext = substr(wp_strip_all_tags(get_post_field('post_content', $post->ID)), 0, 300);
                            if (!empty($exerpttext)) {
                                echo $exerpttext;
                            }  ?>
                        </p>
                    </div>
                    <div class="single-client-story-learn-more">
                        <!-- <span class="popmake-11263 pum-trigger" style="cursor: pointer;">Learn More</span> -->
                    </div>

                </div>
            </div>

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


    <hr class="hr-footer-client-story">

    <div class="similar-client-story">
        <div class="header-s-a-link">
            <h3>More Client Stories</h3>
            <a href="#">See All ></a>
        </div>

        <div class="all-client-box">

            <?php
            $args = array(
                'post_type' => 'client',
                'posts_per_page' => 4,
                'status'        => 'published',
                'orderby'    => 'post_date',
                'order'         => 'DESC',
            );
            $wp_query = new WP_Query($args); ?>
            <?php while ($wp_query->have_posts()) :
                $wp_query->the_post();
            ?>

                <div class="client-boxes">
                    <a href="<?php the_permalink(); ?>">
                        <div class="client-story-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                    </a>
                    <div class="client-story-contents">
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <p>
                            <?php $exerpttext = substr(wp_strip_all_tags(get_post_field('post_content', $post->ID)), 0, 300);
                            if (!empty($exerpttext)) {
                                echo $exerpttext;
                            }  ?>
                        </p>
                        <div class="client-story-content-tags">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'client_doondook_shop');
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

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>


        </div>
    </div>
</div>




<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(document).on("click", ".single-badge-client-link", function(e) {
            navigator.clipboard.writeText('<?php the_permalink(); ?>');
            alert("Copied!");
        });
        //
        jQuery("#toc").toc({
            content: ".card-story",
            headings: "h2,h3"
        });
    });
</script>

<?php get_footer(); ?>