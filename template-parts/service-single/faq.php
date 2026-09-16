<?php
/**
 * Shared FAQ section for service detail pages.
 *
 * @package ozlandcare
 */

$service_faqs = isset($args['faqs']) && is_array($args['faqs']) ? $args['faqs'] : [];

if (empty($service_faqs)) {
    return;
}
?>

<section class="service-faq-section relative overflow-hidden bg-white" data-service-faq>
    <div class="relative bg-blue pt-14 pb-24 md:pt-20 md:pb-32 lg:pt-20 lg:pb-36">
        <div
            class="absolute left-[6%] bottom-8 w-36 h-36 opacity-[0.055]"
            style="background-image: radial-gradient(#ffffff 1.5px, transparent 1.5px); background-size: 16px 16px;"
            aria-hidden="true"></div>

        <div class="container mx-auto px-6 lg:px-10 xl:px-0 relative z-10">
            <div class="max-w-5xl">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[10px] font-bold tracking-[0.4em] text-white/80 uppercase italic">Reliability &amp; Trust</span>
                    <span class="h-[1px] w-20 bg-white/80"></span>
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-5xl font-bold text-white tracking-tight leading-[1.1] m-0">
                    Frequently Asked <span class="text-primary">Questions (FAQs)</span>
                </h2>
            </div>
        </div>
    </div>

    <div class="relative bg-white pb-16 md:pb-20 lg:pb-24">
        <div class="container mx-auto px-6 lg:px-10 xl:px-0 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-9 gap-12 lg:gap-14 xl:gap-16 items-stretch">
                <div class="lg:col-span-4 relative -mt-14 md:-mt-20 lg:-mt-24">
                    <div class="service-faq-blob absolute -top-8 -left-10 w-64 h-64 bg-primary/[0.08] rounded-full blur-3xl opacity-80" aria-hidden="true"></div>
                    <div class="service-faq-blob service-faq-blob-delay absolute -bottom-10 -right-10 w-64 h-64 bg-slate-100 rounded-full blur-3xl opacity-90" aria-hidden="true"></div>

                    <div class="relative">
                        <div class="absolute -top-5 -right-5 md:-top-6 md:-right-6 w-20 h-20 md:w-24 md:h-24 bg-primary rounded-[1.5rem] md:rounded-3xl -z-10 rotate-12" aria-hidden="true"></div>
                        <div class="absolute -bottom-5 -left-5 md:-bottom-6 md:-left-6 w-24 h-24 md:w-32 md:h-32 border-[3px] md:border-4 border-primary/10 rounded-full -z-10" aria-hidden="true"></div>
                        <div
                            class="absolute top-1/2 -translate-y-1/2 -right-7 md:-right-10 lg:-right-12 w-20 md:w-24 h-44 md:h-48 opacity-[0.13] -z-10"
                            style="background-image: radial-gradient(#5f2a7d 2px, transparent 2px); background-size: 15px 15px;"
                            aria-hidden="true"></div>

                        <div class="relative z-10 rounded-[2rem] md:rounded-[3rem] overflow-hidden border-[8px] md:border-[12px] border-white shadow-2xl shadow-slate-300/70 lg:min-h-[570px] xl:min-h-[600px] 2xl:min-h-[630px]">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/get-the-clarity-you-deserve.jpg'); ?>"
                                alt="Ozland Care support coordinator helping with NDIS questions"
                                loading="lazy"
                                decoding="async"
                                class="w-full h-[380px] md:h-[520px] lg:h-[570px] xl:h-[600px] 2xl:h-[630px] object-cover">
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 w-full pt-2 lg:pt-10 xl:pt-12">
                    <div class="flex flex-col gap-3 md:gap-4">
                        <?php foreach ($service_faqs as $index => $faq) :
                            $question = isset($faq['q']) ? $faq['q'] : ($faq[0] ?? '');
                            $answer   = isset($faq['a']) ? $faq['a'] : ($faq[1] ?? '');
                            $answer_id = 'service-faq-answer-' . absint($index);
                        ?>
                            <div class="service-faq-card bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-md transition-all duration-300">
                                <button
                                    type="button"
                                    class="service-faq-button w-full flex items-center justify-between gap-5 px-5 py-4 md:px-7 md:py-5 text-left outline-none group"
                                    aria-expanded="false"
                                    aria-controls="<?php echo esc_attr($answer_id); ?>">
                                    <span class="service-faq-question text-[15px] md:text-[17px] font-bold leading-snug tracking-[-0.01em] text-slate-950 group-hover:text-blue transition-colors duration-300">
                                        <?php echo esc_html($question); ?>
                                    </span>

                                    <span class="service-faq-icon flex-shrink-0 w-10 h-10 md:w-11 md:h-11 flex items-center justify-center rounded-full border border-slate-200 bg-slate-50 text-slate-500 group-hover:border-blue group-hover:text-blue transition-all duration-300">
                                        <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </span>
                                </button>

                                <div id="<?php echo esc_attr($answer_id); ?>" class="service-faq-answer overflow-hidden transition-[max-height,opacity] duration-300 ease-out opacity-0" style="max-height: 0;" aria-hidden="true">
                                    <div class="border-t border-slate-100 px-5 md:px-7 pt-5 pb-6 md:pb-7">
                                        <p class="m-0 text-slate-950 text-[15px] md:text-base leading-[1.75] font-medium">
                                            <?php echo esc_html($answer); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes serviceFaqBlobAnimation {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(20px, -28px) scale(1.06); }
        66% { transform: translate(-14px, 15px) scale(0.96); }
    }

    .service-faq-section { isolation: isolate; }
    .service-faq-blob { animation: serviceFaqBlobAnimation 8s infinite ease-in-out; }
    .service-faq-blob-delay { animation-delay: 2s; }

    .service-faq-card.is-active {
        border-color: #0a74bb;
        box-shadow: 0 20px 25px -5px rgb(10 116 187 / 0.1), 0 8px 10px -6px rgb(10 116 187 / 0.1);
    }

    .service-faq-card.is-active .service-faq-question { color: #0a74bb; }
    .service-faq-card.is-active .service-faq-icon {
        color: #fff;
        background-color: #0a74bb;
        border-color: #0a74bb;
        box-shadow: 0 10px 15px -3px rgb(10 116 187 / 0.2);
    }
    .service-faq-card.is-active .service-faq-icon svg { transform: rotate(180deg); }
    .service-faq-card.is-active .service-faq-answer { opacity: 1; }

    @media (max-width: 767px) {
        .service-faq-blob { width: 180px; height: 180px; }
    }

    @media (prefers-reduced-motion: reduce) {
        .service-faq-blob { animation: none; }
        .service-faq-answer,
        .service-faq-icon,
        .service-faq-icon svg { transition: none; }
    }
</style>

<script>
    document.querySelectorAll('[data-service-faq]').forEach((section) => {
        if (section.dataset.faqReady === 'true') return;
        section.dataset.faqReady = 'true';

        const cards = section.querySelectorAll('.service-faq-card');

        cards.forEach((card) => {
            const button = card.querySelector('.service-faq-button');
            const answer = card.querySelector('.service-faq-answer');

            button.addEventListener('click', () => {
                const shouldOpen = !card.classList.contains('is-active');

                cards.forEach((otherCard) => {
                    otherCard.classList.remove('is-active');
                    otherCard.querySelector('.service-faq-button').setAttribute('aria-expanded', 'false');
                    const otherAnswer = otherCard.querySelector('.service-faq-answer');
                    otherAnswer.style.maxHeight = '0';
                    otherAnswer.setAttribute('aria-hidden', 'true');
                });

                if (shouldOpen) {
                    card.classList.add('is-active');
                    button.setAttribute('aria-expanded', 'true');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    answer.setAttribute('aria-hidden', 'false');
                }
            });
        });
    });
</script>
