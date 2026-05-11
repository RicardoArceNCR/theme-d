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

<section class="h_featured">
	<div id="feat_video" class="covid2020-title align-content-end">
		<div class="container">
			<h1 class="covid2020-sitetitle">CORONAVIRUS </h1>
			<h1 class="covid2020-sitetitle">NICARAGUA</h1>
		</div>
	</div>
	</div>
</section>
<section class="covid-blog mb-5">
	<div class="container">
		<div class="text-left">
			<h1>Archivo</h1>
		</div>

		<div class="row pt-3 mb-4">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="col-md-3">
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
                                    <h1><?php the_title() ?></h1>
                                </a>
                                <?php divergentes_only_posted_by(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php endwhile;
			endif; ?>

		</div><!-- row -->
				<?php bootscore_pagination(); ?>
	</div>
</section>

<?php
wp_reset_query();
?>


<?php get_footer('covid2020'); ?>
