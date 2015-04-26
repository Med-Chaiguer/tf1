<?php
/*
  Template Name: FRONT
 */
  ?>
  <?php get_header(); ?>
  <div id="main"> <!-- Main -->


    <div class="content-wrapper">
        <div id="slider"> <!-- Slider -->

            <ul class="bxslider">
                <?php
                $lang = get_locale();
                if (get_field('slider')):
                    ?>
                <?php while (the_repeater_field('slider')): ?>
                    <li>
                        <img src="<?php echo get_sub_field('img'); ?> " alt="<?php echo get_sub_field('alt'); ?>">
                        <?php if ($lang == fr_FR) { ?>
                        <a  href="<?php echo get_sub_field('url'); ?>" class="suite" title="voir" target="_blank">Voir la suite</a>
                        <?php
                    } else { ?>
                    <a  href="<?php echo get_sub_field('url'); ?>" class="urlMore" title="voir" target="_blank">More</a>

                    <?php } ?>
                </li>   
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
    <div class="shadow"> </div>
</div> <!-- sliders end -->

<?php
if ($lang == fr_FR) {
    $category_name = 'savoir';
} else {
    $category_name = 'expertises';
}
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'caller_get_posts' => 1,
    'category_name' => $category_name
    );
$my_query = null;
$my_query = new WP_Query($args);
if ($my_query->have_posts()) {
    $my_query->the_post();
    ?>
    <div id="savoir-faire">
        <?php if ($lang == fr_FR) { ?>
        <span class="left-line"></span><h2><?php the_title(); ?></h2><span class="right-line"></span>
        <?php } else { ?>
        <span class="left-line"></span><h2 class="h2En"><?php the_title(); ?></h2><span class="right-line"></span>
        <?php
    }
    ?>
</div>
<?php the_content(); ?>
<?php
}
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>    

        <div class="licences-list">

            <?php dynamic_sidebar('licences list') ?>

        </div>
    </div>
    <div id="actualites"> <!-- Actualites -->
        <div class="content-wrapper">

            <?php
            if ($lang == fr_FR) {
                Echo " <h2> actualites </h2>";
            } else {
                Echo " <h2 > news </h2>";
            }
            ?>
            <h2>

            </h2>
            <div id="left-section">
                <a href="http://www.facebook.com" class="facebook2" target="_blank" title="facebook">
                    <img src="<?php bloginfo('template_url'); ?>/images/facebook2.png" alt="suivez nous sur facebook" >
                </a>
                <div class='actualities-img'>
                    <?php
                    $args = array(
                        'numberposts' => 2,
                        'category' => 7,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish');
                    $posts_array = get_posts($args);
                    ?>
                    <?php if (have_posts()) : ?>
                        <?php $count = 0; ?> 
                        <?php
                        foreach ($posts_array as $post) : setup_postdata($post);
                        $count = $count + 1;
                        ?>
                        <?php if ($count == 1): ?>
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(460, 166), array('class' => "pic_fb"), array('alt' => get_the_title())); ?></a>
                        <?php endif ?>
                        <h4><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></h4>      
                        <?php echo the_excerpt(); ?>
                        <?php
                        endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div id="right-section">
                    <?php dynamic_sidebar('twitter') ?>

                </div>
            </div>
        </div> <!-- Actualites end -->

        <?php get_footer(); ?>