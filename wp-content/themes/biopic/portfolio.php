<?php
	/*
		Template Name: Portfolio Page
	*/
?>
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
					if (have_posts()) {
						while (have_posts()) {
							the_post();
				?>
                <div class="desc">
                    <?php the_content(); ?>
                </div>
                <?php
						}
					}
				?>
                <div class="portfolio-items">
                    <ul class="filter clearfix">
                    	<li class="active"><a href="#"><?php _e('All', 'biopic'); ?></a></li>
                    	<?php
							$terms = get_terms("skills", 'hide_empty=1');
							foreach ($terms as $term) {
						?>
                        <li><a href="#"><?php echo $term->name; ?></a></li>
                        <?php
							}
						?>
                    </ul>
                    <ul class="items">
                    	<?php
							$counter = 0;
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							
							$args = array(
								'post_type' => 'biopic_work',
								'orderby' => 'date',
								'order' => 'DESC',
								'status' => 'publish',
								'paged' => $paged,
								'posts_per_page' => -1
							);
							
							$wp_query = new WP_Query($args);
							while ($wp_query->have_posts()) {
								$wp_query->the_post();
								
								$terms_list = get_the_terms(get_the_ID(), 'skills');
								if ($terms_list && !is_wp_error($terms_list)) {
									$terms = array();
									foreach ($terms_list as $term_item) {
										$terms[] = $term_item->name;
									}
									
									$terms_str = join( ", ", $terms);
								}
								
								$post_format = get_post_format();
								
								$custom = get_post_custom(get_the_ID());
								$work_external_url = $custom['work_external_url'][0];
						?>
                        <li class="work <?php echo strtolower(join(' ', str_replace(' ', '-', $terms))); ?><?php echo ' '.$post_format; ?>">
                        	<?php
								if (has_post_format('video')) {
									if(has_post_thumbnail()) {
										$work_video_url = $custom['work_video_url'][0];
							?>
                        	<a href="<?php echo $work_video_url; ?>" rel="prettyPhoto">
                            	<div class="image-wrapper"><div class="cover"></div>
								<?php
									the_post_thumbnail('biopic-work-thumbnail', array('class' => 'scale-with-grid', 'title' => '', 'alt' => get_the_title()));
								?>
                                </div>
                            </a>
                            <?php
										}
									}
									else {
										if(has_post_thumbnail()) {
											$full_size_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
							?>
                            <a href="<?php echo $full_size_image[0]; ?>" rel="prettyPhoto[biopic_works_gal]">
                                <div class="image-wrapper"><div class="cover"></div>
                                <?php
                                    the_post_thumbnail('biopic-work-thumbnail', array('class' => 'scale-with-grid', 'title' => '', 'alt' => get_the_title()));
                                ?>
                                </div>
                            </a>
							<?php
									}
								}
							?>
                            <span class="title">
                            	<?php
									if (function_exists('get_option_tree')) {
										$work_items_link_status = get_option_tree('work_items_link_status', $theme_options, false, false, -1);
										if ($work_items_link_status == 'Yes') {
											$permalink = get_permalink();
											
											if ($work_external_url != '') {
												$permalink = $work_external_url;
											}
								?>
                                <a href="<?php echo $permalink; ?>"><?php the_title(); ?></a>
                                <?php
										}
										else {
								?>
                                <?php the_title(); ?>
                                <?php
										}
									}
								?>
                            </span>
                            <div class="desc"><?php the_excerpt(); ?></div>
						</li>
                        <?php
							}
						?>
                    </ul>
                </div>
            </div><!-- /innerContainer -->

        </div><!-- /content -->

        <?php
			get_footer();
		?>