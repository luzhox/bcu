<div class="header-blog">
  <div class="container">
    <div class="header-blog__head" style="background:url(<?php the_sub_field('img')?>)">
        <div class="text">
        <?php the_sub_field('text')?>
        </div>
        <a href="<?php the_sub_field('link')?>"></a>
    </div>
    <div class="header-blog__content">
      <div class="header-blog__content__title">
        <h3>Te recomendamos</h3>
      </div>
      <div class="header-blog__content__posts">
    <?php $args = array(
								'posts_per_page'=> -1,
								'orderby'=> 'date',
								'order'=>'DESC'); ?>
						<?php $family = new WP_Query($args);?>
							<?php while($family->have_posts()): $family->the_post();?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

							<div class="header-blog__content__item" data-aos="fade-up" data-aos-offset="100">
                <div class="img">
                <a href="<?php the_permalink()?>">

                  <img src="<?php echo $url?>" alt="<?php excerpt('10');?>"></a>
                </div>

								<div class="text">
                  <div class="text__date">
                    <div class="text__date__cat"><?php the_category()?></div>
                    <div class="text__date__date"><?php echo get_the_date(); ?></div>
                  </div>
									<a href="<?php the_permalink()?>"><p><?php the_title();?></p></a>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
            </div>
    </div>
  </div>
</div>