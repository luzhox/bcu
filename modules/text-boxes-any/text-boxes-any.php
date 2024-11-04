<div class="text-boxes-any">
<div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  <div class="container">
    <div class="text-boxes-any__text"><?php the_sub_field('text')?></div>
    <div class="text-boxes-any__boxes">
      <div class="text-boxes-any__boxes__content">
       <?php if (have_rows('boxes')) {while (have_rows('boxes')) { the_row(); ?>
        <div class="text-boxes-any__boxes__content__item">
          <div class="text"><?php the_sub_field('text')?></div>
        </div>
        <?php }} ?>
      </div>
      <p><?php the_sub_field('textAditional')?></p>
    </div>
  </div>
</div>