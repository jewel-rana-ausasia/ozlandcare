<?php

/**
 * Critical CSS for the above-the-fold sections.
 *
 * Tailwind is loaded from cdn.tailwindcss.com, which builds its stylesheet in
 * JavaScript after the markup is parsed. Until that happens none of the utility
 * classes exist, so the hero and banner paint unstyled and then snap into place
 * once Tailwind injects its CSS - the flash ("blink") these stylesheets remove.
 * Every rule here duplicates the exact value of the utility it stands in for, so
 * the first paint is already final and Tailwind's later CSS changes nothing.
 *
 * @package ozlandcare
 */

/**
 * Print the banner's critical CSS in <head>, before the Tailwind CDN script.
 *
 * Tailwind is loaded from cdn.tailwindcss.com, which builds its stylesheet in
 * JavaScript after the markup is parsed. Until that happens the banner's
 * utility classes do not exist, so the image paints at its intrinsic size and
 * then snaps into the banner box once Tailwind's CSS is injected - the flash
 * ("blink") that this stylesheet removes. The rules below duplicate the exact
 * values of the utilities used by template-parts/content-banner.php, so the
 * first paint is already final and Tailwind's later CSS changes nothing.
 */
function ozlandcare_output_critical_banner_css()
{
	static $css_output = false;

	if ($css_output) {
		return;
	}
	$css_output = true;
?>
	<style id="ozlandcare-banner-critical">
		.content-banner-shell {
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
			overflow: hidden;
			min-height: 200px;
			background-color: #000;
			/*
			 * Keep the central subject in the right-side visual area so the
			 * left-aligned page title does not cover faces when the banner crops.
			 */
			background-position: 40% center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.content-banner-image {
			position: absolute;
			inset: 0;
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
			object-position: 40% center;
		}

		.content-banner-overlay {
			position: absolute;
			inset: 0;
			background-color: rgba(1, 34, 34, 0.3);
		}

		.content-banner-inner {
			position: relative;
			z-index: 10;
			width: 100%;
			margin-left: auto;
			margin-right: auto;
			padding-left: 1.5rem;
			padding-right: 1.5rem;
			text-align: left;
		}

		.content-banner-copy {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			max-width: 58%;
			margin-right: auto;
		}

		.content-banner-title {
			margin: 0 0 0.5rem;
			color: #fff;
			font-size: 1.25rem;
			font-weight: 900;
			letter-spacing: -0.05em;
			line-height: 1.1;
			text-align: left;
			mix-blend-mode: plus-lighter;
		}

		.content-banner-logo {
			position: absolute;
			top: 50%;
			right: 8%;
			transform: translateY(-50%) translateX(100%);
			opacity: 0;
			z-index: 50;
			animation: ozlandcareBannerLogoIn 2s ease-out 0.8s forwards;
			max-width: 300px;
			width: min(250px, 20vw);
		}

		.content-banner-logo img {
			display: block;
			width: 100%;
			height: auto;
		}

		@keyframes ozlandcareBannerLogoIn {
			from {
				transform: translateY(-50%) translateX(120%);
				opacity: 0;
			}

			to {
				transform: translateY(-50%) translateX(0);
				opacity: 1;
			}
		}

		@media (min-width: 640px) {
			.content-banner-inner {
				max-width: 640px;
				padding-left: 2.5rem;
				padding-right: 2.5rem;
			}

			.content-banner-copy {
				max-width: 52%;
			}

			.content-banner-title {
				font-size: 2.25rem;
				line-height: 1.2;
			}
		}

		@media (min-width: 768px) {
			.content-banner-shell {
				min-height: 300px;
			}

			.content-banner-inner {
				max-width: 768px;
			}

			.content-banner-title {
				font-size: 3rem;
			}
		}

		@media (min-width: 1024px) {
			.content-banner-shell {
				min-height: 400px;
			}

			.content-banner-inner {
				max-width: 1024px;
				padding-left: 5rem;
				padding-right: 5rem;
			}

			.content-banner-copy {
				max-width: 42%;
			}

			.content-banner-title {
				font-size: 3.75rem;
			}
		}

		@media (min-width: 1280px) {
			.content-banner-shell {
				min-height: 450px;
			}

			.content-banner-inner {
				max-width: 1280px;
			}
		}

		@media (min-width: 1536px) {
			.content-banner-inner {
				max-width: 1536px;
			}
		}

		/*
		 * Mobile + Tablet: keep the badge vertically centred and fully inside
		 * the banner's right edge. The old translate(50%, ...) pushed half of
		 * it past the edge, where the shell's overflow:hidden cropped it.
		 */
		@media (max-width: 1024px) {
			.content-banner-logo {
				top: 50%;
				right: 1.5rem;
				transform: translateY(-50%) translateX(120%);
				width: min(170px, 18vw);
				min-width: 90px;
				max-width: none;
				animation-name: ozlandcareBannerLogoIn;
			}
		}

		/*
		 * Below 1024px Tailwind's .container snaps to 640/768px and centres,
		 * leaving wide empty gutters on in-between widths; let the title row
		 * run full width and keep its own px-6/px-10 gutter.
		 */
		@media (max-width: 1023.98px) {
			.content-banner-shell .content-banner-inner {
				max-width: none;
			}
		}

		/*
		 * Slightly larger page titles on mobile + tablet. Two classes outrank
		 * Tailwind's text-xl / sm:text-4xl / md:text-5xl on the <h1>.
		 */
		@media (max-width: 639.98px) {
			.content-banner-shell .content-banner-title {
				font-size: 1.5rem;
			}
		}

		@media (min-width: 640px) and (max-width: 767.98px) {
			.content-banner-shell .content-banner-title {
				font-size: 2.5rem;
			}
		}

		@media (min-width: 768px) and (max-width: 1023.98px) {
			.content-banner-shell .content-banner-title {
				font-size: 3.25rem;
			}
		}

		/*
		 * Tablets 768-1023px (iPad mini/Air): a little taller than the 300px
		 * md height. The element selector outranks Tailwind's md:min-h-[300px].
		 */
		@media (min-width: 768px) and (max-width: 1023.98px) {
			section.content-banner-shell {
				min-height: 325px;
			}
		}

		@media (max-width: 640px) {
			.content-banner-logo {
				right: 1rem;
				width: min(96px, 26vw);
				min-width: 72px;
			}
		}

		@media (prefers-reduced-motion: reduce) {
			.content-banner-logo {
				animation: none;
				opacity: 1;
				transform: translateY(-50%);
			}
		}
	</style>
<?php
}

/**
 * Read a small theme image as a data URI, or return '' if it is missing.
 *
 * Used for the hero previews, which are a few KB each - small enough to inline
 * so the hero has something to paint with no extra request.
 */
function ozlandcare_inline_theme_image($relative_path)
{
	static $cache = array();

	if (isset($cache[$relative_path])) {
		return $cache[$relative_path];
	}

	$path = get_template_directory() . '/' . ltrim($relative_path, '/');
	$data_uri = '';

	if (is_readable($path) && filesize($path) <= 32768) {
		$bytes = file_get_contents($path);
		if (false !== $bytes) {
			$file_type = wp_check_filetype($path);
			$mime_type = ! empty($file_type['type']) ? $file_type['type'] : 'image/jpeg';
			$data_uri = 'data:' . $mime_type . ';base64,' . base64_encode($bytes);
		}
	}

	$cache[$relative_path] = $data_uri;

	return $data_uri;
}

/**
 * Publish the fixed header's height as a CSS variable, on every page.
 *
 * #masthead is position:fixed, so the page needs padding-top equal to its
 * height. That padding used to be applied only by JavaScript on DOMContentLoaded
 * (~1.3s after first paint locally), which dropped the whole page down once it
 * ran - most visibly under the hero, whose own height is derived from the same
 * number. The values below are the header's measured heights at each Tailwind
 * breakpoint, so the first paint already sits where the script would put it;
 * the script then keeps the variable exact as the header or viewport changes.
 */
function ozlandcare_output_critical_layout_css()
{
	static $css_output = false;

	if ($css_output) {
		return;
	}
	$css_output = true;
?>
	<style id="ozlandcare-layout-critical">
		:root {
			--site-header-height: 64px;
		}

		@media (min-width: 640px) {
			:root {
				--site-header-height: 80px;
			}
		}

		@media (min-width: 768px) {
			:root {
				--site-header-height: 120px;
			}
		}

		@media (min-width: 1024px) {
			:root {
				--site-header-height: 144px;
			}
		}

		@media (min-width: 1280px) {
			:root {
				--site-header-height: 152px;
			}
		}

		body {
			padding-top: var(--site-header-height);
		}
	</style>
<?php
}

/**
 * Print the homepage hero's critical CSS in <head>.
 *
 * Mirrors ozlandcare_output_critical_banner_css(), for content-slider.php: the
 * hero's layout comes from Tailwind utilities that do not exist at first paint,
 * so the photo, the three stacked slides and the controls all rendered in
 * normal flow and then snapped into position. Everything that decides geometry
 * or colour is therefore declared here as plain CSS.
 */
function ozlandcare_output_critical_hero_css()
{
	static $css_output = false;

	if ($css_output) {
		return;
	}
	$css_output = true;

	// Tiny previews of the first slide, painted as the shell's background so the
	// hero is never an empty black box while the full-size photo decodes.
	$desktop_preview = ozlandcare_inline_theme_image('assets/images/slider/slide-image-1-preview.jpg');
	$mobile_preview  = ozlandcare_inline_theme_image('assets/images/slider/mobile-slide-1-preview.jpg');

	if (! $desktop_preview) {
		$desktop_preview = get_template_directory_uri() . '/assets/images/slider/slide-image-1.jpg';
	}
	if (! $mobile_preview) {
		$mobile_preview = get_template_directory_uri() . '/assets/images/slider/mobile-slide-1.jpg';
	}
?>
	<style id="ozlandcare-hero-critical">
		.hero-slider-shell {
			position: relative;
			display: flex;
			align-items: center;
			overflow: hidden;
			height: calc(100vh - var(--site-header-height));
			height: calc(100dvh - var(--site-header-height));
			background-color: #000;
			background-image: url("<?php echo esc_attr($mobile_preview); ?>");
			background-position: top center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		/* Same switch as the <picture> source: portrait tablets keep the portrait photo. */
		@media (min-width: 1025px) and (orientation: landscape),
		(min-width: 1367px) {
			.hero-slider-shell {
				background-image: url("<?php echo esc_attr($desktop_preview); ?>");
			}
		}

		/* Full-bleed photo behind every slide. */
		.hero-slider-media {
			position: absolute;
			inset: 0;
			z-index: 0;
		}

		.hero-slider-media picture {
			display: block;
			width: 100%;
			height: 100%;
		}

		.hero-slider-image {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
			object-position: top;
		}

		/* Keep the main slider image at a fixed scale. */
		.ken-burns,
		.hero-slide.active .ken-burns {
			transform: none;
			transition: none;
		}

		.premium-gradient {
			position: absolute;
			inset: 0;
			background: radial-gradient(circle at 20% 50%, rgba(5, 5, 5, 0.6) 0%, rgba(5, 5, 5, 0.4) 40%, transparent 100%),
				linear-gradient(to right, rgba(5, 5, 5, 0.5) 0%, transparent 70%);
		}

		/* Grain Effect for Depth */
		.grain::after {
			content: "";
			position: absolute;
			inset: 0;
			width: 100%;
			height: 100%;
			background-image: url("https://upload.wikimedia.org/wikipedia/commons/7/76/1k_Stop_Sign_Full_Grain.png");
			opacity: 0.03;
			pointer-events: none;
			z-index: 5;
		}

		/* Professional Text Shadow */
		.text-shadow-strong {
			text-shadow:
				0 2px 8px rgba(0, 0, 0, 0.6),
				0 4px 20px rgba(0, 0, 0, 0.4);
		}

		.text-shadow-soft {
			text-shadow:
				0 1px 4px rgba(0, 0, 0, 0.4);
		}

		/* Slides are stacked on top of each other and cross-faded. */
		.hero-slide {
			position: absolute;
			inset: 0;
			display: flex;
			width: 100%;
			height: 100%;
			align-items: center;
		}

		/* Premium Motion Curves */
		.hero-slide .slide-title {
			clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
			transform: translateY(50px);
			transition: all 1.2s cubic-bezier(0.19, 1, 0.22, 1);
		}

		.hero-slide.active .slide-title {
			clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
			transform: translateY(0);
			transition-delay: 0.3s;
		}

		.hero-slide .slide-meta {
			opacity: 0;
			transform: translateX(-20px);
			transition: all 1s cubic-bezier(0.19, 1, 0.22, 1);
		}

		.hero-slide.active .slide-meta {
			opacity: 1;
			transform: translateX(0);
			transition-delay: 0.6s;
		}

		.hero-slide-inner {
			position: relative;
			z-index: 10;
			width: 100%;
			margin-left: auto;
			margin-right: auto;
			padding-left: 1.5rem;
			padding-right: 1.5rem;
		}

		.hero-slide-copy {
			max-width: 64rem;
		}

		.hero-slide-eyebrow {
			display: flex;
			align-items: center;
			gap: 1rem;
			margin-bottom: 1.5rem;
		}

		.hero-slide-rule {
			height: 1px;
			width: 2rem;
			background-color: rgba(255, 255, 255, 0.8);
		}

		.hero-slide-eyebrow-text {
			color: #fff;
			font-size: 9px;
			letter-spacing: 0.2em;
			text-transform: uppercase;
		}

		.hero-slide-title {
			margin: 0 0 2.5rem;
			color: #fff;
			font-size: 1.5rem;
			font-weight: 700;
			letter-spacing: 0.025em;
			line-height: 1.2;
			text-transform: uppercase;
		}

		.hero-slide-desc-row {
			display: none;
		}

		.hero-slide-desc {
			margin: 0;
			max-width: 42rem;
			border-left: 1px solid rgba(255, 255, 255, 0.1);
			padding-left: 1.25rem;
			color: rgba(255, 255, 255, 0.9);
			font-size: 1.125rem;
			font-weight: 300;
			line-height: 1.625;
		}

		.hero-slide-actions {
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			gap: 1rem;
		}

		.hero-btn {
			position: relative;
			display: inline-block;
			overflow: hidden;
			padding: 0.5rem 1rem;
			border: 1px solid rgba(255, 255, 255, 0.1);
			border-radius: 9999px;
			background-color: #5f2a7d;
			color: #fff;
			font-size: 8px;
			font-weight: 700;
			letter-spacing: 0.3em;
			text-transform: uppercase;
			text-decoration: none;
			transition: all 0.5s ease;
		}

		.hero-slider-nav {
			position: absolute;
			right: 1.5rem;
			bottom: 2.5rem;
			z-index: 40;
			display: flex;
			flex-direction: row;
			align-items: center;
			gap: 2.5rem;
		}

		.hero-nav-btn {
			display: flex;
			width: 2.5rem;
			height: 2.5rem;
			align-items: center;
			justify-content: center;
			border: 1px solid rgba(255, 255, 255, 0.1);
			border-radius: 9999px;
			color: #fff;
			transition: all 0.5s ease;
		}

		.slider-logo {
			position: absolute;
			top: 50%;
			right: 10%;
			transform: translateY(-50%) translateX(100%);
			opacity: 0;
			z-index: 50;
			animation: slideInFromRight 2s ease-out 0.8s forwards;
			max-width: 300px;
			width: min(250px, 20vw);
		}

		.slider-logo img {
			display: block;
			width: 100%;
			height: auto;
		}

		@keyframes slideInFromRight {
			from {
				transform: translateY(-50%) translateX(120%);
				opacity: 0;
			}

			to {
				transform: translateY(-50%) translateX(0);
				opacity: 1;
			}
		}

		@media (min-width: 640px) {
			.hero-slide-inner {
				max-width: 640px;
			}

			.hero-slide-title {
				font-size: 1.875rem;
			}

			.hero-btn {
				padding: 0.75rem 1.5rem;
			}
		}

		@media (min-width: 768px) {
			.hero-slide-inner {
				max-width: 768px;
			}

			.hero-slide-rule {
				width: 3rem;
			}

			.hero-slide-eyebrow-text {
				font-size: 0.75rem;
			}

			.hero-slide-title {
				font-size: 3rem;
			}

			.hero-slide-desc-row {
				display: flex;
				flex-direction: column;
				align-items: flex-start;
				gap: 3rem;
				margin-bottom: 3rem;
			}

			.hero-slide-desc {
				font-size: 1.25rem;
			}

			.hero-slide-actions {
				gap: 1.5rem;
			}

			.hero-btn {
				padding: 1.25rem 2.5rem;
				font-size: 10px;
			}
		}

		@media (min-width: 1024px) {
			.hero-slide-inner {
				max-width: 1024px;
				padding-left: 5rem;
				padding-right: 5rem;
			}

			.hero-slide-title {
				font-size: 4.5rem;
			}

			.hero-slide-desc-row {
				flex-direction: row;
			}

			.hero-slider-nav {
				right: 5rem;
				left: auto;
				flex-direction: column;
			}

			.hero-nav-btn {
				width: 3.5rem;
				height: 3.5rem;
			}
		}

		/*
		 * Desktop: line the slide copy up with the header bar, which uses the
		 * same 1280px / 1536px container with a 1rem gutter. Two classes
		 * outrank Tailwind's lg:px-20 on the element.
		 */
		@media (min-width: 1280px) {
			.hero-slide-inner {
				max-width: 1280px;
			}

			.hero-slider-shell .hero-slide-inner {
				padding-left: 1rem;
				padding-right: 1rem;
			}
		}

		@media (min-width: 1536px) {
			.hero-slide-inner {
				max-width: 1536px;
			}
		}

		/*
		 * Mobile + Tablet: anchor the badge bottom-right, just above the slider
		 * controls, and slide it in horizontally only. The old
		 * translate(50%, ...) pushed half of the badge past the right edge,
		 * where the shell's overflow:hidden cropped it.
		 */
		@media (max-width: 1024px) {
			.slider-logo {
				top: auto;
				right: 1.5rem;
				bottom: 6.5rem;
				transform: translateX(120%);
				width: min(160px, 18vw, 22vh);
				min-width: 72px;
				max-width: none;
				animation-name: slideInFromRightNarrow;
			}
		}

		/*
		 * Top level rather than inside a media query, so the portrait-tablet
		 * block below (wider than 1024px) can use it too.
		 */
		@keyframes slideInFromRightNarrow {
			from {
				transform: translateX(120%);
				opacity: 0;
			}

			to {
				transform: translateX(0);
				opacity: 1;
			}
		}

		/*
		 * Portrait tablets 1024-1366px wide (iPad Pro, iPad Pro 13"): use the
		 * same layout as iPad mini instead of the desktop one. Tailwind's lg:
		 * utilities match here too, so each selector carries two classes to
		 * outrank them. Landscape and desktop screens never match this block.
		 */
		@media (min-width: 1024px) and (max-width: 1366px) and (orientation: portrait) {
			.hero-slider-shell .hero-slide-inner {
				max-width: none;
				padding-left: 2.5rem;
				padding-right: 2.5rem;
			}

			.hero-slider-shell .hero-slide-title {
				font-size: 3.5rem;
			}

			.hero-slider-shell .hero-slide-desc-row {
				flex-direction: column;
			}

			.hero-slider-shell .hero-slider-nav {
				left: auto;
				right: 2.5rem;
				bottom: 2.5rem;
				flex-direction: row;
			}

			.hero-slider-nav .hero-slider-scroll {
				margin-bottom: 0;
				transform: none;
			}

			.hero-slider-nav .hero-slider-progress {
				display: none;
			}

			.hero-slider-nav .hero-slider-arrows {
				flex-direction: row;
			}

			.hero-slider-nav .hero-nav-btn {
				width: 2.5rem;
				height: 2.5rem;
			}

			.hero-slider-shell .slider-logo {
				top: auto;
				right: 2.5rem;
				bottom: 8.5rem;
				transform: translateX(120%);
				width: min(200px, 22vh);
				max-width: none;
				animation-name: slideInFromRightNarrow;
			}
		}

		/*
		 * Tablets 641-1023px (iPad mini/Air, Surface Pro): let the copy use the
		 * full width instead of the centred 640/768px container, which left a
		 * wide empty gutter either side. Two classes outrank Tailwind's container.
		 */
		@media (min-width: 641px) and (max-width: 1023.98px) {
			.hero-slider-shell .hero-slide-inner {
				max-width: none;
				padding-left: 1.5rem;
				padding-right: 1.5rem;
			}

			.hero-slider-shell .slider-logo {
				bottom: 8rem;
				width: min(190px, 22vw, 22vh);
			}
		}

		/* iPad landscape at exactly 1024px: the controls are a vertical column on the right. */
		@media (min-width: 1024px) and (max-width: 1024px) and (orientation: landscape) {
			.slider-logo {
				right: 10.5rem;
				bottom: 2.5rem;
				width: min(130px, 22vh);
			}
		}

		/* Mobile */
		@media (max-width: 640px) {
			.slider-logo {
				right: 1.5rem;
				bottom: 6rem;
				width: min(110px, 28vw, 20vh);
				min-width: 64px;
			}
		}

		@media (prefers-reduced-motion: reduce) {

			.slider-logo,
			.hero-slide .slide-title,
			.hero-slide .slide-meta {
				animation: none;
				transition: none;
				opacity: 1;
				clip-path: none;
				transform: none;
			}

			.slider-logo {
				transform: translateY(-50%);
			}

			@media (max-width: 1024px) {
				.slider-logo {
					transform: none;
				}
			}

			@media (min-width: 1024px) and (max-width: 1366px) and (orientation: portrait) {
				.hero-slider-shell .slider-logo {
					transform: none;
				}
			}
		}
	</style>
<?php
}
