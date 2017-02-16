



<footer id="main-footer">

	<div id="footer-widgets" class="clearfix">

	<?php

		$footer_sidebars = array( 'footer-1', 'footer-2', 'footer-3', 'footer-4' );



		foreach ( $footer_sidebars as $key => $footer_sidebar ) :

			if ( is_active_sidebar( $footer_sidebar ) ) :

				echo '<div class="footer-widget' . ( 3 === $key ? ' last' : '' ) . '">';

				dynamic_sidebar( $footer_sidebar );

				echo '</div> <!-- end .footer-widget -->';

			endif;

		endforeach;

	?>

	</div> <!-- #footer-widgets -->

</footer> <!-- #main-footer -->