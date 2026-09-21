<?php

/**
 * Banner Section – Works on all pages, including 404
 *
 * Uses a real <img> tag (not CSS background) with fetchpriority="high" so the
 * browser's preload scanner fetches it at the earliest possible moment, and it
 * is preloaded from <head> by ozlandcare_output_critical_image_preload().
 *
 * Every layout-critical style lives in ozlandcare_output_critical_banner_css()
 * (printed in <head> before the Tailwind CDN script). Tailwind is built in the
 * browser by JavaScript, so its utilities are not available at first paint -
 * relying on them here made the image render unstyled and then snap into the
 * banner box. The Tailwind classes are kept only as documentation of the
 * intended values; the plain CSS classes are what actually positions things.
 */

$banner = ozlandcare_get_banner_image_data();
$banner_id = $banner['id'];
$image_url = $banner['url'];

if (is_404()) {
    $display_title = 'Page Not Found';
    $show_image = false;
} else {
    $display_title = is_search() ? sprintf('Search: %s', get_search_query())
        : (is_archive() ? get_the_archive_title() : get_the_title());
    $show_image = true;
}

// Inline preview of the same image, drawn as the shell's background so the
// banner is never a black box while the full-size file decodes. No extra
// request: it reuses WordPress's existing "medium" file as a data URI.
$shell_style = 'background-color: #000;';
if ($show_image && $banner_id) {
    $placeholder = ozlandcare_get_banner_placeholder($banner_id);
    if ($placeholder) {
        // The data URI is built by the theme from base64_encode(), so it needs
        // no URL filtering; esc_attr() on the whole attribute below escapes it.
        $shell_style .= ' background-image: url(' . $placeholder . ');';
    }
}
?>

<section
    class="content-banner-shell relative min-h-[200px] md:min-h-[300px] lg:min-h-[400px] xl:min-h-[450px] flex items-center justify-center overflow-hidden"
    style="<?php echo esc_attr($shell_style); ?>">

    <?php if ($show_image && $image_url) : ?>
        <!-- Real <img> tag: browser preload scanner picks this up immediately -->
        <?php if ($banner_id) : ?>
            <?php
            echo wp_get_attachment_image(
                $banner_id,
                '1536x1536',
                false,
                array(
                    'alt'           => '',
                    'fetchpriority' => 'high',
                    'loading'       => 'eager',
                    'decoding'      => 'async',
                    'sizes'         => '100vw',
                    'srcset'        => $banner['srcset'],
                    'class'         => 'content-banner-image absolute inset-0 w-full h-full object-cover',
                )
            );
            ?>
        <?php else : ?>
            <img
                src="<?php echo esc_url($image_url); ?>"
                alt=""
                fetchpriority="high"
                loading="eager"
                decoding="async"
                class="content-banner-image absolute inset-0 w-full h-full object-cover">
        <?php endif; ?>
        <!-- Overlay tint on top of the image -->
        <div class="content-banner-overlay absolute inset-0 bg-[rgba(1,34,34,0.3)]"></div>
    <?php endif; ?>

    <!-- Own class, not .slider-logo: content-slider.php styles that one. -->
    <div class="content-banner-logo">
        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/we-delever.png'); ?>" alt="We Delever Logo" width="250" height="250" decoding="async" fetchpriority="low">
    </div>

    <div class="content-banner-inner container relative z-10 mx-auto px-6 sm:px-10 lg:px-20 text-left">
        <div class="content-banner-copy max-w-[58%] sm:max-w-[52%] lg:max-w-[42%] mr-auto flex flex-col items-start">
            <h1 class="content-banner-title text-left text-xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white tracking-tighter mb-2 leading-[1.1] sm:leading-[1.2] mix-blend-plus-lighter">
                <?php echo wp_kses_post($display_title); ?>
            </h1>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-[1px] bg-white/10"></div>
</section>
