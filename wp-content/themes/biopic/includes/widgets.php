<?php
	/* === Biopic Twitter Widget === */
	class Biopic_Twitter_Widget extends WP_Widget {
		
		function Biopic_Twitter_Widget() {
			$widget_ops = array(
				'classname' => 'twitter-updates',
				'description' => __('Shows latest twitter tweets in widgetized area', 'biopic')
			);
			
			$control_ops = array(
				'id_base' => 'biopic-twitter-tweets'
			);
			
			$this->WP_Widget('biopic-twitter-tweets', __('Biopic Twitter Tweets', 'biopic'), $widget_ops, $control_ops);
		}
		
		function form($instance) {
			$defaults = array('linktext' => __('follow us on Twitter', 'biopic'));
			$instance = wp_parse_args( (array) $instance, $defaults );
?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'biopic') ?></label>
                <input name="<?php echo $this->get_field_name('title') ?>" id="<?php echo $this->get_field_id('title') ?> " value="<?php echo $instance['title'] ?>" class="widefat">
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id('twitterid'); ?>"><?php _e('Twitter ID:', 'biopic') ?></label>
                <input name="<?php echo $this->get_field_name('twitterid') ?>" id="<?php echo $this->get_field_id('twitterid') ?> " value="<?php echo $instance['twitterid'] ?>" class="widefat">
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id('numtweets'); ?>"><?php _e('Number of Tweets:', 'biopic') ?></label>
                <input name="<?php echo $this->get_field_name('numtweets') ?>" id="<?php echo $this->get_field_id('numtweets') ?> " value="<?php echo $instance['numtweets'] ?>" class="widefat">
            </p>
            
            <?php /*?><p>
                <label for="<?php echo $this->get_field_id('linktext'); ?>"><?php _e('Link Text e.g. follow us on Twitter', 'biopic') ?></label>
                <input name="<?php echo $this->get_field_name('linktext') ?>" id="<?php echo $this->get_field_id('linktext') ?> " value="<?php echo $instance['linktext'] ?>" class="widefat">
            </p><?php */?>
<?php
		}
		
		// used when the user saves their widget options
		function update($new_instance, $old_instance) {
			$instance = $old_instance;
			
			$instance['title'] = $new_instance['title'];
			$instance['twitterid'] = $new_instance['twitterid'];
			$instance['numtweets'] = $new_instance['numtweets'];
			//$instance['linktext'] = $new_instance['linktext'];
			
			return $instance;
		}
		
		function widget($args, $instance) {
			extract($args);
			
			$title = $instance['title'];
			$twitterid = $instance['twitterid'];
			$numtweets = $instance['numtweets'];
			//$linktext = $instance['linktext'];
			
			$script = '<script>
				function loadTweets() {
					jQuery(document).ready(function($) {
						if($(".twitter-updates").length != 0) {
							$.ajaxSetup({cache: true});
							$.getJSON("http://twitter.com/status/user_timeline/'.$twitterid.'.json?count='.$numtweets.'&callback=?", function(data) {
								$(".twitter-updates").append("<ul></ul>");
								$.each(data, function(index, item) {
									$(".twitter-updates > ul").append(\'<li><span>\' + item.text.linkify() + \'</span><a href="http://twitter.com/'.$twitterid.'/status/\' + item.id_str + \'">\' + relative_time(item.created_at) + \'</a></li>\');
								});';
								/*if ($linktext) {
									$script .= '$(".twitter-updates").append(\'<div><a class="more-link2" href="http://twitter.com/'.$twitterid.'">'.$linktext.'</a></div>\');';
								}*/
							$script .= '});
						}
					});
				}
				
				addLoadEvent(loadTweets);
			</script>';
			
			$out = '';
			
			echo $script;
			echo $before_widget;
			echo $before_title.$title.$after_title;
			echo $out;
			echo $after_widget;
		}
    
	}
	
	function register_biopic_twitter_widget() {
		register_widget('Biopic_Twitter_Widget');
	}
	add_action('widgets_init', 'register_biopic_twitter_widget');
?>
<?php
	/* === Biopic Flickr Widget === */
	class Biopic_Flickr_Gallery_Widget extends WP_Widget {
		
		function Biopic_Flickr_Gallery_Widget() {
			$widget_ops = array(
				'classname' => 'flickr-gallery-widget',
				'description' => __('Shows flickr photo stream for a given stream id in widgetized area', 'biopic')
			);
			
			$control_ops = array(
				'id_base' => 'biopic-flickr-gallery'
			);
			
			$this->WP_Widget('biopic-flickr-gallery', __('Biopic Flickr Photo Stream', 'biopic'), $widget_ops, $control_ops);
		}
		
		function form($instance) {
			$defaults = array('title' => __('Flickr Gallery', 'biopic'), 'flickrid' => '', 'streamtype' => 'user', 'displaytype' => 'latest', 'numthumbs' => '9', 'linktext' => __('view flickr gallery', 'biopic'));
			$instance = wp_parse_args( (array) $instance, $defaults );
?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'biopic'); ?></label>
                <input name="<?php echo $this->get_field_name('title') ?>" id="<?php echo $this->get_field_id('title') ?> " value="<?php echo $instance['title'] ?>" class="widefat">
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id('flickrid'); ?>"><?php _e('Flickr ID:', 'biopic'); ?></label>
                <input name="<?php echo $this->get_field_name('flickrid') ?>" id="<?php echo $this->get_field_id('flickrid') ?> " value="<?php echo $instance['flickrid'] ?>" class="widefat">
            </p>
            
            <p>
            	<label for="<?php echo $this->get_field_id('streamtype'); ?>"><?php _e('Stream Type (user or group):', 'biopic'); ?></label>
                <select id="<?php echo $this->get_field_id('streamtype'); ?>" name="<?php echo $this->get_field_name('streamtype'); ?>" class="widefat">
                    <option <?php if ( 'user' == $instance['streamtype'] ) echo 'selected="selected"'; ?>>user</option>
                    <option <?php if ( 'group' == $instance['streamtype'] ) echo 'selected="selected"'; ?>>group</option>
                </select>
            </p>
            
            <p>
            	<label for="<?php echo $this->get_field_id('displaytype'); ?>"><?php _e('Display Type (latest or random):', 'biopic'); ?></label>
                <select id="<?php echo $this->get_field_id('displaytype'); ?>" name="<?php echo $this->get_field_name('displaytype'); ?>" class="widefat">
                    <option <?php if ( 'latest' == $instance['displaytype'] ) echo 'selected="selected"'; ?>>latest</option>
                    <option <?php if ( 'random' == $instance['displaytype'] ) echo 'selected="selected"'; ?>>random</option>
                </select>
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id('numthumbs'); ?>"><?php _e('Number of Thumbs to Show:', 'biopic'); ?></label>
                <input name="<?php echo $this->get_field_name('numthumbs') ?>" id="<?php echo $this->get_field_id('numthumbs') ?> " value="<?php echo $instance['numthumbs'] ?>" class="widefat">
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id('linktext'); ?>"><?php _e('Link Text e.g. view flickr gallery:', 'biopic'); ?></label>
                <input name="<?php echo $this->get_field_name('linktext') ?>" id="<?php echo $this->get_field_id('linktext') ?> " value="<?php echo $instance['linktext'] ?>" class="widefat">
            </p>
<?php
		}
		
		// used when the user saves their widget options
		function update($new_instance, $old_instance) {
			$instance = $old_instance;
			
			$instance['title'] = $new_instance['title'];
			$instance['flickrid'] = $new_instance['flickrid'];
			$instance['streamtype'] = $new_instance['streamtype'];
			$instance['displaytype'] = $new_instance['displaytype'];
			$instance['numthumbs'] = $new_instance['numthumbs'];
			$instance['linktext'] = $new_instance['linktext'];
			
			return $instance;
		}
		
		function widget($args, $instance) {
			extract($args);
			
			$title = $instance['title'];
			$flickrid = $instance['flickrid'];
			$streamtype = $instance['streamtype'];
			$displaytype = $instance['displaytype'];
			$numthumbs = $instance['numthumbs'];
			$linktext = $instance['linktext'];
			
			if ($flickrid != '') {
				$script = '<script>
					function loadFlickrStream() {
						jQuery(document).ready(function($) {
							if($(".flickr-gallery-widget").length != 0) {
								$.ajaxSetup({cache: true});
								$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id='.$flickrid.'&lang=en-us&format=json&jsoncallback=?", function(data) {
									$(".flickr-gallery-widget").append("<ul></ul>");
									
									$counter = 0;
									$.each(data.items, function(index, item) {
										if (++$counter > '.$numthumbs.') {
											return false;
										}
										$(".flickr-gallery-widget > ul").append(\'<li><div class="flickr-thumb"><a href="\' + item.link + \'"><img src="\' + item.media.m + \'" width="50" height="50" alt=""/></a></div></li>\');
									});';
									if ($linktext) {
										$script .= '$(".flickr-gallery-widget").append(\'<div><a class="more-link2" href="http://flickr.com/photos/'.$flickrid.'">'.$linktext.'</a></div>\');';
									}
								$script .= '});
							}
						});
					}
					
					addLoadEvent(loadFlickrStream);
				</script>';
				
				$out = '<div id="flickr-badges-wrapper" class="clearfix"><script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count='.$numthumbs.'&display='.$displaytype.'&size=s&layout=x&source='.$streamtype.'&'.$streamtype.'='.$flickrid.'"></script></div>';
				
				if ($linktext) {
					$out .= '<div><a class="more-link2" href="http://flickr.com/photos/'.$flickrid.'">'.$linktext.'</a></div>';
				}
				
				//echo $script;
				echo $before_widget;
				echo $before_title.$title.$after_title;
				echo $out;
				echo $after_widget;
			}
			else {
				_e('First specify the flickr id in the widget settings.', 'biopic');	
			}
		}
    
	}
	
	function register_biopic_flickr_gallery_widget() {
		register_widget('Biopic_Flickr_Gallery_Widget');
	}
	add_action('widgets_init', 'register_biopic_flickr_gallery_widget');
?>
<?php
	/* === Biopic Recent Work Widget === */
	class Biopic_Recent_Work_Widget extends WP_Widget {
	
		function Biopic_Recent_Work_Widget() {
			$widget_ops = array(
				'classname' => 'recent-work-widget',
				'description' => __('Shows most recent work', 'biopic')
			);
			
			$control_ops = array(
				'id_base' => 'biopic-recent-work'
			);
			
			$this->WP_Widget('biopic-recent-work', __('Biopic Recent Work', 'biopic'), $widget_ops, $control_ops);
		}
		
		function form($instance) {
			//$defaults = array('numberitems' => '6', 'linktext' => __('see portfolio', 'biopic'));
			$defaults = array('numberitems' => '6');
			$instance = wp_parse_args( (array) $instance, $defaults );
?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'biopic'); ?></label>
                <input name="<?php echo $this->get_field_name('title') ?>" id="<?php echo $this->get_field_id('title') ?> " value="<?php echo $instance['title'] ?>" class="widefat">
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id('pageid'); ?>"><?php _e('Portfolio Page:', 'biopic'); ?></label>
                <?php wp_dropdown_pages('name='.$this->get_field_name('pageid').'&selected='.$instance['pageid']); ?>
            </p>
            
            <p>
                <label for="<?php echo $this->get_field_id('numberposts'); ?>"><?php _e('Number of Projects:', 'biopic'); ?></label>
                <select id="<?php echo $this->get_field_id('numberposts'); ?>" name="<?php echo $this->get_field_name('numberposts'); ?>" class="widefat">
                    <?php
                        for ($i=1; $i <= 20; $i++) {
                            echo '<option value="'.$i.'"';
                            
                            if ($i == $instance['numberposts']) {
                                echo ' selected="selected"';
                            }
                            
                            echo '>'.$i.'</option>';
                        }
                    ?>
                </select>
            </p>
            
            <?php /*?><p>
                <label for="<?php echo $this->get_field_id('linktext'); ?>"><?php _e('Link Text e.g. see portfolio', 'biopic'); ?></label>
                <input name="<?php echo $this->get_field_name('linktext') ?>" id="<?php echo $this->get_field_id('linktext') ?> " value="<?php echo $instance['linktext'] ?>" class="widefat">
            </p><?php */?>
            
<?php
		}
		
		// used when the user saves their widget options
		function update($new_instance, $old_instance) {
			$instance = $old_instance;
			
			$instance['title'] = $new_instance['title'];
			$instance['pageid'] = $new_instance['pageid'];
			$instance['numberposts'] = $new_instance['numberposts'];
			//$instance['linktext'] = $new_instance['linktext'];
			
			return $instance;
		}
		
		function widget($args, $instance) {
			extract($args);
			
			$title = $instance['title'];
			$pageid = $instance['pageid'];
			$numberposts = $instance['numberposts'];
			//$linktext = $instance['linktext'];
			
			//wp_reset_query();
			
			global $wpdb;
			$posts = get_posts('post_type=biopic_work&numberposts='.$numberposts);
			
			$out = '<ul class="clearfix">';
			foreach($posts as $post) {
				$out .= '<li>';
				$full_size_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
				$out .= '<div class="post-thumb"><a href="'.$full_size_image[0].'" rel="prettyPhoto[biopic_recent_work_gal]">'.get_the_post_thumbnail($post->ID, 'biopic-work-thumbnail-small').'</a></div>';
				$out .= '</li>';
			}
			$out .= '</ul>';
			
			/*if ($linktext) {
				$out .= '<div><a class="more-link2" href="'.get_permalink($pageid).'">'.$linktext.'</a></div>';
			}*/
			
			echo $before_widget;
			echo $before_title.$title.$after_title;
			echo $out;
			echo $after_widget;
		}
    	
	}
	
	function register_biopic_recent_work_widget() {
		register_widget('Biopic_Recent_Work_Widget');
	}
	add_action('widgets_init', 'register_biopic_recent_work_widget');
?>