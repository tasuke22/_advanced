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

<p class="p-sendComplete">
  お問い合わせいただきありがとうございます<br>
  内容を確認した後、担当者よりご連絡いたします
</p>

<span class="c-back">ホームへ戻る</span>

<?php get_footer(); ?>