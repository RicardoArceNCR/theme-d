<?php

/*
* Template Name: defensorascaribe
*
* @package WordPress
*/
get_header('vm');
?>
    <section class="defensorascaribe">
        <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
        <div class="container-fluid">
            <div class="row defensorascaribe-rotulo">
                <div class="col-md-4">
                    <h1 class="defensorascaribe-titulo">
                        Las defensoras<br>
                        del Caribe Sur<br>
                        <span>Becky, Ligia y Raquel</span>
                    </h1>
                </div>
                <div class="col-md-8 d-flex align-items-end">
                    <p class="defensorascaribe-resumen">
                        En medio de limitaciones económicas y persecución policial, tres mujeres caribeñas han plantado
                        cara a la violencia de género, la invasión de tierras comunales y al olvido estatal en la Costa
                        Caribe Sur. Desde sus comunidades, Raquel Bodden intenta romper “el ciclo de la violencia
                        machista” en el que viven mujeres indígenas. Mientras que Becky McCrea es la primera abogada del
                        pueblo Rama Rama Kriol que lucha contra los “colonos” que explotan los territorios ancestrales.
                        Más al norte, en Laguna de Perlas, Ligia Peralta se ha erigido como una especie de ángel para
                        los más de 600 discapacitados de ese municipio. Estas son sus historias.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 dc-raquel">
                    <a href="<?php the_permalink(10779) ?>">
                    <img src="https://www.divergentes.com/wp-content/uploads/2021/11/img_1.jpg"
                         class="img-fluid"/></a>
                    <a href="<?php the_permalink(10779) ?>" class="btn-defensoras">Raquel-Bodden</a>
                </div>
                <div class="col-md-4 dc-ligia">
                    <a href="<?php the_permalink(10771) ?>">
                    <img src="https://www.divergentes.com/wp-content/uploads/2021/11/img_2.jpg"
                         class="img-fluid"/></a>
                    <a href="<?php the_permalink(10771) ?>" class="btn-defensoras">Ligia Peralta</a>
                </div>
                <div class="col-md-4 dc-becky">
                    <a href="<?php the_permalink(10786) ?>">
                    <img src="https://www.divergentes.com/wp-content/uploads/2021/11/img_3.jpg"
                         class="img-fluid"/></a>
                    <a href="<?php the_permalink(10786) ?>" class="btn-defensoras">Becky Mcrea</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('.back-to-top').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    </script>
<?php get_footer(); ?>