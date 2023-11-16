<?php get_header(); ?>
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-aboutus-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-aboutus.jpg" alt="シーサーが座っている様子" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">About us</h2>
					</div>
				</div>
			</div>
      <?php get_template_part('parts/breadcrumb') ?>
      
			<section class="page-aboutus aboutus-layout">
				<div class="page-aboutus__inner inner">
					<div class="page-aboutus__item about">
						<div class="about__img-wrap">
							<div class="about__img-left u-desktop">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about2.jpg" alt="シーサーの写真" />
							</div>
							<div class="about__img-right about__img-right--aboutus">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-fish.jpg" alt="魚の写真" />
							</div>
						</div>
						<div class="about__content">
							<div class="about__title about__title--aboutus">
								<h2>Dive into<br />the Ocean</h2>
							</div>
							<div class="about__textblock about__textblock--aboutus">
								<p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="gallery page-gallery">
				<div class="gallery__inner inner">
					<div class="gallery__heading section-header">
						<p class="section-header__title">Gallery</p>
						<h2 class="section-header__subtitle">フォト</h2>
					</div>
					<div class="gallery__wrap">
						<div class="gallery__modal js-overlay"></div>
						<div class="gallery__items">
            <?php $property = SCF::get('gallery'); foreach ( $property as $fields ) : ?>
                  <a class="gallery__item js-photo">
                  <img src="
                <?php
                  $gaikan_id = SCF::get('gallery_image1');
                  echo wp_get_attachment_url($gaikan_id[0], 'midium');
                ?>
              " alt="" /></a>
              <?php endforeach; ?>
              <?php $property = SCF::get('gallery'); foreach ( $property as $fields ) : ?>
                  <a class="gallery__item js-photo">
                  <img src="
                <?php
                  $gaikan_id = SCF::get('gallery_image2');
                  echo wp_get_attachment_url($gaikan_id[0], 'midium');
                ?>
              " alt="" /></a>
              <?php endforeach; ?>
              <?php $property = SCF::get('gallery'); foreach ( $property as $fields ) : ?>
                  <a class="gallery__item js-photo">
                  <img src="
                <?php
                  $gaikan_id = SCF::get('gallery_image3');
                  echo wp_get_attachment_url($gaikan_id[0], 'midium');
                ?>
              " alt="" /></a>
              <?php endforeach; ?>
              <?php $property = SCF::get('gallery'); foreach ( $property as $fields ) : ?>
                  <a class="gallery__item js-photo">
                  <img src="
                <?php
                  $gaikan_id = SCF::get('gallery_image4');
                  echo wp_get_attachment_url($gaikan_id[0], 'midium');
                ?>
              " alt="" /></a>
              <?php endforeach; ?>
              <?php $property = SCF::get('gallery'); foreach ( $property as $fields ) : ?>
                  <a class="gallery__item js-photo">
                  <img src="
                <?php
                  $gaikan_id = SCF::get('gallery_image5');
                  echo wp_get_attachment_url($gaikan_id[0], 'midium');
                ?>
              " alt="" /></a>
              <?php endforeach; ?>
              <?php $property = SCF::get('gallery'); foreach ( $property as $fields ) : ?>
                  <a class="gallery__item js-photo">
                  <img src="
                <?php
                  $gaikan_id = SCF::get('gallery_image6');
                  echo wp_get_attachment_url($gaikan_id[0], 'midium');
                ?>
              " alt="" /></a>
              <?php endforeach; ?>
              <?php
                    $property = SCF::get('gallery');
                    foreach ($property as $fields) :
                        $gaikan_id = SCF::get('gallery_image7');
                        if (!empty($gaikan_id[0])) { // 配列の最初の要素が空でない場合に画像を表示
                            echo '<a class="gallery__item js-photo">';
                            echo '<img src="' . wp_get_attachment_url($gaikan_id[0], 'medium') . '" alt="" />';
                            echo '</a>';
                        }
                    endforeach;
                    ?>
                    <?php
                    $property = SCF::get('gallery');
                    foreach ($property as $fields) :
                        $gaikan_id = SCF::get('gallery_image8');
                        if (!empty($gaikan_id[0])) { // 配列の最初の要素が空でない場合に画像を表示
                            echo '<a class="gallery__item js-photo">';
                            echo '<img src="' . wp_get_attachment_url($gaikan_id[0], 'medium') . '" alt="" />';
                            echo '</a>';
                        }
                    endforeach;
                    ?>

						</div>
					</div>
				</div>
			</section>

<?php get_footer(); ?>
