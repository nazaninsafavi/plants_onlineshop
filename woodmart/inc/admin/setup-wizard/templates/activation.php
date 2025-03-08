<?php
/**
 * Activation template.
 *
 * @package woodmart
 */

?>

<div class="xts-wizard-content-inner">
	<?php WOODMART_Registry()->license->form(); ?>

	<p class="xts-wizard-note">
		<?php
		echo wp_kses(
			'<strong>توجه داشته باشید:</strong> قالب شما از قبل توسط تیم ایران وودمارت فعال شده است و شما نیازی به وارد کردن لایسنس نخواهید داشت.',
			woodmart_get_allowed_html()
		);
		?>
	</p>
</div>

<div class="xts-wizard-footer">
	<?php $this->get_prev_button( 'welcome' ); ?>

	<div>
		<?php if ( woodmart_is_license_activated() ) : ?>
			<?php $this->get_next_button( 'child-theme' ); ?>
		<?php else : ?>
			<?php $this->get_skip_button( 'child-theme' ); ?>
		<?php endif; ?>
	</div>
</div>