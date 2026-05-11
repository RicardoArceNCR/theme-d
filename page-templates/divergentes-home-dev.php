<?php

/*
* Template Name: divergentes-home2-dev
*
* @package WordPress
*/

get_header();

$portadaDestacadas = get_field('portada_nota_destacada', 'option');
$portadaLateralIzq = get_field('portada_laterales_izquierdas', 'option');
$portadaLateralDer = get_field('portada_laterales_derecha', 'option');
$tipoportada = get_field('tipoportada', 'option');
?>
<div id="content" class="site-content container home-border-top">
    <div id="primary" class="content-area">

        <main id="main" class="site-main">
            <?php if ($tipoportada === 'Especial') { ?>
            <!--Seccion especial -->
            <div class="row">
                <div class="col-md-12">
                    <?php if (get_field('portada_nota_destacada', 'options')) :
                        $post = get_field('portada_nota_destacada', 'options');
                        setup_postdata($post);
                        ?>
                        <div class="card portada-destacadahome pt-0" style="border: none !important;">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>"
                                       class="">
                                        <?php
                                        // Obtener el campo personalizado de video
                                        $video_url = get_field('video_destacado_post');

                                        if ($video_url): // Si hay un video, mostrarlo sin importar si hay imagen destacada
                                            ?>
                                            <video autoplay loop muted class="card-img-top"
                                                   alt="<?php divergentes_post_title(); ?>">
                                                <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                                                Tu navegador no soporta la reproducción de video.
                                            </video>
                                        <?php elseif (has_post_thumbnail()): // Si no hay video pero hay una imagen destacada, mostrar la imagen ?>
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'divergentesv2-img')); ?>"
                                                 class="card-img-top" alt="<?php divergentes_post_title(); ?>" style="min-width: 100%">
                                        <?php endif; // Si no hay ni video ni imagen, no se muestra nada
                                        ?>
                                    </a>
                                </div>
                                <div class="col-md-6">

                                    <div class="card-body px-0">
                                        <span class="titulo-seccion"><?php echo get_the_category()[0]->cat_name; ?></span>
                                        <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                            <h1 class="feature-home"><?php divergentes_post_title() ?></h1>
                                        </a>
                                        <?php divergentes_post_resumen_portada(); ?>
                                        <?php divergentes_only_posted_by(); ?>

                                        <?php divergentes_post_related(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        wp_reset_postdata();
                    endif; ?>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <?php if (have_rows('portada_lateral_derecha', 'options')) : ?>
                        <div class="row">
                            <?php
                            while (have_rows('portada_lateral_derecha', 'options')) : the_row();
                                $post = get_sub_field('post');
                                setup_postdata($post);
                                ?>
                                <div class="col-md-4">
                                    <div class="card portada_laterales">
                                        <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'divergentesv2-img')) ?>"
                                                 class="card-img-top"
                                                 alt="<?php divergentes_post_title(); ?>">
                                        </a>
                                        <div class="card-body px-0">
                                            <span class="titulo-seccion"><?php echo get_the_category()[0]->cat_name; ?></span>
                                            <a href="<?php the_permalink(); ?>">
                                                <h1 style="font-weight: 700;"><?php divergentes_post_title() ?></h1>
                                            </a>
                                            <?php divergentes_only_posted_by(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="border-divergentes"></div>
                <div class="row">
                    <div class="col-md-3 order-md-0 order-1">

                        <div class="top-home-padding">

                            <img src="https://www.divergentes.com/wp-content/uploads/2024/10/7.gif"
                                 class="img-fluid" alt="ADS Divergentes"/>
                        </div>
                    </div>

                    <div class="col-md-6 order-md-1 order-0">


                        <?php if ( have_rows( 'portada_notas_secundarias', 'options' ) ) :
                            while ( have_rows( 'portada_notas_secundarias', 'options' ) ) : the_row();
                                $post = get_sub_field( 'post' );
                                setup_postdata( $post );
                                ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-7">
                                            <span class="titulo-seccion"><?php echo get_the_category()[0]->cat_name; ?></span>
                                            <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                                <h1 class="feature-home-2"><?php divergentes_post_title() ?></h1>
                                            </a>
                                            <?php divergentes_only_posted_by(); ?>
                                        </div>
                                        <div class="col-5 d-flex align-items-center">
                                            <div class="card-body">
                                                <a href="<?php the_permalink(); ?>"
                                                   title="<?php divergentes_post_title(); ?>">
                                                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'divergentesv2-img' ) ) ?>"
                                                         class="card-img-top img-portada_lateral_izquierda"
                                                         alt="<?php divergentes_post_title(); ?>">
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        endif; ?>
                        <?php if ( have_rows( 'portada_lateral_izquierda', 'options' ) ) :
                            while ( have_rows( 'portada_lateral_izquierda', 'options' ) ) : the_row();
                                $post = get_sub_field( 'post' );
                                setup_postdata( $post );
                                ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-7">
                                            <span class="titulo-seccion"><?php echo get_the_category()[0]->cat_name; ?></span>
                                            <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                                <h1 class="feature-home-2"><?php divergentes_post_title() ?></h1>
                                            </a>
                                            <?php divergentes_only_posted_by(); ?>
                                        </div>
                                        <div class="col-5 d-flex align-items-center">
                                            <div class="card-body">
                                                <a href="<?php the_permalink(); ?>"
                                                   title="<?php divergentes_post_title(); ?>">
                                                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'divergentesv2-img' ) ) ?>"
                                                         class="card-img-top img-portada_lateral_izquierda"
                                                         alt="<?php divergentes_post_title(); ?>">
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>

                    <div class="col-md-3 order-md-2 order-2">


                        <div class="top-home-padding">
                            <a href="https://www.youtube.com/channel/UClBrMnCZ18IJ9IdXSPEvTcQ" title="Suscribite a Youtube" target="_blank">
                                <img src="https://www.divergentes.com/wp-content/uploads/2024/10/bn-1.jpg"
                                     class="img-fluid" alt="Suscribite a Youtube"/>
                            </a>

                        </div>
                    </div>
                </div>
            <!--Fin Seccion Especial -->
                <?php
            } elseif ($tipoportada === 'Normal') {
            ?>
            <!--Seccion Normal-->
            <div class="row">
                <div class="col-md-3 order-md-0 order-1">
                    <?php if ( have_rows( 'portada_lateral_izquierda', 'options' ) ) :
                        while ( have_rows( 'portada_lateral_izquierda', 'options' ) ) : the_row();
                            $post = get_sub_field( 'post' );
                            setup_postdata( $post );
                            ?>
                            <div class="card portada_laterales top-home-padding">
                                <div class="row">
                                    <div class="col-4 col-md-12 d-flex align-items-center">
                                        <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                            <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'divergentesv2-img' ) ) ?>"
                                                 class="card-img-top img-portada_lateral_izquierda"
                                                 alt="<?php divergentes_post_title(); ?>">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-12">
                                        <div class="card-body px-0">
                                            <span class="titulo-seccion"><?php echo get_the_category()[0]->cat_name; ?></span>
                                            <a href="<?php the_permalink(); ?>">
                                                <h1><?php divergentes_post_title() ?></h1>
                                            </a>
                                            <?php divergentes_only_posted_by(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                    <div class="top-home-padding">

                        <img src="https://www.divergentes.com/wp-content/uploads/2024/10/7.gif"
                             class="img-fluid" alt="ADS Divergentes"/>
                    </div>
                </div>

                <div class="col-md-6 order-md-1 order-0">
                    <?php if ( get_field( 'portada_nota_destacada', 'options' ) ) :
                        $post = get_field( 'portada_nota_destacada', 'options' );
                        setup_postdata( $post );
                        ?>
                        <div class="card portada-destacadahome pt-0">
                            <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>" class="img-destacada-home-2">
                                <?php
                                // Obtener el campo personalizado de video
                                $video_url = get_field('video_destacado_post');

                                if ( $video_url ): // Si hay un video, mostrarlo sin importar si hay imagen destacada ?>
                                    <video autoplay loop muted class="card-img-top" alt="<?php divergentes_post_title(); ?>">
                                        <source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
                                        Tu navegador no soporta la reproducción de video.
                                    </video>
                                <?php elseif ( has_post_thumbnail() ): // Si no hay video pero hay una imagen destacada, mostrar la imagen ?>
                                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'divergentesv2-img' ) ); ?>" class="card-img-top" alt="<?php divergentes_post_title(); ?>">
                                <?php endif; // Si no hay ni video ni imagen, no se muestra nada ?>
                            </a>


                            <div class="card-body px-0">
                                <span class="titulo-seccion"><?php echo get_the_category()[0]->cat_name; ?></span>
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                    <h1 class="feature-home"><?php divergentes_post_title() ?></h1>
                                </a>
                                <?php divergentes_post_resumen_portada(); ?>
                                <?php divergentes_only_posted_by(); ?>

                                <?php divergentes_post_related(); ?>
                            </div>
                        </div>
                        <?php
                        wp_reset_postdata();
                    endif; ?>


                    <?php if ( have_rows( 'portada_notas_secundarias', 'options' ) ) :
                        while ( have_rows( 'portada_notas_secundarias', 'options' ) ) : the_row();
                            $post = get_sub_field( 'post' );
                            setup_postdata( $post );
                            ?>
                            <div class="card">
                                <div class="row">
                                    <div class="col-7">
                                        <span class="titulo-seccion"><?php echo get_the_category()[0]->cat_name; ?></span>
                                        <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                            <h1 class="feature-home-2"><?php divergentes_post_title() ?></h1>
                                        </a>
                                        <?php divergentes_only_posted_by(); ?>
                                    </div>
                                    <div class="col-5 d-flex align-items-center">
                                        <div class="card-body">
                                            <a href="<?php the_permalink(); ?>"
                                               title="<?php divergentes_post_title(); ?>">
                                                <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'divergentesv2-img' ) ) ?>"
                                                     class="card-img-top img-portada_lateral_izquierda"
                                                     alt="<?php divergentes_post_title(); ?>">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>

                <div class="col-md-3 order-md-2 order-2">

                    <?php if ( have_rows( 'portada_lateral_derecha', 'options' ) ) :
                        while ( have_rows( 'portada_lateral_derecha', 'options' ) ) : the_row();
                            $post = get_sub_field( 'post' );
                            setup_postdata( $post );
                            ?>
                            <div class="card portada_laterales top-home-padding">
                                <div class="card-body px-0">
                                    <span class="titulo-seccion"><?php echo get_the_category()[0]->cat_name; ?></span>
                                    <a href="<?php the_permalink(); ?>">
                                        <h1><?php divergentes_post_title() ?></h1>
                                    </a>
                                    <?php divergentes_only_posted_by(); ?>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                    <div class="top-home-padding">
                        <a href="https://www.youtube.com/channel/UClBrMnCZ18IJ9IdXSPEvTcQ" title="Suscribite a Youtube" target="_blank">
                            <img src="https://www.divergentes.com/wp-content/uploads/2024/10/bn-1.jpg"
                                 class="img-fluid" alt="Suscribite a Youtube"/>
                        </a>

                    </div>
                </div>
            </div>
            <!--Final Seccion normal -->
                <?php
            }
            ?>
            <!--Newsletter v3-->
            <?php
            get_template_part('template-parts/subscribe');
            ?>
            <!--End Newsletter v3-->

            <div class="border-divergentes"></div>
            <!--COVID-19-->
            <div class="row main-secciones">
                <div class="col-md-6 d-flex align-items-center">
                    <a href="https://www.divergentes.com/divergencias/" class="link-divergentes">
                        <h1>DIVERGENCIAS</h1>
                    </a>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <?php
                    // Get the URL of this tag
                    $tag_link = get_tag_link(1185);
                    ?>
                    <!-- Print a link to this category -->
                    <a href="<?php echo esc_url($tag_link); ?>" class="leer-seccion d-none d-md-block">Más en
                        DIVERGENCIAS</a>
                </div>
            </div>
            <div class="row">
                <?php
                //
                //                $args = array(
                //                    'cat'            => '1185',
                //                    'posts_per_page' => '3',
                //                );
                //                // The Query
                //                $wp_query       = new WP_Query( $args );
                //
                //                if ( $wp_query->have_posts() ) :
                //                    while ( $wp_query->have_posts() ) : $wp_query->the_post();
                //                        $idAutor = get_the_author_meta( 'ID' );
                //                        $autor = get_user_by( 'id', $idAutor );
                //
                if (have_rows('divergencias', 'options')) :
                    while (have_rows('divergencias', 'options')) : the_row();
                        $post = get_sub_field('divergencias_post');
                        setup_postdata($post);
                        $idAutor = get_the_author_meta('ID');
                        $autor = get_user_by('id', $idAutor);
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>"
                                   title="<?php divergentes_post_title(); ?>" class="text-center">
                                    <!--<img src="<?php /*echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'divergentesv2-img' ) ) */ ?>"
                                         class="card-img-top" alt="<?php /*divergentes_post_title(); */ ?>">-->
                                    <?php echo wp_get_attachment_image(get_field('opinion_foto', $autor), 'full', false, ['class' => 'img-fluid card-img-top home-img-divergencias']); ?>
                                </a>
                                <div class="card-body px-0 home-excerpt text-center">
                                    <a href="<?php the_permalink(); ?>"
                                       title="<?php divergentes_post_title(); ?>">
                                        <?php divergentes_post_title('<h1>', '</h1>'); ?>
                                    </a>
                                    <?php divergentes_only_posted_by(); ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;

                wp_reset_postdata();
                ?>
                <div class="col-12 text-center">

                    <a href="<?php echo esc_url($tag_link); ?>" class="leer-seccion d-block d-md-none">Más en
                        DIVERGENCIAS</a>
                </div>
            </div>

            <div class="border-divergentes"></div>

            <!--FACT CHEKING-->
            <div class="row main-secciones">
                <div class="col-md-6 d-flex align-items-center">
                    <a href="https://www.divergentes.com/diver-check/" class="link-divergentes">
                        <h1>DIVER-CHECK</h1>
                    </a>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <?php
                    // Get the ID of a given category
                    $category_id = get_cat_ID('DIVER-CHECK');
                    // Get the URL of this category
                    $category_link = get_category_link($category_id);
                    ?>
                    <!-- Print a link to this category -->
                    <a href="https://www.divergentes.com/diver-check/" class="leer-seccion d-none d-md-block">Más en
                        DIVER-CHECK</a>
                </div>
            </div>
            <div class="row">
                <?php
                // WP_Query arguments
                $args = array(
                    //'nopaging' => true,
                    'cat' => '307',
                    'posts_per_page' => '3',
                );

                // The Query
                $factchecking = new WP_Query($args);

                //var_dump($factchecking);

                // The Loop
                if ($factchecking->have_posts()) {
                    while ($factchecking->have_posts()) {
                        $factchecking->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'divergentesv2-img')) ?>"
                                         class="card-img-top" alt="<?php divergentes_post_title(); ?>">
                                </a>
                                <div class="card-body px-0">
                                    <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                        <?php divergentes_post_title('<h1>', '</h1>'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();

                ?>
                <div class="col-12 text-center">

                    <a href="https://www.divergentes.com/diver-check/" class="leer-seccion d-block d-md-none">Más en
                        DIVER-CHECK</a>
                </div>
            </div>
            <!--END FACT CHECKING-->
            <div class="border-divergentes"></div>
            <!--CARICATURA-->
            <div class="row main-secciones">
                <div class="col-md-6 d-flex align-items-center">
                    <a href="https://www.divergentes.com/caricaturas/" class="link-divergentes">
                        <h1>CARICATURAS</h1>
                    </a>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <?php
                    // Get the ID of a given category
                    $category_id = get_cat_ID('caricaturas');
                    // Get the URL of this category
                    $category_link = get_category_link($category_id);
                    ?>
                    <!-- Print a link to this category -->
                    <a href="https://www.divergentes.com/caricaturas/" class="leer-seccion d-none d-md-block">Más en
                        Caricaturas</a>
                </div>
            </div>
            <div class="row">
                <?php
                // WP_Query arguments
                $args = array(
                    //'nopaging' => true,
                    'cat' => '930',
                    'posts_per_page' => '3',
                );

                // The Query
                $factchecking = new WP_Query($args);

                //var_dump($factchecking);

                // The Loop
                if ($factchecking->have_posts()) {
                    while ($factchecking->have_posts()) {
                        $factchecking->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'divergentesv2-img')) ?>"
                                         class="card-img-top" alt="<?php divergentes_post_title(); ?>">
                                </a>
                                <div class="card-body px-0">
                                    <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                        <?php divergentes_post_title('<h1>', '</h1>'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();

                ?>
                <div class="col-12 text-center">

                    <a href="https://www.divergentes.com/caricaturas/" class="leer-seccion d-block d-md-none">Más en
                        Caricaturas</a>
                </div>
            </div>
            <!--END CARICATURA-->

            <!--Suscribirse en whatsapp-->

            <div class="row mx-auto cta-whatsapp">
                <div class="cta-whatsapp-text">
                    <h2>
                        ¿Quieres recibir todas nuestras publicaciones en tu <b>WhatsApp?</b>
                    </h2>
                </div>
                <div class="cta-whatsapp-btn">
                    <a href="https://whatsapp.com/channel/0029VaOKFBhDDmFaVGp8Ox1m" class="cta-whatsapp-btn-bn"
                       title="Canal Whatsapp Divergentes">¡Suscríbete aquí!</a>
                </div>
                <div class="cta-whatsapp-img">
                    <img src="https://www.divergentes.com/wp-content/uploads/2024/09/wp-hand-1.png"
                         class="d-none d-md-block img-fluid" alt="ig cta whatsap"/>
                    <img src="https://www.divergentes.com/wp-content/uploads/2024/09/wp-hand-mob.png"
                         class="d-block d-md-none img-fluid" alt="ig cta whatsap"/>
                </div>
            </div>

            <!--            End suscribirse en whatsapp-->

            <div class="border-divergentes"></div>
            <!--INGLES-->
            <div class="row main-secciones">
                <div class="col-md-6 d-flex align-items-center">
                    <a href="/english" class="link-divergentes">
                        <h1>ENGLISH</h1>
                    </a>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <a href="/english" class="leer-seccion d-none d-md-block">Más en English</a>
                </div>
            </div>
            <div class="row">
                <?php
                // WP_Query arguments
                $args = array(
                    'post_type' => 'post',
                    'cat' => '1635',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                );

                // The Query
                $podcast = new WP_Query($args);

                //var_dump($factchecking);

                // The Loop
                if ($podcast->have_posts()) {
                    while ($podcast->have_posts()) {
                        $podcast->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'divergentesv2-img')) ?>"
                                         class="card-img-top" alt="<?php divergentes_post_title(); ?>">
                                </a>
                                <div class="card-body px-0">
                                    <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                        <?php divergentes_post_title('<h1>', '</h1>'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();

                ?>
                <div class="col-12 text-center">

                    <a href="/english" class="leer-seccion d-block d-md-none">Más en English</a>
                </div>
            </div>
            <!--END INGLES-->

            <div class="border-divergentes"></div>
            <!--PODCAST-->
            <div class="row main-secciones">
                <div class="col-md-6 d-flex align-items-center">
                    <a href="/podcast" class="link-divergentes">
                        <h1>PODCASTS</h1>
                    </a>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <a href="/podcast" class="leer-seccion d-none d-md-block">Más en Podcasts</a>
                </div>
            </div>
            <div class="row">
                <?php
                // WP_Query arguments
                $args = array(
                    'post_type' => 'podcast',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                );

                // The Query
                $podcast = new WP_Query($args);

                //var_dump($factchecking);

                // The Loop
                if ($podcast->have_posts()) {
                    while ($podcast->have_posts()) {
                        $podcast->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'divergentesv2-img')) ?>"
                                         class="card-img-top" alt="<?php divergentes_post_title(); ?>">
                                </a>
                                <div class="card-body px-0">
                                    <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                        <?php divergentes_post_title('<h1>', '</h1>'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();

                ?>
                <div class="col-12 text-center">

                    <a href="/podcast" class="leer-seccion d-block d-md-none">Más en Podcasts</a>
                </div>
            </div>
            <!--END PODCAST-->


            <!--destacada final-->
            <?php if (get_field('portada_nota_pie', 'options')) :
                $post = get_field('portada_nota_pie', 'options');
                setup_postdata($post);
                ?>
                <div class="border-divergentes"></div>
                <div class="card destacada-final mt-5">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="card-body">
                                <a href="<?php the_permalink(); ?>"
                                   title="<?php divergentes_post_title(); ?>">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'divergentesv2-img')) ?>"
                                         class="card-img-top"
                                         alt="<?php divergentes_post_title(); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="">
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                                    <h1><?php divergentes_post_title() ?></h1>
                                </a>
                                <style>
                                    .especial-portada-di p {
                                        font-size: 15px !important;
                                    }
                                </style>
                                <div class="especial-portada-di"> <?php the_excerpt(); ?> </div>
                                <?php divergentes_only_posted_by(); ?>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
                wp_reset_postdata();
            endif; ?>
            <!--fin destacada final-->

        </main>

    </div>
</div>


<?php get_footer(); ?>
