<?php

/*
* Template Name: gran-contratista
*
* @package WordPress
*/

get_header('mhonduras');
?>

<section class="gran-contratista h_featured">
    <div class="img-featured-gc mb-5"></div>
    <div class="container">

        <div class="row">

            <div class="col-md-1">
            </div>
            <div class="col-md-9 mb-3">
                <h1 class="animate__animated animate__fadeInUp animate__delay-0s"><span>El gran contratista</span><br>
                    de la Alcaldía de Managua</h1>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</section>

<section class="covid contenido mt-2 text-justify">
    <div class="container mg-5">
        <div class="row pt-3">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="resumen">
                    <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>

                    <p><i>Santiago Chávez Sequeira, un ingeniero desconocido en el sector de la construcción en
                            Nicaragua, se convirtió en uno de los grandes contratistas de obras de la capital, con
                            proyectos que superan los 16 millones de dólares. ¿El secreto? Fidel Moreno, todopoderoso
                            secretario de la Alcaldía de Managua, le entregó decenas de proyectos en la modalidad de
                            Contrataciones Simplificadas, un proceso contemplado para situaciones de emergencias, pero
                            que ha sido utilizado de forma irregular para beneficiar a este y otros empresarios con un
                            festín de proyectos millonarios. Un entramado dirigido por Moreno y sustentando en un vacío
                            legal para maniobrar con total discrecionalidad.
                        </i></p>
                    <p><i>
                            Chávez Sequeira ha construido museos, parques, tiangues, réplicas de estaciones de trenes
                            para exhibición, y una de sus empresas, es la que está encargada de construir las "calles
                            para el pueblo", un programa impulsado por el Gobierno Ortega Murillo.
                        </i></p>
                    <p><i>
                            Navegue en los capítulos de esta investigación para descubrir la trama de corrupción y la
                            historia de enriquecimiento del gran contratista de la Alcaldía de Managua.
                        </i></p>
                </div>
                <div id="" class="autor media my-5">
                    <img src="https://www.divergentes.com/wp-content/uploads/2020/06/cropped-ICONO.png"
                         class="align-self-start mr-3 rounded-circle" alt="PruloArts">
                    <div class="media-body pt-3">
                        <h5 class="mt-0">Por Divergentes</h5>
                        <a href="https://twitter.com/DivergentesCA" title="@DivergentesCA" target="_blank" class="covid-tc1">@DivergentesCA</a>
                    </div>
                </div>

            </div>
        </div>
        <?php
        get_template_part('page-templates/gran-contratista/menu', get_post_type());
        ?>
    </div>

    <div class="container creditos my-5">
        <div class="row">
            <div class="col">
                <h1>CRÉDITOS</h1>
                <p>Investigación: Divergentes
                    <br> Edición de texto: Carlos Salinas Maldonado, Wilfredo Miranda
                    <br> Fotografía: Carlos Herrera
                    <br> Diseño UI/UX: Ricardo Arce
            </div>
        </div>
    </div>
</section>

<?php get_footer('mhonduras'); ?>

<script>
	$( window ).on( 'scroll', function() {
		if ($( window ).scrollTop() > 200) {
			$( 'header' ).addClass( 'bg-header' );
		} else {
			//remove the background property so it comes transparent again (defined in your css)
			$( 'header' ).removeClass( 'bg-header' );
		}
	} );
</script>
