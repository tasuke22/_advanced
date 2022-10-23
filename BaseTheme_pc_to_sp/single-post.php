<?php get_header(); ?>
<ol class="p-breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
  <div class="l-inner">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="index.html">
        <span itemprop="name">ホーム</span>
      </a>
      <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="news.html">
        <span itemprop="name">お知らせ</span>
      </a>
      <meta itemprop="position" content="2" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="news_detail.html">
        <span itemprop="name">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</span>
      </a>
      <meta itemprop="position" content="3" />
    </li>
  </div>
</ol>


<div class="l-inner">
  <section class="p-news-detail">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <div class="p-blog-detail__title"><?php the_title(); ?></div>
        <div class="p-news-detail__time">
          <time class="c-time c-time--sub" datetime="2020-12-30"><?php the_time("Y-m-d"); ?></time>
        </div>
        <div class="p-blog-detail__contents">
          <p class="p-blog-detail__contents-text">
            <?php the_content(); ?>
          </p>
        </div>
    <? endwhile;
    endif;
    ?>
  </section>
</div>


<section class="l-news_detail-document p-document">
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