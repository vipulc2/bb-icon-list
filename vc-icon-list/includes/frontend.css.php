
.icon-style {
  color: #<?php echo $settings->icon_color; ?>;
  background-color: #<?php echo $settings->background_color; ?>;
  font-size: <?php echo $settings->icon_size; ?>px;
  padding: <?php echo $settings->icon_padding; ?>px;
  margin-right: <?php echo $settings->h_space; ?>px;
	display: inline-block;
  }

.txt-style {
  color: #<?php echo $settings->text_color; ?>;
  display: table-cell;
	vertical-align: middle;
}

.list-item {
  margin-bottom: <?php echo $settings->v_height; ?>px;
  display: table;
	vertical-align: middle;
}


.image-style {
	width: <?php echo $settings->image_width; ?>px;
	height: <?php echo $settings->image_height; ?>px;
	display: inline-block;
}
 
.img-space {
	margin-right: <?php echo $settings->h_space_image; ?>px;
	display: inline-block;

}

.number-style {
	margin-right: <?php echo $settings->h_space_number; ?>px;
	display: inline-block;
	vertical-align: middle;
	text-align: center;
	padding-top: 15px;
	padding: <?php echo $settings->num_padding; ?>px;
	background-color: #<?php echo $settings->background_color_number; ?>;
	color: #<?php echo $settings->num_color; ?>;
}



<?php
	// Icon - Border.
	FLBuilderCSS::border_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'icon_border',
			'selector'     => '.icon-style',
		)
	);
	?>
<?php
	// Image - Border.
	FLBuilderCSS::border_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'image_border',
			'selector'     => '.image-style',
		)
	);
	?>
<?php
	// Number - Border.
	FLBuilderCSS::border_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'number_border',
			'selector'     => '.number-style',
		)
	);
	?>

<?php
	// Number Typography.
	FLBuilderCSS::typography_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'num_typography',
			'selector'     => '.number-style',
		)
	);
	?>

<?php
	// Caption Typography.
	FLBuilderCSS::typography_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'list_typography',
			'selector'     => '.txt-style',
		)
	);
	?>

