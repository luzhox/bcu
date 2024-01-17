<div class="two-columnsimg">
  <div class="container">
    <div class="two-columnsimg__text">
      <div class="two-columnsimg__text__title">
        <h3><?php the_sub_field('title')?></h3>
      </div>
      <div class="two-columnsimg__text__columns">
      <div class="two-columnsimg__text__one"><?php the_sub_field('textone')?></div>
      <div class="two-columnsimg__text__one"><?php the_sub_field('textTwo')?></div>
      </div>
     
    </div>
    <div class="two-columnsimg__img">
    <?php 
        $image = get_sub_field('img');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
  </div>
</div>