<footer class="l-footer p-footer">
  <div class="l-inner">
    <div class="p-footer__wrap">
      <nav class="p-footer__gnav">
        <ul class="p-footer__list">
          <?php foreach (getNavMenu('global_nav') as $menu) : ?>
            <li class="p-footer__item">
              <a href="<?php echo $menu->url; ?>">
                <?php echo $menu->title; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <div class="p-footer__body">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <div class="p-footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
          </div>
        </a>
        <span class="c-tel c-tel--white">
          0123-456-7890
        </span>
        <span class="c-business-hours">平日08:00〜20:00</span>
      </div>
    </div>

  </div>

</footer>
<div class="l-inner">
  <div class="c-copy">
    <small>&copy; 2020 Engress. </small>
  </div>
</div>
<?php wp_footer(); ?>

</body>

</html>