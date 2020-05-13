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
				<span class="<?php echo $settings->icon_field;?>  icon-style"></span>
				<span class="txt-style"><?php echo $items[$i]; ?></span>
			</li>

		<?php } ?>

	<?php } ?>
	</ul>
