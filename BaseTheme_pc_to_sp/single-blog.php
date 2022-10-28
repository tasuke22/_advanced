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
              <?php echo do_shortcode('[addtoany]'); ?>
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
            <a href="<?php the_permalink(); ?>">
              <div class="p-recommendation-blog__headline">
                <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
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
  <?php get_sidebar(); ?>

</div>





<section class="l-detail-document p-document">
  <?php get_template_part('includes/document-request'); ?>
</section>

<section class="p-contact">
  <div class="p-contact__wrap">
    <p class="p-contact__contact">お電話でのお問い合わせはこちら</p>
    <p class="p-contact__tell">0123-456-7890</p>
    <p class="p-contact__time">平日 08:00~20:00</p>
  </div>
</section>
<?php get_footer(); ?>