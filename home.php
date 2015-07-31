<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>
	
	<!-- Primera sección del home -->
	<section class="u-contenedor">
		
		<!-- Cover Slider -->
		<?php coverSlider(); ?>
		
		<!-- cover-banner-slider -->
		<?php bannerSlider(); ?>

	</section>
	
	<!-- Segunda sección del home -->
	<section class="u-contenedor">
		
		<!-- Rotatorio de videos -->
		<?php videoSlider(); ?>

		<!-- Monero -->
		<?php monero(); ?>

		<!-- Newsletter -->
		<?php newsletter(); ?>
		<!-- Banner junto al monero  -->
		<?php bannerMonero(); ?>

	</section>
	
	<!-- Tercera sección del home -->
	<section class="u-contenedorCompleto">
		
		<!-- Rotatorio de videos -->
		<?php colDestacados(); ?>

	</section>


	<!-- Cuarta sección del home -->
	<section class="u-contenedor">
		
		<section class="Noticias">
			
			<!-- cover-banner-noticias1 -->
			<?php bannerNoticias1(); ?>
			<!-- bloque noticias 1-->
			<?php bloqueNoticias1(); ?>
			<!-- cover-banner-noticias2 -->
			<?php bannerNoticias2(); ?>
			<!-- bloque noticias 2-->
			<?php bloqueNoticias2(); ?>
			<!-- cover-banner-noticias3 -->
			<?php bannerNoticias3(); ?>
			<!-- bloque noticias 3-->
			<?php bloqueNoticias3(); ?>
			<!-- cover-banner-noticias4 -->
			<?php bannerNoticias4(); ?>
			<!-- bloque noticias 4-->
			<?php bloqueNoticias4(); ?>
			<!-- bloque noticias 5-->
			<?php bloqueNoticias5(); ?>
			<!-- cover-banner-noticias5 -->
			<?php bannerNoticias5(); ?>
			<!-- bloque noticias 6-->
			<?php bloqueNoticias6(); ?>
			<!-- bloque noticias 7-->
			<?php bloqueNoticias7(); ?>
			<!-- cover-banner-noticias6 -->
			
		</section>

		<section class="Sidebar">
			
			<!-- Columnas de opinion -->
			<?php columnasOpinion(); ?>			
			<!-- banner sidebar1  -->
			<?php bannerSidebar1(); ?>
			<!-- Columna Hoy -->
			<?php columnaHoy(); ?>
			<!-- banner sidebar 2 -->
			<?php bannerSidebar2(); ?>
			<!-- Análisis -->
			<?php analisis(); ?>
			<!-- banner sidebar 3 -->
			<?php bannerSidebar3(); ?>
			<!-- banner sidebar 4 -->
			<?php bannerSidebar4(); ?>
			<!-- banner sidebar 5 -->
			<?php bannerSidebar5(); ?>
		</section>


	</section>






<?php get_footer(); ?>