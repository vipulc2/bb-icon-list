
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


<?php
	// Icon - Border
	FLBuilderCSS::border_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'icon_border',
			'selector'     => '.icon-style',
		)
	);
	?>


<?php
	// Caption Typography
	FLBuilderCSS::typography_field_rule(
		array(
			'settings'     => $settings,
			'setting_name' => 'list_typography',
			'selector'     => '.txt-style',
		)
	);
	?>
