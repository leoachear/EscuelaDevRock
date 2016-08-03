<?php
/**
 * Template Name: HomePage
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

<?php the_post(); ?>

	<div class="container home">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-escuela-dev-rock.png" alt="" class="logo">
        <br> <br>
					<?php the_title('<h1>','</h1>'); ?>
					<h4 class="text-muted">
						"El expediente académico no sirve para nada" <br> 

					</h4>
<h6 style="
    font-size: 11px;
    color: #999;
">Laszlo Bock, vicepresidente de Recursos Humanos de Google.</h6>					<div class="col-md-2"></div>
					<div class="col-md-8">
            <br>
						<p><?php the_content(); ?></p>
					</div>
					<div class="col-md-2"></div>
<div class="tarjetas">
	<div class="col-md-3">
	<div class="card">
  <i class="material-icons">&#xE192;</i>
  <div class="card-block">
    <h4 class="card-title">Cursos rápidos</h4>
    <p class="card-text">Jornadas de capacitación, intensivas y dedicadas a tecnologías particulares. Desde actualizaciones hasta aprender una tecnología en un día. Ideales para Developers más avanzados</p>
  </div>
</div>
</div>
<div class="col-md-3">
	<div class="card">
<i class="material-icons">&#xE866;</i>
  <div class="card-block">
    <h4 class="card-title">Certificados</h4>
    <p class="card-text"> Nuestros certificados representan que el alumno aprendió y comprendió todo el contenido del curso. Estas certificaciones avaladas por el Google Developer Group Río de la Plata.</p>
  </div>
</div>
</div>
<div class="col-md-3">
	<div class="card">
<i class="material-icons">&#xE87A;</i>
  <div class="card-block">
    <h4 class="card-title">Salida laboral</h4>
    <p class="card-text">Sumale skills al CV aprendiendo las tecnologías más buscadas del mercado digital. Nuestros mejores alumnos obtendrán recomendaciones para postulaciones en empresas.</p>
  </div>
</div>
</div>
<div class="col-md-3"><div class="card">
<i class="material-icons">&#xE7FB;</i>
  <div class="card-block">
    <h4 class="card-title">Modalidad</h4>
    <p class="card-text">Contamos con dos modalidades: Presencial en nuestra escuela u Online desde la comodidad de cualquier lugar. Pudiendo optar entre ambas para todos los cursos.</p>
  </div>
</div></div>
</div>

					
				
			</div>
		</div>
	</div>
<?php get_footer(); ?>
