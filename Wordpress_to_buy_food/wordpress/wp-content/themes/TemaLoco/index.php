<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="container home">
			<div class="row  mdl-color--white mdl-shadow--2dp footer32">
				<div class="col-md-2">
					<img src="http://escueladevrock.com/wp-content/themes/twentyfifteen--/img/logo-escuela-dev-rock.png" alt="" class="logo img-responsive">
				</div>
				<div class="col-md-10">
					<div class="col-md-10">
						<h1>Aprendé los nuevos oficios</h1>
						<h4 class="text-muted">
							"El expediente académico no sirve para nada" 

						</h4>
	<h6 style="font-size: 15px; color: #999;">
		Laszlo Bock, vicepresidente de Recursos Humanos de Google.</h6> 	
		
							<p>Esta escuela está pensada para aquellas personas que quieran aprender a desarrollar y diseñar apps, cubriendo todo aquello que no aprenden en la universidad. Como dijo el jefe de RRHH de Google: "El expediente académico no sirve para nada". Aprendé las tecnologías más buscadas e insertate en el mercado laboral.</p>
						</div>

	<div class="tarjetas">
		<div class="col-md-3">
		<div class="card">
	  <i class="material-icons"></i>
	  <div class="card-block">
	    <h4 class="card-title">Cursos rápidos</h4>
	    <p class="card-text">Jornadas de capacitación, intensivas y dedicadas a tecnologías particulares. Desde actualizaciones hasta aprender una tecnología en un día. Ideales para Developers más avanzados</p>
	  </div>
	</div>
	</div>
	<div class="col-md-3">
		<div class="card">
	<i class="material-icons"></i>
	  <div class="card-block">
	    <h4 class="card-title">Certificados</h4>
	    <p class="card-text"> Nuestros certificados representan que el alumno aprendió y comprendió todo el contenido del curso. Estas certificaciones avaladas por el Google Developer Group Río de la Plata.</p>
	  </div>
	</div>
	</div>
	<div class="col-md-3">
		<div class="card">
	<i class="material-icons"></i>
	  <div class="card-block">
	    <h4 class="card-title">Salida laboral</h4>
	    <p class="card-text">Sumale skills al CV aprendiendo las tecnologías más buscadas del mercado digital. Nuestros mejores alumnos obtendrán recomendaciones para postulaciones en empresas.</p>
	  </div>
	</div>
	</div>
	<div class="col-md-3"><div class="card">
	<i class="material-icons"></i>
	  <div class="card-block">
	    <h4 class="card-title">Modalidad</h4>
	    <p class="card-text">Contamos con dos modalidades: Presencial en nuestra escuela u Online desde la comodidad de cualquier lugar. Pudiendo optar entre ambas para todos los cursos, jajajaja y te jodes.</p>
	  </div>
	</div></div>
	</div>

						
					
				</div>
			</div>
		</div>

<?php get_footer(); ?>
