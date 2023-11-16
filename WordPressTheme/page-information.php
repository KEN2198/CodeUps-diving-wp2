<?php get_header(); ?>
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-information-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-information.jpg" alt="ダイバーと魚が泳いでいる様子" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">Information</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>
			<section class="page-information information-layout">
				<div class="page-information__inner inner">
					<div class="tab" id="tabs">
						<div class="tab__inner">
							<ul class="tab__items">
								<li id="tab1" class="tab__item is-active tab1"><a href="#panel1">ライセンス講習</a></li>
								<li id="tab2" class="tab__item tab2">
									<a href="#panel2">ファン<br class="u-mobile" />ダイビング</a>
								</li>
								<li id="tab3" class="tab__item tab3">
									<a href="#panel3">体験<br class="u-mobile" />ダイビング</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="page-information__card information-card js-open" id="panel1">
						<div class="information-card__body">
							<div class="information-card__wrap">
								<div class="information-card__item-left">
									<h3 class="information-card__title">ライセンス講習</h3>
									<p class="information-card__text">
										泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
									</p>
								</div>
								<div class="information-card__item-right">
									<div class="information-card__img">
										<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-information-license.jpg" alt="ダイバーが泳いでいる様子" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="page-information__card information-card" id="panel2">
						<div class="information-card__body">
							<div class="information-card__wrap">
								<div class="information-card__item-left">
									<h3 class="information-card__title">ファンダイビング</h3>
									<p class="information-card__text">
										ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
									</p>
								</div>
								<div class="information-card__item-right">
									<div class="information-card__img">
										<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-information-fundiving.jpg" alt="青い水中と魚たち" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="page-information__card information-card" id="panel3">
						<div class="information-card__body">
							<div class="information-card__wrap">
								<div class="information-card__item-left">
									<h3 class="information-card__title">体験ダイビング</h3>
									<p class="information-card__text">
										ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
									</p>
								</div>
								<div class="information-card__item-right">
									<div class="information-card__img">
										<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-information-diving.jpg" alt="２匹の魚たち" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
<?php get_footer(); ?>
