<?php get_header(); ?>

<div class="p-breadcrumb">
  <div class="l-inner">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
</div>


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


<section class="l-document p-document">
  <?php get_template_part('includes/document-request'); ?>
</section>

<div class="p-contact">
  <div class="p-contact__wrap">
    <p class="p-contact__contact">お電話でのお問い合わせはこちら</p>
    <p class="p-contact__tell">0123-456-7890</p>
    <p class="p-contact__time">平日 08:00~20:00</p>
  </div>
</div>

<?php get_footer(); ?>