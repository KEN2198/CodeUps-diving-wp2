<?php get_header(); ?>
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/site-map-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/site-map.jpg" alt="イソギンチャクと魚たち" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">Privacy Policy</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>
			<div class="privacy-policy privacy-policy-layout">
				<div class="privacy-policy__inner inner">
					<div class="privacy-policy__contents">
						<div class="privacy-policy__contents-inner">
						<?php if(have_posts()): while(have_posts()): the_post(); ?>
							<h2 class="privacy-policy__title"><?php the_title(); ?></h2>
							<p class="privacy-policy__description-1">以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
							<div class="privacy-policy__content">
								<?php the_content(); ?>
							</div>						
							<p class="privacy-policy__description-2">以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
