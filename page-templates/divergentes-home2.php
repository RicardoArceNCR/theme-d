<?php

/*
* Template Name: divergentes-home3
*
* @package WordPress
*/

get_header();


$Element = get_field('portada', 'option');
$postPrincipal = $Element["post_principal"];

if (($postPrincipal["titulo"] != "" && $postPrincipal["descripcion"] != "") || $postPrincipal["post"]) :

    $titulo = $postPrincipal["titulo"] == "" ? $postPrincipal["post"]->post_title : $postPrincipal["titulo"];
    $descripcion = $postPrincipal["descripcion"] == "" ? $postPrincipal["post"]->post_title : $postPrincipal["descripcion"];
    $portadaid = $postPrincipal["post"]->ID;
    $autorCredito = get_field('user_credito', $portadaid);

    ?>

    <section class="h_featured">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-lg-4 col-md-4 pt-1  offset-lg-1 nota-destacada-home">
                    <h1><a href="<?php echo esc_url(get_permalink($postPrincipal["post"]->ID)); ?>" class="home-h1"
                           title="<?= $titulo; ?>"><?= $titulo; ?></a></h1>
                    <p><?= $descripcion; ?></p>
                    <?php divergentes_posted_by_id($portadaid) ?>
                </div>
                <div class="col-lg-6 col-md-6 pt-1">
                    <?php
                    $thumbID = get_post_thumbnail_id($postPrincipal["post"]->ID);
                    $imgDestacada = wp_get_attachment_image_src($thumbID, 'full'); // thumbnail, medium, large o full
                    ?>
                    <a href="<?php echo esc_url(get_permalink($postPrincipal["post"]->ID)); ?>" title="<?= $titulo; ?>">
                        <img src="<?= $imgDestacada[0] ?>" class="img-fluid" alt=""/>
                    </a>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>

<section class="h_sredaccion mt-5">
    <div class="container">

        <?php if (have_rows('portada_secundarias', 'options')) : ?>
            <h2 style="
    font-family: 'Gotham Pro Bold';
"><b>Nicaragua</b></h2>
            <div class="row first pt-3">
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <?php while (have_rows('portada_secundarias', 'options')) : the_row();
                            $postobject = get_sub_field('portada_nota_secundaria_lista');
                            ?>
                            <?php $post = $postobject;
                            setup_postdata($post); ?>

                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>"
                                   class="images-home-divergentes">
                                    <?php $secundarias_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'portada_img'); ?>
                                    <img src="<?php echo esc_url($secundarias_featured_img_url) ?>" class="card-img-top"
                                         alt="<?php divergentes_post_title(); ?>">
                                </a>
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>"
                                   class="home-notas">
                                    <?php divergentes_post_title('<h2>', '</h2>'); ?>
                                </a>
                                <small>
                                    <?php
                                    divergentes_posted_by();

                                    ?>
                                </small>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-right">
                    <a href="https://www.divergentes.com/historias-recientes" class="btn btn-outline-danger">Leer todas
                        las historias</a>
                </div>
            </div>
        <?php endif; ?>
        <!--Notas Centroamerica-->
        <?php if (have_rows('portada_secundarias_centroamerica', 'options')) : ?>
            <h2 style="
    font-family: 'Gotham Pro Bold';
"><b>Centroamérica</b></h2>
            <div class="row first pt-3">

                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <?php while (have_rows('portada_secundarias_centroamerica', 'options')) : the_row();
                            $postobject = get_sub_field('portada_nota_secundaria_lista');
                            ?>
                            <?php $post = $postobject;
                            setup_postdata($post); ?>

                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>"
                                   class="images-home-divergentes">
                                    <?php $secundarias_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'portada_img'); ?>
                                    <img src="<?php echo esc_url($secundarias_featured_img_url) ?>" class="card-img-top"
                                         alt="<?php divergentes_post_title(); ?>">
                                </a>
                                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>"
                                   class="home-notas">
                                    <?php divergentes_post_title('<h2>', '</h2>'); ?>
                                </a>
                                <small>
                                    <?php
                                    divergentes_posted_by();

                                    ?>
                                </small>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-right">
                    <a href="https://www.divergentes.com/historias-recientes" class="btn btn-outline-danger">Leer todas
                        las historias</a>
                </div>
            </div>
        <?php endif; ?>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
			var swiper = new Swiper( '.mySwiper', {

				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				breakpoints: {
					1024: {
						slidesPerView: 3,
						spaceBetween: 40,
					},
					768: {
						slidesPerView: 3,
						spaceBetween: 30,
					},
					640: {
						slidesPerView: 2,
						spaceBetween: 20,
					},
					320: {
						slidesPerView: 1,
						spaceBetween: 10,
					},
				},
			} );
        </script>
        <style>
            .swiper-button-next, .swiper-container-rtl .swiper-button-prev, .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
                padding: 10px 22px;
                background: #FFFF;
                border-radius: 25px;
                -webkit-box-shadow: 2px 3px 5px 0px rgb(0 0 0 / 31%);
                -moz-box-shadow: 2px 3px 5px 0px rgba(0, 0, 0, 0.31);
                box-shadow: 2px 3px 5px 0px rgb(0 0 0 / 31%);
            }

            .swiper-button-next:after, .swiper-container-rtl .swiper-button-prev:after, .swiper-button-prev:after, .swiper-container-rtl .swiper-button-next:after {
                color: #333333;
                font-size: 15px;
                font-weight: bold;
            }
        </style>

