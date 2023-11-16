<?php get_header(); ?>
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-blog-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-blog.jpg" alt="魚が泳いでいる様子" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">Blog</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>
			<?php
				if( !is_user_logged_in() && !is_bot() ) {
						setPostViews( get_the_ID() );
				}
				?>
			<div class="page-blog blog-layout">
				<div class="page-blog__inner inner">
					<div class="page-blog__container single-blog">
						<div class="single-blog__main">
							<div class="single-blog__date">
								<time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d');?></time>
								<h2 class="single-blog__title"><?php the_title(); ?></h2>
							</div>
							<div class="single-blog__img">
							<?php if(get_the_post_thumbnail()): ?>
										<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" />
										<?php endif; ?>
							</div>
							<div class="single-blog__content">
								<p>
								<?php the_content(); ?>
								</p>
							</div>

							<div class="wp-pagenavi single-blog__wp-pagenavi">
								<?php 
								$prev = get_previous_post();
								$prev_url = get_permalink($prev->ID);
								$next = get_next_post();
								$next_url = get_permalink($next->ID);
								?>
								<?php if($prev):  ?>
								<a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>">＜</a>
								<?php endif; ?>
								<?php if($next):  ?>
								<a class="nextpostslink" rel="next" href="<?php echo $next_url; ?>">＞</a>
								<?php endif; ?>
							</div>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
