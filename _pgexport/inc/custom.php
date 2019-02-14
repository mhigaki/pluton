<?php
// Customize function.
if ( ! function_exists( 'pluton_customize_name_panel_section' ) ) {
  // Customize Register action.
  add_action( 'customize_register', 'pluton_customize_name_panel_section' );
  /**
   * Customize: Panel.
   *
   * Customize function.
   *
   * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
   * @since  1.0.0
   */
  function pluton_customize_name_panel_section( $wp_customize ) {

    // Theme Settings
    $wp_customize->add_panel( 'pluton_panel',
      array(
        'capability'      => 'edit_theme_options',
        'description'      => esc_html__( 'description', 'pluton' ),
        'priority'      => 10,
        'theme_supports'    => '',
        'title'        => esc_html__( 'Theme Settings', 'pluton' ),
      )
    );

  }
}


?>
