<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package divergentes
 */

$categories     = get_the_category();
$_categories    = divergantes_article_and_its_categories( $categories );
$tipo_plantilla = get_field( 'post_fact_checking_plantilla_fact-checking' );

//$idAutor = get_field('post_autor');
$idAutor = get_the_author_meta( 'ID' );
$autor = get_user_by( 'id', $idAutor );
$foto_autor = get_field('opinion_foto', 'user_' . $idAutor);
$info_autor = get_field('opinion_biografia', 'user_' . $idAutor);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="img-autor-opinion">
        <?php echo wp_get_attachment_image($foto_autor, 'thumbnail', false, ['class' => 'img-fluid foto-autor-opinion']); ?>
        <?php //echo wp_get_attachment_image( get_field('opinion_foto', $autor->ID), 'thumbnail', false, ['class' => 'img-fluid foto-autor-opinion']); ?>
    </div>
    <header class="entry-header entry-opinion row">

        <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
            <p class="opinion-autor"> <?php echo $autor->display_name  ?> <br>
                <span style="color: #7F7F7F"><?php the_date('j \d\e F  Y', '', ''); ?></span>
            </p>
            <span class="antetitulo"><?php divergentes_antetitulo() ?></span>
			<?php the_title( '<h1>', '</h1>' );
			//the_excerpt(); ?>
            <div class="mb-3 mt-3 d-flex justify-content-center">
                <?php echo do_shortcode('[Sassy_Social_Share]') ?>
            </div>
        </div>
		<?php
		if ( is_singular( array( 'podcast' ) ) ) {
		} else { ?>
            <div class="col-sm-12">
				<?php
				divergentes_post_thumbnail();

				?>
                <hr>
            </div>
		<?php } ?>
    </header>

    <div class="entry-content col-sm-12 col-lg-8 offset-lg-2 mt-1 mt-md-5">
			<?php
			the_content(
				sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'divergentes' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'divergentes' ),
				'after'  => '</div>',
			)
		);
		?>
        <div class="border-divergentes"></div>
        <div class="main-secciones">
            <h1 style="margin-top: 0">ESCRIBE</h1>
            <p class="opinion-autor text-left"><?php echo $autor->display_name  ?></p>
            <p><?php echo $info_autor ?></p>
        </div>
        <?php
            if (class_exists('Jetpack_RelatedPosts')) {
                echo do_shortcode('[jetpack-related-posts]');
            }
            ?>
            <nav aria-label="Page navigation mt-5">
                <ul class="pagination">
                        <li class="page-item"><a class="page-link btn-divergentes" href="https://www.divergentes.com/">Regresar</a>
                        </li>
                </ul>
            </nav>


    </div><!-- .entry-content -->

    <!-- <footer class="entry-footer">
		<?php divergentes_entry_footer(); ?>
	</footer> -->
</article><!-- #post-<?php the_ID(); ?> -->
<div class="mb-5"></div>