<?php
/**
 * Genesis ELV3D.
 *
 * This file adds the Customizer additions to the Genesis ELV3D Theme.
 *
 * @package Genesis ELV3D
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'customize_register', 'genesis_elv3d_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function genesis_elv3d_customizer_register( $wp_customize ) {

	$appearance = genesis_get_config( 'appearance' );

	$wp_customize->add_setting(
		'genesis_elv3d_link_color',
		[
			'default'           => $appearance['default-colors']['link'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genesis_elv3d_link_color',
			[
				'description' => __( 'Change the color of post info links and button blocks, the hover color of linked titles and menu items, and more.', 'genesis-elv3d' ),
				'label'       => __( 'Link Color', 'genesis-elv3d' ),
				'section'     => 'colors',
				'settings'    => 'genesis_elv3d_link_color',
			]
		)
	);

	$wp_customize->add_setting(
		'genesis_elv3d_accent_color',
		[
			'default'           => $appearance['default-colors']['accent'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genesis_elv3d_accent_color',
			[
				'description' => __( 'Change the default hover color for button links, menu buttons, and submit buttons. The button block uses the Link Color.', 'genesis-elv3d' ),
				'label'       => __( 'Accent Color', 'genesis-elv3d' ),
				'section'     => 'colors',
				'settings'    => 'genesis_elv3d_accent_color',
			]
		)
	);

	$wp_customize->add_setting(
		'genesis_elv3d_logo_width',
		[
			'default'           => 350,
			'sanitize_callback' => 'absint',
			'validate_callback' => 'genesis_elv3d_validate_logo_width',
		]
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		'genesis_elv3d_logo_width',
		[
			'label'       => __( 'Logo Width', 'genesis-elv3d' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'genesis-elv3d' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'genesis_elv3d_logo_width',
			'type'        => 'number',
			'input_attrs' => [
				'min' => 100,
			],

		]
	);

}

/**
 * Displays a message if the entered width is not numeric or greater than 100.
 *
 * @param object $validity The validity status.
 * @param int    $width The width entered by the user.
 * @return int The new width.
 */
function genesis_elv3d_validate_logo_width( $validity, $width ) {

	if ( empty( $width ) || ! is_numeric( $width ) ) {
		$validity->add( 'required', __( 'You must supply a valid number.', 'genesis-elv3d' ) );
	} elseif ( $width < 100 ) {
		$validity->add( 'logo_too_small', __( 'The logo width cannot be less than 100.', 'genesis-elv3d' ) );
	}

	return $validity;

}
