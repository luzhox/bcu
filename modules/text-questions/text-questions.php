<div class="text-questions <?php the_sub_field('class')?>">
  <div class="container">
    <div class="text-questions__content">
      <div class="text-questions__text" data-aos="fade-right">
        <div class="text-questions__text__img">
        <?php $image = get_sub_field('img');
                  if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
        </div>
        <div class="text-questions__text__content"><?php the_sub_field('text')?></div>
      </div>
      <div class="text-questions__questions " data-aos="fade-left">
        <?php if (have_rows('slide')) {while (have_rows('slide')) { the_row(); ?>
        <div class="text-questions__questions__item">
          <?php if (have_rows('question')) {while (have_rows('question')) { the_row(); ?>
            <div class="text-questions__questions__item__question">
              <div class="text-questions__questions__item__question__head"><p><?php the_sub_field('title')?> </p><svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3055 0.734276C19.0045 1.45514 18.9868 2.60619 18.2659 3.30522L10.7661 10.5778C10.0608 11.2617 8.93991 11.2617 8.23467 10.5778L0.734827 3.30522C0.0139599 2.60619 -0.00374792 1.45514 0.695274 0.734276C1.3943 0.0134082 2.54535 -0.00430022 3.26622 0.694723L9.50037 6.73996L15.7345 0.694723C16.4554 -0.00430039 17.6064 0.013408 18.3055 0.734276Z" fill="#00AFAA"/>
              </svg></div>
              <div class="text-questions__questions__item__question__body"><?php the_sub_field('content')?></div>
            </div>
          <?php }} ?>
        </div>
        <?php }} ?>

      </div>
    </div>
  </div>
</div>

<script>document.addEventListener('DOMContentLoaded',function(){
  $('.text-questions__questions__item__question').click(function(){
    $(this).toggleClass('active')
    $(this).siblings().removeClass('active')
  })
})</script>