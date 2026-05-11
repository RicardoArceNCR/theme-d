<?php

/*
* Template Name: vocesnicaragua-contenido
* Template Post Type: post
* @package WordPress
*/

get_header('vocesnicaragua');

?>
    <div class="body-background"></div>

    <a class="show-menu">
        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/menu.svg" alt="Mostrar menú">
    </a>

    <div class="section">
        <div class="container">
            <div class="columns is-mobile is-multiline is-centered">
                <div class="column is-10-mobile is-6-tablet is-4-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/main-logo.svg" alt="Voces de la tragedia educativa en Nicaragua">
                </div>
            </div>
        </div>
        <div class="container is-wide">
            <div class="columns is-mobile is-multiline is-centered">
                <div class="column is-12">
                    <div class="header-logos">
                        <div class="logo"><a href="https://100noticias.com.ni/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/100_noticias.svg" alt="100% Noticias" class="noticias"></a></div>
                        <div class="logo"><a href="https://nicaraguainvestiga.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/nicaragua_investiga.png" alt="Nicaragua Investiga" class="nicaragua"></a></div>
                        <div class="logo"><a href="https://www.divergentes.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/divergentes.png" alt="Divergentes" class="divergentes"></a></div>
                        <div class="logo"><a href="https://www.fuentesconfiables.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/fuentes_confiables.png" alt="Fuentes Confiables" class="fuentes"></a></div>
                        <div class="logo"><a href="https://lalupa.press/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/lupa.png" alt="La Lupa" class="lupa"></a></div>
                        <div class="logo"><a href="https://ondalocalni.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/onda_local.png" alt="Onda Local" class="onda"></a></div>
                        <div class="logo"><a href="https://ipnicaragua.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/informacion_puntual.png" alt="Información Puntual" class="puntual"></a></div>
                        <div class="logo"><a href="https://www.despacho505.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/despacho_505.png" alt="Despacho 505" class="despacho"></a></div>
                        <div class="logo"><a href="https://www.prensa.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/prensa.svg" alt="La Prensa" class="prensa"></a></div>
                        <div class="logo"><a href="https://www.connectas.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/connectas_blanco.svg" alt="Connectas" class="connectas"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container summary">
            <div class="columns is-mobile is-multiline is-centered">
                <div class="column is-12-mobile is-10-tablet is-8-desktop">
                    <p class="has-text-centered">La escalada represiva del régimen de Daniel Ortega ha afectado, entre otros ámbitos, a <strong>las universidades</strong>, que fueron el germen de las protestas contra el gobierno en 2018. Este especial multimedia rescata la <strong>voz silenciada</strong> de los protagonistas de la educación superior del país. Estudiantes, profesores, directivos, ex funcionarios y expertos en educación, muchos de ellos refugiados en el anonimato por temor a represalias, prestan su voz para <strong>contar el drama</strong> que se vive en las universidades nicaragüenses desde hace cuatro años.</p>
                </div>
            </div>
            <div class="columns is-mobile is-multiline is-cemtered">
                <div class="column is-12">
                    <p class="plug-phones">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/phones.svg" alt="Conecta tus audífonos">
                        CONECTA<br>TUS AUDÍFONOS
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="columns is-mobile is-multiline is-centered cards-wrapper">
                <div class="column is-6-mobile is-5-tablet is-3-desktop for-card">
                    <a href="#story01" rel="modal:open" class="open-story">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/1/1_0.jpg" alt="1. Represión: las ideas se matan">
                        <div class="card-title"><span>I</span>Represión: las ideas se matan</div>
                    </a>
                </div>
                <div class="column is-6-mobile is-5-tablet is-3-desktop for-card">
                    <a href="#story02" rel="modal:open" class="open-story">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/3/3_0.jpg" alt="2. Reconstrucción: las heridas que no cierran">
                        <div class="card-title"><span>II</span>Reconstrucción: las heridas que no cierran</div>
                    </a>
                </div>
                <div class="column is-6-mobile is-5-tablet is-3-desktop for-card">
                    <a href="#story03" rel="modal:open" class="open-story">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/5/5_0.jpg" alt="3. Clausura: fuga de cerebros">
                        <div class="card-title"><span>III</span>Clausura: fuga de cerebros</div>
                    </a>
                </div>
                <div class="column is-6-mobile is-5-tablet is-3-desktop for-card">
                    <a href="#story04" rel="modal:open" class="open-story">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/7/7_0.jpg" alt="4. Futuro: las aulas sandinistas">
                        <div class="card-title"><span>IV</span>Futuro: las aulas sandinistas</div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div id="story01" class="modal for-story story-01">
        <div class="bg-image"></div>
        <div class="story-wrapper">
            <div class="story">
                <div class="story-page">
                    <div class="media-layer">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/1/1_0.jpg" alt="Divergentes">
                    </div>
                    <div class="content-layer">
                        <div class="card-title">¿Qué es lo que más recuerda de la represión de 2018 en las universidades?</div>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v1.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v2.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v3.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v4.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v5.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v6.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/2/2_0.jpg" alt="Divergentes">
                    </div>
                    <div class="content-layer">
                        <div class="card-title">¿Qué papel jugaron los estudiantes universitarios durante las protestas de 2018?</div>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v7.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v8.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v9.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v10.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v11.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v12.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page final-story">
                    <div class="content-layer">
                        <div class="columns is-mobile is-multiline">
                            <div class="column is-hidden-mobile is-6-tablet">
                                <a href="#" rel="modal:close">
                                    <div class="inner-story">
                                        <div class="inner-media">
                                            <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/0/0_0.jpg" alt="Regresar a portada">
                                        </div>
                                    </div>
                                    <div class="txt">Regresar a portada</div>
                                    <div class="icn"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/home.svg" alt="Regresar a portada"></div>
                                </a>
                            </div>
                            <div class="column is-8-mobile is-offset-2-mobile is-6-tablet has-text-centered">
                                <a href="#story02" rel="modal:open">
                                    <div class="inner-story">
                                        <div class="inner-media">
                                            <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/3/3_0.jpg" alt="Siguiente historia">
                                        </div>
                                        <div class="inner-content">
                                            <div class="inner-title">
                                                <span>II</span>
                                                Reconstrucción: las heridas que no cierran
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt">Siguiente historia</div>
                                    <div class="icn is-hidden-mobile"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/next.svg" alt="Siguiente historia"></div>
                                </a>
                                <a href="#" rel="modal:close" class="back-home is-hidden-tablet">Regresar a portada</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="story02" class="modal for-story story-02">
        <div class="bg-image"></div>
        <div class="story-wrapper">
            <div class="story">
                <div class="story-page">
                    <div class="media-layer">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/3/3_0.jpg" alt="Divergentes">
                    </div>
                    <div class="content-layer">
                        <div class="card-title">¿Por qué cree que el Gobierno de Ortega la emprendió contra las universidades?</div>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v13.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v14.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v15.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v16.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v17.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v18.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/4/4_0.jpg" alt="Divergentes">
                    </div>
                    <div class="content-layer">
                        <div class="card-title">¿Cuál es el rol de las universidades en un país como Nicaragua?</div>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v19.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v20.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v21.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v22.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v23.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v24.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page final-story">
                    <div class="content-layer">
                        <div class="columns is-mobile is-multiline">
                            <div class="column is-hidden-mobile is-6-tablet">
                                <a href="#" rel="modal:close">
                                    <div class="inner-story">
                                        <div class="inner-media">
                                            <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/0/0_0.jpg" alt="Regresar a portada">
                                        </div>
                                    </div>
                                    <div class="txt">Regresar a portada</div>
                                    <div class="icn"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/home.svg" alt="Regresar a portada"></div>
                                </a>
                            </div>
                            <div class="column is-8-mobile is-offset-2-mobile is-6-tablet has-text-centered">
                                <a href="#story03" rel="modal:open">
                                    <div class="inner-story">
                                        <div class="inner-media">
                                            <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/5/5_0.jpg" alt="Siguiente historia">
                                        </div>
                                        <div class="inner-content">
                                            <div class="inner-title">
                                                <span>III</span>
                                                Clausura: fuga de cerebros
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt">Siguiente historia</div>
                                    <div class="icn is-hidden-mobile"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/next.svg" alt="Siguiente historia"></div>
                                </a>
                                <a href="#" rel="modal:close" class="back-home is-hidden-tablet">Regresar a portada</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="story03" class="modal for-story story-03">
        <div class="bg-image"></div>
        <div class="story-wrapper">
            <div class="story">
                <div class="story-page">
                    <div class="media-layer">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/5/5_0.jpg" alt="Divergentes">
                    </div>
                    <div class="content-layer">
                        <div class="card-title">¿Por qué tuvo que exiliarse?</div>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v25.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v26.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v27.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v28.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v29.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v30.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/6/6_0.jpg" alt="Divergentes">
                    </div>
                    <div class="content-layer">
                        <div class="card-title">¿Qué efectos tiene el éxodo de docentes y estudiantes que se ha producido?</div>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v31.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v32.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v33.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v34.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v35.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v36.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page final-story">
                    <div class="content-layer">
                        <div class="columns is-mobile is-multiline">
                            <div class="column is-hidden-mobile is-6-tablet">
                                <a href="#" rel="modal:close">
                                    <div class="inner-story">
                                        <div class="inner-media">
                                            <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/0/0_0.jpg" alt="Regresar a portada">
                                        </div>
                                    </div>
                                    <div class="txt">Regresar a portada</div>
                                    <div class="icn"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/home.svg" alt="Regresar a portada"></div>
                                </a>
                            </div>
                            <div class="column is-8-mobile is-offset-2-mobile is-6-tablet has-text-centered">
                                <a href="#story04" rel="modal:open">
                                    <div class="inner-story">
                                        <div class="inner-media">
                                            <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/7/7_0.jpg" alt="Siguiente historia">
                                        </div>
                                        <div class="inner-content">
                                            <div class="inner-title">
                                                <span>IV</span>
                                                Futuro: las aulas sandinistas
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt">Siguiente historia</div>
                                    <div class="icn is-hidden-mobile"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/next.svg" alt="Siguiente historia"></div>
                                </a>
                                <a href="#" rel="modal:close" class="back-home is-hidden-tablet">Regresar a portada</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="story04" class="modal for-story story-04">
        <div class="bg-image"></div>
        <div class="story-wrapper">
            <div class="story">
                <div class="story-page">
                    <div class="media-layer">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/7/7_0.jpg" alt="Divergentes">
                    </div>
                    <div class="content-layer">
                        <div class="card-title">¿Cómo es la vida en las universidades de  Nicaragua hoy?</div>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v37.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v38.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v39.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v40.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v41.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v42.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/8/8_0.jpg" alt="Divergentes">
                    </div>
                    <div class="content-layer">
                        <div class="card-title">¿Qué futuro tiene la educación universitaria en Nicaragua?</div>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v43.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v44.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v45.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v46.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v47.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page">
                    <div class="media-layer">
                        <video src="https://alkimiko.sfo3.digitaloceanspaces.com/vocesnicaragua/stories/v48.mp4" playsinline></video>
                    </div>
                </div>
                <div class="story-page final-story">
                    <div class="content-layer">
                        <div class="columns is-mobile is-multiline">
                            <div class="column is-8-mobile is-offset-2-mobile is-6-tablet is-offset-3-tablet">
                                <a href="#" rel="modal:close">
                                    <div class="inner-story">
                                        <div class="inner-media">
                                            <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/0/0_0.jpg" alt="Regresar a portada">
                                        </div>
                                    </div>
                                    <div class="txt">Regresar a portada</div>
                                    <div class="icn"><img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/home.svg" alt="Regresar a portada"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section for-footer">
        <div class="container">
            <div class="columns is-mobile is-multiline is-centered">
                <div class="column is-12-mobile is-10-tablet is-8-desktop">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-underlay"></div>
    <div class="menu-wrapper">
        <div class="menu-header">
            <div class="menu-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/main-logo.svg" alt="Menú">
            </div>
            <a class="hide-menu">
                <img src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/media/images/close.svg" alt="Ocultar menú">
            </a>
        </div>
        <div class="menu-body">
            <ul class="menu">
                <li><a class="menu-link" href="#story01" rel="modal:open">I. Represión: las ideas se matan</a></li>
                <li><a class="menu-link" href="#story02" rel="modal:open">II. Reconstrucción: las heridas que no cierran</a></li>
                <li><a class="menu-link" href="#story03" rel="modal:open">III. Clausura: fuga de cerebros</a></li>
                <li><a class="menu-link" href="#story04" rel="modal:open">IV. Futuro: las aulas sandinistas</a></li>
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3c8af5357a.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/vocesnicaragua/js/script.js"></script>
<?php //get_footer(); ?>