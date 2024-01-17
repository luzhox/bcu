<div class="promotions">
<div class="circle"></div>
  <div class="circle two"></div>
  <div class="container">
    <div class="promotions__content">
    <?php if (have_rows('promotions')) {while (have_rows('promotions')) { the_row(); ?>
      <div class="promotions__item" data-aos="fade-up" data-title="<?php the_sub_field('title')?>"  data-content='<?php the_sub_field('content')?>' data-img="<?php the_sub_field('img')?>" style="background:url(<?php the_sub_field('img')?>)" >
        <button class="seeMore"><?php the_sub_field('btnText')?></button>
      </div>
      <?php }} ?>

    </div>

  </div>
</div>
<div class="modal modal-promotions ">
  <div class="overlay overlayPromo"></div>

  <div class="modal-promotions__content">
  <div class="close closePromotions">

  </div>
    <div class="modal-promotions__content__img"></div>
    <div class="modal-promotions__content__text">
      <h3 class="modal-promotions__content__text__title"></h3>
      <div class="modal-promotions__content__text__content">

      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    $('.closePromotions').click(function(){
      $('.modal-promotions').removeClass('active')
    })
    $('.overlayPromo').click(function(){
      $('.modal-promotions').removeClass('active')
    })

    $('.promotions__item').click(function(){
      const title= $(this).data('title')
      const content= $(this).data('content')
      const img = $(this).data('img')
      $('.modal-promotions__content__img').html(`<img src="${img}" alt="${title} title="${title}"/>`)
      $('.modal-promotions__content__text__title').html(`${title}`)
      $('.modal-promotions__content__text__content').html(`${content}`)
      $('.modal-promotions').addClass('active')
    })
  })
</script>