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
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-voice-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-voice.jpg" alt="ダイバーが泳いでいる様子" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">Voice</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>

			<div class="page-voice voice-layout">
				<div class="page-voice__inner inner">
					<div class="page-voice__category category">
						<div class="category__inner">
							<ul class="category__items">
								<li class="category__item"><a href="<?php echo $voice; ?>">ALL</a></li>
								<?php
            $terms = get_terms('voice_category');
            foreach ($terms as $term):
                $term_link = get_term_link($term);
                $term_name = esc_html($term->name);
                $active_class = (is_tax('voice_category', $term->slug)) ? 'active' : '';
            ?>
            <li class="category__item <?= $active_class ?>">
            <a href="<?= $term_link ?>"><?= $term_name ?></a>
          </li>
                    <?php endforeach; ?>
				</ul>
					</div>
					</div>
							<div class="page-voice__cards voice-cards">
								    <?php if(have_posts()): while(have_posts()): the_post(); ?>
								<div class="page-voice__card voice-cards__item voice-card">
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
										<p>
										<?php the_content(); ?>
										</p>
									</div>
								</div>
								<?php endwhile; endif; ?>
					</div>
					<div class="wp-pagenavi page-voice__wp-pagenavi">
					<?php wp_pagenavi(); ?>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
