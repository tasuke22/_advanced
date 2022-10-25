<?php get_header(); ?>


<section class="p-sub-mv p-sub-mv--contact">
  <h2 class="p-sub-mv__title">お問い合わせ・資料請求</h2>
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


<div class="l-inner l-inner--sm">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
<!-- contact contents -->
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>