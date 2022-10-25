<?php get_header(); ?>

<main class="l-main">
  <section class="p-sub-mv p-sub-mv--price">
    <h2 class="p-sub-mv__title">コース・料金</h2>
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

  <section class="l-price-structure p-price-structure">
    <div class="l-inner">
      <h2 class="c-section-sub-title p-price-structure__title">料金体系</h2>
      <div class="p-price-structure__wrap">
        <div class="p-price-structure__admission">入会金 39,800円</div>
        <div class="p-price-structure__plus">+</div>
        <div class="p-price-structure__monthly">月額費用</div>
      </div>
      <p class="p-price-structure__text">
        Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
      </p>
    </div>
  </section>

  <section class="l-price-table p-price-table">
    <div class="l-inner">
      <h2 class="c-section-sub-title p-price-table__title">料金表</h2>
      <div class="p-price-table__wrap">
        <div class="p-price-table__body">
          <p class="p-price__plan">基礎プラン</p>
          <p class="p-price__price">59,000円~</p>
          <p class="p-price__tax">*月額（税抜価格）</p>
          <div class="p-price__detail__wrap">
            <p class="p-price__detail">カリキュラム作成</p>
            <p class="p-price__detail">TOEFL学習サポート</p>
            <p class="p-price__detail">週一回のビデオMTG</p>
          </div>
        </div>
        <div class="p-price-table__body">
          <p class="p-price__plan">演習プラン</p>
          <p class="p-price__price">75,000円~</p>
          <p class="p-price__tax">*月額（税抜価格）</p>
          <div class="p-price__detail__wrap">
            <p class="p-price__detail">カリキュラム作成</p>
            <p class="p-price__detail">TOEFL学習サポート</p>
            <p class="p-price__detail">週一回のビデオMTG</p>
            <p class="p-price__detail">月二回の模試（解説<br>付き）</p>
          </div>
        </div>
        <div class="p-price-table__body">
          <p class="p-price__plan p-price-plan--recommendation">おすすめ<br>志望校対策プラン</p>
          <p class="p-price__price p-price__price--recommendation">95,000円~</p>
          <p class="p-price__tax">*月額（税抜価格）</p>
          <div class="p-price__detail__wrap">
            <p class="p-price__detail">カリキュラム作成</p>
            <p class="p-price__detail">TOEFL学習サポート</p>
            <p class="p-price__detail">週一回のビデオMTG</p>
            <p class="p-price__detail">月二回の模試（解説<br>付き）</p>
            <p class="p-price__detail">週一の英語面接対策</p>
          </div>
        </div>
        <div class="p-price-table__body">
          <p class="p-price__plan">フレックスプラン</p>
          <p class="p-price__price">60,000円~</p>
          <p class="p-price__tax">*月額（税抜価格）</p>
          <div class="p-price__detail__wrap">
            <p class="p-price__detail">＊別途ご相談ください</p>
          </div>
        </div>
      </div>
    </div>


  </section>

</main>
<section class="l-price-document p-document">
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