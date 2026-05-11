<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package divergentes
 */
$args = array(

    'post_type'              => array('page','post'),
    'posts_per_page' => '2',
    'post_status' => 'publish',
    'order' => 'DESC',
    'post__not_in' => array('464', '209', '13', '1801'),
    'post_parent__not_in' => array('164', '194', '130', '518','2890'),
    'tag__not_in' => array('5'),


);

// The Query
$destacadas = new WP_Query($args);

?>

<?php
// The Loop
if ($destacadas->have_posts()) {
    while ($destacadas->have_posts()) {
        $destacadas->the_post();
        
        $permalink = get_permalink($destacadas->ID);
?>


        <ul class="list-unstyled">
            <li class="media">
                <div class="row">
                    <div class="col-12">
                        <small class="archivo"> <?php the_date('j \d\e F  Y', '', ''); ?></small>
                    </div>
                    <div class="col-md-8 archivo-pr-0">

                        <a href="<?php echo esc_url($permalink); ?>" title="">
                            <?php the_title('<h5 class="font-weight-bold entry-title">', '</h5>'); ?>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <?php
                        $archivo_img = wp_get_attachment_image_src(get_post_thumbnail_id($destacadas->ID), 'large');

                        if (has_post_thumbnail($destacadas->ID)) : ?>
                            <a href="<?php echo esc_url($permalink); ?>" title="">
                                <img src="<?php echo esc_html($archivo_img[0]); ?>" class="img-fluid img-archivo" alt="<?php echo esc_html($destacadas->post_title); ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <?php echo get_the_excerpt($destacadas->ID); ?>

                        <small class="archivo"><?php
                                                divergentes_posted_by($destacadas->ID);

                                                ?></small>
                    </div>
                </div>


            </li>
            <hr>
        </ul>


<?php
    }
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>