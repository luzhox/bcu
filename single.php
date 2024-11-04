<?php get_header(); ?>
<?php include('menu.php')?>

	<div id="articulo"  class="single-custom">
		<?php while(have_posts() ): the_post(); ?>
			<?php global $post;
			$thumbID = get_post_thumbnail_id( $post->ID );
			$imgDestacada = wp_get_attachment_url( $thumbID );?>
			<div class="container">
				<div class="single-custom__title">
					<div class="category"><?php the_category()?></div>
					<h1 data-aos="fade-up" data-aos-offset="100"><?php the_title();?></h1>
					<div class="date"><?php the_date()?></div>
				</div>
				<div class="single-custom__imagen" data-aos="fade-up" data-aos-offset="100"  >
					<img src="<?php echo $imgDestacada;?>" alt="<?php the_title();?>">
				</div>
				<div class="single-custom__text">
						<div class="texto-articulo" data-aos="fade-up" data-aos-offset="100"><?php the_content();?></div>
				</div>

			</div>
	</div>
	<!-- <div class="aside">
					<h3 class="title">Artículos Recientes</h3>
					<div class="ultimasnoticias">
						<?php $args = array(
								'posts_per_page'=> 3,
								'orderby'=> 'date',
								'order'=>'DESC'); ?>
						<?php $family = new WP_Query($args);?>
									<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
							<?php while($family->have_posts()): $family->the_post();?>
							<div class="noticia" data-aos="fade-up" data-aos-offset="100">
								<div class="texto-noticia">
									<p><?php excerpt('10');?></p>
									<a href="<?php the_permalink()?>">Ver más</a>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div> -->
	<?php endwhile; ?>

<?php get_footer(); ?>