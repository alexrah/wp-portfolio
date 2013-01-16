<?php
	$theme_options = get_option('option_tree');
?>
<?php
	if (function_exists('get_option_tree')) {
		$contact_info = get_option_tree('contact_info', $theme_options, false, false, -1);
		if ($contact_info != '') {
?>
<address>
<?php
	echo $contact_info;
?>
</address>
<?php
		}
	}
?>
<div class="social">
<?php
	if (function_exists('get_option_tree')) {
?>
	<?php
		$dribbble_id = get_option_tree('dribbble_id', $theme_options, false, false, -1);
		if ($dribbble_id != '') {
	?>
	<a href="http://dribbble.com/<?php echo $dribbble_id; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/dribbble.png" alt="" /></a>
	<?php
		}
		
		$linkedin_url = get_option_tree('linkedin_url', $theme_options, false, false, -1);
		if ($linkedin_url != '') {
	?>
	<a href="<?php echo $linkedin_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/linkedin.png" alt="" /></a>
	<?php
		}
		
		$flickr_id = get_option_tree('flickr_id', $theme_options, false, false, -1);
		if ($flickr_id != '') {
	?>
	<a href="http://flickr.com/<?php echo $flickr_id; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/flickr.png" alt="" /></a>
	<?php
		}
		
		$facebook_url = get_option_tree('facebook_url', $theme_options, false, false, -1);
		if ($facebook_url != '') {
	?>
	<a href="<?php echo $facebook_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/facebook.png" alt="" /></a>
    <?php
		}
		
		$gplus_url = get_option_tree('gplus_url', $theme_options, false, false, -1);
		if ($gplus_url != '') {
	?>
	<a href="<?php echo $gplus_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/googleplus.png" alt="" /></a>
    <?php
		}
		
		$twitter_id = get_option_tree('twitter_id', $theme_options, false, false, -1);
		if ($twitter_id != '') {
	?>
	<a href="http://twitter.com/<?php echo $twitter_id; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/twitter.png" alt="" /></a>
    <?php
		}
		
		$youtube_id = get_option_tree('youtube_id', $theme_options, false, false, -1);
		if ($youtube_id != '') {
	?>
	<a href="http://youtube.com/user/<?php echo $youtube_id; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/youtube.png" alt="" /></a>
    <?php
		}
		
		$vimeo_id = get_option_tree('vimeo_id', $theme_options, false, false, -1);
		if ($vimeo_id != '') {
	?>
	<a href="http://vimeo.com/<?php echo $vimeo_id; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social_icons/vimeo.png" alt="" /></a>
	<?php
		}
	?>
<?php
	}
?>
</div>