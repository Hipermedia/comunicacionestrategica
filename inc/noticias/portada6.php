<?php 
/** Bloque 6 noticias en portada
------------------------------------------------------------------- */ 
?>
<!-- portada6 -->
<section class="Noticias-bloquePortada6">
	<h2 class="Noticias-categoria">De Interés</h2>
	<section class="Noticias-destacada">
		<?php 
				$id = get_field('bloqueNoticias6', 'option');
				// the query
				$args = array(
						'posts_per_page'	=> 1,
						'cat'				=> $id, 
					);
				$consulta = new WP_Query( $args ); ?>
				<?php if ( $consulta->have_posts() ) : ?>
					<!-- the loop -->
					<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<figure>
								<?php the_post_thumbnail('large'); ?>
							</figure>
						</a>
						<a href="<?php the_permalink(); ?>">
							<h2 class="Noticias-titulo"><?php the_title(); ?></h2>
						</a>
						<p class="Noticias-fecha">Lunes 19 de enero de 2015</p>
					<?php endwhile; ?>
					<!-- end of the loop -->
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'No hay resultados' ); ?></p>
				<?php endif; ?>
	</section>

	<section class="Noticias-secundarias">
		<?php 
				$id2 = get_field('bloqueNoticias6', 'option');
				// the query
				$args = array(
						'posts_per_page'	=> 4,
						'cat'				=> $id2, 
					);
				$consulta = new WP_Query( $args ); ?>
				<?php if ( $consulta->have_posts() ) : ?>
					<!-- the loop -->
					<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
						<div class="Noticias-noticia">
							<a href="<?php the_permalink(); ?>">
								<figure>
									<?php the_post_thumbnail(); ?>
								</figure>
							</a>
							<div class="texto">
								<a href="<?php the_permalink(); ?>">
									<h2 class="Noticias-titulo"><?php the_title(); ?></h2>
								</a>
								<p class="Noticias-fecha">Lunes 19 de enero de 2015</p>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'No hay resultados' ); ?></p>
				<?php endif; ?>
	</section>
</section>