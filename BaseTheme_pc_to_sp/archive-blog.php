<?php get_header(); ?>
<section class="p-sub-mv p-sub-mv--blog">
  <h2 class="p-sub-mv__title">ブログ</h2>
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

<section class="l-new-blog p-new-blog">
  <div class="l-inner">
    <h2 class="c-section-sub-title p-new-blog__title">新着一覧</h2>
    <?php

    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <?php
        $terms = get_the_terms($post->ID, 'blog_category');
        ?>
        <div class="p-new-blog__wrap">
          <div class="p-new-blog-card">
            <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="">
            <span class=" p-new-blog__category"><?php echo $terms[0]->name; ?></span>
          </div>
          <div class="p-new-blog__body">
            <p class="c-time c-time--sub"><?php the_time("Y-m-d"); ?></p>
            <a href="<?php the_permalink(); ?>">
              <p class="p-new-blog__headline"><?php the_title(); ?></p>
            </a>
            <div class="p-new-blog__text"><?php the_content(); ?></div>
          </div>
        </div>
    <? endwhile;
    endif;
    ?>
  </div>
</section>

<div class="l-blog-page-nation p-page-nation">
  <?php
  the_posts_pagination([
    'mid_size' => 2,
    'prev_next' => false,
  ]); ?>
</div>

<section class="l-blog-document p-document">
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