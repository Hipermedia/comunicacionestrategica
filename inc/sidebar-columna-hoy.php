<?php 
/** Sidebar; Columna Hoy
------------------------------------------------------------------- */ 
?>
<section class="SidebarColumnaHoy">
	<h2 class="h2"><?php the_field('colHoyTitulo', 'option'); ?></h2>
	<figure>
		<!-- <i class="fa fa-user"></i> -->
		<img src="<?php the_field('colHoyImagen', 'option'); ?>" alt="">
	</figure>
	<h2 class="SidebarColumnaHoy-titulo">
		Título del artículo de la columna
	</h2>
	<h3 class="SidebarColumnaHoy-columnista">
		<?php the_field('colHoyNombre', 'option'); ?>
	</h3>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Leer</button>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php the_field('colHoyTitulo', 'option'); ?></h4>
      </div>
      <div class="modal-body">
        <?php the_field('colHoyContenido', 'option'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>