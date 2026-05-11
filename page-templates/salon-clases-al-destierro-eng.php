<?php

/*
* Template Name: salon-clases-destierro-eng
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
                <a href="<?php echo esc_url( get_permalink(42758) ); ?>" title="" class="btn scd-btn2 my-4" >
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
                <h1 class="text-center">From the classroom to exile</h1>
                <h2>The journey of students imprisoned by Ortega's government</h2>
                <p>
                    Student activism in Nicaragua is punished with persecution, jail and torture under the Ortega-Murillo dictatorship. The regime sees students as traitors to the homeland if they don't agree with their repressive policies.  John Cerna, Samantha Jiron and Mildred Rayo, punished with banishment and denationalization, and who now struggle to survive in exile, suffered this in the flesh
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
                <p>To speak, John Cerna has to come out of the darkness of his room. He apologizes and opens the fully closed curtains. The after-effects of having been deprived of light for almost three years persist. He explains that his eyes have not yet adapted and that is why he prefers to be in the dark.</p>
                <p>The city that now welcomes him is cold and very far from his hometown Matagalpa. Since his exile he has been in different places. Though at the time of this interview he is in Texas, he says it is better not to specify the city because of his constant mobility.</p>
                <p>Once seated in front of the screen and with enough clarity to see, he speaks fluently and concisely about the last year of his life, marked by an unprecedented event in the history of Nicaragua: the denationalization and banishment of 222 political prisoners to Washington D.C., United States.</p>
                <p>Advocating for university autonomy, demanding justice for the students killed in the 2018 protests and demanding democracy for the country, cost him more than a thousand days in jail, after being sentenced to 12 years in prison on the fabricated charge of illegal drug trafficking.&nbsp;</p>
                <p>Even after several years of detention, Cerna is still meticulous. He knows how many days he was in jail and how many days he has been free. He knows that he was declared stateless long before his banishment, that at midnight on February 8, 2023, he left his cell, El Infiernillo, and that 36 hours after arriving on U.S. territory, he decided to go his own way.</p>
                <p>As soon as he arrived in the country of his exile, he also knew what his priorities were: to attend to his health, aggravated by imprisonment and torture by the guards; to resume his studies, interrupted by the dictatorship; and to regulate his immigration status, at that time non-existent.&nbsp;</p>
                <p>His reasons for knowing all of the above are clear: "I already knew I was going to be released," he says with certainty. "I didn't know when or how, but I told my mother to get ready because they were going to call her to let her know I was free," he says. And so it was, although not in the way she expected.</p>
                <p>From the moment he arrived until now, it has been a year of changes, learning and challenges. A year of reunions, freedom and adaptation. "I was in a little concrete box and I was thrown into a concrete jungle with more than 300 million inhabitants, who have another language, another culture and another way of looking at life," he says. The United States was the last country he had in his mind as a place of exile.</p>
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
                        <p>Only a day and a half after being in his new country being evaluated, examined and inspected by U.S. medical and immigration authorities, he grabbed his practically empty backpack - his only belongings - and left. He didn't want to be detained again, much less for a list of vaccinations he needed to get. "I just thought: I came from being in a box and they want to put me in a bigger box," he repeats.&nbsp;</p>
                        <p>He does the math again and estimates that since he was released from prison and banished to the United States, until this conversation with DIVERGENTES, exactly 301 days have passed. "I always say that the person they used to know stayed in El Infiernillo. That's where he stayed because he went through a process of metamorphosis and transformation," he says.</p>
                        <p>Although the confinement to which the Ortega Murillo dictatorship subjected him changed him in many ways, his essence remains the same. The dictatorship could not take away what was most important to him: his faith in God, his love for his family and his determination to stay alive.&nbsp;</p>
                        <p>"Today I can say that I took care of my legal documents to stay in the country, a work permit, a social security number and a driver's license," he says.</p>
                        <p>"I can also say that I am no longer stateless," he proudly points to one of his latest accomplishments. He obtained Spanish nationality two days after his 28th birthday, July 25, 2023.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col">
                <h2 class="scd-asterisk">***</h2>
                <h2>Denationalization,<br>the regime's political punishment</h2>
                <p>
                <p>The youngest of those imprisoned, political, student and social activists, were not immune to this measure. Unlike other groups, the vast majority of them were studying or finishing their university degrees.&nbsp;</p>
                <p>When they made their denationalization public on February 9, 2023, Cerna was not even sure what it meant to be "stateless". The only person he knew with that status, Albert Einstein, came to mind. Confusion overwhelmed him.</p>
                <p>"When I was told I was stateless, I hesitated over the term. The only person who came to my mind was someone famous who had nothing to do with me. The only one I knew who was stateless was Albert Einstein. How am I going to compare myself to such a high-profile person?" he says.</p>
                <p>It was no wonder. Statelessness was a political punishment that had not been seen in the region for many years, and it is classified as a crime against humanity. When this sanction was brought to light again by the regime, the general reaction was confusion.</p>
                <p>On February 9, 2023, it was possibly not the banishment that shocked the population and the international community the most, but the creation of a law declaring the loss of Nicaraguan citizenship and leaving more than 200 people under civil death at that time.</p>
                <p>In addition to the law of denationalization and treason, the assets of the denationalized individuals and their families would also be taken away, something that although it is not in the law, the regime enforces.</p>
                <p>In view of this, Cerna says that luckily "he does not have a dime". What he has after the stripping of his nationality is the affection for his country and the hope that everything will get better. "I am a Matagalpan and Nicaraguan by the grace of God. It is not a piece of paper that will take away my love for that little piece of land where I was born," he says.</p>
                <p>As a sign of his sense of belonging to the country, he always wears a Nicaraguan flag pin on his vest at his current job, where he is part of a catering service. He grabs the little blue and white pin, shows it to the camera and smiles in this long-distance interview.</p>

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
                        <h2>Physical aftermath,<br>a sign of political violence</h2>
                        <p>
                        <p>Nearly three thousand kilometers away from Cerna, in a colder and more distant land, is student activist Samantha Jiron. Passionate about political science and communication, and marked by a strong sense of justice. She was the youngest female political prisoner held by the dictatorship until February 9, 2023.</p>
                        <p>Like many, she was captured in the year of the electoral fraud, the year in which for the fourth consecutive time Daniel Ortega declared himself president of Nicaragua, with all his electoral competitors locked up in jail or in exile.&nbsp;</p>
                        <p>Like other exiled student activists, Jiron's post-imprisonment health is an issue. With difficulty, due to a severe cough that attacks her, she says she is recovering from an unexpected surgery. Her left ovary was twisted and she needed immediate surgery.</p>
                        <p>"Just like that, it twisted out of nowhere," she says. The twisting of her ovary happened in October 2023, just a few months after her partner and also an exiled political prisoner, Kevin Solis, experienced a facial paralysis "out of the blue".</p>
                        <p>However, this is no coincidence. Jiron knows the origin of all their ills: the after-effects of being in the regime's dungeons, deprived of medical attention and any other humanitarian needs they required at the time.</p>
                        <p>She, who has always been in good health and had few medical problems, spent her last year in the United States riddled with illnesses, discomforts and worries.</p>
                        <p>"It's completely after-effects and I'm a witness to that," she says. "I have had many health problems, both while in prison and after my incarceration," she says. These are the manifestations of physical, emotional and mental damages of being unjustly deprived of liberty for more than a year.</p>
                        <p>The first consequence she noticed is her inability to be in closed spaces, even if it is a car or a bus. "My blood pressure drops, my blood sugar drops, I turn pale and I feel like I'm going to faint," she says.</p>
                        <p>Surprised by her reactions, she went to a doctor to find out if the reason was a blood pressure problem, but the doctor told her that it was all an emotional reaction to experiencing confinement again.</p>
                        <p>"I had never been through this before I was in prison. I've never had these medical problems before," she says. To reduce the constant discomfort, she wears a special bracelet that regulates her blood pressure. Although she still has anxiety attacks, with this device she can at least control them.</p>
                        <p>Because of the special protection that Jiron has with the humanitarian parole - which the rest of the 222 exiles also have - she has an insurance called Medical, which is available only for the state where she lives, California. So her surgery and postoperative treatment, which cost $89,000, was not paid for by her. "Getting sick here is the worst thing that can happen to you," she says.</p>
                        <p>Even in the midst of all the problems, she laughs and says that when her boyfriend, Solis, suffered the facial paralysis that cost more than $20,000, they were joking about fleeing the country if the insurance company did not pay the hospital bill.</p>
                        <p>The young student says something that all the other banished people endlessly repeat: "that they sent us to the United States doesn't solve our lives."</p>
                        <p>"Many say that they made it easier for us because we came here, but that's not the case," she emphasizes. Due to her constant medical problems and to improve her health, Jiron decided to quit her job at the company where she worked.&nbsp;</p>
                        <p>There, many of her responsibilities involved physical effort. In addition, as in any other place in the North American country, if she did not have at least one year working, she had no right to receive compensation for her rest and recovery days.</p>
                        <p>"We have little time to work (my partner and I). In these companies they don't give you a leave for full recovery, not in this company at least. A job is not worth your health deteriorating," she adds.</p>
                        <p>She says that the month in which Sol&iacute;s was paralyzed, she was unable to work for several weeks and therefore did not even receive half of her salary. Her insurance only covers medical expenses, but does not cover the lost work days.&nbsp;</p>
                        <p>The space where she lives alone costs $1800 and it is not even an apartment. It is a studio apartment with no rooms or partitions. It only has a small bathroom and a laundry room that simulates a kitchen. It is enough to look around to see the whole space.</p>
                        <p>Exiled and now a foreigner in another country, these are elements that intertwine to make it difficult for her to find a job that will allow her to afford a better place. "It's very difficult to get a job here, even if you're a professional. It's not like I'm a journalist and I'm going to work in a media outlet here. The jobs for us are different," she stresses. "Us," meaning the banished.</p>
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
                <h2>2023 was an unusual<br>year for the banished</h2>
                <p>
                <p>In the middle of the conversation, Jiron coughs again. A reminder that her health remains delicate. She makes a couple of conjectures about her cough. It could be because it's the cold time of year and everyone tends to catch a cold, but it could also be pneumonia because it's been going on for too long.&nbsp;</p>
                <p>The young woman defines her last year as "unusual". "You don't expect to live through what has happened to me and to the 221 political prisoners who have been released," she explains. On the one hand, it is the year of her freedom, after a long time locked up. On the other hand, it is a complex year because of all the challenges of having arrived in the United States as an exile.</p>
                <p>Like so many others, she had no family and no one to welcome her when she arrived. That meant adapting to this new context only with her partner's company. The distance that separates her and her loved ones is felt much more than when she was imprisoned in Nicaragua.</p>
                <p>"I have gone through very difficult moments of depression far from my family. That adds to the emotional problems, the traumas I bring from prison and the uncertainty of what will happen to me and my future. It has been a very difficult year," says the now 24-year-old activist.</p>
                <p>Above all, her future and the uncertainty that comes with it, is a subject that occupies her mind most of the time. Although she was one of the first exiles to apply for citizenship offered by the Government of Spain, she has yet to receive a response to her application. She is not the only one. Another large group of released prisoners are still waiting, she says.</p>
                <p>"They haven't told me when my (Spanish) passport will be ready. I am always sending emails to find out how my process is going. It is difficult and exhausting to have to wait all these months. Here it is not easy to keep an apartment and be in these conditions," she says.</p>
                <p>One of her goals is to move to Spain with her partner as soon as she gets her passport. Solis obtained it on December 4 last year. In the meantime, she will have to wait for her new nationality, which also represents hope, in the freezing San Francisco Bay Area. </p>
                </p>
            </div>
        </div>
    </div>
    <div class="container scd-contenido py-5">
        <div class="row">
            <div class="col">
                <h2 class="scd-asterisk">***</h2>
                <h2>Banishment meant <br>the separation of families</h2>
                <p>
                <p>Just a couple of kilometers ahead, a young woman turns on her computer. As soon as she sets up her camera, the wound Mildred Rayo has on her upper lip is noticeable, evidence of the recent accident she had on her electric skateboard.</p>
                <p>She explains that she collided with another person who was also riding a skateboard and fell face first to the ground. The result was a cut on her lips and a bruise on her front teeth. However, despite her accident, she is smiling and excited to talk.</p>
                <p>Her sense of humor and optimism for life can easily hide everything she experienced in her last four months in Nicaragua: the arbitrary detention by the dictatorship's military, the abuse at the time of her check-up and the unexpected banishment.</p>
                <p>She says that every time she tells her story to her co-workers at the hotel where she is a receptionist, they tell her it sounds like something out of a movie script. Repression, imprisonment, banishment and statelessness.</p>
                <p>"When they ask me how I ended up here and I explain everything that happens in Nicaragua, they always say 'I can't believe you, it's like a movie.' Even though we think the situation is well-known, it's not," Rayo says.</p>
                <p>For her, her exile is about ups and downs. Moments of success and achievement, and moments of sadness and unease. "There have been moments of a lot of frustration, especially the first few months. It was hard because I didn't see myself leaving Nicaragua and being here is difficult. Everything is bureaucratic and slow. There is no way to get settled sooner," she says, annoyed.</p>
                <p>Unlike most of the exiles, she did not opt for one of the citizenships offered by more than five Latin American countries and Spain, but decided to apply for political asylum in the United States. Once the process is completed, she will proceed to address the issue of her nationality.</p>
                <p>The reason: she does not want to be farther away from her family. Because, obtaining citizenship from the voluntary countries means having to eventually leave the United States. That is something she definitely does not want because it would be to mark more distance between her and her loved ones. In fact, when she arrived in the country, one of the first people to welcome her was her older sister, who resides in Miami and with whom she lived in the following months.</p>
                <p>On the contrary, she wants to settle down in the North American country and with assured economic stability, she intends to bring her parents so that her family will be reunited again.&nbsp;</p>
                <p>"Sometimes I have felt very lonely without my family. After the accident I asked myself who is going to take care of me now? It's a habit. You can be 30 years old and say 'I want my mom to make me some soup'. There is emotional support and it's been hard without it," she says with tears in her eyes.</p>
                <picture>
                    <source media="(max-width: 768px)" srcset="https://www.divergentes.com/wp-content/uploads/2024/02/mobile-2.png">
                    <img src="https://www.divergentes.com/wp-content/uploads/2024/02/est_4-1.jpg" class="img-fluid" alt="túnel">
                </picture>
                <p>In reality, Rayo never wanted to leave the country where she was born and raised, not even in spite of all the persecution and harassment she experienced as a student activist and member of the Civic Alliance for Justice and Democracy (Alianza C&iacute;vica por la Justicia y la Democracia).</p>
                <p>Although she did not know how much she would suffer because of her sudden banishment, only days before she had been convicted for allegedly "conspiring to undermine national integrity".&nbsp;</p>
                <p>Even if she had been released in Nicaragua by a miracle of fate, Rayo would not have chosen to flee. Such was her stubbornness to stay in her home country. The Ortega-Murillo dictatorship took away her only desire.</p>
                <p>Despite having been sent away completely unaware and against her will, she now embraces her freedom with clear goals ahead of her.&nbsp;</p>
                <p>"It was hard at first, but I told myself even though I was frustrated, that I wasn't going to let this drag me. I'm going to go back to my family and I'm going to give the best of my life to see them again. The first few months were hard," she says.</p>
                <p>"There were days when I was alone in the house and I started to cry looking at pictures. It's a way to vent and a difficult feeling to forget, but I've learned to live with it. Some days I've cried a little and moved on," she continues.</p>
                <p>She has already achieved one of her goals, she says with pride: to find a good place to work. Work is probably one of the biggest challenges faced by all exiles because of the physical demands of most jobs, and the few job benefits they can get, apart from their salary.</p>
                <p>At least where Rayo works, she feels she is valued and that she can grow. She says that thanks to her charisma and good spirits - in addition to her English skills - she managed to get her position, but she plans to continue and not just stay there.</p>
                <p>"I think we can all move forward if we are not afraid to ask. I'm not afraid to ask for help if I need it. For example, I didn't even know who to turn to about the accident. I had to call my boss and he gave me instructions," she says.</p>
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
                        <h2>Becoming independent,<br>the biggest challenge for exiled students</h2>
                        <p>
                        <p>Rayo no longer lives with her sister. She managed to move out and rent an apartment a few months later in San Francisco, California, along with her boyfriend, Hilfrem Sabor&iacute;o, and political activist Max Jer&eacute;z. Sabor&iacute;o was never engaged in any activism and was detained by the regime's military at the same time as Rayo, on the eve of the 2022 municipal elections.&nbsp;</p>
                        <p>Rayo points out that the fact that they were able to rent an apartment is a privilege because to date, many of the exiles have not been able to become independent from the people who took them in on February 9, 2023.&nbsp;</p>
                        <p>"To be able to rent here you must have a credit history, proof that you can pay the monthly rent, and we don't have one yet. I know that many of the 222 don't have it. I know that renting has been a privilege," she says.</p>
                        <p>Most of the exiles have created networks to emotionally and economically support each other, to share expenses, experiences and their own fight that they started in Nicaragua.&nbsp;</p>
                        <p>In their free time, the former prisoners who live nearby get together, and in the case of her boyfriend, Hilfrem and Samantha Jiron's boyfriend, Kevin Solis, they meet to play soccer and spend time together. While those who live far away make calls and text each other to stay in touch.</p>
                        <p>"There's a girl I was in prison with who I still talk to. We are an hour apart. In fact, I still talk to all the girls. The networks we made are hard to break. It's a bond beyond belief," Rayo says.</p>
                        <p>Moreover, what unites them is their continued activism, which, far from being stopped by the banishment, was driven by it. When all of them are asked what their demands are, they all have a clear answer: freedom for political prisoners.</p>
                        <p>"Without a doubt, freedom for all the imprisoned people, democracy for Nicaragua and justice for all the victims, who are our families as well and the people who are still inside. They have a prison for a country. Many cannot leave, because they had their nationality taken away", denounces Rayo.</p>
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
                <h2>The need for <br>effective leadership</h2>
                <p>
                        <p>Back in the eastern United States, John Cerna is harsh and critical of many of the leaderships that have been exercised by various opposition groups. "If these people are not able to confront each other and speak their minds, they are not effective leaders," he says.</p>
                        <p>Although he works in a catering service, with many responsibilities and "a crazy schedule," he clarifies that he is always aware of what is happening in Nicaragua, reports through his social media accounts and helps all Nicaraguans who come to the United States, either with information or contacts that may be useful.</p>
                        <p>University autonomy is his constant demand. It is not only because the dictatorship interrupted his opportunity to finish his degrees on two occasions. The first time by expelling him from the University of Engineering and the second time by arresting him outside of the university, the former Central American University.</p>
                        <p>His demands are not only because of his own experience, but also because many of his friends and family members have been affected by the cancellation of the legal status of private universities, the confiscation of the campuses and the imposition of Ortega's propaganda in these stolen institutions.</p>
                        <p>His demands are also focused on the more than 90 people currently detained for political reasons. "I lived through that and I know the things their mothers go through, because they are subjected to all kinds of humiliations", says the former politician, also known as El Tigrillo, a nickname he got when he was part of the Scouts.</p>
                        <p>"My friends are dead, arrested, or in exile. Activism is something I have kept with me, not only in these five years. I have always insisted on education, since my mother is an educator. Civility defines a society's behavior," he adds.</p>
                        <p>John Cerna is straightforward. He does not say things behind anyone's back and makes his ideas clear in the spaces where he is. However, he is calm and serene. With a 2023 full of changes, he talks about his progress towards his goals. After surgery on his shoulder and medical follow-up on all his conditions (those he had before his incarceration and those that followed), he says he has improved a lot.</p>
                        <p>He still struggles to adapt to light and wears glasses, but exercise and sports have been his allies. Not only for his physical well-being, but also mentally. He also finds it difficult to be in crowds and large groups of people, because it is difficult to go from being subjected to total solitude to being in constant company.</p>
                        <p>With great joy, he says that he was able to embrace "his wonder women": his mother and his two sisters. He says he will soon be with his children. "The future is an opportunity to brave people," he says.</p>
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
                        <h2>A future full of hope <br>is coming</h2>
                        <p>
                        <p>Samantha Jiron's demands also include the release of those unfairly detained by the regime, but not the restitution of her Nicaraguan nationality; at least, not for the moment.</p>
                        <p>"I can demand my nationality, but there are no safe conditions for a return to Nicaragua. There are no economic conditions, nor a future for us young people due to the closing of all spaces for thought. Even Professor Freddy Quezada, who was my teacher, was captured and transferred to La Modelo," said Jiron.</p>
                        <p>"There can be no dialogue with the dictatorship. They don't understand words. The dictatorship only understands violence. It is the only thing they know," says the young activist. From Monteverde, a space for the different opposition groups to come together, Jiron keeps the university agenda as a priority.&nbsp;</p>
                        <p>Jir&oacute;n plans to continue studying Communication and Political Science, the majors she was studying in Nicaragua. "I love journalism and writing. I'm going to continue studying that. Maybe I will specialize in political, economic and social issues, which is what I have always liked," she says.</p>
                        <p>Her target destination is Spain because as a future citizen she would have the opportunity to enroll in a public university in that country, she would have no language barriers, and she could settle down in Europe.</p>
                        <p>Meanwhile, Mildred Rayos plans to certify her university grades in the United States and get an architecture degree. Although she finished her degree in Nicaragua, she was arbitrarily detained just as she was getting her university diploma. Her goals are such that if she has to pay to get her diploma, she will do it, she says with determination.</p>
                        <p>"I don't care. I didn't work so hard for five or six years to get my degree and not even have my diploma," she says.&nbsp;</p>
                        <p>Always with the goal of preparing himself academically, John Cerna will not give up on finishing his studies. It doesn't matter that there is banishment in between. He is currently enrolled at Universidad Rafael Land&iacute;var (URL), a Jesuit university that offered the continuation of studies to Universidad Centroamericana (UCA) students after its confiscation.</p>
                        <p>Online, Cerna intends to resume his studies in Civil Engineering, which he had already tried to study, but the dictatorship prevented him from doing so. He is also excited to be able to study at a Jesuit institution where he will be able to continue with the Jesuit mission "in all things to love and serve", which inspired him at former UCA.</p>
                        <p>A future full of plans, aspirations, struggles and dreams surrounds these students. They are the hope that the dictatorship could not erase with any political punishment, nor will they be able to do so. "The future is for the brave", says "Tigrillo" again.</p>
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
                <a href="<?php echo esc_url( get_permalink(43289) ); ?>" title="" class="btn scd-btn2" >
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
