<section class="credits" data-aos="fade-up">
  <div class="container">
    <div class="content">
      <div class="credits-brand" data-aos="fade-right">
        <div class="circle" data-aos="fade-in">
          <div class="sub-circle"></div>
          <div class="sub-circle"></div>
          <div class="sub-circle"></div>
        </div>
        <?php if (have_rows('brand')) {while (have_rows('brand')) { the_row(); ?>
          <div class="credits-brand__item" data-title="<?php the_sub_field('title')?>" data-content="<?php the_sub_field('text')?>" >
            <img src="<?php the_sub_field('img')?>" alt="<?php the_sub_field('title')?>" title="<?php the_sub_field('title')?>">
          </div>
        <?php }} ?>
      </div>
      <div class="credits-brand__text" data-aos="fade-left">
        <?php the_sub_field('text')?>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    $('.credits-brand__item').click(function(){
      const title= $(this).data('title')
      const paragraph= $(this).data('content')
      const composition = `<h3>${title}</h3> <p>${paragraph}</p>`
      $('.credits-brand__text').html(composition)
      $('.credits-brand__text').addClass('entrance')
      setTimeout(() => {
        $('.credits-brand__text').removeClass('entrance')
      }, 510);
    })
  })
</script>