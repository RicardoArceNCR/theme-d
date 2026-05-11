<?php

/*
* Template Name: rebelion
*
* @package WordPress
*/
get_header('actoresclave');
?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <section class="rebelionjovenes">
        <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
        <img src="https://www.divergentes.com/wp-content/uploads/2021/12/fondo_desktop-1.jpg"
             class="img-fluid rebelionjovenes-desktop"/>
        <img src="https://www.divergentes.com/wp-content/uploads/2021/12/fondo_mobile-1.jpg"
             class="img-fluid rebelionjovenes-movil"/>
        <div class="container">
            <div class="row pt-3">

                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="resumen pt-5">
                        <?php /*echo do_shortcode('[Sassy_Social_Share type="floating"]'); */?>
                        <p><i>Los movimientos juveniles se han convertido en la principal oposición para los cada vez más autoritarios gobiernos de Centroamérica. Especialmente, las activistas feministas, que en Guatemala, en Nicaragua o El Salvador no solo se están movilizando para combatir los recortes de derechos y libertades que afectan a toda la ciudadanía, sino también la negación de derechos sexuales y reproductivos como el aborto, así como la impunidad con la que el Estado sigue permitiendo las violencias machistas.</i></p>
                    </div>
                </div>
            </div>
        </div>
<div class="rebelionjovenes-enlaces my-5">
    <div class="list-group">
    <a href="<?php the_permalink('11234') ?>" class="btn-rebelionjovenes">Mujeres jóvenes centroamericanas</a>
    <a href="<?php the_permalink('11214') ?>" class="btn-rebelionjovenes">Guatemala: La revuelta de las niñas</a>
    <a href="<?php the_permalink('11194') ?>" class="btn-rebelionjovenes">Nicaragua: Juventud bajo represión</a>
    <a href="<?php the_permalink('11147') ?>" class="btn-rebelionjovenes">Los jóvenes que se enfrentan al autoritarismo</a>
    </div>
</div>
    </section>

<?php get_footer('vm'); ?>