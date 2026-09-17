<?php

/**
 * Template Name: Service Details
 * @package ozlandcare
 */

get_header();

$service_title    = "Assist–Life Stages, Transition and Support";
$service_image    = "https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=1000";
$service_category = "Coordination & Capacity Building";
$support_item     = "01_006_0106_1_1";

$service_title   = function_exists('get_field') ? get_field('service_title') : '';
$service_details = function_exists('get_field') ? get_field('service_details') : '';
$service_image   = function_exists('get_field') ? get_field('service_hero_image') : '';

$is_support_coordination = is_page('ndis-support-coordination');
$support_coordination_content = [
    'intro'       => [],
    'overview'    => [],
    'levels_intro' => [],
    'levels'      => [],
];

if ($is_support_coordination && $service_details && class_exists('DOMDocument')) {
    $document = new DOMDocument();
    $previous_libxml_state = libxml_use_internal_errors(true);
    $document->loadHTML(
        '<?xml encoding="utf-8" ?><div id="support-coordination-content">' . wp_kses_post($service_details) . '</div>',
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );
    libxml_clear_errors();
    libxml_use_internal_errors($previous_libxml_state);

    $content_root = $document->getElementById('support-coordination-content');
    $content_phase = 'intro';

    if ($content_root) {
        foreach (iterator_to_array($content_root->childNodes) as $content_node) {
            $node_text = trim(preg_replace('/\s+/', ' ', $content_node->textContent));

            if (stripos($node_text, 'What is NDIS Support Coordination?') === 0) {
                $content_phase = 'overview';
                continue;
            }

            if (stripos($node_text, 'The 3 Levels of Support Coordination') === 0) {
                $content_phase = 'levels_intro';
                continue;
            }

            $node_html = trim($document->saveHTML($content_node));
            if ($node_html === '') {
                continue;
            }

            if ($content_phase === 'levels_intro' && strtolower($content_node->nodeName) === 'ul') {
                $content_phase = 'levels';
            }

            $support_coordination_content[$content_phase][] = $node_html;
        }
    }
}

$has_support_coordination_layout =
    $is_support_coordination
    && !empty($support_coordination_content['intro'])
    && !empty($support_coordination_content['overview'])
    && !empty($support_coordination_content['levels']);
?>



