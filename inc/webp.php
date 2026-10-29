<?php

/**
 * WebP copies of JPEG/PNG images.
 *
 * Every image gets a sibling file with ".webp" appended (photo.jpg ->
 * photo.jpg.webp). wp-content/.htaccess serves that file instead of the
 * original to browsers that accept WebP, so no template or database URL has
 * to change and older browsers still receive the original.
 *
 * @package ozlandcare
 */

/**
 * Write a WebP copy next to a JPEG or PNG file.
 *
 * The copy is skipped (and any stale one removed) when it would not be smaller
 * than the original, so the server only ever swaps in a lighter file.
 *
 * @param string $path    Absolute path to the source image.
 * @param int    $quality WebP quality, 0-100.
 * @return bool True when a WebP copy exists after the call.
 */
function ozlandcare_make_webp($path, $quality = 80)
{
	if (! function_exists('imagewebp') || ! is_file($path)) {
		return false;
	}

	$webp_path = $path . '.webp';
	if (is_file($webp_path) && filemtime($webp_path) >= filemtime($path)) {
		return true;
	}

	$extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
	if (in_array($extension, array('jpg', 'jpeg'), true)) {
		$image = @imagecreatefromjpeg($path);
	} elseif ('png' === $extension) {
		$image = @imagecreatefrompng($path);
		if ($image) {
			// Palette PNGs must be true colour for WebP, and alpha has to be kept.
			imagepalettetotruecolor($image);
			imagealphablending($image, true);
			imagesavealpha($image, true);
		}
	} else {
		return false;
	}

	if (! $image) {
		return false;
	}

	$written = imagewebp($image, $webp_path, $quality);
	imagedestroy($image);

	if (! $written || ! is_file($webp_path)) {
		return false;
	}

	clearstatcache(true, $webp_path);
	if (filesize($webp_path) >= filesize($path)) {
		wp_delete_file($webp_path);
		return false;
	}

	return true;
}

/**
 * Create WebP copies of a new upload and all of its generated sizes.
 */
function ozlandcare_webp_for_attachment($metadata, $attachment_id)
{
	$file = get_attached_file($attachment_id);
	if (! $file || ! preg_match('/\.(jpe?g|png)$/i', $file)) {
		return $metadata;
	}

	ozlandcare_make_webp($file);

	// Big uploads keep their untouched original alongside the "-scaled" file.
	if (! empty($metadata['original_image'])) {
		ozlandcare_make_webp(path_join(dirname($file), $metadata['original_image']));
	}

	if (! empty($metadata['sizes'])) {
		foreach ($metadata['sizes'] as $size) {
			ozlandcare_make_webp(path_join(dirname($file), $size['file']));
		}
	}

	return $metadata;
}
add_filter('wp_generate_attachment_metadata', 'ozlandcare_webp_for_attachment', 20, 2);

/**
 * Remove the WebP copy whenever WordPress deletes an image file.
 */
function ozlandcare_delete_webp_copy($file)
{
	if (preg_match('/\.(jpe?g|png)$/i', $file) && is_file($file . '.webp')) {
		@unlink($file . '.webp');
	}

	return $file;
}
add_filter('wp_delete_file', 'ozlandcare_delete_webp_copy');
