<?php get_header(); ?>
<?php
$top = esc_url( home_url( '/' ) );
?>
<?php get_header(); ?>
<div class="page-404">
				<div class="page-404__inner inner">
			<?php get_template_part('parts/breadcrumb') ?>
					<div class="page-404__contents">
						<p class="page-404__title">404</p>
						<div class="page-404__text-wrap">
							<p class="page-404__text">申し訳ありません。<br />お探しのページが見つかりません。</p>
						</div>
						<div class="page-404__button">
							<a href="<?php echo $top; ?>" class="button button--white"><span>Page TOP</span></a>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
