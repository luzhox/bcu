<div class="videos" data-aos="fade-up">
  <div class="videos__content" >
  <?php if (have_rows('videos')) {
            while (have_rows('videos')) {
                the_row(); ?>
                <div class="videos__content__item"  style="background:url(<?php the_sub_field('poster')?>)">
                  <a href="<?php the_sub_field('video')?>" title="<?php the_sub_field('alt')?>"></a>
                  <svg width="106" height="106" viewBox="0 0 106 106" fill="none" xmlns="http://www.w3.org/2000/svg">
  <circle cx="53" cy="53" r="53" fill="white"/>
  <path d="M44 70V46V39L65 54.5L44 70Z" fill="#00AFAA"/>
  </svg>
                </div>
<?php }
        } ?>
  </div>
</div>



<script>
  document.addEventListener('DOMContentLoaded',function(){
    if (window.matchMedia("(min-width: 900px)").matches) {
      $(".videos__content__item a").colorbox({iframe:true, innerWidth:800, innerHeight:600});
} else {
  $(".videos__content__item a").colorbox({iframe:true, innerWidth:300, innerHeight:200});
}
  })
</script>