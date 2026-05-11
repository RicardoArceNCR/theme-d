<?php

/*
* Template Name: todos-trabajos
*
* @package WordPress
*/

get_header();

?>

<section class="covid-blog mb-5">
    <div class="container">
        <h1>Archivo</h1>
        <?php
        $args = array(

            'post_type'              => array('page','post'),
            'post_status' => 'publish',
            'order' => 'DESC',
            'post__not_in' => array('464', '209', '13','7077','8759'),
            'post_parent__not_in' => array('164', '194', '130', '518', '2890' ),
            'tag__not_in' => array('5'),


        );

        // The Query
        $columnasarchivo = new WP_Query($args);
        $counter = 0;
        while ($columnasarchivo->have_posts()) : $columnasarchivo->the_post();
            $counter++;
            if ($counter === 1) {
                echo '<div class="row">'; //start the row
            }

            echo '<div class="col-sm-4 mt-4">'; //start the col//

            get_template_part('template-parts/internas/trabajos-4-col');
            echo '</div>'; //end the col

            if ($counter === 3) {
                $counter = 0; //reset counter
                echo '</div>'; //end row 
            }

        endwhile; // End of the loop.


        if ($counter !== 0) {
            echo '</div>'; //closes stray rows
        }



        ?>
        <?php 
        $post__not_in = ($do_not_duplicate) ? implode(',', $do_not_duplicate) : '';     
        echo do_shortcode( ' [ajax_load_more id="4048670371" container_type="div" css_classes="" offset="12" post_type="post, page" posts_per_page="3" progress_bar="true" progress_bar_color="ed7070" button_label="Leer más..." button_loading_label="Cargando..." button_done_label="No hay más publicaciones" post__not_in="464,209,13,200,197,139,142,136,133,145,168,183,177,171,174,186,180,521,541,1801,297,2892,2881,2875,2869,2852,2844,7077,8759" tag__not_in="5"]' );

        
        ?>

       
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
        if ($(window).scrollTop() > 80) {
            $("header").addClass("bg-header");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("header").removeClass("bg-header");
        }
    });
</script>