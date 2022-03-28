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