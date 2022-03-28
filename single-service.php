<?php get_header(); ?>

<div class="page-wrapper page">
    <div class="page-icon-title">
    <?php $service_title_image=get_post_meta(get_the_ID(),'service_title_image',true); ?>
        <div class="icon" style="background-image: url(<?php if($service_title_image){ echo $service_title_image; }?>);"></div>
        <div class="title">
            <h1 title="White Label HTML5 Games, the Long Version of white Label HTML5 Games, the Long Version of"> <?php echo the_title(); ?></h1>
            <?php $sub_service_title=get_post_meta(get_the_ID(),'sub_service_title',true); ?>
            <h3><?php if($sub_service_title){echo $sub_service_title; } ?></h3>
        </div>
    </div>
    <div class="page-content">
        <div class="main-content">
            <div class="card">
                <p>
                    <?php echo the_content(); ?>
                </p>
                <!-- <div class="important-text-box green">“An important sentence that should be emphasized to the reader! This is up to 4 lines. Read agian: an important sentence that should be emphasized to the reader. This is up to 4 lines!”</div> -->
                <!-- <div class="important-text-box yellow">A notice that clients have to know about the service / article.</div> -->

            </div>
<?php 
$Frequently_Asked_Questions_main_title=get_post_meta(get_the_ID(),'Frequently_Asked_Questions_main_title',true);
$Frequently_Asked_Questions_main_title_icon=get_post_meta(get_the_ID(),'Frequently_Asked_Questions_main_title_icon',true);
?>
            <div class="card service-faq pdng">
                <div class="description-title">
                    <div class="description-title-image" style="background-image: url(<?php if($Frequently_Asked_Questions_main_title_icon){echo $Frequently_Asked_Questions_main_title_icon;}  ?>);"></div>
                    <div class="description-title-text">
                        <h2><?php if($Frequently_Asked_Questions_main_title){echo $Frequently_Asked_Questions_main_title;} ?></h2>
                    </div>
                </div>
                <div class="faq-box">


<?php $Frequently_Asked_Questions=get_post_meta(get_the_ID(),'Doondook_general_Frequently_Asked_Questions',true); 
?>    
<?php if($Frequently_Asked_Questions){ ?>          
<?php foreach($Frequently_Asked_Questions as $item): ?>
                    <div class="single-faq close">
                        <div class="icon-box">
                            <span class="faq-collapse-icon"></span>
                        </div>
                        <div class="text-box">
                            <div class="question">
                                <h4><?php if(isset($item['Frequently_Asked_Questions_title_option'])){echo $item['Frequently_Asked_Questions_title_option'];} ?></h4>
                            </div>
                            <div class="answer">
                                <p>
                                <?php if(isset($item['Frequently_Asked_Questions_option'])){ echo $item['Frequently_Asked_Questions_option'];} ?>
                                </p>
                            </div>

                        </div>
                    </div>
                   
<?php endforeach; ?>             
<?php }; ?> 

                </div>
            </div>
        </div>
        <div class="sidebar-content">
            <div class="card">
                <div class="contact-form-box">
                    <div class="description-title">
                        <?php $contact_us_icon=get_post_meta(get_the_ID(),'service_contact_form_icon',true); ?>
                        <div class="description-title-image" style="background-image: url(<?php if($contact_us_icon){ echo $contact_us_icon; }?>);"></div>
                        <div class="description-title-text">
                        <?php $contact_us_title=get_post_meta(get_the_ID(),'service_contact_form_title',true); ?>
                            <h2><?php if($contact_us_title){ echo $contact_us_title;} ?></h2>
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