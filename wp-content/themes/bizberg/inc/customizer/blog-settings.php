<?php

Kirki::add_field( 'bizberg', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'sidebar_settings',
	'label'       => esc_html__( 'Sidebar', 'bizberg' ),
	'section'     => 'homepage',
	'default'     => apply_filters( 'bizberg_sidebar_settings', '1' ),
	'choices'     => array(
		'1'   => esc_html__( 'Right Sidebar', 'bizberg' ),
		'2' => esc_html__( 'Left Sidebar', 'bizberg' ),
		'3'  => esc_html__( 'No Sidebar ( Two Columns )', 'bizberg' ),
		'4'  => esc_html__( 'No Sidebar ( Three Columns )', 'bizberg' ),
	),
) );

Kirki::add_field( 'bizberg', array(
	'type'        => 'text',
	'settings'    => 'excerpt_length',
	'label'       => esc_html__( 'Excerpt Length', 'bizberg' ),
	'description' => esc_html__( 'Enter number of words to display in excerpt', 'bizberg' ),
	'section'     => 'homepage',
	'default'     => 60
) );

Kirki::add_field( 'bizberg', array(
	'type'        => 'toggle',
	'settings'    => 'hide_author',
	'label'       => esc_html__( 'Hide Author', 'bizberg' ),
	'section'     => 'homepage'
) );

Kirki::add_field( 'bizberg', array(
	'type'        => 'toggle',
	'settings'    => 'hide_category',
	'label'       => esc_html__( 'Hide Category', 'bizberg' ),
	'section'     => 'homepage'
) );

Kirki::add_field( 'bizberg', array(
	'type'        => 'toggle',
	'settings'    => 'hide_comment',
	'label'       => esc_html__( 'Hide Comment', 'bizberg' ),
	'section'     => 'homepage',
	'default' => false
) );

Kirki::add_field( 'bizberg', array(
	'type'        => 'toggle',
	'settings'    => 'hide_post_date',
	'label'       => esc_html__( 'Hide Date', 'bizberg' ),
	'section'     => 'homepage',
	'default' => false
) );

Kirki::add_field( 'bizberg', array(
	'type'        => 'toggle',
	'settings'    => 'hide_read_time',
	'label'       => esc_html__( 'Hide Read Time', 'bizberg' ),
	'section'     => 'homepage',
	'default' => false
) );