<?php

/**
 * Template Name: Our Services
 * Description: A professional services layout with perfectly aligned action buttons.
 */

get_header();

// 1. Data Array with Professional Permalinks
$services = [
    // 1) Support Coordination
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/ndis-support-coordination.jpg',
        'title'       => 'Support Coordination',
        'description' => 'Guidance to help participants understand and implement their NDIS plans, connect with providers, and achieve their goals.',
        'href'        => site_url('/ndis-support-coordination/')
    ],

    // 2) Supported Independent Living (SIL)
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/assist-daily-tasks-or-shared-living.jpg',
        'title'       => 'Supported Independent Living (SIL)',
        'description' => 'Support with daily living tasks within shared or individual living spaces to promote independence.',
        'href'        => site_url('/assist-daily-tasks-shared-living/')
    ],

    // 3) Community Participation
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/innovative-community-participation.jpg',
        'title'       => 'Community Participation',
        'description' => 'Engaging and creative programs that foster active involvement in community, social, and civic life.',
        'href'        => site_url('/innovative-community-participation/')
    ],

    // 4) Assist-Personal Activities
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/assist-personal-activities.jpg',
        'title'       => 'Assist-Personal Activities',
        'description' => 'Help with daily personal activities such as hygiene, grooming, and self-care to maintain wellbeing.',
        'href'        => site_url('/assist-personal-activities/')
    ],

    // 5) Innovative Community Participation
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/assistance-with-social-and-community-participation.jpg',
        'title'       => 'Innovative Community Participation',
        'description' => 'Support to engage in community, social, and recreational activities, helping participants build connections and confidence.',
        'href'        => site_url('/assistance-with-social-and-community-participation/')
    ],

    // 6) Development-Life Skills
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/development-of-daily-living-and-life-skills.jpg',
        'title'       => 'Development-Life Skills',
        'description' => 'Personalised coaching and support to build practical life skills and enhance self-reliance.',
        'href'        => site_url('/development-of-daily-living-life-skills/')
    ],

    // 7) Household Tasks
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/household-tasks.jpg',
        'title'       => 'Household Tasks',
        'description' => 'Assistance with cleaning, laundry, meal preparation, and daily household responsibilities.',
        'href'        => site_url('/household-tasks/')
    ],

    // 8) Assist-Travel/Transport
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/assist-traveltransport.jpg',
        'title'       => 'Assist-Travel/Transport',
        'description' => 'Safe, reliable transport solutions to attend appointments, community outings, and personal errands.',
        'href'        => site_url('/assist-travel-transport/')
    ],

    // 9) Group/Centre Activities
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/group-or-centre-based-activities.jpg',
        'title'       => 'Group/Centre Activities',
        'description' => 'Facilitated group activities and centre-based programs that encourage social connections and learning.',
        'href'        => site_url('/group-centre-based-activities/')
    ],

    // 10) Specialised Driver Training
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/specialised-driver-training.jpg',
        'title'       => 'Specialised Driver Training',
        'description' => 'Structured training to build safe driving skills and confidence behind the wheel.',
        'href'        => site_url('/specialised-driver-training/')
    ],

    // 11) Home Modification
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/home-modification-design-and-construction.jpg',
        'title'       => 'Home Modification',
        'description' => 'Tailored home modification design and construction to enhance accessibility and independence.',
        'href'        => site_url('/home-modification-design-construction/')
    ],

    // Remaining existing services
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/daily-personal-care.jpg',
        'title'       => 'Daily Personal Care',
        'description' => 'Assistance with everyday personal care tasks, including showering, dressing, grooming, and maintaining personal hygiene.',
        'href'        => site_url('/daily-personal-care/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/participation-in-community-social-and-civic-activities.jpg',
        'title'       => 'Participation in Community, Social & Civic Activities',
        'description' => 'Opportunities to engage in meaningful social, civic, and community experiences.',
        'href'        => site_url('/participation-in-community-social-civic-activities/')
    ]
];
?>

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Smooth scrolling for the container */
    #service-slider {
        scroll-behavior: smooth;
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .services-section-container {
            max-width: none !important;
            padding-right: 0.75rem !important;
            padding-left: 0.75rem !important;
        }
    }
