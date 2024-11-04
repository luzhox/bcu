<div class="reasons">
  <div class="container">
    <div class="reasons__title" data-aos="fade-up"><?php the_sub_field('title')?></div>
    <div class="reasons__content" data-aos="fade-up">
      <div class="reasons__content__slider owl-carousel owl-theme">
      <?php if (have_rows('reason')) {while (have_rows('reason')) { the_row(); ?>
        <div class="reasons__content__slider__item">
          <?php $image = get_sub_field('image');
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <p><?php the_sub_field('text')?></p>
        </div>
        <?php }} ?>
      </div>
    </div>
  </div>
</div>