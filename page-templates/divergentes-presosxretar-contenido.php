<?php

/*
* Template Name: presosxretar-contenido
 * * Template Post Type: post, page
*
* @package WordPress
*/

get_header('actoresclave');
?>

    <section class="ninasforzadas-panama img-nforzadass">
        <?php
            divergentes_post_thumbnail();
        ?>
    </section>
    <section class="covid contenido">
        <div class="container">
            <div class="row pt-3">

                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="titulos">
<?php
    the_title('<h1 class="titulo-presosxretar">', '</h1>');

    ?>
                    </div>
                    <div class="resumen pt-5">
                        <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
                        <p><i><?php echo esc_html(get_the_excerpt()); ?></i></p>
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
                            'after'  => '</div>',
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
        $(document).ready(function(){
            $('.back-to-top').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });
    </script>

<?php get_footer(); ?>