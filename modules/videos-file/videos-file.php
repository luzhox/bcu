<div class="videos" data-aos="fade-in">
  <div class="videos__content">
  <?php if (have_rows('videos')) {
            while (have_rows('videos')) {
                the_row(); ?>
                <div class="videos__content__item linkVideo" data-url="<?php the_sub_field('video')?>" style="background:url(<?php the_sub_field('poster')?>)">

                <svg width="106" height="106" viewBox="0 0 106 106" fill="none" xmlns="http://www.w3.org/2000/svg">
  <circle cx="53" cy="53" r="53" fill="white"/>
  <path d="M44 70V46V39L65 54.5L44 70Z" fill="#00AFAA"/>
  </svg>
                </div>
<?php }
        } ?>
  </div>
</div>
<div class="modalVideo ">
  <div class="overlay overlayVideo"></div>
  <div class="modalVideo__content">
  <video controls>
  <source src="" type="video/mp4">
  </video>
  </div>
</div>



<script>
  document.addEventListener('DOMContentLoaded', function(){
    $('.linkVideo').click(function(){
      const url= $(this).data('url')
      console.log('url',url)
      $('.modalVideo__content video').attr('src',url)
      $('.modalVideo__content video source').attr('src',url)
      $('.modalVideo').fadeIn()
      $('.modalVideo video').trigger('play')

    })
    $('.modalVideo__content').click(function(){
      $('.modalVideo').fadeOut()
      $('.modalVideo video').trigger('pause')
      $('.modalVideo video').prop('currentTime', 0);

    })
    $('.overlayVideo').click(function(){
      $('.modalVideo').fadeOut()
      $('.modalVideo video').trigger('pause')
      $('.modalVideo video').prop('currentTime', 0);

    })
  })
</script>