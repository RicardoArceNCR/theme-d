<?php

/*
* Template Name: indigenas-mayagnas
* Template Post Type: post
* @package WordPress
*/

get_header('indigenasmayagnas');

?>
    <section class="indigenas-mayagnas ">
        <div id="feat_video" class="indigenas-mayagnas-titulointerna">
            <div class="container   text-center">
                <div class="row">
                    <div class="col-md-7 texto-mayagnas  d-flex align-items-end mb-5">
                        <?php
                        the_title('<h1>', '</h1>');

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="covid contenido">
        <div class="container">
            <div class="row pt-3">

                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="resumen pt-0">
                        <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
                        <p class="mayagnasresumen"><?php echo esc_html(get_the_excerpt()); ?></p>
                    </div>
                    <div id="" class="autor mayagnasautor my-5">
                        <?php
                        divergentes_posted_by();

                        ?><br>
                        <span class="mayagnasfecha"> <?php the_date('j \d\e F  Y', '', ''); ?></span>
                    </div>
                    <div class="presosxretar-contenido">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/12/barra-mayagnas.jpg" class="img-fluid mb-5" style="min-width: 100%" />
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
                                'after' => '</div>',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>

    </section>
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


<?php get_footer('indigenasmayagnas'); ?>