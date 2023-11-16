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
		<main>
			<div class="mv">
				<div class="mv__inner">
					<div class="swiper mv__swiper">
						<div class="swiper-wrapper mv__swiper-wrapper">
							<div class="swiper-slide mv__swiper-slide">
								<picture>
									<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/sp-mv-diving.jpg" media="(max-width: 767px)" />
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/pc-mv1-1.jpg" alt="海底をカメが泳いでいる様子" />
								</picture>
							</div>

							<div class="swiper-slide mv__swiper-slide">
								<picture>
									<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/sp-mv2.jpg" media="(max-width: 767px)" />
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/pc-mv2.jpg" alt="2人のダイバーが海の中で泳いでいるカメを撮影している様子" />
								</picture>
							</div>

							<div class="swiper-slide mv__swiper-slide">
								<picture>
									<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/sp-mv3.jpg" media="(max-width: 767px)" />
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/pc-mv3.jpg" alt="ボートが浮かぶ海の様子" />
								</picture>
							</div>

							<div class="swiper-slide mv__swiper-slide">
								<picture>
									<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/sp-mv4.jpg" media="(max-width: 767px)" />
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/pc-mv4.jpg" alt="快晴の青い空と綺麗な海の様子" />
								</picture>
							</div>
						</div>
					</div>
					<div class="mv__content">
						<h2 class="mv__title">DIVING</h2>
						<div class="mv__text">into the ocean</div>
					</div>
				</div>
			</div>
			<?php
				$args = array('post_type' => 'campaign',
				'posts_per_page' => -1); 
				$the_query = new WP_Query($args); 
			?>
			<section id="Campaign" class="campaign top-campaign">
				<div class="campaign__inner inner">
					<div class="campaign__heading section-header">
						<p class="section-header__title">Campaign</p>
						<h2 class="section-header__subtitle">キャンペーン</h2>
					</div>
					<div class="swiper campaign__swiper js-campaign-swiper">
						<ul class="swiper-wrapper campaign__cards">
						<?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
							<li class="swiper-slide campaign__slide">
								<a class="campaign-card">
									<div class="campaign-card__img">
									<?php if ( get_the_post_thumbnail() ) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
									</div>
									<div class="campaign-card__body">
								
										<?php
                  $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                  if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                      $term = array_shift($terms); // 最初のタームを取得
                      $cat_name = $term->name; // ターム名を取得
                      echo '<span class="campaign-card__category">' . $cat_name . '</span>'; // ターム名を表示
                  }
                  ?>
				
										<h3 class="campaign-card__title"><?php the_title(); ?></h3>
										<p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
										<div class="campaign-card__price">
											<p class="campaign-card__price-black">
											¥<?php the_field('campaign_price1'); ?>
												<span></span>
											</p>
											<p class="campaign-card__price-accent">¥<?php the_field('campaign_price2'); ?></p>
										</div>
									</div>
								</a>
							</li>
							<?php endwhile; wp_reset_postdata(); endif; ?>
						</ul>
					</div>
					<div class="swiper-button-next campaign__card-next"></div>
					<div class="swiper-button-prev campaign__card-prev"></div>

					<div class="campaign__button">
						<a href="<?php echo $campaign; ?>" class="button"><span>View more</span></a>
					</div>
				</div>
			</section>
			<section id="About" class="about top-about">
				<div class="about__inner inner">
					<div class="about__heading section-header">
						<p class="section-header__title">About us</p>
						<h2 class="section-header__subtitle">私たちについて</h2>
					</div>
					<div class="about__item">
						<div class="about__img-wrap">
							<div class="about__img-left">

								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about2.jpg" alt="シーサーの写真" />
							</div>
							<div class="about__img-right">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-fish.jpg" alt="魚の写真" />
							</div>
						</div>
						<div class="about__content">
							<div class="about__title">
								<h2>Dive into<br />the Ocean</h2>
							</div>
							<div class="about__textblock">
								<p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
								<div class="about__button">
									<a href="<?php echo $about; ?>" class="button"><span>View more</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="Information" class="information top-information">
				<div class="information__inner inner">
					<div class="information__heading section-header">
						<p class="section-header__title">Information</p>
						<h2 class="section-header__subtitle">ダイビング情報</h2>
					</div>
					<div class="information__item">
						<div class="information__img slide-animation js-slide-animation">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/information.jpg" alt="魚の写真" />
						</div>

						<div class="information__info">
							<h3 class="information__title">ライセンス講習</h3>
							<p>当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
							<div class="information__button">
								<a href="<?php echo $information; ?>" class="button"><span>View more</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			  <?php
    $args = array('post_type' => 'post',
    'posts_per_page' => 3);  // カスタム投稿タイプ Products
    $the_query = new WP_Query($args); 
  ?>
			<section id="Blog" class="blog top-blog">
				<div class="blog__inner inner">
					<div class="blog__heading section-header">
						<p class="section-header__title section-header__title--blog">Blog</p>
						<h2 class="section-header__subtitle section-header__subtitle--blog">ブログ</h2>
					</div>
					<div class="blog__cards blog-cards">
						  <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
							<div class="blog-card__img">
							<?php if ( get_the_post_thumbnail() ) : ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
            <?php endif; ?>

							</div>
							<div class="blog-card__body">
								<div class="blog-card__date">
									<time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
									<h3 class="blog-card__title"><?php the_title(); ?></h3>
									<div class="blog-card__textblock">
									<?php the_excerpt(); ?>
									</div>
								</div>
							</div>
						</a>
						  <?php endwhile; wp_reset_postdata(); endif; ?>
					</div>
					<div class="blog__button">
						<a href="<?php echo $blog; ?>" class="button"><span>View more</span></a>
					</div>
				</div>
			</section>
			  <?php
    $args = array('post_type' => 'voice',
    'posts_per_page' => 2); 
    $the_query = new WP_Query($args); 
  ?>
			<section id="Voice" class="voice top-voice">
				<div class="voice__inner inner">
					<div class="voice__heading section-header">
						<p class="section-header__title">Voice</p>
						<h2 class="section-header__subtitle">お客様の声</h2>
					</div>
					<div class="voice__cards voice-cards">
						  <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
						<div class="voice-cards__item voice-card">
							<div class="voice-card__item">
								<div class="voice-card__info">
									<p class="voice-card__gender"><?php the_field('voice_1'); ?></p>
									<?php
                  $terms = get_the_terms(get_the_ID(), 'voice_category'); // カスタムタクソノミーのタームを取得
                  if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                  $term = array_shift($terms); // 最初のタームを取得
                  $cat_name = $term->name; // ターム名を取得
                  echo '<span class="voice-card__category">' . $cat_name . '</span>'; // ターム名を表示
                  }
                  ?>
								
									<h3 class="voice-card__title"><?php the_title(); ?></h3>
								</div>

								<div class="voice-card__img slide-animation js-slide-animation">
								<?php if ( get_the_post_thumbnail() ) : ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
              <?php endif; ?>
								</div>
							</div>
							<div class="voice-card__body">
							<?php the_excerpt(); ?>
							</div>
						</div>
						<?php endwhile; wp_reset_postdata(); endif; ?>
					</div>	
						<div class="voice__button">
						<a href="<?php echo $voice; ?>" class="button"><span>View more</span></a>
					</div>
				</div>
			</section>
			<section id="Price" class="price top-price">
				<div class="price__inner inner">
					<div class="price__heading section-header">
						<p class="section-header__title">Price</p>
						<h2 class="section-header__subtitle">料金一覧</h2>
					</div>
					<div class="price__item">
						<div class="price__img slide-animation js-slide-animation">
							<picture>
								<source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/priceimg.jpg" />
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/price.jpg" alt="海中の写真" />
							</picture>
						</div>
						<?php
