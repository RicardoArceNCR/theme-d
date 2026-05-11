<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package divergentes
 */

if ( ! function_exists( 'divergentes_post_title' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function divergentes_post_title($before = '', $after = '', $echo = true) {

        $title = get_field( "titulo_portada" ) ? get_field( "titulo_portada" ) : get_the_title();

        if ( strlen( $title ) == 0 ) {
            return;
        }

        $title = $before . $title . $after;

        if ( $echo ) {
            echo $title;
        } else {
            return $title;
        }

    }
endif;

if ( ! function_exists( 'divergentes_post_resumen_portada' ) ) :

    function divergentes_post_resumen_portada( $post = null, $echo = true ) {
        if ( is_bool( $post ) ) {
            _deprecated_argument( __FUNCTION__, '2.3.0' );
        }

        $post = get_post( $post );
        if ( empty( $post ) ) {
            return '';
        }

        $resumen = get_field( "resumen_portada", $post->ID ) ? get_field( "resumen_portada", $post->ID ) :  get_the_excerpt($post);

        if ( $echo ) {
            echo $resumen;
        } else {
            return $resumen;
        }

    }
endif;

if ( ! function_exists( 'divergentes_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function divergentes_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( ' %s', 'post date', 'divergentes' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'divergentes_only_posted_by' ) ) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function divergentes_only_posted_by() {
        // New format
        if( have_rows('authors') ):
            $count = 0;
            $string = "";
            $separator = '';

            // Loop through rows.
            while( have_rows('authors') ) : the_row();
                if($count > 0){
                    $separator = ' | ';
                }

                $author = get_sub_field('user_credito');

                $string .= "{$separator} {$author} ";
                $count++;
            endwhile;

            printf(__('<div class="post_by">Por %1$s </div>', 'divergentes'),
                $string
            );
        else :
            $acf_user = get_field('user_credito');

            if ( $acf_user ) {
                print  '<div class="post_by">Por ' . $acf_user . '</div>' ;
            }
            else{
                $idAutor = get_the_author_meta( 'ID' );
                $autor = get_user_by( 'id', $idAutor );
                print  '<div class="post_by">Por ' . $autor->display_name . '</div>' ;
            }
            //echo "";
        endif;
    }
endif;

if ( ! function_exists( 'divergentes_posted_by' ) ) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function divergentes_posted_by($show_city = true) {

        // New format
        if( have_rows('authors') ):
            $count = 0;
            $string = "";
            $separator = '';

            // Loop through rows.
            while( have_rows('authors') ) : the_row();
                $author_field = get_sub_field('user_credito');

                // Verificar si el valor es un objeto WP_Term
                if (is_a($author_field, 'WP_Term')) {
                    $author = esc_html($author_field->name);
                } elseif (is_string($author_field)) {
                    $author = esc_html($author_field);
                } else {
                    $author = ''; // Valor por defecto
                }

                $v_ciudad = ''; // Inicializa la variable antes de su uso
                $v_twitter_url = '';

                // Twitter del autor
                if(get_sub_field("autor_twitter")) {
                    $v_twitter = esc_html(get_sub_field("autor_twitter"));
                    $v_twitter_url = '<a class="autor_twitter-link" href="https://twitter.com/'.$v_twitter.'">(@'.$v_twitter.')</a>';
                }

                // Ciudad del autor
                if($show_city && get_sub_field("autor_ciudad")) {
                    $v_ciudad = " | " . esc_html(get_sub_field("autor_ciudad"));
                }

                // Añadir el separador si no es el primer autor
                if($count > 0){
                    $separator = ' | ';
                }

                $string .= "{$separator} {$author} {$v_twitter_url} {$v_ciudad}";
                $count++;
            endwhile;

            printf(__('<p class="entry-meta autor-v2 mb-0"><b>Por %1$s </b></p>', 'divergentes'),
                $string
            );

        else :
            // Single author fallback
            $acf_user = get_field('user_credito');

            // Verificar si el valor es un objeto WP_Term
            if (is_a($acf_user, 'WP_Term')) {
                $acf_user = esc_html($acf_user->name);
            }

            $acf_usertwitter = get_field('autor_twitter');

            if ( $acf_user ) {
                print  '<b>' . esc_html($acf_user) . '</b>' ;
            }

            if ($acf_usertwitter) {
                print  ' <b><a href="https://twitter.com/'. esc_html($acf_usertwitter) . '" class="autor_twitter-link">(' . '@' . esc_html($acf_usertwitter) . ')</a></b>' ;
            }

        endif;
    }
endif;

if ( ! function_exists( 'divergentes_posted_by_id' ) ) :
    /**
     * "Theme posted by and on date" pattern
     *
     * @since v1.0
     */
    function divergentes_posted_by_id($post_ID) {

        if( have_rows('authors', $post_ID) ):
            $count = 0;
            $string = "";
            $separator = '';

            // Loop through rows.
            while( have_rows('authors', $post_ID) ) : the_row();
                if($count > 0){
                    $separator = ' | ';
                }

                $author = get_sub_field('user_credito');
                $v_twitter_url = '';
                if(get_sub_field( "autor_twitter" )){
                    $v_twitter = get_sub_field( "autor_twitter" );
                    $v_twitter_url = '<small> <a href="https://twitter.com/'.$v_twitter.'">(@'.$v_twitter.')</a></small>';
                }
                if(get_sub_field( "autor_ciudad" )){
                    $v_ciudad = " | " . get_sub_field( "autor_ciudad" );
                    //$v_twitter_url = '<small> <a href="https://twitter.com/'.$v_twitter.'">(@'.$v_twitter.')</a></small>';
                }

                $string .= "{$separator} {$author} {$v_twitter_url} {$v_ciudad}";
                $count++;
            endwhile;

            printf(__('<h5 class="mt-0">Por %1$s </h5>', 'divergentes'),
                $string
            );
        else :
            /*printf(__('<h5 class="mt-0">Por %1$s </h5>', 'divergentes'),
                get_the_author()
            );*/
        endif;
    }
endif;

if ( ! function_exists( 'divergentes_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function divergentes_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'divergentes' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'divergentes' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'divergentes' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'divergentes' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'divergentes' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'divergentes' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;
if ( ! function_exists( 'divergentes_post_thumbnail' ) ) :
    /**
     * Displays an optional post thumbnail or video.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function divergentes_post_thumbnail() {
        // Obtener la URL del video desde el campo personalizado de ACF
        $video_url = get_field('video_destacado_post');

        // Mostrar el video si está disponible, independientemente de la imagen destacada
        if ( $video_url ) {
            ?>
            <div class="post-thumbnail mb-5">
                <?php
                $thumbnail_url_video = wp_get_attachment_image_url(get_post_thumbnail_id(), 'post-large');
                ?>
                <video poster="<?php echo esc_url($thumbnail_url); ?>" src="<?php echo esc_url( $video_url ); ?>" class="img-fluid w-100" muted="" loop="" autoplay="" playsinline=""></video>
                <div class="container">
                    <figcaption class="fotos"><?php the_field('foto_credito'); ?></figcaption>
                </div>
            </div><!-- .post-thumbnail -->
            <?php
        } elseif ( has_post_thumbnail() ) {

            // Si no hay video pero hay una imagen destacada, mostrar la imagen
            ?>
            <div class="post-thumbnail mb-5">
                <?php the_post_thumbnail('post-large', ['class' => 'img-fluid']); ?>
                <div class="container">
                    <figcaption class="fotos"><?php the_field('foto_credito'); ?></figcaption>
                </div>
            </div><!-- .post-thumbnail -->
            <?php
        }

        // Para las vistas que no son singulares, mantener la imagen destacada como estaba
        if ( ! is_singular() && has_post_thumbnail() ) :
            ?>
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail(
                    'post-thumbnail',
                    array(
                        'alt' => the_title_attribute(
                            array(
                                'echo' => false,
                            )
                        ),
                    )
                );
                ?>
            </a>
        <?php
        endif;
    }
endif;


if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

if ( ! function_exists( 'divergantes_article_and_its_categories' ) ) :
    /**
     * "Categories the post" pattern
     *
     * @since v1.0
     */
    function divergantes_article_and_its_categories($categories) {
        $categoriesOrder = [];
        foreach ($categories as $category){
            if($category->parent < 1 || $category->parent == "" || $category->parent == null)
                $categoriesOrder['parent'][] = $category;
            else
                $categoriesOrder['children'][] = $category;
        }
        return $categoriesOrder;
    }
endif;

if ( ! function_exists( 'divergentes_antetitulo' ) ) :

    function divergentes_antetitulo() {
        $antetitulo = get_field('post_antetitulo');

        if($antetitulo){
            printf(__('%1$s', 'divergentes'),
                $antetitulo
            );
        }else{
            printf(__('%1$s', 'divergentes'),
                ""
            );
        }
    }
endif;

// Breadcrumb
if (!function_exists('the_breadcrumb')) :
	function the_breadcrumb() {
		if (!is_home()) {
			echo '<nav class="breadcrumb mb-4 mt-2 bg-light py-2 px-3 small rounded">';
			echo '<a href="' . home_url('/') . '">' . ('<i class="fas fa-home"></i>') . '</a><span class="divider">&nbsp;/&nbsp;</span>';
			if (is_category() || is_single()) {
				the_category(' <span class="divider">&nbsp;/&nbsp;</span> ');
				if (is_single()) {
					echo ' <span class="divider">&nbsp;/&nbsp;</span> ';
					the_title();
				}
			} elseif (is_page()) {
				echo the_title();
			}
			echo '</nav>';
		}
	}
	add_filter('breadcrumbs', 'breadcrumbs');
endif;
// Breadcrumb END

// Lista notas relacionas de post
if ( ! function_exists( 'divergentes_post_related' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function divergentes_post_related($before = '', $after = '', $echo = true) {

        $posts_relacionados = [];

        if (!get_field('posts_notas_relacionadas'))
            echo  '';

        $index = 0;
        while(has_sub_field('posts_notas_relacionadas')){

            $post = get_sub_field('post');

            $posts_relacionados[$index] = '<li><a class="post_by" href="'. get_permalink($post) .'"
                           title="'. $post->post_title .'">
                            '.$post->post_title .'
                        </a></li>';

            $index++;
        }

        echo '<ul class="mt-2 pl-3 related-post-home">'. implode('', $posts_relacionados) .'</ul>';



        /*$title = get_field( "titulo_portada" ) ? get_field( "titulo_portada" ) : get_the_title();

        if ( strlen( $title ) == 0 ) {
            return;
        }

        $title = $before . $title . $after;

        if ( $echo ) {
            echo $title;
        } else {
            return $title;
        }*/

    }
endif;

