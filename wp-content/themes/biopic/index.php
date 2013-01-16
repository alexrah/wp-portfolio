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
                
                <br class="clear" />
                <div class="desc">
                	<?php
						if (function_exists('get_option_tree')) {
							$profile_page = get_option_tree('profile_page', $theme_options, false, false, -1);
							$query = new WP_Query('page_id='.$profile_page);
							while ($query->have_posts()) {
								$query->the_post();
								the_content();
							}
						}
					?>
                </div>
                <div class="subnavContainer">
                    <div class="subnavLeft">
                    	<?php
							if (function_exists('get_option_tree')) {
								$resume_page = get_option_tree('resume_page', $theme_options, false, false, -1);
								if ($resume_page != '') {
						?>
                        <div class="subnavResume">
                            <a href="<?php echo get_permalink($resume_page); ?>" class="invert coloricon"></a><br />
                            <a href="<?php echo get_permalink($resume_page); ?>">Resume</a>
                        </div>
                        <?php
								}
								
								$portfolio_page = get_option_tree('portfolio_page', $theme_options, false, false, -1);
								if ($portfolio_page != '') {
						?>
                        <div class="subnavPortfolio">
                            <a href="<?php echo get_permalink($portfolio_page); ?>" class="invert coloricon"></a><br />
                            <a href="<?php echo get_permalink($portfolio_page); ?>" >Portfolio</a>
                        </div>
                        <?php
								}
							}
						?>
                    </div>
                    <div class="subnavRight">
                    	<?php
							if (function_exists('get_option_tree')) {
								$blog_page = get_option_tree('blog_page', $theme_options, false, false, -1);
								if ($blog_page != '') {
						?>
                        <div class="subnavBlog">
                            <a href="<?php echo get_permalink($blog_page); ?>" class="invert coloricon"></a><br />
                            <a href="<?php echo get_permalink($blog_page); ?>" >Blog</a>
                        </div>
                        <?php
								}
								
								$contact_page = get_option_tree('contact_page', $theme_options, false, false, -1);
								if ($contact_page != '') {
						?>
                        <div class="subnavContact">
                            <a href="<?php echo get_permalink($contact_page); ?>" class="invert coloricon"></a><br />
                            <a href="<?php echo get_permalink($contact_page); ?>" >Contact</a>
                        </div>
                        <?php
								}
							}
						?>
                    </div>
                </div><!-- /subnavContainer -->

            </div><!-- /profileInfo -->

            <div class="sidebar hidden">
            	<?php
					include_once('contact-info.php');
				?>
                <?php
					get_sidebar();
				?>
            </div><!-- /sidebar -->

        </div><!-- /content -->

        <?php
			get_footer();
		?>