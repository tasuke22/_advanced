<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body>
  <!-- <?php body_class(); ?> -->
  <!-- <?php wp_body_open(); ?> -->

  <header class="l-header p-header">
    <div class="c-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
      </a>
    </div>

    <nav class="p-gnav js-drawer-nav">
      <ul class="p-gnav__list">
        <?php foreach (getNavMenu('global_nav') as $menu) : ?>
          <a href="<?php echo $menu->url; ?>">
            <li class="p-gnav__item"><?php echo $menu->title; ?></li>
          </a>
        <?php endforeach; ?>
      </ul>
    </nav>
    <button type="button" class="js-drawer-btn">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="p-header__wrap">
      <div class="p-header__info">
        <span class="c-business-hours">平日08:00〜20:00</span>
        <a class="c-tel" href="tel:0123-456-7890">0123-456-7890</a>
      </div>

      <div class="p-header__button">
        <a href="contact">
          <div class="c-header-button">
            資料請求
          </div>
        </a>
        <a href="contact">
          <div class="c-header-button c-header-button__dark-blue">
            お問い合わせ
          </div>
        </a>
      </div>
    </div>
  </header>