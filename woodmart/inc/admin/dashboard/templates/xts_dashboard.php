<div class="xts-welcome-page">

	<?php if ( woodmart_get_opt( 'white_label' ) ) : ?>
		<div class="xts-box xts-white-label-box xts-theme-style">
			<div class="xts-box-content">
				<h3>
					<?php if ( woodmart_get_opt( 'white_label_dashboard_title' ) ) : ?>
						<?php echo esc_html( woodmart_get_opt( 'white_label_dashboard_title' ) ); ?>
					<?php else : ?>
						<?php esc_html_e( 'به قالب ایران وودمارت خوش آمدید', 'woodmart' ); ?>
					<?php endif; ?>
				</h3>
				<div class="xts-about-text">
					<?php if ( woodmart_get_opt( 'white_label_dashboard_text' ) ) : ?>
						<?php echo wp_kses( woodmart_get_opt( 'white_label_dashboard_text' ), true ); ?>
					<?php else : ?>
						<?php esc_html_e( 'با تشکر از شما بابت انتخاب تیم ایران وودمارت - حالا شما میتوانید سایت تان را طراحی و توسعه دهید، بی نهایت در دستان شماست.', 'woodmart' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php else : ?>
		<div class="xts-box xts-welcome-box xts-theme-style xts-color-scheme-light">
			<div class="xts-box-content">
				<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/banner.png' ); ?>" alt="banner">

				<h3>
					<?php esc_html_e( 'به قالب ایران وودمارت خوش آمدید', 'woodmart' ); ?>
				</h3>

				<p>
					<?php esc_html_e( 'با تشکر از شما بابت انتخاب تیم ایران وودمارت - حالا شما میتوانید سایت تان را طراحی و توسعه دهید، بی نهایت در دستان شماست.', 'woodmart' ); ?>
				</p>

				<?php if ( woodmart_get_opt( 'white_label_changelog_tab' ) ) : ?>
					<a href="<?php echo esc_url( admin_url( 'admin.php?page=xts_changelog' ) ); ?>" class="xts-btn">
						<?php esc_html_e( 'تغییرات قالب' ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<div class="xts-row xts-welcome-row xts-sp-20 xts-theme-style">
			<div class="xts-col-12 xts-col-xl-6">
				<div class="xts-box xts-info-boxes">
					<div class="xts-box-content">
						<h4>
							<?php esc_html_e( 'نیاز به کمک دارید؟' ); ?>
						</h4>

						<p>
							<?php esc_html_e( 'از راه های زیر میتوانید کمک بگیرید.' ); ?>
						</p>

						<div class="xts-row">
							<div class="xts-col">
								<div class="xts-info-box-img">
									<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/docs.jpg' ); ?>" alt="documentation banner">
								</div>
								<a href="https://iran-woodmart.ir/woodmart-theme-tutorials/" class="xts-bordered-btn xts-color-default" target="_blank">
									<?php esc_html_e( 'مستندات' ); ?>
								</a>
							</div>

							<div class="xts-col">
								<div class="xts-info-box-img">
									<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/video.jpg' ); ?>" alt="video banner">
								</div>
								<a href="https://iran-woodmart.ir/product/woodmart-theme-website-design-tutorials/" class="xts-bordered-btn xts-color-default" target="_blank">
									<?php esc_html_e( 'آموزش حرفه ای' ); ?>
								</a>
							</div>

							<div class="xts-col">
								<div class="xts-info-box-img">
									<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/forum.jpg' ); ?>" alt="forum banner">
								</div>
								<a href="https://iran-woodmart.ir/contact-us/" class="xts-bordered-btn xts-color-default" target="_blank">
									<?php esc_html_e( 'پشتیبانی و تماس' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="xts-col-12 xts-col-xl-6">
				<div class="xts-box xts-info-boxes xts-align-center">
					<div class="xts-box-content">
						<h4>
							<?php esc_html_e( 'از خدمات ما راضی هستید؟' ); ?>
						</h4>

						<p>
							<?php esc_html_e( 'تجربیات تان را از خدمات و پشتیبانی ایران وودمارت با کاربران دیگر درمیان بگذارید.' ); ?>
						</p>

						<div class="xts-row">
							<div class="xts-col">
								<div class="xts-info-box-img">
									<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/vote.jpg' ); ?>" alt="vote banner">
								</div>
								<a href="https://iran-woodmart.ir/customer-reviews/" class="xts-bordered-btn xts-color-default" target="_blank">
									<?php esc_html_e( 'نظرسنجی ایران وودمارت' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

</div>