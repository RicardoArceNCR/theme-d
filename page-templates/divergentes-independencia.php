<?php

/*
* Template Name: independencia
*
* @package WordPress
*/

get_header('independencia');
?>
<section class="independencia pb-5">
        <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
    <div class="toast" id="myToast" role="alert" aria-live="polite" aria-atomic="true" data-delay="12000">
    <div class="toast-header">
        <strong class="mr-auto"><i class="fa fa-grav"></i> Modo de uso</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        <b>Haz clic en cada pin para leer más</b>
    </div>
</div>
    <div class="container-fluid independencia-papel p-md-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="opacity: 0;position: absolute">Bicentenario en centroamerica: Menos libertades, más autoritarismos</h1>
                <img src="https://www.divergentes.com/wp-content/uploads/2021/09/logo_bicentenario.svg"
                     class="img-fluid logo-independencia"/>
            </div>

            <div class="col-12">
                <div class="exilio-movil">

                    <object type="image/svg+xml" data="https://www.divergentes.com/wp-content/uploads/2021/09/mapa-independencia-movil-1.svg" class="img-fluid"></object>


            </div>
            </div>
            <div class="col-12 resumen mt-4">
                <p>La antorcha de la libertad que recorri&oacute; Centroam&eacute;rica este septiembre en plenas
                    celebraciones del bicentenario de independencia del Reino de Espa&ntilde;a alumbr&oacute; una regi&oacute;n
                    en la que hay menos libertades y m&aacute;s autoritarismos en 2021. Las loas libertarias que los
                    gobiernos de Guatemala, El Salvador, Honduras, Nicaragua y Costa Rica han lanzando en &ldquo;el mes
                    patrio bicentenario&rdquo; distan de las realidades de estos pa&iacute;ses. Las poblaciones no est&aacute;n
                    sometidas desde hace m&aacute;s de 200 a&ntilde;os, pero el fruto que prometi&oacute; la
                    independencia --sobre todo acabar con las desigualdades-- es materia pendiente. La pobreza, la
                    migraci&oacute;n, la corrupci&oacute;n, las violaciones a los derechos humanos y la impunidad han
                    ganado demasiado auge en el istmo, gracias a autoritarismos que se han instalado sin
                    pudor.&nbsp;</p>
                <p>Lejos de celebrar con br&iacute;os el bicentenario, la fecha sirve para ver los antecedentes de una
                    regi&oacute;n desangrada en la d&eacute;cada del ochenta y que nunca pudo recuperarse integralmente.
                    Centroam&eacute;rica ha sido una de las regiones m&aacute;s peligrosas del mundo, que no logra
                    romper el ciclo de la miseria y de los caudillos endiosados que, como hacendados, gobiernan con mano
                    de hierro. Daniel Ortega es el caso m&aacute;s claro en Nicaragua: ha llegado al punto de asesinar a
                    m&aacute;s de 325 personas para perpetuarse y encarcelar a toda la oposici&oacute;n. El Salvador
                    camina aceleradamente hacia el abismo autoritario con Nayib Bukele. Guatemala sigue con sus &eacute;lites
                    apa&ntilde;ando la corrupci&oacute;n y descabezando fiscales. Honduras con Juan Orlando Hern&aacute;ndez
                    persiste como Estado fallido. Y Costa Rica, el oasis de la regi&oacute;n, est&aacute; golpeado por
                    la pandemia de COVID-19 y la corrupci&oacute;n reciente. El panorama, a 200 a&ntilde;os de la
                    independencia, no es halag&uuml;e&ntilde;o. </p>
            </div>
            <div class="col-12 text-right">
                <img src="https://www.divergentes.com/wp-content/uploads/2021/09/firma_divergentes-1.svg" class="img-fluid independencia-firma mr-5 mb-5" />
            </div>

            <div class="col-12">
                <div class="exilio-desktop">
               <object type="image/svg+xml" data="https://www.divergentes.com/wp-content/uploads/2021/09/mapa-independencia-2.svg" class="img-fluid"></object>

            </div>
            </div>
        </div>

    </div>

</section>

<script>
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 200) {
            $("header").css({"backgroundColor": "#002a41"});
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("header").css({"backgroundColor": "transparent"});
        }
    });
	$(document).ready(function(){
		$("#myToast").toast('show');
	});
</script>
<?php
get_footer('independencia');
?>
<iframe src="https://www.connectas.org/RECURSOS/el-ruinoso-legado-de-alba-forestal.html" frameborder="0" scrolling="0"
        width="100%" height="1"></iframe>
<script>
