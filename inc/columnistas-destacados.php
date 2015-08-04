<?php 
/** Columnistas destacados
------------------------------------------------------------------- */ 
?>
<!-- columnistas-destacados -->
<section class="ColumnistasDestacados">
	<div class="wrapper">
		<h3>Opinión</h3>
		<div id="cover-slider-columnistas" class="flexslider">
		  	<ul class="slides">
		  		<?php while(have_rows('colDestacados','option')) : the_row(); ?>
		  		<li>
		  			<img src="<?php the_sub_field('imagen','option'); ?>" alt="">
		  			<h3 class="ColumnistasDestacados-nombre"><?php the_sub_field('nombre','option'); ?></h3>
		  		</li>
		  		<!-- <div> -->
		  		<!-- </div> -->
		  		<?php endwhile; ?>
		  	</ul>
		</div>
	</div>
</section>