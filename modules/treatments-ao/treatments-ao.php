<div class="treatments-ao">
  <div class="container">
    <div class="treatments-ao__title" data-aos="fade-up">
      <h3><?php the_sub_field('title')?></h3></div>
      <div class="treatments-ao__content">
        <?php if (have_rows('treatments')) {
  while (have_rows('treatments')) {
    the_row();
    ?><div class="treatments-ao__content__item" data-aos="fade-up"><?php $image=get_sub_field('img');
    if( !empty($image)): ?> <img height="<?php the_sub_field('height')?>"src="<?php echo esc_url($image['url']); ?>"alt="<?php echo esc_attr($image['alt']); ?>"/> <?php endif;
    ?><h4><?php the_sub_field('text')?></h4></div><?php
  }
}

?></div></div></div>