jQuery(document).ready(function($) {
	
	var formfield;
	
	$('.upload_image_button').click(function() {
		formfield = $(this).prev().attr('name');
		tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		return false;
	});
	
	window.original_send_to_editor = window.send_to_editor;
	window.send_to_editor = function(html) {
		
		if (formfield) {
			fileurl = $(html).attr('href');
			/*if (fileurl != null) {
				fileurl = $(html).attr('src');
			}*/
			
			$('#' + formfield).val(fileurl);
			tb_remove();
		} else {
			window.original_send_to_editor(html);
		}
	}

});