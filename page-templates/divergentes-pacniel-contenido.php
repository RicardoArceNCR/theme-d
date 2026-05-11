<?php

/*
* Template Name: pacniel-contenido
* Template Post Type: post
* @package WordPress
*/

get_header('actoresclave');

?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@600&display=swap" rel="stylesheet">
    <section class="pacniel-topcontenido">
        <?php
        divergentes_post_thumbnail();
        ?>
        <div class="pacniel-titulointerna">
            <div class="container">
                <div class="row">
                    <div class="col-12">
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
                        <?php echo do_shortcode('[Sassy_Social_Share type="floating"]');  ?>
                        <p><?php echo esc_html(get_the_excerpt()); ?></p>
                    </div>
                    <div id="" class="autor my-5">
                        <?php
                        divergentes_posted_by();

                        ?><br>
                        <?php the_date('j \d\e F  Y', '', ''); ?>
                    </div>
                    <div class="presosxretar-contenido">
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

<?php get_footer(); ?>