<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package divergentes
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function divergentes_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'divergentes_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function divergentes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'divergentes_pingback_header' );
add_post_type_support( 'page', 'excerpt' );

add_image_size( 'portada_img', 380, 253 );

// Pagination Categories
if (!function_exists('bootscore_pagination')) :

	function bootscore_pagination($pages = '', $range = 2) {
		$showitems = ($range * 2) + 1;
		global $paged;
		if ($pages == '') {
			global $wp_query;
			$pages = $wp_query->max_num_pages;

			if (!$pages)
				$pages = 1;
		}

		if (1 != $pages) {
			echo '<nav aria-label="Page navigation" role="navigation">';
			echo '<span class="sr-only">Page navigation</span>';
			echo '<ul class="pagination justify-content-center ft-wpbs mb-4 pagination-divergentesv2">';


			if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
				echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(1) . '" aria-label="First Page">&laquo;</a></li>';

			if ($paged > 1 && $showitems < $pages)
				echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged - 1) . '" aria-label="Previous Page">&lsaquo;</a></li>';

			for ($i = 1; $i <= $pages; $i++) {
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems))
					echo ($paged == $i) ? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>' . $i . '</span></li>' : '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '"><span class="sr-only">Page </span>' . $i . '</a></li>';
			}

			if ($paged < $pages && $showitems < $pages)
				echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(($paged === 0 ? 1 : $paged) + 1) . '" aria-label="Next Page">&rsaquo;</a></li>';

			if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages)
				echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($pages) . '" aria-label="Last Page">&raquo;</a></li>';

			echo '</ul>';
			echo '</nav>';
			// Uncomment this if you want to show [Page 2 of 30]
			// echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">Page</span> '.$paged.' <span class="text-muted">of</span> '.$pages.' ]</div>';
		}
	}

endif;
//Pagination Categories END

if (!function_exists('divergentes_is_subcategory')) :
function divergentes_is_subcategory( $cat_id = NULL ): bool
{

    if ( !$cat_id )
        $cat_id = get_query_var( 'cat' );

    if ( $cat_id ) {

        $cat = get_category( $cat_id );
        if ( $cat->category_parent > 0 )
            return true;
    }

    return false;
}
endif;

add_filter( 'category_template', 'load_category_template' );

function load_category_template( $the_template ) {

    $taxonomy_name = 'category';
    $categories = get_term_by('name', single_cat_title( '', false ),$taxonomy_name);
    $term_id = $categories->term_id;

    if( divergentes_is_subcategory($term_id) ){
        if ($categories->parent)
            $term_id = $categories->parent;
    }

    $parent = get_term_by('id', $term_id,$taxonomy_name);

    if($parent->slug == "diver-check"){
        if ( file_exists( get_template_directory() . "/category-fact-checking.php" ) ) {
            return get_template_directory() . "/category-fact-checking.php";
        }
    }

    return $the_template;
}
function insert_div_before_first_paragraph($content) {
    // Solo aplicar esto en posts individuales.
    if (is_single()) {
        // Obtenemos el ID del post actual.
        $post_id = get_the_ID();

        // Obtiene el valor de los campos ACF.
        $nota_relacionada = get_field('version_traducida', $post_id);
        $nota_relacionada_2 = get_field('version_traducida2', $post_id);

        // Inicializa la variable $div que contendrá el contenido adicional.
        $div = '';

        // Comprueba si el campo nota_relacionada está rellenado.
        if ($nota_relacionada) {
            $related_post = get_post($nota_relacionada);
            $related_post_url = get_the_permalink($related_post);

            $div = '<div class="wp-block-button has-custom-font-size has-small-font-size">';
            $div .= '<a class="wp-block-button__link has-white-color has-text-color has-background wp-element-button" href="' . esc_url($related_post_url) . '" style="border-radius:50px;background-color:#ff003f"><em>Read in English</em></a>';
            $div .= '</div>';
        }

        // Comprueba si el campo nota_relacionada_2 está rellenado.
        if ($nota_relacionada_2) {
            $related_post_2 = get_post($nota_relacionada_2);
            $related_post_url_2 = get_the_permalink($related_post_2);

            $div = '<div class="wp-block-button has-custom-font-size has-small-font-size">';
            $div .= '<a class="wp-block-button__link has-white-color has-text-color has-background wp-element-button" href="' . esc_url($related_post_url_2) . '" style="border-radius:50px;background-color:#ff003f"><em>Leer en Español</em></a>';
            $div .= '</div>';
        }

        // Si hay contenido en $div, añadirlo al inicio del contenido.
        if (!empty($div)) {
            $content = $div . $content;
        }
    }

    return $content;
}

// Añadimos el filtro para modificar el contenido.
add_filter('the_content', 'insert_div_before_first_paragraph');


