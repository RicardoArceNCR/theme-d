<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package divergentes
 */

?>




<article id="post-<?php the_ID(); ?>" class="col-md-4">
    <div class="covid-blogimg">
        <a href="<?php the_permalink(); ?>" title="">
            <?php $secundarias_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
            <img src="<?php echo esc_url($secundarias_featured_img_url) ?>" class="card-img-top" alt="Divergentes">
        </a>
    </div>
    <small class="archivo"> <?php the_date('j \d\e F  Y', '', ''); ?></small>
    <a href="<?php the_permalink(); ?>" title="" class="home-notas">
        <?php the_title('<h5 class="font-weight-bold entry-title">', '</h5>'); ?>
    </a>
    <small class="archivo"><?php
        divergentes_posted_by();

        ?></small>


</article><!-- #post-<?php the_ID(); ?> -->
