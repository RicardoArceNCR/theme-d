<?php

/*
* Template Name: vida-aspirantes-presidenciales-eng
* Template Post Type: post
* @package WordPress
*/

get_header();
?>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        .scd-intro h1 {
            font-family: 'Memphis';
            font-size: 39px;
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

        .scd-intro h1 span {
            font-family: 'Memphis';
            font-size: 64px;
            font-weight: bold;
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
                font-size: 25px;
                line-height: 28px;
                letter-spacing: -0.03em;
                color: #F67504;

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
                <img id="animatedElement" src="https://www.divergentes.com/wp-content/uploads/2024/02/NUNC_6.jpg" class="img-fluid"
                     alt="tunel">
                <a href="<?php echo esc_url( get_permalink(43026) ); ?>" title="" class="btn scd-btn2 my-4" >
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

                    Leer en Español
                </a>
                <h1 class="text-center">The lives of the presidential aspirants who challenged Orteguismo</h1>
                <h2>and were exiled</h2>
                <p>
                    The flight of February 9, 2023 changed the lives of the 222 released political prisoners in a radical way. The seven presidential aspirants that the Ortega-Murillo regime imprisoned for more than a year and a half were expelled on that plane. In exile, less than half of them are still active on political platforms
                </p>
                <p class="scd-intro-creditos">
                    By Divergentes <a href="https://twitter.com/DivergentesCA">(@DivergentesCA)</a>
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
                <p>Every morning, Juan Sebastian Chamorro runs through the streets of Indiana, USA. These days, his route is usually drenched in rain or covered by snow, but before returning home, he always does a series of sit-ups and lunges, the exercises he did during the two years he spent in prison.&nbsp;</p>
                <p>Juan Sebastian, 53, is a man of routine. He says that is what helped him not to break down in El Chipote, a detention center turned into a prison to punish and torture opponents against the regime, according to the testimonies of those who have been imprisoned there.&nbsp;</p>
                <p>In prison, Juan Sebasti&aacute;n got up early to exercise, had breakfast, rested, and continued exercising in the afternoon. Since he had no room to run, he measured the cell with the towel he used to dry himself after showering.&nbsp;</p>
                <p>"The label on the towel said 1.25 meters long, I used that reference and, between wall and wall, I calculated five meters," he told DIVERGENTES, weeks after his release from prison. Then Juan Sebasti&aacute;n walked around the cell: he made up to 3,000 laps a day, about 15 kilometers, according to his calculations.&nbsp;</p>
                <p>But the routine wouldn't end without sit-ups and lunges. He estimates that he did 700 lunges and 500 sit-ups in a day. "The exercise was quite distracting," he says.&nbsp;</p>
                <p>Juan Sebastian now has other things to do. After running and breakfast, he goes to his office at University of Notre Dame, where he has worked as a visiting professor since August of last year. </p>
                  </div>
        </div>
    </div>

    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col">
                <h2 class="scd-asterisk">***</h2>
                <h2>Prepared to face the consequences of exile</h2>
                <p>
                <p>His PhD in Economics, he says, helped him find a job to become economically stable with his family, after being banished, denationalized and confiscated a year ago by the regime of Daniel Ortega and Rosario Murillo.&nbsp;</p>
                <p>"I got off to a better start than the other banished people," says Juan Sebastian, referring to the 222 political prisoners expelled in the early morning of February 9, 2023, on a flight to Washington D.C.</p>
                <p>Living a period of his academic life in the United States, where he studied his bachelor's degree at the University of San Francisco, his master's degree at Georgetown University and his doctorate at the University of Wisconsin, helped him to adapt more quickly than other political prisoners to the United States.</p>
                <p>Prior to the 2021 elections, Juan Sebasti&aacute;n was one of seven aspirants who made their intentions to run for president public. However, Ortega and Murillo ordered the arrests of each of them months before the elections, which were considered illegitimate by the international democratic community. </p>
                </p>
            </div>
        </div>
    </div>

    <div class="scd-parallax-container">
        <div class="scd-sticky-image" style="position: sticky; top: 0px; z-index: 5;">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/m_1.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/est_8-1.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <h2>They disappeared from political life</h2>
                        <p>For this article we sought the versions of the other presidential aspirants imprisoned by the dictatorship: Noel Vidaurre, Medardo Mairena, Miguel Mora, Arturo Cruz and Cristiana Chamorro - to know how they were a year after their exile - but we only got the testimonies of Juan Sebasti&aacute;n Chamorro and F&eacute;lix Maradiaga.&nbsp;</p>
                        <p>They and Medardo Mairena are the only ones who remain active - at least publicly - in political platforms and international advocacy to denounce the human rights violations committed by the Ortega-Murillo regime in Nicaragua.</p>
                        <p>During the 611 days that Juan Sebastian was in El Chipote, he was one of the few political prisoners who did not receive visits from his closest family members. This was because his wife, Victoria Cardenas, was accused of "treason" in retaliation for a global human rights campaign she carried out, together with Berta Valle - Felix Maradiaga's wife - to denounce the situation of political prisoners in Nicaragua; while his daughter, Victoria Chamorro traveled to the United States to study at the University of Notre Dame, where Juan Sebastian is now a professor.&nbsp;</p>
                        <p>When the guards came to his cell on the night of February 8, 2023, Juan Sebastian had not seen his wife and daughter for more than two years. He shared the space with Roger Reyes, another political prisoner, with whom he chatted every night until they fell asleep or got bored.&nbsp;</p>
                        <p>But that night, when the guards handed them their clothes so they could change out of the blue " jumpsuit" they wore in prison, they both thought the worst was in store for them. </p>
                         </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scd-parallax-container">
        <div class="scd-sticky-image">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/m_2.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/NUNC_5.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <h2>A difficult goodbye</h2>
                        <p>
                        <p>Felix Maradiaga is one of the other presidential aspirants who were banished a year ago. He also went through a similar situation to Juan Sebastian: his wife and 12 year old daughter could not visit him in El Chipote.&nbsp;</p>
                        <p>Months before they were banished, Berta, his wife, told him through a messenger that there was a possibility that political prisoners would be banished, and therefore, he promised her that he would not refuse to leave the country when asked. "Berta thought I might stay," Felix said.&nbsp;</p>
                        <p>Getting on the plane was difficult, Felix says, because he had mixed feelings. On the one hand, he felt an emptiness about leaving the country and "the fight in Nicaragua," but on the other hand, he was happy to know that he was going to see his wife, daughter and mother, whom he had not seen for three years. That is why Felix kissed the ground before boarding the plane. Hours later, he kissed his family. </p>
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
                <h2>The "prison" desert</h2>
                <p>
                <p>He spent almost two years in El Chipote. The first 84 days he spent in "total isolation," he says. Of these, 77 days he was in a dark cell. He was not allowed any phone calls or lawyers, "it was like the desert," he says. </p>
                <p>Like the other political prisoners being held at that time in El Chipote, Felix had little access to sunlight, human contact or reading material. Even when family members brought them cartons of milk or soft drinks, the guards ripped off the labels so that they couldn't read them.&nbsp;</p>
                <p>He still finds it hard to talk about the possible traumas of prison. He admits that at some point he will take a break to review what he went through. He was received with a beating at El Chipote and subjected to long and intense interrogations. In most of them they asked him how much he paid the people who went to the protests in 2018, or who financed him. They also accused him of being a "mercenary" and "foreign agent."&nbsp;</p>
                <p>During his time in prison he developed skin and eye diseases, but Felix says the hardest thing was "not being able to have contact with my daughter and my wife." He was not allowed to receive letters or even drawings from the girl. He could not talk to her on the phone, except for a few weeks before his release from prison, when the political prisoners were granted some liberties.&nbsp;</p>
                <p>The suffering of prison is still with him. It is still hard for him to sit at a table to eat, "thinking that there are people in prison," he says, or to talk with his wife and daughter, "knowing that there are families separated by imprisonment. </p>

                </p>
            </div>
        </div>
    </div>
    <div class="scd-parallax-container">
        <div class="scd-sticky-image">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/m_3.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/js_3.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <h2>Nights in El Chipote</h2>
                        <p>
                        <p>El Chipote was a silent prison. The inmates were not allowed to talk to each other, much less to the guards. But at night, when there was less control, they would start talking to each other. In the absence of reading or writing material, Juan Sebastian began to remember everything he had studied, written, read or seen.&nbsp;</p>
                        <p>He was Max Jerez's cellmate for "a long time" - he does not remember the exact time - and had long talks with him about movies, books and documentaries they had both seen or read. He would tell all his companions about his travels.&nbsp;</p>
                        <p>With Luis Rivas, a political prisoner who was the CEO of Banpro and also has a PhD in Economics, he would talk about "economic theories or economic models". They had nothing else to do and so they would talk quietly among themselves. "Human nature helps you find refuge, and I found refuge in my cellmates," says Juan Sebastian.&nbsp;</p>
                        <p>His last companion was Roger Reyes, with whom he "read" the movements in the prison before leaving. They analyzed the events with pessimism. "The logic we had was that we always had to expect the worst from the dictatorship," says Juan Sebasti&aacute;n, adding: "What the regime did was to provoke the worst: torture us, make us feel bad and generate uncertainty".&nbsp;</p>
                        <p>Proof of this was that they were not told anything when they were taken out of prison to be put on the buses that took them to the airport. Juan Sebasti&aacute;n and Roger thought they would be taken to a massive court hearing.</p>
                        <p>Then, they thought they were being transferred to La Modelo prison, in Tipitapa. "We realized we were going to the airport when the bus turned and went into the Air Force gate," he says. "It was a normal thing for them to keep us in that state of anxiety and terror, it's their (the dictatorship's) way of operating."&nbsp;</p>
                        <p>As he boarded the plane, Juan Sebastian says he was happy because he knew he would soon be reunited with his family in the United States. He went from being one of the few cases who did not receive family visits, to sleeping with his wife and daughter in a matter of hours. "In that sense the banishment was not so traumatic for me," he says. </p>
                          </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="scd-parallax-container">
        <div class="scd-sticky-image">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/m_4.jpg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/js_4.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <h2>Betting on Monteverde</h2>
                        <p>
                        <p>A few days after arriving in the United States, Juan Sebastian was invited to participate in the Monteverde political platform, a space for dialogue between opponents of different political parties. He is currently the spokesperson and devotes much of his time to it. "I am dedicated to the fight for human rights, political prisoners, the democratization of Nicaragua and the creation of opposition alliances," he says.</p>
                        <p>He has dedicated the other part of his time to writing a book on Nicaragua's political crisis since 2018. He hopes to publish it in English throughout this year, "so that it will reach an English-speaking audience." The book, he says, has helped him organize his ideas and reflect on the events with "historical distance."&nbsp;</p>
                        <p>Another of his projects is to write down his political and economic ideas with historical reflections on "why this crisis happened, and what should be done to solve Nicaragua's problems."&nbsp;</p>
                        <p>-After being banished and confiscated, do you regret getting involved in politics," we asked Juan Sebastian.&nbsp;</p>
                        <p>Being in a cell in unhealthy conditions, with bad food, I asked myself the same question... and I don't regret it at all. There was no way for one to keep quiet, and it fills me with pride to say that I took the right side...I put myself in the spotlight because Funides (Nicaraguan Foundation for Economic and Social Development), of which I was the director, arranged, from the first weeks of the 2018 crisis, a fund to care for the victims, something that was not well known...This was the strongest reason for the interrogations I went through in El Chipote.</p>
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
                <h2>The hardest part of being exiled</h2>
                <p>
                <p>When Felix Maradiaga is asked about the harshness of banishment, he says that since ancient times banishment "has been a perverse resource used by tyrannies to get rid of those they consider their main threat". In Ancient Rome, banishment was considered a punishment second only to the death penalty.&nbsp;</p>
                <p>Felix says he has coped with banishment through hard work. After all his assets were confiscated in Nicaragua, he has experienced "many material limitations" in the United States.&nbsp;</p>
                <p>He says he is currently working as an advisor and consultant with several international organizations and private companies, some of them focused on projects related to countries such as Ukraine, Guatemala and China.&nbsp;</p>
                <p>He is also in charge of a project called "Freedom Academy", which "serves the training needs of democracy activists around the world".&nbsp;</p>
                <p>In the Nicaraguan political arena, Felix is focused on the Foundation for Nicaraguan Freedom, founded in Nicaragua in 2012 and closed by the Ortega-Murillo regime in 2022.&nbsp;</p>
                <p>"The goal is to have an institutional and technical platform to support the work of civic resistance groups," he explains. He sits on the board of Freedom House, and this allows him to broaden his focus "on issues of promoting freedom in a more global context."&nbsp;</p>
                <p>Felix often travels to different countries. He regularly visits Costa Rica to meet with exiled opposition groups in that country. On some occasions he has traveled with his daughter, Alejandra, with whom he is excited to see Nicaragua's Lake Cocibolca from the plane. When the little girl sees him very excited, she always tells him "daddy, don't be sad, we will be back".</p>
                </p>
            </div>
        </div>
    </div>
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col d-flex justify-content-between">
                <a href="<?php echo esc_url( get_permalink(43289) ); ?>" title="" class="btn scd-btn" >
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999999 12.5C0.999999 18.8579 6.14214 24 12.5 24C18.8579 24 24 18.8579 24 12.5C24 6.14214 18.8579 1 12.5 0.999999C6.14214 0.999999 0.999999 6.14214 0.999999 12.5Z" stroke="black"/>
                        <path d="M23.1787 12.5L7.57157 12.5" stroke="black"/>
                        <path d="M12.5 6.75L6.75 12.5L12.5 18.25" stroke="black"/>
                    </svg>
Anterior
                </a>
                <a href="<?php echo esc_url( get_permalink(43297) ); ?>" title="" class="btn scd-btn2" >
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