</style>

<section class="relative bg-white overflow-hidden">
    <div class="absolute top-0 w-full h-[400px] bg-blue z-0"></div>

    <div class="services-section-container container mx-auto px-6 xl:px-0 pt-20 pb-20 relative z-10">

        <div class="text-center mb-16">
            <h2 class="text-4xl xl:text-5xl font-bold text-white mb-4 tracking-tight">Our Services</h2>
            <div class="w-20 h-1 bg-orange-400 mx-auto rounded-full"></div>
        </div>

        <div id="service-slider" class="flex overflow-x-auto no-scrollbar gap-5 pb-10 snap-x snap-mandatory">
            <?php foreach ($services as $service) : ?>
                <div class="flex-shrink-0 w-full md:w-[calc(50%-0.625rem)] xl:w-[calc(25%-15px)] snap-start group bg-white rounded-[2rem] shadow-lg overflow-hidden flex flex-col transition-all duration-500 hover:scale-[1.02] my-4">
                    <div class="p-2 pb-0">
                        <a href="<?php echo esc_url($service['href']); ?>" class="block">
                            <div class="relative h-72 md:h-80 lg:h-96 xl:h-72 w-full rounded-[1.5rem] overflow-hidden">
                                <img src="<?php echo esc_url($service['image_url']); ?>"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                    alt="<?php echo esc_attr($service['title']); ?>">
                                <div class="absolute inset-0 bg-black/10"></div>
                            </div>
                        </a>
                    </div>

                    <div class="p-10 pt-4 flex flex-col items-center text-center flex-1">
                        <a href="<?php echo esc_url($service['href']); ?>" class="inline-block">
                            <h3 class="text-2xl font-bold text-slate-900 mb-4 tracking-tight hover:text-blue transition-colors duration-300">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                        </a>

                        <p class="text-slate-900 text-base leading-relaxed mb-5 min-h-[4.5rem]">
                            <?php echo esc_html($service['description']); ?>
                        </p>
                        <a href="<?php echo esc_url($service['href']); ?>"
                            class="mt-auto inline-flex items-center justify-center gap-3 w-full py-3 bg-primary hover:bg-blue text-white font-bold rounded-2xl transition-all duration-300 shadow-lg">
                            View Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="flex justify-center items-center gap-4 mt-5">
            <button onclick="scrollSlider('left')" class="p-4 rounded-full bg-slate-100 text-slate-800 hover:bg-blue hover:text-white transition-all duration-300 shadow-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button onclick="scrollSlider('right')" class="p-4 rounded-full bg-slate-100 text-slate-800 hover:bg-blue hover:text-white transition-all duration-300 shadow-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    const slider = document.getElementById('service-slider');
    let autoSlideInterval;
    const slideSpeed = 4000; // Time in milliseconds (4 seconds)

    function scrollSlider(direction) {
        // Reset the auto-slide timer when user manually interacts
        resetAutoSlide();

        const scrollAmount = slider.clientWidth;

        if (direction === 'left') {
            // If at the very beginning, loop to the end
            if (slider.scrollLeft <= 0) {
                slider.scrollTo({
                    left: slider.scrollWidth,
                    behavior: 'smooth'
                });
            } else {
                slider.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            }
        } else {
            // If at the very end (allowing a 5px buffer for rounding errors), loop back to start
            if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 5) {
                slider.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                });
            } else {
                slider.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        }
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            // Trigger right scroll automatically
            const scrollAmount = slider.clientWidth;
            if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 5) {
                slider.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                });
            } else {
                slider.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        }, slideSpeed);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    function resetAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }

    // Run auto-slide on load
    startAutoSlide();

    // Pause auto-sliding when mouse hovers over the slider container
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);
</script>

<!-- CTA Section -->
<?php get_template_part('template-parts/content', 'cta'); ?>



<?php get_footer(); ?>
