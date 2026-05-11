<?php

/*
* Template Name: desterrados-eng
* Template Post Type: post
* @package WordPress
*/


get_header();

?>


<script src="https://unpkg.com/gsap@3.12.5/dist/gsap.min.js"></script>


<main>
    <!-- <div class="vignette"></div>   -->
    <img src="https://www.divergentes.com/wp-content/uploads/2024/01/back-nn.jpg" data-speedx="0.025" data-speedy="0.21" data-speedz="0.001" data-rotation="0" data-distance="40" data-top="100" class="parallax bg-img" >

    <!--style="transition: 3s cubic-bezier(0.165, 0.84, 0.44, 1)";-->

    <h1 class="titulo_desterrados  hide" data-speedx="0" data-speedy="0" data-speedz="0" data-rotation="0" data-distance="0">BANISHED</h1>
    <img src="https://www.divergentes.com/wp-content/uploads/2024/01/guardabarranco-4.png" data-speedx="0.0030" data-speedy="0.045" data-speedz="0.035" data-rotation="1.5" data-distance="55" data-top="100" class="parallax guarda4"  >
    <!--style="transition: 2s cubic-bezier(0.165, 0.84, 0.44, 1)";-->

    <img src="https://www.divergentes.com/wp-content/uploads/2024/01/guardabarranco-3.png" data-speedx="0.0030" data-speedy="0.045" data-speedz="0.035" data-rotation="1.5" data-distance="187" data-top="100" class="parallax guarda3" >
    <!--style="transition: 3.2s cubic-bezier(0.165, 0.84, 0.44, 1)";-->

    <img src="https://www.divergentes.com/wp-content/uploads/2024/01/avion_n-2.png" data-speedx="0.01" data-speedy="0" data-speedz="1.8" data-rotation="0.2"  data-distance="-90" data-top="100" class="parallax avionImg">






    <!--style="transition: 1.4s cubic-bezier(0.165, 0.84, 0.44, 1)";-->

    <img src="https://www.divergentes.com/wp-content/uploads/2024/01/guardabarranco-2.png" data-speedx="0.05" data-speedy="0.1" data-speedz="0.055" data-rotation="-0.7" data-top="100" data-distance="-3" class="guarda2 parallax">
    <!--style="transition: 2.3s cubic-bezier(0.165, 0.84, 0.44, 1)";-->



    <img src="https://www.divergentes.com/wp-content/uploads/2024/01/guardabarranco.png" data-speedx="0.1" data-speedy="-0.07" data-speedz="4" data-rotation="0.5" data-top="100" data-distance="-10"  class="guarda parallax" ;>
    <!-- <button class="btn subtituloPortada parallax" data-speedx="0" data-speedy="0" data-speedz="0" data-rotation="0" data-distance="470">hola</button> -->



    <h2  data-speedx="0" data-speedy="0" data-speedz="0" data-rotation="0" data-top="100" data-distance="390" class="col-md-6 subtituloPortada-0 ">BANISHED</h2>
    <h2  data-speedx="0" data-speedy="0" data-speedz="0" data-rotation="0" data-top="100" data-distance="190" class="col-md-6 subtituloPortada ">On February 9, 2023, Nicaragua experienced a bittersweet historical event: 222 Nicaraguans imprisoned for exercising their freedom of thought were released. But their release from the regime's dungeons came with their banishment, ordered by Daniel Ortega and Rosario Murillo. A year after, through testimonies, DIVERGENTES describes how these former political prisoners are now facing life, far from their homes, in a new country and clinging to the hope that, one day soon, they will be able to return to their homeland.</h2>
    <img id="image" src="https://www.divergentes.com/wp-content/uploads/2024/02/pausa.png" data-speedx="0" data-speedy="0" data-speedz="0" data-rotation="0" data-distance="130" class="hide  audiogio" style="cursor: pointer">
    <audio id="audio" src="https://www.divergentes.com/wp-content/uploads/2024/02/Pajaros-Mudos_mezcla.mp3" hidden></audio>

    <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
