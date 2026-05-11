<?php

/*
* Template Name: divergentes-home
*
* @package WordPress
*/

get_header();


$Element = get_field('portada', 'option');
$postPrincipal = $Element["post_principal"];

if (($postPrincipal["titulo"] != "" && $postPrincipal["descripcion"] != "") || $postPrincipal["post"]) :

    $titulo = $postPrincipal["titulo"] == "" ? $postPrincipal["post"]->post_title : $postPrincipal["titulo"];
    $descripcion = $postPrincipal["descripcion"] == "" ? $postPrincipal["post"]->post_title : $postPrincipal["descripcion"];

?>


    <section class="h_featured">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-lg-4 col-md-4  offset-lg-1">
                    <h1><a href="<?php echo get_site_url(); ?>/nicaragua-los-vacios-que-dejo-la-represion-de-abril/" title="<?= $titulo; ?>"><?= $titulo; ?></a></h1>
                    <p><?= $descripcion; ?></p>
                    <a href="<?php echo get_site_url(); ?>/nicaragua-los-vacios-que-dejo-la-represion-de-abril/" title="<?= $titulo; ?>"><small>Por Wilfredo Miranda Aburto y Carlos Herrera</small></a>
                </div>
                <div class="col-lg-6 col-md-6 pt-2">
                    <?php
                    $thumbID = get_post_thumbnail_id($postPrincipal["post"]->ID);
                    $imgDestacada = wp_get_attachment_image_src($thumbID, 'full'); // thumbnail, medium, large o full
                    ?>
                    <a href="<?php echo get_site_url(); ?>/nicaragua-los-vacios-que-dejo-la-represion-de-abril/" title="<?= $titulo; ?>">
                        <img src="<?= $imgDestacada[0] ?>" class="img-fluid" alt="Los vacíos que dejó la represión de abril" />
                    </a>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>

<section class="h_sredaccion mt-5">
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-4">
                <a href="/rosario-murillo-una-tragedia-en-cuatro-actos/" title="La corte del caos y el esoterismo"><img src="<?php echo get_template_directory_uri(); ?>/img/corte-caos_thumb.jpg" class="card-img-top" alt="La corte del caos y el esoterismo"></a>
                <a href="/rosario-murillo-una-tragedia-en-cuatro-actos/" title="La corte del caos y el esoterismo" class="home-notas">
                    <h2>La corte del caos y el esoterismo</h2>
                </a>
                <small>Por Carlos Salinas Maldonado</small>
            </div>
            <div class="col-md-4">
                <a href="/el-super-contratista-de-la-alcaldia-de-managua/" title="El gran contratista de la Alcaldía de Managua"><img src="<?php echo get_template_directory_uri(); ?>/img/contratista_thumb.jpg" class="card-img-top" alt="El gran contratista de la Alcaldía de Managua"></a>
                <a href="/el-super-contratista-de-la-alcaldia-de-managua/" title="Coronavirus en Nicaragua: Bajo la sombra del secretismo" class="home-notas">
                    <h2>El gran contratista de la Alcaldía de Managua</h2>
                </a>
                <small>Por Maynor Eliezer Salazar</small>
            </div>
            <div class="col-md-4">
                <a href="/coronavirus-en-nicaragua/" title="Coronavirus en Nicaragua: Bajo la sombra del secretismo"><img src="<?php echo get_template_directory_uri(); ?>/img/covid_thumb.jpg" class="card-img-top" alt="Coronavirus en Nicaragua: Bajo la sombra del secretismo"></a>
                <a href="/coronavirus-en-nicaragua/" title="Coronavirus en Nicaragua: Bajo la sombra del secretismo" class="home-notas">
                    <h2>Coronavirus en Nicaragua: Bajo la sombra del secretismo</h2>
                </a>
                <small>Por Wilfredo Miranda</small>
            </div>
        </div>

    </div>
</section>


