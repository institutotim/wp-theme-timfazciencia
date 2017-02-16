<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<div id="sidebar">

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

		<?php dynamic_sidebar( 'sidebar-2' ); ?>

		<?php dynamic_sidebar( 'sidebar-3' ); ?>

		<?php dynamic_sidebar( 'sidebar-4' ); ?>

	</div> <!-- end #sidebar -->

<?php endif; ?>