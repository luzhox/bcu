<div class="benefits" data-aos="fade-up">
  <div class="container">
    <div class="benefits__content" >
      <div class="benefits__title">
        <?php the_sub_field('title')?>
      </div>
      <div class="benefits__brands">
      <?php if (have_rows('brand')) {while (have_rows('brand')) { the_row(); ?>
        <img src="<?php the_sub_field('brand')?>" alt="<?php the_sub_field('title')?>" title="<?php the_sub_field('title')?>">
        <?php }} ?>
      </div>
    </div>
  </div>
</div>