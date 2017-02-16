<?php if ( is_active_sidebar( 'sidebar-additional-1' ) && 'on' === et_get_option( 'nexus_3rd_column', 'on' ) ) : ?>

	<div id="additional-sidebar">

		<?php dynamic_sidebar( 'sidebar-additional-1' ); ?>

		<?php dynamic_sidebar( 'sidebar-additional-2' ); ?>

		<?php dynamic_sidebar( 'sidebar-additional-3' ); ?>

	</div> <!-- #additional-sidebar -->

<?php endif; ?>