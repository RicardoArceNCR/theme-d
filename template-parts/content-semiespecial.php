<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package divergentes
 */

$categories = get_the_category();
$_categories = divergantes_article_and_its_categories($categories);
$tipo_plantilla = get_field('post_fact_checking_plantilla_fact-checking');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="share-iconos"><?php echo do_shortcode('[Sassy_Social_Share type="floating"]') ?></div>
    <header class="entry-header row">
        <div class="col-12">
            <?php //the_breadcrumb(); ?>
        </div>
        <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
            <span class="antetitulo"><?php divergentes_antetitulo() ?></span>
            <?php the_title('<h1>', '</h1>');
            the_excerpt(); ?>
                <?php
                divergentes_posted_by();
                ?>
               <p class="entry-meta autor-v2 mt-0"> <?php the_date('j \d\e F  Y', '', ''); ?></p>
            <div class="d-flex justify-content-center mb-3">
            <?php echo do_shortcode('[Sassy_Social_Share]') ?>
            </div>
        </div>
        <?php
        if (is_singular(array('podcast'))) {
        } else { ?>
            <div class="col-sm-12">
                <?php
                divergentes_post_thumbnail();

                ?>
                <hr>
            </div>
        <?php } ?>
    </header>
    <div class="row">
        <div class="col-12 col-md-2 entry-header mt-1 mt-md-0">

        </div>

        <div class="entry-content col-12 col-md-8 mt-1 mt-md-0">

            <?php
            if (in_category('fact-checking')) {

                if ($tipo_plantilla == 'default' || $tipo_plantilla == '') {
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
                }
                if ($tipo_plantilla == 'new'):?>
                    <div class="fact-checking-newbox p-4">
                        <h1 class="fact-checking-newbox-titulo">Lo dicho:</h1>
                        <?php the_field('post_fact_checking_lo_dicho') ?>
                    </div>
                    <?php
                    if (in_category('fact-checking')) {

                        $term = $_categories['children'][0];

                        if ($term != null):
                            $image = get_field('category_logo', $term);
                            $color = get_field('category_color', $term);
                            ?>
                            <h2 class="fact-checking-newbox-clasificacion">Clasificación:</h2>
                            <div class="fact-checking mt-2 text-center mx-auto mb-4"
                                 style="background-color:<?php echo $color; ?>;max-width: 260px ">

                                <img src="<?php echo $image; ?>" class="img-fluid logo-factchecking"/>

                            </div>
                        <?php
                        endif;
                    }
                    ?>
                    <div class="fact-checking-newbox p-4 mb-5">
                        <h1 class="fact-checking-newbox-titulo">Verificamos:</h1>
                        <?php the_field('post_fact_checking_verificamos') ?>
                    </div>
                <?php endif;
            } else {
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
                ?>
                <hr class="wp-block-separator has-alpha-channel-opacity">
                <h5 id="h-la-informaci-n-que-publicamos-en-divergentes-proviene-de-fuentes-contrastadas-debido-a-la-situaci-n-en-la-regi-n-muchas-veces-nos-vemos-obligados-a-protegerlas-bajo-seud-nimo-o-anonimato-desafortunadamente-algunos-gobiernos-de-la-regi-n-con-el-r-gimen-de-nicaragua-a-la-cabeza-no-ofrecen-informaci-n-o-censuran-a-los-medios-independientes-por-ello-a-pesar-de-solicitarlo-no-podemos-contar-con-versiones-oficiales-autorizadas-recurrimos-al-an-lisis-de-datos-a-las-fuentes-internas-an-nimas-o-las-limitadas-informaciones-de-los-medios-oficialistas-estas-son-las-condiciones-en-las-que-ejercemos-un-oficio-que-en-muchos-casos-nos-cuesta-la-seguridad-y-la-vida-seguiremos-informando"><em>La información que publicamos en </em><strong><em>DIVERGENTES</em></strong><em> proviene de fuentes contrastadas. Debido a la situación en la región, muchas veces, nos vemos obligados a protegerlas bajo seudónimo o anonimato. Desafortunadamente, algunos gobiernos de la región, con el régimen de Nicaragua a la cabeza, no ofrecen información o censuran a los medios independientes. Por ello, a pesar de solicitarlo, no podemos contar con versiones oficiales autorizadas. Recurrimos al análisis de datos, a las fuentes internas anónimas, o las limitadas informaciones de los medios oficialistas. Estas son las condiciones en las que ejercemos un oficio que, en muchos casos, nos cuesta la seguridad y la vida. Seguiremos informando.</em></h5>
                <?php
                if (class_exists('Jetpack_RelatedPosts')) {
                    echo do_shortcode('[jetpack-related-posts]');
                }
            }
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'divergentes'),
                    'after' => '</div>',
                )
            );
            ?>

            <?php
            if (is_singular(array('podcast')) || is_single(array('2226',))) {
                ?>
                <nav aria-label="Page navigation mt-5">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link btn-divergentes" href="https://www.divergentes.com/">Regresar</a>
                        </li>
                    </ul>
                </nav>
                <?php
            } else { ?>
                <nav aria-label="Page navigation mt-5">
                    <ul class="pagination">
                        <?php
                        if (is_single(array('2077', '2085', '2095', '2072',))) { ?>
                            <li class="page-item"><a class="page-link btn-divergentes"
                                                     href="<?php echo get_permalink(2105); ?>">Regresar</a></li>
                            <?php
                        } elseif (has_tag('covid-19')) {
                            ?>
                            <li class="page-item"><a class="page-link btn-divergentes"
                                                     href="https://www.divergentes.com/coronavirus-2020">Regresar</a>
                            </li>
                            <?php
                        } elseif (is_single(array('2589', '2694', '2652', '2542', '2560',))) {
                            ?>
                            <li class="page-item"><a class="page-link btn-divergentes mt-3"
                                                     href="<?php echo get_permalink(2521); ?>">Regresar</a></li>
                            <?php
                        } elseif (is_single(array('6631', '6284', '6735', '6542',))) {
                            ?>
                            <li class="page-item"><a class="page-link btn-divergentes mt-3"
                                                     href="<?php echo get_permalink(6691); ?>">Regresar</a></li>
                            <?php
                        } elseif (is_single(array('7390', '7415', '7343', '7379', '7354'))) {
                            ?>
                            <li class="page-item"><a class="page-link btn-divergentes mt-3"
                                                     href="<?php echo get_permalink(7438); ?>">Regresar</a></li>
                            <?php
                        } elseif (is_single(array('10544'))) {
                            ?>
                            <li class="page-item"><a class="page-link btn-divergentes mt-3"
                                                     href="<?php echo get_permalink(10624); ?>">Regresar</a></li>
                            <?php
                        } else {
                            ?>
                            <li class="page-item"><a class="page-link btn-divergentes"
                                                     href="https://www.divergentes.com/">Regresar</a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
                <?php
            }
            ?>

        </div><!-- .entry-content -->
    </div>
    <!-- <footer class="entry-footer">
		<?php divergentes_entry_footer(); ?>
	</footer> -->
</article><!-- #post-<?php the_ID(); ?> -->
<div class="mb-5"></div>