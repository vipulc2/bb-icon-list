<?php

// class VIconModule {

// }

class VIconModule extends FLBuilderModule {

	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'V Icon List', 'fl-builder' ),
				'description'     => __( 'A module to add icon list', 'fl-builder' ),
				'group'           => __( 'Icon List', 'fl-builder' ),
				'category'        => __( 'My Category', 'fl-builder' ),
				'dir'             => ICON_LIST_MODULE_DIR . 'vc-icon-list/',
				'url'             => ICON_LIST_MODULE_URL . 'vc-icon-list/',
				'icon'            => 'button.svg',
				'editor_export'   => true, // Defaults to true and can be omitted.
				'enabled'         => true, // Defaults to true and can be omitted.
				'partial_refresh' => false, // Defaults to false and can be omitted.
			)
		);
	}

	public function example_method() {
		return 'Hello World!';
	}
}

FLBuilder::register_module(
	'VIconModule',
	array(
		'general-icon'  => array(
			'title'    => __( 'Content', 'fl-builder' ),
			'sections' => array(
				'content-icon-section' => array(
					'title'  => __( 'Content Icon Section', 'fl-builder' ),
					'fields' => array(
						'icon_field' => array(
							'type'        => 'icon',
							'label'       => __( 'Select Icon', 'fl-builder' ),
							'show_remove' => true,
						),
					),
				),

				'content-list-section' => array(
					'title'  => __( 'Content List Section', 'fl-builder' ),
					'fields' => array(
						'list_field' => array(
							'type'     => 'text',
							'label'    => __( 'List Items', 'fl-builder' ),
							'multiple' => true,
						),
					),
				),
			),
		),

		'content-style' => array(
			'title'    => __( 'Style', 'fl-builder' ),
			'sections' => array(
				'spacing-section'      => array(
					'title'  => __( 'Spacing', 'fl-builder' ),
					'fields' => array(
						'v_height' => array(
							'type'        => 'unit',
							'label'       => 'List Item Height',
							'description' => 'px',
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'margin-bottom',
								'selector' => '.list-item',
								'unit'     => 'px',
							),
						),
						'h_space'  => array(
							'type'        => 'unit',
							'label'       => 'Space Between Text and Icon',
							'description' => 'px',
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'margin-right',
								'selector' => '.icon-style',
								'unit'     => 'px',
							),
						),
					),
				),


				'icon-style-section'   => array(
					'title'  => __( 'Icon Styling', 'fl-builder' ),
					'fields' => array(
						'background_color' => array(
							'type'       => 'color',
							'label'      => __( 'Background Color', 'fl-builder' ),
							'default'    => '',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.icon-style',
								'property' => 'background-color',
							),
						),

						'icon_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Icon Color', 'fl-builder' ),
							'default'    => '',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.icon-style',
								'property' => 'color',
							),

						),

						'icon_size'        => array(
							'type'        => 'unit',
							'label'       => 'Icon Size',
							'description' => 'px',
							'default'     => 18,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'font-size',
								'selector' => '.icon-style',
								'unit'     => 'px',
							),
						),

						'icon_padding'     => array(
							'type'        => 'unit',
							'label'       => 'Icon Padding',
							'description' => 'px',
							'default'     => 0,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'padding',
								'selector' => '.icon-style',
								'unit'     => 'px',
							),
						),

						'icon_border'      => array(
							'type'       => 'border',
							'label'      => 'Border',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.icon-style',
							),
						),
					),
				),

				'text-styling-section' => array(
					'title'  => __( 'Text Styling Section', 'fl-builder' ),
					'fields' => array(
						'list_typography' => array(
							'type'       => 'typography',
							'label'      => 'Typography',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.txt-style',
							),
						),

						'text_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Color', 'fl-builder' ),
							'default'    => '444444',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'color',
								'selector' => '.txt-style',

							),

						),
					),
				),
			),
		),
	)
);

