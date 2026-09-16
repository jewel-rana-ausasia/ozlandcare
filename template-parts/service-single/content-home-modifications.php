<section class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6 reveal">
            <div class="max-w-3xl">
                <h2 class="font-serif text-4xl text-slate-900 mb-4">Reasons to Choose Ozland Care for <span class="text-primary">Home Modifications</span></h2>
                <p class="text-slate-950 text-base">As an NDIS-registered provider, Ozland Care delivers home modification services that are personalised, safe, and practical.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = [
                ['fas fa-ear-listen', 'Active Consultation', 'We listen to your needs, goals, and preferences, ensuring your modifications suit your lifestyle and NDIS objectives.'],
                ['fas fa-house', 'Participant-Focused Design', 'Your home is your space. Every modification is tailored to reflect your comfort, independence, and daily routines.'],
                ['fas fa-scale-balanced', 'Choice and Control', 'You remain in control of the design, planning, and implementation process, making sure your preferences are respected.'],
                ['fas fa-dumbbell', 'Strengths-Based Planning', 'By focusing on your abilities and lifestyle, we design practical solutions that enhance your independence.'],
                ['fas fa-shield-heart', 'Safe and Functional Homes', 'Our modifications ensure your home is safe, accessible, and supportive of your daily needs.'],
                ['fas fa-earth-asia', 'Identity & Culture', 'We take into account your cultural, language, and gender preferences, making every modification inclusive and respectful.']
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
            <h2 class="font-serif text-4xl text-slate-900 mb-4">The Impact of Our <span class="italic text-primary">Home Modification Services</span></h2>
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
                    ['Personalised Solutions', 'Each modification plan is customised to your abilities, goals, and home environment.'],
                    ['Safety and Independence', 'Practical adjustments reduce risks and help you move confidently throughout your home.'],
                    ['Comfort and Functionality', 'Modifications are designed to improve day-to-day comfort and usability, supporting your independence.'],
                    ['Holistic Support', 'From consultation to construction, we consider your lifestyle, routines, and emotional well-being alongside practical needs.']
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
                    <h3 class="font-serif text-3xl mb-6 italic">Secure & Accessible Living</h3>
                    <p class="text-teal-50/80 leading-relaxed mb-8">
                        At Ozland Care, we believe your home should be a sanctuary of independence. Our team ensures that every structural change enhances both safety and quality of life.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Custom ramp and handrail installations</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Complete accessible bathroom redesigns</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-teal-300"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Full project management from start to finish</span>
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
                Complete Home <span class="italic font-light">Modification Solutions</span>
                <span class="text-primary mt-2">in Sydney</span>
            </h2>
            <p class="text-slate-800 text-base leading-relaxed">
                Our Home Modification Design & Construction services cover a wide range of solutions to meet your NDIS goals:
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $portfolio = [
                ['Accessibility Adjustments', 'Install ramps, widened doorways, and grab rails to improve mobility and safety throughout your living space.'],
                ['Bathroom & Kitchen Modifications', 'Design and construct accessible bathrooms and kitchens that promote comfort and independence.'],
                ['Safety Installations', 'Add features such as handrails, anti-slip flooring, and automated systems to reduce risk at home.'],
                ['Custom Design Solutions', 'Work with our team to create bespoke modifications tailored to your unique needs and lifestyle.'],
                ['Project Management & Construction', 'We coordinate the planning, approvals, and construction to deliver seamless, professional results.'],
                ['Ongoing Review & Support', 'We review completed modifications with you and provide guidance to ensure they continue to meet your changing needs.']
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
                Key Advantages of <span class="text-primary">Home Adaptations</span>
            </h2>
            <p class="text-slate-700 text-base leading-relaxed mb-6">
                Choosing Ozland Care for home modifications offers multiple advantages:
            </p>
        </div>

        <div class="space-y-10 reveal">
            <?php
            $benefits = [
                ['Greater Independence', 'Navigate your home safely and confidently with structural changes designed for your mobility.'],
                ['Enhanced Safety', 'Reduce risks of accidents and injuries in daily living through targeted safety installations.'],
                ['Comfort and Accessibility', 'Enjoy living spaces designed around your needs, making everyday tasks easier and more enjoyable.'],
                ['Peace of Mind', 'Professional planning and construction ensure reliable, high-quality, and long-lasting results.'],
                ['Tailored to You', 'Modifications reflect your lifestyle, routines, and personal goals, ensuring your home remains uniquely yours.']
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
<?php if (false) : // Legacy duplicated CTA retained inactive for safe rollback. ?>
<!-- CTA Section -->
<section class="py-10 xl:py-20 px-6 reveal">
    <div class="container mx-auto max-w-7xl">
        <div class="relative bg-white rounded-[3.5rem] shadow-[0_40px_100px_-20px_rgba(0,102,102,0.15)] border border-slate-100 overflow-hidden">

            <div class="flex flex-col lg:flex-row">

                <!-- Left Info Panel -->
                <div class="lg:w-1/2 p-12 lg:p-20 bg-primary text-white relative">
                    <div class="relative z-10">
                        <span class="text-[0.65rem] uppercase tracking-[0.4em] text-white font-bold block mb-6">Partnering in your journey</span>
                        <h3 class="font-serif text-4xl lg:text-5xl mb-8 leading-tight">
                            Get in Touch <br />
                            <span class="text-blue">with Ozland Care</span>
                        </h3>
                        <p class="text-white text-lg leading-relaxed mb-6">
                            At Ozland Care, we are committed to supporting you in living a fulfilling and connected life. Our NDIS Assistance with Social and Community Participation services are focused on empowering you to engage fully with your community while promoting your independence, social connections, and well-being.
                        </p>

                        <p class="text-white text-lg leading-relaxed mb-10">
                            Let us be part of your journey towards a more connected and fulfilling life. Your well-being is our priority, and we’re here to support you every step of the way!
                        </p>
                        <div class="w-16 h-1 bg-blue rounded-full"></div>
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
                                <div class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center group-hover:bg-blue transition-all duration-300">
                                    <svg class="w-6 h-6 text-primary group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-[0.6rem] uppercase tracking-widest text-slate-400 font-bold mb-1">Phone</span>
                                    <span class="text-xl font-bold text-slate-900 group-hover:text-blue">1300 951 223</span>
                                </div>
                            </a>

                            <!-- Email -->
                            <a href="mailto:admin@ozlandcare.com.au" class="flex items-center gap-6 group">
                                <div class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center group-hover:bg-blue transition-all duration-300">
                                    <svg class="w-6 h-6 text-primary group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-[0.6rem] uppercase tracking-widest text-slate-400 font-bold mb-1">Email</span>
                                    <span class="text-lg font-bold text-slate-900 group-hover:text-blue">admin@ozlandcare.com.au</span>
                                </div>
                            </a>
                        </div>

                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-center py-5 bg-primary text-white font-bold rounded-2xl hover:bg-blue transition-all shadow-lg hover:shadow-primary/20">
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
    ['Who can use this service?', 'Any NDIS participant who needs their home adapted for mobility, safety, or daily living needs.'],
    ['What types of modifications are included?', 'Ramps, handrails and widened doorways; Bathroom and kitchen adaptations; Step-free access and flooring changes; Custom solutions based on your needs.'],
    ['How do you start the process?', 'We assess your home, discuss your goals and create a design plan tailored to your needs.'],
    ['Do I need NDIS approval?', 'Yes, most home modifications require approval from your NDIS plan before work begins.'],
    ['Who handles the construction?', 'Our experienced team manages everything—from design, approvals, to construction—so you don’t have to worry.']
];

get_template_part(
    'template-parts/service-single/faq',
    null,
    ['faqs' => $faqs]
);
?>