<section class="h_contenido mt-5">
    <div class="bg-hcontenido">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12  h_hcontenido">
                    <h1>Sé parte <span>del proceso</span></h1>
                    <p>Somos una red de periodistas en Centroamérica comprometidos con la diversidad de voces, el trabajo colaborativo y un periodismo <b><i>sin ataduras.</i></b> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-body lista-hcotenido mt-5">
            <!-- <div class="col-sm-12 col-md-6 offset-md-3">
                <ul class="h_contenido_right list-group list-group-flush">
                    <li class="list-group-item">
                        <h3>Sé el primero en leernos y recibe nuestras historias directo a tu correo electrónico</h3>
                    </li>
                    <li class="list-group-item">
                        <h3>Siga al equipo de periodistas para conocer de primera mano lo que sucede en la región</h3>
                    </li>
                    <li class="list-group-item">
                        <h3>Nuestras historias e investigaciones serán de acceso libre y con tu ayuda mostramos lo que los poderosos quieren ocultar</h3>
                    </li>
                </ul>
            </div> -->
            <div class="col-md-4">
                <div class=" item-hcontenido">
                    <h3>Sé el primero en leernos y recibe nuestras historias directo a tu correo electrónico</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class=" item-hcontenido2">
                    <h3>Siga al equipo de periodistas para conocer de primera mano lo que sucede en la región</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class=" item-hcontenido3">
                    <h3>Nuestras historias e investigaciones serán de acceso libre y con tu ayuda mostramos lo que los poderosos quieren ocultar</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="h_boletin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>¿Te gustaría conocer mejor nuestro periodismo?</h1>
                <div class="formulario">
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="https://divergentes.us8.list-manage.com/subscribe/post?u=36f1d044004de5b291dd6bdcf&amp;id=1e41e8eca4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <h2><i>Suscríbete a nuestro boletín</i></h2>
                                <div class="form-row mb-2">
                                    <div class="mc-field-group col-6">
                                        <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="Nombres">
                                    </div>
                                    <div class="mc-field-group col-6">
                                        <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME" placeholder="Apellidos">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="mc-field-group col-12">
                                        <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Correo electrónico">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="mc-field-group col-6">
                                        <input type="text" value="" name="COUNTRY" class="required form-control" id="mce-COUNTRY" placeholder="País">
                                    </div>
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_36f1d044004de5b291dd6bdcf_1e41e8eca4" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button btn-divergentes"></div>
                            </div>
                        </form>
                    </div>

                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                    <script type='text/javascript'>
                        (function($) {
                            window.fnames = new Array();
                            window.ftypes = new Array();
                            fnames[0] = 'EMAIL';
                            ftypes[0] = 'email';
                            fnames[1] = 'FNAME';
                            ftypes[1] = 'text';
                            fnames[2] = 'LNAME';
                            ftypes[2] = 'text';
                            fnames[3] = 'ADDRESS';
                            ftypes[3] = 'address';
                            fnames[4] = 'PHONE';
                            ftypes[4] = 'phone';
                            fnames[5] = 'BIRTHDAY';
                            ftypes[5] = 'birthday';
                            fnames[8] = 'COUNTRY';
                            ftypes[8] = 'text';
                            /*
                             * Translated default messages for the $ validation plugin.
                             * Locale: ES
                             */
                            $.extend($.validator.messages, {
                                required: "Este campo es obligatorio.",
                                remote: "Por favor, rellena este campo.",
                                email: "Por favor, escribe una dirección de correo válida",
                                url: "Por favor, escribe una URL válida.",
                                date: "Por favor, escribe una fecha válida.",
                                dateISO: "Por favor, escribe una fecha (ISO) válida.",
                                number: "Por favor, escribe un número entero válido.",
                                digits: "Por favor, escribe sólo dígitos.",
                                creditcard: "Por favor, escribe un número de tarjeta válido.",
                                equalTo: "Por favor, escribe el mismo valor de nuevo.",
                                accept: "Por favor, escribe un valor con una extensión aceptada.",
                                maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
                                minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
                                rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
                                range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
                                max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
                                min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
                            });
                        }(jQuery));
                        var $mcj = jQuery.noConflict(true);
                    </script>
                    <!--End mc_embed_signup-->

                </div>
            </div>
        </div>

    </div>
</section>
<?php get_footer('home'); ?>

<script>
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 100) {
            $("header").addClass("bg-header");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("header").removeClass("bg-header");
        }
    });
</script>