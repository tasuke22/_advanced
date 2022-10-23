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
      <a itemprop="item" href="blog.html">
        <span itemprop="name">ブログ</span>
      </a>
      <meta itemprop="position" content="2" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="">
        <span itemprop="name">カテゴリ1</span>
      </a>
      <meta itemprop="position" content="3" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="">
        <span itemprop="name">ブログタイトルテキストテキストテキストテキスト</span>
      </a>
      <meta itemprop="position" content="4" />
    </li>
  </div>
</ol>


<div class="l-inner l-section__grid-col-2">

  <div class="l-left">
    <section class="l-blog-detail p-blog-detail">

      <?php
      if (have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <?php
          $terms = get_the_terms($post->ID, 'blog_category');
          ?>
          <div class="p-blog-detail__category"><?php echo $terms[0]->name; ?></div>
          <div class="p-blog-detail__title"><?php the_title(); ?></div>
          <div class="p-blog-detail__wrap">
            <div class="p-blog-detail__sns">
              <span class="p-blog-detail__facebook"><a href="">Like！ 0</a></span>
              <span class="p-blog-detail__share"><a href="">Share</a></span>
              <span class="p-blog-detail__twitter"><a href="">ツイート</a></span>
            </div>
            <div class="c-time c-time--sub"><?php the_time("Y-m-d"); ?></div>
          </div>
          <div class="p-blog-detail__img">
            <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="">
          </div>
          <div class="p-blog-detail__contents">
            <?php the_content(); ?>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata()
      ?>
    </section>




    <section class="l-recommendation-blog p-recommendation-blog">
      <h2 class="c-section-sub-title c-section-sub-title p-recommendation-blog__title">おすすめの記事</h2>
      <?php
      $blogTagRelatedPostData = get_posts([
        'post_type' => 'blog',
        'posts_per_page' => '3',
        'post__not_in' => [$post->ID],
        'orderby' => 'dest',
        'tax_query' => [[
          'taxonomy' => 'blog_tag',
          'field' => 'slug',
          'terms' =>  'pickup',
        ]],
      ]);
      foreach ($blogTagRelatedPostData as $post) :
        setup_postdata($post);
        $terms = get_the_terms($post->ID, 'blog_category');
      ?>
        <div class="p-recommendation-blog__wrap">
          <div class="p-recommendation-blog-card">
            <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="">
            <span class="p-recommendation-blog__category"><?php echo $terms[0]->name; ?></span>
          </div>
          <div class="p-recommendation-blog__body">
            <p class="c-time c-time--sub"><?php the_time("Y-m-d"); ?></p>
            <a href="">
              <div class="p-recommendation-blog__headline">
                <?php the_content(); ?>
              </div>
            </a>
          </div>
        </div>
      <?php
      endforeach;
      wp_reset_postdata()
      ?>

    </section>



  </div>


  <div class="l-right">
    <section class="l-related-article p-related-article">
      <h2 class="p-related-article__title">関連記事</h2>
      <?php
      $terms = get_the_terms($post->ID, 'blog_category');
      $blogCategoryRelatedPostData = get_posts([
        'post_type' => 'blog',
        'posts_per_page' => '3',
        'post__not_in' => [$post->ID],
        'orderby' => 'dest',
        'tax_query' => [[
          'taxonomy' => 'blog_category',
          'field' => 'slug',
          'terms' =>  [$terms[0]->slug],
        ]],
      ]);
      foreach ($blogCategoryRelatedPostData as $post) :
        setup_postdata($post);
      ?>
        <div class="p-related-article__wrap">
          <div class="p-related-article__img">
            <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="">
          </div>
          <div class="p-related-article__text"><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a></div>
        </div>
      <?php
      endforeach;
      ?>
    </section>


    <section class="l-category p-category">
      <h2 class="p-category__title">カテゴリー</h2>
      <ul class="p-category__list">
        <a href="">
          <li class="p-category__item">カテゴリ1</li>
        </a>
        <a href="">
          <li class="p-category__item">カテゴリ2</li>
        </a>
        <a href="">
          <li class="p-category__item">カテゴリ3</li>
        </a>
      </ul>
    </section>
  </div>

</div>





<section class="l-detail-document p-document">
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