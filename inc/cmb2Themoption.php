<?php

add_action( 'cmb2_admin_init', 'Doondook_register_theme_options_metabox' );

function Doondook_register_theme_options_metabox() {

$alloptions = new_cmb2_box( array(
        'id'           => 'Doondook_option_metabox',
        'title'        => esc_html__( 'Doon-settings', 'Doondook' ),
        'object_types' => array( 'options-page' ),
        'option_key'      => 'pishro_options', // The option key and admin menu page slug.
        'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
    ) );
$alloptions->add_field( array(
        'name' => 'main logo',
        'id'          => 'Doondook_general_logo',
        'type'        => 'file',
    ) );    
///////////////////////////////////////////////////////////////popup
$general = $alloptions->add_field( array(
    'id'          => 'Doondook_general_popup_options',
    'type'        => 'group',
    'repeatable'  => false,
    'options'     => array(
        'group_title'       => __( 'popups' ),
        // 'add_button' => __( 'add' ),
        // 'remove_button' => __( 'remove' ),
        'sortable' => true,
        'closed' => true, 
    ),
) );
$alloptions->add_group_field( $general, array(
    'name' => 'price box popup',
    'id'   => 'doondook_price_box_popup_option',
    'type' => 'text',
    'attributes' => array( 'placeholder' => __( 'please inser css class from palugin on this input' ) ),
) );
$alloptions->add_group_field( $general, array(
    'name' => 'Quality Checked box popup',
    'id'   => 'Quality_box_popup_option',
    'type' => 'text',
    'attributes' => array( 'placeholder' => __( 'please inser css class from palugin on this input' ) ),
) );
$alloptions->add_group_field( $general, array(
    'name' => 'Run on All Devices box popup',
    'id'   => 'Devices_box_popup_option',
    'type' => 'text',
    'attributes' => array( 'placeholder' => __( 'please inser css class from palugin on this input' ) ),
) );
$alloptions->add_group_field( $general, array(
    'name' => '6 Months Support popup',
    'id'   => 'Support_box_popup_option',
    'type' => 'text',
    'attributes' => array( 'placeholder' => __( 'please inser css class from palugin on this input' ) ),
) );

////////////////////////////////////////////////////////
$general = $alloptions->add_field( array(
    'id'          => 'Doondook_general_insert_category',
    'type'        => 'group',
    'repeatable'  => false,
    'options'     => array(
        'group_title'       => __( 'insert catgory for display on home page' ),
        // 'add_button' => __( 'add' ),
        // 'remove_button' => __( 'remove' ),
        'sortable' => true,
        'closed' => true, 
    ),
) );
$alloptions->add_group_field( $general, array(
    'name' => 'insert catgory for display on home page',
    'id'   => 'Doondook_general_inser_categorys',
    'type' => 'text',
    'attributes' => array( 'placeholder' => __( 'please insert categoty ass test,test2,.....' ) ),
) );
/////////////////////////////////////////////////////////////////users comments
$general = $alloptions->add_field( array(
    'id'          => 'Doondook_general_comments',
    'type'        => 'group',
    'repeatable'  => true,
    'options'     => array(
        'group_title'       => __( 'users comments' ),
        // 'add_button' => __( 'add' ),
        // 'remove_button' => __( 'remove' ),
        'sortable' => true,
        'closed' => true,
    ),
) );
$alloptions->add_group_field( $general, array(
    'name' => 'users comments content',
    'id'   => 'users_comments_content',
    'type' => 'text',
) );
$alloptions->add_group_field( $general, array(
    'name' => 'users comments username',
    'id'   => 'users_comments_usernames',
    'type' => 'text',
) );
$alloptions->add_group_field( $general, array(
    'name' => 'users comments username iamge',
    'id'   => 'users_comments_usernames_image',
    'type' => 'file',
) );
$alloptions->add_group_field( $general, array(
    'name' => 'users comments username type',
    'id'   => 'users_comments_usernames_type',
    'type' => 'text',
) );
/////////////////////////////////////////////////////////////////category selection in home page
$general = $alloptions->add_field( array(
    'id'          => 'category_selection_home_page',
    'type'        => 'group',
    'repeatable'  => true,
    'options'     => array(
        'group_title'       => __( 'category selection in home page' ),
        // 'add_button' => __( 'add' ),
        // 'remove_button' => __( 'remove' ),
        'sortable' => true,
        'closed' => true,
    ),
) );
$alloptions->add_group_field( $general, array(
    'name' => 'category_selection_title',
    'id'   => 'category_selection_title',
    'type' => 'text',
) );
$alloptions->add_group_field( $general, array(
    'name' => 'category_selection_url_link',
    'id'   => 'category_selection_url_link',
    'type' => 'text',
) );
$alloptions->add_group_field( $general, array(
    'name' => 'category_selection_category_type',
    'id'   => 'category_selection_category_type',
    'type' => 'text',
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