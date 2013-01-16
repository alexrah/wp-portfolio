<?php
	$theme_options = get_option('option_tree');
?>
<div class="sidebar hidden">
    <div class="subscribe">
        <h6>Subscribe to my blog</h6>
        <?php
			if (function_exists('get_option_tree')) {
				$contact_email_id = get_option_tree('contact_form_email', $theme_options, false, false, -1);
				if ($contact_email_id != '') {
		?>
        <a href="mailto:<?php echo $contact_email_id; ?>" ><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/email.png" /></a>
        <?php
				}
				
				$rss_feed_status = get_option_tree('rss_feed_status', $theme_options, false, false, -1);
				if ($rss_feed_status == 'Yes') {
		?>
        <a href="<?php bloginfo('rss2_url'); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/rss.png" /></a>
        <?php
				}
			}
		?>
    </div>
    <?php
		if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-sidebar')) {
	?>
    
    <?php
		}
	?>
</div>