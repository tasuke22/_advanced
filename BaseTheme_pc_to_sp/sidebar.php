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
        <div class="p-related-article__text">
          <a href="<?php the_permalink(); ?>">
            <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
          </a>
        </div>
      </div>
    <?php
    endforeach;
    ?>
  </section>


  <section class="l-category p-category">
    <h2 class="p-category__title">カテゴリ</h2>


    <ul class="p-category__list">
      <?php
      wp_list_categories([
        'taxonomy' => 'blog_category', // タクソノミーの指定
        'title_li' => '', // リストの外側に表示されるタイトルを非表示
        'show_count' => 1, // カテゴリの投稿数を表示
      ]); ?>
    </ul>
  </section>
</div>