</main>



<?php
the_content();
?>




<style>
    @import url('https://fonts.googleapis.com/css2?family=Arvo&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300&display=swap');
    @font-face {
        font-family: "Memphis-ExtraBold";
        src: url(https://www.divergentes.com/wp-content/themes/divergentes/css/fonts/memphi31.ttf);
    }
    *,
    *::before,
    *::after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 17px;
    }

    body {
        font-family: "Memphis-ExtraBold", sans-serif;
    }

    ::selection {
        background-color: #f67504cd;
    }

    .parallax {
        pointer-events: none;
        transition: 2.1s cubic-bezier(0.165, 0.84, 0.44, 1);
    }


    /* BOOSTRAP ///////////////////////////////// */


    .my-flex-container {
        max-width: 100%;
    }

    main {
        position: relative;
        background-color: #17181b;
        height: 813px;
        width: 100vw;
        overflow: hidden;
    }

    .bg-img {
        position: absolute;
        z-index: 2;
        transform: translate(-50%, -99px) !important;
        max-width: 150%;
        left: 60%;
        top: -1199px;
    }

    .titulo_desterrados {
        z-index: 3;
        position: absolute;
        pointer-events: auto;
        transform: translate(-50%, -1%);
        font-family: 'Memphis-ExtraBold', serif;
        color: white;
        text-align: center;
        font-size: 3.5rem;
        letter-spacing: -1px;
        left: 50%;
        top: 17px;
    }

    .avionImg {
        position: absolute;
        z-index: 11;
        transform: translate(-50%, -9900px);
        max-width: 800px !important;
        left: 50%;
        top: -990px;
    }

    .guarda4 {
        position: absolute;
        z-index: 9;
        transform: translate(-50%, -18150%);
        width: 100px;
        top: (10% - 209px);
        left:calc calc(70% + 90px);
    }

    .guarda3 {
        position: absolute;
        z-index: 10;
        transform: translate(-50%, -1000px);
        width: 80px;
        top: -2px;
        left: 32%;
    }

    .guarda2 {
        position: absolute;
        z-index: 13;
        transform: translate(-50%, -1999px);
        width: 90px;
        left: 20%;
        top: 150px;
    }

    .guarda {
        position: absolute;
        z-index: 14;
        transform: translate(-74%, -140px);
        width: 120px;
        left: 80%;
        top: -200px;
    }

    .fechaDesterrados {
    position: absolute;
    pointer-events: auto;
    z-index: 7;
    font-family: 'Red Hat Display', serif;
    font-size: 1.2rem;
    letter-spacing: 0px;
    line-height: 25px;
    font-weight: 400;
    text-align: left;
    color: white;
    transform: translate(-50%, 129px);
    padding: 12px 15px;
    left: 50%;
    top: 43px;
    }

    .subtituloPortada {
        position: absolute;
        pointer-events: auto;
        z-index: 7;
        font-family: 'Red Hat Display', serif;
        font-size: 1.2rem;
        letter-spacing: 0px;
        line-height: 25px;
        font-weight: 400;
        text-align: center;
        color: white;
        transform: translate(-50%, 229px);
        /* top: -800px; */
        padding: 12px 15px;
        height: auto;
        left: 50%;
        max-width: 399px !important;
        top: 43px;
    }

    .subtituloPortada-0 {
        position: absolute;
        opacity: 0 !important;
        z-index: 5;
        position: absolute;
        pointer-events: auto;
    }

    .audiogio {
        position: relative;
        z-index: 4;
        width: 240px;
        transform: translate(-50%, 629px);
        left: 50%;
        top: 90px;
    }



    /* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> MEDIA 576PX */


    @media (min-width: 576px) {
        main {

            height: 783px !important;
        }

        .titulo_desterrados {
            font-size: 6rem;
            letter-spacing: -2px;
        }

        .bg-img {
            position: absolute !important;
            z-index: 2 !important;
            transform: translate(-50%, -265px) !important;
            max-width: 1000px !important;
            left: 50%;
            /* top: -200px; */
        }

        .avionImg {
            max-width: 1020px !important;
            top: -110px !important;
            left: 50%;
        }

        .guarda4 {
            position: absolute;
            z-index: 9;
            transform: translate(-50%, -18150%);
            width: 100px;
            top: calc(10% - 209px);
            left: calc(70% + 150px);


        }

        .guarda3 {
            position: absolute;
            z-index: 10;
            transform: translate(-50%, -1000px);
            width: 80px;
            top: 370px;
            left: 33%;

        }

        .guarda2 {
            position: absolute;
            z-index: 13;
            transform: translate(-50%, -1999px);
            width: 119px;
            left: 15%;
            top: 600px;

        }

        .guarda {
            position: absolute;
            z-index: 14;
            transform: translate(-74%, -1140px);
            width: 150px;
            left: 80%;
            top: -210px;

        }



        .subtituloPortada {
            max-width: 599px !important;
            top: 90px;
            padding: 15px 15px;
            background-color: rgb(0 6 37 / 61%) !important;
            filter: sepia(0.3);
            border-radius: 5px !important;
            backdrop-filter: blur(1px);
        }

        .audiogio {
            transform: translate(-50%, 529px);
            top: 119px;
        }


    /* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> MEDIA 768PX */

    @media (min-width: 768px) {

        main {
            height: 120vh;
        }

        .titulo_desterrados {
            font-size: 6.3rem;
            letter-spacing: -2px;
        }

        .bg-img {
            position: absolute !important;
            z-index: 2 !important;
            transform: translate(-50%, -265px) !important;
            max-width: 1200px !important;
            left: 50%;
            /* top: -200px; */
        }

        .avionImg {
            max-width: 1220px !important;
            top: -140px !important;
            left: 50%;
        }

        .guarda4 {
            position: absolute;
            z-index: 9;
            transform: translate(-50%, -18150%);
            width: 120px;
            top: calc(10% - 309px);
            left: calc(50% + 350px);

        }

        .guarda3 {
            position: absolute;
            z-index: 10;
            transform: translate(-50%, -1000px);
            width: 80px;
            top: 90px !important;
/*             left: calc (50% -790px); */
        }

        .guarda2 {
            position: absolute;
            z-index: 13;
            transform: translate(-50%, -1999px);
            width: 140px;
            left: 25%;
            top: 600px;
        }

        .guarda {
            position: absolute;
            z-index: 14;
            transform: translate(-74%, -1140px);
            width: 180px;
            left: 70%;
            top: 310px;
        }

        .subtituloPortada {
            z-index: 6;
            font-size: 1.16rem;
            padding: 19px;
            background-color: rgb(0 6 37 / 61%) !important;
            transform: translate(-50%, 299px) !important;
            max-width: 680px !important;
            filter: sepia(0.3);
            border-radius: 5px !important;
            backdrop-filter: blur(1px);
            font-weight: 200;
            line-height: 25px;
            letter-spacing: 1px;


        }
        .audiogio {
            transform: translate(-50%, 529px);
            top: 135px;
        }



</style>

<script>

    const parallax_el = document.querySelectorAll(".parallax");

    let xValue = 0,
        yValue = 0;

    let rotateDegree = 0;

    function update(cursorPosition){

        parallax_el.forEach((el) => {
            let speedx = el.dataset.speedx;
            let speedy = el.dataset.speedy;
            let speedz = el.dataset.speedz;
            let rotateSpeed = el.dataset.rotation;


            let isInLeft =
                parseFloat(getComputedStyle(el).left) < window.innerWidth / 2 ? 1 : -1;
            let zValue =
                (cursorPosition - parseFloat(getComputedStyle(el).left)) * isInLeft * 0.1;

            el.style.transform = `
        perspective(1500px) translateZ(${
                zValue * speedz
            }px) rotateY(${rotateDegree * rotateSpeed}deg) translateX(calc(-50% + ${
                -xValue * 0.1 //(speedx) o (0.1)se puede cambiar
            }px)) translateY(calc(-50% + ${yValue * speedy}px))`;



            // Actualizar la opacidad
            if (el.classList.contains("subtituloPortada audiogio")) {
                let opacity = 1 - Math.abs(zValue * speedz) / 1000; // Ajusta el valor según sea necesario
                el.style.opacity = opacity;
            }


        });
    }

    update (0)

    window.addEventListener("mousemove", (e) => {
        xValue = e.clientX - window.innerWidth / 2;
        yValue = e.clientY - window.innerHeight / 2;

        rotateDegree = (xValue / (window.innerWidth / 2)) * 20;

        // console.log(rotateDegree);

        update (e.clientX)

    });

    /* GSAP Animation */

    let timeline = gsap.timeline ();



    Array.from(parallax_el)
        .filter((el) => !["audiogio", "sacuanjoches", "titulo_desterrados"].some(cls => el.classList.contains(cls)))
        .forEach((el) => {
            timeline.from(
                el,
                {
                    top: `${el.offsetHeight / 2 + +el.dataset.distance}px`,
                    duration: 2,
                    ease: "power3.out",

                },
                "1"
            );
        });


    // Agregar animación de opacidad al h2

    timeline.from(
        ".subtituloPortada-0",
        {
            opacity: 0,
            duration: 1,
            ease: "power3.out",
        },
        "1"
    );

    timeline.from(
        ".subtituloPortada-1",
        {
            opacity: 0,
            duration: 3,
            ease: "power3.out",
        },
        "2+=0.5"
    );



    timeline.from(
        ".subtituloPortada",
        {
            opacity: 0,
            duration: 3,
            ease: "power3.out",
        },

        "3"

    );

    timeline.from(
        ".audiogio",
        {
            opacity: 0,
            duration: 3,
            ease: "power3.out",
        },
        "4"
    );


    timeline.from(
        ".sacuanjoches",
        {
            opacity: 0,
            duration: 3,
            ease: "power3.out",
        },
        "5"
    );



    // Definir la función update
    function update(cursorPosition) {
        parallax_el.forEach((el) => {
            // Calcula las nuevas posiciones y aplica las transformaciones
            // Puedes adaptar esta lógica según tus necesidades
            let speedx = el.dataset.speedx;
            let speedy = el.dataset.speedy;
            let speedz = el.dataset.speedz;
            let rotateSpeed = el.dataset.rotation;

            let isInLeft =
                parseFloat(getComputedStyle(el).left) < window.innerWidth / 2 ? 1 : -1;
            let zValue = (cursorPosition - parseFloat(getComputedStyle(el).left)) * isInLeft * 0.1;

            el.style.transform = `
            perspective(1500px) translateZ(${zValue * speedz}px)
            rotateY(${rotateDegree * rotateSpeed}deg)
            translateX(calc(-50% + ${xValue * speedx}px))
            translateY(calc(50% + ${-yValue * speedy}px))`;

        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const audioElement = document.getElementById('audio');
        const imageElement = document.getElementById('image');
        const initialImageUrl = 'https://www.divergentes.com/wp-content/uploads/2024/02/pausa.png';
        const playingImageUrl = 'https://www.divergentes.com/wp-content/uploads/2024/02/play.png';

        imageElement.addEventListener('click', function() {
            if (!audioElement.paused) {
                audioElement.pause();
                audioElement.currentTime = 0;
                imageElement.src = initialImageUrl;
            } else {
                imageElement.src = playingImageUrl;
                audioElement.play();
            }
        });

        audioElement.addEventListener('ended', function() {
            imageElement.src = initialImageUrl;
        });
    });


</script>

<?php get_footer(  ); ?>
