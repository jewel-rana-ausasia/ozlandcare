<?php

/**
 * Template Name: About Us - NDIS
 * Description: Professional About Us page template for NDIS provider
 */

get_header();
?>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes floatUp {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }

    .animate-slideInLeft {
        animation: slideInLeft 0.8s ease-out forwards;
        opacity: 0;
    }

    .animate-slideInRight {
        animation: slideInRight 0.8s ease-out forwards;
        opacity: 0;
    }

    .animate-floatUp {
        animation: floatUp 3s ease-in-out infinite;
    }

    .delay-1 {
        animation-delay: 0.1s;
    }

    .delay-2 {
        animation-delay: 0.2s;
    }

    .delay-3 {
        animation-delay: 0.3s;
    }

    .delay-4 {
        animation-delay: 0.4s;
    }

    .delay-5 {
        animation-delay: 0.5s;
    }

    .delay-6 {
        animation-delay: 0.6s;
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<!-- OUR STORY SECTION -->
<section class="py-12 bg-white lg:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Image -->
            <div class="animate-slideInLeft">
                <div class="rounded-[2rem] overflow-hidden shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-main.png"
                        alt="NDIS Disability Support Service in Australia"
                        class="w-full h-auto object-cover aspect-square lg:aspect-auto">
                </div>
            </div>

            <!-- Content -->
            <div class="animate-slideInRight">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-primary font-semibold text-lg">About Us</span>
                    <svg class="w-4 h-4 text-primary transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </div>

                <h2 class="text-4xl lg:text-5xl font-bold text-[#0A1D37] mb-8 leading-tight">
                    Who <span class="text-primary">We Are</span>
                </h2>

                <div class="space-y-3 text-slate-950 text-lg font-medium leading-relaxed max-w-2xl">
                    <p>
                        Ozland Care provides disability and community services to plan-managed and self-managed Participants/ Clients, in the Greater Sydney area.
                    <p>
                        We are a team of professionals, passionate about delivering high quality, compassionate and individualized care.
                    </p>
                    <p>
                        We understand that every individual has unique preferences, goals and may have specialised needs. This is embedded in our person-centred approach to ensure that our services are tailored to suit each of our Participants/ Clients.
                    </p>
                    <p>
                        At Ozland Care, we value our Participants/ Clients, and are dedicated towards their health and wellbeing.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MISSION & VISION SECTION -->
<section class="relative py-10 md:py-20 bg-blue overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute -top-48 -left-48 w-[30rem] h-[30rem] bg-[#0096c7]/10 rounded-full blur-[100px]"></div>
        <div class="absolute -bottom-48 -right-48 w-[30rem] h-[30rem] bg-[#0077b6]/10 rounded-full blur-[100px]"></div>
    </div>

    <div class="container max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight tracking-tight">
                Mission & Vision
            </h2>
            <div class="w-20 h-1 bg-primary mx-auto mb-6 rounded-full"></div>
            <p class="text-white text-lg max-w-3xl mx-auto">
                At Ozland Care, we are committed to empowering every individual to live independently, confidently and with purpose.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
            <div class="group relative p-[1px] rounded-[2.5rem] hover:bg-gradient-to-b hover:from-[#0096c7] hover:to-transparent transition-all duration-700 shadow-2xl">
                <div class="bg-white backdrop-blur-2xl rounded-[2.5rem] p-10 h-full flex flex-col items-start border border-white/5">
                    <div class="mb-8 relative">
                        <div class="w-16 h-16 bg-[#0096c7]/10 rounded-2xl flex items-center justify-center transition-transform duration-500 group-hover:rotate-[12deg] border border-[#0096c7]/20">
                            <i class="fas fa-bullseye text-3xl text-primary"></i>
                        </div>
                        <div class="absolute -inset-4 bg-[#0096c7]/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-5">Our Mission</h3>
                    <p class="text-slate-950 leading-relaxed text-lg mb-8">
                        Bring real and positive change to the way disability is perceived, by providing a person-centred, strength based and active support to individuals with disabilities, with the sole intention to improve the quality of their lives.
                    </p>

                </div>
            </div>

            <div class="group relative p-[1px] rounded-[2.5rem] bg-white/5 hover:bg-gradient-to-b hover:from-[#00b4d8] hover:to-transparent transition-all duration-700 shadow-2xl">
                <div class="bg-white backdrop-blur-2xl rounded-[2.5rem] p-10 h-full flex flex-col items-start border border-white/5">
                    <div class="mb-8 relative">
                        <div class="w-16 h-16 bg-[#00b4d8]/10 rounded-2xl flex items-center justify-center transition-transform duration-500 group-hover:-rotate-[12deg] border border-[#00b4d8]/20">
                            <i class="fas fa-lightbulb text-3xl text-primary"></i>
                        </div>
                        <div class="absolute -inset-4 bg-[#00b4d8]/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-5">Our Vision</h3>
                    <p class="text-slate-950 leading-relaxed text-lg mb-8">
                        We strive to lead by example, deliver high quality, compassionate and individualized care, which will enhance independence, choice and control for our participants, their families and carers to the next level.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES SECTION -->
<section class="bg-white py-10 md:py-20 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>

    <div class="container mx-auto px-6">
        <div class="flex flex-col items-center text-center justify-center mb-16">
            <div class="max-w-2xl">
                <h2 class="text-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">Our Foundation</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 leading-tight">
                    Our Core Values
                </h3>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 gap-5">

            <?php
            $values = [
                [
                    'title' => 'Integrity',
                    'desc'  => 'We believe in openness, honesty and demonstrate strong moral principles. By doing the right thing, even when no one is watching!',
                    'icon'  => 'fas fa-scale-balanced'
                ],
                [
                    'title' => 'Respect',
                    'desc'  => 'We are open to everyone’s unique ideas, beliefs, cultures, and personal situations.',
                    'icon'  => 'fas fa-hands-holding'
                ],
                [
                    'title' => 'Accountability',
                    'desc'  => 'We proudly deliver our services and take responsibility for our actions. We learn from our experience and improve.',
                    'icon'  => 'fas fa-clipboard-check'
                ],
                [
                    'title' => 'Trust',
                    'desc'  => 'We build a healthy relationship, where everyone can have confidence, trust, and feel safe around each other, physically and emotionally.',
                    'icon'  => 'fas fa-handshake'
                ],
                [
                    'title' => 'Empowerment',
                    'desc'  => 'We listen and work on your interests and strengths to give you choice and control, so you can make your own decisions around your support and other aspects of your care.',
                    'icon'  => 'fas fa-bolt'
                ],
            ];
            ?>

            <?php foreach ($values as $i => $v): ?>
                <div class="group relative bg-gray-50 rounded-[2rem] p-10 transition-all duration-500 hover:bg-white hover:shadow-[0_30px_60px_-15px_rgba(13,148,136,0.15)] overflow-hidden shadow-md">

                    <!-- Background Icon -->
                    <div class="absolute -top-6 -right-6 text-primary/5 group-hover:text-primary/10 transition-colors">
                        <i class="<?= $v['icon'] ?> text-9xl"></i>
                    </div>

                    <!-- Main Icon -->
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-10 shadow-sm group-hover:shadow-primary/10 group-hover:bg-primary transition-all duration-300">
                        <i class="<?= $v['icon'] ?> text-primary group-hover:text-white text-2xl"></i>
                    </div>

                    <!-- Title -->
                    <h4 class="text-xl font-bold text-gray-900 mb-4">
                        <?= esc_html($v['title']) ?>
                    </h4>

                    <!-- Description -->
                    <p class="text-slate-950 leading-relaxed text-sm font-medium">
                        <?= esc_html($v['desc']) ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>




<!-- Testimonials Section Started -->
<?php
// Testimonials Data
$testimonials_subtitle = "Client Testimonials";
$testimonials_title = "Voices of <span class='font-serif italic text-blue-600'>Trust</span>";
$testimonials_desc = "Real feedback from participants and families who trust Ozland Care for their support.";

$testimonials = [
    [
        'name'     => 'Jackie Smith',
        'role'     => 'Carer',
        'quote'    => "Providing good service. The support worker was absolutely good and very punctual and get me out of bed in time too. I'm very happy and would like to continue the service with Ozland Care",
        'initials' => 'JS',
    ],
    [
        'name'     => 'Abeda',
        'role'     => 'Local Guide',
        'quote'    => "I really can’t speak highly enough of Majid and Ozland Care. The service provided is of high quality and standard, and the team always goes the extra mile to ensure client satisfaction. I am so grateful to have Majid working with my brother as I am confident he is in good hands, and is being treated fairly and respectfully, and with genuine care. I would not hesitate in recommending Majid and the team at Ozland Care.",
        'initials' => 'A',
    ],
    [
        'name'     => 'Scott Turner',
        'role'     => 'NDIS Participant',
        'quote'    => 'I have been with Oz land care from late last year. I have found Majid and his staff very helpful and respectful. My personal development aspect,I feel has improved by their help.My personal development has improved also by their help.I highly recommend this provider to all genuinely looking for their needs to be met Regards Scott Turner',
        'initials' => 'ST',
    ],
    [
        'name'     => 'Azzam Siddiqui',
        'role'     => 'Local Guide',
        'quote'    => "Majid provided me with the full range of supports. I had a lot of trouble trying to understand how to use the NDIS funding appropriately and he went above and beyond in his service. Can't recommend him enough. It's very easy to be confused and get taken advantage of within the NDIS labyrinth but I can definitely trust that Majid and his team always do the right thing.",
        'initials' => 'AS',
    ],
    [
        'name'     => 'Basima Ghanem',
        'role'     => 'NDIS Participant',
        'quote'    => 'We are very happy to be with Ozlandcare they take their work with strong commitment and respect I would highly recommend Ozlandcare to anyone looking for a provider',
        'initials' => 'BG',
    ],
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Force Swiper slides to match the height of the tallest card */
    .swiper-wrapper {
        display: flex;
        align-items: stretch;
        /* This ensures all slides are the same height */
    }

    .swiper-slide {
        height: auto;
        /* Required for 'stretch' to work */
        display: flex;
    }

    .testimonial-swiper {
        padding: 40px 20px 70px 20px !important;
    }

    /* Custom Dot Styling */
    .swiper-pagination-bullet {
        background: #6F2C91;
        opacity: 0.3;
    }

    .swiper-pagination-bullet-active {
        background: #6F2C91 !important;
        width: 24px !important;
        /* Elongated active dot */
        border-radius: 12px !important;
        opacity: 1;
    }
</style>

<section class="relative py-10 lg:py-20 bg-white overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full opacity-[0.03]" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-[#F3E8FA] rounded-full blur-[120px]"></div>
    </div>

    <div class="relative z-10 container max-w-7xl mx-auto px-6 xl:px-0">
        <div class="text-center mb-5">
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6 tracking-tight">
                What Do Our <span class="italic font-serif text-[#6F2C91]">Client's Say?</span>
            </h2>
            <p class="text-slate-950 text-lg max-w-3xl mx-auto leading-relaxed">
                Real stories from participants and families whose lives have been transformed by our care.
            </p>
        </div>

        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $t): ?>
                    <div class="swiper-slide">
                        <div class="group relative flex flex-col flex-1 h-full p-8 lg:p-10 rounded-2xl bg-primary transition-all duration-500 hover:-translate-y-2">

                            <div class="mb-6">
                                <svg class="w-10 h-10 text-blue opacity-90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21L14.017 18C14.017 14.686 16.703 12 20 12L20 10C16.134 10 13 13.134 13 17L13 21H14.017ZM3.017 21H4.017L4.017 18C4.017 14.686 6.703 12 10 12L10 10C6.134 10 3 13.134 3 17L3 21Z" />
                                </svg>
                            </div>

                            <div class="flex-grow">
                                <p class="text-white/90 text-base leading-relaxed font-light mb-4">
                                    "<?= htmlspecialchars($t['quote']) ?>"
                                </p>
                            </div>

                            <div class="flex items-center gap-4 pt-6 border-t border-white/10">
                                <div class="w-12 h-12 flex-shrink-0 rounded-full overflow-hidden border-2 border-white/20">
                                    <div class="w-full h-full bg-gradient-to-br from-[#6F2C91] to-[#00AEEF] flex items-center justify-center text-white text-xs font-bold">
                                        <?= $t['initials'] ?>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-base leading-none mb-1">
                                        <?= htmlspecialchars($t['name']) ?>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            // Essential for equal height slides
            autoHeight: false,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1280: {
                    slidesPerView: 3,
                }
            }
        });
    });
