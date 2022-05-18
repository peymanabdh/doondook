<?php

add_action( 'cmb2_admin_init', 'pishro_register_theme_options_metabox' );

function pishro_register_theme_options_metabox() {

    $alloptions = new_cmb2_box( array(
        'id'           => 'pishro_option_metabox',
        'title'        => esc_html__( 'تنظیمات قالب', 'pishro' ),
        'object_types' => array( 'options-page' ),
        'option_key'      => 'pishro_options', // The option key and admin menu page slug.
        'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
    ) );


// شروع تنظیمات بخش عمومی
    $general = $alloptions->add_field( array(
        'id'          => 'pishro_general_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات عمومی ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $alloptions->add_group_field( $general, array(
        'name' => 'تصویر لوگو',
        'id'   => 'pishro_logo_option',
        'type' => 'file',
    ) );
    $alloptions->add_group_field( $general, array(
        'name' => 'تصویر فایوآیکون',
        'id'   => 'pishro_favicon_option',
        'type' => 'file',
    ) );
    $alloptions->add_group_field( $general, array(
        'name' => 'محدوده عرض محتوا',
        'id'   => 'pishro_width_container_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پیشفرض 1366 است',
        ),
    ) );
    $alloptions->add_group_field( $general, array(
        'name' => 'رنگ اصلی سایت',
        'id'   => 'pishro_color_main_option',
        'type'    => 'colorpicker',
        'default' => '#5caf21',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#5caf21', '#ff834c', '#4fa2c0', '#0bc991', ),
            ) ),
        ),
    ) );
    // پایان تنظیمات بخش عمومی



    // شروع تنظیمات بخش تاپ منو
    $topmenu = $alloptions->add_field( array(
        'id'          => 'pishro_topmenu_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات منوی بالا ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'منوی بالا',
        'id'   => 'pishro_topmenu_active_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'رنگ زمینه منوی بالا',
        'id'   => 'pishro_color_topmenu_option',
        'type'    => 'colorpicker',
        'default' => '#163a5c',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                'palettes' => array( '#163a5c', '#5caf21', '#4fa2c0', '#0bc991', ),
            ) ),

            'data-conditional-id'     => 'pishro_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'شماره تلفن',
        'id'   => 'pishro_tell_topmenu_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'مشاوره و پشتیبانی واتساپ : 09355597139',
            'data-conditional-id'     => 'pishro_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'ایمیل',
        'id'   => 'pishro_email_topmenu_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'ایمیل : websoft3.ir@gmail.com',
            'data-conditional-id'     => 'pishro_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'نمایش/مخفی جستجو',
        'id'   => 'pishro_search_topmenu_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
        'attributes' => array(
            'data-conditional-id'     => 'pishro_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'نمایش/مخفی سبدخرید',
        'id'   => 'pishro_cart_topmenu_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
        'attributes' => array(
            'data-conditional-id'     => 'pishro_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );






    // شروع تنظیمات بخش هدر
    $header = $alloptions->add_field( array(
        'id'          => 'pishro_header_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات هدر ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions->add_group_field( $header, array(
        'name' => 'انتخاب سربرگ',
        'id'   => 'pishro_header_select_option',
        'type'             => 'select',
        'show_option_none' => false,
        'default'          => 'header_one',
        'options'          => array(
            'header_one' => __( 'سربرگ 1', 'cmb2' ),
            'header_two'   => __( 'سربرگ 2', 'cmb2' ),
        ),
    ) );
    $alloptions->add_group_field( $header, array(
        'name' => 'نمایش/مخفی دکمه سربرگ',
        'id'   => 'pishro_header_button_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'نمایش', 'cmb2' ),
            'disable'   => __( 'مخفی', 'cmb2' ),
        ),
        'default' => 'enable',
    ) );
    $alloptions->add_group_field( $header, array(
        'name' => 'متن دکمه سربرگ',
        'id'   => 'pishro_text_button_header_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پبشفرض : ورود / ثبت نام است',
        ),
    ) );
    $alloptions->add_group_field( $header, array(
        'name' => 'لینک دکمه سربرگ',
        'id'   => 'pishro_link_button_header_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پبشفرض لینک حساب کاربری است ',
        ),
    ) );






    // تنظیمات تایپوگرافی
    $typography = $alloptions->add_field( array(
        'id'          => 'pishro_typography_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات تایپوگرافی ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions->add_group_field( $typography, array(
        'name' => 'فونت بدنه سایت',
        'id'   => 'pishro_font_body_option',
        'type'             => 'select',
        'show_option_none' => false,
        'default'          => 'header_one',
        'options'          => array(
            'iransans' => __( 'ایران سنس', 'cmb2' ),
            'shabnam'   => __( 'شبنم', 'cmb2' ),
        ),
    ) );
    $alloptions->add_group_field( $typography, array(
        'name' => 'اندازه متن',
        'id'   => 'pishro_font_size_body_option',
        'description'   => 'پیشفرض 14 است',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پبشفرض 14 است ',
        ),
    ) );
    $alloptions->add_group_field( $typography, array(
        'name' => 'تراز متن',
        'id'   => 'pishro_text_align_option',
        'description'   => 'پیشفرض روی راست است',
        'type'             => 'select',
        'show_option_none' => false,
        'default'          => 'header_one',
        'options'          => array(
            'right' => __( 'متن از راست', 'cmb2' ),
            'left'   => __( 'متن از چپ', 'cmb2' ),
            'center'   => __( 'متن از وسط', 'cmb2' ),
            'justify'   => __( 'متن جاستیفای', 'cmb2' ),
        ),
    ) );
    $alloptions->add_group_field( $typography, array(
        'name' => 'رنگ  متن بدنه',
        'id'   => 'pishro_color_font_body_option',
        'type'    => 'colorpicker',
        'default' => '#303030',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                'palettes' => array( '#303030', '#5caf21'),
            ) ),
        ),
    ) );







    // تنظیمات بلاگ
    $blog = $alloptions->add_field( array(
        'id'          => 'pishro_blog_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات وبلاگ ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions->add_group_field( $blog, array(
        'name' => 'موقعیت سایدبار',
        'id'   => 'pishro_blog_sidebar_option',
        'type' => 'image_select',
        'default' => 'side-left',
        'options' => array(
            'side-left' => array('title' => 'سایدبار چپ', 'img' =>  get_template_directory_uri().'/img/left-side.png'),
            'side-right' => array('title' => 'سایدبار راست', 'img' =>  get_template_directory_uri().'/img/right-side.png'),
            'full-width' => array('title' => 'بدون سایدبار', 'img' =>  get_template_directory_uri().'/img/full-width.png'),
        ),
    ) );
    $alloptions->add_group_field( $blog, array(
        'name' => 'نمایش/مخفی مطالب مرتبط',
        'id'   => 'pishro_related_post_option',
        'type'	           => 'switch',
        'active_value'     => true,
        'inactive_value'   => false
    ) );








    //شروع تنظیمات بخش فوتر
    $footer = $alloptions->add_field( array(
        'id'          => 'pishro_footer_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات فوتر ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions->add_group_field( $footer, array(
        'name' => 'رنگ زمینه فوتر',
        'id'   => 'pishro_footer_background_option',
        'type'    => 'colorpicker',
        'default' => '#f5f6fa',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                'palettes' => array( '#f5f6fa', '#303030'),
            ) ),
        ),
    ) );
    $alloptions->add_group_field( $footer, array(
        'name' => 'رنگ متن فوتر',
        'id'   => 'pishro_footer_text_color_option',
        'type'    => 'colorpicker',
        'default' => '#4a4a4a',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                'palettes' => array( '#4a4a4a', '#303030'),
            ) ),
        ),
    ) );
    $alloptions->add_group_field( $footer, array(
        'name' => 'رنگ زمینه کپی رایت',
        'id'   => 'pishro_footer_copyright_background_option',
        'type'    => 'colorpicker',
        'default' => '#163a5c',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                'palettes' => array( '#163a5c', '#303030'),
            ) ),
        ),
    ) );
    $alloptions->add_group_field( $footer, array(
        'name' => 'رنگ متن کپی رایت',
        'id'   => 'pishro_footer_copyright_color_option',
        'type'    => 'colorpicker',
        'default' => '#e8e8e8',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                'palettes' => array( '#e8e8e8', '#303030'),
            ) ),
        ),
    ) );
    $alloptions->add_group_field( $footer, array(
        'name' => 'متن کپی رایت',
        'id'   => 'pishro_footer_copyright_option',
        'description'   => 'متن کپی رایت را وارد کنید',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'متن کپی رایت',
        ),
    ) );

}



















function pishro_get_option( $key = '', $default = false ) {
    if ( function_exists( 'cmb2_get_option' ) ) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option( 'pishro_options', $key, $default );
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option( 'pishro_options', $default );

    $val = $default;

    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }

    return $val;
}