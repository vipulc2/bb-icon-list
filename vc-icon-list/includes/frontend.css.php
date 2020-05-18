.fl-node-<?php echo $id; ?> .vc-row-content-icon {

<?php if ( isset( $settings->h_space_icon ) && '' !== $settings->h_space_icon ) { ?>
	margin-right: <?php echo $settings->h_space_icon; ?>px;
<?php } ?>

<?php if ( isset( $settings->background_color ) && ! empty( $settings->background_color ) ) { ?>
	background-color: <?php echo verify_color_type( $settings->background_color ); ?>;
<?php } ?>

<?php if ( isset( $settings->icon_size ) && '' !== ( $settings->icon_size ) ) { ?>
	width: <?php echo $settings->icon_size; ?>px;
	height: <?php echo $settings->icon_size; ?>px;
<?php } ?>

<?php if ( isset( $settings->icon_color ) && ! empty( $settings->icon_color ) ) { ?>
	color: #<?php echo ( $settings->icon_color ); ?>;
<?php } ?>
  
	font-size: <?php echo $settings->icon_size; ?>px;

<?php if ( isset( $settings->icon_padding ) && '' !== ( $settings->icon_padding ) ) { ?>
	padding: <?php echo $settings->icon_padding; ?>px;
<?php } ?>
  
	line-height: <?php echo ( '' != $settings->icon_size ) ? $settings->icon_size : ''; ?>px;

}

<?php
/**
 * Summary. function that defines the name, group of module
 *
 * Description This function sets the name, group, category, directory of the custom module.
 *
 * @since 1.0.0
 *
 * @param string $color_type Color of background.
 */
function verify_color_type( $color_type ) {
	if ( strpos( $color_type, 'rgb' ) === false ) {
		return '#' . $color_type;
	}
	if ( strpos( $color_type, 'rgb' ) !== false ) {
		return $color_type;
	}
}

?>


.fl-node-<?php echo $id; ?> .vc-row-content-image {

<?php if ( isset( $settings->background_color_image ) && ! empty( $settings->background_color_image ) ) { ?>
	background-color: <?php echo verify_color_type( $settings->background_color_image ); ?>;
<?php } ?>

<?php if ( isset( $settings->image_width ) && '' !== ( $settings->image_width ) ) { ?>
	width: <?php echo $settings->image_width; ?>px;
<?php } ?>

<?php if ( isset( $settings->image_height ) && '' !== ( $settings->image_height ) ) { ?>
	height: <?php echo $settings->image_height; ?>px;
<?php } ?>

}

.fl-node-<?php echo $id; ?> .vc-row-content-number {

<?php if ( isset( $settings->h_space_number ) && '' !== ( $settings->h_space_number ) ) { ?>
	margin-right: <?php echo $settings->h_space_number; ?>px;
<?php } ?>

<?php if ( isset( $settings->background_color_number ) && ! empty( $settings->background_color_number ) ) { ?>
	background-color: <?php echo verify_color_type( $settings->background_color_number ); ?>;
<?php } ?>

<?php if ( isset( $settings->num_color ) && ! empty( $settings->num_color ) ) { ?>
	color: #<?php echo ( $settings->num_color ); ?>;
<?php } ?>

<?php if ( isset( $settings->num_size ) && '' !== ( $settings->num_size ) ) { ?>
	font-size: <?php echo $settings->num_size; ?>px;
<?php } ?>

<?php if ( isset( $settings->num_width ) && '' !== ( $settings->num_width ) ) { ?>
	width: <?php echo $settings->num_width; ?>px;
<?php } ?>

<?php if ( isset( $settings->list_typography['font_family'] ) && 'Default' != $settings->list_typography['font_family'] ) { ?>
	font-family: <?php echo $settings->list_typography['font_family']; ?>;
		<?php if ( isset( $settings->list_typography['font_weight'] ) ) { ?>
			font-weight: <?php echo $settings->list_typography['font_weight']; ?>;
		<?php } ?>
<?php } ?>

}

.fl-node-<?php echo $id; ?> .vc-module-row {

<?php if ( isset( $settings->v_height ) && '' !== ( $settings->v_height ) ) { ?>
	margin-bottom: <?php echo $settings->v_height; ?>px;
<?php } ?>

}

.fl-node-<?php echo $id; ?> .vc-row-content-item {

<?php if ( isset( $settings->h_space_image ) && '' !== ( $settings->h_space_image ) ) { ?>
	padding-left: <?php echo $settings->h_space_image; ?>px;
<?php } ?>
}

<?php
	// Icon - Border.
	FLBuilderCSS::border_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'icon_border',
			'selector'     => ".fl-node-$id .vc-row-content-icon",
		)
	);

	// Image - Border.
	FLBuilderCSS::border_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'image_border',
			'selector'     => ".fl-node-$id .vc-row-content-image",
		)
	);

	// Number - Border.
	FLBuilderCSS::border_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'number_border',
			'selector'     => ".fl-node-$id .vc-row-content-number",
		)
	);

	// // Number Typography.
	// FLBuilderCSS::typography_field_rule(
	// array(
	// 'settings'     => $settings,
	// 'setting_name' => 'num_typography',
	// 'selector'     => ".fl-node-$id .vc-row-content-number",
	// )
	// );

	// Caption Typography.
	FLBuilderCSS::typography_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'list_typography',
			'selector'     => ".fl-node-$id .vc-row-content-item",
		)
	);

