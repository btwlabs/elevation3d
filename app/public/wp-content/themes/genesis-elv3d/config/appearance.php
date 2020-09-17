<?php
/**
 * Genesis ELV3D appearance settings.
 *
 * @package Genesis ELV3D
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_elv3d_default_colors = [
	'link'   => '#0073e5',
	'accent' => '#0073e5',
];

$genesis_elv3d_link_color = get_theme_mod(
	'genesis_elv3d_link_color',
	$genesis_elv3d_default_colors['link']
);

$genesis_elv3d_accent_color = get_theme_mod(
	'genesis_elv3d_accent_color',
	$genesis_elv3d_default_colors['accent']
);

$genesis_elv3d_link_color_contrast   = genesis_elv3d_color_contrast( $genesis_elv3d_link_color );
$genesis_elv3d_link_color_brightness = genesis_elv3d_color_brightness( $genesis_elv3d_link_color, 35 );

return [
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700&display=swap',
	'content-width'        => 1062,
	'button-bg'            => $genesis_elv3d_link_color,
	'button-color'         => $genesis_elv3d_link_color_contrast,
	'button-outline-hover' => $genesis_elv3d_link_color_brightness,
	'link-color'           => $genesis_elv3d_link_color,
	'default-colors'       => $genesis_elv3d_default_colors,
	'editor-color-palette' => [
		[
			'name'  => __( 'Custom color', 'genesis-elv3d' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $genesis_elv3d_link_color,
		],
		[
			'name'  => __( 'Accent color', 'genesis-elv3d' ),
			'slug'  => 'theme-secondary',
			'color' => $genesis_elv3d_accent_color,
		],
	],
	'editor-font-sizes'    => [
		[
			'name' => __( 'Small', 'genesis-elv3d' ),
			'size' => 12,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'genesis-elv3d' ),
			'size' => 18,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'genesis-elv3d' ),
			'size' => 20,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'genesis-elv3d' ),
			'size' => 24,
			'slug' => 'larger',
		],
	],
];
