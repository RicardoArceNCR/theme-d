<?php

/*
* Template Name: gran-contratista-cerezapastel
*
* @package WordPress
*/

get_header('mhonduras');
?>

<section class="gran-contratista h_featured">
    <div class="img-featured-gc-cerezaft mb-5"></div>
    <div class="container">

        <div class="row">

            <div class="col-md-1">
            </div>
            <div class="col-md-9 mb-3">
                <h1 class="animate__animated animate__fadeInUp animate__delay-0s"><span>La cereza</span> del pastel</h1>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</section>

<section class="covid contenido mt-2 text-justify">
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-1"> </div>
            <div class="col-md-10">
                <p>El 21 de diciembre de 2018 Fidel Moreno, secretario general de la Alcaldía de Managua y hombre de confianza del presidente Daniel Ortega y sobre todo de su esposa, la vicepresidenta Rosario Murillo, inauguró la última obra del parque Luis Alfonso Velásquez Flores, uno de los proyectos emblemáticos del Gobierno sandinista en la capital. Se trató de un lago artificial y una fuente luminosa que Moreno bautizó “como la cereza del pastel”. La construcción estuvo a cargo de la empresa “Chávez y Chávez Construcciones Sociedad Anónima”, una de las selectas compañías que en los últimos años ha sido beneficiada por la comuna capitalina con diversos proyectos a través de procesos irregulares, específicamente bajo la aplicación ilegal de la modalidad de contrataciones simplificadas.</p>
                <p>“Chávez y Chávez Construcciones Sociedad Anónima” es propiedad de Arturo Santiago Chávez Sequeira, el empresario ha sido de los más favorecidos por la alcaldía con las contrataciones simplificadas, un método contemplado en la Ley de Contrataciones Administrativas Municipales (801), pero cuyo mecanismo establece que debe utilizarse únicamente en casos de emergencia, calamidad y otras causales debidamente justificadas.</p>
                <p>Sin embargo, ninguna de las obras ejecutadas por este consorcio fueron erigidas en contextos de desastre ni urgencia alguna. En tres años, entre 2016 y 2018, la constructora ejecutó 44 obras y ganó US$ 16,373,603.51 dólares. Todos los contratos contaron con el beneplácito de Fidel Moreno, cuya firma en la práctica tiene más peso que la de la alcaldesa y el vicealcalde capitalino. </p>
            </div>
        </div>
        <div class="row">
            <div class="gran-contratista-foto text-center my-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gran-contratista/lago.jpeg" alt="Infografia" class="img-fluid wow animate__animated animate__fadeIn" />
                
                <div class="gran-contratista-fotodesc p-3">
                    <p>FUENTE LUMINOSA Y LAGO ARTIFICIAL - PARQUE LUIS ALFONSO VELÁZQUEZ - INAUGURADA EN 2018.</p>
                    <p>AÑO DE LICITACIÓN: 2017</p>
                    <p class="gran-contratista-tc1"><b>COSTO: U$ 1,689,397.30</b></p>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-1"> </div>
            <div class="col-md-10">
                <p>De acuerdo con una serie de contratos y adjudicaciones en poder de <b>DIVERGENTES</b>, la concesión de obras bajo contrataciones simplificadas es una práctica habitual en la alcaldía de Managua, la municipalidad de mayor envergadura económica en Nicaragua. El caso del empresario Chávez Sequeira lo ilustra a cabalidad: de las 96 obras que le fueron adjudicadas entre 2016 y 2018, 44 fueron otorgadas bajo esta figura contractual.</p>
                <p>El otorgamiento de estas 44 obras viola las causales del artículo 28 de la ley 801. La normativa justifica realizar únicamente contrataciones simplificadas “siempre y cuando exista una una emergencia o calamidad”, pero también permite invocar el mecanismo cuando existan “urgencias no derivadas de desastres o calamidad pública”. Es decir, que queda a libre albedrío de la Alcaldía de Managua catalogar como “urgente” alguna obra. Un subterfugio legal que ha sido aprovechado al máximo por Fidel Moreno para otorgar las contrataciones a ciertos empresarios.</p>
                <p>“Las autoridades municipales consideran ‘urgencia’ cualquier cosa. Envían la documentación de la contratación a la Contraloría, que es la encargada de fiscalizar este tipo de proyectos, pero estos tampoco investigan, porque la institución se encuentra controlada por el mismo Gobierno. Entonces todo queda en ‘compadre hablado’. No aplican ninguna sanción”, explicó Gilberto Lindo, experto municipalista.
                </p>
                <p>Un análisis de contratos municipales realizado por <b>DIVERGENTES</b> encontró que entre 2016 y 2018, la Alcaldía de Managua ha otorgado a una serie de empresas decenas de proyectos bajo la modalidad de contratación simplificada, sin importar que las obras no se ejecuten en un contexto de calamidad o emergencia. Las más favorecidas han sido las del empresario Chávez Sequeira.
                </p>
                <p>El contratista ha logrado captar buena parte de los proyectos de construcción que la Alcaldía de Managua ha impulsado en el viejo centro de la capital, como parte de la ambición presidencial por remozar la céntrica Avenida Bolívar y el Puerto Salvador Allende —un atracadero y zona de restaurantes—, para convertirlos en sitios de esparcimiento y diversión.
                </p>
            </div>
        </div>
        <?php
        get_template_part('page-templates/gran-contratista/menu', get_post_type());
        ?>
    </div>
</section>

<?php get_footer('mhonduras'); ?>

<script>
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 200) {
            $("header").addClass("bg-header");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("header").removeClass("bg-header");
        }
    });
</script>