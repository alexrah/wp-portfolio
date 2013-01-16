<?php
	/* === Skills shortcode === */
	function skills_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			
		), $atts ) );
		
		return '<ul class="skills">'.do_shortcode($content).'</ul>';
	}
	add_shortcode('skills', 'skills_shortcode');
	
	/* === Skill shortcode === */
	function skill_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title' => '',
			'experience' => '0',
			'maxexperience' => '5',
			'class' => ''
		), $atts ) );
		
		$experience = esc_attr($experience);
		$maxexperience = esc_attr($maxexperience);
		
		if ($experience > $maxexperience) {
			return 'The value of experience cannot be greater than the value of maxexperience parameter';
		}
		
		$skill = '<li><span class="skill">'.esc_attr($title).'</span><div class="rating">';
		for ($m = 1; $m <= $maxexperience; $m++) {
			if ($m <= $experience) {
				$skill .= '<span class="filled"></span>';
			}
			else {
				$skill .= '<span class="empty"></span>';
			}
		}
		
		$skill .='</div><div class="description">'.do_shortcode($content).'</div></li>';
		
		return $skill;
	}
	add_shortcode('skill', 'skill_shortcode');
	
	/* === Note: This is not a shortcode in itself, instead it uses
	skills and skill shortcodes to insert an example of skills setup
	when accessed via Shortcodes visual button in the post/page editor === */
	function biopic_skills_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
		), $atts ) );
		
		return do_shortcode($content);
	}
	add_shortcode('skillsexample', 'biopic_skills_shortcode');
?>
<?php
	/* === Education and Jobs shortcode === */
	function edujob_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			
		), $atts ) );
		
		return '<ul class="personalDev">'.do_shortcode($content).'</ul>';
	}
	add_shortcode('edujob', 'edujob_shortcode');
	
	
	/* === Education and Job Item shortcode === */
	function edujobitem_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title' => '',
			'period' => ''
		), $atts ) );
		
		$edujobitem = '<li><span class="title">'.esc_attr($title).'</span><span class="time">'.esc_attr($period).'</span><br><span>'.do_shortcode($content).'</span></li>';
		
		return $edujobitem;
	}
	add_shortcode('edujobitem', 'edujobitem_shortcode');
	
	/* === Note: This is not a shortcode in itself, instead it uses
	edujob and edujobitem shortcodes to insert an example of education and jobs setup
	when accessed via Shortcodes visual button in the post/page editor === */
	function biopic_edujob_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
		), $atts ) );
		
		return do_shortcode($content);
	}
	add_shortcode('edujobexample', 'biopic_edujob_shortcode');
?>
<?php
	/* === Tabs Shortcode === */
	function tabs_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'tabs' => ''
		), $atts ) );
		
		$tabs = explode(',', esc_attr($tabs));
		$isFirstTab = true;
		
		$tabscontent = '';
		
		foreach ($tabs as $tab) {
			if ($isFirstTab) {
				$isFirstTab = false;
				$tabscontent .= '<li><a class="active" href="#'.strtolower($tab).'">'.$tab.'</a></li>';
			}
			else {
				$tabscontent .= '<li><a href="#'.strtolower($tab).'">'.$tab.'</a></li>';
			}
			
		}
		
		return '<ul class="tabs">'.$tabscontent.'</ul>';
	}
	add_shortcode('tabs', 'tabs_shortcode');
	
	/* === Tabs Content Shortcode === */
	function tabscontent_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'class' => ''
		), $atts ) );
		
		if (esc_attr($class) != '') {
			$class = ' '.$class;
		}
		
		return '<ul class="tabs-content'.$class.'">'.do_shortcode($content).'</ul>';
	}
	add_shortcode('tabscontent', 'tabscontent_shortcode');
	
	/* === Tab Content Shortcode with Title === */
	function tabcontent_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'id' => '',
			'class' => ''
		), $atts ) );
		
		return '<li id="'.strtolower($id).'" class="'.esc_attr($class).'">'.do_shortcode($content).'</li>';
	}
	add_shortcode('tabcontent', 'tabcontent_shortcode');
	
	/* === Note: This is not a shortcode in itself, instead it uses tabs,
	tabscontent and tabcontent shortcodes to insert an example of tabs setup
	when accessed via Shortcodes button in the editor === */
	function biopic_tabs_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
		), $atts ) );
		
		return do_shortcode($content);
	}
	add_shortcode('tabsexample', 'biopic_tabs_shortcode');
