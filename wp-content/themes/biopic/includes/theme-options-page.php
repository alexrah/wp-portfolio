<?php

	include_once('common-functions.php');
	
	// Check that the user is allowed to update options  
	/*if (!current_user_can('manage_options')) {  
		wp_die(__('You do not have sufficient permissions to access this page.', 'biopic'));  
	}*/
	
	add_action('admin_menu', 'biopic_admin_menu');
	function biopic_admin_menu() {
		add_theme_page( 'Biopic Theme Options', 'Theme Options', 'edit_theme_options', 'biopic-theme-options', 'biopic_theme_options_page' );
	}
	
	function biopic_theme_options_page() {
?>
    <div class="wrap">
        <div><br></div>
        <h2>Biopic Theme Options</h2>
		
        <form method="post" action="options.php">
            <?php wp_nonce_field( 'update-options' ); ?>
            <?php settings_fields( 'biopic-options' ); ?>
            <?php do_settings_sections( 'biopic-options' ); ?>
            <?php submit_button(); ?>
        </form>
    </div>
<?php
	}
	
	add_action('admin_init', 'biopic_register_admin_settings');
	function biopic_register_admin_settings() {
		register_setting( 'biopic-options', 'biopic-options' );
		
		// Settings fields and sections
		add_settings_section('section_typography', 'Typography Options', 'biopic_section_typography', 'biopic-options');
		add_settings_field('titles-font', 'Titles Font', 'biopic_field_titles_font', 'biopic-options', 'section_typography');
		add_settings_field('body-font', 'Body Font', 'biopic_field_body_font', 'biopic-options', 'section_typography');
	}
	
	function biopic_section_typography() {
		echo 'Select fonts from the Title and Body dropdown menus and click "Save Changes", then preview the website and see the newly selected font(s) in action.';
	}
	
	function biopic_field_titles_font() {
		$options = (array) get_option( 'biopic-options' );
		$fonts = get_available_fonts();
		$current_font = 'arial';
	
		if ( isset( $options['titles-font'] ) )
			$current_font = $options['titles-font'];
?>
			<select name="biopic-options[titles-font]">
            	<option value="">Select Font</option>
				<?php foreach( $fonts as $font_key => $font ): ?>
				<option <?php selected( $font_key == $current_font ); ?> value="<?php echo $font_key; ?>"><?php echo $font['name']; ?></option>
                <?php endforeach; ?>
			</select>
<?php
	}
	
	/*add_action( 'wp_head', 'biopic_wp_head' );
	function biopic_wp_head() {
		$options = (array) get_option( 'biopic-options' );
		$fonts = get_available_fonts();
		$current_font_key = 'arial';
		
		if ( isset( $options['titles-font'] ) )
			$current_font_key = $options['titles-font'];
	
		if ( isset( $fonts[ $current_font_key ] ) ) {
			$current_font = $fonts[ $current_font_key ];
	
			echo '<style>';
			echo $current_font['import'];
			echo 'body * { ' . $current_font['css'] . ' } ';
			echo '</style>';
		}
	}*/
	
	function biopic_field_body_font() {
		$options = (array) get_option( 'biopic-options' );
		$fonts = get_available_fonts();
		$current_font = 'arial';
	
		if ( isset( $options['body-font'] ) )
			$current_font = $options['body-font'];
?>
			<select name="biopic-options[body-font]">
            	<option value="">Select Font</option>
				<?php foreach( $fonts as $font_key => $font ): ?>
				<option <?php selected( $font_key == $current_font ); ?> value="<?php echo $font_key; ?>"><?php echo $font['name']; ?></option>
                <?php endforeach; ?>
			</select>
<?php
	}
	
	add_action( 'wp_head', 'biopic_wp_head' );
	function biopic_wp_head() {
		$options = (array) get_option( 'biopic-options' );
		$fonts = get_available_fonts();
		$current_font_key = 'arial';
		
		if ( isset( $options['body-font'] ) )
			$current_font_key = $options['body-font'];
	
		if ( isset( $fonts[ $current_font_key ] ) ) {
			$current_font = $fonts[ $current_font_key ];
	
			echo '<style>';
			echo $current_font['import'];
			echo 'body * { ' . $current_font['css'] . ' } ';
			echo '</style>';
		}
		
		
		if ( isset( $options['titles-font'] ) )
			$current_font_key = $options['titles-font'];
	
		if ( isset( $fonts[ $current_font_key ] ) ) {
			$current_font = $fonts[ $current_font_key ];
	
			echo '<style>';
			echo $current_font['import'];
			echo 'h1, h2, h3, h4, h5, h6 { ' . $current_font['css'] . ' !important; } ';
			echo '</style>';
		}
	}

?>