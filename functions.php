<?php
require_once 'inc/cmb2metabox.php';
require_once 'inc/cmb2Themoption.php';
require_once 'inc/cmb2Servicesmetabox.php';
function doondook_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support( 'page-attributes' );
    // add_post_type_support( 'post', 'page-attributes' );
    add_image_size('article',313,181,true);
    add_image_size('tv_larg',820,548,true);
    add_image_size('tv_small',265,165,true);
    add_image_size('product',400,190,true);
    //add_theme_support( 'wc-product-gallery-zoom' );
    //add_theme_support( 'wc-product-gallery-lightbox' );
    //add_theme_support( 'wc-product-gallery-slider' );
}
add_action('after_setup_theme','doondook_setup_theme');


define('DEVELOPEMENT', true);
define('THEME_VERSION', '1.0.0');
function theme_uri($file = ''){
    return get_stylesheet_directory_uri().'/'.$file;
}

add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'template-style', theme_uri('style.css'), array(), THEME_VERSION);
});


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4 );

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

//popup last modified date
function foobar_func($content){
    $popup_meta=get_post_meta(get_the_ID(),'wiki_test_textdate_timestamp',true);
    $change_popup_meta=date_i18n('j F Y', $popup_meta);
    echo '<p class="last-updated">Last updated: '. $change_popup_meta .'</p>';  
    // add_filter( 'the_content', 'wpb_last_updated_date' );
}
add_shortcode( 'popupDate', 'foobar_func' );
/////////////////////////////////////////////post type services
function doondook_cs_post_type() {
    $labels = array(
        'name'                  => __( 'post type services' ),
        'singular_name'         => __( 'post type services' ),
        'menu_name'             => __( 'post type services' ),
        'name_admin_bar'        => __( 'post type services' ),
        'add_new'               => __( 'add new' ),
        'add_new_item'          => __( 'add service' ),
        'new_item'              => __( 'new post' ),
        'edit_item'             => __( 'edit post' ),
        'view_item'             => __( 'view post' ),
        'all_items'             => __( 'all posts' ),
        'search_items'          => __( 'serch in services' ),
        'parent_item_colon'     => __( 'parent' ),
        'not_found'             => __( 'not fond'),
        'not_found_in_trash'    => __( 'No service found in Trash' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
//        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies'=>array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'service', $args );
}

add_action( 'init', 'doondook_cs_post_type' );

/////////////////////////////////////////////////////////////////////////////////// Add new taxonomy
function wpdocs_create_service_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => __( 'category', 'category' ),
        'singular_name'     => __( 'post category', 'category' ),
        'search_items'      => __( 'serch' ),
        'all_items'         => __( 'all category' ),
        'parent_item'       => __( 'sub category' ),
        'parent_item_colon' => __( 'Parent Genre:'),
        'edit_item'         => __( 'edit category' ),
        'update_item'       => __( 'update category' ),
        'add_new_item'      => __( 'add new category' ),
        'new_item_name'     => __( ' new category name' ),
        'menu_name'         => __( 'category' ),
    );

    $argss = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
//        'rewrite'               => array( 'slug' => 'writer' ),
    );

    register_taxonomy( 'cat_doondook_shop', 'service', $argss );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wpdocs_create_service_taxonomies', 0 );
///////////////////////////////////////////////////////////////////////////service choose
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}
//Register Meta Box

$latest = new WP_Query( array (
    'post_type' => 'service',
    'fields' => 'ids'
));
// $myid=$latest->get_the_ID();
// echo '<pre>';
// var_dump($latest);
// echo '</pre>';
if ( $latest->have_posts() ) {
    while ( $latest->have_posts() ) {
        $latest->the_post();     
        $myidarr[]=get_the_ID();
        // $titles=get_the_tags();
        // foreach($titles as $title){
        //    $argg[]=$title->name;
        // }       
    }
}
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'group_1',
        'title' => 'select product page services for display',
        'fields' => array (
            array (
                'key' => 'sercice_id_option',
                'label' => 'sercice ids',
                'name' => 'sercice_id_title',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'choices' => $myidarr,
                'default_value' => [],
                'value'=>[],
                'multiple' => 1,
                'return_format' => 'label',
                'placeholder' => '',
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));
    //home page
    ///in home page 
    acf_add_local_field_group(array (
        'key' => 'group_3',
        'title' => 'select home page services for display',
        'fields' => array (
            array (
                'key' => 'sercice_id_option_home_page2',
                'label' => 'sercice ids',
                'name' => 'sercice_id_title_home_page',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'choices' => $myidarr,
                'default_value' => [],
                'value'=>[],
                'multiple' => 1,
                'return_format' => 'label',
                'placeholder' => '',
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-home.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));

endif;

/////////////////////////////////////////////////////////////////////////////shortcodes

    function foobar_func2(){
        $attachments = get_posts( array(
            'post_type'      => 'popup',
        ) );
        if ( $attachments ) {
                echo "last update:".' '.get_the_modified_date('j F Y', 11263 );
        }        
                
    }
    add_shortcode( 'popupDate2', 'foobar_func2' );



    function important_sentence($attr,$content){
        
        $args = shortcode_atts( array(
            'content' => '',
        ), $attr );
        // $output = '<div class="important-text-box green"></div>';
        $output= '<div class="important-text-box green">'.$content.'</div>';
        return $output;
                
    }
    add_shortcode( 'important_green', 'important_sentence' );



    function important_sentence_yellow($attr,$content){
        
        $args = shortcode_atts( array(
            'content' => '',
        ), $attr );
        // $output = '<div class="important-text-box green"></div>';
        $output= '<div class="important-text-box yellow">'.$content.'</div>';
        return $output;
                
    }
    add_shortcode( 'important_yellow', 'important_sentence_yellow' );

/////////////////////////////////////////////////////////////////////////////woocammerce remove sidebar

add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );
 
function bbloomer_remove_sidebar_product_pages() {
if ( is_product() ) {
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}
}
//////////////////////////////////////////////////////remove breadcramb



remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
///////////////////////////////////////////////////////////////////////////////get cat names by term
// function retrieve_my_terms(){
//     $terms = get_terms( 'product_cat' );
// foreach( $terms as $term ) 
// {
    // echo 'Product Category: '
    //     . $term->name
    //     . ' - Count: '
    //     . $term->count;
   // $val=$term->name;
  //  var_dump($val);
//} 
//}
//add_action('init', 'retrieve_my_terms', 9999);
///////////////////////////////////////////////////////////////////////get product cat names by wpdb
// function load_terms( $taxonomy ){
//     global $wpdb;
//     $query = "SELECT DISTINCT 
//                t.name 
//               FROM
//                {$wpdb->terms} t 
//               INNER JOIN 
//                {$wpdb->term_taxonomy} tax 
//               ON 
//                tax.term_id = t.term_id
//               WHERE 
//                ( tax.taxonomy = '{$taxonomy}')";                     
//     $result = $wpdb->get_results( $query , ARRAY_A );

//     return $result;                 
// }
// $valu= load_terms('product_cat');
// foreach($valu as $val){
//     echo '<pre>';
//     var_dump($val['name']);
//     echo '</pre>';
// }
/////////////////////////////////////////////////////////////////////////
