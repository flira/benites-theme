<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">
  <meta name="theme-color" content="#591B20">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="x-ua-compatible" content="IE=Edge">
  <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
  <?php wp_head(); ?>
  <script type="module" src="<?php echo get_template_directory_uri() ?>/benites-js/www/build/benites.esm.js"></script>
  <script nomodule src="<?php echo get_template_directory_uri() ?>/benites-js/www/build/benites.js"></script>
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/benites-js/www/assets/icon/icon.png">
  <link rel="icon" type="image/x-icon"
    href="<?php echo get_template_directory_uri() ?>/benites-js/www/assets/icon/favicon.ico">
  <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/benites-js/www/manifest.json">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,600;1,600&family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
  <?php // Inline above the fold style
  $global_style = get_template_directory_uri() . '/benites-js/www/build/benites.css'; ?>
  <style id="global-style" data-url="<?php echo $global_style?>">
  <?php echo file_get_contents($global_style);?>
  </style>
</head>

<body <?php body_class(); ?>>
  <header class="content-header">
    <div class="grid">
      <div class="col-2">
        <h1 class="header-logo">
          <a href="<?php echo get_home_url() ?>">
            <img class="header-logo__img"
              src="<?php echo get_template_directory_uri() ?>/benites-js/www/assets/img/logo.svg" alt="Benites Reeds"
              width="1479" height="641" />
          </a>
        </h1>
      </div>
      <div class="col-10 col-6-md col-2-sm">
        <?php global $woocommerce; ?>
        <benites-menu cart-contents-count="<?php echo $woocommerce->cart->cart_contents_count;?>">
          <nav class="header-menu">
            <?php wp_nav_menu(array(
                    'container' => '',
                    'menu' => 'header',
                    'link_after' => '</span>',
                    'link_before' => '<span class="header-menu__label">',
                    'menu_class' => 'header-menu__list reset-list'
                    )) ?>
          </nav>
        </benites-menu>
      </div>
    </div>
  </header>
  <main class="main-content">