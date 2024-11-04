<div class="discount-ao">
  <div class="container">
    <div class="discount-ao__title" data-aos="fade-up">
      <?php the_sub_field('text')?>
    </div>
    <div class="discount-ao__content" data-aos="zoom-in">
    <?php if (have_rows('discount')) {while (have_rows('discount')) { the_row(); ?>
      <div class="discount-ao__content__item">
        <h4><?php the_sub_field('value')?></h4>
        <p><?php the_sub_field('text')?></p>
      </div>
      <?php }} ?>

    </div>
  </div>
</div>