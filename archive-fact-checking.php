<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package divergentes
 */

get_header();
?>
    <div class="container sitio-archivo">

        <div class="row">
            <div class="col-12">
                <h1 class="archivo-titulo mb-4"> <?php the_archive_title(); ?></h1>

                <div class="border-divergentes"></div>
            </div>
            <?php if (have_posts()) : ?>

                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    ?>
                    <div class="col-md-4">
                        <?php get_template_part('template-parts/internas/trabajos-4-col'); ?>
                    </div>
                <?php
                endwhile;

                the_posts_navigation();

            else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>

        </div>
        <nav aria-label="Page navigation m-auto mt-5">
            <ul class="pagination mt-5">

                <li class="page-item"><a class="page-link btn-divergentes"
                                         href="https://www.divergentes.com/">Regresar</a></li>

            </ul>
        </nav>
    </div>

<?php
get_footer();
