<?php

/*
* Template Name: suscripcion
*
* @package WordPress
*/

get_header();
   ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/divergentes.css">
<style>
    .nav-sticky-movil {
        background-color: #FFFFFF !important;
    }
</style>
<section class="mt-5">
    <div class="container pt-3" style="min-height: 60vh">
        <!--Newsletter v3-->
        <?php
        get_template_part( 'template-parts/subscribe' );
        ?>
        <!--End Newsletter v3-->
    </div>
</section>
<?php get_footer(); ?>
