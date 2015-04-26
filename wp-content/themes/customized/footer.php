<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div> <!-- Mains end -->
<div id="footer">  <!-- footers start --> 

    <div id="footer-content">
        <div class="content-wrapper">
            <div class="footer-nav"> 
<!--                <ul>
                    <li><a href="content.html">qui sommes-nous?</a></li>
                    <li><a href="content.html">nous licences</a></li>
                    <li><a href="content.html">contactez-nous</a></li>
                </ul>-->
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
            </div>
            <div class="hr"></div>
            <div class="legal">

                <?php //wp_nav_menu(array('menu' => 'menu footer')); 
                dynamic_sidebar('menu footer');
                dynamic_sidebar('menu footer en');
                ?>
            </div>

            <div class="footer-social">
                <ul>
                  <?php dynamic_sidebar('footer social')?>
              </ul>
          </div>
      </div>
  </div>
</div><!-- footers end -->
</div>
</body>
</html>
