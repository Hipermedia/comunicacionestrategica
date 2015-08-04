<?php 
/** Bloque 3 noticias en portada
------------------------------------------------------------------- */ 
?>
<!-- portada3 -->
<section class="Noticias-bloquePortada3">
	  <?php 
	  // the query
	  $categoria = get_field('bloqueNoticias3','option');
	  $args = 'cat='.$categoria;
	  $consulta = new WP_Query( $args ); ?>
	  <?php if ( $consulta->have_posts() ) : ?>
	  <h3 class="Noticias-categoria"><?php echo get_cat_name($categoria); ?></h3>
	  	<!-- the loop -->
	  	<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
	  		<figure>
	  			<?php the_post_thumbnail('large', array( 'class' => "Noticias-imagen")); ?>
	  		</figure>
			<h2 class="Noticias-titulo"><?php the_title(); ?></h2>
			<p class="Noticias-fecha"><?php the_date(); ?></p>
			<p class="Noticias-resumen"><?php the_excerpt(); ?></p>
	  	<?php endwhile; ?>
	  	<!-- end of the loop -->
	  	<?php wp_reset_postdata(); ?>
	  <?php else : ?>
	  	<p><?php _e( 'No hay resultados' ); ?></p>
	  <?php endif; ?>
</section>