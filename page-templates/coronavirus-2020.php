<?php

/*
* Template Name: coronavirus2020
*
* @package WordPress
*/

get_header('covid2020');
$covid2020 = get_field('covid2020-destacadas', 'option');
$nota_principal = $covid2020["covid_nota_principal_1"];
$nota_principal2 = $covid2020["covid_nota_principal_2"];
?>

<section class="h_featured">
    <div id="feat_video" class="covid2020-title align-content-end">
        <div class="container">
            <h1 class="covid2020-sitetitle">CORONAVIRUS</h1>
            <h1 class="covid2020-sitetitle">NICARAGUA</h1>
        </div>
    </div>
    <div class="container">

        <div class="row pb-5 covid-border-b">
            <div class="col-lg-6 covid-border-r mb-3">
                <?php
                if ($nota_principal) :

                ?>
                    <?php
                    $permalink = get_permalink($nota_principal->ID);
                    $nota_principal_img = wp_get_attachment_image_src(get_post_thumbnail_id($nota_principal->ID), 'large');


                    ?>
                    <a href="<?php echo esc_url($permalink); ?>" title="">
                        <img src="<?php echo esc_html($nota_principal_img[0]); ?>" class="img-fluid notas-portada" alt="Amores a contramarea: Parejas del mismo sexo en Nicaragua y Costa Rica" />

                        <h1 class="mt-3"><?php echo esc_html($nota_principal->post_title); ?></h1>
                    </a>
                    <?php echo get_the_excerpt($nota_principal->ID); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <div class="covid-directo_head"><img src="<?php echo get_template_directory_uri(); ?>/img/covid-2020/EN_DIRECTO.gif" /></div>
                <div class="covid-directo shadow-sm bg-white rounded">
                    <div id="content-covid" class="covid-directo_content p-3 custom-scrollbar-js">

                        <?php if (have_rows('covid_en_directo', 'options')) : ?>
                            <ul class="list-unstyled">
                                <?php while (have_rows('covid_en_directo', 'options')) : the_row(); ?>
                                    <li class="media mt-3 border-bottom">
                                        <div class="media-body">
                                            <h5 class="covid-directo-tit mt-0 mb-1"><?php the_sub_field('covid_directo_titulo'); ?> <small class="mt-0 mb-1">| <?php the_sub_field('fecha_covid_directo'); ?></small></h5>
                                            
                                            <?php if (get_sub_field("covid_directo_imagen")) : ?>
                                                <img src="<?php the_sub_field('covid_directo_imagen') ?>" class="img-fluid float-left" alt="...">
                                            <?php endif; ?>

                                            <?php the_sub_field('covid_directo_contenido'); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5 pb-5 covid-border-b">
            <?php
            if ($nota_principal2) :
                $permalink2 = get_permalink($nota_principal2->ID);
                $nota_principal_img2 = wp_get_attachment_image_src(get_post_thumbnail_id($nota_principal2->ID), 'large');
            ?>

                <div class="col-lg-6 covid-border-r">
                    <?php if (has_post_thumbnail($nota_principal2->ID)) : ?>
                        <a href="<?php echo esc_url($permalink2); ?>" title="">
                            <img src="<?php echo esc_html($nota_principal_img2[0]); ?>" class="img-fluid notas-portada" alt="<?php echo esc_html($nota_principal->post_title); ?>" />
                        </a>
                    <?php endif; ?></div>
                <div class="col-lg-6 d-flex align-content-center flex-wrap">
                    <a href="<?php echo esc_url($permalink2); ?>" title="<?php echo esc_html($nota_principal2->post_title); ?>">
                        <h1 class="mt-3"><?php echo esc_html($nota_principal2->post_title); ?>
                        </h1>
                    </a>
                    <?php echo get_the_excerpt($nota_principal2->ID); ?>
                </div>
        </div>
    <?php endif; ?>

    </div>
</section>

<section class="covid-blog mb-5">
    <div class="container">
        <?php if (have_rows('covid_secundarias', 'options')) : ?>
            <div class="row pt-3">
                <?php while (have_rows('covid_secundarias', 'options')) : the_row();
                    $postobject = get_sub_field('covid_nota_secundaria_lista');
                ?>
                    <?php $post = $postobject;
                    setup_postdata($post); ?>

                    <div class="col-md-4 mt-5">
                        <div class="covid-blogimg">
                            <a href="<?php the_permalink(); ?>" title="Un año de gobierno de Nayib Bukele: El presidente de las mentira">
                                <?php $secundarias_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>
                                <img src="<?php echo esc_url($secundarias_featured_img_url) ?>" class="card-img-top" alt="Un año de gobierno de Nayib Bukele: El presidente de las mentira">
                            </a>
                        </div>
                        <a href="<?php the_permalink(); ?>" title="Un año de gobierno de Nayib Bukele: El presidente de las mentira" class="home-notas">
                            <?php the_title('<h3 class="mt-3">', '</h3>'); ?>
                        </a>
                    </div>
                <?php endwhile; ?>

            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12 text-center">
                <a href="https://www.divergentes.com/tag/covid-19/" class="btn btn-outline-danger mt-5">Ver más</a>
            </div>
        </div>
    </div>
</section>
<section class=" graficos-portada">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h5 class="text-white text-center">Curva de contagio</h5>
            <?php echo do_shortcode('[wpdatachart id=1]'); ?>
                
            </div>
      <!--      <div class="col-md-6 aalign-content-start"> <h5 class="text-white text-center">Muertes por COVID-19</h5><?php /*echo do_shortcode('[wpdatachart id=3]'); */?></div>
            <div class="col-md-6 align-content-start"> <h5 class="text-white text-center">Porcentaje de contagio por departamento</h5><?php /*echo do_shortcode('[wpdatachart id=2]'); */?></div>-->
        </div>
    </div>
    
</section>

<?php get_footer('covid2020'); ?>
<script>
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 200) {
                $("header").addClass("bg-header");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("header").removeClass("bg-header");
            }
        });
    </script>