<section class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6 reveal">
            <div class="max-w-3xl">
                <h2 class="font-serif text-4xl text-slate-900 mb-4">
                    Why Choose Ozland Care for
                    <span class="text-primary">Community Participation?</span>
                </h2>

                <p class="text-slate-950 text-base">
                    As an NDIS-approved service provider, Ozland Care is dedicated to helping you engage actively with your community through our NDIS Community Participation services. We focus on providing opportunities that support your personal goals, helping you develop new skills, build meaningful relationships, and lead a fulfilling, independent life.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = [
                ['fas fa-ear-listen', 'Active Listening', 'We take the time to understand your needs, goals, and preferences, ensuring that the community activities we support align with your individual interests and NDIS goals. Your voice is central to everything we do.'],
                ['fas fa-user', 'Person-Centred Approach', 'We put you at the heart of every decision, making sure that the community participation activities we offer reflect your personal values and goals. Your preferences guide every step of the support we provide.'],
                ['fas fa-scale-balanced', 'Promote Your Choice and Control', 'We empower you to make informed decisions about how you engage with your community, ensuring that your goals and preferences are always respected.'],
                ['fas fa-dumbbell', 'Strengths-Based Support', 'By focusing on your abilities and what you enjoy, we help you overcome challenges, reach your goals, and feel empowered as you engage with your community.'],
                ['fas fa-house', 'Build Your Independence', 'Our services support you in gaining the skills and confidence needed to engage in community activities, enhancing your independence and promoting personal growth and self-esteem.'],
                ['fas fa-earth-asia', 'Identity & Culture', 'Proudly serving the Sydney area, we respect your cultural, language, and gender preferences, ensuring you feel valued, heard, and understood.']
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
            <h2 class="font-serif text-4xl text-slate-900 mb-4">
                How Our Community Participation Services Make a Difference
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
                At Ozland Care, we recognise that living with a disability can present its challenges. However, participating in community activities can greatly enhance your social connections, personal growth, and overall well-being. Our mission is to ensure that your experience with community participation is not only meaningful but also empowering, supporting your independence every step of the way.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">

            <!-- LEFT SIDE -->
            <div class="space-y-12">
                <?php
                $steps = [
                    ['Personalised Engagement', 'We work closely with you to identify community activities that match your interests, helping you discover new activities, develop life skills, and connect with others in ways that are meaningful to you.'],
                    ['Respect and Empowerment', 'Our team ensures that every activity is approached with sensitivity, respecting your choices and empowering you to participate at your own pace, building confidence and a sense of pride.'],
                    ['Holistic Support', 'We take a holistic approach, addressing your emotional well-being alongside physical participation. We aim to reduce isolation, boost self-esteem, and create a stronger sense of belonging within your community.'],
                    ['Building Relationships and Life Skills', 'Engaging in social, cultural, and recreational activities provides opportunities to build lasting friendships, develop important life skills, and navigate challenges, ensuring that you feel more confident and connected with your community.'],
                    ['Promoting Personal Growth', 'Through NDIS-funded community participation, we help you overcome barriers, achieve personal milestones, and experience the joy of new connections and experiences that contribute to your overall sense of well-being.']
                ];
                foreach ($steps as $idx => $step): ?>
                    <div class="flex gap-8 reveal" style="transition-delay: <?php echo $idx * 150; ?>ms">
                        <span class="step-number text-6xl font-black leading-none text-slate-200">
                            <?php echo sprintf('%02d', $idx + 1); ?>
                        </span>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-3"><?php echo $step[0]; ?></h4>
                            <p class="text-slate-700 leading-relaxed"><?php echo $step[1]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- RIGHT SIDE (STRETCHED) -->
            <div class="bg-primary p-12 lg:p-16 rounded-[3rem] text-white relative overflow-hidden reveal h-full flex">
                <div class="relative z-10 flex flex-col justify-center">
                    <h3 class="font-serif text-3xl mb-6 italic">Community Participation Support</h3>

                    <p class="text-teal-50/80 leading-relaxed mb-8">
                        We work closely with you to ensure that the support we provide aligns with your NDIS plan and daily needs. Our team assists with activities that promote independence, such as attending social outings, participating in group events, and exploring new interests in your local community.
                    </p>

                    <p class="text-teal-50/80 leading-relaxed mb-8">
                        Proudly serving the Sydney area, we respect your cultural, language, and gender preferences, ensuring you feel valued, heard, and understood. We will work closely with you and your family to align support with your unique needs and aspirations throughout your community participation journey.
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-blue/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-blue"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Attend social outings and events</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-blue/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-blue"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Participate in group and recreational activities</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-5 h-5 rounded-full bg-blue/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-blue"></div>
                            </div>
                            <span class="text-sm font-medium text-teal-50">Explore new interests in your community</span>
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
                Comprehensive <span class="italic font-light">Community Participation</span>
                <span class="text-primary mt-2">Services in Sydney</span>
            </h2>

            <p class="text-slate-800 text-base leading-relaxed">
                At Ozland Care, we believe that engaging in your local community is essential for personal growth, social connection, and emotional well-being. Our NDIS Community Participation services help individuals with disabilities connect with others, discover new interests, and build meaningful relationships. We offer a range of activities and support to ensure you feel empowered and included in your community.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $portfolio = [
                ['Engaging Group Activities', 'We offer a variety of social and recreational activities, such as Bingo, Bowling, and other group outings, that promote social interaction and give you the opportunity to connect with others in a fun and inclusive environment.'],
                ['Cultural and Social Integration', 'Participate in activities and community events that foster cultural exchange and inclusivity, helping you feel more connected and integrated within your local area.'],
                ['Companionship and Social Support', 'Our friendly team provides companionship during all activities, ensuring that you feel comfortable, supported, and engaged.'],
                ['Access to Local Services', 'We assist in connecting you with local disability services and resources that can further support your participation in community activities.'],
                ['Community Outreach Initiatives', 'We organize and support local outreach programs that promote awareness, inclusivity, and active participation.'],
                ['Confidence and Independence', 'We support you to build social confidence, make informed choices, and participate more independently in activities you enjoy.']
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

        <p class="text-slate-900 mt-8">
            Our goal is to create an environment where you can confidently engage with your community, build lasting relationships, and experience a sense of belonging. We ensure that you feel empowered, supported, and included in every step of your community participation journey.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="mb-16 reveal">
            <h2 class="font-serif text-4xl text-slate-900 mb-8 leading-tight">
                The Benefits of <span class="text-primary">Community Participation</span>
            </h2>
            <p class="text-slate-700 text-base leading-relaxed mb-6">
                At Ozland Care, we are committed to enhancing your quality of life through our NDIS Assistance with Social and Community Participation services. Engaging in social and community activities offers a wide range of benefits:
            </p>
        </div>

        <div class="space-y-10 reveal">
            <?php
            $benefits = [
                ['Improved Social Connections', 'By participating in group activities and community events, you’ll have the opportunity to form meaningful relationships, expand your social network, and reduce feelings of isolation.'],
                ['Increased Confidence and Independence', 'Engaging in community events helps build confidence, promotes independence, and empowers you to interact more freely and effectively within your community.'],
                ['Enhanced Emotional Well-being', 'Consistent involvement in social and recreational activities improves mood, creates a sense of belonging, and contributes to overall emotional health.'],
                ['Development of Life Skills', 'Community participation provides valuable opportunities to enhance essential life skills, such as communication, teamwork, and problem-solving, supporting personal growth and greater self-sufficiency.'],
                ['Engagement and Empowerment', 'Activities such as Bingo, Bowling, and cultural events offer opportunities for enjoyment, personal choice, and greater engagement with your community, ultimately contributing to a more fulfilling lifestyle.']
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
        <p class="text-slate-900 py-5">
            By actively participating in these activities, you will strengthen your connection with the community, encourage personal growth, and enhance your overall well-being.
        </p>
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
    ['Is Community Participation covered by the NDIS?', 'Yes, Assistance with Social and Community Participation is covered under the NDIS if it is included in your plan. It falls under the Core Supports budget.'],
    ['Who can access Community Participation services?', 'Participants with an NDIS plan who need assistance engaging in social or community activities can access this service, provided it is outlined in their plan to support their goals.'],
    ['How does Community Participation help me?', 'This service helps you become more involved in your community, build meaningful relationships, improve your social skills, and foster a sense of belonging, which contributes to your overall well-being and personal growth.'],
    ['How do I include Community Participation in my NDIS plan?', 'You can request Assistance with Social and Community Participation during your NDIS planning meeting, where the support will be outlined based on your goals and needs.'],
    ['Why choose Ozland Care for Community Participation?', 'Ozland Care offers individualised support to help you connect with your community in ways that align with your personal interests and goals. We provide a person-centred approach, ensuring you feel empowered, respected, and valued while engaging in activities that promote your independence and well-being.'],
];

get_template_part(
    'template-parts/service-single/faq',
    null,
    ['faqs' => $faqs]
);
?>
