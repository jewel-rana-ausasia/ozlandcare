<?php
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

$desktop_preview_path = get_template_directory() . '/assets/images/slider/slide-image-1-preview.jpg';
$mobile_preview_path  = get_template_directory() . '/assets/images/slider/mobile-slide-1-preview.jpg';
$desktop_preview      = is_readable($desktop_preview_path)
    ? 'data:image/jpeg;base64,' . base64_encode(file_get_contents($desktop_preview_path))
    : $slides[0]['image'];
$mobile_preview       = is_readable($mobile_preview_path)
    ? 'data:image/jpeg;base64,' . base64_encode(file_get_contents($mobile_preview_path))
    : $slides[0]['mobile_image'];
?>

<style>
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

    /* Keep the main slider image at a fixed scale. */
    .ken-burns {
        transform: none;
        transition: none;
    }

    .hero-slide.active .ken-burns {
        transform: none;
    }

    /* Inline preview paints immediately while the full image decodes. */
    .hero-slider-shell {
        height: calc(100vh - 140px);
        height: calc(100dvh - 140px);
        background-color: #000;
        background-image: url("<?= esc_attr($mobile_preview); ?>");
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    @media (min-width: 1025px) {
        .hero-slider-shell {
            background-image: url("<?= esc_attr($desktop_preview); ?>");
        }
    }

    /* High-End Overlay */
    .premium-gradient {
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

    /* New CSS: Image loading থামা পর্যন্ত স্লাইড হাইড রাখার জন্য */
    /* Mobile + Tablet */
    @media (max-width: 1024px) {
        .slider-logo {
            top: 75%;
            right: 10%;
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

    /* Mobile */
    @media (max-width: 640px) {
        .slider-logo {
            top: 78%;
            right: 4%;
            width: 100px;
            max-width: 28vw;
        }

        .slider-logo img {
            width: 100%;
            height: auto;
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

<section class="hero-slider-shell relative flex items-center overflow-hidden grain">

    <div class="absolute inset-0 z-0">
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
                class="w-full h-full object-cover object-top ken-burns slider-bg-img">
        </picture>
        <div class="absolute inset-0 premium-gradient"></div>
    </div>

    <div class="slider-logo">
        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/we-delever.png'); ?>" alt="We Delever Logo">
    </div>

    <?php foreach ($slides as $index => $slide): ?>
        <div
            class="hero-slide absolute inset-0 w-full h-full flex items-center <?= 0 === $index ? 'active opacity-100 z-20' : 'opacity-0 z-10'; ?>"
            data-slide-index="<?= $index ?>"
            style="opacity: <?= 0 === $index ? '1' : '0'; ?>; z-index: <?= 0 === $index ? '20' : '10'; ?>;">

            <div class="relative z-10 container mx-auto px-6 lg:px-20">
                <div class="max-w-5xl">
                    <?php if (!empty($slide['subtitle'])): ?>
                        <div class="slide-meta mb-6 flex items-center gap-4">
                            <span class="h-px w-8 md:w-12 bg-white/80"></span>
                            <span class="text-shadow-soft text-white tracking-[0.2em] uppercase text-[9px] md:text-xs"><?= $slide['subtitle'] ?></span>
                        </div>
                    <?php endif; ?>

                    <h1 class="slide-title text-shadow-soft text-2xl sm:text-3xl md:text-5xl lg:text-7xl font-bold text-white uppercase leading-[1.2] tracking-wide mb-10">
                        <?= $slide['title'] ?>
                    </h1>

                    <div class="slide-meta hidden md:flex flex-col lg:flex-row items-start gap-12 mb-5 sm:mb-10 md:mb-12">
                        <p class="text-shadow-soft text-white/90 text-lg md:text-xl leading-relaxed font-light max-w-2xl border-l border-white/10 pl-5">
                            <?= $slide['description'] ?>
                        </p>
                    </div>

                    <div class="slide-meta flex flex-wrap gap-4 md:gap-6 items-center">
                        <a href="<?php echo esc_url(home_url('/about-us')); ?>"
                            class="group relative overflow-hidden px-4 py-2 sm:px-6 sm:py-3 md:px-10 md:py-5 border border-white/10 bg-primary text-white font-bold text-[8px] md:text-[10px] uppercase tracking-[0.3em] rounded-full transition-all hover:bg-blue hover:shadow-[0_0_30px_rgba(var(--primary-rgb),0.4)]">
                            <span class="relative z-10"><?= $slide['cta_primary'] ?></span>
                        </a>

                        <a href="<?php echo esc_url(home_url('/contact-us')); ?>"
                            class="px-4 py-2 sm:px-6 sm:py-3 md:px-10 md:py-5 border border-white/10 text-white font-bold text-[8px] md:text-[10px] uppercase tracking-[0.3em] rounded-full bg-primary hover:bg-blue backdrop-blur-md transition-all duration-500">
                            <?= $slide['cta_secondary'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="absolute bottom-10 right-6 lg:left-auto lg:right-20 z-40 flex flex-row lg:flex-col items-center gap-10">
        <div class="flex flex-col items-center gap-4">
            <span class="text-[10px] font-bold text-white/30 uppercase tracking-[0.3em] rotate-0 lg:-rotate-90 origin-center mb-0 lg:mb-12">Scroll</span>
            <div class="w-px h-20 bg-white/10 relative overflow-hidden hidden lg:block">
                <div id="progressFill" class="absolute top-0 left-0 w-full bg-primary h-0 transition-all"></div>
            </div>
        </div>

        <div class="flex lg:flex-col gap-4">
            <button id="prevSlide" class="w-10 h-10 lg:w-14 lg:h-14 flex items-center justify-center rounded-full border border-white/10 text-white backdrop-blur-xl hover:bg-blue hover:border-blue transition-all duration-500 group">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="group-hover:-translate-x-1 transition-transform">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextSlide" class="w-10 h-10 lg:w-14 lg:h-14 flex items-center justify-center rounded-full border border-white/10 text-white backdrop-blur-xl hover:bg-blue hover:border-blue transition-all duration-500 group">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="group-hover:translate-x-1 transition-transform">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sliderShell = document.querySelector('.hero-slider-shell');
        const siteHeader = document.getElementById('masthead');

        const syncSliderHeight = () => {
            if (!sliderShell || !siteHeader) {
                return;
            }

            const viewportHeight = window.visualViewport
                ? window.visualViewport.height
                : window.innerHeight;
            const headerHeight = siteHeader.getBoundingClientRect().height;

            sliderShell.style.height = `${Math.max(0, viewportHeight - headerHeight)}px`;
        };

        syncSliderHeight();
        window.addEventListener('resize', syncSliderHeight);

        if (window.visualViewport) {
            window.visualViewport.addEventListener('resize', syncSliderHeight);
        }

        if ('ResizeObserver' in window && siteHeader) {
            const headerResizeObserver = new ResizeObserver(syncSliderHeight);
            headerResizeObserver.observe(siteHeader);
        }

        const slides = document.querySelectorAll('.hero-slide');
        const progressFill = document.getElementById('progressFill');
        let current = 0;
        let timer;
        const duration = 8000;

        const updateSlider = (index) => {
            slides.forEach((s, i) => {
                // স্লাইডটি কেবল তখনই দৃশ্যমান হবে যদি ইমেজ লোড কমপ্লিট থাকে
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

        // NEW: Image Loading Control Mechanism
        let loadedImagesCount = 0;
        slides.forEach((slide, index) => {
            const img = slide.querySelector('.slider-bg-img');
            if (!img) {
                return;
            }

            const handleImageLoad = () => {
                slide.classList.add('is-loaded');
                // প্রথম স্লাইডের ইমেজ রেডি হলেই সাথে সাথে ব্যাকগ্রাউন্ডসহ শো করবে
                if (index === 0) {
                    updateSlider(0);
                    resetTimer();
                }
            };

            if (img.complete) {
                handleImageLoad();
            } else {
                img.addEventListener('load', handleImageLoad);
                // কোনো কারণে ইমেজ ফেইলড হলে সেটিকেও হ্যান্ডেল করার ব্যবস্থা
                img.addEventListener('error', handleImageLoad);
            }
        });

        /*
         * Warm non-critical slides after the first frame has rendered. This
         * prevents a blank image when the carousel advances without delaying
         * the initial hero.
         */
        const warmRemainingSlides = () => {
            slides.forEach((slide, index) => {
                if (index === 0) {
                    return;
                }

                const image = slide.querySelector('.slider-bg-img');
                if (image) {
                    image.loading = 'eager';
                }
            });
        };

        if ('requestIdleCallback' in window) {
            window.requestIdleCallback(warmRemainingSlides, { timeout: 1500 });
        } else {
            window.setTimeout(warmRemainingSlides, 500);
        }
    });
</script>
