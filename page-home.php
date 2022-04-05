<?php get_header();
/*
 * Template Name: home page themeplaet
 */
?>

<?php the_title(); ?>


/////////////////////////////////page content
<?php
        $id = get_the_ID();
        $p = get_page($id);
        echo apply_filters('the_content', $p->post_content);
?>
////////////////////////////////////service 
<?php
                        $feild=get_field('sercice_id_option_home_page','option');
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



<?php get_footer() ?>