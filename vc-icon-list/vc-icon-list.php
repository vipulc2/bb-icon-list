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
						'select_type'  => array(
							'type'    => 'select',
							'label'   => __( 'Select List Type', 'fl-builder' ),
							'default' => 'icon',
							'options' => array(
								'icon'   => __( 'Icon', 'fl-builder' ),
								'image'  => __( 'Image', 'fl-builder' ),
								'number' => __( 'Number', 'fl-builder' ),
							),
							'toggle'  => array(
								'icon'   => array(
									'fields'   => array( 'icon_field', 'h_space' ),
									'sections' => array( 'spacing_section', 'icon_style_section' ),
									'tabs'     => array( 'content_style' ),
								),
								'image'  => array(
									'fields'   => array( 'image_field', 'h_space_image' ),
									'sections' => array( 'spacing_section', 'image_style_section' ),
									'tabs'     => array( 'content_style' ),
								),
								'number' => array(
									'fields'   => array( 'number_field', 'h_space_number' ),
									'sections' => array( 'spacing_section', 'number_style_section' ),
									'tabs'     => array( 'content_style' ),
								),
							),
						),
						'icon_field'   => array(
							'type'        => 'icon',
							'label'       => __( 'Select Icon', 'fl-builder' ),
							'show_remove' => true,
						),
						'image_field'  => array(
							'type'        => 'photo',
							'label'       => __( 'Select Image', 'fl-builder' ),
							'show_remove' => true,
						),
						'number_field' => array(
							'type'      => 'text',
							'label'     => __( 'Enter Starting Number', 'fl-builder' ),
							'default'   => '1',
							'maxlength' => '3',
							'size'      => '3',
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

		'content_style' => array(
			'title'    => __( 'Style', 'fl-builder' ),
			'sections' => array(
				// Spacing section for Icon. Keeping v_height for all.
				'spacing_section'      => array(
					'title'  => __( 'Spacing', 'fl-builder' ),
					'fields' => array(
						'v_height'      => array(
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
						'h_space'       => array(
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

						'h_space_image' => array(
							'type'        => 'unit',
							'label'       => 'Space Between Text and Image',
							'description' => 'px',
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'margin-right',
								'selector' => '.img-space',
								'unit'     => 'px',
							),
						),

						'h_space_number' => array(
							'type'        => 'unit',
							'label'       => 'Space Between Text and Number',
							'description' => 'px',
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'margin-right',
								'selector' => '.number-style',
								'unit'     => 'px',
							),
						),
					),
				),


				// Section for Icon Styling.
				'icon_style_section'   => array(
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



				// Section for Image Styling.
				'image_style_section'   => array(
					'title'  => __( 'Image Styling', 'fl-builder' ),
					'fields' => array(
						'background_color_image' => array(
							'type'       => 'color',
							'label'      => __( 'Background Color', 'fl-builder' ),
							'default'    => '',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.img-space',
								'property' => 'background-color',
							),
						),

						// Image Width Field.
						'image_width'        => array(
							'type'        => 'unit',
							'label'       => 'Image Width',
							'description' => 'px',
							'default'     => 150,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'width',
								'selector' => '.image-style',
								'unit'     => 'px',
							),
						),

						// Image Height Field.
						'image_height'        => array(
							'type'        => 'unit',
							'label'       => 'Image Height',
							'description' => 'px',
							'default'     => 150,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'height',
								'selector' => '.image-style',
								'unit'     => 'px',
							),
						),

						// Image Padding Field.
						'image_padding'     => array(
							'type'        => 'unit',
							'label'       => 'Image Padding',
							'description' => 'px',
							'default'     => 0,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'padding',
								'selector' => '.img-space',
								'unit'     => 'px',
							),
						),

						// Image Border Field.
						'image_border'      => array(
							'type'       => 'border',
							'label'      => 'Border',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.image-style',
							),
						),
					),
				),


				// Section for Number Styling.
				'number_style_section'   => array(
					'title'  => __( 'Number Styling', 'fl-builder' ),
					'fields' => array(
						'background_color_number' => array(
							'type'       => 'color',
							'label'      => __( 'Background Color', 'fl-builder' ),
							'default'    => '',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.number-style',
								'property' => 'background-color',
							),
						),

						// Number Color Field.
						'num_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Number Color', 'fl-builder' ),
							'default'    => '',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.number-style',
								'property' => 'color',
							),

						),


						// Number Typography Field.
						'num_typography' => array(
							'type'       => 'typography',
							'label'      => 'Number Typography',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.number-style',
							),
						),

						// Number Padding Field.
						'num_padding'     => array(
							'type'        => 'unit',
							'label'       => 'Number Padding',
							'description' => 'px',
							'default'     => 0,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'padding',
								'selector' => '.number-style',
								'unit'     => 'px',
							),
						),

						// Number Border Field.
						'number_border'      => array(
							'type'       => 'border',
							'label'      => 'Border',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.number-style',
							),
						),
					),
				),


				// Text Styling Section.
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