</section>

<section class="bglanding-reto-masacre-home my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?php echo esc_url(get_page_link(1235)); ?>" class="link-home">
                    <h1 class="text-white" style="
    font-family: 'Gotham Pro Bold';
"><b>El reto tras la masacre</b></h1>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="">
                    <a href="<?php echo esc_url(get_page_link(4692)); ?>">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/06/thumb-aa.png"
                             class="img-fluid"/>
                    </a>
                    <div class="text-center">
                        <p>Los autores <br>intelectuales</p>
                        <a href="<?php echo esc_url(get_page_link(4692)); ?>" class="btn-retomascre">VER MÁS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <a href="<?php echo esc_url(get_page_link(4142)); ?>">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/05/thumb.png"
                             class="img-fluid"/>
                    </a>
                    <div class="text-center">
                        <p>El luto en la<br>soledad del exilio</p>
                        <a href="<?php echo esc_url(get_page_link(4142)); ?>" class="btn-retomascre">VER MÁS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <a href="<?php echo esc_url(get_page_link(4089)); ?>">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/05/icon-manualrepresion.png"
                             class="img-fluid"/>
                    </a>
                    <div class="text-center">
                        <p>El manual de la represión<br>de Daniel Ortega</p>
                        <a href="<?php echo esc_url(get_page_link(4089)); ?>" class="btn-retomascre">VER MÁS</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<section class="h_sredaccion container">
    <h2 style="
    font-family: 'Gotham Pro Bold';
