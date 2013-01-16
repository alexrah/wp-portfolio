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
                	<h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                </div>
                <?php
						}
					}
				?>
            </div><!-- /innerContainer -->

        </div><!-- /content -->

        <?php
        	get_footer();
        ?>