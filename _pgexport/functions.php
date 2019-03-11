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

    register_post_type('service', array(
    'labels' => 
      array(
        'name' => __( 'Services', 'pluton' ),
        'singular_name' => __( 'Service', 'pluton' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
    'show_in_menu' => true
  ));

    register_post_type('our_team', array(
    'labels' => 
      array(
        'name' => __( 'Ours Team', 'pluton' ),
        'singular_name' => __( 'Our Team', 'pluton' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
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

    register_sidebar( array(
    'name' => __( 'Skill', 'pluton' ),
    'id' => 'skill',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>'
  ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pluton_widgets_init' );
endif;// pluton_widgets_init



if ( ! function_exists( 'pluton_customize_register' ) ) :

function pluton_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'section_services', array(
    'title' => __( 'Services', 'pluton' ),
    'panel' => '01_panel_settings'
  ));

    $wp_customize->add_section( 'slider', array(
    'title' => __( 'Slider', 'pluton' ),
    'panel' => '01_panel_settings',
    'priority' => '01'
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

    $wp_customize->add_setting( 'page_slider_01', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'page_slider_01', array(
    'label' => __( '01 Slider', 'pluton' ),
    'type' => 'dropdown-pages',
    'section' => 'slider'
  ));

    $wp_customize->add_setting( '01_slide_link', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( '01_slide_link', array(
    'label' => __( 'Link', 'pluton' ),
    'type' => 'url',
    'section' => 'slider'
  ));

    $wp_customize->add_setting( '01_slide_text', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( '01_slide_text', array(
    'label' => __( 'Button Text', 'pluton' ),
    'type' => 'text',
    'section' => 'slider'
  ));

    $wp_customize->add_setting( 'page_slider_02', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'page_slider_02', array(
    'label' => __( '02 Slider', 'pluton' ),
    'type' => 'dropdown-pages',
    'section' => 'slider'
  ));

    $wp_customize->add_setting( '02_slide_link', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( '02_slide_link', array(
    'label' => __( 'Slider Link', 'pluton' ),
    'type' => 'url',
    'section' => 'slider'
  ));

    $wp_customize->add_setting( '02_slide_text', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( '02_slide_text', array(
    'label' => __( 'Button Text', 'pluton' ),
    'type' => 'text',
    'section' => 'slider'
  ));

    $wp_customize->add_setting( 'page_slider_03', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'page_slider_03', array(
    'label' => __( 'Slider 03', 'pluton' ),
    'type' => 'dropdown-pages',
    'section' => 'slider'
  ));

    $wp_customize->add_setting( 'sct_service_page', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'sct_service_page', array(
    'label' => __( 'Page Select', 'pluton' ),
    'type' => 'dropdown-pages',
    'section' => 'section_services'
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

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', null, null, 'all' );
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'bootstrapresponsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', null, null, 'all' );
    wp_enqueue_style( 'bootstrapresponsive' );

    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', null, null, 'all' );
    wp_enqueue_style( 'style' );

    wp_register_style( 'pluton', get_template_directory_uri() . '/css/pluton.css', null, null, 'all' );
    wp_enqueue_style( 'pluton' );

    wp_register_style( 'jquerycslider', get_template_directory_uri() . '/css/jquery.cslider.css', null, null, 'all' );
    wp_enqueue_style( 'jquerycslider' );

    wp_register_style( 'jquerybxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', null, null, 'all' );
    wp_enqueue_style( 'jquerybxslider' );

    wp_register_style( 'animate', get_template_directory_uri() . '/css/animate.css', null, null, 'all' );
    wp_enqueue_style( 'animate' );

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pluton_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
    require_once "inc/custom.php";
    require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'pluton_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function pluton_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

    // This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),

    // Adds the current page’s template name to the admin bar.
    array(
      'name'        => 'What Template',
      'slug'        => 'what-template',
      'is_callable' => '',
    ),

    // The theme check plugin is an easy way to test your theme and make sure it’s up to spec with the latest theme review standards.
    array(
      'name'        => 'Theme Check',
      'slug'        => 'theme-check',
      'is_callable' => '',
    ),

    // Advanced Custom Fields is a WordPress plugin which allows you to add extra content fields to your WordPress edit screens. 
    array(
      'name'        => 'Advanced Custom Fields',
      'slug'        => 'advanced-custom-fields',
      'is_callable' => '',
    ),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'pluton',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'pluton' ),
			'menu_title'                      => __( 'Install Plugins', 'pluton' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'pluton' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'pluton' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'pluton' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'pluton'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'pluton'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'pluton'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'pluton'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'pluton'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'pluton'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'pluton'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'pluton'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'pluton'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'pluton' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'pluton' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'pluton' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'pluton' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'pluton' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'pluton' ),
			'dismiss'                         => __( 'Dismiss this notice', 'pluton' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'pluton' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'pluton' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}
?>
