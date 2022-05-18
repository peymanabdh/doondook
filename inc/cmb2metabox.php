<?php
add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );

function cmb2_sample_metaboxes() {

    $cmb = new_cmb2_box( array(
        'id'            => 'doondook_metabox',
        'title'         => __( 'description title and icon', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $cmb->add_field( array(
        'name'    => 'description title',
        'desc'    => 'description title',
        'id'      => 'description_title',
        'type'    => 'text',
    ) );
	$cmb->add_field( array(
        'name'    => 'description icon',
        'desc'    => 'description icon',
        'id'      => 'description_icon',
        'type'    => 'file',
    ) );
	//بخش ایفریم
	$cmb = new_cmb2_box( array(
        'id'            => 'doondook_metabox_iframe',
        'title'         => __( 'iframe links', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $cmb->add_field( array(
        'name'    => 'iframe link',
        'desc'    => 'iframe link url',
        'id'      => 'iframe_link',
        'type'    => 'text',
    ) );
	$cmb->add_field( array(
        'name'    => 'youtub link',
        'desc'    => 'youtub link url',
        'id'      => 'youtub_link',
        'type'    => 'text',
    ) );
	//play on mobile section
	$cmb = new_cmb2_box( array(
        'id'            => 'doondook_metabox_play_on_mobile',
        'title'         => __( 'play on mobile section', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $cmb->add_field( array(
        'name'    => 'play on mobile section title',
        'desc'    => 'play on mobile section title',
        'id'      => 'play_on_mobile_title',
        'type'    => 'text',
    ) );
	$cmb->add_field( array(
        'name'    => 'play on mobile section url',
        'desc'    => 'description title',
        'id'      => 'play_on_mobile_url',
        'type'    => 'text',
    ) );
	$cmb->add_field( array(
        'name'    => 'play on mobile section icon',
        'desc'    => 'description icon',
        'id'      => 'play_on_mobile_icon',
        'type'    => 'file',
    ) );
	//contact form
	$cmb = new_cmb2_box( array(
        'id'            => 'contact_form',
        'title'         => __( 'contact form title and icon', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $cmb->add_field( array(
        'name'    => 'contact form title',
        'desc'    => 'contact form  title',
        'id'      => 'contact_form_title',
        'type'    => 'text',
    ) );
	$cmb->add_field( array(
        'name'    => 'contact form icon',
        'desc'    => 'contact form  icon',
        'id'      => 'contact_form_icon',
        'type'    => 'file',
    ) );
	//services
	$cmb = new_cmb2_box( array(
        'id'            => 'services',
        'title'         => __( 'services title and icon', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $cmb->add_field( array(
        'name'    => 'services title',
        'desc'    => 'services title',
        'id'      => 'services_title',
        'type'    => 'text',
    ) );
	$cmb->add_field( array(
        'name'    => 'services icon',
        'desc'    => 'services icon',
        'id'      => 'services_icon',
        'type'    => 'file',
    ) );
    ///////////////////////////////////////////////////////////////////sigle license
    $cmb = new_cmb2_box( array(
        'id'            => 'sigle_license',
        'title'         => __( 'sigle license details content', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $general = $cmb->add_field( array(
        'id'          => 'Doondook_general_single_license',
        'type'        => 'group',
        'repeatable'  => false,
        'options'     => array(
            'group_title'       => __( 'details' ),
            // 'add_button' => __( 'add' ),
            // 'remove_button' => __( 'remove' ),
            'sortable' => true,
            'closed' => true,
        ),
    ) );
    $cmb->add_group_field( $general, array(
        'name' => 'detail title',
        'id'   => 'doondook_details_title_option',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $general, array(
        'name' => 'details',
        'id'   => 'doondook_details_option',
        'type' => 'text',
        'repeatable'  => true,
    ) );
    ///////////////////////////////////////////////////////////////////Features
    $cmb = new_cmb2_box( array(
        'id'            => 'Features',
        'title'         => __( 'Features content', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $general = $cmb->add_field( array(
        'id'          => 'Doondook_general_Features',
        'type'        => 'group',
        'repeatable'  => false,
        'options'     => array(
            'group_title'       => __( 'Features' ),
            // 'add_button' => __( 'add' ),
            // 'remove_button' => __( 'remove' ),
            'sortable' => true,
            'closed' => true,
        ),
    ) );
    $cmb->add_group_field( $general, array(
        'name' => 'Features title',
        'id'   => 'doondook_Features_title_option',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $general, array(
        'name' => 'Features',
        'id'   => 'doondook_Features_option',
        'type' => 'text',
        'repeatable'  => true,
    ) );
    ///////////////////////////////////////////////////////////////////Suitable for
    $cmb = new_cmb2_box( array(
        'id'            => 'Suitable',
        'title'         => __( 'Suitable content', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $general = $cmb->add_field( array(
        'id'          => 'Doondook_general_Suitable',
        'type'        => 'group',
        'repeatable'  => false,
        'options'     => array(
            'group_title'       => __( 'Suitable' ),
            // 'add_button' => __( 'add' ),
            // 'remove_button' => __( 'remove' ),
            'sortable' => true,
            'closed' => true,
        ),
    ) );
    $cmb->add_group_field( $general, array(
        'name' => 'Suitable title',
        'id'   => 'doondook_Suitable_title_option',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $general, array(
        'name' => 'Suitable',
        'id'   => 'doondook_Suitable_option',
        'type' => 'text',
        'repeatable'  => true,
    ) );
    ////////////////////////////////////////////////////////////////////
    $cmb = new_cmb2_box( array(
        'id'            => 'doondook_popup_metabox',
        'title'         => __( 'Date Picker last update time', 'cmb2' ),
        'object_types'  => array( 'popup', ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $cmb->add_field( array(
        'name' => 'Date Picker last update time',
        'id'   => 'wiki_test_textdate_timestamp',
        'type' => 'text_date_timestamp',
        // 'timezone_meta_key' => 'wiki_test_timezone',
        // 'date_format' => 'j F Y',
    ) );
}
