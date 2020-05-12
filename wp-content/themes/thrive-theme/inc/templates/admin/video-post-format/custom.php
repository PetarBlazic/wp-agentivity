<?php
/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package thrive-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

$custom_options = thrive_video_post_format( Thrive_Video_Post_Format_Main::CUSTOM )->get_video_options_meta();
$url_options    = $custom_options['url'];
$prefix         = Thrive_Video_Post_Format_Main::VIDEO_META_PREFIX . '_' . Thrive_Video_Post_Format_Main::CUSTOM . '_';

?>

<div class="thrive-video-container" data-type="custom" style="display:none">
	<div class="thrive-row">
		<div class="thrive-cell">
			<label for="<?php echo $prefix . 'url'; ?>"><?php echo $url_options['label']; ?></label>
		</div>

		<div class="thrive-cell">
			<textarea id="<?php echo $prefix . 'url'; ?>" name="<?php echo $prefix . 'url'; ?>" class="thrive-url-input"
					  placeholder="<?php echo $url_options['placeholder']; ?>"><?php echo $url_options['value']; ?></textarea>
			<div class="thrive-url-validate"></div>
			<button id="thrive-upload-custom-video">
				<?php echo __( 'Upload Video', THEME_DOMAIN ); ?>
			</button>
		</div>
	</div>

	<div class="thrive-row">
		<div class="thrive-cell">
			<?php echo __( 'Options', THEME_DOMAIN ); ?>
		</div>

		<div class="thrive-cell">
			<?php foreach ( $custom_options as $key => $option ) : ?>

				<?php if ( $option['type'] === 'checkbox' ) : ?>
					<input type="checkbox" name="<?php echo $prefix . $key; ?>" id="<?php echo $prefix . $key; ?>"
						   value="1" <?php checked( $option['value'] ); ?> class="<?php echo empty( $option['class'] ) ? '' : $option['class']; ?>"/>
					<label for="<?php echo $prefix . $key; ?>"><?php echo $option['label']; ?>
						<?php if ( ! empty( $option['notice'] ) ) : ?>
							<span class="thrive-notice" style="display:none"> - <?php echo $option['notice']; ?> </span>
						<?php endif; ?>
					</label>
					<br/>
				<?php endif; ?>

			<?php endforeach; ?>
		</div>
	</div>
</div>