// カスタムフィールド 'price' からデータを取得
$price_data = SCF::get('price');

if (!empty($price_data)) {
    echo '<ul class="price__lists">';

    foreach ($price_data as $fields) {
        // タイトルを表示
        echo '<li class="price__list">';
        echo '<h3 class="price__list-title">' . $fields['price_diving'] . '</h3>';
        echo '<dl class="price__list-item">';

        // カスタムフィールドからコース名と価格を動的に表示
        for ($i = 1; $i <= 4; $i++) { // 数字はカスタムフィールドの数に合わせて調整
            $course_key = 'price_course' . $i;
            $price_key = 'price_price' . $i;

            if (!empty($fields[$course_key]) && !empty($fields[$price_key])) {
                echo '<dt>' . $fields[$course_key] . '</dt>';
                echo '<dd>' . $fields[$price_key] . '</dd>';
            }
        }

        echo '</dl>';
        echo '</li>';
    }

    echo '</ul>';
}
?>

						<!-- <ul class="price__lists">
							<li class="price__list">
								<h3 class="price__list-title">ライセンス講習</h3>
								<dl class="price__list-item">
									<dt>オープンウォーターダイバーコース</dt>
									<dd>¥50,000</dd>
									<dt>アドバンスドオープンウォーターコース</dt>
									<dd>¥60,000</dd>
									<dt>レスキュー＋EFRコース</dt>
									<dd>¥70,000</dd>
								</dl>
							</li>
							<li class="price__list">
								<h3 class="price__list-title">体験ダイビング</h3>
								<dl class="price__list-item">
									<dt>ビーチ体験ダイビング(半日)</dt>
									<dd>¥7,000</dd>
									<dt>ビーチ体験ダイビング(1日)</dt>
									<dd>¥14,000</dd>
									<dt>ボート体験ダイビング(半日)</dt>
									<dd>¥10,000</dd>
									<dt>ボート体験ダイビング(1日)</dt>
									<dd>¥18,000</dd>
								</dl>
							</li>
							<li class="price__list">
								<h3 class="price__list-title">ファンダイビング</h3>
								<dl class="price__list-item">
									<dt>ビーチダイビング(2ダイブ)</dt>
									<dd>¥14,000</dd>
									<dt>ボートダイビング(2ダイブ)</dt>
									<dd>¥18,000</dd>
									<dt>スペシャルダイビング(2ダイブ)</dt>
									<dd>¥24,000</dd>
									<dt>ナイトダイビング(1ダイブ)</dt>
									<dd>¥10,000</dd>
								</dl>
							</li>
							<li class="price__list">
								<h3 class="price__list-title">スペシャルダイビング</h3>
								<dl class="price__list-item">
									<dt>貸切ダイビング(2ダイブ)</dt>
									<dd>¥24,000</dd>
									<dt>1日ダイビング(3ダイブ)</dt>
									<dd>¥32,000</dd>
								</dl>
							</li>
						</ul> -->
					</div>
					<div class="price__button">
						<a href="<?php echo $price; ?>" class="button"><span>View more</span></a>
					</div>
				</div>
			</section>
			<?php get_footer(); ?>

