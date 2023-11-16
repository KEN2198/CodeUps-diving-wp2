<?php get_header(); ?>
<div class="sub-mv">
				<div class="sub-mv__inner">
					<div class="sub-mv__img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-price-sp.jpg" media="(max-width: 767px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-price.jpg" alt="ダイバーが潜っている様子" />
						</picture>
					</div>
					<div class="sub-mv__content">
						<h2 class="sub-mv__title">Price</h2>
					</div>
				</div>
			</div
            <?php get_template_part('parts/breadcrumb') ?>

			<div class="page-price price-layout">
				<div class="page-price__inner inner">
        <div class="page-price__contents">  
    <?php
    $price = SCF::get('price');
    foreach ($price as $fields) {
        if (
            !empty($fields['price_diving']) &&
            (!empty($fields['price_course1']) || !empty($fields['price_price1'])) ||
            (!empty($fields['price_course2']) || !empty($fields['price_price2'])) ||
            (!empty($fields['price_course3']) || !empty($fields['price_price3'])) ||
            (!empty($fields['price_course4']) || !empty($fields['price_price4']))
        ) {
    ?>
        <div class="page-price__table price-table">
            <div class="price-table__head">
                <h2 class="price-table__title"><?php echo $fields['price_diving']; ?></h2>
                <div class="price-table__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-icon.png" alt="クジラのアイコン" />
                </div>
            </div>
            <dl class="price-table__block">
                <?php if (!empty($fields['price_course1']) || !empty($fields['price_price1'])) { ?>
                <div class="price-table__items">
                    <?php if (!empty($fields['price_course1'])) { ?>
                        <dt class="price-table__course"><?php echo $fields['price_course1']; ?></dt>
                    <?php } ?>
                    <?php if (!empty($fields['price_price1'])) { ?>
                        <dd class="price-table__price"><?php echo $fields['price_price1']; ?></dd>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php if (!empty($fields['price_course2']) || !empty($fields['price_price2'])) { ?>
                <div class="price-table__items">
                    <?php if (!empty($fields['price_course2'])) { ?>
                        <dt class="price-table__course"><?php echo $fields['price_course2']; ?></dt>
                    <?php } ?>
                    <?php if (!empty($fields['price_price2'])) { ?>
                        <dd class="price-table__price"><?php echo $fields['price_price2']; ?></dd>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php if (!empty($fields['price_course3']) || !empty($fields['price_price3'])) { ?>
                <div class="price-table__items">
                    <?php if (!empty($fields['price_course3'])) { ?>
                        <dt class="price-table__course price-table__course--padding"><?php echo $fields['price_course3']; ?></dt>
                    <?php } ?>
                    <?php if (!empty($fields['price_price3'])) { ?>
                        <dd class="price-table__price"><?php echo $fields['price_price3']; ?></dd>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php if (!empty($fields['price_course4']) || !empty($fields['price_price4'])) { ?>
                <div class="price-table__items">
                    <?php if (!empty($fields['price_course4'])) { ?>
                        <dt class="price-table__course price-table__course--padding"><?php echo $fields['price_course4']; ?></dt>
                    <?php } ?>
                    <?php if (!empty($fields['price_price4'])) { ?>
                        <dd class="price-table__price"><?php echo $fields['price_price4']; ?></dd>
                    <?php } ?>
                </div>
                <?php } ?>
            </dl>
        </div>
    <?php } } ?>
</div>

				</div>
			</div>
<?php get_footer(); ?>
