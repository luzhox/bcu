<div class="text-boxes">
  <div class="container">
    <div class="text-boxes__text"><?php the_sub_field('text')?></div>
    <div class="text-boxes__boxes">
      <div class="text-boxes__boxes__content">
       <?php if (have_rows('boxes')) {while (have_rows('boxes')) { the_row(); ?>
        <div class="text-boxes__boxes__content__item">
          <div class="text"><?php the_sub_field('text')?></div>
          <div class="price">
            <p><?php the_sub_field('hightTitle')?></p>
            <h4><?php the_sub_field('price')?></h4>
          </div>
          <a class="btn__primary" href="https://api.whatsapp.com/send?phone=51981300025&text=Necesito%20m%C3%A1s%20informaci%C3%B3n%20sobre%20synlab" target="_blank"><?php the_sub_field('textbtn')?></a>
        </div>
        <?php }} ?>
      </div>
      <p><?php the_sub_field('textAditional')?></p>
    </div>
  </div>
</div>