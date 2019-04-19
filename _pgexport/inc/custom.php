<?php
//* Set the content width based on the theme's design and stylesheet.
if (!isset($content_width)) {
  $content_width = 848;
  /* pixels */
}

function the_copyright()
{
	echo '<span> Copyright ©2018 - Finotelli - Desenvolvido por <a href="http://mmh.com.br" target="_blank">Milton Higaki</a> </span>';
}

// Customize function.
if ( ! function_exists( 'pluton_customize_panels' ) ) {
  // Customize Register action.
  add_action( 'customize_register', 'pluton_customize_panels' );
  /**
   * Customize: Panel.
   *
   * Customize function.
   *
   * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
   * @since  1.0.0
   */
  function pluton_customize_panels( $wp_customize ) {

    // Theme Settings
    $wp_customize->add_panel( 'pnl01_pluton',
      array(
        'capability'      => 'edit_theme_options',
        'description'      => esc_html__( 'description', 'pluton' ),
        'priority'      => 1,
        'theme_supports'    => '',
        'title'        => esc_html__( 'Theme Options', 'pluton' ),
      )
    );

    // General Settings
    $wp_customize->add_panel( 'pnl02_pluton',
      array(
        'capability'      => 'edit_theme_options',
        'description'      => esc_html__( 'description', 'pluton' ),
        'priority'      => 2,
        'theme_supports'    => '',
        'title'        => esc_html__( 'General Settings', 'pluton' ),
      )
    );

  }
}

  ?>