<style>
    :root {
        --premium-teal: #006666;
        --soft-teal: #f0fafa;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #1e293b;
    }

    .font-serif {
        font-family: 'Playfair Display', serif;
    }

    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.2, 1, 0.3, 1);
    }

    .reveal.in {
        opacity: 1;
        transform: translateY(0);
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .hover-lift {
        transition: all 0.4s ease;
    }

    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -15px rgba(0, 102, 102, 0.12);
    }

    .image-mask {
        border-radius: 40px 100px 40px 40px;
    }

    /* Custom Numbering for Process Section */
    .step-number {
        -webkit-text-stroke: 1px rgba(0, 102, 102, 0.2);
        color: transparent;
        font-family: 'Playfair Display', serif;
    }

    .support-intro-copy p + p {
        margin-top: 1.25rem;
    }

    .support-overview-paragraph p {
        margin: 0;
    }

    .support-level-card ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .support-level-card li {
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.75;
    }

    .support-level-card li:first-child {
        color: #0f172a;
        font-size: 1.05rem;
        font-weight: 700;
        line-height: 1.45;
        margin-bottom: 0.85rem;
    }

    /*
     * Improve readability across every service details page without changing
     * the established layout, typography, or purple panel treatments.
     */
    .service-details-content p,
    .service-details-content li {
        color: #1e293b !important;
    }

    .service-details-content p strong,
    .service-details-content li strong {
        color: #0f172a;
    }

    .service-details-content .bg-primary p,
    .service-details-content .bg-primary li {
        color: rgba(255, 255, 255, 0.92) !important;
    }

    /*
     * Section titles use a single fluid scale instead of fixed sizes plus
     * breakpoint overrides, so every service detail page reads consistently at
     * any width rather than jumping at 640px and 1024px. Each clamp runs from
     * its phone size at a 360px viewport to its full size at 1280px.
     *
     * The FAQ band is excluded: it ships its own tuned Tailwind scale.
     */
    .service-details-content > section:not(.service-faq-section) :is(h1, h2) {
        font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
        font-size: clamp(1.5rem, 1.11rem + 1.74vw, 2.5rem);
        font-weight: 700;
        line-height: 1.2;
        letter-spacing: -0.025em;
        overflow-wrap: anywhere;
    }

    /* Both shared CTA parts lead with a display-size h3 rather than an h2. */
    .service-details-content > section h3[class~="text-4xl"],
    .service-details-content > section h3[class~="text-3xl"][class*="sm:text-4xl"] {
        font-size: clamp(1.5rem, 0.91rem + 2.61vw, 3rem);
        line-height: 1.2;
        overflow-wrap: anywhere;
    }

    /* Secondary panel titles stay one step below their section heading. */
    .service-details-content > section h3[class~="text-3xl"]:not([class*="sm:text-"]) {
        font-size: clamp(1.25rem, 1.01rem + 1.09vw, 1.875rem);
        line-height: 1.3;
        overflow-wrap: anywhere;
    }

    /*
     * Card titles scale too, otherwise they match or outgrow the section
     * heading above them once that heading drops to its phone size.
     * Headings that already declare their own responsive size are left alone.
     */
    .service-details-content > section h4[class~="text-2xl"]:not([class*="lg:text-"]) {
        font-size: clamp(1.125rem, 0.98rem + 0.65vw, 1.5rem);
        line-height: 1.3;
    }

    .service-details-content > section h4[class~="text-xl"]:not([class*="lg:text-"]) {
        font-size: clamp(1rem, 0.9rem + 0.43vw, 1.25rem);
        line-height: 1.35;
    }

    /*
     * Spacing-only treatment for the service-content sections. Titles are
     * handled by the fluid scale above and need no breakpoint overrides; the
     * shared service CTA and FAQ manage their own padding.
     */
    @media (max-width: 1023px) {
        .service-details-content > section[class~="py-24"] {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .service-details-content > section[class~="py-24"] > .container,
        .service-details-content > section[class~="py-16"] > .container,
        .service-details-content > section[class~="pb-16"] > .container,
        .service-details-content > section[class~="pb-24"] > .container {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .service-details-content > section[class~="py-24"] [class~="p-10"] {
            padding: 2rem;
        }

        .service-details-content > section[class~="py-24"] [class~="p-12"] {
            padding: 2.5rem;
        }

        .service-details-content > section[class~="py-24"] [class~="mb-20"],
        .service-details-content > section[class~="py-24"] [class~="mb-16"] {
            margin-bottom: 3rem;
        }
    }

    @media (max-width: 639px) {
        .service-details-content > section[class~="py-24"] {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .service-details-content > section[class~="py-16"] {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .service-details-content > section[class~="pb-16"],
        .service-details-content > section[class~="pb-24"] {
            padding-bottom: 3rem;
        }

        .service-details-content > section[class~="py-24"] > .container,
        .service-details-content > section[class~="py-16"] > .container,
        .service-details-content > section[class~="pb-16"] > .container,
        .service-details-content > section[class~="pb-24"] > .container {
            width: 100%;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .service-details-content > section[class~="py-24"] [class~="p-10"],
        .service-details-content > section[class~="py-24"] [class~="p-12"] {
            padding: 1.5rem;
        }

        .service-details-content > section[class~="py-24"] [class~="rounded-[2.5rem]"],
        .service-details-content > section[class~="py-24"] [class~="rounded-[3rem]"] {
            border-radius: 1.5rem;
        }

        .service-details-content > section[class~="py-24"] [class~="gap-10"],
        .service-details-content > section[class~="py-16"] [class~="gap-10"] {
            gap: 2rem;
        }

        .service-details-content > section[class~="py-24"] .flex[class~="gap-8"] {
            gap: 1rem;
        }

        .service-details-content > section[class~="py-24"] [class~="text-6xl"] {
            flex: 0 0 auto;
            font-size: 2.5rem;
        }

        .service-details-content > section[class~="py-24"] [class~="mb-20"],
        .service-details-content > section[class~="py-24"] [class~="mb-16"] {
            margin-bottom: 2.5rem;
        }

        .service-details-content > section[class~="py-24"] svg[width="320"] {
            width: 100%;
            max-width: 20rem;
            height: auto;
        }

        .service-details-content > section[class~="py-24"] img,
        .service-details-content > section[class~="py-16"] img,
        .service-details-content > section[class~="pb-16"] img,
        .service-details-content > section[class~="pb-24"] img {
            max-width: 100%;
        }

        .service-details-content > section[class~="py-24"] table,
        .service-details-content > section[class~="py-16"] table,
        .service-details-content > section[class~="pb-16"] table,
        .service-details-content > section[class~="pb-24"] table {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .service-details-content > section[class~="py-24"] .grid > *,
        .service-details-content > section[class~="py-16"] .grid > *,
        .service-details-content > section[class~="pb-16"] .grid > *,
        .service-details-content > section[class~="pb-24"] .grid > *,
        .service-details-content > section[class~="py-24"] .flex > * {
            min-width: 0;
        }
    }
</style>

<main class="service-details-content bg-[#fafcfc] overflow-hidden">
    <?php if ($has_support_coordination_layout) : ?>
    <section class="relative py-16 lg:py-24">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

                <div class="lg:col-span-5 order-2 lg:order-1 reveal">
                    <p class="mb-4 text-sm font-bold uppercase tracking-[0.2em] text-primary">Support Coordination</p>
                    <h1 class="font-serif text-3xl lg:text-5xl text-slate-900 leading-[1.1] mb-7">
                        <?php echo $service_title ? wp_kses_post($service_title) : 'NDIS Support Coordination'; ?>
                    </h1>
                    <div class="support-intro-copy text-base text-slate-700 font-normal leading-relaxed">
                        <?php echo wp_kses_post(implode('', $support_coordination_content['intro'])); ?>
                    </div>
                </div>

                <div class="lg:col-span-7 order-1 lg:order-2 reveal" style="transition-delay: 0.2s">
                    <div class="relative">
                        <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
                        <div class="image-mask overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.2)] aspect-[16/10] sm:aspect-[3/2] lg:aspect-[4/3] lg:min-h-[520px] relative">
                            <?php if ($service_image) : ?>
                                <img
                                    src="<?php echo esc_url($service_image['url']); ?>"
                                    class="w-full h-full object-cover"
                                    alt="<?php echo esc_attr($service_image['alt'] ?? 'NDIS Support Coordination'); ?>">
                            <?php else : ?>
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-hero.jpg'); ?>"
                                    class="w-full h-full object-cover"
                                    alt="NDIS Support Coordination">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pb-16 lg:pb-24">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="reveal">
                <div class="max-w-4xl mb-7">
                    <p class="mb-3 text-sm font-bold uppercase tracking-[0.18em] text-primary">Understanding Your Plan</p>
                    <h2 class="font-serif text-3xl lg:text-4xl text-slate-900 leading-tight">What is NDIS Support Coordination?</h2>
                </div>

                <div class="w-full border-y border-primary/15 divide-y divide-primary/15">
                    <?php foreach ($support_coordination_content['overview'] as $overview_index => $overview_block) : ?>
                        <div class="support-overview-paragraph w-full flex gap-5 md:gap-8 py-6 md:py-7 text-base leading-relaxed text-slate-700">
                            <span class="shrink-0 pt-1 text-sm font-bold text-primary">
                                <?php echo esc_html(sprintf('%02d', $overview_index + 1)); ?>
                            </span>
                            <div class="max-w-5xl">
                                <?php echo wp_kses_post($overview_block); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-24 lg:pb-32">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="max-w-3xl mb-10 reveal">
                <p class="mb-3 text-sm font-bold uppercase tracking-[0.18em] text-primary">Support That Fits Your Needs</p>
                <h2 class="font-serif text-3xl lg:text-4xl text-slate-900 leading-tight mb-5">The 3 Levels of Support Coordination</h2>
                <div class="text-slate-700 leading-relaxed">
                    <?php echo wp_kses_post(implode('', $support_coordination_content['levels_intro'])); ?>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($support_coordination_content['levels'] as $level_index => $level_block) : ?>
                    <article class="support-level-card relative rounded-[2rem] bg-white border border-slate-100 p-7 lg:p-8 shadow-[0_18px_45px_-30px_rgba(15,23,42,0.28)] reveal">
                        <span class="flex items-center justify-center w-11 h-11 mb-6 rounded-xl bg-primary text-white text-sm font-bold">
                            <?php echo esc_html(sprintf('%02d', $level_index + 1)); ?>
                        </span>
                        <?php echo wp_kses_post($level_block); ?>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php else : ?>
    <section class="relative py-24 lg:py-32">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

                <!-- Text Content -->
                <div class="lg:col-span-6 order-2 lg:order-1 reveal">
                    <h1 class="font-serif text-3xl lg:text-5xl text-slate-900 leading-[1.1] mb-8">
                        <?php echo $service_title ? wp_kses_post($service_title) : 'Navigating Your <span class="italic text-[#006666]">Next Chapter</span> with Confidence.'; ?>
                    </h1>

                    <!-- Force text color slate-900 -->
                    <div class="max-w-2xl space-y-6 text-base text-slate-950 font-normal leading-relaxed">
                        <?php
                        if ($service_details) {
                            echo wp_kses_post($service_details);
                        } else {
                            echo '
                            <p class="text-lg leading-relaxed">
                                Life is defined by its transitions. Our <strong class="font-semibold italic">Life Stages & Support</strong> service provides the strategic coordination and personal mentoring required to navigate significant milestones—from school leavers to workforce entry and beyond.
                            </p>
                            <p class="leading-relaxed">
                                Transitions can be overwhelming, but they also represent the greatest opportunities for growth. Whether you are moving into a new home, starting a career, or transitioning between life stages, we offer a structured yet flexible framework. Our goal is to minimize stress while maximizing your ability to manage your own supports independently.
                            </p>
                            <p class="leading-relaxed">
                                We focus on <strong>Capacity Building</strong>. This means we don\'t just do the work for you; we work <em>with</em> you to develop the skills, resilience, and social connections necessary to thrive in your community. Our approach is person-centered, ensuring that every plan is as unique as the individual it serves.
                            </p>
                            ';
                        }
                        ?>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="lg:col-span-6 order-1 lg:order-2 reveal" style="transition-delay: 0.2s">
                    <div class="relative">
                        <div class="absolute -top-10 -right-10 w-64 h-64 bg-teal-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
                        <div class="image-mask overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.2)] aspect-[16/10] sm:aspect-[4/3] lg:aspect-[1/1] relative">
                            <?php
                            if ($service_image) :
                                $service_image_url = esc_url($service_image['url']);
                                $service_image_alt = esc_attr($service_image['alt'] ?? 'Life Stage Transition Support');
                            ?>
                                <img src="<?php echo $service_image_url; ?>" class="w-full h-full object-cover scale-105 hover:scale-100 transition-transform duration-1000" alt="<?php echo $service_image_alt; ?>">
                            <?php else: ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-hero.jpg'); ?>" class="w-full h-full object-cover scale-105 hover:scale-100 transition-transform duration-1000" alt="Default Image">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- <section class="py-24 bg-white border-t border-slate-100">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6 reveal">
                <div class="max-w-2xl">
                    <h2 class="font-serif text-4xl text-slate-900 mb-4">Core <span class="text-[#006666]">Transition Pathways</span></h2>
                    <p class="text-slate-700">Tailored support for every major milestone in your NDIS journey.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $services = [
                    ['🎓', 'School to Adulthood', 'Specialised planning for school leavers entering further education or vocational training.'],
                    ['💼', 'Workforce Integration', 'Assistance with resume building, interview coaching, and workplace adjustment strategies.'],
                    ['🏠', 'Independent Living', 'Coordinating moves to new living arrangements and managing tenancy obligations.'],
                    ['📊', 'Financial Mentoring', 'Practical skill development in budgeting, daily planning, and managing NDIS funding.'],
                    ['🤝', 'Support Coordination', 'Assistance in strengthening your ability to coordinate and manage your own supports.'],
                    ['🌟', 'Peer Support', 'Connection with mentors and peer groups to share experiences and build resilience.']
                ];
                foreach ($services as $i => $svc): ?>
                    <div class="hover-lift p-10 rounded-[2.5rem] bg-[#fafcfc] border border-slate-100 reveal" style="transition-delay: <?php echo $i * 100; ?>ms">
                        <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center text-3xl mb-8 border border-slate-50">
                            <?php echo $svc[0]; ?>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-3"><?php echo $svc[1]; ?></h4>
                        <p class="text-slate-700 leading-relaxed text-sm"><?php echo $svc[2]; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section> -->

    <?php
    /**
     * Dynamically load the assist-care template part 
     * specifically for the 'assist-personal-activities' page.
     */

    if (is_page('assistance-with-social-and-community-participation')) {

        get_template_part('template-parts/service-single/content', 'assistance-social-community-participation');
    } elseif (is_page('daily-personal-care')) {
        // Looks for: wp-content/themes/your-theme/template-parts/service-single/content-assist-care.php
        get_template_part('template-parts/service-single/content', 'daily-personal-care');
    } elseif (is_page('ndis-support-coordination')) {
        // Looks for: wp-content/themes/your-theme/template-parts/service-single/content-assist-care.php
        get_template_part('template-parts/service-single/content', 'ndis-support-coordination');
    } elseif (is_page('assist-personal-activities')) {
        // Looks for: wp-content/themes/your-theme/template-parts/service-single/content-assist-care.php
        get_template_part('template-parts/service-single/content', 'assist-care');
    } elseif (is_page('participation-in-community-social-civic-activities')) {

        get_template_part('template-parts/service-single/content', 'community-social');
    } elseif (is_page('assist-life-stages-transition-and-support')) {

        get_template_part('template-parts/service-single/content', 'assist-lifestage');
    } elseif (is_page('assist-travel-transport')) {

        get_template_part('template-parts/service-single/content', 'assist-travel');
    } elseif (is_page('home-modification-design-construction')) {

        get_template_part('template-parts/service-single/content', 'home-modifications');
    } elseif (is_page('supported-independent-living-sil')) {

        get_template_part('template-parts/service-single/content', 'sil');
    } elseif (is_page('innovative-community-participation')) {

        get_template_part('template-parts/service-single/content', 'innovative-communityparticipation');
    } elseif (is_page('development-of-daily-living-life-skills')) {

        get_template_part('template-parts/service-single/content', 'development-dailyskills');
    } elseif (is_page('household-tasks')) {

        get_template_part('template-parts/service-single/content', 'household-tasks');
    } elseif (is_page('specialised-driver-training')) {

        get_template_part('template-parts/service-single/content', 'specialized-driver');
    } elseif (is_page('group-centre-based-activities')) {

        get_template_part('template-parts/service-single/content', 'groupcentre-activity');
    }
    ?>



    <!-- <section class="py-24 bg-[#fafcfc]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-20 reveal">
                <h2 class="font-serif text-4xl text-slate-900 mb-4">How We <span class="italic text-[#006666]">Guide You</span></h2>
                <div class="w-20 h-1 bg-[#006666] mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="space-y-12">
                    <?php
                    $steps = [
                        ['Discovery & Assessment', 'We begin by understanding your history, your current situation, and where you want to go. This deep discovery phase ensures our strategy aligns with your long-term vision.'],
                        ['Strategic Planning', 'Our specialists develop a transition roadmap that breaks down large life changes into manageable, actionable steps with clear timelines.'],
                        ['Skill Building & Mentoring', 'We provide active support to develop the practical skills needed for your transition—whether that is budgeting, transit training, or social navigation.']
                    ];
                    foreach ($steps as $idx => $step): ?>
                        <div class="flex gap-8 reveal" style="transition-delay: <?php echo $idx * 150; ?>ms">
                            <span class="step-number text-6xl font-black leading-none"><?php echo sprintf('%02d', $idx + 1); ?></span>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-3"><?php echo $step[0]; ?></h4>
                                <p class="text-slate-700 leading-relaxed"><?php echo $step[1]; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="bg-[#006666] p-12 lg:p-16 rounded-[3rem] text-white relative overflow-hidden reveal">
                    <div class="relative z-10">
                        <h3 class="font-serif text-3xl mb-6 italic">Our Commitment</h3>
                        <p class="text-teal-50/80 leading-relaxed mb-8">
                            We don't just provide a service; we become your partners in progress. Transitions are rarely linear, which is why our support is dynamic, adjusting to your needs as they evolve.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                                </div>
                                <span class="text-sm font-medium text-teal-50">NDIS Quality & Safeguards compliant</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                                </div>
                                <span class="text-sm font-medium text-teal-50">Culturally sensitive support workers</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                                </div>
                                <span class="text-sm font-medium text-teal-50">Goal-orientated capacity building</span>
                            </li>
                        </ul>
                    </div>
                    <div class="absolute -right-20 -top-20 w-64 h-64 bg-white/5 rounded-full"></div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="pb-24 px-6 reveal">
        <div class="container mx-auto max-w-7xl bg-[#006666] rounded-[3rem] p-12 lg:p-20 relative overflow-hidden shadow-2xl shadow-teal-900/40 text-center">
            <div class="relative z-10 max-w-3xl mx-auto">
                <h3 class="font-serif text-4xl lg:text-5xl text-white mb-6 leading-tight">Built around your goals, <br><span class="italic text-teal-200">not a template.</span></h3>
                <p class="text-teal-50/70 text-lg mb-10">Connect with a transition specialist today to discuss how we can support your next big step.</p>
                <a href="#contact" class="inline-block px-10 py-5 bg-white text-[#006666] font-bold rounded-full hover:bg-teal-50 transition-colors">Start Your Journey</a>
            </div>
            <div class="absolute -right-20 -bottom-20 w-96 h-96 bg-white/5 rounded-full"></div>
            <div class="absolute -left-20 -top-20 w-72 h-72 bg-white/5 rounded-full"></div>
        </div>
    </section> -->

</main>

<script>
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('in');
                io.unobserve(e.target);
            }
        });
    }, {
        threshold: 0.1
    });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
</script>

<?php get_footer(); ?>
