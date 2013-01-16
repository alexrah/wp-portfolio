<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
		die(_e('Direct access to this page is restricted. Thank you!', 'biopic'));
	}
	
	if ( post_password_required() ) {
?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'biopic'); ?></p>
<?php
		return;
	}
?>
<!-- Comments
================================================== -->
<div id="comments" class="comments">
	<?php
		if (have_comments()) {
	?>
    <?php
		if (!empty($comments_by_type['comment'])) {
	?>
    <h6 class="commenttitle"><?php _e('This article has ', 'biopic'); ?><?php comments_number(__('no comments', 'biopic'), __('one Comment', 'biopic'), __('% comments', 'biopic')); ?></h6>
    <ol class="commentsList">
        <?php wp_list_comments('type=comment&avatar_size=40&callback=biopic_comment'); ?>
    </ol>
    <?php
		}
	?>
    <?php
		if ('closed' == $post->comment_status ) {
	?>
	<p class="nocomments"><?php _e('Comments are now closed for this post.', 'biopic') ?></p>
	<?php
		}
		else {
	?>
    <?php
    	if ('open' == $post->comment_status) {
	?>

    <?php
		}
    	else {
			if (is_single()) {
	?>
    <p class="nocomments"><?php _e('Comments are closed.', 'biopic') ?></p>
	<?php
    		}
		}
	?>

    <?php
    	}
	?>
        
	<?php
        }
    ?>
    
    <?php
		if (comments_open()) {
	?>
    <?php
		if (have_comments()) {
	?>
    <!-- Divider Space More
    ================================================== -->
    <!--<div class="divider-space-more"></div>-->
	<?php
		}
	?>
    
    <!-- Comments Form
    ================================================== -->
    <div id="respond">
    	<br>
        <h6><?php comment_form_title(__('Leave a Reply', 'biopic'), __('Leave a Reply to %s', 'biopic')); ?></h6>
        <div class="cancelCommentReply">
			<?php cancel_comment_reply_link(); ?>
		</div>
        
        <?php
			if (get_option('comment_registration') && !is_user_logged_in()) {
		?>
        <p><?php printf(__('You must be %1$slogged in%2$s to post a comment.', 'biopic'), '<a href="'.site_url().'/wp-login.php?redirect_to='.urlencode(get_permalink()).'">', '</a>') ?></p>
        <?php
			}
			else {
		?>
        <form id="commentform" action="<?php echo site_url(); ?>/wp-comments-post.php" method="post">
        	<?php
            	if (is_user_logged_in()) {
			?>
            <p><?php printf(__('Logged in as %1$s. %2$sLog out &raquo;%3$s', 'biopic'), '<a href="'.site_url().'/wp-admin/profile.php">'.$user_identity.'</a>', '<a href="'.(function_exists('wp_logout_url') ? wp_logout_url(get_permalink()) : site_url().'/wp-login.php?action=logout" title="').'" title="'.__('Log out of this account', 'biopic').'">', '</a>') ?></p>
            <?php
				}
				else {
			?>
            	<label for="author"><?php _e('Name (required)', 'biopic'); ?></label>
                <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" />
            	<label for="author"><?php _e('Email (required)', 'biopic'); ?></label>
                <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" />
            	<label for="author"><?php _e('Website', 'biopic'); ?></label>
                <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" />
            <?php
				}
			?>
            	<label for="comment"><?php _e('Comment (required)', 'biopic'); ?></label>
                <textarea name="comment" id="comment" value=""></textarea>
                <input type="submit" name="comment-btn" id="comment-btn" value="<?php _e('Post Comment', 'biopic'); ?>" class="button" />
                <?php comment_id_fields(); ?>
            <?php do_action('comment_form', $post->ID); ?>
        </form>
        <?php
			}
		?>
    </div>
    <?php
		}
	?>
</div>