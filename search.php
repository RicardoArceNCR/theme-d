<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package divergentes
 */

get_header();
?>
    <div class="container">

    <div class="row">

		<?php if ( have_posts() ) : ?>

			<div class="col-12 mb-5">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Resultados de búsqueda para: %s', 'divergentes' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</div><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        <nav aria-label="Page navigation m-auto mt-5">
        <ul class="pagination">
            <li class="page-item"><a class="page-link btn-divergentes" href="https://www.divergentes.com/">Regresar</a>
            </li>

        </ul>
        </nav>
    </div>
    </div>
<?php
get_footer();