?>
<?php
	/* === Accordion Shortcode === */
	function accordion_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'id' => ''
		), $atts ) );
		
		$id = esc_attr($id);
		
		if ($id != '') {
			$id = ' id="'.$id.'"';
		}
		
		return '<div'.$id.' class="accordion">'.do_shortcode($content).'</div>';
	}
	add_shortcode('accordion', 'accordion_shortcode');
	
	/* === Accordion Tab Shortcode === */
	function accordiontab_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title' => '',
			'active' => 'false',
			'class' => ''
		), $atts ) );
		
		//any optional classes
		$class = esc_attr($class);
		if ($class != '') {
			$class = ' '.$class;
		}
		
		$tab_status = '';
		$tab_style = '';
		if (esc_attr($active) == 'true') {
			$tab_status = ' active';
			$tab_style = ' style="display:block"';
		}
		
		$accordiontab_content = '<div class="atitle'.$class.''.$tab_status.'"><a href="#">'.esc_attr($title).'</a></div>';
		$accordiontab_content .= '<div class="atab"'.$tab_style.'>'.do_shortcode($content).'</div>';
		
		return $accordiontab_content;
	}
	add_shortcode('accordiontab', 'accordiontab_shortcode');
	
	/* === Note: This is not a shortcode in itself, instead it uses
	accordion and accordiontab shortcodes to insert an example of
	accordian when accessed via Shortcodes button in the editor === */
	function biopic_accordion_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
		
		), $atts ) );
		
		return do_shortcode($content);
	}
	add_shortcode('accordiontabsexample', 'biopic_accordion_shortcode');
?>
<?php
	/* === Toggle Shortcode === */
	function biopic_toggle_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title' => '',
			'active' => 'false'
		), $atts ) );
		
		$toggle_status = '';
		$toggle_style = '';
		if (esc_attr($active) == 'true') {
			$toggle_status = ' active';
			$toggle_style = ' style="display:block"';
		}
		
		$toggle_content = '<div class="toggle">';
		$toggle_content .= '<div class="ttitle'.$toggle_status.'"><a href="#">'.esc_attr($title).'</a></div>';
		$toggle_content .= '<div class="ttab"'.$toggle_style.'>'.do_shortcode($content).'</div>';
		$toggle_content .= '</div>';
		
		return $toggle_content;
	}
	add_shortcode('toggle', 'biopic_toggle_shortcode');
?>
<?php
	/* === List Shortcode === */
	function biopic_list_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'type' => 'arrow',
			'class' => ''
		), $atts ) );
		
		//any optional classes
		$class = esc_attr($class);
		if ($class != '') {
			$class = ' '.$class;
		}
		
		$type = esc_attr($type);
		
		if ($type != '') {
			$list_content = '<ul class="list '.$type.''.esc_attr($class).'">'.do_shortcode($content).'</ul>';
		}
		else {
			$list_content = __('Wrong value specified for the type parameter of list shortcode', 'biopic');
		}
		
		return $list_content;
	}
	add_shortcode('list', 'biopic_list_shortcode');
?>
<?php
	/* === Button Shortcode === */
	function biopic_button_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'label' => '',
			'link' => '',
			'size' => 'small',
			'shape' => 'default'
		), $atts ) );
		
		return '<a class="button '.esc_attr($shape).' '.esc_attr($size).'" href="'.esc_attr($link).'">'.esc_attr($label).'</a>';
	}
	add_shortcode('button', 'biopic_button_shortcode');
