<?php
/**
  Template Name: Contactez nous
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();
?>


<div id="main"> <!-- Main -->
    <div class="content-wrapper">
<!--        <div class="contact-tittle"> <span class="left-line3"></span>
            <h1 class="nous">contactez-nous</h1><span class="right-line3"></span>
        </div>-->

        <div id="contact-form">
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
        </div>

    </div>





    <?php get_footer(); ?>