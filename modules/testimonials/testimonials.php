<div class="testimonials">
  <div class="container">
    <div class="testimonials__content" data-aos="fade-up">
      <div class="circle"></div>
      <div class="testimonials__slider owl-carousel owl-theme">
      <?php if (have_rows('testimonials')) {while (have_rows('testimonials')) { the_row(); ?>

        <div class="testimonials__slider__item">
          <div class="testimonials__slider__item__video">
            <a class="videoTesti" href="<?php the_sub_field('link')?>">
                <svg width="106" height="106" viewBox="0 0 106 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="53" cy="53" r="53" fill="white"/>
                  <path d="M44 70V46V39L65 54.5L44 70Z" fill="#00AFAA"/>
                </svg>

              <img src="<?php the_sub_field('poster')?>" alt="<?php the_sub_field('title')?>">
            </a>
          </div>
          <div class="testimonials__slider__item__text">
            <h3><?php the_sub_field('title')?></h3>
            <svg width="35" height="21" viewBox="0 0 35 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M26.0899 20.8399C23.5232 20.8399 21.6799 20.1399 20.5599 18.7399C19.4866 17.3399 18.9499 15.5666 18.9499 13.4199C18.9499 12.1599 19.2299 10.6899 19.7899 9.00994C20.3966 7.28327 21.3299 5.62661 22.5899 4.03994C23.8499 2.40661 25.4366 1.12327 27.3499 0.189941L33.5099 3.75994C32.4366 4.22661 31.3866 4.76327 30.3599 5.36994C29.3332 5.97661 28.5632 6.69994 28.0499 7.53994H28.3999C29.2399 7.53994 30.1032 7.74994 30.9899 8.16994C31.9232 8.58994 32.6932 9.24327 33.2999 10.1299C33.9532 10.9699 34.2799 12.0899 34.2799 13.4899C34.2799 14.4699 33.9999 15.5433 33.4399 16.7099C32.9266 17.8299 32.0632 18.8099 30.8499 19.6499C29.6832 20.4433 28.0966 20.8399 26.0899 20.8399ZM7.5399 20.8399C4.97324 20.8399 3.1299 20.1399 2.0099 18.7399C0.936569 17.3399 0.399902 15.5666 0.399902 13.4199C0.399902 12.1599 0.679902 10.6899 1.2399 9.00994C1.84657 7.28327 2.7799 5.62661 4.0399 4.03994C5.2999 2.40661 6.88657 1.12327 8.7999 0.189941L14.9599 3.75994C13.8866 4.22661 12.8366 4.76327 11.8099 5.36994C10.7832 5.97661 10.0132 6.69994 9.4999 7.53994H9.8499C10.6899 7.53994 11.5532 7.74994 12.4399 8.16994C13.3732 8.58994 14.1432 9.24327 14.7499 10.1299C15.4032 10.9699 15.7299 12.0899 15.7299 13.4899C15.7299 14.4699 15.4499 15.5433 14.8899 16.7099C14.3766 17.8299 13.5132 18.8099 12.2999 19.6499C11.1332 20.4433 9.54657 20.8399 7.5399 20.8399Z" fill="#00AFAA"/>
            </svg>
            <p><?php the_sub_field('text')?></p>
            <h4><?php the_sub_field('person')?></h4>
          </div>
        </div>
        <?php }} ?>

      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    $(".videoTesti").colorbox({iframe:true, innerWidth:640, innerHeight:390});

  })
</script>