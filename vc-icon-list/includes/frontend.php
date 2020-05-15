<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example:
 */

$items = $settings->list_field;

if ( is_array( $items ) && count( $items ) ) { ?>

		<div class="vc-module-column">

	<?php for ( $i = 0; $i < count( $items ); $i++ ) { ?>

			<div class="vc-module-row">

		<?php if ( 'icon' == $settings->select_type ) { ?>

			<div class="vc-row-content-icon <?php echo $settings->icon_field; ?>"></div>

		<?php	} ?>

		<?php if ( 'image' == $settings->select_type ) { ?>

			<div class="vc-row-content-image">

					<img class="vc-row-image-style" src="<?php echo $settings->image_field_src; ?>">

			</div>

		<?php	} ?>

		<?php if ( 'number' == $settings->select_type ) { ?>

			<div class="vc-row-content-number vc-row-number-style">
			<?php

			if ( $num == '' ) {
				$num = $settings->number_field;
				echo $num;
				$num++;
			} else {
				echo $num;
				$num++;
			}

			?>
			</div>
			<?php } ?>


		<div class="vc-row-content-item">

		
				
				<?php echo $items[ $i ]; ?>


		</div>

		</div>

		
		
		<?php } ?>
		
	</div>
		
		
		
<?php } ?>
