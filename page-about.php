<?
/*
 * Template Name: about
 */
?>
<?php get_header() ?>


<div class="page-wrapper page">
    <div class="page-content">
        <div class="client-story-main-content">
            <div class="main-back-image-about" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/image/about/about-main.png);">
                
                <div class="gb-story-content">
                  
                    <h1 class="gb-story-content-title"><?php the_title(); ?></h1>
                    
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

                        <div class="description-title-image" style="background-image: url(http://localhost/wordpress/wp-content/uploads/2022/03/image-13.png);"></div>
                        <div class="description-title-text">
                            <h2>Get latest blog posts</h2>
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



        </div>

    </div>



</div>



<?php get_footer() ?>