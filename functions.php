<?php

/**
 * ozlandcare functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ozlandcare
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ozlandcare_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ozlandcare, use a find and replace
		* to change 'ozlandcare' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('ozlandcare', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary_menu' => esc_html__('Primary', 'ozlandcare'),
			'quick-links' => esc_html__('Quick Links', 'ozlandcare'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ozlandcare_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'ozlandcare_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ozlandcare_content_width()
{
	$GLOBALS['content_width'] = apply_filters('ozlandcare_content_width', 640);
}
add_action('after_setup_theme', 'ozlandcare_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ozlandcare_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'ozlandcare'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'ozlandcare'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'ozlandcare_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ozlandcare_scripts()
{
	wp_enqueue_style('ozlandcare-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('ozlandcare-style', 'rtl', 'replace');

	wp_enqueue_script('ozlandcare-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'ozlandcare_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Menu function 
function cloudo_register_menus()
{
	register_nav_menus(array(
		'primary_menu' => __('Primary Menu', 'cloudo'),
	));
}
add_action('after_setup_theme', 'cloudo_register_menus');


// Custom logo support
function ozlandcare_theme_setup()
{

	add_theme_support('title-tag');

	add_theme_support('custom-logo', array(
		'height'      => 80,
		'width'       => 250,
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme', 'ozlandcare_theme_setup');


function ozlandcare_add_menu_link_class($atts, $item, $args)
{
	if (isset($args->link_class)) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'ozlandcare_add_menu_link_class', 10, 3);



// 1. Add the Meta Box to Pages/Posts
add_action('add_meta_boxes', 'chitambo_add_banner_meta_box');

function chitambo_add_banner_meta_box()
{
	$post_types = array('page', 'post');

	foreach ($post_types as $post_type) {
		add_meta_box(
			'banner_image_meta',
			'Custom Banner',
			'chitambo_banner_meta_callback',
			$post_type,
			'side',
			'default'
		);
	}
}

// 2. Render the Upload Field UI
function chitambo_banner_meta_callback($post)
{
	$banner_id = get_post_meta($post->ID, '_custom_banner_id', true);
	$image_url = $banner_id ? wp_get_attachment_url($banner_id) : '';
?>
	<div id="banner-preview" style="margin-bottom:10px;">
		<?php if ($image_url): ?><img src="<?php echo $image_url; ?>" style="max-width:100%; height:auto; border-radius:8px;"><?php endif; ?>
	</div>
	<input type="hidden" name="custom_banner_id" id="custom_banner_id" value="<?php echo $banner_id; ?>">
	<button type="button" class="button custom-banner-upload">Upload Banner</button>
	<button type="button" class="button custom-banner-remove" style="<?php echo !$banner_id ? 'display:none;' : ''; ?>">Remove</button>

	<script>
		jQuery(document).ready(function($) {
			var frame;
			$('.custom-banner-upload').on('click', function(e) {
				e.preventDefault();
				if (frame) {
					frame.open();
					return;
				}
				frame = wp.media({
					title: 'Select Banner',
					button: {
						text: 'Use this banner'
					},
					multiple: false
				});
				frame.on('select', function() {
					var attachment = frame.state().get('selection').first().toJSON();
					$('#custom_banner_id').val(attachment.id);
					$('#banner-preview').html('<img src="' + attachment.url + '" style="max-width:100%; height:auto; border-radius:8px;">');
					$('.custom-banner-remove').show();
				});
				frame.open();
			});
			$('.custom-banner-remove').on('click', function() {
				$('#custom_banner_id').val('');
				$('#banner-preview').empty();
				$(this).hide();
			});
		});
	</script>
<?php
}

// 3. Save the Data
add_action('save_post', 'chitambo_save_banner_meta');
function chitambo_save_banner_meta($post_id)
{
	if (isset($_POST['custom_banner_id'])) {
		update_post_meta($post_id, '_custom_banner_id', sanitize_text_field($_POST['custom_banner_id']));
	}
}






/**
 * Return the image data used by the internal-page banner.
 */
