<?php

/*
* Template Name: trabajadoras-domesticas
*
* @package WordPress
*/

get_header('tdomesticas');
?>

<section class="bg-tdomesticas d-flex align-items-center">
    <div class="container">
    <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tdomesticas/logo_tdomesticas.svg" class="img-fluid logo-tdomesticas" alt="Trabajadoras Domésticas" />
            </div>
            <div class="col-md-6 texto-domesticas">
                <p>Si nadie hiciese el trabajo que garantiza la vida, todo el sistema económico mundial colapsaría. Y, sin embargo, el 75% de esas labores lo hacen las mujeres y niñas sin recibir ninguna remuneración a cambio. Y un 16%, a cambio de salarios indignos:</p>
                <h4>Las trabajadoras domésticas son el colectivo laboral más pobre del mundo</h4>
            </div>
            <div class="col-md-12 text-center mt-5">
                <a href="<?php echo get_permalink(2072); ?>" class="btn btn-tdomesticas">LEER INTRODUCCIÓN</a>
            </div>
            <div class="col-md-12 text-center mt-5">
                <a href="<?php echo get_permalink(2077); ?>" class="btn tdomesticas-pais">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tdomesticas/espana.png" class="img-fluid" alt="Trabajadoras Domésticas España" />
                <p>España</p>
                </a>
                <a href="<?php echo get_permalink(2085); ?>" class="btn tdomesticas-pais">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tdomesticas/honduras.png" class="img-fluid" alt="Trabajadoras Domésticas Honrudas" />
                <p>Honduras</p>
                </a>
                <a href="<?php echo get_permalink(2095); ?>" class="btn tdomesticas-pais">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tdomesticas/nicaragua.png" class="img-fluid" alt="Trabajadoras Domésticas Nicaragua" />
                <p>Nicaragua</p>
                </a>
            </div>
            <div class="col-md-12 texto-domesticas-footer text-center">
             <p>Un especial periodístico realizado por medios de comunicación independientes miembros de la alianza Otras Miradas.</p>
            </div>
            <div class="col-md-12 texto-domesticas-footer text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tdomesticas/logos_footer.png" class="img-fluid" alt="Trabajadoras Domésticas España" />
            </div>

            
    <div class="col-md-12 mt-3 footer-tdomesticas">
        <p>©️ TODOS LOS DERECHOS RESERVADOS. MANAGUA, NICARAGUA. ENERO 2021. Esta publicación puede ser utilizada, total o parcialmente, con previa autorización de la dirección del medio, se deben respetar los créditos de producción y adjuntar un enlace
            a la publicación original. Envíe una solicitud a info@divergentes.com</p>
    </div>
            
        </div>
    </div>
</section>


<?php get_footer('tdomesticas'); ?>