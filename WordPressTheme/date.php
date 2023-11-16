<?php get_header(); ?>
<?php
$top = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$privacy = esc_url( home_url( '/privacy/' ) );
$termsofservise = esc_url( home_url( '/terms-of-service/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$sitemap = esc_url( home_url( '/sitemap/' ) );
?>
<?php get_header(); ?>
<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-blog-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-blog.jpg" alt="魚が泳いでいる様子" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<div class="sub-mv__title">
						<?php 
      echo "<h1>" . get_the_archive_title() . "</h1>"; ?>

						</div>
					</div>
				</div>
			</div>
		
			<?php get_template_part('parts/breadcrumb') ?>
			<div class="page-blog blog-layout">
				<div class="page-blog__inner inner">
					<div class="page-blog__container">
						<div class="page-blog__main">
							<div class="page-blog__cards blog-cards blog-cards--2colums">
								
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
									<div class="blog-card__img">
									<?php if(get_the_post_thumbnail()): ?>
										<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" />
										<?php endif; ?>
									</div>
									<div class="blog-card__body">
										<div class="blog-card__date">
											<time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d');?></time>
											<h3 class="blog-card__title"><?php the_title(); ?></h3>
											<div class="blog-card__textblock">
												<p><?php the_excerpt(); ?></p>
											</div>
										</div>
									</div>
								</a>
								<?php endwhile; ?>
<?php endif; ?>		
							</div>
							<div class="wp-pagenavi">
							<?php wp_pagenavi(); ?>
							</div>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
