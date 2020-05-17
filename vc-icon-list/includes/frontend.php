<?php

/**
 * Summary File Contains HTML output of module
 *
 * Description HTML code for the module.
 *
 * @since 1.0.0
 *
 * @package vc-icon-list
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

			<div class="vc-row-content-image" 

			style="background-image: url('<?php echo $settings->image_field_src; ?>')">

			</div>

		<?php	} ?>

		<?php if ( 'number' == $settings->select_type ) { ?>

			<div class="vc-row-content-number">			

			<?php

				$num = $settings->number_field;
				echo $num + $i;

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
