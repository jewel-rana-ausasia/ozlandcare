<section class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6 reveal">
            <div class="max-w-3xl">
                <h2 class="font-serif text-4xl text-slate-900 mb-4">Reasons to Choose Us for <span class="text-primary">Daily Living & Shared Support</span></h2>
                <p class="text-slate-950 text-base">As a registered NDIS provider, Ozland Care focuses on delivering person-centred support tailored to your needs, goals and preferences.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = [
                ['fas fa-ear-listen', 'Active Listening', 'We take the time to understand your routines, preferences and daily challenges, ensuring support is meaningful and effective.'],
                ['fas fa-user', 'Person-Centred Approach', 'Your choices guide every step. We adapt support to your lifestyle, ensuring comfort, dignity and independence in daily life.'],
                ['fas fa-scale-balanced', 'Promote Choice and Control', 'You remain in control of your routines and shared living arrangements, with support tailored to your needs.'],
                ['fas fa-dumbbell', 'Strengths-Based Support', 'We focus on your abilities, helping you build skills, confidence and independence in daily living.'],
                ['fas fa-house', 'Safe and Comfortable Living', 'Support ensures shared or individual living environments are safe, well-managed and welcoming.'],
                ['fas fa-earth-asia', 'Identity & Culture', 'We honour your cultural, language and gender preferences, creating a supportive environment where you feel valued and heard.']
            ];

            foreach ($services as $i => $svc): ?>
                <div class="group relative p-10 rounded-[2.5rem] bg-[#fafcfc] border border-slate-100 transition-all duration-500 hover:bg-white hover:shadow-[0_30px_60px_rgba(15,23,42,0.08)] overflow-hidden reveal" style="transition-delay: <?php echo $i * 100; ?>ms">

                    <!-- Background Icon -->
                    <div class="absolute -top-6 -right-6 text-primary/5 group-hover:text-primary/10 transition-colors duration-500">
                        <i class="<?php echo $svc[0]; ?> text-9xl"></i>
                    </div>

                    <!-- Icon Box -->
                    <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-8 transition-all duration-300 group-hover:bg-primary group-hover:scale-110">
                        <i class="<?php echo $svc[0]; ?> text-3xl text-primary group-hover:text-white transition-colors"></i>
                    </div>

                    <h4 class="text-xl font-bold text-slate-900 mb-3 relative z-10"><?php echo $svc[1]; ?></h4>
                    <p class="text-slate-950 leading-relaxed text-sm relative z-10"><?php echo $svc[2]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-24 bg-[#fafcfc]">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-20 reveal">
            <h2 class="font-serif text-4xl text-slate-900 mb-4">The Impact of Our <span class="italic text-primary">Daily Living & Shared Support</span></h2>
            <div class="flex justify-center">
                <svg width="320" height="40" viewBox="0 0 320 40" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="purpleBrushGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#4a1f63" />
                            <stop offset="40%" style="stop-color:#5f2a7d" />
                            <stop offset="60%" style="stop-color:#5f2a7d" />
                            <stop offset="100%" style="stop-color:#8541a8" />
                        </linearGradient>

                        <filter id="brushTexture" x="-20%" y="-20%" width="140%" height="140%">
                            <feTurbulence type="fractalNoise" baseFrequency="0.05" numOctaves="3" result="noise" />
                            <feDisplacementMap in="SourceGraphic" in2="noise" scale="3" result="distorted" />
                            <feGaussianBlur in="distorted" stdDeviation="0.5" result="soft" />
                        </filter>
                    </defs>

                    <path d="M20 20C100 10 220 30 300 15"
                        fill="none"
                        stroke="url(#purpleBrushGradient)"
                        stroke-width="12"
                        stroke-linecap="round"
                        filter="url(#brushTexture)"
                        style="opacity: 0.9;" />

                    <path d="M25 22C105 12 215 32 295 17"
                        fill="none"
                        stroke="#ffffff"
                        stroke-width="1"
                        stroke-linecap="round"
                        style="opacity: 0.2;" />
                </svg>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">
            <div class="space-y-12">
                <?php
                $steps = [
                    ['Personalised Support', 'We create care plans that reflect your routines, goals and preferences to make daily life smoother and more enjoyable.'],
                    ['Independence and Confidence', 'Assistance helps you manage household tasks and shared living responsibilities, promoting self-reliance and confidence.'],
                    ['Emotional and Social Support', 'Our team provides companionship and guidance to reduce isolation, foster friendships and create a positive home environment.'],
                    ['Holistic Approach', 'Support is designed to address both practical needs and emotional well-being, helping you feel safe, respected and empowered.']
                ];
                foreach ($steps as $idx => $step): ?>
                    <div class="flex gap-8 reveal" style="transition-delay: <?php echo $idx * 150; ?>ms">
                        <span class="step-number text-6xl font-black leading-none text-slate-200"><?php echo sprintf('%02d', $idx + 1); ?></span>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-3"><?php echo $step[0]; ?></h4>
                            <p class="text-slate-700 leading-relaxed"><?php echo $step[1]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="bg-primary p-12 lg:p-16 rounded-[3rem] text-white relative overflow-hidden reveal h-full flex">
                <div class="relative z-10 flex flex-col justify-center">
                    <h3 class="font-serif text-3xl mb-6 italic">Empowering Home Life</h3>
                    <p class="text-teal-50/80 leading-relaxed mb-8">
                        At Ozland Care, we believe that support in the home should be seamless and respectful. Our team works to ensure your living environment is not just functional, but a place where you can truly thrive.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Developing vital life skills for independence</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Support with daily personal and household tasks</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Fostering positive shared living dynamics</span>
                        </li>
                    </ul>
                </div>
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-white/5 rounded-full"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-[#f8fafb]">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="max-w-3xl mb-20 reveal">
            <div class="flex items-center gap-3 mb-4">
                <span class="w-12 h-[1px] bg-primary"></span>
                <span class="text-[0.7rem] uppercase tracking-[0.4em] text-primary font-bold">Comprehensive Support</span>
            </div>
            <h2 class="font-serif text-4xl md:text-5xl text-slate-900 mb-6 leading-tight">
                Complete Daily Living & <span class="italic font-light">Shared Support</span>
                <span class="text-primary mt-2">Services in Sydney</span>
            </h2>
            <p class="text-slate-800 text-base leading-relaxed">
                Our services are designed to align with your NDIS plan and individual living arrangements:
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $portfolio = [
                ['Household Tasks', 'Assistance with cleaning, laundry, meal preparation and other daily household activities to keep your home running smoothly.'],
                ['Shared Living Support', 'Help coordinate routines, responsibilities and communal spaces to ensure harmony and independence among housemates.'],
                ['Personal Care & Hygiene', 'Professional support with grooming, dressing and other personal care tasks delivered with dignity and respect.'],
                ['Skill Development', 'Practical guidance to develop life skills that promote independence in daily living and shared environments.'],
                ['Emotional and Social Support', 'Providing companionship and fostering meaningful connections with housemates or the wider community.'],
                ['Routine Planning', 'Support to create practical daily routines that balance household responsibilities, personal goals and shared living needs.']
            ];

            foreach ($portfolio as $index => $item): ?>
                    <div class="group relative bg-white p-10 rounded-[2rem] shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] transition-all duration-500 reveal
                        before:content-[''] before:absolute before:inset-0 before:rounded-[2rem] before:border before:border-transparent
                        before:transition-all before:duration-500
                        hover:before:border-primary hover:before:shadow-[0_0_0_3px_rgba(147,51,234,0.15)]"
                    style="transition-delay: <?php echo $index * 100; ?>ms">
                    <div class="absolute top-10 right-10 w-2 h-2 rounded-full bg-slate-100 group-hover:bg-primary transition-colors duration-500"></div>
                    <div class="relative z-10">
                        <span class="text-[0.6rem] font-bold tracking-[0.2em] text-slate-300 uppercase mb-6 block">Service Option <?php echo sprintf('%02d', $index + 1); ?></span>
                        <h4 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-primary transition-colors duration-300"><?php echo $item[0]; ?></h4>
                        <div class="w-8 h-[1px] bg-slate-200 mb-6 group-hover:w-16 group-hover:bg-primary transition-all duration-500"></div>
                        <p class="text-slate-800 text-sm leading-relaxed group-hover:text-slate-700 transition-colors duration-300"><?php echo $item[1]; ?></p>
                    </div>
                    <div class="absolute bottom-0 right-0 w-24 h-24 bg-gradient-to-br from-transparent to-primary/[0.02] rounded-br-[2rem]"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="mb-16 reveal">
            <h2 class="font-serif text-4xl text-slate-900 mb-8 leading-tight">
                Advantages of <span class="text-primary">Daily Living & Shared Support</span>
            </h2>
            <p class="text-slate-700 text-base leading-relaxed mb-6">
                Choosing Ozland Care for assistance with daily tasks and shared living provides:
            </p>
        </div>

        <div class="space-y-10 reveal">
            <?php
            $benefits = [
                ['Increased Independence', 'Gain confidence managing daily routines and household responsibilities through tailored support.'],
                ['Safe and Comfortable Living', 'Ensure your home environment is secure, functional and supportive of your personal goals.'],
                ['Peace of Mind', 'Professional and compassionate support allows you and your loved ones to focus on what matters most.'],
                ['Skill Development', 'Build practical and social skills that enhance your independence and overall quality of life.'],
                ['Social Connection', 'Enjoy positive interactions in shared living arrangements while maintaining your privacy and choice.']
            ];

            foreach ($benefits as $benefit): ?>
                <div class="flex gap-6 md:gap-10 group">
                    <div class="flex flex-col items-center">
                        <div class="w-3 h-3 rounded-full border-2 border-primary bg-white group-hover:bg-primary transition-colors duration-300 mt-2 shrink-0"></div>
                        <div class="w-px h-full bg-slate-100 mt-2"></div>
                    </div>
                    <div class="pb-2">
                        <h4 class="text-xl font-bold text-slate-900 mb-2 tracking-tight"><?php echo $benefit[0]; ?></h4>
                        <p class="text-slate-600 leading-relaxed"><?php echo $benefit[1]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>




<?php get_template_part('template-parts/content', 'service-cta'); ?>


<!-- Faq Section -->
<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="mb-12 reveal">
            <div class="flex items-center gap-3 mb-4">
                <span class="w-10 h-[2px] bg-primary"></span>
                <span class="text-[0.7rem] uppercase tracking-[0.4em] text-primary font-bold">Reliability & Trust</span>
            </div>
            <h2 class="font-serif text-4xl md:text-5xl text-slate-900 leading-tight mb-6">
                Frequently Asked <span class="text-primary">Questions (FAQs)</span>
            </h2>
        </div>
        <div class="flex flex-col lg:flex-row gap-16 xl:gap-24 items-center">

            <div class="lg:w-1/2 relative reveal">
                <div class="absolute -top-10 -left-10 w-64 h-64 bg-teal-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
                <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-slate-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

                <div class="relative">
                    <div class="relative z-10 rounded-[3rem] overflow-hidden border-[12px] border-white shadow-2xl shadow-slate-200">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/get-the-clarity-you-deserve.jpg'); ?>"
                            alt="Ozland Care Support"
                            class="w-full h-[550px] object-cover">

                    </div>

                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-primary rounded-3xl -z-10 rotate-12"></div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 border-4 border-teal-100 rounded-full -z-10"></div>

                    <div class="absolute top-1/2 -translate-y-1/2 -right-12 w-24 h-48 opacity-20" style="background-image: radial-gradient(#006666 2px, transparent 2px); background-size: 15px 15px;"></div>
                </div>
            </div>

            <div class="lg:w-1/2">


                <div class="space-y-4">
                    <?php
                    $faqs = [
                        ['What support is provided with daily tasks in a shared living arrangement?', 'Support can include personal care, meal preparation, cleaning, household routines and assistance to build everyday living skills, based on your individual needs and goals.'],
                        ['Can the support be adjusted to suit my daily routine?', 'Yes. We work with you and your household to agree on a support schedule that reflects your usual routine, assessed needs, NDIS plan and available support hours.'],
                        ['Is assistance with daily tasks in shared living funded by the NDIS?', 'It may be funded through your Core Supports when it is considered reasonable and necessary and is included in your NDIS plan.'],
                        ['Will support workers help me become more independent?', 'Yes. Support workers can complete tasks with you, helping you develop the skills and confidence to manage more of your daily routine independently.'],
                        ['Can support help me live safely and comfortably with housemates?', 'Yes. Support workers can assist with household routines, shared responsibilities, communication and maintaining a safe and comfortable living environment.']
                    ];

                    foreach ($faqs as $i => $faq): ?>
                        <div class="faq-container group border-b border-slate-100 transition-all duration-300">
                            <button class="faq-header w-full flex items-center justify-between py-8 outline-none text-left">
                                <span class="text-lg md:text-xl font-bold text-slate-800 group-hover:text-blue transition-colors duration-300">
                                    <?php echo $faq[0]; ?>
                                </span>
                                <div class="relative w-6 h-6 flex items-center justify-center shrink-0">
                                    <div class="absolute w-full h-[2px] bg-slate-300 group-hover:bg-blue transition-all duration-300"></div>
                                    <div class="faq-icon-v absolute w-[2px] h-full bg-slate-300 group-hover:bg-primary transition-all duration-300"></div>
                                </div>
                            </button>
                            <div class="faq-body overflow-hidden transition-all duration-500 ease-in-out" style="max-height: 0;">
                                <div class="pb-8">
                                    <p class="text-slate-950 text-base leading-relaxed max-w-2xl border-l-2 border-blue pl-6">
                                        <?php echo $faq[1]; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Blob Animation */
    @keyframes blob {
        0% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }

        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    /* Active State Styling */
    .faq-container.active .faq-icon-v {
        transform: rotate(90deg);
        opacity: 0;
    }

    .faq-container.active {
        border-bottom-color: #0a74bb;
    }

    .faq-container.active button span {
        color: #0a74bb;
    }
</style>

<script>
    document.querySelectorAll('.faq-header').forEach(header => {
        header.addEventListener('click', () => {
            const container = header.parentElement;
            const body = container.querySelector('.faq-body');
            const isActive = container.classList.contains('active');

            // Close others
            document.querySelectorAll('.faq-container').forEach(c => {
                c.classList.remove('active');
                c.querySelector('.faq-body').style.maxHeight = '0';
            });

            // Toggle current
            if (!isActive) {
                container.classList.add('active');
                body.style.maxHeight = body.scrollHeight + "px";
            }
        });
    });
</script>
