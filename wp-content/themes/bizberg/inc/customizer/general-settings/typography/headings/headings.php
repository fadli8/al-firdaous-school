<?php

Kirki::add_field( 'bizberg', array(
    'type'        => 'custom',
    'settings'    => 'body_typo_heading_1',
    'section'     => 'headings',
    'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Heading 1', 'bizberg' ) . '</div>',
) );

Kirki::add_field( 'bizberg', [
	'type'        => 'checkbox',
	'settings'    => 'body_typo_heading_1_status',
	'label'       => esc_html__( 'Enable / Disable', 'bizberg' ),
	'description' => esc_html__( 'Tick to enable custom H1 font', 'bizberg' ),
	'section'     => 'headings',
	'default'     => apply_filters( 'bizberg_body_typo_heading_1_status', false ),
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'typography',
	'settings'    => 'typography_h1',
	'section'     => 'headings',
	'default'     => apply_filters( 'bizberg_typography_h1', [
		'font-family'    => 'Lato',
		'variant'        => '700',
		'font-size'      => '44px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	]),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h1:not(.elementor-heading-title),.breadcrumb-wrapper h1',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_1_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'number',
	'settings'    => 'typography_h1_tablet',
	'label'       => esc_html__( 'Font Size ( Tablet )', 'bizberg' ),
	'section'     => 'headings',
	'default'     => 33,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h1:not(.elementor-heading-title),.breadcrumb-wrapper h1',
			'value_pattern' => '$px !important',
			'property' => 'font-size',
			'media_query' => '@media (min-width: 481px) and (max-width: 1024px)',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_1_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'number',
	'settings'    => 'typography_h1_mobile',
	'label'       => esc_html__( 'Font Size ( Mobile )', 'bizberg' ),
	'section'     => 'headings',
	'default'     => 27,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h1:not(.elementor-heading-title),.breadcrumb-wrapper h1',
			'value_pattern' => '$px !important',
			'property' => 'font-size',
			'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_1_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', array(
    'type'        => 'custom',
    'settings'    => 'body_typo_heading_2',
    'section'     => 'headings',
    'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Heading 2', 'bizberg' ) . '</div>',
) );

Kirki::add_field( 'bizberg', [
	'type'        => 'checkbox',
	'settings'    => 'body_typo_heading_2_status',
	'label'       => esc_html__( 'Enable / Disable', 'bizberg' ),
	'description' => esc_html__( 'Tick to enable custom H2 font', 'bizberg' ),
	'section'     => 'headings',
	'default'     => apply_filters( 'bizberg_body_typo_heading_2_status', false ),
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'typography',
	'settings'    => 'typography_h2',
	'section'     => 'headings',
	'default'     => apply_filters( 'bizberg_typography_h2', [
		'font-family'    => 'Lato',
		'variant'        => '700',
		'font-size'      => '19px',
		'line-height'    => '1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	]),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h2:not(.elementor-heading-title),#sidebar .widget h2.widget-title',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_2_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'number',
	'settings'    => 'typography_h2_tablet',
	'label'       => esc_html__( 'Font Size ( Tablet )', 'bizberg' ),
	'section'     => 'headings',
	'default'     => 19,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h2:not(.elementor-heading-title),#sidebar .widget h2.widget-title',
			'value_pattern' => '$px !important',
			'property' => 'font-size',
			'media_query' => '@media (min-width: 481px) and (max-width: 1024px)',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_2_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'number',
	'settings'    => 'typography_h2_mobile',
	'label'       => esc_html__( 'Font Size ( Mobile )', 'bizberg' ),
	'section'     => 'headings',
	'default'     => 19,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h2:not(.elementor-heading-title),#sidebar .widget h2.widget-title',
			'value_pattern' => '$px !important',
			'property' => 'font-size',
			'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_2_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', array(
    'type'        => 'custom',
    'settings'    => 'body_typo_heading_3',
    'section'     => 'headings',
    'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Heading 3', 'bizberg' ) . '</div>',
) );

Kirki::add_field( 'bizberg', [
	'type'        => 'checkbox',
	'settings'    => 'body_typo_heading_3_status',
	'label'       => esc_html__( 'Enable / Disable', 'bizberg' ),
	'description' => esc_html__( 'Tick to enable custom H3 font', 'bizberg' ),
	'section'     => 'headings',
	'default'     => apply_filters( 'bizberg_body_typo_heading_3_status', false ),
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'typography',
	'settings'    => 'typography_h3',
	'section'     => 'headings',
	'default'     => apply_filters( 'bizberg_typography_h3', [
		'font-family'    => 'Lato',
		'variant'        => '700',
		'font-size'      => '24px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	]),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h3:not(.elementor-heading-title):not(.header_site_title),.detail-content.single_page h3',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_3_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'number',
	'settings'    => 'typography_h3_tablet',
	'label'       => esc_html__( 'Font Size ( Tablet )', 'bizberg' ),
	'section'     => 'headings',
	'default'     => 24,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h3:not(.elementor-heading-title),.detail-content.single_page h3',
			'value_pattern' => '$px !important',
			'property' => 'font-size',
			'media_query' => '@media (min-width: 481px) and (max-width: 1024px)',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_3_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'number',
	'settings'    => 'typography_h3_mobile',
	'label'       => esc_html__( 'Font Size ( Mobile )', 'bizberg' ),
	'section'     => 'headings',
	'default'     => 19,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h3:not(.elementor-heading-title),.detail-content.single_page h3',
			'value_pattern' => '$px !important',
			'property' => 'font-size',
			'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_3_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', array(
    'type'        => 'custom',
    'settings'    => 'body_typo_heading_4',
    'section'     => 'headings',
    'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Heading 4', 'bizberg' ) . '</div>',
) );

Kirki::add_field( 'bizberg', [
	'type'        => 'checkbox',
	'settings'    => 'body_typo_heading_4_status',
	'label'       => esc_html__( 'Enable / Disable', 'bizberg' ),
	'description' => esc_html__( 'Tick to enable custom H4 font', 'bizberg' ),
	'section'     => 'headings',
	'default'     => apply_filters( 'bizberg_body_typo_heading_4_status', false ),
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'typography',
	'settings'    => 'typography_h4',
	'section'     => 'headings',
	'default'     => apply_filters( 'bizberg_typography_h4', [
		'font-family'    => 'Lato',
		'variant'        => '700',
		'font-size'      => '19px',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	]),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h4:not(.elementor-heading-title)',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_4_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'number',
	'settings'    => 'typography_h4_tablet',
	'label'       => esc_html__( 'Font Size ( Tablet )', 'bizberg' ),
	'section'     => 'headings',
	'default'     => 19,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h4:not(.elementor-heading-title)',
			'value_pattern' => '$px !important',
			'property' => 'font-size',
			'media_query' => '@media (min-width: 481px) and (max-width: 1024px)',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_4_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'number',
	'settings'    => 'typography_h4_mobile',
	'label'       => esc_html__( 'Font Size ( Mobile )', 'bizberg' ),
	'section'     => 'headings',
	'default'     => 19,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h4:not(.elementor-heading-title)',
			'value_pattern' => '$px !important',
			'property' => 'font-size',
			'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_typo_heading_4_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );