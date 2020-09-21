<?php

Kirki::add_field( 'bizberg', [
	'type'        => 'slider',
	'settings'    => 'theme_container_width',
	'label'       => esc_html__( 'Container', 'bizberg' ),
	'section'     => 'container',
	'default'     => 1170,
	'choices'     => [
		'min'  => 768,
		'max'  => 1350,
		'step' => 1,
	],
	'transport' => 'auto',
	'output' => array(
		array(
			'element'  => '.container',
			'property' => 'max-width',
			'value_pattern' => '$px',
			'media_query' => '@media (min-width: 1200px)',
		)
	),
] );