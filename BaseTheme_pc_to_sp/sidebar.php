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
        <div class="p-related-article__text"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></a></div>
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