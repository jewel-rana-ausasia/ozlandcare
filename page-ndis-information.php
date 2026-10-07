<?php

/**
 * Template Name: NDIS Information - Ultra Premium
 * Description: A flagship-level design focusing on typography, whitespace, and CSS-only architectural depth.
 */
get_header();
?>

<style>
    /* Premium Typography */
    .font-display {
        font-family: 'Plus Jakarta Sans', sans-serif;
        letter-spacing: -0.03em;
    }

    .text-balance {
        text-wrap: balance;
    }

    /* Architectural Layers */
    .glass-surface {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 1);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.03);
    }

    .border-gradient {
        border-image: linear-gradient(to bottom, var(--brand-primary), transparent) 1;
    }

    .stat-number {
        font-size: 12rem;
        line-height: 1;
        background: linear-gradient(to bottom, rgba(95, 42, 125, 0.05), transparent);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 900;
    }

    /* Custom Accordion */
    .premium-accordion::-webkit-details-marker {
        display: none;
    }

    .premium-accordion[open] .plus-icon {
        transform: rotate(45deg);
    }

    /*
     * Mobile + tablet only (<=1024px); desktop keeps the Tailwind values in the
     * markup. Two-class selectors outrank Tailwind utilities, and clamp() scales
     * type smoothly from a 320px phone to a 1024px tablet.
     */
    @media (max-width: 1024px) {
        .ndis-info-page .ndis-hero-title {
            font-size: clamp(2.25rem, 1rem + 5vw, 4rem);
            line-height: 1;
            margin-bottom: clamp(1.5rem, 1rem + 2vw, 2.5rem);
        }

        .ndis-info-page .ndis-hero-lead {
            font-size: clamp(1.0625rem, 0.95rem + 0.55vw, 1.375rem);
            line-height: 1.65;
            padding-left: clamp(1rem, 0.6rem + 1.6vw, 2rem);
        }

        .ndis-info-page .ndis-h2 {
            font-size: clamp(1.75rem, 1.1rem + 2.6vw, 2.75rem);
            line-height: 1.2;
        }

        .ndis-info-page .ndis-section {
            padding-top: clamp(3rem, 2rem + 4vw, 4.5rem);
            padding-bottom: clamp(3rem, 2rem + 4vw, 4.5rem);
        }

        .ndis-info-page .ndis-section--faq {
            padding-top: clamp(2.5rem, 1.75rem + 3vw, 4rem);
        }

        .ndis-info-page .ndis-faq-head {
            margin-bottom: clamp(2rem, 1.5rem + 2vw, 3rem);
        }

        .ndis-info-page .ndis-faq-grid {
            gap: clamp(1.5rem, 1rem + 2vw, 2.5rem);
        }
    }
</style>

