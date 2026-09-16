<section class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6 reveal">
            <div class="max-w-3xl">
                <h2 class="font-serif text-4xl text-slate-900 mb-4">
                    Why Choose Ozland Care for <span class="text-primary">NDIS Support Coordination in Sydney?</span>
                </h2>

                <p class="text-slate-950 text-base">
                    At Ozland Care, we are dedicated to help participants in Sydney navigate the complexities of the NDIS with confidence and ease. As an NDIS-approved service provider, we deliver professional and compassionate Support Coordination services using a person-centred and strengths-based approach. Our team actively listens to your needs and focuses on promoting your choice, control, and independence without making assumptions about your needs.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = [
                ['fas fa-ear-listen', 'Active Listening', 'We take the time to understand your needs, goals, and preferences, ensuring that every decision we make aligns with your unique circumstances and NDIS plan. This allows us to provide support that is truly personalised for you.'],
                ['fas fa-user', 'Person-Centred Approach', 'You are at the centre of everything we do. We ensure that all our support and services reflect your individual values, goals, and preferences, giving you full control of your NDIS journey.'],
                ['fas fa-scale-balanced', 'Promote Your Choice and Control', 'We assist you in making informed decisions, ensuring that your preferences and goals guide the process. Our focus is on empowering you to manage your care while respecting what matters most to you.'],
                ['fas fa-dumbbell', 'Strengths-Based Support', 'We focus on your abilities to help you overcome challenges, achieve your goals, and build confidence. Our approach empowers you to navigate the NDIS system, reach your targets, and manage your journey with confidence.'],
                ['fas fa-house', 'Build Your Capacity', 'Our services help you develop the skills and confidence needed to manage your NDIS plan effectively, setting you up for long-term independence. We support you in taking charge of your care and making decisions that align with your goals.'],
                ['fas fa-earth-asia', 'Identity & Culture', 'We respect your cultural, language, and gender preferences, ensuring your support coordination is inclusive, culturally responsive, and centred on what matters to you.']
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

        <div class="py-8 space-y-6 text-slate-900">
            <p>
                Our experienced team is committed to ensuring you receive the right services to achieve your goals and make the most of your NDIS plan.
            </p>
            <p>
                By choosing Ozland Care, you're selecting a trusted local provider who genuinely cares about your well-being. We work closely with you and your family to offer personalised support and make your NDIS journey as smooth as possible. Our approach is centred around to help you maintain control over your care, empowering you to manage your NDIS plan and work towards a more independent, fulfilling life.
            </p>
        </div>
    </div>
</section>

<section class="py-24 bg-[#fafcfc]">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-20 reveal">
            <h2 class="font-serif text-4xl text-slate-900 mb-4">
                How Our Support Coordinators can Assist You
            </h2>
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
            <p class="text-slate-900 leading-relaxed my-8">
                Your dedicated Support Coordinator will guide you through every step of your NDIS journey to make sure you get the most out of your NDIS plan: </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">
            <div class="space-y-12">
                <?php
                $steps = [
                    ['Understanding Your NDIS Plan', 'We will help you fully understand your plan and how to use your funding effectively, so you are always in control.'],
                    ['Finding the Right Service Providers', 'We will assist you in finding providers that best suit your goals and needs, offering you options and supporting you in making the best choices.'],
                    ['Managing Communication', 'We will handle the communication with service providers and take care of the paperwork, so you don’t have to worry about the details while keeping you in control of the process.'],
                    ['Building Capacity and Independence', 'We will work with you to develop the skills you need to manage your plan independently. Whether it’s handling your funding, talking to providers, or advocating for yourself.'],
                    ['Ongoing Support', 'We will check in regularly to monitor your progress, adjust supports when needed, and make sure you’re on track to meet your goals, always helping you build more independence along the way.']
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
                    <h3 class="font-serif text-3xl mb-6 italic">NDIS Support Coordination</h3>

                    <p class="text-white/80 leading-relaxed mb-8">
                        NDIS Support Coordination helps you understand and implement your NDIS plan effectively. We guide you to use your funding efficiently and ensure you remain in control of your supports.
                    </p>

                    <p class="text-white/80 leading-relaxed mb-8">
                        Our team assists you in finding the right service providers, managing communication, and handling paperwork, all while supporting your independence. We focus on building your skills and confidence to manage your plan long-term.
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-white/70"></div>
                            </div>
                            <span class="text-sm font-medium text-white">Understanding Your NDIS Plan</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-white/70"></div>
                            </div>
                            <span class="text-sm font-medium text-white">Finding the Right Service Providers</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-white/70"></div>
                            </div>
                            <span class="text-sm font-medium text-white">Managing Communication</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-white/70"></div>
                            </div>
                            <span class="text-sm font-medium text-white">Building Capacity and Independence</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-white/70"></div>
                            </div>
                            <span class="text-sm font-medium text-white">Ongoing Support</span>
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
                <span class="text-[0.7rem] uppercase tracking-[0.4em] text-primary font-bold">Services Portfolio</span>
            </div>
            <h2 class="font-serif text-4xl md:text-5xl text-slate-900 mb-6 leading-tight">
                Personalised Support for <span class="italic font-light"></span>
                <span class="text-primary mt-2">Your Unique Needs</span>
            </h2>

            <p class="text-slate-800 text-base leading-relaxed">
                At Ozland Care, we understand that every participant’s journey is unique. That’s why we provide personalised support focused on helping you build your skills, increase your independence, and take control of your NDIS plan. </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $portfolio = [
                ['Set Clear Goals', 'We will help you define meaningful, achievable goals that are aligned with your aspirations and NDIS plan.'],
                ['Evaluate Progress', 'We will regularly check in to track your progress and adjust your goals to ensure you\'re heading in the right direction.'],
                ['Prepare for Plan Renewals', 'We help you gather information, review outcomes and prepare confidently for your next NDIS plan meeting.'],
                ['Connect with Providers', 'We help you identify and connect with suitable providers whose services align with your needs, preferences and goals.'],
                ['Build Plan Management Skills', 'Practical guidance helps you understand your funding, coordinate supports and make informed decisions with confidence.'],
                ['Resolve Service Challenges', 'We support you to address service gaps, communication issues and unexpected changes while keeping your plan on track.']
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



<?php get_template_part('template-parts/content', 'service-cta'); ?>
<?php if (false) : // Legacy duplicated CTA retained inactive for safe rollback. 
?>
    <!-- CTA Section -->
    <section class="py-10 xl:py-20 px-6 reveal">
        <div class="container mx-auto max-w-7xl">
            <div class="relative bg-white rounded-[3.5rem] shadow-[0_40px_100px_-20px_rgba(111,44,145,0.15)] border border-slate-100 overflow-hidden">

                <div class="flex flex-col lg:flex-row">

                    <!-- Left Info Panel -->
                    <div class="lg:w-1/2 p-12 lg:p-20 bg-primary text-white relative">
                        <div class="relative z-10">
                            <span class="text-[0.65rem] uppercase tracking-[0.4em] text-white font-bold block mb-6">Partnering in your journey</span>
                            <h3 class="font-serif text-4xl lg:text-5xl mb-8 leading-tight">
                                Get in Touch <br />
                                <span class="text-white">with Ozland Care</span>
                            </h3>
                            <p class="text-white text-lg leading-relaxed mb-6">
                                At Ozland Care, we are committed to supporting you in living a fulfilling and connected life. Our NDIS Assistance with Social and Community Participation services are focused on empowering you to engage fully with your community while promoting your independence, social connections, and well-being.
                            </p>

                            <p class="text-white text-lg leading-relaxed mb-10">
                                Let us be part of your journey towards a more connected and fulfilling life. Your well-being is our priority, and we’re here to support you every step of the way!
                            </p>
                            <div class="w-16 h-1 bg-white/60 rounded-full"></div>
                        </div>

                        <div class="absolute inset-0 opacity-10 pointer-events-none">
                            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Right Contact Panel -->
                    <div class="lg:w-1/2 p-12 lg:p-20 flex flex-col justify-center bg-white">
                        <div class="max-w-md mx-auto w-full">
                            <h4 class="text-2xl font-bold text-slate-900 mb-6">Connect with our Team</h4>
                            <p class="text-slate-600 mb-10 leading-relaxed">
                                Our dedicated Customer Experience Team is ready to help you explore how our services can meet your unique needs.
                            </p>

                            <div class="space-y-8 mb-12">
                                <!-- Phone -->
                                <a href="tel:1300951223" class="flex items-center gap-6 group">
                                    <div class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center group-hover:bg-primary transition-all duration-300">
                                        <svg class="w-6 h-6 text-primary group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block text-[0.6rem] uppercase tracking-widest text-slate-400 font-bold mb-1">Phone</span>
                                        <span class="text-xl font-bold text-slate-900 group-hover:text-primary">1300 951 223</span>
                                    </div>
                                </a>

                                <!-- Email -->
                                <a href="mailto:admin@ozlandcare.com.au" class="flex items-center gap-6 group">
                                    <div class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center group-hover:bg-primary transition-all duration-300">
                                        <svg class="w-6 h-6 text-primary group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block text-[0.6rem] uppercase tracking-widest text-slate-400 font-bold mb-1">Email</span>
                                        <span class="text-lg font-bold text-slate-900 group-hover:text-primary">admin@ozlandcare.com.au</span>
                                    </div>
                                </a>
                            </div>

                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-center py-5 bg-primary text-white font-bold rounded-2xl hover:opacity-90 transition-all shadow-lg hover:shadow-primary/20">
                                Enquire Online
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


<?php endif; ?>
<!-- Faq Section -->
<?php
$faqs = [
    ['Is Support Coordination covered in NDIS funding?', 'Yes, if Support Coordination is included in your NDIS plan, it is covered by your funding.'],
    ['Who is eligible for Support Coordination?', 'NDIS participants with funding allocated for Support Coordination in their plan are eligible for this service.'],
    ['How can Support Coordination benefit?', 'Support Coordination helps you understand your NDIS plan, connect with the right service providers, manage your funding, and build the skills necessary for greater independence and control over your care.'],
    ['How do I access Support Coordination services?', 'Contact NDIS-approved providers in your area or ask your LAC for recommendations.'],
    ['Why choose Ozland Care for Support Coordination?', 'At Ozland Care, we actively listen to your needs, and through our person-centred and strengths-based approach, we ensure you receive the support that promotes your independence and aligns with your goals. We work closely with you, ensuring you\'re supported in making informed decisions about your care and navigating the NDIS journey with confidence.'],
];

get_template_part(
    'template-parts/service-single/faq',
    null,
    ['faqs' => $faqs]
);
?>
