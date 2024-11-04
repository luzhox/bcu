<div class="description-ao">
  <div class="container">
    <div class="description-ao__content">
      <div class="description-ao__text" data-aos="fade-right">
        <?php the_sub_field('text')?>
        <?php  $link = get_sub_field('link');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="btn__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
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