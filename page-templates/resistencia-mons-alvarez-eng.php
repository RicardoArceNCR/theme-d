<?php

/*
* Template Name: resistencia-mons-alvarez-eng
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
            line-height: 37px;
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
                color: #F67504;
                font-family: 'Memphis';
                font-size: 31px;
                line-height: 35px;
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
                line-height: 24px;
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
                <img id="animatedElement" src="https://www.divergentes.com/wp-content/uploads/2024/02/IGLE_2.jpg" class="img-fluid"
                     alt="tunel">
                <a href="<?php echo esc_url( get_permalink(43033) ); ?>" title="" class="btn scd-btn2 my-4" >
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
                <h1 class="text-center">The silent resistance of Bishop Rolando Álvarez, </h1>
                <h2>who for eleven months refused to be banished by the dictatorship</h2>
                <p>
                    Bishop Rolando Alvarez's refusal to be part of the massive banishment of 222 Nicaraguans ordered by the dictatorship in February 2023, cost him eleven months in prison, harassment and isolation. However, his spiritual resistance exposed the false accusations against him and the regime's political hypocrisy, which could not break the bishop
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
                <p>When the 222 political prisoners banished by the Ortega-Murillo dictatorship boarded the plane provided by the United States on the morning of February 9, 2023, among the dozens of questions that exploded in their heads about their future and their families, one question stood out: Where was Bishop Rolando &Aacute;lvarez?</p>
                <p>That day, Bishop Alvarez did not even arrive at the Managua International Airport. He had been deprived of his freedom in the early morning of August 19, 2022, when a police squad of the regime kidnapped him, along with other religious people, after breaking into the Episcopal Curia of Matagalpa. He had become the dictatorship's most important political prisoner. </p>
                <p>Bishop Alvarez was taken to a guarded house, and the rest of the priests and people were sent to the Judicial Assistance Directorate (DAJ), known as El Chipote.</p>
                <p>The mystery about Bishop Alvarez's whereabouts was clarified by Daniel Ortega himself on the day of the banishment of the 222 political prisoners, in an appearance in which he criticized the bishop, whom he did not even refer to using his name or position in the Catholic Church, but called him the "Alvarez guy".&nbsp;</p>
                <p>"He was standing in line and got to the steps and started saying that he was not leaving. That first he would have to meet with the bishops and demand a meeting. I don't know what this man is thinking. That in the face of a decision of the Nicaraguan State, he will not comply. A resolution of a court of justice that is sending him to leave the country. He says he will not comply", said the dictator.</p>
                <p>The political prisoners, now free on US territory, revealed that in reality, Bishop Alvarez was never seen at the airport terminal. What became known later, which was not mentioned by Ortega in his speech, is that after refusing the banishment, the dictator, in an act of rage, directly sent him to La Modelo prison, to lock him up in a maximum security cell, known as El Infiernillo (The Little Hellhole) by the prisoners.</p>
                 </div>
        </div>
    </div>

    <div class="scd-parallax-container">
        <div class="scd-sticky-image" style="position: sticky; top: 0px; z-index: 5;">
            <picture>
                <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/Group-49-1.jpeg">
                <img src="https://www.divergentes.com/wp-content/uploads/2024/02/IGLE_1.jpg" class="img-fluid" alt="túnel">
            </picture>
        </div>
        <div class="scd-overlay"></div>
        <div class="scd-text-content">
            <div class="container scd-contenido">
                <div class="row">
                    <div class="col">
                        <p>The dictator's frustration became evident as he continued with his twisted story. He said that Alvarez was now "irritated, because now he is in an actual prison". He also stated that the religious man "was angry" and that is why he did not comply with "the decision by the Nicaraguan authorities".&nbsp;</p>
                        <p>He added that Alvarez had "arrogant" behavior and considered himself the head of the Church in Nicaragua. "He is unhinged. He arrived at La Modelo as a madman (...) He does not accept that they put him in a cell where there are hundreds of prisoners", said the dictator.</p>
                        <p>From that day on, Bishop Rolando Alvarez began a silent resistance to the dictatorship's constant outrages and abuses. He was tried and sentenced to 26 years and four months in prison with no right to defense. </p>
                        <p>He only learned of his sentence on March 25, 2023, during a family visit scheduled by the regime to display him before the propaganda media. </p>
                        <p>Five times he was presented by the dictatorship's propaganda, in an attempt to alleviate the national and international pressure demanding his unconditional freedom, during the time he was imprisoned.&nbsp;</p>
                        <p>While the regime continued to imprison and banish church members, Bishop Alvarez remained strong. Visibly thinner, he was always calm and polite to the the dictatorship's operators who participated in the farce organized by the regime. </p>
                        <p>Finally, as a result of direct negotiations between the Vatican and the dictatorship, on January 14, 2024, Bishop Alvarez joined a new group of 18 priests banished by the dictatorship. The number of religious men and women victims of this repressive measure by Ortega's regime is now over 203. </p>
                        <p>He was last seen in the Vatican, free and smiling, doing what he likes best, officiating mass, as part of his religious work. In the words of Bishop Silvio Baez, when he excitedly announced Bishop Alvarez's release, "the criminal dictatorship of Ortega and Murillo have not been able to defeat the power of God".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col-12">
                <iframe src='https://flo.uri.sh/visualisation/16723007/embed' title='Interactive or visual content' class='flourish-embed-iframe' frameborder='0' scrolling='no' style='width:100%;height:600px;' sandbox='allow-same-origin allow-forms allow-scripts allow-downloads allow-popups allow-popups-to-escape-sandbox allow-top-navigation-by-user-activation'></iframe>
            </div>
            <div class="col-12 d-flex justify-content-between">
                <a href="<?php echo esc_url( get_permalink(43292) ); ?>" title="" class="btn scd-btn" >
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999999 12.5C0.999999 18.8579 6.14214 24 12.5 24C18.8579 24 24 18.8579 24 12.5C24 6.14214 18.8579 1 12.5 0.999999C6.14214 0.999999 0.999999 6.14214 0.999999 12.5Z" stroke="black"/>
                        <path d="M23.1787 12.5L7.57157 12.5" stroke="black"/>
                        <path d="M12.5 6.75L6.75 12.5L12.5 18.25" stroke="black"/>
                    </svg>
Anterior
                </a>
                <a href="<?php echo esc_url( get_permalink(43300) ); ?>" title="" class="btn scd-btn2" >
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
