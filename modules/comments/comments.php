<div class="comments">
<div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  <div class="container">
    <div class="comments__title">
      <?php the_sub_field('title')?>
    </div>
    <div class="comments__content">
    <?php if (have_rows('boxes')) {while (have_rows('boxes')) { the_row(); ?>
      <div class="comments__content__item">
        <?php the_sub_field('text')?>
      </div>
    <?php }} ?>
    </div>
  </div>
</div>