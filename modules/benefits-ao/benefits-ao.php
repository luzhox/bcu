<div class="benefits-ao">
  <div class="container">
    <div class="benefits-ao__content">
    <?php if (have_rows('beneficio')) {while (have_rows('beneficio')) { the_row(); ?>

      <div class="benefits-ao__content__item" data-aos="fade-up">
        <div class="benefits-ao__content__item__icon">
        <?php $image = get_sub_field('image');
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="benefits-ao__content__item__text">
          <h4><?php the_sub_field('title')?></h4>
          <p><?php the_sub_field('text')?></p>

        </div>
      </div>
      <?php }} ?>

    </div>
  </div>
</div>
<style>.modalFlotante{
	display:none!important;
	}</style>