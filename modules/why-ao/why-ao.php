<div class="why-ao">
  <div class="container">
    <div class="why-ao__title" data-aos="fade-up">
      <?php the_sub_field ('title')?>
    </div>
    <div class="why-ao__content" data-aos="fade-right">
      <div class="why-ao__img" style="background:url(<?php the_sub_field('img')?>)">
        <div class="circle"></div>
      </div>
      <div class="why-ao__steps" data-aos="fade-left">
        <?php if (have_rows('steps')) {while (have_rows('steps')) { the_row(); ?>
          <div class="why-ao__steps__item" data-img="<?php the_sub_field('img')?>">
            <h4><?php the_sub_field('number')?></h4>
            <p><?php the_sub_field('text')?></p>
          </div>
        <?php }} ?>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    document.getElementsByClassName('why-ao__steps__item')[0].classList.add('active')

    $('.why-ao__steps__item').click(function(){
      $(this).addClass('active')
      $(this).siblings().removeClass('active')
      const img= $(this).data('img')
      console.log(img)
      $('.why-ao__img').css('background',`url(${img})`)
    })
  })
</script>