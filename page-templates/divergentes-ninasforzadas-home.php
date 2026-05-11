<?php

/*
* Template Name: ninasforzadas-home
*
* @package WordPress
*/

get_header('ninasforzadas');
?>

    <section class="ninasforzadas-home">
        <div class="container">
            <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/logo.svg" class="img-fluid" />
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/ie-text3.svg" class="logo_nn img-fluid" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 text-center">
                    <a href="<?php the_permalink(2897); ?>" class="btn btn-ninasforzadas">ANÁLISIS REGIONAL</a>
                </div>
            </div>
        </div>
        
        <div class="container-fluid  mt-3">
            <div class="row">
                <div class="col-md-12 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/click-pais2.svg" class="img-fluid click-pais" />
                </div>
                <div class="col-6 col-md-2 border-ninasforzadas">
                    <a href="<?php the_permalink(2852); ?>" class="nn-pais  d-flex align-items-end">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/panama.svg" class="img-fluid" />
                    </a>
                </div>
                <div class="col-6 col-md-2 border-ninasforzadas">
                    <a href="<?php the_permalink(2869); ?>"  class="nn-pais  d-flex align-items-end">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/honduras.svg" class="img-fluid" />
                    </a>
                </div>
                <div class="col-6 col-md-2 border-ninasforzadas">
                    <a href="<?php the_permalink(2844); ?>"  class="nn-pais d-flex align-items-end">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/nicaragua.svg" class="img-fluid" />
                    </a>
                </div>
                <div class="col-6 col-md-2 border-ninasforzadas">
                    <a href="<?php the_permalink(2881); ?>"  class="nn-pais d-flex align-items-end">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/costa%20rica.svg" class="img-fluid" />
                    </a>
                </div>
                <div class="col-6 col-md-2 border-ninasforzadas">
                    <a href="<?php the_permalink(2875); ?>"  class="nn-pais d-flex align-items-end">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/elsalvador.svg" class="img-fluid" />
                    </a>
                </div>
                <div class="col-6 col-md-2 border-ninasforzadas">
                    <a href="<?php the_permalink(2892); ?>"  class="nn-pais d-flex align-items-end">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ninasforzadas/guatemala.svg" class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <p>©️ TODOS LOS DERECHOS RESERVADOS. MANAGUA, NICARAGUA. MARZO 2021. Esta publicación puede ser utilizada, total o parcialmente, con previa autorización de la dirección del medio, se deben respetar los créditos de producción y adjuntar un enlace
                    a la publicación original. Envíe una solicitud a info@divergentes.com</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logosvg.svg" alt="Divergentes" class="my-3" width="175" />
                <p>Todos los derechos reservados © 2020-2021</p>
            </div>
        </footer>
    </section>



<?php get_footer('ninasforzadashome'); ?>