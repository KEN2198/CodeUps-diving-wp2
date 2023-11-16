<?php get_header(); ?>
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-faq-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-faq.jpg" alt="砂浜の写真" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">FAQ</h2>
					</div>
				</div>
			</div>
			<?php get_template_part('parts/breadcrumb') ?>
			
			<div class="page-faq faq-layout">
				<div class="page-faq__inner inner">
					<div class="page-faq__accordion accordion">
						<div class="accordion__contents">
						<?php
					$faq = SCF::get('faq');
					foreach ($faq as $fields) { 
						?>
										<div class="accordion__menu">
											<div class="accordion__question">
											<?php echo $fields['question']; ?>
											</div>
											<div class="accordion__answer">
											<?php echo $fields['answer']; ?>
											</div>
										</div>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
