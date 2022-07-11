<?php
add_action( 'cmb2_admin_init', 'cmb2_client_metaboxes' );

function cmb2_client_metaboxes() {

    $client = new_cmb2_box( array(
        'id'            => 'doondook_client_metabox',
        'title'         => __( 'doondook client metabox', 'cmb2' ),
        'object_types'  => array( 'client', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $client->add_field( array(
        'name'    => 'auther image',
        'desc'    => 'upload auther image',
        'id'      => 'client_auther_image',
        'type'    => 'file',
    ) );
    $client->add_field( array(
        'name'    => 'auther name',
        'desc'    => 'auther name',
        'id'      => 'client_auther_name',
        'type'    => 'text',
    ) );
    $client->add_field( array(
        'name'    => 'auther description',
        'desc'    => 'auther description',
        'id'      => 'client_auther_description',
        'type'    => 'text',
    ) );
    
    //////////////////////////////////////////
    $client = new_cmb2_box( array(
        'id'            => 'doondook_client_desc_metabox',
        'title'         => __( 'doondook client description title', 'cmb2' ),
        'object_types'  => array( 'client', ), // Post type
        'context'       => 'normal', ///side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $client->add_field( array(
        'name'    => 'top title image',
        'desc'    => 'upload top title image',
        'id'      => 'client_top_title_image',
        'type'    => 'file',
    ) );
    $client->add_field( array(
        'name'    => 'top title',
        'desc'    => 'upload top title',
        'id'      => 'client_top_title',
        'type'    => 'text',
    ) );


}
