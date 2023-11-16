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
						<h2 class="sub-mv__title">Terms of Service</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>
			<div class="terms-of-service terms-of-service-layout">
				<div class="terms-of-service__inner inner">
					<div class="terms-of-service__contents">
						<div class="terms-of-service__contents-inner">
						<?php if(have_posts()): while(have_posts()): the_post(); ?>
							<h2 class="terms-of-service__title"><?php the_title(); ?></h2>
							<p class="terms-of-service__description-1">以下は、Webサイトで使用する一般的な利用規約の例です。</p>
							<div class="terms-of-service__content">
								<?php the_content(); ?>
							</div>
							<p class="terms-of-service__description-2">以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
