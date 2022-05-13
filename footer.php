</main>
<footer class="content-footer">
  <div class="grid">
    <div class="col-2">
      <a href="<?php echo get_home_url() ?>">
        <img class="footer-logo__img"
          src="<?php echo get_template_directory_uri() ?>/benites-js/www/assets/img/logo.svg" alt="Benites Reeds"
          width="1479" height="641" />
      </a>
    </div>
    <nav class="footer-menu col-6 col-2-sm col-6-md">
      <?php wp_nav_menu(array(
                    'container' => '',
                    'menu' => 'footer',
                    'menu_class' => 'footer-menu__list reset-list'
                    )) ?>
    </nav>
    <div class="lang-selector col-4">
      <?php
        if ( function_exists ( 'wpm_language_switcher' ) ):
          wpm_language_switcher ('select', 'flag');
        endif;
      ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>