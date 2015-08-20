<?php 
/** Bloque 1 noticias en portada
------------------------------------------------------------------- */ 
?>
<!-- portada1 -->
<section class="Noticias-bloquePortada1">
	<h2 class="Noticias-categoria">Estatales</h2>
	<section class="Noticias-destacada">
		<?php 
		$id = get_field('bloqueNoticias1', 'option');
		// the query
		$args = array(
				'posts_per_page'	=> 1,
				'cat'				=> $id, 
			);
		$consulta = new WP_Query( $args ); ?>
		<?php if ( $consulta->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
				<figure>
					<?php the_post_thumbnail('large'); ?>
				</figure>
				<h2 class="Noticias-titulo"><?php the_title(); ?></h2>
				<p class="Noticias-fecha">Lunes 19 de enero de 2015</p>
				<p class="Noticias-resumen"><?php the_excerpt(); ?></p>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php _e( 'No hay resultados' ); ?></p>
		<?php endif; ?>
	</section>

	<section class="Noticias-secundarias">
		<?php 
		$id2 = get_field('bloqueNoticias1', 'option');
		// the query
		$args = array(
				'posts_per_page'	=> 3,
				'cat'				=> $id2, 
			);
		$consulta = new WP_Query( $args ); ?>
		<?php if ( $consulta->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
				<div class="Noticias-noticia">
					<figure>
						<?php the_post_thumbnail('large'); ?>
					</figure>
					<h2 class="Noticias-titulo"><?php the_title(); ?></h2>
					<p class="Noticias-fecha">Lunes 19 de enero de 2015</p>
				</div>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php _e( 'No hay resultados' ); ?></p>
		<?php endif; ?>
	</section>
</section>