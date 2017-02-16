<?php
if ( is_front_page() ) return;

if ( class_exists( 'woocommerce' ) && is_woocommerce() ) {
	woocommerce_breadcrumb();
	return;
}
?>

<div id="breadcrumbs">
	<?php if(function_exists('bcn_display')) { bcn_display(); }
		  else { ?>
				<a href="<?php echo esc_url( home_url() ); ?>" class="breadcrumbs_home"><?php esc_html_e('Home','Nexus') ?></a> <span class="raquo">&raquo;</span>

				<?php if( is_tag() ) { ?>
					<?php esc_html_e('Resultados para a tag ','Nexus') ?> <?php echo('&quot;'); ?> <?php single_tag_title(); echo('&quot;'); ?>
				<?php } elseif (is_day()) { ?>
					<?php esc_html_e('Posts made in','Nexus') ?> <?php the_time('F jS, Y'); ?>
				<?php } elseif (is_month()) { ?>
					<?php esc_html_e('Posts made in','Nexus') ?> <?php the_time('F, Y'); ?>
				<?php } elseif (is_year()) { ?>
					<?php esc_html_e('Posts made in','Nexus') ?> <?php the_time('Y'); ?>
				<?php } elseif (is_search()) { ?>
					<?php esc_html_e('Resultado de busca por:','Nexus') ?> <?php the_search_query() ?>

	<?php } elseif (in_category('3')) { ?>
		<?php if (is_category('3')) { ?>
			<?php echo 'Todas as Notícias' ?>

			<?php } elseif (is_category()) { ?>
				<?php 
				$category = get_the_category();
				$categories = array_reverse( $category );
					foreach($categories as $category) { 
						if(($category->cat_ID == 3) || ($category->cat_ID == 17)) {
						    echo '<a href="' .get_category_link($category->term_id). '">' . $category->cat_name . '</a>'; 
							echo '<span class="raquo">&raquo;</span>';
						}
				    } 
			?>

		<?php } else { ?>
				<?php 
					$category = get_the_category();
					$category = array_reverse( $category );
					foreach($category as $category) { 
						if(($category->cat_ID == 3) || ($category->cat_ID == 17)) {
					    echo '<a href="' .get_category_link($category->term_id). '">' . $category->cat_name . '</a>'; 
						echo '<span class="raquo">&raquo;</span>';
					    } 
					}
			    ?>
				<?php echo get_the_title(); }
			?>
		
	<?php } elseif (in_category(array(1,29,19,23,18))) { ?>
		<?php 
			echo '<a href="http://timfazciencia.com.br/conheca-as-7-operacoes/">Conheça as 7 operações</a><span class="raquo">&raquo;</span>';	
			echo get_the_title();
			?>
	<?php } elseif (in_category('5')) { ?>
		<?php 
			echo '<a href="http://timfazciencia.com.br/galeria-de-pensadores/">Galeria de Pensadores</a><span class="raquo">&raquo;</span>';	
			echo get_the_title();
			?>
				<?php } elseif (is_single()) { ?>
				<?php
					$category = get_the_category();
					if ( $category ) {
						$catlink = get_category_link( $category[0]->cat_ID );
						echo ('<a href="'.esc_url($catlink).'">'.esc_html($category[0]->cat_name).'</a> '.'<span class="raquo">&raquo;</span> ');
					}

					echo get_the_title();
				?>
				<?php } elseif (is_category()) { ?>
					<?php single_cat_title(); ?>
				<?php } elseif (is_tax()) { ?>
					<?php
						$et_taxonomy_links = array();
						$et_term = get_queried_object();
						$et_term_parent_id = $et_term->parent;
						$et_term_taxonomy = $et_term->taxonomy;

						while ( $et_term_parent_id ) {
							$et_current_term = get_term( $et_term_parent_id, $et_term_taxonomy );
							$et_taxonomy_links[] = '<a href="' . esc_url( get_term_link( $et_current_term, $et_term_taxonomy ) ) . '" title="' . esc_attr( $et_current_term->name ) . '">' . esc_html( $et_current_term->name ) . '</a>';
							$et_term_parent_id = $et_current_term->parent;
						}

						if ( !empty( $et_taxonomy_links ) ) echo implode( ' <span class="raquo">&raquo;</span> ', array_reverse( $et_taxonomy_links ) ) . ' <span class="raquo">&raquo;</span> ';

						echo esc_html( $et_term->name );
					?>
				<?php } elseif (is_author()) { ?>
					<?php
						global $wp_query;
						$curauth = $wp_query->get_queried_object();
					?>
					<?php esc_html_e('Posts by ','Nexus'); echo ' ',$curauth->nickname; ?>
				<?php } elseif (is_page()) { ?>
					<?php wp_title(''); ?>
				<?php }; ?>
	<?php } ?>
</div> <!-- #breadcrumbs -->