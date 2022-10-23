<?php get_header(); ?>


<section class="p-sub-mv p-sub-mv--contact">
  <h2 class="p-sub-mv__title">お問い合わせ・資料請求</h2>
</section>

<ol class="p-breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
  <div class="l-inner">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="index.html">
        <span itemprop="name">ホーム</span>
      </a>
      <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="contact.html">
        <span itemprop="name">お問い合わせ</span>
      </a>
      <meta itemprop="position" content="2" />
    </li>
  </div>
</ol>

<div class="l-inner l-inner--sm">
  <section class="p-contactForm">
    <p class="l-contactForm p-contactForm__text">
      弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
    </p>
    <form action="" class="p-contactForm__wrap">
      <div class="p-contactForm__item">
        <p><label for="company-name">会社名</label></p>
        <input class="p-contactForm__company" type="text" id="company-name" name="company-name" placeholder="Engress">
      </div>
      <div class="p-contactForm__item">
        <p><label for="name">氏名</label></p>
        <input class="p-contactForm__name" type="mail" id="name" name="name" placeholder="田中 太郎">
      </div>
      <div class="p-contactForm__item">
        <p><label for="email">メールアドレス</label></p>
        <input class="p-contactForm__mail" type="email" id="email" name="email" placeholder="example@example.com">
      </div>
      <div class="p-contactForm__item">
        <p><label for="tel">電話番号</label></p>
        <input class="p-contactForm__phone" type="tel" id="tel" name="tel" placeholder="01-2345-6789">
      </div>

      <p class="p-contactForm__select">お問い合わせの種類を選択してください（<strong>資料請求の方は資料請求を選択ください）</strong></p>

      <div class="p-contactForm__radioWrap">
        <div class="p-contactForm__radio">
          <input type="radio" id="consultation" name="1" value="consultation">
          <label for="consultation">商談のご相談</label>
        </div>

        <div class="p-contactForm__radio">
          <input type="radio" id="service" name="1" value="service">
          <label for="service">サービスに関するお問い合わせ</label>
        </div>

        <div class="p-contactForm__radio">
          <input type="radio" id="claim" name="1" value="claim">
          <label for="claim">資料請求</label>
        </div>

        <div class="p-contactForm__radio">
          <input type="radio" id="other" name="1" value="other">
          <label for="other">その他</label>
        </div>
      </div>

      <div class="p-contactForm__item">
        <p><label for="example">お問い合わせ内容</label></p>
        <textarea class="p-contactForm__textarea" name="example" rows="4" cols="40" placeholder="入力してください"></textarea>
      </div>



      <div class="p-contactForm__privacy">
        <div class="p-contactForm__privacy-text">
          <span>プライバシーポリシー</span>に同意の上、送信ください。
        </div>
        <div class="p-contactForm__privacy-check">
          <input class="" type="checkbox" id="privacy-check" name="">
          <label for="privacy-check">プライバシーポリシーに同意する</label>
        </div>
      </div>

      <div class="p-contactForm__button-wrap">
        <input class="p-contactForm__button" type="submit" value="送信する">
      </div>

    </form>
  </section>
</div>

<?php get_footer(); ?>