<?php

function create_semicircle($bg_color = '#FFCA07', $stroke_color = NULL, $styles = array()) {
	?>
		<svg
			class="semicircle"
			width="300"
			height="150"
			<?php if ( $styles ) : ?>
				style="<?php foreach ( $styles as $style => $value) {
					echo $style . ' :' . $value . ';';
				} ?>"
			<?php endif; ?>
		>
			<circle
				cx="150"
				cy="150"
				r="150"
				<?php if ($bg_color) : ?>
					fill="<?php echo $bg_color; ?>"
				<?php endif; ?>
				<?php if ($stroke_color) : ?>
					stroke="<?php echo $stroke_color; ?>"
				<?php endif; ?>
				stroke-width="2" 
			/>
		</svg>
	<?php
}

function create_circle($bg_color = '#FFCA07', $stroke_color = NULL, $styles = array()) {
	?>
		<svg
			class="circle"
			width="300"
			height="300"
			<?php if ( $styles ) : ?>
				style="<?php foreach ( $styles as $style => $value) {
					echo $style . ' :' . $value . ';';
				} ?>"
			<?php endif; ?>
		>
			<circle
				cx="150" cy="150" r="150" stroke-width="2" 
				<?php if ($bg_color) : ?>
					fill="<?php echo $bg_color; ?>"
				<?php endif; ?>
				<?php if ($stroke_color) : ?>
					stroke="<?php echo $stroke_color; ?>"
				<?php endif; ?>
			/>
		</svg>
	<?php
}