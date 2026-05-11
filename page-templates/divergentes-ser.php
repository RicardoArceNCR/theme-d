<?php

/*
* Template Name: ser
 * Template Post Type: post, page
* @package WordPress
*/
get_header('ser');
?>

    <section class="ser" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
            <div class="row mt-38">
                <div class="col-md-6">
                    <img src="https://www.divergentes.com/wp-content/uploads/2022/06/palabra_serr.gif"
                         class="img-fluid logo-tdomesticas" alt="Voces Victimas" style="float: left"/>
                </div>
                <div class="col-md-6 texto-ser d-flex align-items-center">
                    <div>
                    <div class="linea-textoser"></div>
                    <p>SER es una serie de videos que cuenta cómo es vivir en Nicaragua bajo un contexto de dictadura, crisis económica y social desde diferentes perspectivas. En esta primera temporada, artistas, jóvenes, una persona indígena, una persona con discapacidad visual y una familia circense nos relatan cómo es vivir en Nicaragua, y las limitaciones que eso implica.</p>
                    </div>
                </div>
            </div>
            <div class="row videos-ser">
                <div class="col-md-4" id="bt-video-ser-artista" data-toggle="modal" data-target="#servideos"
                     data-back="bt-video-ser-circense" data-next="bt-video-ser-joven"
                     data-video="gU7IbpPpoBA"
                     data-content="Ser artista: En este primer capítulo, una bailarina y un músico nos cuentan desde sus experiencias cómo es ser artista en Nicaragua, donde la vocación se vuelve doblemente complicada. Sobre todo si el escaso apoyo gubernamental obedece a lealtades partidarias. Desde 2018, las y los artistas independientes han sufrido un cierre sin precedentes de los espacios culturales, mientras buscan con creatividad y recursos propios sobrevivir ante un país apático al arte.">
                        <img src="https://www.divergentes.com/wp-content/uploads/2022/06/serArtista.png" class="card-img-top" alt="...">
               <p>Ser artista</p>
                </div>
                <div class="col-md-4" id="bt-video-ser-joven" data-toggle="modal" data-target="#servideos"
                     data-back="bt-video-ser-artista" data-next="bt-video-ser-indigena"
                     data-video="x5NtGnDds4s"
                     data-content="Ser joven: En esta segunda entrega de la serie SER, te presentamos a dos jóvenes nicaragüenses, una docente y emprendedora, y un diseñador gráfico, que sortean día a día la incertidumbre de vivir en Nicaragua. Un país sumido en diversas crisis y donde las oportunidades de crecimiento profesional y personal para la juventud son escasas.">
                    <img src="https://www.divergentes.com/wp-content/uploads/2022/06/serJoven.png" class="card-img-top" alt="...">
                    <p>Ser joven</p>
                </div>
                <div class="col-md-4" id="bt-video-ser-indigena" data-toggle="modal" data-target="#servideos"
                     data-back="bt-video-ser-joven" data-next="bt-video-ser-ciego"
                     data-video="NkP1jnAueKc"
                     data-content="Ser indígena: Ramón Potosme se autoidentifica como indígena mangue o chorotega. A través del rescate de sus costumbres indígenas, resiste a la invisibilización y olvido estatal eterno de las comunidades indígenas en su zona.">
                    <img src="https://www.divergentes.com/wp-content/uploads/2022/06/serIndigena.png" class="card-img-top" alt="...">
                    <p>Ser indígena</p>
                </div>
            </div>
            <div class="row videos-ser">
                <div class="col-md-4 offset-md-2" id="bt-video-ser-ciego" data-toggle="modal" data-target="#servideos"
                     data-back="bt-video-ser-indigena" data-next="bt-video-ser-circense"
                     data-video="db7I2vZP5kc"
                     data-content="Ser ciego: Yader Guillén perdió la vista a los 17 años por una enfermedad hereditaria. Estudió Derecho y ahora es parte de la Junta Directiva de la Organización de Ciegos de Nicaragua Marisela Toledo. En este video nos cuenta su experiencia siendo ciego en Nicaragua, y las dificultades y carencias que enfrentan las personas con discapacidad en el país.">
                    <img src="https://www.divergentes.com/wp-content/uploads/2022/06/serCiego.png" class="card-img-top" alt="...">
                    <p>Ser ciego</p>
                </div>
                <div class="col-md-4" id="bt-video-ser-circense" data-toggle="modal" data-target="#servideos"
                     data-back="bt-video-ser-ciego" data-next="bt-video-ser-artista"
                     data-video="H0X2NzFbk9o"
                     data-content="Ser circense: En nuestro final de temporada de la serie SER, te presentamos cómo es vivir y trabajar en un circo local de Nicaragua. El circo infantil americano nos abrió sus puertas y algunos de sus integrantes nos cuentan que aunque quieran, no pueden dejar el circo, el lugar donde nacieron y se criaron, y que además aseguran que ser circense se lleva en la sangre.">
                    <img src="https://www.divergentes.com/wp-content/uploads/2022/06/serCircense.png" class="card-img-top" alt="...">
                    <p>Ser circense</p>
                </div>
            </div>

        </div>

    </section>
    <!-- Modal videos victimas -->
    <div class="modal fade modal-fullscreen2" id="servideos" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-vvictimas">
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9" id="iframe-youtube">
                        <!--<iframe id="reproductor-video" class="embed-responsive-item" width="560" height="315"
                                src="https://www.youtube.com/embed/gU7IbpPpoBA" title="YouTube video player"
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>-->
                    </div>
                    <div class="px-4">
                        <div class="row my-4">
                            <div class="col">
                                <button type="button" id="back-video" class="btn-ser">< ATRAS</button>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <button type="button" id="closed-video" class="btn-ser-cerrar">CERRAR &#10005;</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button type="button" id="next-video" class="btn-ser">SIGUIENTE ></button>
                            </div>
                        </div>
                        <div style="width: 100%;height: 1px;background: #ffffff"></div>
                        <div class="row">
                            <div class="col" id="text-container">
                                <p> En este primer capítulo, una bailarina y un músico nos cuentan desde sus experiencias cómo es ser artista en Nicaragua, donde la vocación se vuelve doblemente complicada. Sobre todo si el escaso apoyo gubernamental obedece a lealtades partidarias. Desde 2018, las y los artistas independientes han sufrido un cierre sin precedentes de los espacios culturales, mientras buscan con creatividad y recursos propios sobrevivir ante un país apático al arte.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer('ser'); ?>