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

    <header class="entry-header row">
        <div class="col-md-6">
            <span class="antetitulo"><?php divergentes_antetitulo() ?></span>
			<?php the_title('<h1>', '</h1>');
            the_excerpt();?>
            <p class="entry-meta">
	            <?php
	            divergentes_posted_by();

	            ?><br>
	            <?php the_date('j \d\e F  Y', '', ''); ?>
                <br>
	            <?php echo do_shortcode('[Sassy_Social_Share]') ?>
            </p>
        </div>
        <div class="col-md-6">
			<?php   divergentes_post_thumbnail(); ?>
        </div>
    </header>
    <hr>


    <div class="entry-content col-sm-12 col-lg-10 offset-lg-1">
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
                    <div class="fact-checking mt-2 text-center mx-auto mb-4" style="background-color:<?php echo $color; ?>;max-width: 260px ">

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
        }
        else {
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
            <nav aria-label="Page navigation m-auto mt-5">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link btn-divergentes" href="https://www.divergentes.com/">Regresar</a>
                    </li>
                </ul>
            </nav>
            <?php
        } else { ?>
            <nav aria-label="Page navigation m-auto mt-5">
                <ul class="pagination">
                    <?php
                    if (is_single(array('2077', '2085', '2095', '2072',))) { ?>
                        <li class="page-item"><a class="page-link btn-divergentes"
                                                 href="<?php echo get_permalink(2105); ?>">Regresar</a></li>
                        <?php
                    } elseif (has_tag('covid-19')) {
                        ?>
                        <li class="page-item"><a class="page-link btn-divergentes"
                                                 href="https://www.divergentes.com/coronavirus-2020">Regresar</a></li>
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
                        <li class="page-item"><a class="page-link btn-divergentes" href="https://www.divergentes.com/">Regresar</a>
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

    <!-- <footer class="entry-footer">
		<?php divergentes_entry_footer(); ?>
	</footer> -->
</article><!-- #post-<?php the_ID(); ?> -->
<div class="mb-5"></div>