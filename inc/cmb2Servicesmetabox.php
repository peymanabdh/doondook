<?php
add_action( 'cmb2_admin_init', 'cmb2_service_metaboxes' );

function cmb2_service_metaboxes() {

    $service = new_cmb2_box( array(
        'id'            => 'doondook_service_metabox',
        'title'         => __( 'doondook service metabox', 'cmb2' ),
        'object_types'  => array( 'service', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $service->add_field( array(
        'name'    => 'sub service title',
        'desc'    => 'sub service title',
        'id'      => 'sub_service_title',
        'type'    => 'text',
    ) );
    $service->add_field( array(
        'name'    => 'service title image',
        'desc'    => 'service title image',
        'id'      => 'service_title_image',
        'type'    => 'file',
    ) );
//////////////////////////////////////////////Frequently Asked Questions
$cmb = new_cmb2_box( array(
    'id'            => 'Frequently_Asked_Questions',
    'title'         => __( 'Frequently Asked Questions', 'cmb2' ),
    'object_types'  => array( 'service', ), // Post type
    'context'       => 'normal', ///side
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    // 'closed'     => true, // Keep the metabox closed by default
) );


$cmb->add_field( array(
    'name'    => 'Frequently_Asked_Questions_main_title',
    'desc'    => 'Frequently_Asked_Questions_main_title',
    'id'      => 'Frequently_Asked_Questions_main_title',
    'type'    => 'text',
) );
$cmb->add_field( array(
    'name'    => 'Frequently_Asked_Questions_main_title_icon',
    'desc'    => 'Frequently_Asked_Questions_main_title_icon',
    'id'      => 'Frequently_Asked_Questions_main_title_icon',
    'type'    => 'file',
) );


$general = $cmb->add_field( array(
    'id'          => 'Doondook_general_Frequently_Asked_Questions',
    'type'        => 'group',
    'repeatable'  => true,
    'options'     => array(
        'group_title'       => __( 'Frequently Asked Questions' ),
        // 'add_button' => __( 'add' ),
        // 'remove_button' => __( 'remove' ),
        'sortable' => true,
        'closed' => true,
    ),
) );
$cmb->add_group_field( $general, array(
    'name' => 'Frequently Asked Questions title',
    'id'   => 'Frequently_Asked_Questions_title_option',
    'type' => 'text',
) );
$cmb->add_group_field( $general, array(
    'name' => 'Frequently Asked Questions',
    'id'   => 'Frequently_Asked_Questions_option',
    'type' => 'text',
    'repeatable'  => false,
) );
//////////////////////////////////////////////////////////////////////contact form
$cform = new_cmb2_box( array(
    'id'            => 'doondook_service_metabox_cform',
    'title'         => __( 'service contact form title and icon metabox', 'cmb2' ),
    'object_types'  => array( 'service', ), // Post type
    'context'       => 'normal', ///side
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    // 'closed'     => true, // Keep the metabox closed by default
) );
$cform->add_field( array(
    'name'    => 'service_contact_form_title',
    'desc'    => 'service_contact_form_title',
    'id'      => 'service_contact_form_title',
    'type'    => 'text',
) );
$cform->add_field( array(
    'name'    => 'service_contact_form_icon',
    'desc'    => 'service_contact_form_icon',
    'id'      => 'service_contact_form_icon',
    'type'    => 'file',
) );



}
