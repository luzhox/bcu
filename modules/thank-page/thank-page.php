<div class="thank-page">
<div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  <div class="container">
    <div class="thank-page__content">
      <div class="thank-page__text">
        <?php the_sub_field('text')?>
      </div>
      <div class="thank-page__img">
      <?php $image = get_sub_field('img');
                  if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
      </div>
    </div>
  </div>
</div>