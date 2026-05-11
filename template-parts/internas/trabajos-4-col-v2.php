<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package divergentes
 */

?>

<div class="card secciones-archivo border-0 h-100 mb-4">
    <div class="row">
        <div class="col-4 col-md-12 padding-secciones-movil-card order-1 order-md-0">
            <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>">
                <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'divergentesv2-img' ) ) ?>"
                     class="card-img-top img-portada_lateral_izquierda"
                     alt="<?php divergentes_post_title(); ?>">
            </a>
        </div>
        <div class="col-8 col-md-12 order-0 order-md-1">
            <div class="card-body d-flex flex-column px-0">
                <span class="fecha-archivo"><?= get_the_date( 'j \d\e F  Y', '', '' ); ?></span>
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title() ?></h2>
                </a>
				<?php divergentes_only_posted_by(); ?>
            </div>
        </div>
    </div>
</div>