?>
<?php
	/* === Alert Shortcode === */
	function biopic_alert_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'type' => 'standard'
		), $atts ) );
		
		$type = esc_attr($type);
		
		$alert_content = '<div class="alert-box '.$type.'"><span>'.do_shortcode($content).'</span><a href="#" class="close-btn"></a></div>';
		
		return $alert_content;
	}
	add_shortcode('alert', 'biopic_alert_shortcode');
?>
<?php
	/* === Blockquote Shortcode === */
	function biopic_blockquote_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'author' => ''
		), $atts ) );
		
		if ($author != '') {
			$quotecontent = '<div class="blockquote-wrapper"><blockquote>'.do_shortcode($content).'</blockquote><span class="author"><strong>'.$author.'</strong></span></div>';
		}
		else {
			$quotecontent = '<div class="blockquote-wrapper"><blockquote>'.do_shortcode($content).'</blockquote></div>';
		}
		
		return $quotecontent;
	}
	add_shortcode('blockquote', 'biopic_blockquote_shortcode');
?>
<?php
	/* === Video Shortcode === */
	function biopic_video_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'id' => '',
			'type' => '',
			'class' => ''
		), $atts ) );
		
		$type = esc_attr($type);
		
		if ($type == 'youtube') {
			$video_content = '<div class="scale-video video-container '.$type.'-video"><iframe src="http://www.youtube.com/embed/'.esc_attr($id).'"></iframe></div>';
		}
		else if ($type == 'vimeo') {
			$video_content = '<div class="scale-video video-container '.$type.'-video"><iframe src="http://player.vimeo.com/video/'.esc_attr($id).'?title=0&amp;byline=0&amp;portrait=0"></iframe></div>';
		}
		else {
			$video_content = '<div class="scale-video video-container '.$type.'-video">Wrong value specified for the type parameter of video shortcode</div>';
		}
		
		return $video_content;
	}
	add_shortcode('video', 'biopic_video_shortcode');
?>
<?php
	/* === Google Map Shortcode === */
	function biopic_gmap_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'apikey' => '',
			'address' => '',
			'html' => '',
			'zoom' => '12',
			'width' => '100%',
			'height' => '400px',
			'latitude' => '0',
			'longitude' => '0',
			'maptype' => 'ROADMAP',
			'popup' => 'false',
			'scrollwheel' => 'false',
			'class' => ''
		), $atts ) );
		
		//any optional classes
		$class = esc_attr($class);
		if ($class != '') {
			$class = ' '.$class;
		}
		
		$apikey = '';
		
		if (function_exists('get_option_tree')) {
        	$apikey = get_option_tree('gmaps_api_key');
		}
		
		if ($apikey != '') {
			$map_content = '<div id="gmap-container" class="gmap'.esc_attr($class).'" style="width:'.esc_attr($width).'; height:'.esc_attr($height).'"></div>';
			$map_content .= '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><script type="text/javascript" src="'.get_template_directory_uri().'/javascripts/jquery.gmap.min.js">';
            $map_content .= '</script><script type="text/javascript">
							  function loadGMap() {
								jQuery(document).ready(function($) {
									$("#gmap-container").gMap(
										{
											latitude: '.esc_attr($latitude).',
											longitude: '.esc_attr($longitude).',
											maptype: "'.esc_attr($maptype).'", // "HYBRID", "SATELLITE", "ROADMAP" or "TERRAIN"
											zoom: '.esc_attr($zoom).',
											scrollwheel: '.esc_attr($scrollwheel).',
											markers: [
												{
													latitude: '.esc_attr($latitude).',
													longitude: '.esc_attr($longitude).',
													address: "'.esc_attr($address).'",
													popup: '.esc_attr($popup).',
													html: "'.esc_attr($html).'"
												}
											],
											controls: {
												panControl: true,
												zoomControl: true,
												mapTypeControl: true,
												scaleControl: true,
												streetViewControl: false,
												overviewMapControl: false
											}
										});
								});
							  }
							  addLoadEvent(loadGMap);
							</script>';
		}
		else {
			$map_content = __('Wrong values specified for gmap (Google Map) shortcode', 'biopic');
		}
		
		return $map_content;
	}
	add_shortcode('gmap', 'biopic_gmap_shortcode');
?>