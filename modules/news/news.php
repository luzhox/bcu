<div class="news">
  <div class="container">
    <div class="news__title title"><?php the_sub_field('title')?></div>
    <div class="news__content">
        <?php $args = array(
								'posts_per_page'=> 3,
								'orderby'=> 'date',
								'order'=>'DESC'); ?>
						<?php $family = new WP_Query($args);?>
							<?php while($family->have_posts()): $family->the_post();?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
							<div class="news__content__item" data-aos="fade-up" data-aos-offset="100">
              <a href="<?php the_permalink()?>"></a>
              <div class="news__content__item__img">
                  <img src="<?php echo $url?>" alt="<?php the_title()?>">
                </div>
								<div class="news__content__item__text">
									<h3><?php the_title()?></h3>
                  <p><?php excerpt(40)?></p>

								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div class="news__all">
      <a href="/blog" class="btn__primary--border">Ver todas las noticias</a>
    </div>
  </div>
</div>