		<?php
            $theme_options = get_option('option_tree');
        ?>
        <?php
			wp_footer();
		?>
        <footer>
			<?php
				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area')) {
					if (function_exists('get_option_tree')) {
						$copyright_text = get_option_tree('copyright_text', $theme_options, false, false, -1);
						if ($copyright_text != '') {
            ?>
            <span><?php echo $copyright_text; ?></span>
            <?php
						}
					}
				}
			?>
        </footer>

	</div><!-- /wrapper -->

<!-- End Document
================================================== -->
</body>
</html>