<?php get_header(); ?>
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-contact-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-contact.jpg" alt="海辺の様子" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">Contact</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>
			<div class="page-thanks thanks-layout">
				<div class="page-thanks__inner inner">
					<div class="page-thanks__message">お問い合わせ内容を送信完了しました。</div>
					<div class="page-thanks__text">
						このたびは、お問い合わせ頂き<br class="u-mobile" />誠にありがとうございます。<br />お送り頂きました内容を確認の上、<br class="u-mobile" />3営業日以内に折り返しご連絡させて頂きます。<br />また、ご記入頂いたメールアドレスへ、<br class="u-mobile" />自動返信の確認メールをお送りしております。
					</div>
				</div>
			</div>
<?php get_footer(); ?>