</script>
<!-- Testimonials Section Ended -->



<!-- Faq Section -->
<!-- Faq Section -->
<?php
$faq_title = "Frequently asked questions";
$faq_description = "Transparent answers to help you navigate your NDIS journey with confidence and clarity.";

// Sidebar Support Cards - Stylized with Deep Blue

// Expanded FAQ List (5 Questions)
$faqs = [
    [
        'q' => 'What is NDIS?',
        'a' => 'The National Disability Insurance Scheme provides personalised funding for eligible Australians with permanent, significant disability.'
    ],
    [
        'q' => 'How do I apply for NDIS?',
        'a' => 'Contact the NDIA directly or speak with our team who can guide you through the application process and gathering required evidence.'
    ],
    [
        'q' => 'Are you NDIS registered?',
        'a' => 'Yes, we are fully NDIS registered and compliant with all quality standards and requirements set by the NDIS Quality and Safeguards Commission.'
    ],
    [
        'q' => 'What services do you offer?',
        'a' => 'We offer personal care, community support, skill development, employment support, respite care, and support coordination.'
    ],
    [
        'q' => 'Can I change my provider at any time?',
        'a' => 'Yes. Under NDIS, you have choice and control. You can switch providers as long as you meet the notice periods outlined in your service agreement.'
    ],
];
?>

<?php
get_template_part(
    'template-parts/service-single/faq',
    null,
    ['faqs' => $faqs]
);
?>



<!-- CTA Section -->
<?php get_template_part('template-parts/content', 'cta'); ?>

<?php get_footer();
