<?php
/**
 * Summary File Contains Class for Beaver Builder custom Icon List Module
 *
 * Description. Contains class for vc-icon-list custom module.
 *
 * @link URL
 *
 * @package vc-icon-list
 *
 * @since 1.0.0
 */

/**
 * Summary. VIconModule Class inherits from Beaver Builder Class
 *
 * Description The class that extends to Beaver Builder Class for VC Icon List.
 *
 * @since 1.0.0
 */
class VIconModule extends FLBuilderModule {

	/**
	 * Summary. function that defines the name, group of module
	 *
	 * Description This function sets the name, group, category, directory of the custom module.
	 *
	 * @since 1.0.0
	 *
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'VC Icon List', 'fl-builder' ),
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

}
// Registeration of the module.
FLBuilder::register_module(
	'VIconModule',
	array(
		'general-icon'  => array(
			'title'    => __( 'Content', 'fl-builder' ), // Declaring a title for the first tab.
			'sections' => array(
				'content_type_selection_section' => array(
					'title'  => __( 'Content Selection Section', 'fl-builder' ), // Section declaration.
					'fields' => array(
						'select_type'  => array(
							'type'    => 'select',
							'label'   => __( 'Select List Type', 'fl-builder' ), // First Field.
							'default' => 'icon',
							'options' => array(
								'icon'   => __( 'Icon', 'fl-builder' ), // Icon Selection.
								'image'  => __( 'Image', 'fl-builder' ), // Image Selection.
								'number' => __( 'Number', 'fl-builder' ), // Number Selection.
							),
							// Toggle option to set specific fields and sections for Icon Selection.
							'toggle'  => array(
								'icon'   => array(
									'fields'   => array( 'icon_field', 'h_space_icon' ),
									'sections' => array( 'spacing_section', 'icon_style_section' ),
									'tabs'     => array( 'content_style' ),
								),
								// Toggle option to set specific fields and sections for Image Selection.
								'image'  => array(
									'fields'   => array( 'image_field', 'h_space_image' ),
									'sections' => array( 'spacing_section', 'image_style_section' ),
									'tabs'     => array( 'content_style' ),
								),
								// Toggle option to set specific fields and sections for Number Selection.
								'number' => array(
									'fields'   => array( 'number_field', 'h_space_number' ),
									'sections' => array( 'spacing_section', 'number_style_section' ),
									'tabs'     => array( 'content_style' ),
								),
							),
						),
						// The Field to select the icons.
						'icon_field'   => array(
							'type'        => 'icon',
							'label'       => __( 'Select Icon', 'fl-builder' ),
							'show_remove' => true,
						),
						// The Field to select the images.
						'image_field'  => array(
							'type'        => 'photo',
							'label'       => __( 'Select Image', 'fl-builder' ),
							'show_remove' => true,
						),
						// The Field to type the Number.
						'number_field' => array(
							'type'      => 'text',
							'label'     => __( 'Enter Starting Number', 'fl-builder' ),
							'default'   => '1',
							'maxlength' => '2',
							'size'      => '3',
						),
					),
				),
				// List Content for List Items.
				'content_list_section'           => array(
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
				// Spacing section for Icon. Keeping v_height for all List Items the same.
				'spacing_section'      => array(
					'title'  => __( 'Spacing', 'fl-builder' ),
					'fields' => array(
						'v_height'       => array(
							'type'        => 'unit',
							'label'       => 'List Item Height',
							'description' => 'px',
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'margin-bottom',
								'selector' => '.vc-module-row',
								'unit'     => 'px',
							),
						),
						'h_space_icon'   => array(
							'type'        => 'unit',
							'label'       => 'Space Between Text and Icon',
							'description' => 'px',
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'margin-right',
								'selector' => '.vc-row-content-icon',
								'unit'     => 'px',
							),
						),

						'h_space_image'  => array(
							'type'        => 'unit',
							'label'       => 'Space Between Text and Image',
							'description' => 'px',
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'padding-left',
								'selector' => '.vc-row-content-item',
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
								'selector' => '.vc-row-content-number',
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
								'selector' => '.vc-row-content-icon',
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
								'selector' => '.vc-row-content-icon',
								'property' => 'color',
							),

						),

						'icon_size'        => array(
							'type'        => 'unit',
							'label'       => 'Icon Size',
							'description' => 'px',
							'default'     => 22,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'font-size',
								'selector' => '.vc-row-content-icon',
								'unit'     => 'px',
							),
						),

						// 'icon_padding'     => array(
						// 'type'        => 'unit',
						// 'label'       => 'Icon Padding',
						// 'description' => 'px',
						// 'default'     => 0,
						// 'slider'      => true,
						// 'preview'     => array(
						// 'type'     => 'css',
						// 'property' => 'padding',
						// 'selector' => '.vc-row-content-icon',
						// 'unit'     => 'px',
						// ),
						// ),

						'icon_border'      => array(
							'type'       => 'border',
							'label'      => 'Border',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.vc-row-content-icon',
							),
						),
					),
				),



				// Section for Image Styling.
				'image_style_section'  => array(
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
								'selector' => '.vc-row-content-image',
								'property' => 'background-color',
							),
						),

						// Image Width Field.
						'image_width'            => array(
							'type'        => 'unit',
							'label'       => 'Image Width',
							'description' => 'px',
							'default'     => 200,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'width',
								'selector' => '.vc-row-content-image',
								'unit'     => 'px',
							),
						),

						// Image Height Field.
						'image_height'           => array(
							'type'        => 'unit',
							'label'       => 'Image Height',
							'description' => 'px',
							'default'     => 200,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'height',
								'selector' => '.vc-row-content-image',
								'unit'     => 'px',
							),
						),

						// Image Padding Field.
						// 'image_padding'          => array(
						// 'type'        => 'unit',
						// 'label'       => 'Image Padding',
						// 'description' => 'px',
						// 'default'     => 0,
						// 'slider'      => true,
						// 'preview'     => array(
						// 'type'     => 'css',
						// 'property' => 'padding',
						// 'selector' => '.vc-row-content-image',
						// 'unit'     => 'px',
						// ),
						// ),

						// Image Border Field.
						'image_border'           => array(
							'type'       => 'border',
							'label'      => 'Border',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.vc-row-content-image',
							),
						),
					),
				),


				// Section for Number Styling.
				'number_style_section' => array(
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
								'selector' => '.vc-row-content-number',
								'property' => 'background-color',
							),
						),

						// Number Color Field.
						'num_color'               => array(
							'type'       => 'color',
							'label'      => __( 'Number Color', 'fl-builder' ),
							'default'    => '',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.vc-row-content-number',
								'property' => 'color',
							),

						),


						// Number Typography Field.
						'num_typography'          => array(
							'type'       => 'typography',
							'label'      => 'Number Typography',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.vc-row-content-number',
							),
						),

						// Number Padding Field.
						'num_width'               => array(
							'type'        => 'unit',
							'label'       => 'Number Width',
							'description' => 'px',
							'default'     => 0,
							'slider'      => true,
							'preview'     => array(
								'type'     => 'css',
								'property' => 'width',
								'selector' => '.vc-row-content-number',
								'unit'     => 'px',
							),
						),

						// Number Border Field.
						'number_border'           => array(
							'type'       => 'border',
							'label'      => 'Border',
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.vc-row-content-number',
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
								'selector' => '.vc-row-content-item',
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
								'selector' => '.vc-row-content-item',

							),

						),
					),
				),
			),
		),
	)
);

