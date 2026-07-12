jQuery(document).ready(function($) {
	$('.munwis-image-field').each(function() {
		var $field = $(this);
		var $uploadBtn = $field.find('.munwis-upload-image');
		var $removeBtn = $field.find('.munwis-remove-image');
		var $hiddenInput = $field.find('.munwis-image-id');
		var $previewImg = $field.find('.munwis-image-preview img');

		var mediaUploader;

		$uploadBtn.on('click', function(e) {
			e.preventDefault();
			if (mediaUploader) {
				mediaUploader.open();
				return;
			}
			mediaUploader = wp.media.frames.file_frame = wp.media({
				title: 'Choose Image',
				button: {
					text: 'Choose Image'
				},
				multiple: false
			});
			mediaUploader.on('select', function() {
				var attachment = mediaUploader.state().get('selection').first().toJSON();
				$hiddenInput.val(attachment.id);
				$previewImg.attr('src', attachment.url).show();
				$removeBtn.show();
			});
			mediaUploader.open();
		});

		$removeBtn.on('click', function(e) {
			e.preventDefault();
			$hiddenInput.val('');
			$previewImg.attr('src', '').hide();
			$removeBtn.hide();
		});
	});
});
