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
<aside class="page-blog__side-contents sidebar">
							<div class="sidebar__inner">
								<div class="sidebar__blog-list">
									<div class="sidebar__blog-list-name blog-list-name">人気記事</div>
                  <?php
      setPostViews(get_the_ID());
      $args = array(
          'meta_key' => 'post_views_count',
          'orderby' => 'meta_value_num',
          'posts_per_page' => 3,
          'order' => 'DESC',
      );

$custom_query = new WP_Query($args);


if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
?>
									<ul class="sidebar__popular-items">
										<li class="sidebar__popular-item">
											<a href="<?php the_permalink(); ?>" class="sidebar__popular-item-card">
												<div class="sidebar__popular-item-body">
													<div class="sidebar__popular-item-img">
                          <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                          <?php else : ?>
                          <img src="<?php echo get_theme_file_uri('dist/assets/images/common/noimage.jpg'); ?>" alt="noimage">
                          <?php endif; ?>
													</div>
													<div class="sidebar__popular-item-date">
														<time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d');?></time>
														<p class="sidebar__popular-item-text"><?php the_title(); ?></p>
													</div>
												</div>
											</a>
										</li>
									</ul>
                  <?php endwhile; wp_reset_postdata(); endif; ?>
								</div>
                  <?php
    $args = array('post_type' => 'voice',
    'posts_per_page' => 1); 
    $the_query = new WP_Query($args); 
    ?>
								<div class="sidebar__blog-list">
									<div class="sidebar__blog-list-name blog-list-name">口コミ</div>
                   <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
									<ul class="sidebar__review-items">
										<li class="sidebar__review-item">
											<div class="sidebar__review-item-card">
												<div class="sidebar__review-item__img">
                        <?php if ( get_the_post_thumbnail() ) : ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
          <?php else: ?>
          <img src="<?php echo get_theme_file_uri(); ?>distdist/assets/images/common/noimage.jpg" alt="no image">
          <?php endif; ?>
												</div>
												<div class="sidebar__review-item__info">
													<p class="sidebar__review-item__gender"><?php the_field('voice_1'); ?></p>

													<h3 class="sidebar__review-item__title"><?php the_title(); ?></h3>
												</div>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
												<div class="sidebar__button">
													<a href="<?php echo $voice; ?>" class="button"><span>View more</span></a>
												</div>
											</div>
										</li>
									</ul>
								</div>
                <?php
    $args = array('post_type' => 'campaign',
      'posts_per_page' => 2); 
      $the_query = new WP_Query($args); 
    ?>
								<div class="sidebar__blog-list">
									<div class="sidebar__blog-list-name blog-list-name">キャンペーン</div>

									<div class="sidebar__campaign-card">
                  <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
										<a class="campaign-card">
											<div class="campaign-card__img campaign-card__img--sidebar-campaign">										
                      <?php if ( get_the_post_thumbnail() ) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        <?php else: ?>
                        <img src="<?php echo get_theme_file_uri(); ?>dist/assets/images/common/noimage.jpg" alt="noimage">
                        <?php endif; ?>
                        </div>
											<div class="campaign-card__body campaign-card__body--sidebar-campaign">
												<h3 class="campaign-card__title campaign-card__title--sidebar-campaign"><?php the_title(); ?></h3>
												<p class="campaign-card__subtitle campaign-card__subtitle--sidebar-campaign">全部コミコミ(お一人様)</p>
												<div class="campaign-card__price campaign-card__price--sidebar-campaign">
													<p class="campaign-card__price-black campaign-card__price-black--sidebar-campaign">
                          &yen;<?php the_field('campaign_price1'); ?>
														<span></span>
													</p>
													<p class="campaign-card__price-accent campaign-card__price-accent--sidebar-campaign">&yen;<?php the_field('campaign_price2'); ?></p>
												</div>
											</div>
										</a>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
									</div>
									<div class="sidebar__button">
										<a href="<?php echo $campaign; ?>" class="button"><span>View more</span></a>
									</div>
								</div>
                <div class="sidebar__blog-list">
    <div class="sidebar__blog-list-name blog-list-name">アーカイブ</div>
    <ul class="sidebar__archive">
        <?php echo custom_get_archives(); ?>
    </ul>
</div>
						</aside>