"><b>Fact-Checking</b></h2>
    <hr>
    <div class="row ">
        <?php
        // WP_Query arguments
        $args = array(
            'nopaging' => true,
            'cat' => '307',
            'posts_per_page' => '3',
        );

        // The Query
        $factchecking = new WP_Query($args);

        // The Loop
        if ($factchecking->have_posts()) {
            while ($factchecking->have_posts()) {
                $factchecking->the_post();
                ?>
        <div class="col-md-4">
                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>"
                   class="images-home-divergentes">
                    <?php $secundarias_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'portada_img'); ?>
                    <img src="<?php echo esc_url($secundarias_featured_img_url) ?>" class="card-img-top"
                         alt="<?php divergentes_post_title(); ?>">
                </a>
                <a href="<?php the_permalink(); ?>" title="<?php divergentes_post_title(); ?>" class="home-notas">
                    <?php divergentes_post_title('<h2>', '</h2>'); ?>
                </a>
                <small>
                    <?php
                    divergentes_posted_by();

                    ?>
                </small>
        </div>
                <?php
            }
        } else {
            // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();

        ?>
    </div>
    <div class="row">
        <div class="col-12 text-right">
            <a href="https://www.divergentes.com/fact-checking/" class="btn btn-outline-danger">Leer más</a>
        </div>
    </div>
</section>
<section class=" mt-5 covid-homenew">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-homecovid.png"
                     class="mercenarios-no img-fluid"/>
                <h1 class="covid2020-sitetitle-home">CORONAVIRUS</h1>
                <p class="covid2020-sitesubtitle-home">Infórmate aquí de los últimos datos sobre la COVID-19 en
                    Nicaragua</p>
                <a href="https://www.divergentes.com/coronavirus-2020/" class="btn btn-lg btn-outline-danger mt-3">Ver
                    más</a>
            </div>
        </div>
    </div>
</section>

<section class="h_sredaccion my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1 style="
    font-family: 'Gotham Pro Bold';
"><b>Podcasts</b></h1>
            </div>
        </div>
        <div class="row ">

            <div class="col-md-3 mt-5">
                <a href="https://www.divergentes.com/podcast/nicaragua-espejismo-pais-seguro/"
                   title="Nicaragua, el espejismo del país “más seguro de Centroamérica”"><img
                            src="https://i1.wp.com/www.divergentes.com/wp-content/uploads/2020/11/fb-01.jpg?fit=380%2C253&ssl=1"
                            class="card-img-top"
                            alt="Nicaragua, el espejismo del país “más seguro de Centroamérica”"></a>
                <a href="https://www.divergentes.com/podcast/nicaragua-espejismo-pais-seguro/"
                   title="Nicaragua, el espejismo del país “más seguro de Centroamérica”" class="home-notas">
                    <h2 class="podcast">Nicaragua, el espejismo del país “más seguro de Centroamérica”</h2>
                </a>
            </div>
            <div class="col-md-3 mt-5">
                <a href="https://www.divergentes.com/podcast/femicidios-la-otra-pandemia-que-sufren-las-mujeres-en-nicaragua/"
                   title="Femicidios, la otra pandemia que sufren las mujeres en Nicaragua"><img
                            src="https://i1.wp.com/www.divergentes.com/wp-content/uploads/2020/11/fb-02.jpg?fit=380%2C253&ssl=1"
                            class="card-img-top" alt="Femicidios, la otra pandemia que sufren las mujeres en Nicaragua"></a>
                <a href="https://www.divergentes.com/podcast/femicidios-la-otra-pandemia-que-sufren-las-mujeres-en-nicaragua/"
                   title="Femicidios, la otra pandemia que sufren las mujeres en Nicaragua" class="home-notas">
                    <h2 class="podcast">Femicidios, la otra pandemia que sufren las mujeres en Nicaragua</h2>
                </a>
            </div>

            <div class="col-md-3 mt-5">
                <a href="https://www.divergentes.com/podcast/periodismo-bajo-ataque-en-nicaragua-represion-y-resistencia/"
                   title="Periodismo bajo ataque en Nicaragua, represión y resistencia
"><img src="https://i1.wp.com/www.divergentes.com/wp-content/uploads/2020/11/fb-04.jpg?fit=380%2C253&ssl=1"
       class="card-img-top" alt="Periodismo bajo ataque en Nicaragua, represión y resistencia
"></a>
                <a href="https://www.divergentes.com/podcast/periodismo-bajo-ataque-en-nicaragua-represion-y-resistencia/"
                   title="Periodismo bajo ataque en Nicaragua, represión y resistencia
" class="home-notas">
                    <h2 class="podcast">Periodismo bajo ataque en Nicaragua, represión y resistencia
                    </h2>
                </a>
            </div>
            <div class="col-md-3 mt-5">
                <a href="https://www.divergentes.com/podcast/violados-en-las-carceles-del-regimen-ortega-murillo/"
                   title="Violados en las cárceles del régimen Ortega-Murillo
"><img src="https://i1.wp.com/www.divergentes.com/wp-content/uploads/2020/11/fb-03.jpg?fit=380%2C253&ssl=1"
       class="card-img-top" alt="Violados en las cárceles del régimen Ortega-Murillo"></a>
                <a href="https://www.divergentes.com/podcast/violados-en-las-carceles-del-regimen-ortega-murillo/"
                   title="Violados en las cárceles del régimen Ortega-Murillo
" class="home-notas">
                    <h2 class="podcast">“A mí me violaron en una cárcel”. Las torturas sexuales del régimen
                        Ortega-Murillo</h2>
                </a>
            </div>


        </div>
</section>
<!--<section class="presidenciables-home">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-3">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_1.jpg" class="img-fluid"/>
                    </div>
                    <div class="col-3">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_2.jpg" class="img-fluid"/>
                    </div>
                    <div class="col-3">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_3.jpg" class="img-fluid"/>
                    </div>
                    <div class="col-3">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_4.jpg" class="img-fluid"/>
                    </div>
                    <div class="col-3 offset-1">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_5.jpg" class="img-fluid"/>
                    </div>
                    <div class="col-3">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_6.jpg" class="img-fluid"/>
                    </div>
                    <div class="col-3">
                        <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_7.jpg" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <div class="presidenciables-home-logos">
                    <img src="<?php /*echo get_template_directory_uri(); */?>/img/presidenciables/logo_presidenciables.svg"
                         alt="Logo Presidenciables" class="img-fluid logo-presidenciables-home"/>
                    <p>
                        <a href="<?php /*the_permalink(3170) */?>" title="Presidenciables" class="btn-presidenciables">VER
                            MÁS</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>-->

<section class="h_boletin mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>¿Te gustaría conocer mejor nuestro periodismo?</h1>
                <div class="formulario">
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="https://divergentes.us8.list-manage.com/subscribe/post?u=36f1d044004de5b291dd6bdcf&amp;id=1e41e8eca4"
                              method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                              class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <h2><i>Suscríbete a nuestro boletín</i></h2>
                                <div class="form-row mb-2">
                                    <div class="mc-field-group col-6">
                                        <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME"
                                               placeholder="Nombres">
                                    </div>
                                    <div class="mc-field-group col-6">
                                        <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME"
                                               placeholder="Apellidos">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="mc-field-group col-12">
                                        <input type="email" value="" name="EMAIL" class="required email form-control"
                                               id="mce-EMAIL" placeholder="Correo electrónico">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="mc-field-group col-12">
                                        <select id="mce-COUNTRY" name="COUNTRY" class="required form-control">
                                            <option value="Afghanistan">País</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean
                                                Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                                Republic of The
                                            </option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands
                                            </option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of
                                            </option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic
                                            </option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The
                                                Former Yugoslav Republic of
                                            </option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States
                                                of
                                            </option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                Occupied
                                            </option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                Grenadines
                                            </option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia
                                                and The South Sandwich Islands
                                            </option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands
                                            </option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>


                                    </div>
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                                          name="b_36f1d044004de5b291dd6bdcf_1e41e8eca4"
                                                                                                          tabindex="-1"
                                                                                                          value="">
                                </div>
                                <div class="clear"><input type="submit" value="Suscribirse" name="subscribe"
                                                          id="mc-embedded-subscribe" class="button btn-divergentes">
                                </div>
                            </div>
                        </form>
                    </div>

                    <script type='text/javascript'
                            src='<?php echo get_template_directory_uri(); ?>/js/local-mc-validate.js'></script>
                    <script type='text/javascript'>
						( function( $ ) {
							window.fnames = new Array();
							window.ftypes = new Array();
							fnames[0] = 'EMAIL';
							ftypes[0] = 'email';
							fnames[1] = 'FNAME';
							ftypes[1] = 'text';
							fnames[2] = 'LNAME';
							ftypes[2] = 'text';
							fnames[3] = 'ADDRESS';
							ftypes[3] = 'address';
							fnames[4] = 'PHONE';
							ftypes[4] = 'phone';
							fnames[5] = 'BIRTHDAY';
							ftypes[5] = 'birthday';
							fnames[8] = 'COUNTRY';
							ftypes[8] = 'text';
							/*
                             * Translated default messages for the $ validation plugin.
                             * Locale: ES
                             */
							$.extend( $.validator.messages, {
								required: 'Este campo es obligatorio.',
								remote: 'Por favor, rellena este campo.',
								email: 'Por favor, escribe una dirección de correo válida',
								url: 'Por favor, escribe una URL válida.',
								date: 'Por favor, escribe una fecha válida.',
								dateISO: 'Por favor, escribe una fecha (ISO) válida.',
								number: 'Por favor, escribe un número entero válido.',
								digits: 'Por favor, escribe sólo dígitos.',
								creditcard: 'Por favor, escribe un número de tarjeta válido.',
								equalTo: 'Por favor, escribe el mismo valor de nuevo.',
								accept: 'Por favor, escribe un valor con una extensión aceptada.',
								maxlength: $.validator.format( 'Por favor, no escribas más de {0} caracteres.' ),
								minlength: $.validator.format( 'Por favor, no escribas menos de {0} caracteres.' ),
								rangelength: $.validator.format( 'Por favor, escribe un valor entre {0} y {1} caracteres.' ),
								range: $.validator.format( 'Por favor, escribe un valor entre {0} y {1}.' ),
								max: $.validator.format( 'Por favor, escribe un valor menor o igual a {0}.' ),
								min: $.validator.format( 'Por favor, escribe un valor mayor o igual a {0}.' ),
							} );
						}( jQuery ) );
						var $mcj = jQuery.noConflict( true );
                    </script>
                    <!--End mc_embed_signup-->

                </div>
            </div>
        </div>

    </div>
</section>
<?php get_footer('home'); ?>

