<?php
if ( ! function_exists( 'pluton_setup' ) ) :

function pluton_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'pluton', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'pluton' ),
        'social'  => __( 'Social Links Menu', 'pluton' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // pluton_setup

add_action( 'after_setup_theme', 'pluton_setup' );


if ( ! function_exists( 'pluton_init' ) ) :

function pluton_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('team', array(
    'labels' => 
      array(
        'name' => __( 'Team members', 'pluton' ),
        'singular_name' => __( 'Team member', 'pluton' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
    'show_in_menu' => true
  ));

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // pluton_setup

add_action( 'init', 'pluton_init' );


if ( ! function_exists( 'pluton_widgets_init' ) ) :

function pluton_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pluton_widgets_init' );
endif;// pluton_widgets_init



if ( ! function_exists( 'pluton_customize_register' ) ) :

function pluton_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'service_section', array(
    'title' => __( 'Service', 'pluton' ),
    'panel' => 'pluton_panel'
  ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'custom_logo', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'custom_logo', array(
    'label' => __( 'Logo', 'pluton' ),
    'type' => 'media',
    'mime_type' => 'image',
    'section' => 'title_tagline'
  ) ) );

    $wp_customize->add_setting( 'service_title', array(
    'type' => 'theme_mod',
    'default' => __( 'What We Do?', 'pluton' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'service_title', array(
    'label' => __( 'Title', 'pluton' ),
    'type' => 'text',
    'section' => 'service_section'
  ));

    $wp_customize->add_setting( 'service_subtitle', array(
    'type' => 'theme_mod',
    'default' => __( 'Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.', 'pluton' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'service_subtitle', array(
    'label' => __( 'Subtitle', 'pluton' ),
    'type' => 'text',
    'section' => 'service_section'
  ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pluton_customize_register' );
endif;// pluton_customize_register


if ( ! function_exists( 'pluton_enqueue_scripts' ) ) :
    function pluton_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', null, null, true );
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'jquerymixitup', get_template_directory_uri() . '/js/jquery.mixitup.js', null, null, true );
    wp_enqueue_script( 'jquerymixitup' );

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', null, null, true );
    wp_enqueue_script( 'bootstrap' );

    wp_register_script( 'modernizrcustom', get_template_directory_uri() . '/js/modernizr.custom.js', null, null, true );
    wp_enqueue_script( 'modernizrcustom' );

    wp_register_script( 'jquerybxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', null, null, true );
    wp_enqueue_script( 'jquerybxslider' );

    wp_register_script( 'jquerycslider', get_template_directory_uri() . '/js/jquery.cslider.js', null, null, true );
    wp_enqueue_script( 'jquerycslider' );

    wp_register_script( 'jqueryplaceholder', get_template_directory_uri() . '/js/jquery.placeholder.js', null, null, true );
    wp_enqueue_script( 'jqueryplaceholder' );

    wp_register_script( 'jqueryinview', get_template_directory_uri() . '/js/jquery.inview.js', null, null, true );
    wp_enqueue_script( 'jqueryinview' );

    wp_register_script( 'script-1', 'https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap', null, null, true );
    wp_enqueue_script( 'script-1' );

    wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', null, null, true );
    wp_enqueue_script( 'app' );

    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js' );

    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js' );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'bootstrapresponsive' );
    wp_enqueue_style( 'bootstrapresponsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'pluton' );
    wp_enqueue_style( 'pluton', get_template_directory_uri() . '/css/pluton.css', false, null, 'all');

    wp_deregister_style( 'jquerycslider' );
    wp_enqueue_style( 'jquerycslider', get_template_directory_uri() . '/css/jquery.cslider.css', false, null, 'all');

    wp_deregister_style( 'jquerybxslider' );
    wp_enqueue_style( 'jquerybxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', false, null, 'all');

    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pluton_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
    require_once "inc/custom.php";
?>
