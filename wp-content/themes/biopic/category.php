<?php
	get_header();
?>
<?php
	$theme_options = get_option('option_tree');
?>
        <div class="content">
            <div class="info">
                <div class="head">
                    <?php
						if (function_exists('get_option_tree')) {
							$owner_photo = get_option_tree('owner_photo', $theme_options, false, false, -1);
							if ($owner_photo != '') {
					?>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo $owner_photo; ?>" alt="" /></a>
                    <?php
							}
						}
					?>
                    <div class="name">
                    	<?php
							if (function_exists('get_option_tree')) {
								$owner_first_name = get_option_tree('owner_first_name', $theme_options, false, false, -1);
								if ($owner_first_name != '') {
						?>
                        <p class="first"><?php echo $owner_first_name; ?></p>
                        <?php
								}
								
								$owner_last_name = get_option_tree('owner_last_name', $theme_options, false, false, -1);
								if ($owner_last_name != '') {
						?>
                        <p class="last"><?php echo $owner_last_name; ?></p>
                        <?php
								}
								
								$owner_title = get_option_tree('owner_title', $theme_options, false, false, -1);
								if ($owner_title != '') {
						?>
                        <p class="title"><?php echo $owner_title; ?></p>
                        <?php
								}
							}
						?>
                    </div>
                </div>
            </div><!-- /profileInfo -->

            <div class="topAddress hidden">
			<?php
                include_once('contact-info.php');
            ?>
            </div><!-- /topAddress -->
			
            <br class="clear" />
            <div class="innerContainer">
            	<?php
					if (function_exists('get_option_tree')) {
						$blog_page = get_option_tree('blog_page', $theme_options, false, false, -1);
						if ($blog_page != '') {
							$wp_query = new WP_Query('page_id='.$blog_page);
							while ($wp_query->have_posts()) {
								$wp_query->the_post();
				?>
                <div class="desc">
                    <?php the_content(); ?>
                </div>
                <?php
							}
						}
					}
				?>
                <div class="main">
                	<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$current_cat_id = get_query_var('cat');
						
						$args = array(
							'cat' => $current_cat_id,
							'posts_per_page' => get_option('posts_per_page'),
							'paged' => $paged
						);
						
						$wp_query = new WP_Query($args);
						while($wp_query->have_posts()) {
							$wp_query->the_post();
							global $more;
							$more = 0;
					?>
                    <article>
                        <header><h1><a href="<?php echo get_permalink(); ?>" target="_self"><?php the_title(); ?></a></h1></header>
                        <section class="meta">On <?php echo get_the_time('F j, Y', get_the_ID()); ?>, by <span><?php the_author(); ?></span>, <a href="<?php echo get_permalink(); ?>#<?php _e('comments', 'biopic'); ?>"><?php comments_number(__('0 Comments', 'biopic'), __('1 Comment', 'biopic'), __('% Comments', 'biopic')); ?></a></section>
                        <section class="entry">
							<?php /*?><?php
                                if (has_post_thumbnail()) {
                            ?>
                            <a href="<?php echo get_permalink(); ?>" target="_self"><?php the_post_thumbnail('biopic-post-thumbnail', array('class' => 'scale-with-grid', 'alt' => '', 'title' => '')); ?></a>
							<?php
								}
							?><?php */?>
                            <?php
								if (has_post_format('image')) {
									/*$post_images = get_children(
										array(
											'post_parent' => get_the_ID(),
											'post_status' => 'inherit',
											'post_type' => 'attachment',
											'post_mime_type' => 'image',
											'order' => 'ASC',
											'orderby' => 'menu_order ID'
										)
									);
									
									if($post_images) {
										$slideshow = '<div class="postNedia postSlideshow">
											<div class="flex-container">
												<div class="flexslider">
													<ul class="slides">';
														foreach($post_images as $att_id => $post_image) {
															$slideshow_image = wp_get_attachment_image($att_id, array(640, 320), false, array('class' => 'scale-with-grid', 'title' => '', 'alt' => ''));
															$slideshow .= '<li>'.$slideshow_image.'</li>';
														}
													$slideshow .= '</ul>
												</div>
											</div>
										</div>';
										echo $slideshow;
									}
									else*/ if(has_post_thumbnail()) {
										echo '<div class="postMedia postImage">';
										echo '<a href="'.get_permalink().'">';
										the_post_thumbnail('biopic-post-thumbnail', array('class' => 'scale-with-grid', 'alt' => '', 'title' => ''));
										echo '</a>';
										echo '</div>';
									}
								}
								else if (has_post_format('video')) {
									echo '<div class="postMedia postVideo">';
									$custom = get_post_custom(get_the_ID());
									$post_video_id = $custom["post_video_id"][0];
									$post_video_type = $custom["post_video_type"][0];
									echo do_shortcode('[video id="'.$post_video_id.'" type="'.$post_video_type.'"]');
									echo '</div>';
								}
							?>
                            <?php
								the_content('Read More');
							?>
                        </section>
                    </article>
                    <?php
						}
					?>
                    <div class="pagination">
                        <div class="left"><?php previous_posts_link('Older posts') ?></div>
                        <div class="right"><?php next_posts_link('Newer posts') ?></div>
                    </div>
                </div>
                <?php
					get_sidebar('blog');
				?>
                <!-- /sidebar -->
            </div><!-- /innerContainer -->

        </div><!-- /content -->

        <?php
			get_footer();
		?>