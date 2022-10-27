<?php get_header(); ?>
<?php
  /*
Template Name: トップページ
*/; 
?>
<main class="l-main">
  <section class="l-mv p-mv">
    <div class="p-mv__wrap">
      <h2 class="p-mv__title">TOEFL対策はEngress</h2>
      <p class="p-mv__text">
        日本人へのTOEFL指導歴豊かな講師陣の<br>
        コーチング型TOEFLスクール
      </p>
      <div class="c-request-button p-mv__button">
        <button>
          資料請求
        </button>
        <a href="contact"></a>
      </div>
      <a href="contact">
        <div class="c-contact p-mv__contact">お問い合わせ</div>
      </a>
    </div>
  </section>
  <section class="l-catch-copy p-catch-copy">
    <div class="l-inner">
      <p class="c-section-title c-section-title--white">
        TOEFL学習でこんな悩みありませんか？
      </p>
      <div class="p-catch-copy__text-wrap">
        <span class="p-catch-copy__text">勉強の習慣が<br>身についていない</span>
        <span class="p-catch-copy__text">勉強しているはず<br>なのに点数が伸びない</span>
        <span class="p-catch-copy__text">正しい勉強方法が<br>わからない</span>
      </div>
      <div class="p-catch-copy__box-wrap">
        <div class="p-catch-copy__box">
          <p>Engressは<br>TOEFLに特化したスクールです</p>
          <p>完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
        </div>
      </div>
    </div>

  </section>

  <section class="l-strength l-inner p-strength">
    <p class="c-section-title">TOEFL対策に特化したEngress3つの強み</p>
    <div class="p-strength__wrap">
      <div class="p-strength__body">
        <div class="p-strength__badge">
          特長 1
        </div>
        <p class="p-strength__title">
          TOEFLに最適化された<br>
          無駄のないカリキュラム
        </p>
        <p class="p-strength__text">
          TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
        </p>
      </div>
      <div class="p-strength__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strech1.png" alt="">
      </div>
    </div>
    <div class="p-strength__wrap p-strength__wrap--reverse">
      <div class="p-strength__body">
        <div class="p-strength__badge">
          特長 2
        </div>
        <p class="p-strength__title">
          日本人指導歴10年以上の<br>
          経験豊富な講師陣
        </p>
        <p class="p-strength__text">
          Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
        </p>
      </div>
      <div class="p-strength__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strech2.png" alt="">
      </div>
    </div>
    <div class="p-strength__wrap">
      <div class="p-strength__body">
        <div class="p-strength__badge">
          特長 3
        </div>
        <p class="p-strength__title">
          平均3ヶ月でTOEFL iBT20点アップ
        </p>
        <p class="p-strength__text">
          Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
        </p>
      </div>
      <div class="p-strength__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strech3.png" alt="">
      </div>
    </div>
  </section>

  <section class="l-price l-inner p-price">
    <h2 class="p-price__title">Engressの料金プランはこちら</h2>
    <div class="p-price__button">
      <button>料金を見てみる</button>
      <a href="price"></a>
    </div>
  </section>

  <section class="l-example p-example">
    <div class="l-inner">
      <h2 class="c-section-title c-section-title--white">TOEFL成功事例</h2>
      <div class="p-example__wrap">
        <div class="p-example__body">
          <p class="p-example__thoughts">
            <?php echo CFS()->get('comment_1'); ?>
          </p>
          <div class="p-example__img">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/model01.png" alt=""> -->
            <img src="<?php echo CFS()->get('thumbnail_1'); ?>" alt="">
          </div>
          <div class="p-example__info">
            <div class="p-example__job"><?php echo CFS()->get('attribute_1'); ?></div>
            <div class="p-example__name"><?php echo CFS()->get('name_1'); ?></div>
          </div>
          <div class="p-example__point"><?php echo CFS()->get('point_1'); ?></div>
        </div>
        <div class="p-example__body">
          <p class="p-example__thoughts">
            <?php echo CFS()->get('comment_2'); ?>
          </p>
          <div class="p-example__img">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/model02.png" alt=""> -->
            <img src="<?php echo CFS()->get('thumbnail_2'); ?>" alt="">
          </div>
          <div class="p-example__info">
            <div class="p-example__job"><?php echo CFS()->get('attribute_2'); ?></div>
            <div class="p-example__name"><?php echo CFS()->get('name_2'); ?></div>
          </div>
          <div class="p-example__point"><?php echo CFS()->get('point_2'); ?></div>
        </div>
        <div class="p-example__body">
          <p class="p-example__thoughts">
            <?php echo CFS()->get('comment_3'); ?>
          </p>
          <div class="p-example__img">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/model03.png" alt=""> -->
            <img src="<?php echo CFS()->get('thumbnail_3'); ?>" alt="">
          </div>
          <div class="p-example__info">
            <div class="p-example__job"><?php echo CFS()->get('attribute_3'); ?></div>
            <div class="p-example__name"><?php echo CFS()->get('name_3'); ?></div>
          </div>
          <div class="p-example__point"><?php echo CFS()->get('point_3'); ?></div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="l-flow p-flow">
    <div class="l-inner">
      <h2 class="c-section-title">ご利用の流れ</h2>
      <div class="p-flow__wrap">
        <div class="p-flow__number">01</div>
        <div class="p-flow__title">お問い合わせ</div>
        <div class="p-flow__text">まずはフォームまたはお電話からお申し込みください。</div>
        <div class="p-flow__number">02</div>
        <div class="p-flow__title">ヒアリング</div>
        <div class="p-flow__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</div>
        <div class="p-flow__number">03</div>
        <div class="p-flow__title">学習プランのご提供</div>
        <div class="p-flow__text">目標達成のために最適な学習プランをご提案致します。</div>
        <div class="p-flow__number">04</div>
        <div class="p-flow__title">ご入会</div>
        <div class="p-flow__text">お申込み完了後、レッスンがスタートします。</div>
      </div>
    </div>
  </section>

  <section class="l-faq p-faq">
    <div class="l-inner">
      <h2 class="c-section-title">よくある質問</h2>
      <div class="p-faq__wrap">

        <div class="p-faq__body">
          <dt class="p-faq__question js-question">Engressはサラリーマンでも学習を続けられるでしょうか？</dt>
          <dd class="p-faq__answer">
            Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
          </dd>
        </div>

        <div class="p-faq__body">
          <dt class="p-faq__question js-question">教材はオリジナルのものを使用しているのでしょうか？</dt>
          <dd class="p-faq__answer">
            教材はオリジナルのものを使用しています。
          </dd>
        </div>

        <div class="p-faq__body">
          <dt class="p-faq__question js-question">講師に日本人はいますか？</dt>
          <dd class="p-faq__answer">
            いません。
          </dd>
        </div>

        <div class="p-faq__body">
          <dt class="p-faq__question p-faq__questionq js-question">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</dt>
          <dd class="p-faq__answer">
            可能です。
          </dd>
        </div>
      </div>

    </div>
  </section>

  <div class="l-inner">
    <div class="l-section__grid-col-2">

      <section class="l-blog p-blog">
        <h2 class="c-section-title c-section-title--left">ブログ</h2>

        <?php
        $wp_query = new WP_Query();
        $param = [
          'posts_per_page' => '3',
          'post_type' => 'blog',
          'order' => 'DESC'
        ];
        $wp_query->query($param);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            $terms = get_the_terms($post->ID, 'blog_category');
        ?>
            <div class="p-blog__wrap">
              <div class="p-blog__card">
                <div class="p-blog__card-category"><?php echo $terms[0]->name; ?></div>
                <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="">
              </div>
              <div class="p-blog__body">
                <p class="p-blog__text"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 40, '...'); ?></a></p>
                <time datetime="2020-12-01" class="c-time"><?php the_time("Y-m-d"); ?></time>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata()
        ?>

      </section>

      <section class="l-news p-news">
        <h2 class="c-section-title c-section-title--left">お知らせ</h2>
        <div class="p-news__wrap">
          <?php
          $wp_query = new WP_Query();
          $param = array(
            'posts_per_page' => '3',
            'post_type' => 'post',
            'order' => 'DESC'
          );
          $wp_query->query($param);
          if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
              <div class="p-news__body">
                <time datetime="2020-12-01" class="c-time"><?php the_time("Y-m-d"); ?></time>
                <p class="p-news__text"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 40, '...'); ?></a></p>
              </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata()
          ?>
        </div>
      </section>
    </div>
  </div>

</main>

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