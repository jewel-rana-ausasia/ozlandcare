<?php

/**
 * Homepage hero slider.
 *
 * The first slide's photo is preloaded from <head> by
 * ozlandcare_output_critical_image_preload(), and every layout-critical style
 * lives in ozlandcare_output_critical_hero_css() (inc/critical-css.php), which
 * prints before the Tailwind CDN script. Tailwind is built in the browser by
 * JavaScript, so its utilities do not exist at first paint - relying on them
 * here made the photo, the stacked slides and the controls render in normal
 * flow and then snap into position. The Tailwind classes are kept as a record
 * of the intended values; the plain CSS classes are what position things.
 */

// Keeping your content exactly as provided
$slides = [
    [
        'title' => 'Professional <br/> <span class="text-white">NDIS Disability Care</span>',
        'subtitle' => 'Trusted Disability Support Services',
        'description' => 'At Ozland Care, our experienced team delivers reliable, person-centred NDIS services designed to help you live independently and achieve your personal goals.',
        'cta_primary' => 'View Details',
        'cta_secondary' => 'Get in touch',
        'image' => get_template_directory_uri() . '/assets/images/slider/slide-image-1.jpg',
        'mobile_image' => get_template_directory_uri() . '/assets/images/slider/mobile-slide-1.jpg',
    ],
    [
        'title' => 'Empowering Lives<br/> <span class="text-white">Through NDIS Support </span>',
        'subtitle' => 'Personalised Care for Every Individual',
        'description' => 'Ozland Care provides personalised disability support tailored to your needs. We’re here to help you build confidence, independence and a better everyday life.',
        'cta_primary' => 'View Details',
        'cta_secondary' => 'Get in touch',
        'image' => get_template_directory_uri() . '/assets/images/slider/slide-image-2.jpg',
        'mobile_image' => get_template_directory_uri() . '/assets/images/slider/mobile-slide-2.jpg',
    ],
    [
        'title' => 'Dedicated NDIS Care <br/> <span class="text-white">with a Personal Touch </span>',
        'subtitle' => 'Compassionate Support You Can Rely On',
        'description' => 'With compassionate professionals and custom support plans, Ozland Care helps participants achieve their goals while enjoying a safe, supportive environment.',
        'cta_primary' => 'View Details',
        'cta_secondary' => 'Get in touch',
        'image' => get_template_directory_uri() . '/assets/images/slider/slide-image-3.jpg',
        'mobile_image' => get_template_directory_uri() . '/assets/images/slider/mobile-slide-3.jpg',
    ],
];
?>