<div class="ndis-info-page bg-[#fcfdff] font-display text-[#1a1a1a] antialiased">

    <header class="relative pt-10 pb-14 lg:pt-20 lg:pb-20 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-slate-50 -skew-x-12 translate-x-1/4 z-0"></div>
        <div class="absolute top-1/2 left-10 w-64 h-64 bg-brand-primary opacity-[0.03] blur-[120px] rounded-full"></div>

        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-10">
                    <div class="flex items-center gap-4 mb-8">
                        <span class="h-px w-10 bg-primary"></span>
                        <span class="text-xs font-black uppercase tracking-[0.3em] text-primary">Trusted NDIS Support Australia</span>
                    </div>
                    <h2 class="ndis-hero-title text-4xl md:text-6xl lg:text-7xl font-black leading-[0.9] mb-12 text-balance tracking-tighter">
                        NDIS <span class="italic font-serif font-medium text-primary">Information</span>
                    </h2>
                    <p class="ndis-hero-lead text-xl lg:text-2xl text-slate-950 font-light leading-relaxed max-w-5xl border-l-4 border-blue pl-8">
                        Navigating the National Disability Insurance Scheme (NDIS) can feel complex. At Ozland Care, we’re here to simplify the process and support you every step of the way. Our goal is to help you access the right services so you can live more independently, confidently, and comfortably.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <section class="ndis-section py-20">
        <div class="container mx-auto px-6 max-w-7xl">

            <h2 class="ndis-h2 text-4xl lg:text-5xl font-extrabold mb-6 leading-tight text-slate-900">
                Understanding the NDIS and <br />
                <span class="text-blue">How Ozland Care Supports You</span>
            </h2>

            <p class="text-slate-950 text-lg leading-relaxed mb-8">
                We make your NDIS journey easier to understand and manage, helping you move towards a more independent and fulfilling life.
            </p>

            <div class="mb-10">
                <span class="text-xs font-bold uppercase tracking-widest text-slate-600 block mb-1">
                    Our Focus
                </span>
                <span class="text-lg font-semibold text-primary">
                    Practical Support & Maximising Your Plan
                </span>
            </div>

            <div class="space-y-6 text-slate-950 lg:text-lg">

                <p>
                    If you're new to the NDIS (National Disability Insurance Scheme), it’s an Australian Government initiative designed to support people living with disability to live more independently and take part in everyday life.
                </p>

                <p>
                    The NDIS provides funding to eligible participants so they can access supports such as assistance with daily living, community participation, therapies, and specialised accommodation where required.
                </p>

                <p class="italic text-slate-800">
                    "Understanding how the NDIS works can sometimes feel overwhelming for participants and their families."
                </p>

                <p>
                    That’s where Ozland Care comes in. We deliver reliable, person-centred support aligned with your NDIS plan and goals. Our team works closely with participants, families, and support coordinators to ensure you receive the right support at the right time.
                </p>

            </div>

        </div>
    </section>


    <section class="ndis-section ndis-section--faq py-12 lg:py-20 bg-white">
        <div class="container mx-auto px-6 max-w-6xl">

            <div class="ndis-faq-head text-center mb-16">
                <span class="text-primary font-black uppercase tracking-[0.5em] text-[10px] mb-4 block">
                    Knowledge Base
                </span>
                <h2 class="ndis-h2 text-4xl lg:text-5xl font-black tracking-tight text-blue">
                    Frequently Asked Questions About the NDIS
                </h2>
            </div>

            <div class="ndis-faq-grid grid md:grid-cols-2 gap-12 text-slate-950 lg:text-lg">

                <!-- LEFT COLUMN -->
                <div class="space-y-6">

                    <div>
                        <h3 class="font-bold text-lg mb-3">What is the NDIS and who can access it?</h3>

                        <p class="mb-3">
                            The NDIS is a government-funded scheme that supports Australians living with a permanent or significant disability.
                        </p>

                        <p class="mb-3">
                            It provides funding so participants can access services that improve independence, daily living, and community involvement.
                        </p>

                        <p class="mb-2">To be eligible, you generally need to:</p>

                        <ul class="list-disc pl-5 space-y-1 mb-3">
                            <li>Be under 65 years of age</li>
                            <li>Be an Australian citizen, permanent resident, or hold a Protected Special Category Visa</li>
                            <li>Have a permanent or significant disability affecting daily life</li>
                        </ul>

                        <p>
                            Once approved, you’ll receive an NDIS plan outlining your funding and supports.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-lg mb-3">
                            How does Ozland Care make the NDIS easier to understand?
                        </h3>

                        <p class="mb-3">
                            The NDIS can be confusing at first, especially when it comes to understanding funding categories and how to use your plan effectively.
                        </p>

                        <p class="mb-3">
                            At Ozland Care, we aim to make the process simple, clear, and stress-free.
                        </p>

                        <h4 class="font-semibold mb-2">Clear, Practical Guidance</h4>

                        <p>
                            We explain your NDIS plan in straightforward language, helping you understand what supports are available and how to make the most of them.
                        </p>
                    </div>

                </div>

                <!-- RIGHT COLUMN -->
                <div class="space-y-6">

                    <div>
                        <h3 class="font-bold text-lg mb-3">How do I start receiving NDIS supports?</h3>

                        <p>
                            Begin by applying for the NDIS to check your eligibility. Once approved, you’ll receive a plan with allocated funding. You can then choose a registered provider like Ozland Care to deliver your supports.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-lg mb-3">Using Your NDIS Plan Effectively</h3>

                        <p>
                            We help you understand your funding and guide you in choosing supports that align with your goals, lifestyle, and daily needs.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-lg mb-3">
                            Working with Families and Support Coordinators
                        </h3>

                        <p>
                            We work closely with families, carers, and coordinators to ensure a smooth and well-managed support experience tailored to each participant.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <?php get_template_part('template-parts/content', 'cta'); ?>

</div>

<?php get_footer(); ?>