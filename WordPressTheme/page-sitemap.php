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
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/site-map-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/site-map.jpg" alt="イソギンチャクと魚たち" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">Site MAP</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>
			<div class="site-map site-map-layout">
				<div class="site-map__inner inner">
					<div class="site-map__contents site-nav">
						<div class="site-nav__menu">
							<div class="site-nav__content-right">
								<ul class="site-nav__items">
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
									<ul class="site-nav__item">
              <?php
              $terms = get_terms('campaign_category');
              foreach ( $terms as $term ) {
              echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
            }
            ?>
            </ul>
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $about; ?>">私たちについて</a></li>
								</ul>
								<ul class="site-nav__items">
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
									<li class="site-nav__item"><a href="<?php echo $information; ?>?id=tab1">ライセンス講習</a></li>
									<li class="site-nav__item"><a href="<?php echo $information; ?>?id=tab3">体験ダイビング</a></li>
									<li class="site-nav__item"><a href="<?php echo $information; ?>?id=tab2">ファンダイビング</a></li>
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $blog; ?>">ブログ</a></li>
								</ul>
							</div>
							<div class="site-nav__content-left">
								<ul class="site-nav__items">
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $voice; ?>">お客様の声</a></li>
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $price; ?>">料金一覧</a></li>
									<li class="site-nav__item"><a href="#">ライセンス講習</a></li>
									<li class="site-nav__item"><a href="#">体験ダイビング</a></li>
									<li class="site-nav__item"><a href="#">ファンダイビング</a></li>
								</ul>
								<ul class="site-nav__items">
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $faq; ?>">よくある質問</a></li>
									<li class="site-nav__item site-nav__item--icon">
										<a href="<?php echo $privacy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
									</li>
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $termsofservise; ?>">利用規約</a></li>
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $contact; ?>">おい問わ合せ</a></li>
									<li class="site-nav__item site-nav__item--icon"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
