<div class="bigtext <?php the_sub_field('customClass')?>">
  <div class="container">
    <div class="bigtext__content">
      <div class="bigtext__text">
        <?php the_sub_field('text')?>
      </div>
      <div class="bigtext__img">
         <?php $image = get_sub_field('img');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
      </div>
    </div>
  </div>
</div>