function ozlandcare_get_banner_image_data()
{
	$banner_id = (int) get_post_meta(get_queried_object_id(), '_custom_banner_id', true);

	if ($banner_id) {
		// The original uploads can be close to 1 MB even when the generated
		// 1536px version is only about 200 KB. A banner does not need the original
		// file, so cap the responsive candidates to keep high-DPI screens from
		// selecting it and delaying the page's largest visual element.
		$image_size = '1536x1536';
		$image_url = wp_get_attachment_image_url($banner_id, $image_size);
		$srcset = wp_get_attachment_image_srcset($banner_id, $image_size);

		if ($srcset) {
			$candidates = array_filter(array_map('trim', explode(',', $srcset)), function ($candidate) {
				return preg_match('/\s(\d+)w$/', $candidate, $matches) && (int) $matches[1] <= 1536;
			});
			$srcset = implode(', ', $candidates);
		}

		return array(
			'id'     => $banner_id,
			'url'    => $image_url ?: wp_get_attachment_image_url($banner_id, 'full'),
			'srcset' => $srcset,
		);
	}

	// The previous fallback path did not exist. Keep a real theme image available
	// for pages that have not been assigned a custom banner.
	return array(
		'id'     => 0,
		'url'    => get_template_directory_uri() . '/assets/images/slider/slide-image-1.jpg',
		'srcset' => '',
	);
}

/**
 * Build a small inline preview from WordPress's existing medium image.
 *
 * This is shown behind the full banner during its download and decode, avoiding
 * a grey/blank flash without adding another network request.
 */
function ozlandcare_get_banner_placeholder($attachment_id)
{
	$attachment_id = (int) $attachment_id;
	if (! $attachment_id) {
		return '';
	}

	// Reading and base64-encoding the file on every page view is wasted work:
	// the result only changes when the attachment is replaced. An empty string
	// is cached too, so unusable attachments are not re-checked each request.
	$cache_key = 'ozlandcare_banner_ph_' . $attachment_id;
	$cached = get_transient($cache_key);
	if (false !== $cached) {
		return $cached;
	}

	$data_uri = ozlandcare_build_banner_placeholder($attachment_id);
	set_transient($cache_key, $data_uri, WEEK_IN_SECONDS);

	return $data_uri;
}

/**
 * Read the medium file for an attachment and return it as a data URI.
 */
function ozlandcare_build_banner_placeholder($attachment_id)
{
	$medium = image_get_intermediate_size($attachment_id, 'medium');
	$original_path = get_attached_file($attachment_id);

	if (! $medium || ! $original_path || empty($medium['file'])) {
		return '';
	}

	$placeholder_path = trailingslashit(dirname($original_path)) . $medium['file'];
	if (! is_readable($placeholder_path) || filesize($placeholder_path) > 65536) {
		return '';
	}

	$image_bytes = file_get_contents($placeholder_path);
	if (false === $image_bytes) {
		return '';
	}

	$file_type = wp_check_filetype($placeholder_path);
	$mime_type = ! empty($file_type['type']) ? $file_type['type'] : 'image/jpeg';

	return 'data:' . $mime_type . ';base64,' . base64_encode($image_bytes);
}

/**
 * Drop a cached placeholder when its attachment is regenerated or deleted.
 */
function ozlandcare_flush_banner_placeholder_cache($attachment_id)
{
	delete_transient('ozlandcare_banner_ph_' . (int) $attachment_id);
}
add_action('delete_attachment', 'ozlandcare_flush_banner_placeholder_cache');
add_action('edit_attachment', 'ozlandcare_flush_banner_placeholder_cache');

/**
 * Output the above-the-fold image preload before render-blocking third-party
 * scripts. Called directly near the top of header.php.
 */
function ozlandcare_output_critical_image_preload()
{
	static $preload_output = false;

	if ($preload_output || is_404() || is_page_template('page-incident-report.php')) {
		return;
	}
	$preload_output = true;

	if (is_front_page() || is_home()) {
		$desktop_image = get_template_directory_uri() . '/assets/images/slider/slide-image-1.jpg';
		$mobile_image = get_template_directory_uri() . '/assets/images/slider/mobile-slide-1.jpg';

		echo '<link rel="preload" as="image" href="' . esc_url($desktop_image) . '" media="(min-width: 1025px)" fetchpriority="high">' . "\n";
		echo '<link rel="preload" as="image" href="' . esc_url($mobile_image) . '" media="(max-width: 1024px)" fetchpriority="high">' . "\n";
		return;
	}

	$banner = ozlandcare_get_banner_image_data();
	if (empty($banner['url'])) {
		return;
	}

	echo '<link rel="preload" as="image" href="' . esc_url($banner['url']) . '"';
	if (! empty($banner['srcset'])) {
		echo ' imagesrcset="' . esc_attr($banner['srcset']) . '" imagesizes="100vw"';
	}
	echo ' fetchpriority="high">' . "\n";
}

require_once get_template_directory() . '/inc/critical-css.php';
require_once get_template_directory() . '/inc/referral-cf7.php';
require_once get_template_directory() . '/inc/contact-cf7.php';
require_once get_template_directory() . '/inc/feedback-cf7.php';
require_once get_template_directory() . '/inc/incident-report-cf7.php';
