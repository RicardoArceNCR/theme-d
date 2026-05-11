<?php
/**
 * Section Theme Settings witch ACF Pro
 */

if ( function_exists( 'register_field_group' ) ) {
	add_action( 'init', 'register_field_group_init');
	function register_field_group_init(){
		$dir = new DirectoryIterator( plugin_dir_path( __FILE__ ) . '../acf-json/' );
		foreach( $dir as $file )
		{
			// var_dump( $file );
			if ( !$file->isDot() && 'json' == $file->getExtension() )
			{
				$array = json_decode( file_get_contents( $file->getPathname() ), true );
				$welcome_fields = apply_filters( 'Fields' , $array );
				register_field_group( $welcome_fields );
			}
		}
	}
}

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => 'Ajustes del Tema ',
		'menu_title' => 'Divergentes',
		'menu_slug'  => 'theme-settings-divergentes',
		'capability' => 'edit_posts',
		'icon_url'   => 'dashicons-admin-generic',
		'redirect'   => false,
        'parent_slug' => '',
        'autoload' => true
	) );

	acf_add_options_sub_page( array(
		'page_title'  => 'Notas Principales',
		'menu_title'  => 'Portada',
		'menu_slug'   => 'theme-settings-divergentes-front',
		'parent_slug' => 'theme-settings-divergentes',
	) );
	// Add sub page.
	 acf_add_options_sub_page(array(
		'page_title'  => __('Sección Covid'),
		'menu_title'  => __('Covid'),
		'menu_slug'   => 'theme-settings-divergentes-covid',
		'parent_slug' => 'theme-settings-divergentes',
	));

     // Pagina de config Autores
    acf_add_options_sub_page(array(
        'page_title'  => __('Autores'),
        'menu_title'  => __('Autores'),
        'menu_slug'   => 'theme-settings-divergentes-autores',
        'parent_slug' => 'theme-settings-divergentes',
    ));
}

// Función para recoger los datos del textarea de la página de opciones y autorrellenar el select
function oaf_acf_cargar_lista_opciones( $field ) {

    // borramos las opciones del select por si hay algo
    $field['choices'] = array();

    // guardamos en $opciones el campo textarea
    //$opciones = get_field('choices', 'option', false);

    // Check rows existexists.
    if( have_rows('autor_grupo', 'option') ):

        // Loop through rows.
        $count = 0;
        while( have_rows('autor_grupo', 'option') ) : the_row();

            // Load sub field value.
            $sub_value = get_sub_field('autor_nombre');
            $field['choices'][ $count ] = $sub_value;
            // Do something...

            $count++;
            // End loop.
        endwhile;
        // Do something...
    endif;

    // cada línea en un campo del array
    //$opciones = explode("\n", $opciones);

    // Elminiar los espacios en blanco
    //$opciones = array_map('trim', $opciones);
    // recorrer el array para y añadir al campo 'opciones'
    /*if( is_array($opciones) ) {

        foreach( $opciones as $opcion ) {
            $field['post_autor'][ $opcion ] = $opcion;
        }
    }*/

    return $field;
}

add_filter('acf/load_field/name=post_autor', 'oaf_acf_cargar_lista_opciones');
