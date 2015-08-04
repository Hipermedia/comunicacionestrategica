<?php 
/** Bloque 4 noticias en portada
------------------------------------------------------------------- */ 
?>
<!-- portada4 -->
<section class="Noticias-bloquePortada4">
	  <?php 
	  // the query
	  $categoria = get_field('bloqueNoticias4','option');
	  // $args = 'cat='.$categoria;
	  $args = array(
	  				'cat' 				=>	$categoria,
	  				'posts_per_page'	=> 	4,
	  			);
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

