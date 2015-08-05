<?php
/* Footer
 ----------------------------------*/
?>

</main>

<footer class="Footer">	
    
    <section class="u-contenedor Footer-contenedor">
		
		<div class="Footer-bloque">
			<!-- Logo CE-->
			<a class="Footer-logo" href="<?php inicio_url(); ?>" id="logo-ce" class="Header-logoCE">
			    <img src="<?php the_field('logoCE', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
			</a>
			<!-- Logo RR-->
			<a class="Footer-logo" href="<?php inicio_url(); ?>" id="logo-rr" class="Header-logoRR">
			    <img src="<?php the_field('logoRR', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
			</a>
			<a class="condiciones" href="">Aviso Legal</a>
			<a class="condiciones" href="">Políticas de privacidad</a>
			<a class="condiciones" href="">Código de ética</a>
		</div>

		<div class="Footer-bloque">
			<p class="Footer-textito">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit neque, earum, magnam molestiae debitis modi repellat maxime exercitationem maiores odio!</p>
			<i class="fa fa-whatsapp"></i><h3 class="Footer-contacto">WhatsApp 298009128</h3>
			<i class="fa fa-phone"></i><h3 class="Footer-contacto">(228) 0000000, (228) 000000</h3>
			<i class="fa fa-envelope"></i><h3 class="Footer-contacto">contacto@revistarepublica.com</h3>
		</div>

		<div class="Footer-bloque">
			<?php newsletter(); ?>
			<?php primalSocialShare(); ?>
			<h3 class="anuncio">¿Quieres anunciarte en nuestro sitio, click <a href="">aquí</a></h3>
		</div>


    	
    	<aside class="Footer-creditos">
    		<a class="Footer-firmaSH" href="http://www.solucioneshipermedia.com/">Soluciones Hipermedia | Desarrollo web</a>
    	</aside>
    </section>     

</footer>
<!-- JS personalizados del tema -->
<?php waypoints(); // Librería que detecta puntos en el scroll de pantalla ?>
<?php bootstrap(); // framework Bootsrap ?>
<?php // bootstrapMaterial(); // Bootsrap - Material ?>
<?php // ripples(); // Complemento de Bootsrap - Material ?>
<?php flexslider(); // Flexslider ?>
<?php themejs(); // Los scripts personalizados del tema ?>


<?php wp_footer(); ?>




</body>
</html>