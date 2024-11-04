<div class="pop-up">
  <div class="container">
    <div class="pop-up__content">
    <button class="pop-up__content__close"></button>
    <div class="pop-up__content__inner">
      <?php $image = get_sub_field('image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php $link = get_sub_field('link');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
        <a class="areaLink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>  
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    $('.pop-up__content__close').click(function(){
      $('.pop-up').fadeOut();
    })
  })
</script>