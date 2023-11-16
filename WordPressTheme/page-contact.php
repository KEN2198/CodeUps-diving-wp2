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
			<div class="page-contact contact-layout">
				<div class="page-contact__inner inner">
					<div class="page-contact__items">
          <?php echo do_shortcode('[contact-form-7 id="534cef2" title="お問い合わせ"]'); ?>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