function update_nota_relacionada_2( $value, $post_id, $field ) {
    // No ejecutar en el loop de ACF de WordPress
    if( $GLOBALS['acf_field'] && $GLOBALS['acf_field']['key'] === $field['key'] ) {
        return $value;
    }

    // ID del post relacionado
    $post_id_to_update = $value;

    // Si hay un post relacionado
    if( $post_id_to_update ) {
        // Actualizar el campo nota_relacionada_2 del post relacionado
        update_field('version_traducida2', $post_id, $post_id_to_update);
    }

    return $value;
}

// Aplicar solo al campo ACF con el nombre 'nota_relacionada'
add_filter('acf/update_value/name=version_traducida', 'update_nota_relacionada_2', 10, 3);

function insertar_datos_estructurados() {
    if (is_single()) { // Asegúrate de que solo se agreguen en publicaciones individuales
        $post_data = get_post();
        $schema_article = array(
            "@context" => "http://schema.org",
            "@type" => "Article",
            "mainEntityOfPage" => array(
                "@type" => "WebPage",
                "@id" => get_permalink($post_data->ID)
            ),
            "headline" => get_the_title($post_data->ID),
            "description" => get_the_excerpt($post_data->ID),
            "datePublished" => get_the_date('c', $post_data->ID),
            "dateModified" => get_the_modified_date('c', $post_data->ID),
            "author" => array(
                "@type" => "Organization",
                "name" => "Divergentes"
            ),
            // Puedes agregar más campos según sea necesario
        );

        echo '<script type="application/ld+json">' . json_encode($schema_article, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
    }
}
add_action('wp_head', 'insertar_datos_estructurados');

// smartocto
function agregar_script_content_insights() {
    if (is_user_logged_in() || is_preview()) {
        return;
    }

    global $post;

    // Determina el tipo de página: 'article' para artículos, 'landing' para otras páginas
    $page_type = is_single() ? 'article' : 'landing';

    $domain_id = 2899;
    $postid = $post->ID;
    $maincontent = '.entry-content';
    $pubdate = get_the_date('c', $post);  // ISO 8601
    $title = get_the_title($post);

    // Autores utilizando el formato de `divergentes_posted_by`
    $authors = '';
    if (have_rows('authors', $postid)) {
        $authors_list = [];
        while (have_rows('authors', $postid)) {
            the_row();
            $author = get_sub_field('user_credito');
            if ($author) {
                $authors_list[] = $author;
            }
        }
        $authors = implode(', ', $authors_list);
    } else {
        $acf_user = get_field('user_credito', $postid);
        if ($acf_user) {
            $authors = $acf_user;
        }
    }

    $sections = wp_get_post_terms($postid, 'category', ['fields' => 'names']);
    $sections = implode(', ', $sections);
    $tags = wp_get_post_terms($postid, 'post_tag', ['fields' => 'names']);
    $tags = implode(', ', $tags);
    $access_level = 'free';
    $reader_type = 'anonymous';
    $article_type = 'news';

    ?>

    <script type="text/javascript">
        window._ain = {
            id: "<?php echo esc_js($domain_id); ?>",
            page_type: "<?php echo esc_js($page_type); ?>",
            postid: "<?php echo esc_js($postid); ?>",
            maincontent: "<?php echo esc_js($maincontent); ?>",
            title: "<?php echo esc_js($title); ?>",
            pubdate: "<?php echo esc_js($pubdate); ?>",
            authors: "<?php echo esc_js($authors); ?>",
            sections: "<?php echo esc_js($sections); ?>",
            tags: "<?php echo esc_js($tags); ?>",
            access_level: "<?php echo esc_js($access_level); ?>",
            article_type: "<?php echo esc_js($article_type); ?>",
            reader_type: "<?php echo esc_js($reader_type); ?>"
        };
        (function (d, s) {
            var sf = d.createElement(s);
            sf.type = 'text/javascript';
            sf.async = true;
            sf.src = (('https:' == d.location.protocol)
                ? 'https://d7d3cf2e81d293050033-3dfc0615b0fd7b49143049256703bfce.ssl.cf1.rackcdn.com'
                : 'http://t.contentinsights.com') + '/stf.js';
            var t = d.getElementsByTagName(s)[0];
            t.parentNode.insertBefore(sf, t);
        })(document, 'script');
    </script>

    <script>
        window.tentacles = {
            apiToken: '5tui2d6jxnrne4xqjm66x58tgqlbza31',
            pageType: "<?php echo esc_js($page_type); ?>"
        };
    </script>
    <script src="https://tentacles.smartocto.com/ten/tentacle.js"></script>
    <?php
}
add_action('wp_footer', 'agregar_script_content_insights');




