<?php

/**
 * divergentes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package divergentes
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '2.0.0');
}

if (!function_exists('divergentes_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function divergentes_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on divergentes, use a find and replace
		 * to change 'divergentes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('divergentes', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'divergentes' ),
		) );

        register_nav_menus( array(
            'primary-lateral' => __( 'Lateral Menu', 'divergentes' ),
        ) );

		/**
		 * Register Custom Navigation Walker
		 */
		if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
			// File does not exist... return an error.
			return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
		} else {
			// File exists... require it.
			require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'divergentes_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'divergentes_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function divergentes_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('la_prensa_mix_content_width', 960);
}
add_action('after_setup_theme', 'divergentes_content_width', 0);


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function divergentes_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'divergentes'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'divergentes'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'divergentes_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function divergentes_scripts()
{
	// Design System Tokens — generado desde Figma via Style Dictionary.
	// Cargar primero para que bootstrap-bridge y nosotros.css puedan heredar las variables.
	$tokens_file = get_stylesheet_directory() . '/design-system/tokens/build/tokens.css';
	wp_enqueue_style(
		'divergentes-design-tokens',
		get_stylesheet_directory_uri() . '/design-system/tokens/build/tokens.css',
		array(),
		file_exists( $tokens_file ) ? filemtime( $tokens_file ) : _S_VERSION
	);

	wp_enqueue_style('divergentes-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('divergentes-style', 'rtl', 'replace');
	wp_enqueue_style('gotham-font', get_template_directory_uri() . '/css/fonts/gothamp.css');
	wp_enqueue_style('payfair-font', get_template_directory_uri() . '/css/fonts/stylesheet.css');
	/*wp_enqueue_style('divergentes-css', get_template_directory_uri() . '/css/divergentes.css',array(),time());*/

	wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.min.css');
	wp_enqueue_style('vidbg-css', get_template_directory_uri() . '/css/vidbg.css');
	wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper.min.css');
	wp_enqueue_style('bootstrap_4', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_script('videobg-js', get_template_directory_uri() . '/js/vidbg.js', true);
	wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/wow.min.js', true);

	wp_enqueue_script('divergentes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    if ( is_page( array( '1548','3083','10624','194','168','9020','1975','200','15','183','2881','1157','8954','2511','5157','139','2521','1801','10160','130','142','4142','4089','1235','6847','2875','521','209','1445','2105','7438','205','8759','9037','10500','2892','464','136','177','2869','6691','171','2897','2890','9055','2494','794','133','145','155','174','3023','728','11301','164','10797','2463','7828','4692','518','3274','1872','160','29','9090','3938','9110','13677','2747','9777','2844','9100','186','2852','8944','3010','3170','1736','5489','189','541','180','197','1183','5159','30839' ) ) ) {
        wp_enqueue_style('divergentes-css', get_template_directory_uri() . '/css/divergentes.css',array(),time());
    }
    else {
        wp_enqueue_style('divergentes-css', get_template_directory_uri() . '/css/divergentesv2.css',array(),time());
    }
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'divergentes_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * ACF admin menu
 */
require get_template_directory() . '/inc/acf-admin-menu.php';

function bootstrap_pagination(\WP_Query $wp_query = null, $echo = true, $params = [])
{
	if (null === $wp_query) {
		global $wp_query;
	}

	$add_args = [];

	//add query (GET) parameters to generated page URLs
	/*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

	$pages = paginate_links(array_merge([
		'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
		'format'       => '?paged=%#%',
		'current'      => max(1, get_query_var('paged')),
		'total'        => $wp_query->max_num_pages,
		'type'         => 'array',
		'show_all'     => false,
		'end_size'     => 3,
		'mid_size'     => 1,
		'prev_next'    => true,
		'prev_text'    => __('« Atrás'),
		'next_text'    => __('Siguiente »'),
		'add_args'     => $add_args,
		'add_fragment' => ''
	], $params));

	if (is_array($pages)) {
		//$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination"><ul class="pagination">';

		foreach ($pages as $page) {
			$pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
		}

		$pagination .= '<li class="page-item"> <a class="page-link" href="https://www.divergentes.com/coronavirus-2020/">Ir a Portada</a></li></ul></div>';

		if ($echo) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}

/**
 * Notes:
 * AJAX:
 * - When used with wp_ajax (generate pagination HTML from ajax) you'll need to provide base URL (or it'll be admin-ajax URL)
 * - Example for a term page: bootstrap_pagination( $query, false, ['base' => get_term_link($term) . '?paged=%#%'] )
 *
 * Images as next/prev:
 * - You can use image as next/prev buttons
 * - Example: 'prev_text' => '<img src="' . get_stylesheet_directory_uri() . '/assets/images/prev-arrow.svg">',
 *
 * Add query parameters to page URLs
 * - If you need custom URL parameters on your page URLS, use the "add_args" attribute
 * - Example (before paginate_links() call):
 * $arg = [];
 * if (isset($_GET[ 'sort' ])) {
 *  $args[ 'sort' ] = (string)$_GET[ 'sort' ];
 * }
 * ...
 * 'add_args'     => $args,
 */

// Remove JetPack Related Posts
function jetpackme_remove_rp() {
    if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
        $jprp = Jetpack_RelatedPosts::init();
        $callback = array( $jprp, 'filter_add_target_to_dom' );
        remove_filter( 'the_content', $callback, 40 );
    }
}
add_filter( 'wp', 'jetpackme_remove_rp', 20 );

function pine_jetpack_archive_no_related_posts( $options ) {
    if (is_single(array('2077', '2085', '2095', '2072', '2589', '2694', '2652', '2542', '2560', '6631', '6284', '6735', '6542', '7390', '7415', '7343', '7379', '7354','10544','16811', '18332', '19063','19309', '19766', '20741', '21015', '21360', '21691','22028','23403','24012','24503', '24412','25421')) ) {
        $options['enabled'] = false;
    }
    return $options;
}

add_filter( 'jetpack_relatedposts_filter_options', 'pine_jetpack_archive_no_related_posts' );


function new_podcast_archive_title($title){

    if ( is_post_type_archive('podcast') ){
        $title = 'Podcasts';
        return $title;
    }

    return $title;
}

//add_filter('jetpack_photon_development_mode', '__return_true');

add_filter( 'pre_get_document_title', 'new_podcast_archive_title', 9999 );

add_image_size('medium-secundarias', 350, 230, array('center', 'center'));
add_image_size( 'divergentesv2-img', 690, 434, array('center', 'center'));
/*add_image_size( 'portada-destacada', 690, 434, array('center', 'center'));*/

add_theme_support( 'align-wide' );

function rnz_elementor_get_field( $id, $record )
{
    $fields = $record->get_field( [
        'id' => $id,
    ] );

    if ( empty( $fields ) ) {
        return false;
    }

    return current( $fields );
}

function rnz_elementor_forms_validation( $record, $ajax_handler ) {

    // Remove spaces before and after the text, if any, and verify that it is not an empty entry.
    if( $field = rnz_elementor_get_field( 'name', $record ) )
    {
                $ajax_handler->add_response_data( 'nombreqr', $field['value'] );
    }
}
add_action( 'elementor_pro/forms/validation', 'rnz_elementor_forms_validation', 10, 2 );


function qr_code_invitacion($atts,$record) {

    return '<img src=\"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' .$field['value']. '\" />';
}
add_shortcode('invitacion', 'qr_code_invitacion');

function update_alt_tags($content) {
    global $post;
    $post_title = $post->post_title;
    $pattern = '/alt=""/';
    $replacement = 'alt="' . $post_title . '"';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}
add_filter('the_content', 'update_alt_tags', 99999);



/**
 * Gets post cat slug and looks for single-[cat slug].php and applies it
 */
add_filter( 'single_template', 'load_single_template' );

function load_single_template( $the_template ) {
    foreach ( (array) get_the_category() as $cat ) {
        if ( file_exists( get_template_directory() . "/single-{$cat->slug}.php" ) ) {
            return get_template_directory() . "/single-{$cat->slug}.php";
        }
    }

    return $the_template;
}

if (!function_exists('divergentes_related_posts')) :
    function divergentes_related_posts( $content ) {
        $closing_p        = '</p>';
        $new_content = [];
        $paragraphs  = explode( $closing_p, $content );

        if (!get_field('posts_notas_relacionadas'))
            return $content;

        $posts_notas_relacionadas = get_field('posts_notas_relacionadas');
        $count = 0;
        $number = 2;
        $insert = 0;
        foreach ( $paragraphs as $index => $paragraph ) {

            if($count >= $number){
                if(isset($posts_notas_relacionadas[$insert]['post']->ID)) {
                    $post_relacionado = $posts_notas_relacionadas[$insert]['post'];
                    $new_content[$index] = '<p>Lea Además: <a href="' . get_permalink($post_relacionado) .'" title="'. $post_relacionado->post_title .'">' . $post_relacionado->post_title . '</a></p>' .$paragraph;
                    $count = 0;
                    $insert++;

                }
            }else {
                if(!isset($new_content[$index]))
                    $new_content[$index] = $paragraph;
                else
                    $new_content[$index] = $new_content[$index] . $paragraph;
            }
            $count++;
        }

        return implode( '', $new_content );
    }

    //add_filter( 'the_content', 'divergentes_related_posts', 1 );
endif;

//Agregar newsletter
function incluir_archivo_en_contenido( $content ) {
    if ( is_single() && ! is_admin() ) {
        $divisor = '</p>'; // Asumiendo que quieres insertar después de un párrafo
        $partes = explode( $divisor, $content );
        $nuevo_contenido = '';

        foreach ( $partes as $index => $parte ) {
            $nuevo_contenido .= $parte . $divisor;
            if ( $index == 3 ) { // Después del segundo párrafo
                ob_start();
                include(get_template_directory() . '/template-parts/banner-suscribete.php'); // Asegúrate de cambiar la ruta
                //include(get_template_directory() . '/template-parts/newsletter.php'); // Asegúrate de cambiar la ruta
                $nuevo_contenido .= ob_get_clean();
            }
        }
        return $nuevo_contenido;
    }
    return $content;
}
add_filter( 'the_content', 'incluir_archivo_en_contenido' );

function featuredtoRSS($content) {
    global $post;
    if ( has_post_thumbnail( $post->ID ) ){
        $content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
    }
    return $content;
}

add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');


function procesar_suscripcion_mailchimp() {
    // Verificar el nonce para seguridad
    check_ajax_referer('suscripcion_nonce', 'nonce');

    // Obtener los datos enviados desde el frontend
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $listas = isset($_POST['listas']) ? json_decode(stripslashes($_POST['listas']), true) : [];

    if (empty($email) || empty($listas)) {
        wp_send_json_error('Email y listas son requeridos.');
        wp_die();
    }

    // Configuración de Mailchimp
    $api_key = defined('MAILCHIMP_API_KEY') ? MAILCHIMP_API_KEY : '';
    $datacenter = 'us8'; // datacenter
    $audiences = [
        'divergentesSemanal' => '1e41e8eca4',
        'vocesDivergentes' => '11bfdacfe9',
        'editorsEnglish' => 'f18bc7a142'
    ];

    foreach ($listas as $lista) {
        if (isset($audiences[$lista])) {
            $list_id = $audiences[$lista];

            // URL de Mailchimp desde settings
            $url = "https://{$datacenter}.api.mailchimp.com/3.0/lists/{$list_id}/members";

            // Datos para enviar
            $data = [
                'email_address' => $email,
                'status'        => 'subscribed' // o "pending" para confirmación por correo
            ];

            // Solicitud a Mailchimp usando wp_remote_post
            $response = wp_remote_post($url, [
                'headers' => [
                    'Authorization' => 'apikey ' . $api_key,
                    'Content-Type'  => 'application/json'
                ],
                'body'    => json_encode($data)
            ]);

            // Verificar si hubo un error en la solicitud
            if (is_wp_error($response)) {
                wp_send_json_error('Error al suscribir: ' . $response->get_error_message());
                wp_die();
            }

            $response_body = wp_remote_retrieve_body($response);
            $result = json_decode($response_body, true);

            if (isset($result['status']) && $result['status'] == 400) {
                wp_send_json_error($result['detail']);
                wp_die();
            }
        }
    }

    wp_send_json_success('¡Te has suscrito con éxito!');
    wp_die();
}

// Registrar la acción para manejar la suscripción
add_action('wp_ajax_nopriv_procesar_suscripcion_mailchimp', 'procesar_suscripcion_mailchimp');
add_action('wp_ajax_procesar_suscripcion_mailchimp', 'procesar_suscripcion_mailchimp');



function agregar_script_personalizado2() {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            console.log('Página completamente cargada');

            function checkIframeLoaded() {
                var iframe = document.getElementById('iframelista');

                if (iframe) {
                    console.log('Iframe encontrado, ajustando su altura');

                    try {
                        var iframeDocument = iframe.contentWindow.document;

                        // Usamos distintas formas de calcular la altura
                        var newHeight = Math.max(
                            iframeDocument.documentElement.scrollHeight, // Altura total del documento
                            iframeDocument.body.scrollHeight,            // Altura del body
                            iframeDocument.documentElement.offsetHeight, // Altura del contenedor del documento
                            iframeDocument.body.offsetHeight             // Altura del body incluyendo los márgenes
                        );

                        iframe.style.height = newHeight + 'px';
                        console.log('Altura del iframe ajustada a: ' + newHeight + 'px');
                    } catch (error) {
                        console.error('Error al ajustar la altura del iframe:', error);
                    }

                    return true;
                } else {
                    console.log('No se encontró el iframe aún, volviendo a intentar...');
                    return false;
                }
            }

            // Temporizador para verificar cada 500ms si el iframe está disponible
            var intervalId = setInterval(function() {
                var iframeLoaded = checkIframeLoaded();

                if (iframeLoaded) {
                    clearInterval(intervalId); // Detiene el temporizador si el iframe fue encontrado
                }
            }, 500);
        });
    </script>
    <?php
}
//add_action('wp_footer', 'agregar_script_personalizado2');

    //onesignal
function send_personal_push() {
    if (!isset($_GET['player_id']) || !isset($_GET['message'])) {
        echo "Error: No se recibió el Player ID o el mensaje.";
        wp_die();
    }

    $player_id = sanitize_text_field($_GET['player_id']);
    $message = sanitize_text_field($_GET['message']); // Mensaje desde Elementor

    $app_id = '0e4ccc8e-0096-4a15-a634-68b4c0b47c04'; // Reemplázalo con tu OneSignal App ID
    $rest_api_key = 'TU_ONESIGNAL_REST_API_KEY'; // Reemplázalo con tu API Key

    $fields = array(
        'app_id' => $app_id,
        'include_player_ids' => array($player_id),
        'contents' => array("en" => $message),
        'url' => get_permalink(), // Enlace al post actual
    );

    $fields = json_encode($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic ' . $rest_api_key));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
    wp_die();
}
add_action('wp_ajax_send_personal_push', 'send_personal_push');
add_action('wp_ajax_nopriv_send_personal_push', 'send_personal_push');

/**
 * DIVERGENTES — Página Nosotros
 * Include aislado para no tocar lógica original del theme.
 */
$nosotros_functions = get_template_directory() . '/functions-page-nosotros.php';

if ( file_exists( $nosotros_functions ) ) {
    require_once $nosotros_functions;
}