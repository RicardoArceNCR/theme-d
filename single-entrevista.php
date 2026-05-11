<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package divergentes
 * Template Name: entrevistas
 * Template Post Type: post
 */

get_header();
?>
    <div id="content" class="site-content container py-1 py-md-5 mt-0 mt-md-4">
        <div id="primary" class="content-area">


            <div class="row">
                <main class="col-md-12">

                    <main id="main" class="site-main main-post">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content-entrevista' );

							// the_post_navigation(
							// 	array(
							// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__('Anterior:', 'divergentes') . '</span> <span class="nav-title">%title</span>',
							// 		'next_text' => '<span class="nav-subtitle">' . esc_html__('Siguiente:', 'divergentes') . '</span> <span class="nav-title">%title</span>',
							// 	)
							// );

							// If comments are open or we have at least one comment, load up the comment template.
							// if (comments_open() || get_comments_number()) :
							// 	comments_template();
							// endif;

						endwhile; // End of the loop.
						?>

                    </main>
            </div>
        </div>
    </div>
<?php
get_footer();
