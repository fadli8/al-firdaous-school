<?php

Kirki::add_field( 'bizberg', [
	'type'        => 'slider',
	'settings'    => 'logo_height',
	'label'       => esc_html__( 'Logo Height', 'bizberg' ),
	'section'     => 'title_tagline',
	'default'     => 51,
	'priority'    => 9, 
	'choices'     => [
		'min'  => 51,
		'max'  => 200,
		'step' => 1,
	],
	'transport' => 'auto',
	'output'   => array(
		array(
			'element'  => '.bizberg_header_wrapper .logo img,.primary_header_2 a img',
			'property'      => 'max-height',
			'value_pattern' => '$px',
			'media_query' => '@media (min-width: 1025px) and (max-width: 2000px)'
		)
	)
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'radio-buttonset',
	'settings'    => 'sticky_logo_height',
	'label'       => esc_html__( 'Apply default logo height on sticky menu', 'bizberg' ),
	'description' => esc_html__( 'If checked, it will ignore the above height and use default height for the logo on sitcky menu.', 'bizberg' ),
	'section'     => 'title_tagline',
	'default'     => '51px',
	'priority'    => 9,
	'choices'     => [
		'51px'    => esc_html__( 'Enable', 'bizberg' ),
		''   => esc_html__( 'Disable', 'bizberg' )
	],
	'output'   => array(
		array(
			'element'  => '.navbar.sticky .bizberg_header_wrapper .logo img',
			'property'      => 'max-height',
			'value_pattern' => '$'
		)
	)
] );