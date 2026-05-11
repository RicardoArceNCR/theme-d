<?php

/*
* Template Name: ira-regis
* Template Post Type: post
* @package WordPress
*/
get_header();
?>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
          rel="stylesheet">
    <style>
        .scd-intro h1 {
            font-family: 'Memphis';
            font-size: 40px;
            font-weight: 800;
            line-height: 47px;
            letter-spacing: -0.03em;
            text-align: center;
            color:#F67504;
        }

        .scd-intro {
            max-width: 660px;
            margin: 0 auto;
        }

        .scd-intro h1 span {
            font-family: 'Memphis';
            font-size: 64px;
            font-weight: bold;
            color: #F67504;
            letter-spacing: -0.03em;
            line-height: 97.92%;
        }

        .scd-intro h2 {
            font-family: "Red Hat Display", sans-serif !important;
            font-size: 25px;
            font-weight: 200 !important;
            line-height: 33px;
            letter-spacing: 0em;
            text-align: center;
            color: #262728;

        }

        .scd-intro p {
            font-family: "Red Hat Display", sans-serif;
            font-size: 19px !important;
            font-weight: 200;
            line-height: 27px;
            letter-spacing: 0.01em;
            text-align: center;
            color: #6F6F6F !important;
        }

        .scd-intro-creditos {
            font-family: "Red Hat Display", sans-serif;
            font-size: 12px;
            font-weight: 500;
            line-height: 16px;
            letter-spacing: 0.02em;
            text-align: center;
            color: #090909;

        }

        .scd-intro-fecha {
            font-family: "Red Hat Display", sans-serif;
            font-size: 11px;
            font-weight: 500;
            line-height: 15px;
            letter-spacing: 0.02em;
            text-align: center;
            color: #908F8F;;

        }

        .scd-contenido {
            max-width: 800px;
        }

        .scd-contenido h2 {
            font-family: 'Memphis';
            font-size: 38px;
            font-weight: 800;
            line-height: 45px;
            letter-spacing: -0.03em;
            text-align: center;

        }

        .scd-contenido h3 {
            font-family: "Red Hat Display", sans-serif;
            font-size: 25px;
            font-weight: 300;
            line-height: 33px;
            letter-spacing: 0.02em;
            text-align: center;

        }

        .scd-asterisk {
            color: #adabaa;
            font-size: 48px !important;
            font-family: 'Martel';
            font-weight: 100;
            text-align: center;
            margin-top: 67px;
        }

        .scd-parallax-container .scd-contenido h2, .scd-parallax-container .scd-contenido h3 {
            color: #FFFFFF;

        }

        .scd-parallax-container {
            position: relative;
            height: 200vh; /* Ajusta la altura según sea necesario */
        }

        .scd-sticky-image {
            position: sticky;
            top: 0;
            z-index: 5;
        }

        .scd-overlay {
            position: absolute;
            top: 0;
            z-index: 6;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0;
            transition: opacity 0.3s ease-in-out; /* Suaviza la transición de opacidad */

        }

        .scd-text-content {
            position: absolute;
            top: 120vh;
            width: 100%;
            bottom: 0;
            z-index: 10;
            padding-top: 100px;
            height: fit-content;
        }

        .scd-text-content p {
            color: white !important;
        }

        .scd-quote {
            font-family: Martel;
            font-size: 19px !important;
            font-weight: 700;
            line-height: 27px;
            letter-spacing: 0em;
            text-align: left;
            color: #FFFFFF;
            background: #4d5159;
            padding: 10px;
        }

        #social-icons {
            cursor: pointer;
            text-align: center !important;
        }

        .scd-icon-whatsapp > .scd-bg-icon-whatsapp, .scd-icon-fb > .scd-bg-icon-fb, .scd-icon-x > .scd-bg-icon-x, .scd-icon-mail > .scd-bg-icon-mail {
            fill: #EEEEEE;
            transition: all 0.1s ease-in-out;
            stroke: #E0E0E0;
        }

        .scd-icon-whatsapp:hover > .scd-bg-icon-whatsapp, .scd-icon-fb:hover > .scd-bg-icon-fb, .scd-icon-x:hover > .scd-bg-icon-x, .scd-icon-mail:hover > .scd-bg-icon-mail {
            fill: #FFFFFF;
            stroke: #E0E0E0;
        }

        .scd-btn, .scd-btn2 {
            background: #D9D9D9;
            border-radius: 30px;
            font-family: Red Hat Display;
            font-size: 18px;
            font-weight: 600;
            line-height: 18px;
            letter-spacing: -0.01em;
            text-align: center;
            padding: 8px 38px;
            position: relative;
        }

        .scd-btn:hover, .scd-btn2:hover {
            background: #FFFFFF;
            border: 1px solid #D9D9D9;
        }

        .scd-btn svg {
            position: absolute;
            left: 5px;
            top: 0;
            bottom: 0;
            margin: auto 0;
        }

        .scd-btn2 svg {
            position: absolute;
            right: 5px;
            top: 0;
            bottom: 0;
            margin: auto 0;
        }


        @media (max-width: 767px) {
            .scd-intro h1 {
                color: #F67504;
                font-family: 'Memphis';
                font-size: 34px;
                line-height: 37px;
                letter-spacing: -0.03em;
            }

            .scd-intro h1 span {
                font-family: 'Memphis';
                font-size: 38px;
                line-height: 37px;
                letter-spacing: -0.03em;
            }

            .scd-intro h2 {
                font-size: 28px;
                line-height: 34px;
                letter-spacing: 0.01em;
            }

            .scd-intro p {
                font-size: 13px;
                font-weight: 400;
                line-height: 27px;
                letter-spacing: 0.01em;
                color: #6F6F6F !important;
                text-align: left;
            }

            .scd-intro-creditos {
                font-weight: 600 !important;
                font-size: 15px !important;
                line-height: 13px;
                letter-spacing: 0.02em;
                color: #090909;
                text-align: center !important;
            }

            .scd-intro-fecha {
                color: #b4b4b4 !important;
                font-size: 12px !important;
                font-weight: 500;
                line-height: 13px;
                letter-spacing: 0.02em;
                text-align: center !important;
            }

            .scd-contenido h2 {
                font-size: 29px;
                line-height: 35px;
                font-weight: 800;
                letter-spacing: -0.03em;
                text-align: center;
            }

            .scd-contenido h3 {
                font-size: 21px;
                font-weight: 300;
                line-height: 22px;
                letter-spacing: 0.02em;
                text-align: center;
            }

        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col text-center scd-intro">
                <img id="animatedElement" src="https://www.divergentes.com/wp-content/uploads/2024/02/js_2.jpg"
                     class="img-fluid"
                     alt="tunel">
                <a href="<?php echo esc_url( get_permalink(43300) ); ?>" title="" class="btn scd-btn2 my-4" >
                    <svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_189_774)">
                            <path d="M19.597 -0.000263663C19.6199 -0.000263663 19.6428 -0.000263663 19.6657 -0.000263663C19.8518 0.0617309 19.9096 0.191111 19.9091 0.379116C19.9046 2.24345 19.9064 4.10755 19.9064 5.97188V6.1253C20.6144 6.34632 21.3075 6.56285 21.9995 6.77894V21.8232C21.9573 21.8115 21.9211 21.8027 21.8856 21.7917C20.3999 21.3279 18.9142 20.8638 17.4284 20.4C15.3035 19.7367 13.1787 19.0732 11.0528 18.4124C11.0033 18.3971 10.9398 18.3998 10.8898 18.4157C10.618 18.5022 10.3489 18.597 10.078 18.6859C7.57596 19.5058 5.07393 20.3263 2.57099 21.1439C1.84761 21.3802 1.12125 21.608 0.395811 21.8385C0.214967 21.896 0.142537 21.8695 0.0249537 21.716C0.0189943 21.7082 0.00822159 21.7039 -0.000488281 21.6978C-0.000488281 16.659 -0.000488281 11.6199 -0.000488281 6.58105C0.0476452 6.46829 0.12718 6.39327 0.249577 6.35553C0.533106 6.26771 0.814802 6.17471 1.09673 6.08217C1.55514 5.9319 2.01287 5.78006 2.48274 5.62507V0.314876C5.13788 1.23289 7.77537 2.14461 10.4055 3.05387C10.6884 2.95796 10.9616 2.86429 11.2355 2.77287C13.4586 2.03208 15.6819 1.29107 17.9054 0.551848C18.4681 0.364741 19.0329 0.183474 19.5967 -0.000488281L19.597 -0.000263663ZM0.56657 21.2098C3.88595 20.1269 7.19066 19.0487 10.4928 17.9714V3.60418C7.17668 4.68594 3.87266 5.76366 0.56657 6.84205V21.2098ZM14.1388 15.5469C14.3571 15.0334 14.5723 14.5276 14.79 14.015C15.7999 14.3149 16.8018 14.6123 17.8078 14.911C17.9843 15.5408 18.1596 16.1669 18.3349 16.7926C18.8248 16.938 19.307 17.081 19.8053 17.2291C18.9348 14.1558 18.0707 11.1046 17.2077 8.05791C16.7236 7.91438 16.254 7.77534 15.7779 7.63428C14.7403 10.1287 13.7061 12.615 12.6685 15.1098C13.1633 15.2569 13.6472 15.4007 14.1388 15.5467V15.5469ZM11.1741 3.37777C11.1741 3.38608 11.1741 3.39439 11.1741 3.4027C13.8941 4.25086 16.6141 5.09902 19.3382 5.9483V0.662135C16.6097 1.56982 13.892 2.47391 11.1743 3.37799L11.1741 3.37777Z" fill="black"/>
                            <path d="M9.99324 25C9.82409 24.9787 9.65516 24.9542 9.48555 24.9362C8.12933 24.7925 6.84164 24.4122 5.61401 23.8381C5.26034 23.6727 4.92524 23.4686 4.58555 23.2754C4.43244 23.1885 4.39233 23.0386 4.46751 22.9025C4.53627 22.7781 4.67907 22.7374 4.83608 22.8028C4.90255 22.8304 4.96673 22.8643 5.02884 22.9007C6.33509 23.6678 7.74518 24.1496 9.25038 24.3616C11.1058 24.6229 12.8925 24.3695 14.6141 23.6512C15.1309 23.4355 15.6315 23.1898 16.1053 22.8929C16.1335 22.8751 16.1612 22.8565 16.1951 22.8345C15.9884 22.5005 15.7858 22.1727 15.568 21.821C16.3457 21.8794 17.0968 21.9358 17.8672 21.9937C17.6027 22.746 17.3428 23.4854 17.0744 24.2491C16.8747 23.9286 16.6891 23.6301 16.4981 23.3235C16.4026 23.3724 16.3097 23.414 16.2229 23.4652C15.1234 24.1128 13.9423 24.5555 12.6867 24.8023C12.2796 24.8823 11.864 24.9205 11.4526 24.9784C11.4242 24.9825 11.3967 24.9928 11.3687 25.0002H9.99347L9.99324 25Z" fill="black"/>
                            <path d="M2.14209 17.3401C2.51157 16.923 2.90145 16.5258 3.24068 16.0907C3.88017 15.2704 4.49055 14.4286 5.11262 13.5955C5.68174 12.8333 6.0707 11.9728 6.50688 11.1381C6.61988 10.9221 6.72371 10.7013 6.83098 10.4823C6.8484 10.4468 6.86261 10.4097 6.8782 10.3735C6.87132 10.3637 6.86468 10.3538 6.8578 10.3439C5.95839 10.6056 5.05875 10.8672 4.15613 11.13C4.14949 11.1741 4.13276 11.2125 4.14009 11.2462C4.1708 11.3879 4.08393 11.4463 3.9746 11.5027C3.69153 11.6491 3.38944 11.6696 3.08321 11.6256C2.76187 11.5795 2.551 11.3259 2.54045 10.9822C2.69746 10.9573 2.86134 10.9454 3.0172 10.9043C3.51367 10.7734 4.01059 10.6417 4.50109 10.491C5.03193 10.3279 5.55109 10.1269 6.08468 9.97327C6.46746 9.86298 6.80119 9.66239 7.15646 9.50089C7.43609 9.37376 7.72535 9.26684 8.01117 9.15296C8.0412 9.14105 8.07672 9.14218 8.12715 9.13477C8.13609 9.33805 8.15145 9.53167 8.06389 9.71203C7.53029 10.814 6.96392 11.8985 6.27538 12.9173C6.25269 12.951 6.23184 12.9861 6.20937 13.0216C6.22175 13.0328 6.2284 13.0429 6.23779 13.0467C7.1819 13.4393 8.12692 13.83 9.06919 14.2264C9.13131 14.2527 9.20167 14.314 9.22139 14.3738C9.28281 14.5615 9.3227 14.7563 9.36808 14.9488C9.3745 14.9757 9.36487 15.0065 9.36097 15.0588C9.27983 15.0429 9.20534 15.0359 9.13635 15.0132C8.7004 14.8708 8.29447 14.6653 7.88855 14.4566C7.31942 14.164 6.82296 13.7734 6.32008 13.3897C6.24513 13.3324 6.16651 13.2796 6.0801 13.2183C5.94739 13.4086 5.81949 13.5937 5.68976 13.7772C4.92192 14.8654 4.08027 15.8955 3.15335 16.858C3.07496 16.9396 2.98236 17.0079 2.90397 17.0894C2.69425 17.3082 2.42837 17.354 2.14209 17.3403V17.3401Z" fill="black"/>
                            <path d="M3.84961 8.37153C4.24385 8.53258 4.61379 8.43667 4.98648 8.32526C5.31745 8.22643 5.65324 8.14174 5.98834 8.05639C6.11784 8.02337 6.26018 7.99237 6.35966 8.11501C6.46441 8.24439 6.47151 8.40006 6.41856 8.55122C6.39083 8.63051 6.34659 8.71295 6.287 8.77135C5.83798 9.21138 5.28559 9.40837 4.66467 9.31448C4.22918 9.24866 3.89087 8.85513 3.84961 8.3713V8.37153Z" fill="black"/>
                            <path d="M15.3516 12.6321C15.7103 11.7826 16.0637 10.9454 16.4309 10.0759C16.7362 11.137 17.0326 12.166 17.3363 13.2208C16.667 13.0222 16.0172 12.8295 15.3516 12.6321Z" fill="black"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_189_774">
                                <rect width="22" height="25" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Read in English
                </a>
                <h1 class="text-center">“Ira regis”, la política medieval de los Ortega-Murillo: </h1>
                <h2>destierro para todos, incluidos los propios sandinistas</h2>
                <p>La oleada represiva desatada por la dictadura de Daniel Ortega y Rosario Murillo en Nicaragua ha alcanzado con particular saña a su “misma gente”; sandinistas que se han prestado a las tropelías y atropellos del régimen, como los que iban en el vuelo del 9 de febrero de 2023, desterrados por órdenes de los mismos jefes a quienes sirvieron tan fielmente</p>
                <p class="scd-intro-creditos">
                    Por Wilfredo Miranda Aburto <a href="https://twitter.com/PiruloAr">(@PiruloAr)</a>
                </p>
                <p class="scd-intro-fecha">8 de febrero 2024</p>
                <p class="text-center">
                    <svg width="304" height="32" viewBox="0 0 304 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="social-icons">
                            <g id="btn-whatsapp" class="scd-icon-whatsapp">
                                <rect id="bg-whatsapp" class="scd-bg-icon-whatsapp" x="154.913" width="71.4983"
                                      height="31.777" rx="3"/>
                                <g id="icon-whatsapp" clip-path="url(#clip0_92_852)">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M199.882 9.31103C198.139 7.57551 195.823 6.62024 193.354 6.62024C188.27 6.62024 184.13 10.7403 184.123 15.801C184.123 17.4199 184.548 19.0023 185.353 20.3951L184.042 25.1568L188.936 23.8807C190.284 24.6099 191.801 24.9964 193.347 24.9964C198.432 24.9964 202.579 20.8763 202.579 15.8156C202.579 13.3582 201.619 11.0539 199.875 9.31833M193.347 23.4505C191.969 23.4505 190.621 23.0786 189.442 22.3858L189.163 22.2181L186.262 22.9765L187.039 20.1617L186.855 19.87C186.086 18.6522 185.683 17.2522 185.683 15.8083C185.683 11.6008 189.127 8.17346 193.362 8.17346C195.413 8.17346 197.34 8.9683 198.783 10.4121C200.234 11.856 201.033 13.7738 201.025 15.8156C201.025 20.0232 197.582 23.4505 193.354 23.4505"
                                          fill="#002A42"/>
                                    <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M197.56 17.7261C197.333 17.6095 196.197 17.0553 195.985 16.9824C195.772 16.9094 195.619 16.8657 195.465 17.099C195.311 17.3251 194.871 17.8428 194.732 17.996C194.6 18.1491 194.461 18.171 194.234 18.0543C194.007 17.9376 193.259 17.697 192.38 16.9167C191.691 16.3115 191.23 15.5531 191.098 15.327C190.966 15.101 191.083 14.977 191.201 14.8603C191.303 14.7583 191.435 14.5905 191.545 14.4593C191.662 14.328 191.699 14.2332 191.772 14.0801C191.845 13.927 191.809 13.7957 191.75 13.679C191.691 13.5623 191.23 12.4321 191.039 11.9727C190.849 11.5278 190.666 11.5862 190.519 11.5789C190.387 11.5789 190.233 11.5716 190.08 11.5716C189.926 11.5716 189.677 11.6299 189.464 11.856C189.252 12.082 188.658 12.6435 188.658 13.7665C188.658 14.8895 189.486 15.9906 189.603 16.1438C189.721 16.2969 191.23 18.6158 193.545 19.6075C194.095 19.8409 194.527 19.9867 194.857 20.0888C195.406 20.2638 195.912 20.2419 196.307 20.1763C196.747 20.1107 197.67 19.6221 197.861 19.0825C198.051 18.5502 198.051 18.0908 197.992 17.9887C197.934 17.8939 197.78 17.8355 197.553 17.7189"
                                          fill="#002A42"/>
                                </g>
                            </g>
                            <g id="btn-X" class="scd-icon-x">
                                <rect id="bg-X" x="78.6182" y="0.5" width="69.1742" height="30.777" rx="2.5"
                                      class="scd-bg-icon-x"/>
                                <path id="X"
                                      d="M109.518 23.8328C117.011 23.8328 121.112 17.7286 121.112 12.4295C121.112 12.2526 121.112 12.0845 121.103 11.9076C121.895 11.3414 122.587 10.6336 123.136 9.8286C122.407 10.1471 121.625 10.3594 120.797 10.4567C121.634 9.9613 122.282 9.17395 122.587 8.23621C121.796 8.69624 120.932 9.03241 119.997 9.20934C119.25 8.43084 118.198 7.94427 117.02 7.94427C114.771 7.94427 112.945 9.74014 112.945 11.9518C112.945 12.2703 112.981 12.571 113.053 12.863C109.671 12.6949 106.666 11.1025 104.652 8.67854C104.301 9.27127 104.103 9.9613 104.103 10.6956C104.103 12.0845 104.823 13.3142 105.92 14.0307C105.254 14.013 104.625 13.8273 104.076 13.5265V13.5796C104.076 15.517 105.479 17.1447 107.341 17.5075C106.999 17.5959 106.639 17.649 106.271 17.649C106.01 17.649 105.749 17.6225 105.506 17.5782C106.028 19.1706 107.53 20.3295 109.311 20.3649C107.917 21.4353 106.163 22.0811 104.247 22.0811C103.914 22.0811 103.59 22.0635 103.275 22.0281C105.083 23.1604 107.215 23.8239 109.518 23.8239"
                                      fill="#002A42"/>
                            </g>
                            <g id="btn-fb" class="scd-icon-fb">
                                <rect id="bg-FB" width="71.4983" height="31.777" rx="3" class="scd-bg-icon-fb"/>
                                <g id="Capa_1" clip-path="url(#clip1_92_852)">
                                    <path id="Vector_3"
                                          d="M36.464 25.1568V16.7023H39.1963L39.6079 13.4104H36.464V11.3041C36.464 10.3541 36.7195 9.69862 38.0395 9.69862H39.7214V6.7528C39.4305 6.71598 38.4298 6.62024 37.2731 6.62024C34.846 6.62024 33.1925 8.15943 33.1925 10.9727V13.403H30.4531V16.695H33.1925V25.1495H36.4711L36.464 25.1568Z"
                                          fill="#002A42"/>
                                </g>
                            </g>
                            <g id="btn-mail" class="scd-icon-mail">
                                <rect id="bg-mail" x="233.031" width="70.1742" height="31.777" rx="3"
                                      class="scd-bg-icon-mail"/>
                                <path id="Vector_4"
                                      d="M277.163 6.62024H256.428C255.206 6.62024 254.217 7.66344 254.217 8.93731V22.8398C254.217 24.1213 255.213 25.1568 256.428 25.1568H277.163C278.374 25.1568 279.374 24.1255 279.374 22.8398V8.93731C279.374 7.66601 278.388 6.62024 277.163 6.62024ZM276.853 8.16495C276.401 8.63609 268.627 16.7397 268.359 17.0198C267.941 17.4574 267.386 17.6984 266.795 17.6984C266.205 17.6984 265.649 17.4574 265.23 17.0182C265.05 16.8303 257.361 8.81579 256.737 8.16495H276.853ZM255.691 22.5251V9.25243L262.061 15.8921L255.691 22.5251ZM256.738 23.6121L263.106 16.9822L264.19 18.1119C264.886 18.8415 265.811 19.2431 266.795 19.2431C267.779 19.2431 268.705 18.8415 269.4 18.1134L270.485 16.9822L276.853 23.6121H256.738ZM277.9 22.5251L271.53 15.8927L277.9 9.25243V22.5251Z"
                                      fill="#002A42"/>
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_92_852">
                                <rect width="18.5366" height="18.5366" fill="white"
                                      transform="translate(184.042 6.62024)"/>
                            </clipPath>
                            <clipPath id="clip1_92_852">
                                <rect width="9.26829" height="18.5366" fill="white"
                                      transform="translate(30.4531 6.62024)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </p>
            </div>
        </div>
    </div>
    <div class="container scd-contenido">
        <div class="row">
            <div class="col">
                <p><em>Antonio </em>sol&iacute;a creer que exilio y destierro eran lo mismo. Desde su posici&oacute;n privilegiada como funcionario en una instituci&oacute;n p&uacute;blica de Nicaragua, miraba c&oacute;mo su Gobierno, el de <a href="https://www.divergentes.com/19-de-julio-tirania-en-nicaragua/">Daniel Ortega y Rosario Murillo</a>, enviaba al ostracismo a centenares de personas consideradas opositoras.&nbsp;</p>
                <p>Este hombre no encontraba mayor diferencia entre si un periodista se exiliaba por su cuenta o si a una activista le impon&iacute;an el destierro. En resumidas cuentas, recuerda, era librarse de un golpista m&aacute;s... la imperceptible pero muy clara diferencia entre exilio y destierro la <a href="https://www.divergentes.com/la-ultima-cena-en-el-chipote-y-el-primer-amanecer-en-el-destierro/">entendi&oacute; la madrugada del 9 de febrero de 2023</a>, cuando los carceleros lo sacaron de su celda en El Chipote, lo montaron en un bus y lo condujeron hasta el aeropuerto internacional de Managua, donde un avi&oacute;n lo estaba esperando para sacarlo de su patria en contra de su voluntad.&nbsp;</p>
                <p>La sensaci&oacute;n lo cimbr&oacute; hasta la m&eacute;dula. La <a href="https://www.divergentes.com/podcast/destierro-nicaragua-ortega-murillo/">certidumbre del destierro</a> se materializ&oacute; en un minuto y no tuvo m&aacute;s opci&oacute;n que abordar y llorar. Llorar durante todo el vuelo.&nbsp;</p>
                <p>&ldquo;El papel con mi nombre no dec&iacute;a nada de ad&oacute;nde nos enviaban. Y en menos de un minuto tuve que aceptar que sal&iacute;a por mi voluntad de Nicaragua, aunque eso no era cierto. Acept&eacute; porque si no lo hac&iacute;a me devolver&iacute;an solo a El Chipote, esa c&aacute;rcel inmensa y horrible en la que asustan y toda verga. Entonces me vine llorando, porque supe de golpe que me estaban obligando a abandonar todo: mi pa&iacute;s, mi familia, mis amigos, mis cosas&hellip; todo quedaba atr&aacute;s&rdquo;, me dice este exfuncionario sandinista quien, en realidad, no se llama <em>Antonio</em>.&nbsp;</p>
                <p>Es s&oacute;lo un seud&oacute;nimo para evitar m&aacute;s retaliaciones <a href="https://www.divergentes.com/editorial-daniel-versus-ortega-una-votacion-sin-eleccion-entre-alambradas/">del r&eacute;gimen en el que crey&oacute; </a>fervientemente hasta su repentina ca&iacute;da en desgracia, el momento cuando lo arrestaron, el d&iacute;a en que sufri&oacute; la <em>&ldquo;ira regis&rdquo;</em> de los Ortega-Murillo. O traducido, seg&uacute;n el diccionario prehisp&aacute;nico del espa&ntilde;ol jur&iacute;dico, la ira de los reyes cuando expulsaban a sus vasallos de sus territorios a modo de pena impuesta por &ldquo;enemistad, delito o traici&oacute;n&rdquo;&hellip; todo bajo la total discrecionalidad del monarca. En el caso de <em>Antonio</em>, y el de los 221 presos pol&iacute;ticos expulsados, por pura persecuci&oacute;n pol&iacute;tica.&nbsp;</p>
                <p class="scd-asterisk"><strong>***</strong></p>
                <p>El destierro y el exilio son m&aacute;s viejos que Daniel Ortega, Rosario Murillo y el <a href="https://www.divergentes.com/ortega-y-murillo-celebran-el-aniversario-de-la-revolucion-con-un-petit-comite/">sandinismo</a>. Los antiguos griegos escrib&iacute;an en un trozo de terracota en forma de concha el nombre de las personas que consideraban malas &ldquo;para la soberan&iacute;a popular&rdquo;, una amenaza para el Estado o el tirano en potencia. As&iacute; los atenienses condenaban al ostracismo. Los romanos desterraban a quienes comet&iacute;an &ldquo;errores garrafales&rdquo; (de &iacute;ndole moral, como el adulterio) a las islas de la Pen&iacute;nsula It&aacute;lica, en el mar Tirreno. </p>
                <p>En la Edad Media, en las ciudades castellanas del siglo XV, el destierro constitu&iacute;a una de las peores humillaciones. Por eso el Cid siempre busc&oacute; el perd&oacute;n del rey Alfonso VI. Napole&oacute;n fue desterrado dos veces y, a medida que pasaban los siglos, el destierro adquiri&oacute; una dimensi&oacute;n, casi en su totalidad, de <a href="https://www.divergentes.com/policia-mas-persecucion-politica-que-seguridad-ciudadana/">persecuci&oacute;n pol&iacute;tica</a> e ideol&oacute;gica. </p>
                <p>Durante la &eacute;poca colonial en Latinoam&eacute;rica, el Consejo de Indias estableci&oacute; la figura legal del destierro para expulsar a aquellas personas que las &eacute;lites gobernantes consideraban indeseables o una amenaza para el orden sociopol&iacute;tico.&nbsp;</p>
                <p>Si bien es cierto que el exilio tambi&eacute;n es producto de la persecuci&oacute;n pol&iacute;tica, se da de manera voluntaria o empujado por las circunstancias. Sin embargo, el destierro es una pena impuesta. Esa es la imperceptible, pero muy clara diferencia entre exilio y destierro que <em>Antonio</em> entendi&oacute; llorando aquella madrugada frente al avi&oacute;n.&nbsp;</p>
                <p>Durante las dictaduras militares del Cono Sur, en especial la de Argentina y Chile, el destierro fue usado como pena contra opositores. Lo mismo ocurri&oacute; en M&eacute;xico, Uruguay, Venezuela y hasta en Honduras, donde el dictador <strong>​​</strong><a href="https://es.wikipedia.org/wiki/Tiburcio_Car%C3%ADas_Andino">Tiburcio Car&iacute;as Andino</a> le planteaba tres alternativas a sus disidentes: &ldquo;encierro, destierro o cementerio&rdquo;. El Alto Comisionado de las Naciones Unidas para los Refugiados (ACNUR) sostiene que el destierro, en la mayor&iacute;a de las ocasiones, es forzado por los Estados. Se &ldquo;ampara en la presunta comisi&oacute;n de un delito&rdquo; y el Estado decide &ldquo;tomar esta acci&oacute;n contra una persona de manera temporal o permanente&rdquo;.&nbsp;</p>
                <p>No obstante, como es el caso de Nicaragua, los destierros responden a la voluntad expresa de los Ortega-Murillo. El r&eacute;gimen sandinista <a href="https://www.divergentes.com/pais-por-carcel-asi-secuestra-el-regimen-de-ortega-los-pasaportes-de-los-nicaraguenses/">desarroll&oacute; una pol&iacute;tica de facto de destierro</a>, primero desde la Direcci&oacute;n General de Migraci&oacute;n y Extranjer&iacute;a, al impedir el ingreso o retorno de nicarag&uuml;enses cr&iacute;ticos. Luego, la polic&iacute;a comenz&oacute; a ofrecer libertad a los presos pol&iacute;ticos a cambio de irse de Nicaragua, como le sucedi&oacute; a <a href="https://www.divergentes.com/redada-contra-musicos-monroy/">varios artistas y productores musicales</a>.&nbsp;</p>
                <p>La siguiente etapa de esta pol&iacute;tica de Estado fue <a href="https://www.divergentes.com/despojo-nacionalidad-nicaragua-ortega-murillo/https://www.divergentes.com/despojo-nacionalidad-nicaragua-ortega-murillo/">despojar de la nacionalidad nicarag&uuml;ense a los 222 presos pol&iacute;ticos</a>, entre los que se encontraba <em>Antonio</em>, para de inmediato desterrarlos. Otros 94 nicarag&uuml;enses que, en su mayor&iacute;a ya exiliados, tambi&eacute;n fueron desnacionalizados.&nbsp;</p>
                <p>En ese inter&iacute;n, el 18 de enero pasado, <a href="https://www.divergentes.com/asamblea-nacional-del-regimen-ratifica-la-perdida-de-nacionalidad/">la Asamblea Nacional controlada por el oficialismo institucionaliz&oacute;</a> la p&eacute;rdida de nacionalidad para los declarados &ldquo;traidores a la patria&rdquo;, sin mencionar en la reforma del art&iacute;culo 21 de la Constituci&oacute;n Pol&iacute;tica el destierro que, de facto, viene aparejado con este delito pol&iacute;tico.&nbsp;</p>
                <p>Poco ha importado al r&eacute;gimen sandinista lo que dice la <a href="https://www.corteidh.or.cr/tablas/17229a.pdf">Convenci&oacute;n Americana sobre Derechos Humanos</a> en su art&iacute;culo 22, inciso 5: &ldquo;Que nadie puede ser expulsado del territorio del Estado del cual es nacional, ni ser privado del derecho a ingresar en el mismo&rdquo;. Es una pol&iacute;tica propia del medievo. La periodista y desterrada pol&iacute;tica <a href="https://www.divergentes.com/tag/sofia-montenegro/">Sof&iacute;a Montenegro</a> no tiene duda de ello.&nbsp;</p>
                <p>&ldquo;Esto es un viaje en la m&aacute;quina del tiempo, a la &eacute;poca premoderna y prepol&iacute;tica, porque es propio del Medioevo. Es una pol&iacute;tica absolutista y personalista. Ellos funcionan en plan monarca. Monarcas del absolutismo. Es realmente el retroceso, por lo menos, de 300 a&ntilde;os. Eso es lo que significa: que hemos retrocedido a tiempos anteriores a la Revoluci&oacute;n Francesa&rdquo;, me dice Montenegro, una intelectual aguerrida y comprometida, perseguida por los Ortega-Murillo desde antes de 2018, el a&ntilde;o de las <a href="https://www.divergentes.com/justicia-y-memoria-en-nicaragua/">protestas sociales</a> contra el r&eacute;gimen y que desencadenaron esta espiral represiva en la que expertos de Naciones Unidas <a href="https://www.divergentes.com/expertos-de-la-onu-determinan-que-ortega-y-murillo-comandaron-crimenes-de-lesa-humanidad/">han identificado la comisi&oacute;n de cr&iacute;menes de lesa humanidad</a>.&nbsp;</p>
                <p class="scd-asterisk"><strong>***</strong></p>
            </div>
        </div>
    </div>

    <div class="scd-parallax-container">
        <div class="scd-sticky-image" style="position: sticky; top: 0px; z-index: 5;">
            <picture>
                <source media="(max-width: 768px)"
                        srcset="https://www.divergentes.com/wp-content/uploads/2024/02/mobile_1.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/NUNC_2.jpg" class="img-fluid"
                     alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <p>En el vuelo <a href="https://www.divergentes.com/la-historia-de-aquel-inolvidable-vuelo-de-la-libertad/">del 9 de febrero iban 222 presos pol&iacute;ticos</a>. 222 historias entrecruzadas por la oposici&oacute;n al r&eacute;gimen Ortega-Murillo, pero tambi&eacute;n 222 historias diferentes de incertidumbre frente a la materializaci&oacute;n del destierro en Dulles, Washington, donde los excarcelados fueron alojados por el <a href="https://www.divergentes.com/regimen-ortega-murillo-no-ha-mostrado-seriedad-por-un-dialogo-genuino-asegura-departamento-de-estado/">Departamento de Estado</a> de Estados Unidos.&nbsp;</p>
                        <p>Recuerdo <a href="https://www.divergentes.com/la-ultima-cena-en-el-chipote-y-el-primer-amanecer-en-el-destierro/">que al siguiente d&iacute;a del aterrizaje</a>, en las afueras del hotel Westin, hac&iacute;a un d&iacute;a de invierno di&aacute;fano y enfriado a&uacute;n m&aacute;s por las r&aacute;fagas de viento. <em>Antonio </em>sal&iacute;a de vez en cuando de su habitaci&oacute;n a fumar, envuelto en un abrigo que la noche anterior encontr&oacute; en las donaciones dispuestas para ellos por organizaciones no gubernamentales y religiosas.&nbsp;</p>
                        <p>No hablaba con nadie, miraba con recelo a su alrededor; parec&iacute;a una presa en alerta, un ni&ntilde;o abandonado a una nueva realidad: el destierro en un pa&iacute;s que desde su juventud, durante su formaci&oacute;n como sandinista, le ense&ntilde;aron que era el enemigo, el imperio del yanqui opresor.</p>
                        <p>Casi un a&ntilde;o despu&eacute;s de esa ma&ntilde;ana, <em>Antonio </em>me cuenta que los tres d&iacute;as en el hotel fueron muy extra&ntilde;os: pas&oacute; de dormir en una cama de cemento en la celda a una habitaci&oacute;n en la que ten&iacute;a agua caliente, televisor y una cama confortable.&nbsp;</p>
                        <p>&ldquo;Pese a que era una habitaci&oacute;n de lujo, no pude dormir ninguna de las noches. En El Chipote nos hab&iacute;an acostumbrado a los sedantes. Eso fue: todo el mundo en vela. Despu&eacute;s de esos d&iacute;as que se nos acab&oacute; el hotel, lo primero fue buscar apoyo para medicinas porque soy un enfermo cr&oacute;nico. Me fui a San Francisco y tuve que aprender a movilizarme, a guiarme con el mapa, encontrar direcciones y a buscar trabajo&rdquo;, relata el hombre.&nbsp;</p>
                        <p>Era dif&iacute;cil. A pesar de que los latinos son casi el 15% de la poblaci&oacute;n de San Francisco, el espa&ntilde;ol no fluye tanto por sus empinadas calles como <em>Antonio</em> deseaba. &ldquo;Yo medio hablo ingl&eacute;s, me ayud&oacute; un poco, pero era bien dif&iacute;cil. Los primeros seis meses estuve viviendo de la ayuda que me daba mi familia y amigos. Lo m&aacute;s duro es la soledad, estar traumado y pasar pensando, atando cabos de qu&eacute; fue lo que me pas&oacute;, qui&eacute;nes me jodieron&hellip; es desgastante&rdquo;, dice.&nbsp;</p>
                        <p><em>Antonio</em> se mud&oacute; a Los &Aacute;ngeles y all&iacute; tuvo que volver a aprender a usar el transporte p&uacute;blico, recorrer las calles de L.A. y conseguir un trabajo de medio tiempo que lo ha mantenido a flote.&nbsp;</p>
                        <p>Le ha tocado adaptarse a una vida que todo el tiempo, en el sandinismo, le dijeron que era &ldquo;el capitalismo salvaje&rdquo;. Pero ese fue, despu&eacute;s del destierro, un pensamiento irrisorio cuando recordaba los primeros meses de encierro que le hicieron pasar sus captores, es decir sus mismos &ldquo;compa&ntilde;eros&rdquo; del partido rojo y negro: &ldquo;No creo que se hayan ensa&ntilde;ado s&oacute;lo conmigo, creo que a todos los que tuvimos en El Chipote nos dieron un trato est&aacute;ndar. En mi caso me tuvieron aislado en un calabozo nauseabundo por dos meses, oliendo mierda las 24 horas del d&iacute;a; sin ventilaci&oacute;n y sin luz natural&rdquo;, dice <em>Antonio</em>. En su tono no es dif&iacute;cil adivinar molestia y resentimiento.&nbsp;</p>
                        <p>Le pregunto si despu&eacute;s de toda esta experiencia se cuestiona su vieja militancia sandinista. Hace un largo silencio. Toma aire. Se sincera: &ldquo;Claro que s&iacute;&hellip; uno tiene que hacer una reflexi&oacute;n introspectiva. Pero en un pa&iacute;s como este y en una realidad en la que estoy, la necesidad de la supervivencia se impone. Y entonces, poco a poco, en la medida que te vas metiendo en la vida, aqu&iacute; ten&eacute;s que empezar a buscar trabajo, buscar para pagar la renta y la comida. Entonces te va quedando menos tiempo para pensar en esas cosas. Pero por supuesto, no puedo seguir pensando del Gobierno lo que pensaba antes. Espero que el pueblo despierte. Que la oposici&oacute;n se una. Que los gringos dejen de respaldarlo (a Ortega) y que se pueda construir algo para salir de ellos. Aunque s&iacute; te digo, con mucho pesar, es que no hay ninguna alternativa pac&iacute;fica para salir de ese Gobierno. Tiene que haber otra rebeli&oacute;n popular, otro ba&ntilde;o de sangre para que la gente despierte. Ojal&aacute; que no, pero no soy tan optimista en ese particular&rdquo;.&nbsp;</p>
                        <p><em>&ndash; Quiero insistir Antonio, &iquest;te sent&iacute;s sandinista todav&iacute;a?&nbsp;</em></p>
                        <p>&ndash; Pues s&iacute;, porque le dediqu&eacute; 46 a&ntilde;os de mi vida al sandinismo. Me considero un sandinista en extinci&oacute;n. Ya no hay relevo generacional y no espero, sinceramente, que el sandinismo sobreviva como fuerza pol&iacute;tica despu&eacute;s de Ortega. Si el sandinismo sigue existiendo, eso le har&iacute;a otro gran da&ntilde;o a Nicaragua. Lo que vivimos fue el desv&iacute;o a una tiran&iacute;a total, peor que la de Somoza. Eso no te puede llevar nunca a nada bueno y m&aacute;s temprano que tarde se les va a revertir.&nbsp;</p>
                        <p class="scd-asterisk"><strong>***</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col">

                <p>Para este reportaje intentamos hablar con tres sandinistas m&aacute;s que fueron desterrados. Establecimos contactos con ellos, pero el terror era demasiado: hasta hablar bajo anonimato, coincidieron, pondr&iacute;a en riesgo a sus familias en Nicaragua. Es &eacute;poca de <a href="https://www.divergentes.com/?s=totalitarismo">totalitarismo</a> y los Ortega-Murillo, aparte del destierro, tienen otra pol&iacute;tica de Estado represiva, la m&aacute;s reciente: ir tras los <a href="https://www.divergentes.com/carcel-y-asedio-la-tactica-despiadada-del-regimen-contra-familiares-de-opositores-exiliados/">familiares de los exiliados y desterrados</a>. Apresarlos.&nbsp;</p>
                <p>El horror no solo autocensura a los sandinistas sino tambi&eacute;n a los opositores en general. En enero pasado viaj&eacute; a Estados Unidos y convers&eacute; con varios desterrados para un documental que DIVERGENTES est&aacute; produciendo para la organizaci&oacute;n <a href="https://www.divergentes.com/?s=Raza+e+Igualdad">Raza e Igualdad</a>.&nbsp;</p>
                <p>Me sorprendi&oacute; ese miedo compartido, pero tambi&eacute;n la resiliencia y la capacidad de los desterrados para reinventarse y engancharse a un pa&iacute;s al que nunca quisieron llegar, mucho menos de forma tan intempestiva. Casi un a&ntilde;o despu&eacute;s, los 222 presos pol&iacute;ticos se han diseminado por casi todo Estados Unidos, primordialmente obedeciendo una condici&oacute;n b&aacute;sica: se mudan donde encuentren trabajo.&nbsp;</p>
                <p>Una base de datos de DIVERGENTES, cuya &uacute;ltima actualizaci&oacute;n fue en octubre de 2023, revela que la mayor&iacute;a de los presos pol&iacute;ticos desterrados se instalaron en el estado de Florida, en espec&iacute;fico en Miami, donde el ingl&eacute;s no es tan indispensable. 68 personas viven en Florida, 33 se afincaron en Maryland, 21 en California y el resto se encuentran repartidos en Carolina del Norte, Colorado, Georgia, Illinois, Indiana, Minnesota, Nebraska, New York, New Jersey, Oreg&oacute;n, Ohio, San Diego, Pensilvania y Tennessee.&nbsp;</p>
                <p>A pesar de las jornadas extenuantes de trabajo, algunos de ellos persisten en su activismo opositor. Otros se han sumado como v&iacute;ctimas a procesos de <a href="https://www.divergentes.com/justicia-argentina-investiga-al-regimen-ortega-murillo-por-crimenes-de-lesa-humanidad/">justicia universal</a> y algunos, como el l&iacute;der estudiantil Miguel Flores, siguen su sue&ntilde;o: el de la cocina y graduarse como chef.&nbsp;</p>
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/js_1.jpg" class="img-fluid" alt="js">
                <p>&ldquo;El primer trabajo que encontr&eacute; fue en jardiner&iacute;a. No estaba mal pero era duro, porque se trabaja a la intemperie, ya sea con mucho calor o en temperaturas bajo cero. Un d&iacute;a escuch&eacute; de una beca en entrenamiento culinario para refugiados. Apliqu&eacute; y me aceptaron. Entonces desde ese momento me dije: Si yo voy a hacer algo en este pa&iacute;s, voy a hacer algo que me guste. No voy a permitir que Ortega, aparte de haberme quitado la nacionalidad y todo lo que me rodeaba, no me permita continuar mis sue&ntilde;os&rdquo;, me dice Miguel en el <em>basement</em> que renta en Washington D.C.&nbsp;</p>
                <p>El peque&ntilde;o espacio est&aacute; decorado con libros de cocina, una paellera colgada en una pared y en la puerta del refrigerador una nota en un popstick que al joven le dieron en su curso culinario: <br /><br /><em>From across the seas,</em><em><br /></em><em>Your passion follows with hope</em><em><br /></em><em>A lovely kitchen.&nbsp;</em></p>
                <p>&ldquo;Mi meta es no dejar que Ortega me haga sentir como un gusano. No voy a dejar que me robe todo, toda mi alegr&iacute;a&rdquo;, insiste el universitario, hoy convertido en un ayudante de cocina en un hotel en Washington.&nbsp;</p>
                <p>En <a href="https://www.divergentes.com/?s=Miami">Miami</a>, donde vive desde que fue desterrado, Yubrank Suazo ha conseguido un trabajo que lo desvela. Dice que se siente bien, haciendo todo lo que pueda en el destierro para no desperdiciar el tiempo, pero hay d&iacute;as que lo quiebran. Que no quiere ni levantarse de la cama.&nbsp;</p>
                <p>Sucede cuando se acuerda de su natal Masaya, de los bailes t&iacute;picos y su familia. Extra&ntilde;a a sus padres con quienes, dice, ha decidido no intentar la reunificaci&oacute;n familiar debido a la avanzada edad de ellos.&nbsp;</p>
                <p>&ldquo;A veces el amor te hace sacrificarte. Y decidir dentro de ello el costo menos doloroso. No vamos a solicitar la reunificaci&oacute;n porque mis padres tienen enfermedades cr&oacute;nicas y yo no estoy dispuesto a someter a mi pap&aacute; y a mi mam&aacute; a separarlos m&aacute;s de la familia. Suficiente con que yo est&eacute; separado. No quiero separarlos de su entorno, de mis otros hermanos, de sus nietos y de los bisnietos. Me alegro much&iacute;simo por quienes han logrado la reunificaci&oacute;n, lo aplaudo, pero no es mi caso&rdquo;, dice Yubrank Suazo, quien como la mayor&iacute;a de los presos pol&iacute;ticos desterrados ha solicitado asilo pol&iacute;tico, ya que el <a href="https://www.divergentes.com/?s=parole+humanitario"><em>parole humanitario</em></a> que les permite vivir y trabajar en Estados Unidos expira dentro de un a&ntilde;o.&nbsp;</p>
                <p>El destierro, no s&oacute;lo para los presos pol&iacute;ticos que viven en Estados Unidos, ha resultado complejo. Perm&iacute;tanme hablar como un periodista exiliado y despojado de su nacionalidad: se nos alarga cada d&iacute;a y nos mantiene en pruebas permanentes, aferrados a esa tabla que flota en el mar del totalitarismo para no hundirnos, ahogarnos... En una batalla constante, dicot&oacute;mica, en la que unos d&iacute;as &mdash;como dice Yubrank Suazo&mdash; el compromiso se siente desgastado y otros rejuvenecido. Amores claudican, otros nacen. Familias se destruyen por la represi&oacute;n, otras se forman en el extranjero: la familia de los exiliados y desterrados que se abrazan y van superando lo que esto implica a nivel emocional, econ&oacute;mico y profesional. La solidaridad conjunta. Y en el fondo, aunque cada vez parece m&aacute;s remota, est&aacute; la esperanza, golpeada pero obstinada. Una esperanza sostenida por ese ah&iacute;nco monumental que es el compromiso hacia Nicaragua. Una esperanza com&uacute;n que no ha sucumbido ante la <em>&ldquo;Ira regis&rdquo;</em> de los tiranos.&nbsp;</p>

                </p>
            </div>
        </div>
    </div>


    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col d-flex justify-content-between">
                <a href="<?php echo esc_url( get_permalink(43033) ); ?>" title="" class="btn scd-btn">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999999 12.5C0.999999 18.8579 6.14214 24 12.5 24C18.8579 24 24 18.8579 24 12.5C24 6.14214 18.8579 1 12.5 0.999999C6.14214 0.999999 0.999999 6.14214 0.999999 12.5Z"
                              stroke="black"/>
                        <path d="M23.1787 12.5L7.57157 12.5" stroke="black"/>
                        <path d="M12.5 6.75L6.75 12.5L12.5 18.25" stroke="black"/>
                    </svg>
                    Anterior
                </a>
                <a href="<?php echo esc_url( get_permalink(42640) ); ?>" title="" class="btn scd-btn2">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 12.5C24 6.14214 18.8579 0.999999 12.5 0.999999C6.14214 0.999999 1 6.14214 1 12.5C1 18.8579 6.14214 24 12.5 24C18.8579 24 24 18.8579 24 12.5Z"
                              stroke="black"/>
                        <path d="M1.82129 12.5L17.4284 12.5" stroke="black"/>
                        <path d="M12.5 18.25L18.25 12.5L12.5 6.75" stroke="black"/>
                    </svg>
                    Siguiente historia
                </a>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            custom: {
                families: ['Memphis'],
                urls: ['https://www.divergentes.com/wp-content/themes/divergentes/css/fonts/memphis.css']
            }
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var divsHijos = document.querySelectorAll('.scd-text-content');

            divsHijos.forEach(function (divHijo) {
                var divPadre = divHijo.closest('.scd-parallax-container');
                var alturaHijoVH = (divHijo.offsetHeight / window.innerHeight) * 100;
                var alturaPadreVH = alturaHijoVH + 200;
                divPadre.style.height = `${alturaPadreVH}vh`;
            });

            const observerOptions = {
                rootMargin: '0px',
                threshold: 0.01
            };

            const observerCallback = (entries) => {
                entries.forEach(entry => {
                    const divOverlay = entry.target.parentNode.querySelector('.scd-overlay');
                    if (entry.isIntersecting) {
                        gsap.to(divOverlay, {
                            opacity: 0.85,
                            duration: 0.3
                        });
                    } else {
                        gsap.to(divOverlay, {
                            opacity: 0,
                            duration: 0.3
                        });
                    }
                });
            };
            let observer = new IntersectionObserver(observerCallback, observerOptions);
            divsHijos.forEach(textContent => {
                observer.observe(textContent);
            });
            var urlActual = <?php echo json_encode(get_permalink()); ?>;
            var tituloPost = <?php echo json_encode(get_the_title()); ?>;

            document.getElementById('btn-fb').addEventListener('click', function() {
                window.open(`https://www.facebook.com/sharer/sharer.php?u=${urlActual}`, '_blank');
            });

            document.getElementById('btn-X').addEventListener('click', function() {
                window.open(`https://twitter.com/intent/tweet?via=DivergentesCA&text=${tituloPost}&url=${urlActual}`, '_blank');
            });

            document.getElementById('btn-whatsapp').addEventListener('click', function() {
                window.open(`https://api.whatsapp.com/send?text=${urlActual}`, '_blank');
            });

            document.getElementById('btn-mail').addEventListener('click', function() {
                window.location.href = `mailto:?subject=Divergentes&body=Especial: ${urlActual}`;
            });
        });
    </script>
<?php
get_footer();
