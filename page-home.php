<?
/*
 * Template Name: home page themeplaet
 */
?>
<?php get_header() ?>


<div class="page-wrapper page-wrapper-full-width home-page-wrapper">
    <div class="page-content home-page-content">
    <?php
                  $home_page_header_main_title=get_field('home_page_header_main_title');
                  $home_page_header_subtitle=get_field('home_page_header_subtitle');
                  $home_page_header_icon=get_field('home_page_header_icon');
                  $home_page_video_settings=get_field('home_page_video_settings');
                  $home_page_present_settings_icon=get_field('home_page_present_settings_icon');
                  $home_page_present_settings_title=get_field('home_page_present_settings_title');
                  $home_page_present_settings_first_paragraph=get_field('home_page_present_settings_first_paragraph');
                  $home_page_present_settings_second_paragraph=get_field('home_page_present_settings_second_paragraph');
                  $home_page_service_icon=get_field('home_page_service_icon');
                  $home_page_service_title=get_field('home_page_service_title');
                ?>
        <div class="first-box card" style="background-image: url(<?php echo $home_page_header_icon; ?>);">
            <div class="text-content">
               
                <h2>
                   <?php echo  $home_page_header_main_title; ?>
                    <span> <?php echo  $home_page_header_subtitle; ?></span>
                </h2>
            </div>
        </div>

        <div class="home-introduce-section">
            <div class="video card">
                <iframe width="560" height="315" src="<?php echo  $home_page_video_settings; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="contact-us card">
                <div class="description-title">
                    <div class="description-title-image" style="background-image: url(<?php echo $home_page_present_settings_icon; ?>);"></div>
                    <div class="description-title-text">
                        <h2><?php echo $home_page_present_settings_title; ?></h2>
                    </div>
                </div>
                <div class="content">
                    <p>
                    <?php echo $home_page_present_settings_first_paragraph; ?>
                    </p> 
                    <p>
                    <?php echo $home_page_present_settings_second_paragraph; ?>
                    </p>
                </div>
                <div class="btn-box">
                <?php $popups =pishro_get_option('Doondook_general_popup_options'); ?>
                    <button class="small-btn green popmake-11359">Contact Us</button>
                </div>
            </div>
        </div>

        <div class="home-page-services-box card">
            <div class="description-title">
                <div class="description-title-image" style="background-image: url(<?php echo $home_page_service_icon; ?>);"></div>
                <div class="description-title-text">
                    <h2><?php echo $home_page_service_title; ?></h2>
                </div>
            </div>
            <div class="home-services-container">

                <?php
                        $feild=get_field('sercice_id_option_home_page2','option');
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

                    <div class="service">
                        <div class="service-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                        <h4 class="service-title"><?php echo $post->post_title; ?></h4>
                        <p class="service-text"> <?php echo $post->post_excerpt; ?></p>
                        <button class="small-btn blue"><a href="<?php the_permalink($post->ID); ?>">Learn More</a></button>
                    </div>


                <?php } ?>
                <?php wp_reset_postdata(); ?>
                <?php } ?>

               
                
            </div>

        </div>


    <?php $category_selection =pishro_get_option('category_selection_home_page'); ?>
    <?php if($category_selection){ ?>
    <?php foreach($category_selection as $item): ?>  

        <div class="game-loop tablet-mobile-carousel">

            <div class="header-s-a-link">
                <h3><?php echo $item['category_selection_title']; ?></h3>
                <a href="<?php echo $item['category_selection_url_link']; ?>">See All ></a>
            </div>
            <div class="all-game-box">

            <?php
            echo do_shortcode('[products limit="4" columns="4" category="'.$item['category_selection_category_type'].'" orderby="id" order="DESC" visibility="visible"]');
               //echo do_shortcode( '[product_category per_page="4" orderby="menu_order title" order="ASC" category="Casino"]' );
               //echo do_shortcode( '[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]' );
            ?>


            </div>
        </div>

    <?php endforeach; ?>             
    <?php }; ?> 


        <div class="our-customer-box card">
            <div class="description-title">
            <?php $image=get_field('clients-title-icon'); ?>
                <div class="description-title-image" style="background-image: url(<?php echo $image; ?>);"></div>
                <div class="description-title-text">
                    <h2> <?php echo get_field('clients-title'); ?> </h2>
                </div>
            </div>
            <div class="customer-box-icons owl-carousel">

            <?php 
                $images = get_field('clients');

                if( $images ): ?>
                        <?php foreach( $images as $image ): ?>
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="" />
                        <?php endforeach; ?>
            <?php endif; ?>
                         
            </div>
        </div>

        <?php $comments =pishro_get_option('Doondook_general_comments'); ?>
        
        <?php if($comments){ ?>
        <div class="customer-comment-box">
            <div class="customer-comment-box-content owl-carousel owl-theme">
                <?php foreach($comments as $item): ?>  
                    <div class="customer-single-comment card">
                        <div class="comment-section">
                            <p>
                            <?php if(isset($item['users_comments_content'])){echo $item['users_comments_content'];} ?>
                            </p>
                        </div>
                        <div class="line"></div>
                        <div class="user-section">
                            <div class="customer-avatar" style="background-image: url(<?php if(isset($item['users_comments_usernames_image'])){echo $item['users_comments_usernames_image'];} ?>);"></div>
                            <div class="name-position">
                                <span class="name"><?php if(isset($item['users_comments_usernames'])){echo $item['users_comments_usernames'];} ?></span>
                                <span class="position"><?php if(isset($item['users_comments_usernames_type'])){echo $item['users_comments_usernames_type'];} ?></span>
                            </div>
                        </div>
                    </div>   
                <?php endforeach; ?>   
            </div>
        </div>          
        <?php }; ?> 
        

    </div>
</div>

<?php get_footer() ?>