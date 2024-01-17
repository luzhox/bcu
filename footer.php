</div>
<footer class="site-footer"  role="contentinfo">
        <div class="container">
                <div class="site-footer__brand">
                        <img id="logito" src="<?php echo get_theme_mod('brand_img-revert'); ?>" alt="Banco del Cordón Umbilical - Servimos a la comunidad empresarial
para garantizar el cuidado de su personal">
                        <!-- <p>Servimos a la comunidad empresarial
para garantizar el cuidado de su personal</p> -->
                </div>
                <div class="site-footer__links">
                        <p class="title">SERVICIOS::</p>
                        <?php wp_nav_menu(array('theme_location'=>'footer')); ?>
                </div>
                <div class="site-footer__social">
                        <p class="title">Síguenos en:</p>
                        <div class="group">
                        <?php $args = array(
                                'theme_location'=> 'redes',
                                'container' => 'nav',
                                'container_class' => 'site-footer__socials',
                                'link_before'=> '<span class="sr-text">',
                                'link_after'=>'</span>'
                        );  wp_nav_menu($args);?>
                        </div>
                        <div class="site-footer__socials__linkscol2">
                        <?php wp_nav_menu(array('theme_location'=>'footertwo')); ?>
                        </div>

                </div>
                <div class="site-footer__address">
                        <?php dynamic_sidebar('location')?>
                        <p class="title call">Llámanos:</p>
                        <a class="number" href="tel:+51<?php echo esc_html(get_option('numero_page')); ?>">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.9997 0C4.93446 0 0 4.93446 0 11.0003C0 17.0655 4.93379 22 10.9997 22C11.3748 22 11.6778 21.6963 11.6778 21.3225C11.6778 20.9481 11.3748 20.6443 10.9997 20.6443C5.682 20.6443 1.35703 16.318 1.35703 11.001C1.35703 5.68335 5.682 1.35703 10.9997 1.35703C16.3173 1.35703 20.6416 5.68335 20.6416 11.001C20.6416 13.2228 19.459 15.4263 17.7666 16.3584C17.1517 16.6965 16.485 16.8642 15.7738 16.8709C16.2008 16.6163 16.5705 16.2735 16.8453 15.8398C16.8992 15.7583 16.9706 15.6876 17.0056 15.5981C17.2265 15.0667 17.246 14.464 17.3794 13.9036C17.543 13.1857 14.2424 11.7869 13.9555 12.6813C13.8518 13.0133 13.6928 14.0606 13.4847 14.3367C13.2995 14.5825 12.8429 14.4666 12.5574 14.2235C11.8051 13.5824 10.9653 12.6395 10.2285 11.8954L10.2299 11.8947C10.211 11.8752 10.1881 11.8529 10.1679 11.8334C10.1471 11.8132 10.1262 11.7917 10.1053 11.7715C9.36046 11.0354 8.41761 10.1969 7.77715 9.44262C7.5347 9.15707 7.41752 8.70181 7.664 8.51593C7.94012 8.30716 8.98803 8.15024 9.31937 8.04586C10.2124 7.75963 8.81428 4.45697 8.09637 4.62197C7.53605 4.7533 6.9333 4.7735 6.40193 4.99372C6.31169 5.03144 6.24165 5.10148 6.16016 5.15536C4.27514 6.35075 4.03202 9.25203 5.87192 11.4132C6.57299 12.2402 7.30437 13.0403 8.05731 13.8215L8.05326 13.8242C8.07414 13.845 8.09569 13.8646 8.11724 13.8848C8.13745 13.9057 8.15698 13.9265 8.17651 13.9488L8.18055 13.9447C8.96177 14.6976 9.88778 15.8062 11.3923 16.8103C14.5596 18.9256 16.9901 18.335 18.4219 17.5498C20.8935 16.1887 21.9993 13.2814 21.9993 11.0044C22 4.93446 17.0649 0 10.9997 0Z" fill="#00AFAA"/>
</svg>
                                <?php echo esc_html(get_option('numero_page')); ?></a>
                                <?php dynamic_sidebar('newwidget')?>


                </div>
        </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>