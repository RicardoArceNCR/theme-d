<?php
/**
 * The template for categories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package divergentes
 */

get_header();

$taxonomy_name = 'category';
//$categories = get_the_category();
$categories = get_term_by('name', single_cat_title( '', false ),$taxonomy_name);
$term_id = $categories->term_id;

if( divergentes_is_subcategory($term_id) ){
    if ($categories->parent)
        $term_id = $categories->parent;
}

$parent = get_term_by('id', $term_id,$taxonomy_name);
$termchildren = get_term_children( $term_id, $taxonomy_name );
?>
    <div class="container sitio-archivo">

        <div class="row pt-2 pt-md-4">
            <div class="col-md-8">
                <h1 class="archivo-titulo"> <?php echo $parent->name; ?></h1>

            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <div class="ocultar-movil">
	            <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                </div>
            </div>

            <div class="col-12">
                <div class="border-divergentes"></div>
            </div>
            <?php
            if ($termchildren) {
                ?>
                <div class="col-12 ocultar-movil">
                    <nav class="nav archivo-subcategorías">
                        <a class="nav-link <?= $parent->slug == $categories->slug ? 'active':'' ?>" href="<?= get_term_link( $parent, $taxonomy_name ) ?>"> Todos </a>
                        <?php
                        foreach ( $termchildren as $child ){
                            $term = get_term_by( 'id', $child, $taxonomy_name );?>
                            <a class="nav-link <?= $term->slug == $categories->slug ? 'active':'' ?>" href="<?= get_term_link( $term, $taxonomy_name ) ?>"><?= $term->name ?></a>
                        <?php } ?>
                    </nav>
                </div>
            <?php } ?>
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
                    <div class="col-md-3">
                        <?php get_template_part('template-parts/internas/trabajos-4-col-v2'); ?>
                    </div>
                <?php
                endwhile;

                //the_posts_navigation();

            else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>

        </div>

	    <?php bootscore_pagination(); ?>
        <!--<nav aria-label="Page navigation m-auto mt-5">
            <ul class="pagination mt-5">

                <li class="page-item"><a class="page-link btn-divergentes"
                                         href="https://www.divergentes.com/">Regresar</a></li>

            </ul>
        </nav>-->
    </div>

<?php
get_footer();
