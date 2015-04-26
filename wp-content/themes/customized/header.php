<?php ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/uniform.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/icheck.css">

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.1.1.min.js"></script>

        <script type="text/javascript"  src="<?php bloginfo('template_url'); ?>/js/icheck.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.uniform.js"></script>
        <script type="text/javascript"  src="<?php bloginfo('template_url'); ?>/js/customized.js"></script>

        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
        <title>TF1 Licences</title>
    </head>
    <body>
        <div id="containner">

            <div id="header"> <!-- Header-->
                <div class="content-wrapper">

                    <?php
                    $lang = get_locale();
                    if (is_front_page()) {
                        if ($lang == 'fr_FR') {
                            dynamic_sidebar('cookies');
                        } else {
                            dynamic_sidebar('cookiesEn');
                        }
                    }
                    ?>
                    <h1 class="logo"><a href="http://localhost/tf1-presse"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="TF1 licences"/></a></h1>

                    <?php
                    if ($lang == 'fr_FR') {
                        echo " <h2 class='slogan'>le meilleur du divertissement</h2>";
                    } else {
                        echo " <h2 class='slogan'>the best entertainment</h2>";
                    }
                    ?>
                </div>
                <div id="menu">
                    <div class="content-wrapper">
                        <div class="nav">   
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
                        </div>
                        <div class="float-top">
                            <div class="social">

                                <?php dynamic_sidebar('social') ?>
                            </div>
                            <div class="langs">
<!--                                <a href="#" class="langBold" id="fr" title="fraçais">FR </a><span class="langs-sepa">/</span><a href="#" id="eng" title="english"> ENG</a>  -->
                            <?php dynamic_sidebar('langs') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Headers end -->
