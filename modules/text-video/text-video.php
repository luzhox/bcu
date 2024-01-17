<section class="text-video">
<div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  <div class="container">
    <div class="text-video__text"><?php the_sub_field('text')?></div>
    <div class="text-video__video" style="background:url(<?php the_sub_field('img')?>)">
    <a href="<?php the_sub_field('video')?>" class="link-video-text"></a>
      <div class="overlay">
        <svg width="106" height="106" viewBox="0 0 106 106" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="53" cy="53" r="53" fill="white"/>
          <path d="M44 70V46V39L65 54.5L44 70Z" fill="#00AFAA"/>
          </svg>
        </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    $(".link-video-text").colorbox({iframe:true, innerWidth:640, innerHeight:390});

  })
</script>