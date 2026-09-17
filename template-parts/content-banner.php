<?php

/**
 * Banner Section – Works on all pages, including 404
 * Uses a real <img> tag (not CSS background) with fetchpriority="high"
 * so the browser's preload scanner fetches it at the earliest possible moment.
 * No JS re-fetch — this removes the double-request delay and white-bg flash.
 */

$banner = ozlandcare_get_banner_image_data();
$banner_id = $banner['id'];
$image_url = $banner['url'];
$placeholder = ozlandcare_get_banner_placeholder($banner_id);

if (is_404()) {
    $display_title = 'Page Not Found';
    $show_image = false;
} else {
    $display_title = is_search() ? sprintf('Search: %s', get_search_query())
        : (is_archive() ? get_the_archive_title() : get_the_title());
    $show_image = true;
}
?>

<section
    class="content-banner-shell relative min-h-[200px] md:min-h-[300px] lg:min-h-[400px] xl:min-h-[450px] flex items-center justify-center overflow-hidden"
    style="background-color: #000;<?php echo $placeholder ? ' background-image: url(&quot;' . esc_attr($placeholder) . '&quot;); background-size: cover;' : ''; ?>">

    <?php if ($show_image && $image_url) : ?>
        <!-- Real <img> tag: browser preload scanner picks this up immediately -->
        <?php if ($banner_id) : ?>
            <?php
            echo wp_get_attachment_image(
                $banner_id,
                'full',
                false,
                array(
                    'alt'           => '',
                    'fetchpriority' => 'high',
                    'loading'       => 'eager',
                    'decoding'      => 'async',
                    'sizes'         => '100vw',
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
        <div class="absolute inset-0 bg-[rgba(1,34,34,0.3)]"></div>
    <?php endif; ?>

    <style>
        /*
         * Keep the central subject in the right-side visual area so the
         * left-aligned page title does not cover faces when the banner crops.
         */
        .content-banner-shell {
            background-position: 40% center;
            background-repeat: no-repeat;
        }

        .content-banner-image {
            object-position: 40% center;
        }

        .slider-logo {
            position: absolute;
            top: 50%;
            right: 8%;
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

        @media (max-width: 1024px) {
            .slider-logo {
                top: 70%;
                right: 8%;
                transform: translate(50%, -50%) translateX(100%);
                width: 180px;
                max-width: 55vw;
            }

            @keyframes slideInFromRight {
                from {
                    transform: translate(50%, -50%) translateX(120%);
                    opacity: 0;
                }

                to {
                    transform: translate(50%, -50%) translateX(0);
                    opacity: 1;
                }
            }
        }

        @media (max-width: 640px) {
            .slider-logo {
                top: 78%;
                right: 4%;
                width: 90px;
                max-width: 28vw;
            }
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
    </style>

    <div class="slider-logo">
        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/we-delever.png'); ?>" alt="We Delever Logo">
    </div>

    <div class="container relative z-10 mx-auto px-6 sm:px-10 lg:px-20 text-left">
        <div class="max-w-[58%] sm:max-w-[52%] lg:max-w-[42%] mr-auto flex flex-col items-start">
            <h1 class="text-left text-xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white tracking-tighter mb-2 leading-[1.1] sm:leading-[1.2] mix-blend-plus-lighter">
                <?php echo wp_kses_post($display_title); ?>
            </h1>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-[1px] bg-white/10"></div>
</section>