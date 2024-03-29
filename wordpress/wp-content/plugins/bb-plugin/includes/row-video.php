<?php // @codingStandardsIgnoreFile ?>
<?php if ( 'wordpress' == $row->settings->bg_video_source ) { ?>
<div class="fl-bg-video"
data-width="<?php if ( isset( $vid_data['mp4'] ) ) { echo $vid_data['mp4']->width;
} else { echo $vid_data['webm']->width;
} ?>"
data-height="<?php if ( isset( $vid_data['mp4'] ) ) { echo $vid_data['mp4']->height;
} else { echo $vid_data['webm']->height;
} ?>"
data-fallback="<?php if ( isset( $vid_data['mp4'] ) ) { echo $vid_data['mp4']->fallback;
} else { echo $vid_data['webm']->fallback;
} ?>"
<?php if ( isset( $vid_data['mp4'] ) ) : ?>
data-mp4="<?php echo $vid_data['mp4']->url; ?>"
data-mp4-type="video/<?php echo $vid_data['mp4']->extension; ?>"
<?php endif; ?>
<?php if ( isset( $vid_data['webm'] ) ) : ?>
data-webm="<?php echo $vid_data['webm']->url; ?>"
data-webm-type="video/<?php echo $vid_data['webm']->extension; ?>"
<?php endif; ?>></div>
<?php } ?>

<?php if ( 'video_url' == $row->settings->bg_video_source ) { ?>
<div class="fl-bg-video"
data-fallback="<?php if ( isset( $row->settings->bg_video_fallback_src ) ) { echo $row->settings->bg_video_fallback_src;} ?>"
<?php if ( isset( $row->settings->bg_video_url_mp4 ) ) : ?>
data-mp4="<?php echo $row->settings->bg_video_url_mp4; ?>"
data-mp4-type="video/mp4"
<?php endif; ?>
<?php if ( isset( $row->settings->bg_video_url_webm ) ) : ?>
data-webm="<?php echo $row->settings->bg_video_url_webm; ?>"
data-webm-type="video/webm"
<?php endif; ?>></div>
<?php } ?>

<?php if ( 'video_service' == $row->settings->bg_video_source ) {
	$video_data = FLBuilderUtils::get_video_data( do_shortcode( $row->settings->bg_video_service_url ) ); ?>
<div class="fl-bg-video"
data-fallback="<?php if ( isset( $row->settings->bg_video_fallback_src ) ) { echo $row->settings->bg_video_fallback_src;} ?>"
<?php if ( isset( $row->settings->bg_video_service_url ) ) : ?>
data-<?php echo $video_data['type']; ?>="<?php echo do_shortcode( $row->settings->bg_video_service_url );  ?>"
data-video-id="<?php echo $video_data['video_id']; ?>"
data-enable-audio="<?php echo $row->settings->bg_video_audio; ?>"
data-video-mobile="<?php if ( isset( $row->settings->bg_video_mobile ) ) { echo $row->settings->bg_video_mobile;} ?>"
<?php if ( isset( $video_data['params'] ) ) : ?>
	<?php foreach ( $video_data['params'] as $key => $val ) : ?>
		data-<?php echo $key . '="' . $val . '"'; ?>
	<?php endforeach; ?>
<?php endif; ?>
<?php endif; ?>>
<div class="fl-bg-video-player"></div>
<?php if ( $row->settings->bg_video_audio ) : ?>
<div class="fl-bg-video-audio"><span>
	<i class="fas fl-audio-control fa-volume-off"></i>
	<i class="fas fa-times"></i>
</span></div>
<?php endif; ?>
</div>
<?php } ?>
