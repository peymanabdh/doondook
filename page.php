<?php get_header(); ?>

<div class="page-wrapper page">
    <h1><?php the_title(); ?></h1>
    <div class="page-content">
        <div class="main-content">
            <div class="card">
                <p>
                    There are many variations of <strong> of Lorem Ipsum available, but the majority have suffered alteration</strong> in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                </p>
                <div class="important-text-box green">“An important sentence that should be emphasized to the reader! This is up to 4 lines. Read agian: an important sentence that should be emphasized to the reader. This is up to 4 lines!”</div>
                <div class="important-text-box yellow">A notice that clients have to know about the service / article.</div>

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