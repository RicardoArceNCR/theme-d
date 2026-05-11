<?php

/*
* Template Name: salon-clases-destierro
* Template Post Type: post
* @package WordPress
*/

get_header();
?>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        .scd-intro h1 {
            font-family: 'Memphis';
            font-size: 48px;
            font-weight: 800;
            line-height: 47px;
            letter-spacing: -0.03em;
            text-align: center;
            color: #F67504;

        }
        .scd-intro {
            max-width: 660px;
            margin: 0 auto;
        }

/*         .scd-intro h1 span { */
/*             font-family: 'Memphis'; */
/*             font-size: 64px; */
/*             font-weight: bold; */
/*             color: #F67504; */
/*             letter-spacing: -0.03em; */
/*             line-height: 97.92%; */
/*         } */

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
            font-size: 18px !important;
            font-weight: 200;
            line-height: 26px;
            letter-spacing: 0em;
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
            font-size: 68px;
            font-family: 'Martel';
            font-weight: 100;
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

        .scd-icon-whatsapp:hover > .scd-bg-icon-whatsapp, .scd-icon-fb:hover > .scd-bg-icon-fb, .scd-icon-x:hover > .scd-bg-icon-x, .scd-icon-mail:hover > .scd-bg-icon-mail  {
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
                font-size: 28px;
                line-height: 39px;
                letter-spacing: -0.03em;
            }

            .scd-intro h1 span {
                font-family: 'Memphis';
                font-size: 38px;
                line-height: 37px;
                letter-spacing: -0.03em;
            }

            .scd-intro h2 {
                font-size: 22px;
                line-height: 29px;
                letter-spacing: 0.02em;
                color: #141516;
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
                font-weight: 800;
                line-height: 35px;
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
                <img id="animatedElement" src="https://www.divergentes.com/wp-content/uploads/2024/02/est_1-1.jpg" class="img-fluid"
                     alt="tunel">
                <a href="<?php echo esc_url( get_permalink(43285) ); ?>" title="" class="btn scd-btn2 my-4" >
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
                <h1 class="text-center">Del salón de clases al destierro</h1>
                <h2>La travesía de los estudiantes encarcelados por el orteguismo</h2>
                <p>
                    El activismo estudiantil se paga con persecución, cárcel y torturas en Nicaragua bajo la tiranía de
                    Daniel Ortega y Rosario Murillo. Para el régimen, los estudiantes son traidores a la patria, si no
                    se ajustan a su lineamiento represivo. Esto lo sufrieron en carne propia John Cerna, Samantha Jirón
                    y Mildred Rayo, castigados con el destierro y la desnacionalización, y quienes ahora luchan por
                    sobrevivir en el exilio
                </p>
                <p class="scd-intro-creditos">
                    Por Divergentes <a href="https://twitter.com/DivergentesCA">(@DivergentesCA)</a>
                </p>
                <p class="scd-intro-fecha">8 de febrero 2024</p>
                <p class="text-center">
                    <svg width="304" height="32" viewBox="0 0 304 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="social-icons">
                            <g id="btn-whatsapp" class="scd-icon-whatsapp">
                                <rect id="bg-whatsapp" class="scd-bg-icon-whatsapp" x="154.913" width="71.4983" height="31.777" rx="3" />
                                <g id="icon-whatsapp" clip-path="url(#clip0_92_852)">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M199.882 9.31103C198.139 7.57551 195.823 6.62024 193.354 6.62024C188.27 6.62024 184.13 10.7403 184.123 15.801C184.123 17.4199 184.548 19.0023 185.353 20.3951L184.042 25.1568L188.936 23.8807C190.284 24.6099 191.801 24.9964 193.347 24.9964C198.432 24.9964 202.579 20.8763 202.579 15.8156C202.579 13.3582 201.619 11.0539 199.875 9.31833M193.347 23.4505C191.969 23.4505 190.621 23.0786 189.442 22.3858L189.163 22.2181L186.262 22.9765L187.039 20.1617L186.855 19.87C186.086 18.6522 185.683 17.2522 185.683 15.8083C185.683 11.6008 189.127 8.17346 193.362 8.17346C195.413 8.17346 197.34 8.9683 198.783 10.4121C200.234 11.856 201.033 13.7738 201.025 15.8156C201.025 20.0232 197.582 23.4505 193.354 23.4505" fill="#002A42"/>
                                    <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M197.56 17.7261C197.333 17.6095 196.197 17.0553 195.985 16.9824C195.772 16.9094 195.619 16.8657 195.465 17.099C195.311 17.3251 194.871 17.8428 194.732 17.996C194.6 18.1491 194.461 18.171 194.234 18.0543C194.007 17.9376 193.259 17.697 192.38 16.9167C191.691 16.3115 191.23 15.5531 191.098 15.327C190.966 15.101 191.083 14.977 191.201 14.8603C191.303 14.7583 191.435 14.5905 191.545 14.4593C191.662 14.328 191.699 14.2332 191.772 14.0801C191.845 13.927 191.809 13.7957 191.75 13.679C191.691 13.5623 191.23 12.4321 191.039 11.9727C190.849 11.5278 190.666 11.5862 190.519 11.5789C190.387 11.5789 190.233 11.5716 190.08 11.5716C189.926 11.5716 189.677 11.6299 189.464 11.856C189.252 12.082 188.658 12.6435 188.658 13.7665C188.658 14.8895 189.486 15.9906 189.603 16.1438C189.721 16.2969 191.23 18.6158 193.545 19.6075C194.095 19.8409 194.527 19.9867 194.857 20.0888C195.406 20.2638 195.912 20.2419 196.307 20.1763C196.747 20.1107 197.67 19.6221 197.861 19.0825C198.051 18.5502 198.051 18.0908 197.992 17.9887C197.934 17.8939 197.78 17.8355 197.553 17.7189" fill="#002A42"/>
                                </g>
                            </g>
                            <g id="btn-X" class="scd-icon-x">
                                <rect id="bg-X" x="78.6182" y="0.5" width="69.1742" height="30.777" rx="2.5" class="scd-bg-icon-x"/>
                                <path id="X" d="M109.518 23.8328C117.011 23.8328 121.112 17.7286 121.112 12.4295C121.112 12.2526 121.112 12.0845 121.103 11.9076C121.895 11.3414 122.587 10.6336 123.136 9.8286C122.407 10.1471 121.625 10.3594 120.797 10.4567C121.634 9.9613 122.282 9.17395 122.587 8.23621C121.796 8.69624 120.932 9.03241 119.997 9.20934C119.25 8.43084 118.198 7.94427 117.02 7.94427C114.771 7.94427 112.945 9.74014 112.945 11.9518C112.945 12.2703 112.981 12.571 113.053 12.863C109.671 12.6949 106.666 11.1025 104.652 8.67854C104.301 9.27127 104.103 9.9613 104.103 10.6956C104.103 12.0845 104.823 13.3142 105.92 14.0307C105.254 14.013 104.625 13.8273 104.076 13.5265V13.5796C104.076 15.517 105.479 17.1447 107.341 17.5075C106.999 17.5959 106.639 17.649 106.271 17.649C106.01 17.649 105.749 17.6225 105.506 17.5782C106.028 19.1706 107.53 20.3295 109.311 20.3649C107.917 21.4353 106.163 22.0811 104.247 22.0811C103.914 22.0811 103.59 22.0635 103.275 22.0281C105.083 23.1604 107.215 23.8239 109.518 23.8239" fill="#002A42"/>
                            </g>
                            <g id="btn-fb" class="scd-icon-fb">
                                <rect id="bg-FB" width="71.4983" height="31.777" rx="3" class="scd-bg-icon-fb"/>
                                <g id="Capa_1" clip-path="url(#clip1_92_852)">
                                    <path id="Vector_3" d="M36.464 25.1568V16.7023H39.1963L39.6079 13.4104H36.464V11.3041C36.464 10.3541 36.7195 9.69862 38.0395 9.69862H39.7214V6.7528C39.4305 6.71598 38.4298 6.62024 37.2731 6.62024C34.846 6.62024 33.1925 8.15943 33.1925 10.9727V13.403H30.4531V16.695H33.1925V25.1495H36.4711L36.464 25.1568Z" fill="#002A42"/>
                                </g>
                            </g>
                            <g id="btn-mail" class="scd-icon-mail">
                                <rect id="bg-mail" x="233.031" width="70.1742" height="31.777" rx="3" class="scd-bg-icon-mail"/>
                                <path id="Vector_4" d="M277.163 6.62024H256.428C255.206 6.62024 254.217 7.66344 254.217 8.93731V22.8398C254.217 24.1213 255.213 25.1568 256.428 25.1568H277.163C278.374 25.1568 279.374 24.1255 279.374 22.8398V8.93731C279.374 7.66601 278.388 6.62024 277.163 6.62024ZM276.853 8.16495C276.401 8.63609 268.627 16.7397 268.359 17.0198C267.941 17.4574 267.386 17.6984 266.795 17.6984C266.205 17.6984 265.649 17.4574 265.23 17.0182C265.05 16.8303 257.361 8.81579 256.737 8.16495H276.853ZM255.691 22.5251V9.25243L262.061 15.8921L255.691 22.5251ZM256.738 23.6121L263.106 16.9822L264.19 18.1119C264.886 18.8415 265.811 19.2431 266.795 19.2431C267.779 19.2431 268.705 18.8415 269.4 18.1134L270.485 16.9822L276.853 23.6121H256.738ZM277.9 22.5251L271.53 15.8927L277.9 9.25243V22.5251Z" fill="#002A42"/>
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_92_852">
                                <rect width="18.5366" height="18.5366" fill="white" transform="translate(184.042 6.62024)"/>
                            </clipPath>
                            <clipPath id="clip1_92_852">
                                <rect width="9.26829" height="18.5366" fill="white" transform="translate(30.4531 6.62024)"/>
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
                <p>Para hablar, John Cerna tiene que salir de la oscuridad de su cuarto. Pide disculpas y abre las
                    cortinas completamente cerradas. Las secuelas de haber sido privado de luz por casi tres a&ntilde;os
                    persisten. Aclara que sus ojos todav&iacute;a no se adaptan y por eso prefiere estar en la
                    opacidad.</p>
                <p>La ciudad que ahora lo acoge es fr&iacute;a y muy lejana de su natal Matagalpa. Desde su destierro ha
                    estado en diferentes lugares. Aunque al momento de esta entrevista se encuentra en Texas, dice que
                    es mejor no especificar la ciudad por su constante movilidad.</p>
                <p>Una vez sentado frente a la pantalla y con suficiente claridad para ver, habla con soltura y concisi&oacute;n
                    sobre el &uacute;ltimo a&ntilde;o de su vida, marcado por un hecho sin precedentes en la historia de
                    Nicaragua: la desnacionalizaci&oacute;n y destierro de 222 presos pol&iacute;ticos hacia Washington
                    D.C., Estados Unidos.</p>
                <p>Abogar por la autonom&iacute;a universitaria, exigir justicia por los estudiantes asesinados en las
                    protestas de 2018 y demandar democracia para el pa&iacute;s, le cost&oacute; m&aacute;s de mil d&iacute;as
                    en la c&aacute;rcel, luego de ser condenado a 12 a&ntilde;os de prisi&oacute;n por el cargo
                    inventado de tr&aacute;fico ilegal de drogas.&nbsp;</p>
                <p>A&uacute;n despu&eacute;s de varios a&ntilde;os de encierro, Cerna sigue siendo meticuloso. Sabe cu&aacute;ntos
                    d&iacute;as estuvo en la c&aacute;rcel y cu&aacute;ntos d&iacute;as tiene de estar en libertad. Sabe
                    que lo declararon ap&aacute;trida mucho antes de su destierro, que la medianoche del 8 de febrero de
                    2023 dej&oacute; su celda, El Infiernillo, y que 36 horas despu&eacute;s de llegar a suelo
                    estadounidense, decidi&oacute; tomar su propio rumbo.</p>
                <p>En cuanto lleg&oacute; al pa&iacute;s de su destierro, tambi&eacute;n supo cu&aacute;les eran sus
                    prioridades: atender su salud, agravada por el encarcelamiento y las torturas de sus custodios;
                    retomar sus estudios, interrumpidos por la dictadura; y regular su estado migratorio, en ese momento
                    inexistente.&nbsp;</p>
                <p>Sus razones para saber todo lo anterior son claras: &ldquo;Yo ya sab&iacute;a que iba a salir libre&rdquo;,
                    dice con seguridad. &ldquo;No sab&iacute;a cu&aacute;ndo, ni c&oacute;mo, pero yo le dije a mi mam&aacute;
                    que se preparara porque la iban a llamar para avisarle que ya estaba libre&rdquo;, relata. Y as&iacute;
                    fue, aunque no de la manera en que esperaba.</p>
                <p>Desde que lleg&oacute; hasta la actualidad ha sido un a&ntilde;o de cambios, aprendizajes y retos. Un
                    a&ntilde;o de reencuentros, libertad y adaptaci&oacute;n. &ldquo;Estaba en una cajita de concreto y
                    me tiraron a una selva de concreto con m&aacute;s de 300 millones de habitantes, que tienen otro
                    idioma, otra cultura y otra manera de ver la vida&rdquo;, dice. Estados Unidos era el &uacute;ltimo
                    pa&iacute;s que ten&iacute;a en su mente como un lugar de destierro.</p>
            </div>
        </div>
    </div>

    <div class="scd-parallax-container">
        <div class="scd-sticky-image" style="position: sticky; top: 0px; z-index: 5;">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/mobile-6.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/est_2-1.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <p>Solo un d&iacute;a y medio despu&eacute;s de estar en su nuevo pa&iacute;s siendo evaluado,
                            examinado e inspeccionado por las autoridades m&eacute;dicas y migratorias estadounidenses,
                            agarr&oacute; su mochila casi vac&iacute;a &mdash;su &uacute;nica pertenencia&mdash; y se
                            fue. No quer&iacute;a volver a estar retenido, mucho menos por una lista de vacunas que le
                            hac&iacute;a falta aplicarse. &ldquo;Solo pens&eacute;: vengo de estar en una caja y me
                            quieren meter en otra caja m&aacute;s grande&rdquo;, repite.&nbsp;</p>
                        <p>&Eacute;l vuelve a hacer las cuentas y estima que desde que fue excarcelado y desterrado a
                            Estados Unidos, hasta esta conversaci&oacute;n con DIVERGENTES, han pasado exactamente 301 d&iacute;as.
                            &ldquo;Siempre repito que la persona que sol&iacute;an conocer se qued&oacute; en El
                            Infiernillo. Ah&iacute; qued&oacute; porque le toc&oacute; un proceso de metamorfosis y
                            transformaci&oacute;n&rdquo;, expresa.</p>
                        <p>Si bien el confinamiento al que lo someti&oacute; la dictadura Ortega Murillo lo cambi&oacute;
                            en muchos aspectos, su esencia sigue siendo la misma. La dictadura no pudo quitarle lo m&aacute;s
                            importante para &eacute;l: su fe en Dios, el amor por su familia y la terquedad para
                            continuar en la vida.&nbsp;</p>
                        <p>&ldquo;Hoy puedo decir que me hice cargo de mis documentos legales para permanecer en el pa&iacute;s,
                            que van desde un permiso de trabajo, un n&uacute;mero de seguro social y una licencia de
                            conducir&rdquo;, dice.</p>
                        <p>&ldquo;Tambi&eacute;n puedo decidir que ya no soy ap&aacute;trida&rdquo;, se&ntilde;ala con
                            orgullo uno de sus &uacute;ltimos logros. Obtuvo la nacionalidad espa&ntilde;ola dos d&iacute;as
                            despu&eacute;s de su cumplea&ntilde;os n&uacute;mero 28, el 25 de julio de 2023. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col">
                <h2 class="scd-asterisk">***</h2>
                <h2>Desnacionalización,<br>el castigo político del régimen</h2>
                <p>
                <p>Los m&aacute;s j&oacute;venes de los privados de conciencia; activistas pol&iacute;ticos,
                    estudiantiles y sociales, no fueron inmunes a esta medida. A diferencia de otros grupos, la gran
                    mayor&iacute;a de ellos estudiaban sus carreras universitarias o las finalizaban.&nbsp;</p>
                <p>Cuando hicieron p&uacute;blica su desnacionalizaci&oacute;n el 9 de febrero de 2023, Cerna ni
                    siquiera estaba seguro de lo que significaba ser &ldquo;ap&aacute;trida&rdquo;. Se le vino a la
                    mente la &uacute;nica persona que conoc&iacute;a con esa condici&oacute;n, Albert Einstein. La
                    confusi&oacute;n lo embarg&oacute;.</p>
                <p>&ldquo;Cuando me dijeron que era ap&aacute;trida, titubee sobre el t&eacute;rmino. La &uacute;nica
                    persona que se me ocurri&oacute; era alguien famoso que nada ten&iacute;a que ver conmigo. El
                    &uacute;nico que conozco que fue ap&aacute;trida fue Albert Einstein. &iquest;C&oacute;mo yo me voy
                    a comparar con una persona de perfil tan alto?&rdquo;, manifiesta.</p>
                <p>No era para menos. La apatridia era un castigo pol&iacute;tico que ten&iacute;a muchos a&ntilde;os de
                    no verse en la regi&oacute;n, y est&aacute; catalogado como un crimen de lesa humanidad. Cuando
                    dicha sanci&oacute;n fue sacada a la luz nuevamente por el r&eacute;gimen, el desconcierto fue la
                    reacci&oacute;n generalizada.</p>
                <p>Aquel 9 de febrero de 2023 posiblemente no fue el destierro lo que dej&oacute; m&aacute;s sorprendida
                    a la poblaci&oacute;n y a la comunidad internacional, sino la creaci&oacute;n de una ley que declara
                    la p&eacute;rdida de la ciudadan&iacute;a nicarag&uuml;ense y dejaba en una muerte civil a m&aacute;s
                    de 200 personas en ese momento.</p>
                <p>Como a&ntilde;adidura a la ley de desnacionalizaci&oacute;n y traici&oacute;n a la patria, tambi&eacute;n
                    se pagar&iacute;a con los bienes de las personas desnacionalizadas y los de su familia, algo que
                    aunque no est&aacute; en la ley, el r&eacute;gimen aplica en la pr&aacute;ctica.</p>
                <p>Ante esto, Cerna dice que por suerte &ldquo;no tiene ni un peso partido a la mitad&rdquo;. Lo que
                    tiene despu&eacute;s del despojo de su nacionalidad es el cari&ntilde;o a su pa&iacute;s y la
                    esperanza de que todo va a mejorar. &ldquo;Yo soy matagalpino y nicarag&uuml;ense por gracia de
                    Dios. No es un papel el que me va a quitar el amor sobre ese pedacito de tierra que me vio nacer&rdquo;,
                    sostiene.</p>
                <p>Como muestra de su sentido de pertenencia al pa&iacute;s, siempre usa el broche de una bandera
                    nicarag&uuml;ense en el chaleco de su actual trabajo, donde forma parte de un servicio de catering.
                    Agarra el brochecito azul y blanco, lo muestra a la c&aacute;mara y sonr&iacute;e en esta entrevista
                    a larga distancia.</p>

                </p>
            </div>
        </div>
    </div>

    <div class="scd-parallax-container">
        <div class="scd-sticky-image">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/mobile-3.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/est_3-1.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <h2>Secuelas físicas,<br>una manifestación de la violencia política</h2>
                        <p>
                        <p>A casi tres mil kil&oacute;metros de distancia de Cerna, en una tierra m&aacute;s helada y
                            distante, se encuentra la activista estudiantil Samantha Jir&oacute;n. Apasionada por las
                            ciencias pol&iacute;ticas y la comunicaci&oacute;n, y marcada por un sentido fuerte de
                            justicia, ella fue la presa pol&iacute;tica mujer m&aacute;s joven que mantuvo la dictadura
                            hasta el 9 de febrero de 2023.</p>
                        <p>Como muchos, fue capturada en el a&ntilde;o de la farsa electoral, el a&ntilde;o en que por
                            cuarta vez consecutiva Daniel Ortega se autodeclar&oacute; presidente de Nicaragua, con
                            todos sus competidores electorales encerrados en la c&aacute;rcel o exiliados.&nbsp;</p>
                        <p>Al igual que otros activistas estudiantiles desterrados, la salud post encierro de Jir&oacute;n
                            es todo un tema que atender. Con dificultad, debido a una severa tos que la arremete, cuenta
                            que se est&aacute; recuperando de una cirug&iacute;a inesperada. Su ovario izquierdo se
                            torci&oacute; y necesit&oacute; ser intervenida quir&uacute;rgicamente de manera
                            inmediata.</p>
                        <p>&ldquo;As&iacute;, de la nada se torci&oacute;&rdquo;, dice sencillamente. La torsi&oacute;n
                            de su ovario ocurri&oacute; en octubre de 2023, tan solo unos meses despu&eacute;s que su
                            pareja y tambi&eacute;n expreso pol&iacute;tico desterrado, Kevin Sol&iacute;s, sufriera,
                            &ldquo;de la nada&rdquo;, una par&aacute;lisis facial.&nbsp;</p>
                        <p>Sin embargo, no se trata de una coincidencia. Jir&oacute;n sabe cu&aacute;l es el origen de
                            todos sus males: las secuelas de estar en las mazmorras del r&eacute;gimen, privados de
                            atenci&oacute;n m&eacute;dica y cualquier otra necesidad humanitaria que requirieron en ese
                            momento.</p>
                        <p>Ella, que siempre siempre ha tenido buena salud y pocos problemas m&eacute;dicos, su &uacute;ltimo
                            a&ntilde;o en Estados Unidos estuvo plagado de afecciones, malestares y desasosiegos.</p>
                        <p>&ldquo;Se trata totalmente de secuelas y soy testigo de eso&rdquo;, asevera. &ldquo;He
                            presentado muchos problemas de salud, estando presa y tambi&eacute;n despu&eacute;s de mi
                            encarcelamiento&rdquo;, cuenta. Son las manifestaciones de da&ntilde;os f&iacute;sicos,
                            emocionales y mentales de ser privada de libertad injustamente por m&aacute;s de un a&ntilde;o.</p>
                        <p>La primera secuela que not&oacute; es su incapacidad de estar en espacios cerrados, aunque se
                            trate de un carro o un autob&uacute;s. &ldquo;Se me baja la presi&oacute;n, el az&uacute;car,
                            me pongo p&aacute;lida y siento que me voy a desvanecer&rdquo;, relata.</p>
                        <p>Extra&ntilde;ada por sus reacciones, acudi&oacute; a un m&eacute;dico para averiguar si la
                            raz&oacute;n era un problema de presi&oacute;n arterial, pero el doctor le dijo que todo es
                            una reacci&oacute;n emocional al experimentar nuevamente un encierro.</p>
                        <p>&ldquo;Yo esto nunca lo hab&iacute;a pasado antes de estar presa. Nunca hab&iacute;a tenido
                            esos problemas m&eacute;dicos&rdquo;, afirma. Para disminuir esas constantes molestias,
                            utiliza una pulsera especial que regula su presi&oacute;n. Aunque los ataques de ansiedad no
                            los deja de tener, con ese dispositivo al menos los puede controlar.</p>
                        <p>Por la protecci&oacute;n especial que tiene Jir&oacute;n con el<em> parole humanitario</em>
                            &mdash;que igualmente tienen el resto de los 222 desterrados&mdash;, posee un seguro llamado
                            <em>Medical</em> que est&aacute; disponible &uacute;nicamente para el estado donde vive,
                            California. As&iacute; que su cirug&iacute;a y tratamiento postoperatorio, el cual anduvo
                            por los 89 000 d&oacute;lares, no fue costeada por ella. &ldquo;Aqu&iacute; enfermarte es lo
                            peor que te puede pasar&rdquo;, afirma.</p>
                        <p>A&uacute;n en medio de los problemas, cuenta entre risas que cuando su novio, Sol&iacute;s,
                            sufri&oacute; la par&aacute;lisis facial que implic&oacute; m&aacute;s de 20 000 d&oacute;lares
                            en gastos, estaban bromeando sobre huir del pa&iacute;s, si el seguro no pagaba la factura
                            del hospital.</p>
                        <p>La joven estudiante dice algo que todas las dem&aacute;s personas desterradas repiten sin
                            parar: &ldquo;que nos hayan enviado a Estados Unidos no nos resuelve la vida&rdquo;,
                            sostiene.&nbsp;</p>
                        <p>&ldquo;Muchos dicen que nos la pusieron f&aacute;cil por haber venido aqu&iacute;, pero no es
                            as&iacute;&rdquo;, enfatiza. Debido a sus constantes problemas m&eacute;dicos y para
                            recuperar su salud, Jir&oacute;n decidi&oacute; renunciar a su trabajo en la empresa donde
                            laboraba.&nbsp;</p>
                        <p>En ese lugar muchas de sus responsabilidades implicaban realizar un esfuerzo f&iacute;sico.
                            Adem&aacute;s, como en cualquier otro lugar del pa&iacute;s norteamericano, si no ten&iacute;a
                            al menos un a&ntilde;o laborando, no ten&iacute;a derecho a indemnizaci&oacute;n por sus d&iacute;as
                            de descanso y recuperaci&oacute;n.</p>
                        <p>&ldquo;Tenemos poco tiempo de trabajar (mi pareja y yo). En estas empresas no te dan un
                            permiso para la recuperaci&oacute;n total, no al menos en esta empresa. Un trabajo no vale
                            la pena para que deterior&eacute;s tu salud&rdquo;, agrega.</p>
                        <p>Cuenta que el mes en que Sol&iacute;s sufri&oacute; la par&aacute;lisis, no pudo trabajar
                            durante varias semanas y por tanto, ni siquiera recibi&oacute; la mitad de su salario. Su
                            seguro solamente cubre los gastos m&eacute;dicos, m&aacute;s no indemniza los d&iacute;as de
                            trabajo perdidos.&nbsp;</p>
                        <p>Solo el espacio donde ella vive cuesta 1800 d&oacute;lares y ni siquiera es un apartamento.
                            Es un estudio sin cuartos, ni divisiones. &Uacute;nicamente tiene un peque&ntilde;o ba&ntilde;o
                            y un lavado que simula la cocina. Basta con una peque&ntilde;a mirada alrededor para lograr
                            ver todo el espacio.</p>
                        <p>Desterrada y ahora extranjera en otro pa&iacute;s, son elementos que se entrecruzan para
                            dificultar la b&uacute;squeda de un trabajo que le permita costear un lugar mejor. &ldquo;Es
                            muy dif&iacute;cil obtener un trabajo aqu&iacute;, aunque seas profesional. No es como que
                            soy periodista y voy a trabajar en un medio de comunicaci&oacute;n aqu&iacute;. Los trabajos
                            para nosotros son diferentes&rdquo;, recalca. &ldquo;Nosotros&rdquo;, es decir, los
                            desterrados.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col">
                <h2 class="scd-asterisk">***</h2>
                <h2>2023 fue un año inusual<br>para los desterrados</h2>
                <p>
                <p>En medio de la conversaci&oacute;n, Jir&oacute;n tose nuevamente. Un recordatorio que su salud sigue
                    delicada. Hace un par de conjeturas sobre su tos. Puede ser porque es la &eacute;poca fr&iacute;a
                    del a&ntilde;o y todo mundo suele resfriarse en estas fechas, pero tambi&eacute;n puede ser una
                    neumon&iacute;a porque se le ha prolongado demasiado.&nbsp;</p>
                <p>La joven define su &uacute;ltimo a&ntilde;o como &ldquo;inusual&rdquo;. &ldquo;No esperas vivir lo
                    que me ha tocado a m&iacute; y a los 221 presos pol&iacute;ticos excarcelados&rdquo;, explica. Por
                    un lado, es el a&ntilde;o de su libertad, despu&eacute;s de mucho tiempo encerrada. Y por otro, es
                    un a&ntilde;o complejo por todos los desaf&iacute;os que significa haber llegado a Estados Unidos
                    como desterrada.</p>
                <p>Como tantos, no ten&iacute;a ninguna familia, ni nadie que la recibiera cuando lleg&oacute;. Eso
                    signific&oacute; adaptarse en ese nuevo contexto &uacute;nicamente con la compa&ntilde;&iacute;a de
                    su pareja. La distancia que la separa a ella y a sus seres queridos se siente mucho m&aacute;s, que
                    cuando estaba encarcelada en Nicaragua.</p>
                <p>&ldquo;He pasado momentos de depresi&oacute;n muy fuertes lejos de mi familia. Eso se suma a los
                    problemas emocionales, a los traumas que traigo de la c&aacute;rcel y la incertidumbre de lo que
                    pasar&aacute; conmigo y mi futuro. Ha sido un a&ntilde;o muy dif&iacute;cil&rdquo;, expresa la
                    activista, ahora de 24 a&ntilde;os.</p>
                <p>Sobre todo su futuro y la incertidumbre que la acompa&ntilde;a, es un tema que ocupa su mente la
                    mayor parte del tiempo. A pesar que fue una de las primeras desterradas en aplicar al proceso para
                    obtener la ciudadan&iacute;a ofrecida por el Gobierno de Espa&ntilde;a, todav&iacute;a no recibe
                    respuesta de su solicitud. No es la &uacute;nica. Otro grupo grande de excarcelados siguen a la
                    espera, aclara.</p>
                <p>&ldquo;No me han dicho cu&aacute;ndo va a estar mi pasaporte (espa&ntilde;ol). Siempre estoy mandando
                    correos para saber c&oacute;mo va mi tr&aacute;mite. Es dif&iacute;cil y desgastante estar a la
                    espera durante todos estos meses. Ac&aacute; no es f&aacute;cil mantener un apartamento y estar en
                    estas condiciones&rdquo;, manifiesta.</p>
                <p>Uno de sus objetivos es mudarse a Espa&ntilde;a con su pareja en cuanto obtenga su pasaporte. Sol&iacute;s
                    lo obtuvo el 4 de diciembre del a&ntilde;o pasado. Mientras tanto, tendr&aacute; que aguardar su
                    nueva nacionalidad que representa tambi&eacute;n una esperanza, en la g&eacute;lida bah&iacute;a de
                    San Francisco. </p>
                </p>
            </div>
        </div>
    </div>
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col">
                <h2 class="scd-asterisk">***</h2>
                <h2>Destierro significó <br>la separación de familias</h2>
                <p>
                <p>A tan solo un par de kil&oacute;metros m&aacute;s adelante, una joven enciende su computadora. Apenas acomoda su c&aacute;mara, es notable la herida que Mildred Rayo tiene en su labio superior, evidencia del reciente accidente que tuvo en su patineta el&eacute;ctrica.</p>
                <p>Explica que choc&oacute; con otra persona que tambi&eacute;n manejaba una patineta y cay&oacute; de bruces contra el piso. El resultado fue una cortada en los labios y un golpe en los dientes frontales. Sin embargo, m&aacute;s all&aacute; de su aparatoso accidente, sonr&iacute;e y se encuentra animada para hablar.</p>
                <p>Su sentido del humor y su optimismo por la vida pueden ocultar f&aacute;cilmente todo lo que vivi&oacute; en sus &uacute;ltimos cuatro meses en Nicaragua: la detenci&oacute;n arbitraria por el Ej&eacute;rcito de la dictadura, el abuso al momento de hacerle un chequeo y el destierro inesperado.</p>
                <p>Dice que cada vez que cuenta su historia a sus compa&ntilde;eras de trabajo en el hotel donde es recepcionista, le dicen que parece sacada de un gui&oacute;n de cine. Represi&oacute;n, encarcelamiento, destierro y apatridia.</p>
                <p>&ldquo;Cuando me preguntan c&oacute;mo termin&eacute; aqu&iacute; y les explico todo lo que pasa en Nicaragua, siempre me dicen &lsquo;no te lo puede creer, es como una pel&iacute;cula&rsquo;. A pesar de que creemos que est&aacute; divulgada la situaci&oacute;n, no lo est&aacute;&rdquo;, indica Rayo.</p>
                <p>Para ella, su destierro se trata de altibajos. Momentos de &eacute;xitos y logros, y de tristeza e inquietud. &ldquo;Han habido momentos de mucha frustraci&oacute;n, especialmente los primeros meses. Fue duro porque yo no me miraba saliendo de Nicaragua y obligadamente estar ac&aacute; es dif&iacute;cil. Todo es burocr&aacute;tico y lento. No hay manera de ubicarnos m&aacute;s pronto&rdquo;, dice molesta.</p>
                <p>A diferencia de la mayor&iacute;a de los desterrados, ella no opt&oacute; por una de las ciudadan&iacute;as ofrecidas por m&aacute;s de cinco pa&iacute;ses latinoamericanos y Espa&ntilde;a, sino que decidi&oacute; solicitar asilo pol&iacute;tico en Estados Unidos. Una vez culminado el proceso, proceder&aacute; a atender el tema de su nacionalidad.</p>
                <p>La raz&oacute;n: no quiere alejarse m&aacute;s de su familia. Pues, obtener una ciudadan&iacute;a de los pa&iacute;ses voluntarios significa irse de Estados Unidos eventualmente. Eso es algo que ella en definitiva no quiere porque ser&iacute;a marcar m&aacute;s distancia entre ella y sus seres queridos. De hecho, cuando lleg&oacute; al pa&iacute;s, una de las primeras personas en recibirla fue su hermana mayor, quien reside en Miami y con quien vivi&oacute; en los meses siguientes.</p>
                <p>Por el contrario, quiere echar ra&iacute;ces en el pa&iacute;s norteamericano y con una estabilidad econ&oacute;mica asegurada, pretende traer a sus padres para que su familia vuelva a estar reunida.&nbsp;</p>
                <p>&ldquo;A veces me he sentido muy sola sin mi familia. Despu&eacute;s del accidente me pregunt&eacute; &iquest;ahora qui&eacute;n me va a cuidar? Es la costumbre. Uno puede tener 30 a&ntilde;os y decir &lsquo;quiero que mi mam&aacute; me haga una sopita&rsquo;. Hay un soporte emocional y ha sido duro sin eso&rdquo;, dice lagrimeando.</p>
                <picture>
                    <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/mobile-2.png">
                    <img src="https://www.divergentes.com/wp-content/uploads/2024/02/est_4-1.jpg" class="img-fluid" alt="túnel">
                </picture>
                <p>En realidad, Rayo nunca quiso irse del pa&iacute;s en donde naci&oacute; y se cri&oacute;, ni siquiera a pesar de toda la persecuci&oacute;n y hostigamiento que vivi&oacute; por ser activista estudiantil y miembro de la Alianza C&iacute;vica por la Justicia y la Democracia.</p>
                <p>Aunque no alcanz&oacute; a saber de cu&aacute;nto ser&iacute;a la pena a la que iba a ser condenada por su repentino destierro, s&oacute;lo d&iacute;as antes hab&iacute;a sido declarada culpable por supuesta &ldquo;conspiraci&oacute;n para el menoscabo de la integridad nacional&rdquo;.&nbsp;</p>
                <p>Incluso aunque la hubiesen liberado en Nicaragua por un milagro del destino, Rayo tampoco hubiese optado por huir. As&iacute; era su terquedad por quedarse en su pa&iacute;s natal. La dictadura Ortega-Murillo le quit&oacute; ese &uacute;nico deseo.</p>
                <p>A pesar de haber sido enviada lejos en total desconocimiento y en contra de su voluntad, ahora abraza su libertad con claras metas enfrente.&nbsp;</p>
                <p class="scd-quote">&ldquo;Fue dif&iacute;cil al inicio, pero dije aunque estuviera frustrada, no iba a dejar que esto me bote. Yo voy a volver a mi familia y voy a dar lo mejor de mi vida para volverlos a ver. Los primeros meses fueron duros&rdquo;, expresa.</p>
                <p>&ldquo;Hab&iacute;a d&iacute;as en que me quedaba sola en la casa y me pon&iacute;a a llorar viendo fotos. Es una manera de desahogarme y un sentimiento dif&iacute;cil de olvidar, pero he aprendido a convivir con &eacute;l. M&aacute;s de alg&uacute;n d&iacute;a me echo mi lloradita y sigo para adelante&rdquo;, contin&uacute;a.</p>
                <p>Una de sus metas ya la cumpli&oacute;, declara con honra: conseguir un buen lugar de trabajo. El espacio de trabajo es probablemente uno de los mayores retos que enfrentan todas las personas desterradas por la exigencia f&iacute;sica que requiere la mayor&iacute;a de puestos, y por los pocos beneficios laborales que pueden obtener, adem&aacute;s de su salario.</p>
                <p>Al menos en el lugar donde trabaja Rayo, siente que es valorada y puede crecer dentro de &eacute;l. Dice que gracias a su carisma y a su buen &aacute;nimo &mdash;adem&aacute;s de sus conocimientos en el ingl&eacute;s&mdash; logr&oacute; conseguir su puesto, pero planea continuar y no solo quedarse ah&iacute;.</p>
                <p>&ldquo;Creo que todos podemos avanzar si no tenemos miedo a preguntar. No tengo miedo de pedir ayuda si la necesito. Por ejemplo, yo ni sab&iacute;a para d&oacute;nde agarrar con lo del accidente. Tuve que llamar a mi jefe y me dio indicaciones&rdquo;, cuenta.</p>
                </p>
            </div>
        </div>
    </div>

    <div class="scd-parallax-container">
        <div class="scd-sticky-image">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/mobile-4.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/est_7-1.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <h2>Independizarse,<br>el mayor reto para los estudiantes desterrados</h2>
                        <p>
                        <p>Rayo ya no vive con su hermana. Logr&oacute; mudarse y rentar un apartamento unos meses despu&eacute;s en San Francisco, California, junto con su novio, Hilfrem Sabor&iacute;o, y el activista pol&iacute;tico Max Jer&eacute;z. Ellos dos tambi&eacute;n fueron desterrados con los 222. Sabor&iacute;o nunca ejerci&oacute; ning&uacute;n activismo y fue detenido por el Ej&eacute;rcito del r&eacute;gimen al mismo tiempo que Rayo, en las v&iacute;speras de las elecciones municipales de 2022.&nbsp;</p>
                        <p>Rayo se&ntilde;ala que el hecho de haber sido capaces de rentar un apartamento se trata de un privilegio porque a la fecha, muchos de los desterrados no han logrado independizarse de las personas que los acogieron el 9 de febrero de 2023.&nbsp;</p>
                        <p>&ldquo;Aqu&iacute; para rentar deb&eacute;s de tener un historial de cr&eacute;dito, pruebas de que pod&eacute;s pagar la mensualidad y nosotros tenemos una hoja en blanco. S&eacute; que muchos de los 222 no lo han conseguido. S&eacute; que rentar fue un privilegio&rdquo;, reflexiona.</p>
                        <p>La mayor&iacute;a de los desterrados han creado redes entre ellos para apoyarse, emocional y econ&oacute;micamente, para compartir gastos, experiencias y su propia lucha que iniciaron en Nicaragua.&nbsp;</p>
                        <p>En sus tiempos libres se re&uacute;nen los excarcelados que viven cerca, y en el caso de su novio, Hilfrem y el novio de Samantha Jir&oacute;n, Kevin Sol&iacute;s, se re&uacute;nen para jugar f&uacute;tbol y pasar tiempo de ocio. Mientras que los que viven lejos, se hacen llamadas y mensajes para mantenerse al d&iacute;a.</p>
                        <p>&ldquo;Hay una muchacha con la que estuve presa con la que sigo en contacto. Estamos a una hora de diferencia. De hecho, sigo hablando con todas las muchachas. Las redes que hicimos son dif&iacute;ciles de cortar. Es un v&iacute;nculo m&aacute;s all&aacute; de lo que puede creer&rdquo;, sostiene Rayo.</p>
                        <p>Adem&aacute;s, lo que los une es la continuidad del activismo, que lejos de ser detenido por el destierro, fue impulsado. Cuando se les pregunta a todos ellos cu&aacute;les son sus demandas, todos tienen una respuesta clara: la libertad de los presos pol&iacute;ticos.</p>
                        <p>&ldquo;Sin lugar a dudas, la libertad para todas las personas encarceladas, la democracia para Nicaragua y la justicia para todas las v&iacute;ctimas, que son nuestras familias tambi&eacute;n y la gente que sigue dentro. Ellos est&aacute;n con el pa&iacute;s por c&aacute;rcel. Muchos no pueden salir, porque les quitan la nacionalidad&rdquo;, denuncia Rayo.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scd-parallax-container">
        <div class="scd-sticky-image">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/manos-1.jpeg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/est_6-1.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                <h2 class="scd-asterisk">***</h2>
                <h2>La necesidad de <br>liderazgos efectivos</h2>
                <p>
                <p>De nuevo al este de Estados Unidos, John Cerna es severo y cr&iacute;tico con muchos de los liderazgos que han ejercido diversos grupos opositores. &ldquo;Si estas personas no son capaces de confrontarse y decir lo que piensan, no son liderazgos efectivos&rdquo;, dice.</p>
                <p>Aunque trabaja en un servicio de catering, con muchas responsabilidades y &ldquo;un horario de locos&rdquo;, aclara que siempre est&aacute; pendiente de lo que sucede en Nicaragua, denuncia a trav&eacute;s de sus redes y ayuda a todas las personas nicarag&uuml;enses que llegan a Estados Unidos, ya sea con informaci&oacute;n o contactos que puedan ser &uacute;tiles.</p>
                <p>La autonom&iacute;a universitaria, su constante demanda, sigue siendo una de sus principales denuncias. No solo es porque la dictadura interrumpi&oacute; en dos ocasiones la oportunidad de terminar sus carreras. La primera vez por su expulsi&oacute;n de la Universidad de Ingenier&iacute;a y la segunda por su arresto frente a su &uacute;ltima alma m&aacute;ter, la antigua Universidad Centroamericana.</p>
                <p>Su denuncia no solo es por su propia experiencia, sino tambi&eacute;n porque muchos de sus amigos y familiares han sido afectados por la cancelaci&oacute;n de las personer&iacute;as jur&iacute;dicas de las universidades privadas, la confiscaci&oacute;n de los recintos y la imposici&oacute;n de la propaganda orteguista en estas instituciones robadas.</p>
                <p>Sus demandas tambi&eacute;n est&aacute;n enfocadas en las m&aacute;s de 90 personas detenidas por motivos pol&iacute;ticos hasta la actualidad. &ldquo;Yo viv&iacute; eso y s&eacute; las cosas que viven sus madres, porque las someten a todo tipo de humillaciones&rdquo;, expresa el exreo pol&iacute;tico, tambi&eacute;n conocido como El Tigrillo, su apodo conseguido cuando form&oacute; parte del movimiento scout.&nbsp;</p>
                <p>&ldquo;Las amistades que he hecho est&aacute;n muertas, presas o exiliadas. El activismo es algo que he guardado conmigo, no solo en estos cinco a&ntilde;os. Siempre he insistido en la educaci&oacute;n, ya que mi mam&aacute; es educadora. El civismo define el proceder de una sociedad&rdquo;, a&ntilde;ade.</p>
                <p>John Cerna es frentero. No dice las cosas a las espaldas de nadie y deja clara sus ideas en los espacios en los que est&aacute;. No obstante, es tranquilo y sereno. Con un 2023 lleno de cambios, cuenta el progreso de sus objetivos. Despu&eacute;s de una cirug&iacute;a en su hombro y un seguimiento m&eacute;dico a todos sus padecimientos (los que ten&iacute;a antes de su encarcelamiento y los que surgieron despu&eacute;s), dice que ha mejorado mucho.</p>
                <p>Todav&iacute;a le cuesta adaptarse a la luz y utiliza lentes, pero por lo dem&aacute;s, el ejercicio y el deporte han sido sus aliados. No solo por su bienestar f&iacute;sico, tambi&eacute;n mental. Tambi&eacute;n le cuesta estar en aglomeraciones y grupos grandes de personas, pues es dif&iacute;cil pasar de estar sometido a la total soledad a estar en constante compa&ntilde;&iacute;a.</p>
                <p>Con mucha alegr&iacute;a, se&ntilde;ala que logr&oacute; abrazar a &ldquo;sus mujeres maravillas&rdquo;: su mam&aacute; y sus dos hermanas. Dice que pronto estar&aacute; con sus hijos. &ldquo;El futuro para los valientes. Es una oportunidad&rdquo;, afirma.</p>
                </p>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="scd-parallax-container">
        <div class="scd-sticky-image">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/mobile-5.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/est_5-1.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <h2>Viene un futuro lleno<br>de esperanza</h2>
                        <p>
                        <p>Entre las demandas de Samantha Jir&oacute;n tambi&eacute;n est&aacute; la libertad de las personas detenidas injustamente por el r&eacute;gimen, m&aacute;s no la restituci&oacute;n de su nacionalidad nicarag&uuml;ense; al menos, no por el momento.</p>
                        <p>&ldquo;Yo puedo demandar mi nacionalidad, pero no hay condiciones seguras para un retorno a Nicaragua. No hay condiciones econ&oacute;micas, ni un futuro para nosotros los j&oacute;venes debido al cierre de todos los espacios de pensamiento. Incluso el profesor Freddy Quezada, que fue mi maestro, fue capturado y trasladado a La Modelo&rdquo;, manifiesta Jir&oacute;n.</p>
                        <p>&ldquo;Con la dictadura no se puede dialogar. No entiende palabras. La dictadura solo es al tromp&oacute;n y a la patada. Es lo que siempre conoce&rdquo;, expresa la joven activista. Desde Monteverde, un espacio para que los diferentes grupos de oposici&oacute;n converjan, Jir&oacute;n mantiene la agenda universitaria como prioridad.&nbsp;</p>
                        <p>Jir&oacute;n planea seguir estudiando Comunicaci&oacute;n y Ciencias Pol&iacute;ticas, las carreras que estaba cursando en Nicaragua. &ldquo;Me encanta el periodismo y escribir. Voy a continuar estudiando la carrera. Quiz&aacute; me especialice en temas pol&iacute;ticos, econ&oacute;micos y sociales, que es lo que siempre me ha gustado&rdquo;, se&ntilde;ala.</p>
                        <p>Tiene como destino Espa&ntilde;a porque como futura ciudadana tendr&iacute;a la oportunidad de inscribirse en alguna universidad p&uacute;blica de ese pa&iacute;s, no tendr&iacute;a barreras en el idioma y podr&iacute;a echar ra&iacute;ces en Europa.</p>
                        <p>Por su parte, Mildred Rayos planea acreditar sus notas universitarias en Estados Unidos y sacar su t&iacute;tulo de arquitecta. Si bien termin&oacute; la carrera en Nicaragua, justo cuando se tramitaba su t&iacute;tulo universitario, sufri&oacute; la detenci&oacute;n arbitraria. Sus metas son tales, que si tiene que invertir dinero para ver su t&iacute;tulo, lo har&aacute;, dice con determinaci&oacute;n.</p>
                        <p>&ldquo;No me importa. No me mat&eacute; cinco o seis a&ntilde;os para sacar mi t&iacute;tulo y ni siquiera tener mi t&iacute;tulo de bachiller&rdquo;, expresa.&nbsp;</p>
                        <p>Siempre con el objetivo de prepararse acad&eacute;micamente, John Cerna no se rendir&aacute; en terminar sus estudios. No importa que haya un destierro de por medio. Actualmente se encuentra inscrito en la Universidad Rafael Land&iacute;var (URL), una universidad jesuita que ofreci&oacute; la continuaci&oacute;n de estudios a estudiantes de la Universidad Centroamericana (UCA) despu&eacute;s de su confiscaci&oacute;n.</p>
                        <p>En modalidad virtual, Cerna pretende retomar la carrera de Ingenier&iacute;a Civil, que ya hab&iacute;a intentado estudiar, pero que la dictadura se lo impidi&oacute;. Adem&aacute;s, le emociona poder estudiar en una instituci&oacute;n jesuita en la que podr&aacute; continuar con el lema &ldquo;en todo amar y servir&rdquo;, lo que tanto lo inspir&oacute; de la antigua UCA.</p>
                        <p>Un futuro lleno de planes, aspiraciones, luchas y sue&ntilde;os rodea a estos muchachos. Son el atisbo de esperanza que la dictadura con ning&uacute;n castigo pol&iacute;tico pudo eliminar, ni tampoco lo conseguir&aacute;n. &ldquo;El futuro es para los valientes&rdquo;, dice nuevamente el &ldquo;Tigrillo&rdquo;.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col d-flex justify-content-between">
                <a href="<?php echo esc_url( get_permalink(42758) ); ?>" title="" class="btn scd-btn" >
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999999 12.5C0.999999 18.8579 6.14214 24 12.5 24C18.8579 24 24 18.8579 24 12.5C24 6.14214 18.8579 1 12.5 0.999999C6.14214 0.999999 0.999999 6.14214 0.999999 12.5Z" stroke="black"/>
                        <path d="M23.1787 12.5L7.57157 12.5" stroke="black"/>
                        <path d="M12.5 6.75L6.75 12.5L12.5 18.25" stroke="black"/>
                    </svg>
Anterior
                </a>
                <a href="<?php echo esc_url( get_permalink(43026) ); ?>" title="" class="btn scd-btn2" >
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 12.5C24 6.14214 18.8579 0.999999 12.5 0.999999C6.14214 0.999999 1 6.14214 1 12.5C1 18.8579 6.14214 24 12.5 24C18.8579 24 24 18.8579 24 12.5Z" stroke="black"/>
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
            var urlActual = encodeURIComponent(window.location.href);

            document.getElementById('btn-fb').addEventListener('click', function() {
                window.open(`https://www.facebook.com/sharer/sharer.php?u=${urlActual}`, '_blank');
            });

            document.getElementById('btn-X').addEventListener('click', function() {
                window.open(`https://twitter.com/intent/tweet?url=${urlActual}`, '_blank');
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
