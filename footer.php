</div>
</div>


<div id="footer-tim">
	<div class="footer-tim">
		<div class="box-it box-sz1">
			<h2>O que é TIM Faz Ciência?</h2>
                          <?php 
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-1',
                          'menu' => '', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)
                          ); ?>

		</div>

		<div class="box-it box-sz1 footerborder-left">
			<h2>Conheça as 7 Operações</h2>
                          <?php 
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-2',
                          'menu' => '', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)
                          ); ?>
		</div>

		<div class="box-it box-sz1 footerborder-left">
			<h2>Galeria de Pensadores</h2>
                          <?php
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-3',
                          'menu' => '', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)
                          ); ?>
		</div>
		  
		<div class="box-it box-sz1 footerborder-left">
			<h2>Queremos Ouvir Você</h2>
                          <?php 
                          wp_nav_menu ( array(
                          'theme_location' => 'footer-4',
                          'menu' => '',
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>',
                          'container' => '',
                          'fallback_cb' => '',
                          'depth' => 2)
                          ); ?>
		</div>


		<div class="box-it box-sz2 footerborder-left">
			<a href="http://www.institutotim.org.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
		</div>
	</div>

	<div class="creditos">
		 Copyright TIM Celular <?php echo date('Y'); ?> - Todos os direitos reservados.
	</div>

</div>


	<?php wp_footer(); ?>
</body>
</html>
