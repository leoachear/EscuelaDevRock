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
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-escuela-dev-rock.png" alt="" class="logo">
        <br> <br>
					<h1>Aprendé los nuevos oficios</h1>
					<h4 class="text-muted">
						"El expediente académico no sirve para nada" <br> 

					</h4>
<h6 style="
    font-size: 11px;
    color: #999;
">Laszlo Bock, vicepresidente de Recursos Humanos de Google.</h6>					<div class="col-md-2"></div>
					<div class="col-md-8">
            <br>
						<p>Esta escuela está pensada para aquellas personas que quieran aprender a desarrollar y diseñar apps, cubriendo todo aquello que no aprenden en la universidad. Como dijo el jefe de RRHH de Google: "El expediente académico no sirve para nada". Aprendé las tecnologías más buscadas e insertate en el mercado laboral.</p>
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
                        <strong>Día de cursada:</strong> Jueves, 19 a 22hs.</p>
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


<section class="cursos">
    <div class="bg-success" id='android'>
        <div class="container">
            <div class="row espacios">
                <div class="col-md-2">
                    <a class='muestra' href="#android"><img alt="" class="logo" src=
                    "<?php echo get_template_directory_uri(); ?>/img/android.png"></a>
                </div>
                <div class="col-md-10">
                    <h1 class="display-3">Android Sith Academy</h1>
                    <p class="lead">Comenzá a desarrollar Android sin conocimientos previos. <br>
                      Si tu perfil es JAVA y queres migrar este es tu curso. </p><a href='#android' class="btn btn-primary muestra" type=
                    "submit">Quiero + info</a>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class="shows espacios">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="media">
                    <a class="media-left" href="#"><img alt="Alejandra Stamato" class=
                    "media-object" src="<?php echo get_template_directory_uri(); ?>/img/ale.png" height="350" width="350"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Profesora: Alejandra Stamato</h4>
                        <p>Android Developer en Despegar.com. Ex full Stack Developer. Ingeniera en Sistemas (Facultad de Ingeniería de la UBA). Profesora del curso de Android for Beginners.</p>
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
                        <strong>Día de cursada:</strong> Martes, 19 a 22hs.</p>
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
                        Profesionales o estudiantes con conocimientos básicos de programación que deseen aprender a desarrollar aplicaciones móviles.<br>
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
                        <a class="btn btn-primary-outline online"  data-nombre="Android Sith Academy">Consultar Precios Modalidad Online</a></p>
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
                     <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=133819650-e35358b4-b528-44f1-972e-322bbe2b5a57" name="MP-payButton" class='btn btn-primary-outline'>Pagar con Mercado Pago</a>
                        <span class="MP-aron"></span>

                        <a class="btn btn-primary-outline prog"  data-nombre="Android Sith Academy">Pedir programa y horarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




	

<section class="cursos">
    <div class="bg-unity" id='unity'>
        <div class="container">
            <div class="row espacios">
                <div class="col-md-2">
                    <a class='muestra' href="#unity"><img alt="" class="logo" src=
                    "<?php echo get_template_directory_uri(); ?>/img/unity.png"></a>
                </div>
                <div class="col-md-10">
                    <h1 class="display-3">Sith Game Dev</h1>
                    <p class="lead">A internautas o desarrolladores interesados
                     en aprender a programar sus propios juegos.
                    </p><a href='#unity' class="btn btn-primary muestra" type=
                    "submit">Quiero + info</a>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class="shows espacios">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="media">
                    <a class="media-left" href="#"><img alt="Guillermo Ferrari" class=
                    "media-object" src=
                    "<?php echo get_template_directory_uri(); ?>/img/Guillermo-Ferrari.jpg"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Profesor: Guillermo Ferrari</h4>
                        <p>Amante de los videojuegos, toda su vida trabajó en informática y hace hace 2 años exploto lo aprendido de manera independiente, unos de sus juegos es Cthulhu Virtual Pet, seleccionado mejor juego de Latinoamérica de la comunidad DUVAL 2015 y actualmente está trabajando en su siguiente proyecto The Cats of Ulthar.</p>
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
                        <strong>Día de cursada:</strong> Lunes, Miércoles y Viernes, 19 a 21hs.</p>
                    </div>
                </div>
                <div class="media">
                    <a class="media-left" href="#"><i class=
                    "material-icons">&#xE925;</i></a>
                    <div class="media-body">
                        <h4 class="media-heading">Preguntas Frecuentes</h4>
                        <p><strong>¿Modalidad?</strong><br>
                        Online<br>
                        <strong>¿Requisitos?</strong><br>
                        Tener computadora<br>
                        <strong>¿Requiere conocimientos previos?</strong><br>
                        No son necesarios, pero lo ideal es tener manejo básico de programas de diseño.<br>
                        <strong>¿A quién se orienta este curso?</strong><br>
                       Personas creativas, diseñadores, desarrolladores que busquen un entorno en donde puedan desarrollar y alcanzar el entendimiento de muchas de las áreas que involucra el desarrollo de un videojuego. <br>
                        <strong>¿Qué tipo de diploma de certificación
                        entregan?</strong><br>
                        El certificado demuestra que has aprendido y
                        comprendido exitosamente los temas vistos. Avalado por
                        managers de Google Developer Group Río de la Plata.<br>
                        <strong> Cómo es la modalidad Online?</strong><br>
                        La cursada online  es en vivo y en directo en el mismo horario
                        para todos los alumnos , te conectas con el curso
                        y lo tomas desde tu casa.<br>
                        <br>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <a class="media-left" href="#"><i class=
                    "material-icons">&#xE8CC;</i></a>
                    <div class="media-body">
                        <h4 class="media-heading">Valor del curso</h4>
                        <h4 class="media-heading">$1.700</h4>
                        <p><strong>Efectivo:</strong> 10% de descuento<br>
                        <strong>Tarjetas:</strong> 3/6 cuotas sin interes con
                        MP.<br></p>
