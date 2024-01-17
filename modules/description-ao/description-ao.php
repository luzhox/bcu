<div class="description-ao">
  <div class="container">
    <div class="description-ao__content">
      <div class="description-ao__text" data-aos="fade-right">
        <?php the_sub_field('text')?>
      </div>
      <div class="description-ao__resalt" data-aos="zoom-in">
            <?php $image = get_sub_field('resalt');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
      </div>
    </div>
  </div>
</div>