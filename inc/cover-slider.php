<?php 
/** Slider principal
------------------------------------------------------------------- */ 
?>

<section class="CoverSlider">	
	<div id="cover-slider" class="flexslider">
	  	<ul class="slides">
<<<<<<< HEAD
	  		<?php 
	  		// the query
	  		$args = 'cat=9';
	  		$consulta = new WP_Query( $args ); ?>
	  		<?php if ( $consulta->have_posts() ) : ?>
	  			<!-- the loop -->
	  			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
					<li class="CoverSlider-slide">
						<?php the_post_thumbnail('large', array( 'class' => "CoverSlider-slideImage")); ?>
						<div class="CoverSlider-slideCaption">
							<h1 class="CoverSlider-slideTitle"><?php the_title(); ?></h1>
							<p class="CoverSlider-slideDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id odit quos deleniti fuga dolor esse, suscipit laborum, vitae reprehenderit enim.</p>
							<a class="btn CoverSlider-slideMore">Leer más</a>
						</div>
					</li>
	  			<?php endwhile; ?>
	  			<!-- end of the loop -->
	  			<?php wp_reset_postdata(); ?>
	  		<?php else : ?>
	  			<p><?php _e( 'No hay resultados' ); ?></p>
	  		<?php endif; ?>
	  	</ul>
	</div>

	<div id="cover-slider-thumb-nav" class="flexslider">
	  	<ul class="slides">
			<li>
				<img src="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slideImage" />
=======
	    	<li data-thumb="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slide">
				<img src="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slideImage" />
				<div class="CoverSlider-slideCaption">
					<h1 class="CoverSlider-slideTitle">Título del slider</h1>
					<p class="CoverSlider-slideDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id odit quos deleniti fuga dolor esse, suscipit laborum, vitae reprehenderit enim.</p>
					<a class="btn CoverSlider-slideMore">Leer más</a>
				</div>
			</li>
			<li data-thumb="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slide">
				<img src="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slideImage" />
				<div class="CoverSlider-slideCaption">
					<h1 class="CoverSlider-slideTitle">Título del slider</h1>
					<p class="CoverSlider-slideDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id odit quos deleniti fuga dolor esse, suscipit laborum, vitae reprehenderit enim.</p>
					<a class="btn CoverSlider-slideMore">Leer más</a>
				</div>
			</li>
			<li data-thumb="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slide">
				<img src="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slideImage" />
				<div class="CoverSlider-slideCaption">
					<h1 class="CoverSlider-slideTitle">Título del slider</h1>
					<p class="CoverSlider-slideDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id odit quos deleniti fuga dolor esse, suscipit laborum, vitae reprehenderit enim.</p>
					<a class="btn CoverSlider-slideMore">Leer más</a>
				</div>
			</li>
			<li data-thumb="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slide">
				<img src="http://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpg" class="CoverSlider-slideImage" />
				<div class="CoverSlider-slideCaption">
					<h1 class="CoverSlider-slideTitle">Título del slider</h1>
					<p class="CoverSlider-slideDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id odit quos deleniti fuga dolor esse, suscipit laborum, vitae reprehenderit enim.</p>
					<a class="btn CoverSlider-slideMore">Leer más</a>
				</div>
>>>>>>> bb1ec99976a2b6c22f68976d0b863ba1a7ed6648
			</li>
	  	</ul>
	</div>
</section>