<section class="hero-slider-shell relative flex items-center overflow-hidden grain">

    <div class="hero-slider-media absolute inset-0 z-0">
        <picture>
            <source
                media="(min-width:1025px)"
                srcset="<?= esc_url($slides[0]['image']); ?>">
            <img
                src="<?= esc_url($slides[0]['mobile_image']); ?>"
                alt=""
                width="768"
                height="1100"
                fetchpriority="high"
                loading="eager"
                decoding="sync"
                class="hero-slider-image w-full h-full object-cover object-top ken-burns">
        </picture>
        <div class="premium-gradient absolute inset-0"></div>
    </div>

    <div class="slider-logo">
        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/we-delever.png'); ?>" alt="We Delever Logo" width="250" height="250" decoding="async" fetchpriority="low">
    </div>

    <?php foreach ($slides as $index => $slide): ?>
        <div
            class="hero-slide absolute inset-0 w-full h-full flex items-center <?= 0 === $index ? 'active opacity-100 z-20' : 'opacity-0 z-10'; ?>"
            data-slide-index="<?= $index ?>"
            style="opacity: <?= 0 === $index ? '1' : '0'; ?>; z-index: <?= 0 === $index ? '20' : '10'; ?>;">

            <div class="hero-slide-inner relative z-10 container mx-auto px-6 lg:px-20">
                <div class="hero-slide-copy max-w-5xl">
                    <?php if (!empty($slide['subtitle'])): ?>
                        <div class="hero-slide-eyebrow slide-meta mb-6 flex items-center gap-4">
                            <span class="hero-slide-rule h-px w-8 md:w-12 bg-white/80"></span>
                            <span class="hero-slide-eyebrow-text text-shadow-soft text-white tracking-[0.2em] uppercase text-[9px] md:text-xs"><?= $slide['subtitle'] ?></span>
                        </div>
                    <?php endif; ?>

                    <h1 class="hero-slide-title slide-title text-shadow-soft text-2xl sm:text-3xl md:text-5xl lg:text-7xl font-bold text-white uppercase leading-[1.2] tracking-wide mb-10">
                        <?= $slide['title'] ?>
                    </h1>

                    <div class="hero-slide-desc-row slide-meta hidden md:flex flex-col lg:flex-row items-start gap-12 mb-5 sm:mb-10 md:mb-12">
                        <p class="hero-slide-desc text-shadow-soft text-white/90 text-lg md:text-xl leading-relaxed font-light max-w-2xl border-l border-white/10 pl-5">
                            <?= $slide['description'] ?>
                        </p>
                    </div>

                    <div class="hero-slide-actions slide-meta flex flex-wrap gap-4 md:gap-6 items-center">
                        <a href="<?php echo esc_url(home_url('/about-us')); ?>"
                            class="hero-btn group relative overflow-hidden px-4 py-2 sm:px-6 sm:py-3 md:px-10 md:py-5 border border-white/10 bg-primary text-white font-bold text-[8px] md:text-[10px] uppercase tracking-[0.3em] rounded-full transition-all hover:bg-blue hover:shadow-[0_0_30px_rgba(var(--primary-rgb),0.4)]">
                            <span class="relative z-10"><?= $slide['cta_primary'] ?></span>
                        </a>

                        <a href="<?php echo esc_url(home_url('/contact-us')); ?>"
                            class="hero-btn px-4 py-2 sm:px-6 sm:py-3 md:px-10 md:py-5 border border-white/10 text-white font-bold text-[8px] md:text-[10px] uppercase tracking-[0.3em] rounded-full bg-primary hover:bg-blue backdrop-blur-md transition-all duration-500">
                            <?= $slide['cta_secondary'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="hero-slider-nav absolute bottom-10 right-6 lg:left-auto lg:right-20 z-40 flex flex-row lg:flex-col items-center gap-10">
        <div class="flex flex-col items-center gap-4">
            <span class="text-[10px] font-bold text-white/30 uppercase tracking-[0.3em] rotate-0 lg:-rotate-90 origin-center mb-0 lg:mb-12">Scroll</span>
            <div class="w-px h-20 bg-white/10 relative overflow-hidden hidden lg:block">
                <div id="progressFill" class="absolute top-0 left-0 w-full bg-primary h-0 transition-all"></div>
            </div>
        </div>

        <div class="flex lg:flex-col gap-4">
            <button id="prevSlide" class="hero-nav-btn w-10 h-10 lg:w-14 lg:h-14 flex items-center justify-center rounded-full border border-white/10 text-white backdrop-blur-xl hover:bg-blue hover:border-blue transition-all duration-500 group">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="group-hover:-translate-x-1 transition-transform">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextSlide" class="hero-nav-btn w-10 h-10 lg:w-14 lg:h-14 flex items-center justify-center rounded-full border border-white/10 text-white backdrop-blur-xl hover:bg-blue hover:border-blue transition-all duration-500 group">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="group-hover:translate-x-1 transition-transform">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const siteHeader = document.getElementById('masthead');

        /*
         * The shell's height is calc(100dvh - var(--site-header-height)) in the
         * critical CSS, seeded with the header's measured height per breakpoint.
         * Keeping the variable up to date is all that is needed here: setting an
         * explicit pixel height on the shell used to fight that rule and made
         * the hero jump once this handler first ran.
         */
        const syncHeaderHeight = () => {
            if (!siteHeader) {
                return;
            }

            document.documentElement.style.setProperty(
                '--site-header-height',
                `${Math.round(siteHeader.getBoundingClientRect().height)}px`
            );
        };

        syncHeaderHeight();
        window.addEventListener('resize', syncHeaderHeight);

        if (window.visualViewport) {
            window.visualViewport.addEventListener('resize', syncHeaderHeight);
        }

        if ('ResizeObserver' in window && siteHeader) {
            const headerResizeObserver = new ResizeObserver(syncHeaderHeight);
            headerResizeObserver.observe(siteHeader);
        }

        const slides = document.querySelectorAll('.hero-slide');
        const progressFill = document.getElementById('progressFill');
        let current = 0;
        let timer;
        const duration = 8000;

        const updateSlider = (index) => {
            slides.forEach((s, i) => {
                s.classList.toggle('active', i === index);
                s.style.opacity = i === index ? '1' : '0';
                s.style.zIndex = i === index ? '20' : '10';
            });

            if (progressFill) {
                progressFill.style.transition = 'none';
                progressFill.style.height = '0%';
                setTimeout(() => {
                    progressFill.style.transition = `height ${duration}ms linear`;
                    progressFill.style.height = '100%';
                }, 50);
            }
            current = index;
        };

        const next = () => updateSlider((current + 1) % slides.length);
        const prev = () => updateSlider((current - 1 + slides.length) % slides.length);

        document.getElementById('nextSlide').onclick = () => {
            next();
            resetTimer();
        };
        document.getElementById('prevSlide').onclick = () => {
            prev();
            resetTimer();
        };

        const resetTimer = () => {
            clearInterval(timer);
            timer = setInterval(next, duration);
        };

        // Show the first slide immediately; image loading must not block rendering.
        updateSlider(0);
        resetTimer();
    });
</script>
