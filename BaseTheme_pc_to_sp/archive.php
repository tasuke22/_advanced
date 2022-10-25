<?php get_header(); ?>

<section class="p-sub-mv p-sub-mv--news">
  <h2 class="p-sub-mv__title">お知らせ</h2>
</section>

<div class="p-breadcrumb">
  <div class="l-inner">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
</div>

<section class="l-news-summary p-news-summary">
  <div class="l-inner">
    <h2 class="c-section-sub-title c-section-sub-title--center">お知らせ一覧</h2>
    <ul class="p-news-summary__list">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <li class="p-news-summary__item">
            <time class="c-time c-time--sub" datetime="2020-12-30"><?php the_time("Y-m-d"); ?> </time>
            <p class="p-news-summary__text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          </li>
      <? endwhile;
      endif;
      ?>
    </ul>
  </div>

</section>

<div class="l-news-page-nation p-page-nation">
  <?php
  the_posts_pagination([
    'mid_size' => 2,
    'prev_next' => false,
  ]); ?>
</div>

<section class="l-news-document p-document">
  <div class="p-document__title">
    まずは無料で資料請求から
  </div>
  <a href="contact.html">
    <div class="c-request-button-document p-document__button">
      資料請求
    </div>
  </a>
  <a href="contact.html">
    <div class="c-contact p-document__contact">お問い合わせ</div>
  </a>
</section>

<section class="p-contact">
  <div class="p-contact__wrap">
    <p class="p-contact__contact">お電話でのお問い合わせはこちら</p>
    <p class="p-contact__tell">0123-456-7890</p>
    <p class="p-contact__time">平日 08:00~20:00</p>
  </div>
</section>
<?php get_footer(); ?>