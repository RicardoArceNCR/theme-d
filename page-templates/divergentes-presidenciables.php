<?php

/*
* Template Name: presidenciables
*
* @package WordPress
*/

get_header('presidenciables');
?>

<section class="bglanding-presidenciables text-center">
    <div class="container">
        <?php echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>

        <div class="row">
            <div class="col-12 logo-presidenciables text-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/presidenciables/logo_presidenciables.svg"
                     alt="Logo Presidenciables" class="img-fluid"/>
            </div>
        </div>
        <div class="row my-5">
        <div class="col-md-4">
            <a href="OpsfwBYDNh0" title="video" data-toggle="modal" data-target="#video-presidenciables">
                <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_1.jpg" class="img-fluid"/>
            </a>
        </div>
        <div class="col-md-4">
            <a href="_Z7D99U_XU8" title="video" data-toggle="modal" data-target="#video-presidenciables">
                <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_2.jpg" class="img-fluid"/>
            </a>
        </div>
        <div class="col-md-4">
            <a href="m6WkpU85iNk" title="video" data-toggle="modal" data-target="#video-presidenciables">
                <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_3.jpg" class="img-fluid"/>
            </a>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-3">
            <a href="DR9nGVX7bBw" title="video" data-toggle="modal" data-target="#video-presidenciables">
                <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_4.jpg" class="img-fluid"/>
            </a>
        </div>
        <div class="col-md-3">
            <a href="ZuTGypaj2oY" title="video" data-toggle="modal" data-target="#video-presidenciables">
                <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_5.jpg" class="img-fluid"/>
            </a>
        </div>
        <div class="col-md-3">
            <a href="xxESaFV3sTI" title="video" data-toggle="modal" data-target="#video-presidenciables">
                <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_6.jpg" class="img-fluid"/>
            </a>
        </div>
        <div class="col-md-3">
            <a href="z3h7qvr2BLw" title="video" data-toggle="modal" data-target="#video-presidenciables">
                <img src="https://www.divergentes.com/wp-content/uploads/2021/04/MINI_7.jpg" class="img-fluid"/>
            </a>
        </div>


    </div>
    </div>
    <div class="text-white">
        <div class="container">
            <p>POR</p>
            <a href="https://www.divergentes.com" title="Divergentes" >
            <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logosvg.svg" alt="Divergentes" class="my-3"
                 width="175"/></a>
            <p>Todos los derechos reservados ©️ 2020 - 2021</p>
        </div>
    </div>

</section>

<div class="modal modal-fullscreen2 fade" id="video-presidenciables" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315"
                            id="iframe-video-youtube"
                            src="https://www.youtube.com/embed/x1UkRvRP4Tk" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer('presidenciables'); ?>
<script>
    $('#video-presidenciables').on('shown.bs.modal', function (event) {
        let button = $(event.relatedTarget) // Button that triggered the modal
        const video_id = button.attr('href');
        const video_href = "https://www.youtube.com/embed/"+video_id+"?autoplay=1";

        console.log( video_href );
        $('#iframe-video-youtube').attr('src', video_href);

        event.preventDefault();
    })
    $('#video-presidenciables').on('hidden.bs.modal', function (event) {
        $('#iframe-video-youtube').attr('src', '');
    })
	$( window ).on( 'scroll', function() {
		if ($( window ).scrollTop() > 10) {
			$( 'header' ).addClass( 'bg-header' );
		} else {
			//remove the background property so it comes transparent again (defined in your css)
			$( 'header' ).removeClass( 'bg-header' );
		}
	} );
</script>