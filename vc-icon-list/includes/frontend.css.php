.fl-node-<?php echo $id; ?> .vc-row-content-icon {

<?php if ( isset( $settings->h_space_icon ) && ! empty( $settings->h_space_icon ) ) { ?>
	margin-right: <?php echo $settings->h_space_icon; ?>px;
<?php } ?>
  
<?php if ( isset( $settings->background_color ) && ! empty( $settings->background_color ) ) { ?>
	background-color: #<?php echo ( $settings->background_color ); ?>;
<?php } ?>

<?php if ( isset( $settings->icon_size ) && ! empty( $settings->icon_size ) ) { ?>
	width: <?php echo $settings->icon_size; ?>px;
	height: <?php echo $settings->icon_size; ?>px;
<?php } ?>

<?php if ( isset( $settings->icon_color ) && ! empty( $settings->icon_color ) ) { ?>
	color: #<?php echo ( $settings->icon_color ); ?>;
<?php } ?>
  
	font-size: <?php echo $settings->icon_size; ?>px;

<?php if ( isset( $settings->icon_padding ) && ! empty( $settings->icon_padding ) ) { ?>
	padding: <?php echo $settings->icon_padding; ?>px;
<?php } ?>
  
	line-height: <?php echo ( '' != $settings->icon_size ) ? $settings->icon_size : ''; ?>px;

}

.fl-node-<?php echo $id; ?> .vc-row-content-image {

<?php if ( isset( $settings->background_color_image ) && ! empty( $settings->background_color_image ) ) { ?>
	background-color: #<?php echo ( $settings->background_color_image ); ?>;
<?php } ?>

<?php if ( isset( $settings->image_width ) && ! empty( $settings->image_width ) ) { ?>
	width: <?php echo $settings->image_width; ?>px;
<?php } ?>

<?php if ( isset( $settings->image_height ) && ! empty( $settings->image_height ) ) { ?>
	height: <?php echo $settings->image_height; ?>px;
<?php } ?>

}

.fl-node-<?php echo $id; ?> .vc-row-content-number {

<?php if ( isset( $settings->h_space_number ) && ! empty( $settings->h_space_number ) ) { ?>
	margin-right: <?php echo $settings->h_space_number; ?>px;
<?php } ?>

<?php if ( isset( $settings->background_color_number ) && ! empty( $settings->background_color_number ) ) { ?>
	background-color: #<?php echo ( $settings->background_color_number ); ?>;
<?php } ?>

<?php if ( isset( $settings->num_color ) && ! empty( $settings->num_color ) ) { ?>
	color: #<?php echo ( $settings->num_color ); ?>;
<?php } ?>

<?php if ( isset( $settings->num_width ) && ! empty( $settings->num_width ) ) { ?>
	width: <?php echo $settings->num_width; ?>px;
<?php } ?>

}

.fl-node-<?php echo $id; ?> .vc-module-row {

<?php if ( isset( $settings->v_height ) && ! empty( $settings->v_height ) ) { ?>
	margin-bottom: <?php echo $settings->v_height; ?>px;
<?php } ?>

}

.fl-node-<?php echo $id; ?> .vc-row-content-item {

<?php if ( isset( $settings->h_space_image ) && ! empty( $settings->h_space_image ) ) { ?>
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

	// Number Typography.
	FLBuilderCSS::typography_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'num_typography',
			'selector'     => ".fl-node-$id .vc-row-content-number",
		)
	);

	// Caption Typography.
	FLBuilderCSS::typography_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'list_typography',
			'selector'     => ".fl-node-$id .vc-row-content-item",
		)
	);

