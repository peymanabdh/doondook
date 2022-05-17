<?php get_header();
?>

<div class="page-wrapper page">
    <h1><?php the_title(); ?></h1>
    <div class="page-content">
        <div class="main-content">
            <div class="card">
                <p>
                <?php
                    $id = get_the_ID();
                    $p = get_page($id);
                    echo apply_filters('the_content', $p->post_content);
                ?>
                </p>
            </div>
        </div>
        <div class="sidebar-content">
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
        </div>
    </div>
</div>

<?php get_footer(); ?>