<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=133819650-013672d7-ab84-426a-9057-968287b8880d" name="MP-payButton" class='btn btn-primary-outline'>Pagar con Mercado Pago</a>
                        <span class="MP-aron"></span>
                         <a class="btn btn-primary-outline prog"  data-nombre="Sith Game Dev">Pedir programa y horarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cursos">
    <div class="bg-full" id='full'>
        <div class="container">
            <div class="row espacios">
                <div class="col-md-2">
                    <a class='muestra' href="#full"><img alt="" class="logo" src=
                    "<?php echo get_template_directory_uri(); ?>/img/full.png"></a>
                </div>
                <div class="col-md-10">
                    <h1 class="display-3">FullStack</h1>
                    <p class="lead">A curiosos del desarrollo que quieran aprender a manejar distintas tecnologías.</p>
                    <a href='#full' class="btn btn-primary muestra" type=
                    "submit">Quiero + info</a>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class="shows espacios">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="media">
                    <a class="media-left" href="#"><img alt="Laura Morinigo" class=
                    "media-object" src="<?php echo get_template_directory_uri(); ?>/img/laura.png"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Profesora: Laura Morinigo</h4>
                        <p>Developer en AFIP, profesora de FullStack y MEAN JS, manager del GDG Río de la Plata y Speaker de WomanTechMaker</p>
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
                        <p><strong>Horas:</strong> 60hs.<br>
                        <strong>Inicio:</strong> Marzo 2016<br>
                        <strong>Fin:</strong> Junio 2016<br>
                        <strong>Día de cursada:</strong> Viernes, 19 a 23hs.</p>
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
                        No son necesarios, pero lo ideal es tener una noción 
                        básica de HTML y CSS .<br>
                        <strong>¿A quién se orienta este curso?</strong><br>
                        A entusiastas y curiosos del desarrollo que quieren aprender a manejar una gran variedad de tecnologías.<br>
                        <strong>¿Qué tipo de diploma de certificación
                        entregan?</strong><br>
                        El certificado demuestra que has aprendido y
                        comprendido exitosamente los temas vistos. Avalado por
                        managers de Google Developer Group RIo de la Plata.<br>
                        <strong>Para los que vivimos lejos, ¿se puede hacer
                        online?</strong><br>
                        Sí, podes cursarlo online en vivo en el mismo horario
                        que los alumnos presenciales, te conectas con el curso
                        y lo tomas desde tu casa.<br>
                        <br>
                        <a class="btn btn-primary-outline online"  data-nombre="FullStack">Consultar Precios Modalidad Online</a></p>
                    </div>
                </div>
                <div class="media">
                    <a class="media-left" href="#"><i class=
                    "material-icons">&#xE8CC;</i></a>
                    <div class="media-body">
                        <h4 class="media-heading">Valor del curso</h4>
                        <h4 class="media-heading">$7.500</h4>
                        <p><strong>Efectivo:</strong> 10% de descuento<br>
                        <strong>Tarjetas:</strong> 3/6 cuotas sin interes con
                        MP.<br></p>
                       <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=133819650-d2478ba5-4c7e-4ffc-a164-b26518ac479d" name="MP-payButton" class='btn btn-primary-outline'>Pagar con Mercado Pago</a>
                        <span class="MP-aron"></span>

                       <a class="btn btn-primary-outline prog"  data-nombre="FullStack">Pedir programa y horarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="cursos">
    <div class="bg-ux" id='ux'>
        <div class="container">
            <div class="row espacios">
                <div class="col-md-2">
                    <a class='muestra' href="#ux"><img alt="" class="logo" src=
                    "<?php echo get_template_directory_uri(); ?>/img/ux.png"></a>
                </div>
                <div class="col-md-10">
                    <h1 class="display-3">Diseño UX</h1>
                    <p class="lead">Diseñadores, desarrolladores, creadores, etc. Cualquier persona involucrada en la creación de productos o servicios orientados a que los utilice un ser humano.</p><a href='#ux' class="btn btn-primary muestra" type=
                    "submit">Quiero + info</a>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class="shows espacios">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="media">
                    <a class="media-left" href="#"><img alt="@jonatanariste" class=
                    "media-object" src=
                    "https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/11102879_10206484458060271_7036897231292973711_n.jpg?oh=52ccc90e66561aa7b159370ca303f5da&oe=57266B43&__gda__=1465431031_e2bf9a507d961ab5a18af53ee48fc216"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Profesor: @jonatanariste</h4>
                        <p>Jonatan es un developer especialista en Experiencia de Usuario, tanto digital como en la vida real. Speaker y Manager del GDG Río de la Plata</p>
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
                        <strong>Día de cursada:</strong> Miércoles, 19 a 22hs.</p>
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
                        No son necesarios.<br>
                        <strong>¿A quién se orienta este curso?</strong><br>
                       Diseñadores, desarrolladores, creadores, etc. Cualquier persona involucrada en la creación de productos o servicios orientados a que los utilice un ser humano. <br>
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
                        <a class="btn btn-primary-outline online"  data-nombre="Diseño UX">Consultar Precios Modalidad Online</a></p>
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
                      <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=133819650-6d4e5aa7-d29d-43c1-9b9a-91f339bac18c" name="MP-payButton" class='btn btn-primary-outline'>Pagar con Mercado Pago</a>
                        <span class="MP-aron"></span>
                        <a class="btn btn-primary-outline prog"  data-nombre="Diseño UX">Pedir programa y horarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cursos">
    <div class="bg-mean" id='mean'>
        <div class="container">
            <div class="row espacios">
                <div class="col-md-2">
                    <a class='muestra' href="#mean"><img alt="" class="logo" src=
                    "<?php echo get_template_directory_uri(); ?>/img/mean.png"></a>
                </div>
                <div class="col-md-10">
                    <h1 class="display-3">MEAN Jedi Academy</h1>
                    <h5>Mongo / Express / Angular / NodeJs</h5>

                    <p class="lead"> Intensivo de tecnologías Javascript.</p><a href='#mean' class="btn btn-primary muestra" type=
                    "submit">Quiero + info</a>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class="shows espacios">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="media">
                    <a class="media-left" href="#"><img alt="Laura Morinigo" class=
                    "media-object" src=
                    "<?php echo get_template_directory_uri(); ?>/img/laura.png"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Profesora: Laura Morinigo </h4>
                        <p>Developer en AFIP, profesora de FullStack y MEAN, manager del GDG Río de la Plata y speaker de WomanTechMaker</p>
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
                        <p><strong>Horas:</strong> 24hs.<br>
                        <strong>Inicio:</strong> Marzo 2016<br>
                        <strong>Fin:</strong> Abril 2016<br>
                        <strong>Día de cursada:</strong> Sábados, 11 a 17hs.</p>
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
                        No son necesarios. Es preferente html, css, y algún conocimiento de teoría de objetos.<br>
                        <strong>¿A quién se orienta este curso?</strong><br>
                        A personas interesadas en aprender a manejar una amplia variedad de tecnologías Javascript en modo intensivo.<br>
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
                        <a class="btn btn-primary-outline online"  data-nombre="MEAN Jedi Academy">Consultar Precios Modalidad Online</a></p>
                    </div>
                </div>
                <div class="media">
                    <a class="media-left" href="#"><i class=
                    "material-icons">&#xE8CC;</i></a>
                    <div class="media-body">
                        <h4 class="media-heading">Valor del curso</h4>
                        <h4 class="media-heading">$4.000</h4>
                        <p><strong>Efectivo:</strong> 10% de descuento<br>
                        <strong>Tarjeras:</strong> 3/6 cuotas sin interes con
                        MP.<br></p>
                        <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=133819650-7531fcb1-9975-4204-a094-e9de717e2ac3" name="MP-payButton" class='btn btn-primary-outline'>Pagar con Mercado Pago</a>
                        <span class="MP-aron"></span>
                        <a class="btn btn-primary-outline prog"  data-nombre="MEAN Jedi Academy">Pedir programa y horarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cursos">
    <div class="bg-frontend" id='frontend'>
        <div class="container">
            <div class="row espacios">
                <div class="col-md-2">
                    <a class='muestra' href="#frontend"><img alt="" class="logo" src=
                    "<?php echo get_template_directory_uri(); ?>/img/frontend.png"></a>
                </div>
                <div class="col-md-10">
                    <h1 class="display-3">Frontend Magic</h1>
                    <p class="lead">Para aquellas personas que quieran convertise en la pieza más buscada del desarrollo web. </p><a href='#frontend' class="btn btn-primary muestra" type=
                    "submit">Quiero + info</a>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class="shows espacios">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="media">
                    <a class="media-left" href="#"><img alt="@antirockstars" class=
                    "media-object" src=
                    "https://pbs.twimg.com/profile_images/695348906306072577/kzrU2vRG.jpg"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Profesor: @antirockstars</h4>
                        <p>Antirockstars es un desarrollador Frontend del equipo Movistar, Speaker y Manager del GDG Río de la Plata. Tutor de Programá Tu Futuro
                        </p>
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
                        <strong>Día de cursada:</strong> Lunes, 19 a 22hs.</p>
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
                        No son necesarios.<br>
                        <strong>¿A quién se orienta este curso?</strong><br>
                        A todas aquellas personas que busquen aprender el oficio más buscado en el mercado del desarrollo web.<br>
                        <strong>¿Qué tipo de diploma de certificación
                        entregan?</strong><br>
                        El certificado demuestra que has aprendido y
                        comprendido exitosamente los temas vistos. Abalado por
                        managers de Google Developer Group Río de la Plata.<br>
                        <strong>Para los que vivimos lejos, ¿se puede hacer
                        online?</strong><br>
                        Sí, podes cursarlo online en vivo en el mismo horario
                        que los alumnos presenciales, te conectas con el curso
                        y lo tomas desde tu casa.<br>
                        <br>
                        <a class="btn btn-primary-outline online"  data-nombre="Frontend Magic">Consultar Precios Online</a></p>
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

                        <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=133819650-cf60dcd7-00d1-4895-a89f-6a4c90d8e1a4" name="MP-payButton" class='btn btn-primary-outline'>Pagar con Mercado Pago</a>
                        <span class="MP-aron"></span>
                        <a class="btn btn-primary-outline prog"  data-nombre="Frontend Magic">Pedir programa y horarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cursos">
    <div class="bg-diseno" id='diseno'>
        <div class="container">
            <div class="row espacios">
                <div class="col-md-2">
                    <a class='muestra' href="#diseno"><img alt="" class="logo" src=
                    "<?php echo get_template_directory_uri(); ?>/img/diseno.png"></a>
                </div>
                <div class="col-md-10">
                    <h1 class="display-3">Diseño de interfaces Illustrator/Photoshop</h1>
                    <p class="lead">A quienes quieran comenzar a trasladar a interfaces sus ideas.</p><a href='#diseno' class="btn btn-primary muestra" type=
                    "submit">Quiero + info</a>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class="shows espacios">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="media">
                    <a class="media-left" href="#"><img alt="@feliz.a.color" class=
                    "media-object" src=
                    "https://pbs.twimg.com/profile_images/621425497956855808/z0JB0hN7.jpg"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Profesora: @feliz.a.color</h4>
                        <p>Ceci Escamilla Gigirey es Diseñadora Gráfica. Fundadora de Feliz.a.Color y Talleres a Color </p>
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
                        <strong>Día de cursada:</strong> A Definir, 19 a 22hs.</p>
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
                        Traer computadora con mouse<br>
                        <strong>¿Requiere conocimientos previos?</strong><br>
                        No son necesarios.<br>
                        <strong>¿A quién se orienta este curso?</strong><br>
                        A personas que quieran comenzar a trasladar sus ideas a interfaces.<br>
                        <strong>¿Qué tipo de diploma de certificación
                        entregan?</strong><br>
                        El certificado demuestra que has aprendido y
                        comprendido exitosamente los temas vistos. Avalado por
                        managers de Google Developer Group Río de la Plata.<br>
                        <strong>¿Para los que vivimos lejos, se puede hacer
                        online?</strong><br>
                        Sí, podes cursarlo online en vivo en el mismo horario
                        que los alumnos presenciales, te conectas con el curso
                        y lo tomas desde tu casa.<br>
                        <br>
                        <a class="btn btn-primary-outline online"  data-nombre="Diseño de interfaces">Consultar Precios Online</a></p>
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

                        <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=133819650-600ac625-38df-407a-bb08-9f61acc3095b" name="MP-payButton" class='btn btn-primary-outline'>Pagar con Mercado Pago</a>
                        <span class="MP-aron"></span>
                        <a class="btn btn-primary-outline prog"  data-nombre="Diseño de interfaces">Pedir programa y horarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
