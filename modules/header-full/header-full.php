<section data-aos="fade-in" class="header-full <?php the_sub_field('type')?> <?php the_sub_field('class')?>" style="background:url(<?php the_sub_field('img')?>)">
<?php
                    $ov = get_sub_field('overlay');
                    if ($ov) : ?>
                        <div class="overlay"></div>
                    <?php endif; ?>
  <div class="container">
    <div class="header-full__content">
    <?php $image = get_sub_field('brand');
                  if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
      <?php the_sub_field('text')?>
      <?php $link = get_sub_field('button');
       if ($link) : $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self';?>
        <a class="btn__primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>