<?php
	$theme_options = get_option('option_tree');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php
		$site_description = '';
		$site_keywords = '';
		$site_author = '';
		
		if (function_exists('get_option_tree')) {
			$site_description = get_option_tree('site_description');
			$site_keywords = get_option_tree('site_keywords');
			$site_author = get_option_tree('site_author');
		}
	?>
	<meta name="description" content="<?php echo $site_description; ?>">
    <meta name="keywords" content="<?php echo $site_keywords; ?>">
	<meta name="author" content="<?php echo $site_author; ?>">
	
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
    
	<?php
    	wp_head();
    ?>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
    <?php
		if (function_exists('get_option_tree')) {
			$biopic_fav_icon = get_option_tree('fav_icon');
			if ($biopic_fav_icon != '') {
	?>
	<link rel="shortcut icon" href="<?php echo $biopic_fav_icon; ?>">
    <?php
			}
			
			$biopic_apple_touch_icon = get_option_tree('apple_touch_icon');
			if ($biopic_apple_touch_icon != '') {
			$biopic_apple_touch_icon_72 = get_option_tree('apple_touch_icon_72');
			$biopic_apple_touch_icon_114 = get_option_tree('apple_touch_icon_114');
	?>
	<link rel="apple-touch-icon" href="<?php echo $biopic_apple_touch_icon; ?>">
    <?php
			}
			
			$biopic_apple_touch_icon_72 = get_option_tree('apple_touch_icon_72');
			if ($biopic_apple_touch_icon_72 != '') {
			
			$biopic_apple_touch_icon_114 = get_option_tree('apple_touch_icon_114');
	?>
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $biopic_apple_touch_icon_72; ?>">
    <?php
			}
			
			$biopic_apple_touch_icon_114 = get_option_tree('biopic_apple_touch_icon_114');
			if ($biopic_apple_touch_icon_114 != '') {
	?>
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $biopic_apple_touch_icon_114; ?>">
	<?php
			}
		}
	?>
    
    <script type="text/javascript"> 
		
		jQuery(document).ready(function($) {
			/* === Handles palceholder values for input and textareas in older browsers === */
			$('input, textarea').placeholder();
			
			/* === Pretty Photo === */
			$("a[rel^='prettyPhoto']").prettyPhoto();
			
			/* === Fit Videos === */
			$(".scale-video").fitVids();
			
			/* === Portfolio Filter Menu === */
			$('ul.filter li a').click(function(e) {
				e.preventDefault();
				
				$('ul.filter li.active').removeClass('active');
				$(this).parent().addClass('active');
				
				var filterVal = $(this).text().toLowerCase().replace(' ','-');
				
				if(filterVal == 'all') {
					$('.work').removeClass('item-hidden');
				}
				else {
					$('.work').each(function(index, element) {
						if(!$(this).hasClass(filterVal)) {
							$(this).addClass('item-hidden');
						}
						else {
							$(this).removeClass('item-hidden');
						}
					});
				}
			});
			
			/* === Accordion === */
			var accordionTabs = $('.accordion > .atab');
			$('.accordion > .atitle > a').click(function(e) {
				e.preventDefault();
				
				currenttab = $(this);
				targetTab =  currenttab.parent().next();
				
				// if same tab clicked then close it
				if (currenttab.parent().hasClass('active')) {
					accordionTabs.slideUp(300, 'easeOutExpo');
					currenttab.parent().parent().find('.atitle').removeClass('active');
				}
				else if(!targetTab.hasClass('active'))	{
					accordionTabs.slideUp(300, 'easeOutExpo');
					targetTab.slideDown(300, 'easeOutExpo');
					currenttab.parent().parent().find('.atitle').removeClass('active');
					currenttab.parent().addClass('active');
				}
			});
			
			
			/* === Toggle === */
			$(".toggle > .ttitle > a").click(function(e) {
				e.preventDefault();
				
				if($(this).parent().hasClass('active'))	{
					$(this).parent().removeClass("active").closest('.toggle').find('.ttab').slideUp(300, 'easeOutExpo');
				}
				else {
					$(this).parent().addClass("active").closest('.toggle').find('.ttab').slideDown(300, 'easeOutExpo');
				}
			});
			
			/* === Closes alert boxes e.g. warning, success etc. === */
			$('.alert-box .close-btn').click(function(e) {
				e.preventDefault();
				$(this).parent().slideUp();
			});
			
			<?php
				if (is_page_template('contact.php') ) {
			?>
			/* === contact form validation === */
			$('#fc-contact-btn').click(function(e) {
				e.preventDefault();
				$('#fc-contact-form').submit();
			});
			
			$('#fc-contact-form').submit(function(e) {
				var isValid = true;
				
				if ($('#uname').val() == '') {
					isValid = false;
					$('#fc-contact-form .uname-error').text("<?php _e('Please enter your name', 'biopic'); ?>");
					$("#fc-contact-form .uname-error").slideDown(500);
				}
				else {
					$("#fc-contact-form .uname-error").slideUp(500);
				}
				
				if ($('#uemail').val() == '') {
					isValid = false;
					$('#fc-contact-form .uemail-error').text("<?php _e('Please enter your email id', 'biopic'); ?>");
					$("#fc-contact-form .uemail-error").slideDown(500);
				}
				else if (!validateEmail($('#uemail').val())) {
					isValid = false;
					$('#fc-contact-form .uemail-error').text("<?php _e('Please enter a valid email id', 'biopic'); ?>");
					$("#fc-contact-form .uemail-error").slideDown(500);
				}
				else {
					$("#fc-contact-form .uemail-error").slideUp(500);
				}
				
				if ($('#umessage').val() == '') {
					isValid = false;
					$('#fc-contact-form .umessage-error').text("<?php _e('Please enter your message', 'biopic'); ?>");
					$("#fc-contact-form .umessage-error").slideDown(500);
				}
				else {
					$("#fc-contact-form .umessage-error").slideUp(500);
				}
				
				if (isValid) {
					$.post("<?php echo site_url(); ?>/wp-admin/admin-ajax.php",
					{action:'fc_contact_form_handler', uname:$('#uname').val(), uemail:$('#uemail').val(), usubject:$('#usubject').val(), umessage:$('#umessage').val()},
					function(data) {
						if (data.status == "success") {
							$('#fc-contact-form .msg-box').removeClass('error');
							$('#fc-contact-form .msg-box').addClass('success');
							$('#fc-contact-form .msg-box span').text("<?php _e('Form has been successfully submitted.', 'biopic'); ?>");
							$("#fc-contact-form .msg-box").slideDown(500);
						}
						else {
							$('#fc-contact-form .msg-box').removeClass('success');
							$('#fc-contact-form .msg-box').addClass('error');
							$('#fc-contact-form .msg-box span').text("<?php _e('An error occurred while submitting the form. Please try again.', 'biopic'); ?>");
							$("#fc-contact-form .msg-box").slideDown(500);
						}
					}, "json");
				}
				
				return false;
			});
			<?php
				}
			?>
		
		});
	 
	</script>
    
    <script type="text/javascript">
		/* === Handles multiple functions for window.onload event === */
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			}
			else {
				window.onload = function() {
					if (oldonload) {
						oldonload();
					}
					func();
				}
			}
		}
	</script>

    <style type="text/css">
    <?php
		if (function_exists('get_option_tree')) {
			
			
			$background_option = get_option_tree('background_option', $theme_options, false, false, -1);
			if ($background_option == 'Pattern') {
				$background_pattern = get_option_tree('background_pattern', $theme_options, false, false, -1);
				if ($background_pattern != '') {
					echo 'body {
						background:url('.$background_pattern.');
					}';
				}
			}
			else if ($background_option == 'Solid Color') {
				$background_color = get_option_tree('background_color', $theme_options, false, false, -1);
				if ($background_color != '') {
					echo 'body {
						background:'.$background_color.';
					}';
				}
			}
			
			
			$icons_bg_color_normal = get_option_tree('icons_bg_color_normal', $theme_options, false, false, -1);
			if ($icons_bg_color_normal != '') {
				echo 'nav a, .skills .rating span.filled {
					background-color:'.$icons_bg_color_normal.';
				}';
			}
			
			$icons_bg_color_selected = get_option_tree('icons_bg_color_selected', $theme_options, false, false, -1);
			if ($icons_bg_color_selected != '') {
				echo '.coloricon:hover, nav ul.menu li a:hover {
					background-color:'.$icons_bg_color_selected.';
				}
				
				nav li.current-menu-item a {
					background-color:'.$icons_bg_color_selected.'
				}';
			}
			
			$filter_btn_bg_color = get_option_tree('filter_btn_bg_color', $theme_options, false, false, -1);
			if ($filter_btn_bg_color != '') {
				echo '.portfolio-items .filter li a {
					background-color:'.$filter_btn_bg_color.';
				}';
			}
			
			$filter_btn_bg_hover_color = get_option_tree('filter_btn_bg_hover_color', $theme_options, false, false, -1);
			if ($filter_btn_bg_hover_color != '') {
				echo '.portfolio-items .filter li a:hover, .portfolio-items .filter li.active a {
					background-color:'.$filter_btn_bg_hover_color.';
				}';
			}
			
			$filter_btn_text_color = get_option_tree('filter_btn_text_color', $theme_options, false, false, -1);
			if ($filter_btn_text_color != '') {
				echo '.portfolio-items .filter li a {
					color:'.$filter_btn_text_color.';
				}';
			}
			
			$btn_bg_color = get_option_tree('btn_bg_color', $theme_options, false, false, -1);
			if ($btn_bg_color != '') {
				echo '.button {
					background-color:'.$btn_bg_color.';
				}';
			}
			
			$btn_bg_hover_color = get_option_tree('btn_bg_hover_color', $theme_options, false, false, -1);
			if ($btn_bg_hover_color != '') {
				echo '.button:hover {
					background-color:'.$btn_bg_hover_color.';
				}';
			}
			
			$btn_text_color = get_option_tree('btn_text_color', $theme_options, false, false, -1);
			if ($btn_text_color != '') {
				echo '.button {
					color:'.$btn_text_color.';
				}';
			}
			
			$btn_text_hover_color = get_option_tree('btn_text_hover_color', $theme_options, false, false, -1);
			if ($btn_text_hover_color != '') {
				echo '.button:hover {
					color:'.$btn_text_hover_color.';
				}';
			}
			
			$text_link_color = get_option_tree('text_link_color', $theme_options, false, false, -1);
			if ($text_link_color != '') {
				echo 'a, a:visited {
					color:'.$text_link_color.';
				}';
			}
			
			$text_link_hover_color = get_option_tree('text_link_hover_color', $theme_options, false, false, -1);
			if ($text_link_hover_color != '') {
				echo 'a:hover, a:focus, ul.tabs li a.active, .atitle.active a, .ttitle.active a {
					color:'.$text_link_hover_color.';
				}';
			}
			
			$blog_meta_link_color = get_option_tree('blog_meta_link_color', $theme_options, false, false, -1);
			if ($blog_meta_link_color != '') {
				echo '.blog .meta a {
					color:'.$blog_meta_link_color.';
				}';
			}
			
			$blog_meta_link_hover_color = get_option_tree('blog_meta_link_hover_color', $theme_options, false, false, -1);
			if ($blog_meta_link_hover_color != '') {
				echo '.blog .meta a:hover {
					color:'.$blog_meta_link_hover_color.';
				}';
			}
			
			$blog_sidebar_link_color = get_option_tree('blog_sidebar_link_color', $theme_options, false, false, -1);
			if ($blog_sidebar_link_color != '') {
				echo '.blog .sidebar a {
					color:'.$blog_sidebar_link_color.';
				}';
			}
			
			$blog_sidebar_link_hover_color = get_option_tree('blog_sidebar_link_hover_color', $theme_options, false, false, -1);
			if ($blog_sidebar_link_hover_color != '') {
				echo '.blog .sidebar a:hover {
					color:'.$blog_sidebar_link_hover_color.';
				}';
			}
			
			// print custom css set for the "Custom CSS" option in the Theme Options
			$custom_css = get_option_tree('custom_css', $theme_options, false, false, -1);
			if ($custom_css != '') {
				echo $custom_css;
			}
		}
	?>
	</style>
    
    <!-- Google Analytics
    ================================================== -->
    <?php
        if (function_exists('get_option_tree')) {
            $google_analytics_code = get_option_tree('google_analytics_code');
            if ($google_analytics_code != '') {
                echo $google_analytics_code;
            }
        }
    ?>
    
</head>
<?php
	$body_class = '';
	$pages = array();
	if (function_exists('get_option_tree')) {
		$pages['profile'] = get_option_tree('profile_page', $theme_options, false, false, -1);
		$pages['resume'] = get_option_tree('resume_page', $theme_options, false, false, -1);
		$pages['portfolio'] = get_option_tree('portfolio_page', $theme_options, false, false, -1);
		$pages['blog'] = get_option_tree('blog_page', $theme_options, false, false, -1);
		$pages['contact'] = get_option_tree('contact_page', $theme_options, false, false, -1);
	}
	
	foreach ($pages as $key=>$page) { 
		if ($post->ID == $page) {
			$body_class = $key;
			break;
		}
	}
?>
<body <?php body_class($body_class); ?>>

	<div class="wrapper">
        <nav>
        	<?php
				wp_nav_menu(array('theme_location' => 'biopic-main-menu', 'container' => 'false', 'menu_class' => 'menu', 'link_before' => '<span><span>', 'link_after' => '</span></span>'));
			?>
        </nav>