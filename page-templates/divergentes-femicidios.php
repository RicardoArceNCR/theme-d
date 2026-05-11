<?php

/*
* Template Name: femicidios
*
* @package WordPress
*/
get_header('actoresclave');
?>
    <section class="violencia-mujeres">
        <img src="https://www.divergentes.com/wp-content/uploads/2021/11/fondo_1.jpg"
             class="img-fluid vmprincipal"/>
        <div class=" vm-titulo">
            <img src="https://www.divergentes.com/wp-content/uploads/2021/11/titulovm.png" class="img-fluid"/>


        </div>
    </section>

    <section class="vm-sliders">
        <section class="vm-1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="resumen" data-aos="fade-up">
                                    <h2>La Comisión Interamericana de Mujeres de la Organización de Estados Americanos
                                        (OEA) califica el femicidio como la manifestación más grave de discriminación y
                                        violencia hacia las mujeres.</h2>
                                    <h3>En Nicaragua, de acuerdo a las organizaciones de mujeres, en la mayor&iacute;a
                                        de casos de femicidios, las mujeres denunciaron a su agresor, pero las
                                        autoridades no actuaron. <strong>De enero hasta el 10 de noviembre de 2021, se
                                            contabilizan 62 femicidios, 108 femicidios frustrados y 75 hu&eacute;rfanos
                                            producto de esta violencia imperante. </strong>Esto sumado al clima de
                                        impunidad que predomina en el pa&iacute;s y la persecuci&oacute;n a las
                                        defensoras y feministas, conforman el entorno perfecto que cada a&ntilde;o cobra
                                        m&aacute;s vidas de mujeres.</h3>
                                    <div class="text-center mt-5">
                                        <img src="https://www.divergentes.com/wp-content/uploads/2021/11/pordiver.png" class="img-fluid mb-3" /><br>
                                        <small>25/11/2021</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <?php
        the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'divergentes'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'divergentes'),
                'after'  => '</div>',
            )
        );
        ?>


    <div class="container">


        <nav aria-label="Page navigation m-auto mt-5">
            <ul class="pagination">
                <li class="page-item"><a class="page-link btn-divergentes"
                                         href="<?php echo get_site_url(); ?>">Regresar</a>
                </li>

            </ul>
        </nav>

    </div>

    <script>
        $(document).ready(function () {
            $('.back-to-top').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });
    </script>

<?php get_footer('vm'); ?>