<?php
	// load translation text domain
	load_theme_textdomain('biopic');
	
	// register custom menu
	function register_biopic_menus() {
		register_nav_menus(
			array(
				'biopic-main-menu' => __('Biopic Main Menu', 'biopic')
			)
		);
	}
	add_action( 'init', 'register_biopic_menus' );
	
	
	// register sidebars
	register_sidebar(array(
		'name' => __('Profile Sidebar', 'biopic'),
		'id'   => 'profile-sidebar',
		'description'   => __('Sidebar for profile page', 'biopic'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>'
	));
	
	register_sidebar(array(
		'name' => __('Blog Sidebar', 'biopic'),
		'id'   => 'blog-sidebar',
		'description'   => __('Sidebar for blog page', 'biopic'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>'
	));
	
	register_sidebar(array(
		'name' => __('Contact Sidebar', 'biopic'),
		'id'   => 'contact-sidebar',
		'description'   => __('Sidebar for contact page', 'biopic'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>'
	));
	
	register_sidebar(array(
		'name' => __('Header Widget Area', 'biopic'),
		'id'   => 'header-widget-area',
		'description'   => __('Widget area at the top left header', 'biopic'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>'
	));
	
	register_sidebar(array(
		'name' => __('Footer Widget Area', 'biopic'),
		'id'   => 'footer-widget-area',
		'description'   => __('Widget area at the bottom', 'biopic'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>'
	));
	
	// setup various theme features
	function biopic_theme_setup() {
		add_theme_support('post-thumbnails', array('post', 'page', 'biopic_work'));
		add_image_size('biopic-work-thumbnail', 210, 160, true);
		add_image_size('biopic-work-thumbnail-small', 50, 50, true);
		add_image_size('biopic-post-thumbnail', 480, 80, true);
		add_image_size('biopic-post-thumbnail-fw', 690, 115, true);
		
		// default post thumbnail size with crop mode
		set_post_thumbnail_size(480, 80, true);
		
		// enable only image and video post formats
		// you can read more about post formats at http://codex.wordpress.org/Post_Formats
		add_theme_support('post-formats', array('image', 'video'));
	}
	add_action('after_setup_theme', 'biopic_theme_setup');
	
	function biopic_wp_scripts() {
		wp_enqueue_style('style', get_template_directory_uri().'/style.css');
		wp_enqueue_style('base', get_template_directory_uri().'/stylesheets/base.css');
		wp_enqueue_style('layout', get_template_directory_uri().'/stylesheets/layout.css');
		wp_enqueue_style('themeskin', get_template_directory_uri().'/stylesheets/theme.css');
		wp_enqueue_style('prettyPhoto', get_template_directory_uri().'/stylesheets/prettyPhoto.css');
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('tabs', get_template_directory_uri().'/javascripts/tabs.js');
		wp_enqueue_script('gmap', get_template_directory_uri().'/javascripts/jquery.gmap.min.js');
		wp_enqueue_script('fitvids', get_template_directory_uri().'/javascripts/jquery.fitvids.js');
		wp_enqueue_script('easingjs', get_template_directory_uri().'/javascripts/jquery.easing.1.3.js');
		wp_enqueue_script('prettyPhotojs', get_template_directory_uri().'/javascripts/jquery.prettyPhoto.js');
		wp_enqueue_script('placeholder', get_template_directory_uri().'/javascripts/jquery.placeholder.min.js');
		wp_enqueue_script('biopicfunctions', get_template_directory_uri().'/javascripts/biopic-functions.js');
		
		//loads comment reply JS on single posts
		if ( is_singular() && comments_open() && get_option('thread_comments') ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action('wp_enqueue_scripts', 'biopic_wp_scripts');
	
?>
<?php
	// Add specific CSS class by filter
	add_filter('body_class','body_class_handler');
	function body_class_handler($classes) {
		/*global $wp_query;
		if (is_front_page() ) {
			//$classes[] = 'home';
		} elseif (is_page()) {
		  $classes[] = $wp_query->query_vars["pagename"];
		}
		
		return $classes;*/
		
		// List of the only WP generated classes that are not allowed
		if (is_front_page() ) {
    		$blacklist = array('blog');
			$classes = array_diff($classes, $blacklist);
			$classes[] = 'profile';
		}
		
		if ((is_category() || is_single() || is_archive()) && get_post_type() == 'post') {
			$classes[] = 'blog';
		}
		
		if (get_post_type() == 'biopic_work') {
				$classes[] = 'portfolio';
		}
		
		return $classes;
	}
	
	
	function parse_shortcode_content( $content ) {
	   /* Parse nested shortcodes and add formatting. */
		$content = trim( do_shortcode( shortcode_unautop( $content ) ) );
		
		/* Remove '' from the start of the string. */
		if ( substr( $content, 0, 4 ) == '' ) {
			$content = substr( $content, 4 );
		}
		
		/* Remove '' from the end of the string. */
		if ( substr( $content, -3, 3 ) == '' ) {
			$content = substr( $content, 0, -3 );
		}
		
		/* Remove any instances of ''. */
		$content = str_replace( array( '<p></p>' ), '', $content );
		$content = str_replace( array( '<p>  </p>' ), '', $content );
		
		return $content;
	}
	
	//move wpautop filter to AFTER shortcode is processed
	remove_filter('the_content', 'wpautop');
	add_filter('the_content', 'wpautop' , 99);
	add_filter('the_content', 'shortcode_unautop',100);
?>
<?php
	// biopic_work custom post type
	function register_biopic_works_post_type() {
		$labels = array(
			'name' => _x('Works', 'post type general name', 'biopic'),
			'singular_name' => _x('Work', 'post type singular name', 'biopic'),
			'add_new' => _x('Add New', 'Work', 'biopic'),
			'add_new_item' => __('Add New Work', 'biopic'),
			'edit_item' => __('Edit Work', 'biopic'),
			'new_item' => __('New Work', 'biopic'),
			'view_item' => __('View Work', 'biopic'),
			'search_items' => __('Search Works', 'biopic'),
			'not_found' =>  __('Nothing found', 'biopic'),
			'not_found_in_trash' => __('Nothing found in Trash', 'biopic')
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'hierarchical' => false,
			'capability_type' => 'post',
			'menu_position' => 5,
			'has_archive' => 'true',
			'rewrite' => array('slug' => 'works'),
			'supports' => array('title', 'editor', 'comments', 'thumbnail', 'post-formats', 'excerpt', 'custom-fields'),
		);
		register_post_type('biopic_work', $args);
	}
	add_action('init', 'register_biopic_works_post_type', 1);
	
	// skills taxonomy for custom post type work
	function create_work_taxonomies() {
		$labels = array(
			'name' => _x('Skills', 'taxonomy general name', 'biopic'),
			'singular_name' => _x('Skill', 'taxonomy singular name', 'biopic'),
			'search_items' =>  __('Search Skills', 'biopic'),
			'all_items' => __('All Skills', 'biopic'),
			'parent_item' => __('Parent Skill', 'biopic'),
			'parent_item_colon' => __('Parent Skill:', 'biopic'),
			'edit_item' => __('Edit Skill', 'biopic'),
			'update_item' => __('Update Skill', 'biopic'),
			'add_new_item' => __('Add New Skill', 'biopic'),
			'new_item_name' => __('New Skill Name', 'biopic'),
		);
		
		register_taxonomy(
			'skills',
			array('biopic_work'),
			array(
				'hierarchical' => true,
				'rewrite' => array(
					'slug' => 'skill',
					'hierarchical' => true
				),
				'labels' => $labels
			)
		);
	}
	add_action('init', 'create_work_taxonomies', 2);
?>
<?php
	// work custom meta box
	add_action("add_meta_boxes", "add_work_meta_box");
	add_action('save_post', 'update_work_meta_box');
	
	function add_work_meta_box(){
		add_meta_box("work_meta_box_details", __('Work Options', 'biopic'), "work_meta_box_options", "biopic_work", "normal", "low");
	}
	
	function work_meta_box_options() {
		global $post;
		$custom = get_post_custom($post->ID);
		$work_video_url = $custom["work_video_url"][0];
		$work_external_url = $custom["work_external_url"][0];
?>
        <div id="work-options">
        	<p>
                <label for="work_video_url"><?php _e('Video URL:', 'biopic'); ?></label>
                <input name="work_video_url" id="work_video_url" value="<?php echo $work_video_url?>" style="width:98%;"/>
			</p>
            <p>
                <label for="work_external_url"><?php _e('Link Title to External URL:', 'biopic'); ?></label>
                <input name="work_external_url" id="work_external_url" value="<?php echo $work_external_url?>" style="width:98%;"/>
			</p>
        </div>
<?php
	}
	function update_work_meta_box() {
		global $post;
		if ($post) {
			update_post_meta($post->ID, "work_video_url", $_POST["work_video_url"]);
			update_post_meta($post->ID, "work_external_url", $_POST["work_external_url"]);
		}
	} // post custom meta box end
?>
<?php /*?><?php
	add_action("admin_init", "add_page_meta");
	add_action('save_post', 'update_page_meta');
	
	function add_page_meta(){
		add_meta_box("page_details", "Page Options", "page_options", "page", "normal", "low");
	}
	
	// enqueues scripts
	function biopic_admin_scripts() {
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_register_script('my-upload', get_template_directory_uri().'/javascripts/uploader-script.js', array('jquery', 'media-upload', 'thickbox'));
		wp_enqueue_script('my-upload');
	}
	
	// enqueues styles
	function biopic_admin_styles() {
		wp_enqueue_style('thickbox');
	}
	
	//enqueue script and styles
	add_action('admin_print_scripts', 'biopic_admin_scripts');
	add_action('admin_print_styles', 'biopic_admin_styles');
	
	function page_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$menu_icon = $custom["menu_icon"][0];
		$menu_active_icon = $custom["menu_active_icon"][0];
?>
        <div id="page-options">
        	<p>
                <label for="menu_icon"><?php _e('Menu Icon:', 'biopic') ?></label>
                <input id="menu_icon" type="text" name="menu_icon" value="<?php echo $menu_icon; ?>" style="width:100%" />
                <input id="upload_image_button" type="button" value="<?php _e('Upload Icon', 'biopic'); ?>" class="upload_image_button" />
            </p>
            <p>
                <label for="menu_active_icon"><?php _e('Menu Active Icon:', 'biopic') ?></label>
                <input id="menu_active_icon" type="text" name="menu_active_icon" value="<?php echo $menu_active_icon; ?>" style="width:100%" />
                <input id="upload_image_button" type="button" value="<?php _e('Upload Active Icon', 'biopic'); ?>" class="upload_image_button" />
            </p>
        </div>
<?php
	}
	function update_page_meta(){
		global $post;
		update_post_meta($post->ID, "menu_icon", $_POST["menu_icon"]);
		update_post_meta($post->ID, "menu_active_icon", $_POST["menu_active_icon"]);
	}
?><?php */?>
<?php
	// post custom meta box
	add_action("add_meta_boxes", "add_post_meta_box");
	add_action('save_post', 'update_post_meta_box');
	
	function add_post_meta_box(){
		add_meta_box("post_meta_box_details", __('Post Options', 'biopic'), "post_meta_box_options", "post", "normal", "low");
	}
	
	function post_meta_box_options() {
		global $post;
		$custom = get_post_custom($post->ID);
		$post_video_id = $custom["post_video_id"][0];
		$post_video_type = $custom["post_video_type"][0];
?>
        <div id="post-options">
        	<p>
                <label for="post_video_id"><?php _e('Video ID:', 'biopic'); ?></label>
                <input name="post_video_id" id="post_video_id" value="<?php echo $post_video_id?>" style="width:98%;"/>
			</p>
        	<p>
                <label for="post_video_type"><?php _e('Video Type:', 'biopic'); ?></label>
                <label style="display:block;"><input name="post_video_type" type="radio" value="youtube"<?php if ($post_video_type == 'youtube') { echo ' checked="checked"'; }?> /><?php _e('Youtube', 'biopic'); ?></label>
                <label style="display:block;"><input name="post_video_type" type="radio" value="vimeo"<?php if ($post_video_type == 'vimeo') { echo ' checked="checked"'; }?> /><?php _e('Vimeo', 'biopic'); ?></label>
			</p>
        </div>
<?php
	}
	function update_post_meta_box() {
		global $post;
		if ($post) {
			update_post_meta($post->ID, "post_video_id", $_POST["post_video_id"]);
			update_post_meta($post->ID, "post_video_type", $_POST["post_video_type"]);
		}
	} // post custom meta box end
?>
<?php
	// custom gravatar support
	function biopic_gravatar($avatar_defaults) {
		$biopic_avatar = get_template_directory_uri() . '/images/gravatar.png';
		$avatar_defaults[$biopic_avatar] = 'Custom Gravatar (/images/gravatar.png)';
		return $avatar_defaults;
	}
	add_filter('avatar_defaults', 'biopic_gravatar');
	
	// comment form
	function biopic_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
    <div class="commentBody" id="comment-<?php comment_ID(); ?>">
    	<div class="commentDetails">
        	<section class="commentMeta">
            	<div class="commentMetaTop clearfix">
                	<?php
                        echo get_avatar($comment, $size='40');
                    ?>
                    <span class="name"><?php echo get_comment_author_link(); ?></span><br>
                    <span class="date"><?php printf(__('%1$s', 'biopic'), get_comment_date()); ?><?php edit_comment_link(__('(Edit)', 'biopic'),' ','') ?></span>
				</div>
                <?php
					if ($comment->comment_approved == '0') {
				?>
				<p><em><?php _e('Your comment is awaiting moderation.', 'biopic'); ?></em></p>
				<?php
					}
				?>
                <section class="commentContent">
				<?php comment_text(); ?>
                </section>
                <div class="reply">
					<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                </div>
            </section>
        </div>
    </div>
<?php
	}
?>
<?php
	require_once(TEMPLATEPATH.'/includes/widgets.php');
	require_once(TEMPLATEPATH.'/includes/shortcodes.php');
	require_once(TEMPLATEPATH.'/includes/tinymce/tinymce.php');
	include_once(TEMPLATEPATH.'/includes/theme-options-page.php');
	include_once(TEMPLATEPATH.'/includes/contact-form-handler.php');
?>