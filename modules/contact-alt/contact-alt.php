<div class="contact-alt">
<div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  <div class="container">
    <div class="contact-alt__content">
      <h3 class="title"><?php the_sub_field('title')?></h3>
      <div class="two-columns">
        <div class="two-columns__item">
          <a href="<?php the_sub_field('linkwhastapp')?>" class="btn__whatsapp" target="_blank">
            <svg width="68" height="69" viewBox="0 0 68 69" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.45133 34.0871C1.44973 39.8844 2.95423 45.5451 5.81502 50.5345L1.17773 67.5818L18.505 63.0074C23.2975 65.6343 28.6671 67.0107 34.1237 67.0111H34.1381C52.1514 67.0111 66.8147 52.2528 66.8224 34.113C66.8259 25.323 63.4291 17.0575 57.2575 10.8389C51.0871 4.62088 42.8806 1.19469 34.1368 1.19067C16.1213 1.19067 1.45903 15.9481 1.45159 34.0871" fill="url(#paint0_linear_620_31)"/>
              <path d="M0.284219 34.0764C0.282359 40.0823 1.84078 45.9454 4.80356 51.1135L0 68.7719L17.9485 64.0336C22.894 66.7484 28.462 68.1798 34.1278 68.1819H34.1424C52.802 68.1819 67.992 52.8928 68 34.1037C68.0032 24.9978 64.4842 16.4351 58.0922 9.99377C51.6994 3.55323 43.1994 0.00374419 34.1424 0C15.4796 0 0.291656 15.287 0.284219 34.0764ZM10.973 50.2234L10.3028 49.1523C7.48558 44.6422 5.99861 39.4303 6.00073 34.0785C6.00684 18.4612 18.6304 5.75535 34.153 5.75535C41.6702 5.75856 48.7347 8.70898 54.0483 14.0621C59.3616 19.4157 62.2853 26.5324 62.2835 34.1015C62.2766 49.7188 49.6527 62.4263 34.1424 62.4263H34.1312C29.0809 62.4236 24.1278 61.058 19.8082 58.4775L18.7802 57.8637L8.12919 60.6753L10.973 50.2232V50.2234Z" fill="url(#paint1_linear_620_31)"/>
              <path d="M25.6802 19.8302C25.0464 18.4119 24.3794 18.3833 23.7767 18.3584C23.2832 18.337 22.719 18.3387 22.1554 18.3387C21.5912 18.3387 20.6745 18.5523 19.8997 19.4041C19.124 20.2567 16.9385 22.3171 16.9385 26.5077C16.9385 30.6985 19.9701 34.7483 20.3927 35.3172C20.8158 35.885 26.2452 44.7598 34.844 48.1739C41.9904 51.0112 43.4447 50.4469 44.9956 50.3046C46.5469 50.1629 50.0011 48.2448 50.7058 46.2558C51.411 44.2671 51.411 42.5625 51.1996 42.2062C50.9881 41.8513 50.424 41.6382 49.5779 41.2124C48.7317 40.7864 44.5725 38.7257 43.7971 38.4415C43.0215 38.1574 42.4576 38.0157 41.8934 38.8686C41.3292 39.7201 39.7092 41.6382 39.2154 42.2062C38.7221 42.7756 38.2283 42.8465 37.3826 42.4205C36.536 41.9931 33.8115 41.0947 30.5791 38.1933C28.0642 35.9355 26.3663 33.1474 25.8728 32.2946C25.3792 31.443 25.8199 30.9814 26.2441 30.557C26.6242 30.1754 27.0904 29.5624 27.5138 29.0652C27.9356 28.5678 28.0764 28.2129 28.3585 27.6448C28.6409 27.0762 28.4995 26.5788 28.2884 26.1528C28.0764 25.7267 26.4324 21.5143 25.6802 19.8302Z" fill="white"/>
              <defs>
              <linearGradient id="paint0_linear_620_31" x1="3283.41" y1="6640.3" x2="3283.41" y2="1.19067" gradientUnits="userSpaceOnUse">
              <stop stop-color="#00AFAA"/>
              <stop offset="1" stop-color="#00AFAA"/>
              </linearGradient>
              <linearGradient id="paint1_linear_620_31" x1="3400" y1="6877.19" x2="3400" y2="0" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F9F9F9"/>
              <stop offset="1" stop-color="white"/>
              </linearGradient>
              </defs>
            </svg>
          Whatapp</a>
          <div class="box">
            <h4>Escríbenos al:</h4>
            <p class="email"><?php the_sub_field('email')?></p>
          </div>
        </div>
        <div class="two-columns__item col-2">
          <div class="box">
            <h4>Llamándonos al:</h4>
            <p class="number"><?php the_sub_field('numbers')?></p>
          </div>
          <div class="box">
            <h4>Horario de atención:</h4>
            <p class="address"><?php the_sub_field('hours')?></p>
          </div>
        </div>
      </div>
      <div class="box-contact">
      <?php $image = get_sub_field('img-contact');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="text"><?php the_sub_field('more')?></div>
        <div class="button"><a href="<?php the_sub_field('link')?>" class="btn__primary" target="_blank" >Contrate aquí</a></div>
      </div>
    </div>
    <div class="contact-alt__img" style="display:none!important">
    <?php $image = get_sub_field('img');
    
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
  </div>
</div>