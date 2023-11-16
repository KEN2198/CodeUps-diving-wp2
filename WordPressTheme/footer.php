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
<!-- ############################################ -->
<!-- お問い合わせ -->
<!-- ############################################ -->
<?php
  if (!is_404() && !is_page('contact') && !is_page('thanks')) :
    // 404ページ、'contact' ページ、'thanks' ページ以外でコンタクトセクション表示
?>
<section id="Contact" class="contact top-contact">
				<div class="contact__inner inner">
					<div class="contact__items">
						<div class="contact__item">
							<div class="contact__logo">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-logo.png" alt="コンタクトロゴ" />
							</div>
							<ul class="contact__access">
								<li>沖縄県那覇市1-1</li>
								<li>TEL:0120-000-0000</li>
								<li>営業時間:8:30-19:00</li>
								<li>定休日:毎週火曜日</li>
							</ul>
							<div class="contact__map">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114545.97172501025!2d127.52880674797925!3d26.210935294924344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1692857160488!5m2!1sja!2sjp"
									width="600"
									height="450"
									style="border: 0;"
									allowfullscreen=""
									loading="lazy"
									referrerpolicy="no-referrer-when-downgrade"
								></iframe>
							</div>
						</div>

						<div class="contact__heading section-header section-header--contact">
							<p class="section-header__title section-header__title--contact">Contact</p>
							<h2 class="section-header__subtitle section-header__subtitle--contact">お問い合せ</h2>
							<p class="section-header__contact-text">ご予約・お問い合わせはコチラ</p>
							<div class="contact__button">
								<a href="<?php echo $contact; ?>" class="button"><span>Contact us</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php endif; ?>
		</main>
		<footer class="footer <?php echo is_404() ? '' : 'footer-layout'; ?>"" id="footer">
			<div class="footer__inner inner">
				<div class="footer__flex">
					<a href="<?php echo $top; ?>" class="footer__logo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/footer-logo.jpg" alt="フッターロゴ" /></a>
					<div class="footer__sns">
						<a href="https://www.facebook.com/" target=_blank class="footer__facebook"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/Facebook-Logo.png" alt="Facebook" /></a>
						<a href="https://www.instagram.com/" target=_blank class="footer__instagram"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/Instagram-Logo.png" alt="Instagram" /></a>
					</div>
				</div>
				<div class="footer__menu">
					<div class="footer__content-right">
						<ul class="footer__items">
							<li class="footer__item footer__item--icon"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
							<ul class="footer__item">
              <?php
              $terms = get_terms('campaign_category');
              foreach ( $terms as $term ) {
              echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
            }
            ?>
            </ul>
							<li class="footer__item footer__item--icon"><a href="<?php echo $about; ?>">私たちについて</a></li>
						</ul>
						<ul class="footer__items">
							<li class="footer__item footer__item--icon"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
							<li class="footer__item"><a href="<?php echo $information; ?>?id=tab1">ライセンス講習</a></li>
							<li class="footer__item"><a href="<?php echo $information; ?>?id=tab3">体験ダイビング</a></li>
							<li class="footer__item"><a href="<?php echo $information; ?>?id=tab2">ファンダイビング</a></li>
							<li class="footer__item footer__item--icon"><a href="<?php echo $blog; ?>">ブログ</a></li>
						</ul>
					</div>
					<div class="footer__content-left">
						<ul class="footer__items">
							<li class="footer__item footer__item--icon"><a href="<?php echo $voice; ?>">お客様の声</a></li>
							<li class="footer__item footer__item--icon"><a href="<?php echo $price; ?>">料金一覧</a></li>
							<li class="footer__item"><a href="<?php echo $price; ?>">ライセンス講習</a></li>
							<li class="footer__item"><a href="<?php echo $price; ?>">体験ダイビング</a></li>
							<li class="footer__item"><a href="<?php echo $price; ?>">ファンダイビング</a></li>
						</ul>
						<ul class="footer__items">
							<li class="footer__item footer__item--icon"><a href="<?php echo $faq; ?>">よくある質問</a></li>
							<li class="footer__item footer__item--icon">
								<a href="<?php echo $privacy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
							</li>
							<li class="footer__item footer__item--icon"><a href="<?php echo $termsofservise; ?>">利用規約</a></li>
							<li class="footer__item footer__item--icon"><a href="<?php echo $contact; ?>">おい問わ合せ</a></li>
							<li class="footer__item footer__item--icon"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
						</ul>
					</div>
				</div>
				<p class="footer__copyright">Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
			</div>
		</footer>
		<div class="page-top js-page-top" id="page-top">
			<a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/to-top-logo.png" alt="アイコン" /></a>
		</div>
    <?php wp_footer(); ?>
	</body>
</html>