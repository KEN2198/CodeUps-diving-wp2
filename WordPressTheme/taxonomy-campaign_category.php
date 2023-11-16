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
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-campaign-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-campaign.jpg" alt="魚が泳いでいる様子" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">Campaign</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>
			

			<div class="page-campaign campaign-layout">
				<div class="page-campaign__inner inner">
					<div class="page-campaign__category category">
						<div class="category__inner">
							<ul class="category__items">
								<li class="category__item"><a href="<?php echo $campaign; ?>">ALL</a></li>
                <?php
            $terms = get_terms('campaign_category');
            foreach ($terms as $term):
                $term_link = get_term_link($term);
                $term_name = esc_html($term->name);
                $active_class = (is_tax('campaign_category', $term->slug)) ? 'active' : '';
            ?>
            <li class="category__item <?= $active_class ?>">
            <a href="<?= $term_link ?>"><?= $term_name ?></a>
          </li>
                    <?php endforeach; ?>
							</ul>
						</div>
					</div>
					<div class="page-campaign__items">
						  <?php if(have_posts()): while(have_posts()): the_post(); ?>
						<div class="page-campaign__item campaign-card">
							<div class="campaign-card__img">
							<?php if ( get_the_post_thumbnail() ) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
							</div>
							<div class="campaign-card__body campaign-card__body--page-campaign">
							<div class="campaign-card__head">
                <?php
                  $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                  if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                      $term = array_shift($terms); // 最初のタームを取得
                      $cat_name = $term->name; // ターム名を取得
                      echo '<span class="campaign-card__category">' . $cat_name . '</span>'; // ターム名を表示
                  }
                  ?>
								<h3 class="campaign-card__title campaign-card__title--page-campaign"> <?php the_title(); ?></h3>
								</div>
								<p class="campaign-card__subtitle campaign-card__subtitle--page-campaign">全部コミコミ(お一人様)</p>
								<div class="campaign-card__price campaign-card__price--page-campaign">
									<p class="campaign-card__price-black">
									¥<?php the_field('campaign_price1'); ?>
										<span></span>
									</p>
									<p class="campaign-card__price-accent">¥<?php the_field('campaign_price2'); ?></p>
								</div>
								<div class="campaign-card__text u-desktop">
									<p>
									<?php the_content(); ?>
									</p>
								</div>
								<div class="campaign-card__info u-desktop">
									<p><?php the_field('campaign_1'); ?></p>
									<p class="campaign-card__contact-text u-desktop">ご予約・お問い合わせはコチラ</p>
								</div>
								<div class="campaign-card__button u-desktop">
									<a href="<?php echo $contact; ?>" class="button"><span>Contact us</span></a>
								</div>
							</div>
						</div>
						    <?php endwhile; endif; ?>
					</div>
					<div class="wp-pagenavi page-campaign__wp-pagenavi">
					<?php wp_pagenavi(); ?>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
