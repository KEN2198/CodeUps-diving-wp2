<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no" />
		<link rel="shortcut icon" href="http://xs804195.xsrv.jp/wp-test/wp-content/uploads/2023/10/tab2-1.png">
    <?php wp_head(); ?>
	</head>
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
	<body>
	<div class="loading js-loading u-desktop">
			<div class="loading__inner">
				<div class="loading__img-wrap">
					<div class="loading__img js-loading-img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/loading-left.jpg" alt="亀の写真" />
					</div>
					<div class="loading__img js-loading-img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/loading-right.jpg" alt="亀の写真" />
					</div>
				</div>
				<div class="loading__title-wrap js-loading-title">
					<p class="loading__title">diving</p>
					<p class="loading__subtitle">into&nbsp;the&nbsp;ocean</p>
				</div>
			</div>
		</div>
		<header class="header top-header">
			<div class="header__inner">
				<h1 class="header__logo">
					<a href="<?php echo $top; ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/header-logo.png" alt="ロゴ" /></a>
				</h1>
				<button class="header__hamburger hamburger js-hamburger">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="header__sp-nav sp-nav js-drawer-menu">
					<a href="<?php echo $top; ?>" class="sp-nav__logo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/drawer-logo.jpg" alt="ドロワーロゴ" /></a>
					<div class="sp-nav__flex">
						<div class="sp-nav__content">
							<ul class="sp-nav__items">
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
								<li class="sp-nav__item"><a href="#">ライセンス取得</a></li>
								<li class="sp-nav__item"><a href="#">貸切体験ダイビング</a></li>
								<li class="sp-nav__item"><a href="#">ナイトダイビング</a></li>
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $about; ?>">私たちについて</a></li>
							</ul>
							<ul class="sp-nav__items">
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
								<li class="sp-nav__item"><a href="#">ライセンス講習</a></li>
								<li class="sp-nav__item"><a href="#">体験ダイビング</a></li>
								<li class="sp-nav__item"><a href="#">ファンダイビング</a></li>
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $blog; ?>">ブログ</a></li>
							</ul>
						</div>
						<div class="sp-nav__content">
							<ul class="sp-nav__items">
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $voice; ?>">お客様の声</a></li>
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $price; ?>">料金一覧</a></li>
								<li class="sp-nav__item"><a href="#">ライセンス講習</a></li>
								<li class="sp-nav__item"><a href="#">体験ダイビング</a></li>
								<li class="sp-nav__item"><a href="#">ファンダイビング</a></li>
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $faq; ?>">よくある質問</a></li>
							</ul>
							<ul class="sp-nav__items">
								<li class="sp-nav__item sp-nav__item--icon">
									<a href="<?php echo $privacy; ?>">プライバシー<br />ポリシー</a>
								</li>
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $termsofservise; ?>">利用規約</a></li>
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $contact; ?>">おい問わ合せ</a></li>
								<li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="header__pc-nav pc-nav">
					<ul class="pc-nav__items">
						<li class="pc-nav__item">
							<a href="<?php echo $campaign; ?>" class="pc-nav__link">
								<div class="pc-nav__content">
									<p class="pc-nav__title">Campaign</p>
									<p class="pc-nav__subtitle">キャンペーン</p>
								</div>
							</a>
							<a href="<?php echo $about; ?>" class="pc-nav__link">
								<div class="pc-nav__content">
									<p class="pc-nav__title">About us</p>
									<p class="pc-nav__subtitle">私たちについて</p>
								</div>
							</a>
							<a href="<?php echo $information; ?>" class="pc-nav__link">
								<div class="pc-nav__content">
									<p class="pc-nav__title">Information</p>
									<p class="pc-nav__subtitle">ダイビング情報</p>
								</div>
							</a>
							<a href="<?php echo $blog; ?>" class="pc-nav__link">
								<div class="pc-nav__content">
									<p class="pc-nav__title">Blog</p>
									<p class="pc-nav__subtitle">ブログ</p>
								</div>
							</a>
							<a href="<?php echo $voice; ?>" class="pc-nav__link">
								<div class="pc-nav__content">
									<p class="pc-nav__title">Voice</p>
									<p class="pc-nav__subtitle">お客様の声</p>
								</div>
							</a>
							<a href="<?php echo $price; ?>" class="pc-nav__link">
								<div class="pc-nav__content">
									<p class="pc-nav__title">Price</p>
									<p class="pc-nav__subtitle">料金一覧</p>
								</div>
							</a>
							<a href="<?php echo $faq; ?>" class="pc-nav__link">
								<div class="pc-nav__content">
									<p class="pc-nav__title">FAQ</p>
									<p class="pc-nav__subtitle">よくある質問</p>
								</div>
							</a>
							<a href="<?php echo $contact; ?>" class="pc-nav__link">
								<div class="pc-nav__content">
									<p class="pc-nav__title">Contact</p>
									<p class="pc-nav__subtitle">お問合せ</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</header>