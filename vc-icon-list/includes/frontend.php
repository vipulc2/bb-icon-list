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
?>

<ul class="icon-list-item" style="list-style: none;">
	<?php if ( is_array( $items ) && count( $items ) ) { ?>

		<?php for ( $i = 0; $i < count( $items ); $i++ ) { ?>

			<li class="list-item">

				<?php if ( 'icon' == $settings->select_type ) { ?>
					<span class="<?php echo $settings->icon_field; ?>  icon-style"></span>
			<?php	} ?>
				<?php if ( 'image' == $settings->select_type ) { ?>
					<span class="img-space">
						<img class="image-style" src="<?php echo $settings->image_field_src; ?>">
					</span>
			<?php	} ?>
				<?php if ( 'number' == $settings->select_type ) { ?>
					<span class="number-style">
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
					</span>
			<?php	} ?>


				<span class="txt-style"><?php echo $items[ $i ]; ?></span>



			</li>

		<?php } ?>

	<?php } ?>
	</ul>
