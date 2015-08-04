<?php 
/** Bloque 7 noticias en portada
------------------------------------------------------------------- */ 
?>
<!-- portada1 -->
<section class="Noticias-bloquePortada7">
	  <?php 
	  // the query
	  $categoria = get_field('bloqueNoticias7','option');
	  $args = 'cat='.$categoria;
	  $consulta = new WP_Query( $args ); ?>
	  <?php if ( $consulta->have_posts() ) : ?>
	  <h3 class="Noticias-categoria"><?php echo get_cat_name($categoria); ?></h3>
	  	<!-- the loop -->
	  	<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
	  		<div class="wrapper">
	  			<figure>
	  				<?php the_post_thumbnail('medium', array( 'class' => "Noticias-imagen")); ?>
	  			</figure>
				<h2 class="Noticias-titulo"><?php the_title(); ?></h2>
				<p class="Noticias-fecha"><?php the_date(); ?></p>
			</div>
	  	<?php endwhile; ?>
	  	<!-- end of the loop -->
	  	<?php wp_reset_postdata(); ?>
	  <?php else : ?>
	  	<p><?php _e( 'No hay resultados' ); ?></p>
	  <?php endif; ?>
</section>