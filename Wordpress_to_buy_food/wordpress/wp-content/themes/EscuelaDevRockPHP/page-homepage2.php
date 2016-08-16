<?php
/**
 * Template Name: HomePage2
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
						<?php echo types_render_field('subtitulo-home'); ?> <br> 

					</h4>
<h6 style="
    font-size: 11px;
    color: #999;
"><?php echo types_render_field('epigrafe-home'); ?></h6>	


				<div class="col-md-2"></div>
					<div class="col-md-8">
            <br>
						<p><?php the_content(); ?></p>
					</div>
					<div class="col-md-2"></div>
<div class="tarjetas">
	<div class="col-md-3">
	<div class="card">
  <i class="material-icons"><?php echo types_render_field('card-icon-01'); ?></i>
  <div class="card-block">
    <h4 class="card-title"><?php echo types_render_field('card-title-01'); ?></h4>
    <p class="card-text"><?php echo types_render_field('card-content-01'); ?></p>
  </div>
</div>
</div>
<div class="col-md-3">
	<div class="card">
<i class="material-icons"><?php echo types_render_field('card-icon-02'); ?></i>
  <div class="card-block">
    <h4 class="card-title"><?php echo types_render_field('card-title-02'); ?></h4>
    <p class="card-text"> <?php echo types_render_field('card-content-02'); ?></p>
  </div>
</div>
</div>
<div class="col-md-3">
	<div class="card">
<i class="material-icons"><?php echo types_render_field('card-icon-03'); ?></i>
  <div class="card-block">
    <h4 class="card-title"><?php echo types_render_field('card-title-03'); ?></h4>
    <p class="card-text"><?php echo types_render_field('card-content-03'); ?></p>
  </div>
</div>
</div>
<div class="col-md-3"><div class="card">
<i class="material-icons"><?php echo types_render_field('card-icon-04'); ?></i>
  <div class="card-block">
    <h4 class="card-title"><?php echo types_render_field('card-title-04'); ?></h4>
    <p class="card-text"><?php echo types_render_field('card-content-04'); ?></p>
  </div>
</div></div>
</div>

					
				
			</div>
		</div>
	</div>

<section class="cursos">
    
</section>

<section>
   <div class="carousel slide" id="carousel-example-generic" data-ride="carousel"> 
       <ol class="carousel-indicators"> 
           <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li> 
           <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li> 
           <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li> 
       </ol> 
       <div class="carousel-inner" role="listbox"> 
           <!--<div class="item"> 
               <img src="http://placehold.it/1450x450">
           </div> 
           <div class="item active"> 
               <img src="http://placehold.it/1450x450">
           </div> 
           <div class="item"> 
               <img src="http://placehold.it/1450x450">
           </div> -->
            
            <?php $value = types_render_field("home-fotingui", array("raw"=>"true","separator"=>";"));
                $imagenes = explode(";", $value);

                $active = 0;
                foreach ($imagenes as $img)
                {
                    if($active)
                    {
                        if($imagenes) echo '<div class="item"><img src="'.$img.'"></div>';
                    }
                    else
                    {
                        $active = 1;
                        if($imagenes) echo '<div class="item active"><img src="'.$img.'"></div>';
                    }
                }

            ?>


       </div> 
   <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev"> 
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
       <span class="sr-only">Previous</span> 
   </a> 
   <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next"> 
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
       <span class="sr-only">Next</span> 
   </a> 
   </div>

</section>

<?php 
    $args = array('post_type' => 'taller','posrts_per_page'=>100,'order' => 'ASC');
    $loop = new WP_Query ($args);

    while ( $loop->have_posts() ) : $loop->the_post();
?>
    
    <section class="cursos">
        <div class="bg-swift" id='swift'>
            <div class="container">
                <div class="row espacios">
                    <div class="col-md-2">
                        <a class='muestra' href="#swift"><img alt="" class="logo" src=
                        "<?php echo get_template_directory_uri(); ?>/img/swift.png"></a>
                    </div>
                    <div class="col-md-10">
                        <h1 class="display-3">Swift Ninja</h1>
                        <p class="lead">Para devs interesados
                        en aprender a desarrollar <br> aplicaciones en iOS tvOS.
                        watchOS.</p><a class="btn btn-primary muestra" type=
                        "submit" href='#swift'>Quiero + info</a>
                    </div>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class="shows espacios">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <div class="media">
                        <a class="media-left" href="#"><img alt="@f0go" class=
                        "media-object" src=
                        "https://pbs.twimg.com/profile_images/705130099058851840/XTwiZkV6.jpg"></a>
                        <div class="media-body">
                            <h4 class="media-heading">Profesor: @f0go</h4>
                            <p>F0go es un amante del desarrollo, que se especializó
                            en iOS desde sus inicios, abarcando grandes e
                            importantes proyectos. Si utilizaste iOS en algún
                            momento, seguramente usaste una aplicación que realizó.
                            <a href="http://www.dev-f0go.com/p/projects.html">Aqui algunos de sus proyectos</a></p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-left" href="#"><i class=
                        "material-icons">&#xE55F;</i></a>
                        <div class="media-body">
                            <h4 class="media-heading">Lugar</h4>
                            <p><a href=
                            "https://www.google.com.ar/maps/place/Escuela+Dev+Rock/@-34.5945006,-58.4039817,17z/data=!3m1!4b1!4m2!3m1!1s0x95bcca909524474b:0x17ec12e7da43dfad?hl=es-419">
                            <p>Av. Santa Fe 2459, CABA<br>
                            Ciudad Autónoma de Buenos Aires<br>
                            </p></a></p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-left" href="#"><i class=
                        "material-icons">&#xE858;</i></a>
                        <div class="media-body">
                            <h4 class="media-heading">Duración</h4>
                            <p><strong>Horas:</strong> 30hs.<br>
                            <strong>Inicio:</strong> Mayo 2016<br>
                            <strong>Fin:</strong> Junio 2016<br>
                            <strong>Día de cursada:</strong> Jueves, 19 a 22hs. <br>
                            <?php $valueHorarios = types_render_field("horario-de-cursada-del-taller", array("raw"=>"true","separator"=>";"));

                            $horarios = explode(";", $valueHorarios);

                            foreach ($horarios as $hora)
                            {
                                if ($horarios) echo $hora;
                            }
                            ?>
                        </p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-left" href="#"><i class=
                        "material-icons">&#xE925;</i></a>
                        <div class="media-body">
                            <h4 class="media-heading">Preguntas Frecuentes</h4>
                            <p><strong>¿Modalidad?</strong><br>
                            Presencial<br>
                            <strong>¿Requisitos?</strong><br>
                            Traer computadora<br>
                            <strong>¿Requiere conocimientos previos?</strong><br>
                            No son necesarios, pero lo ideal es tener una noción de
                            programación orientada a objetos.<br>
                            <strong>¿A quién se orienta este curso?</strong><br>
                            A internautas o desarrolladores interesados en aprender
                            a desarrollar aplicaciones en iOS tvOS watchOS.<br>
                            <strong>¿Qué tipo de diploma de certificación
                            entregan?</strong><br>
                            El certificado demuestra que has aprendido y
                            comprendido exitosamente los temas vistos. Avalado por
                            managers de Google Developer Group Río de la Plata.<br>
                            <strong>Para los que vivimos lejos, ¿se puede hacer
                            online?</strong><br>
                            Sí, podes cursarlo online en vivo en el mismo horario
                            que los alumnos presenciales, te conectas con el curso
                            y lo tomas desde tu casa.<br>
                            <br>
                            <a class="btn btn-primary-outline online"  data-nombre="Swift Ninja">Consultar Precios Modalidad Online</a></p>
                        </div>

                    </div>
                    <div class="media">
                        <a class="media-left" href="#"><i class=
                        "material-icons">&#xE8CC;</i></a>
                        <div class="media-body">
                            <h4 class="media-heading">Valor del curso</h4>
                            <h4 class="media-heading">$4.000</h4>
                            <p><strong>Efectivo:</strong> 10% de descuento<br>
                            <strong>Tarjetas:</strong> 3/6 cuotas sin interes con
                            MP.<br></p>
                            <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=133819650-cb6f38b0-9044-42db-8361-f751e1ed6de7" name="MP-payButton" class='btn btn-primary-outline'>Pagar con Mercado Pago</a>
                            <span class="MP-aron"></span>

                            <a class="btn btn-primary-outline prog"  data-nombre="Swift Ninja">Pedir programa y horarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <?php endwhile;?>

<?php get_footer(); ?>
