<?php

/*
* Template Name: democracia-papel
*
* @package WordPress
*/

get_header('retomasacre');
?>

<section class="democracias-papel">
    <div class="container">
        <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
        <div class="row d-flex align-items-center">
            <div class="col-md-6 logo-text-democraciaspapel">
                <img src="<?php echo get_template_directory_uri(); ?>/img/democracia-papel/logo_democraciapapel2.svg" alt="Logo Democracia Papel"
                     class="img-fluid"/>
                <h1 style="opacity: 0;position: absolute">Democracias de papel</h1>
                <p class="mt-3">La democracia se extingue ante un autoritarismo que se ha quitado la máscara de forma generalizada,
                    al margen de la filiación política de sus gobernantes. Esta es la conclusión dramática y realista
                    del especial que presentamos bajo el título Democracia de papel, que recorre cuatro países de la
                    región, Nicaragua, El Salvador, México y Honduras.</p>
                <div class="row">
                    <div class="col-6"><a href="<?php echo esc_url( get_permalink(2542) ); ?>" class="bg-white btn-navjusticia">LEER MÁS</a></div>
                    <div class="col-6"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/democracia-papel/cliquea-democraciadepapel.svg" alt="Clickea aqui"
                                class="img-fluid float-right cliquea-prseidente"/></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row pd-democracia-papel">
                    <div class="col-6 text-center">
                        <a class="images-democracia-papel" href="<?php echo esc_url( get_permalink(2560) ); ?>">
                            <img src="https://www.divergentes.com/wp-content/uploads/2021/02/elpresi-nicaragua-2.png"
                                 class="democracias-papel-presi img-fluid" alt="El presidente Nicaragua"/>
                            NICARAGUA
                        </a>
                    </div>

                    <div class="col-6 text-center">
                        <a class="images-democracia-papel" href="<?php echo esc_url( get_permalink(2589) ); ?>">
                            <img src="https://www.divergentes.com/wp-content/uploads/2021/02/elpresi-salvador-2.png"
                                 class="democracias-papel-presi img-fluid" alt="Presidente Salvador"/>
                            EL SALVADOR
                        </a>
                    </div>
                    <div class="col-12 my-3"></div>
                    <div class="col-6 text-center">
                        <a class="images-democracia-papel" href="<?php echo esc_url( get_permalink(2652) ); ?>">
                            <img src="https://www.divergentes.com/wp-content/uploads/2021/02/elpresi-mexico.png"
                                 class="democracias-papel-presi img-fluid" alt="Presidente Mexico"/>
                            MÉXICO
                        </a>
                    </div>
                    <div class="col-6 text-center">
                        <a class="images-democracia-papel" href="<?php echo esc_url( get_permalink(2694) ); ?>">
                            <img src="https://www.divergentes.com/wp-content/uploads/2021/02/elpresi-honduras-3.png"
                                 class="democracias-papel-presi img-fluid" alt="Presidente Honduras"/>
                            HONDURAS
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">

            <div class="col-md-12 mt-5 footer-tdomesticas">
                <p>©️ TODOS LOS DERECHOS RESERVADOS. MANAGUA, NICARAGUA. FEBRERO 2021. Esta publicación puede ser
                    utilizada, total o parcialmente, con previa autorización de la dirección del medio, se deben
                    respetar los créditos de producción y adjuntar un enlace
                    a la publicación original. Envíe una solicitud a info@divergentes.com</p>
            </div>

        </div>
    </div>


</section>
<?php get_footer('retomasacre'); ?>
<script>
	$( window ).on( 'scroll', function() {
		if ($( window ).scrollTop() > 10) {
			$( 'header' ).addClass( 'bg-header' );
		} else {
			//remove the background property so it comes transparent again (defined in your css)
			$( 'header' ).removeClass( 'bg-header' );
		}
	} );

</script>