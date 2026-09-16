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
    <div class="relative bg-blue pb-16 pt-10 sm:pb-20 sm:pt-12 md:pb-24 md:pt-16 xl:pb-36 xl:pt-20">
        <div
            class="absolute bottom-5 left-[6%] h-24 w-24 opacity-[0.055] sm:bottom-6 sm:h-28 sm:w-28 md:bottom-8 md:h-32 md:w-32 xl:h-36 xl:w-36"
            style="background-image: radial-gradient(#ffffff 1.5px, transparent 1.5px); background-size: 16px 16px;"
            aria-hidden="true"></div>

        <div class="container relative z-10 mx-auto max-w-7xl px-4 sm:px-6 md:px-10 lg:px-24 2xl:px-0">
            <div class="max-w-5xl">
                <div class="mb-3 flex items-center gap-2 sm:mb-4 sm:gap-3">
                    <span class="text-[9px] font-bold uppercase italic tracking-[0.3em] text-white/80 sm:tracking-[0.4em] xl:text-[10px]">Reliability &amp; Trust</span>
                    <span class="h-[1px] w-12 bg-white/80 sm:w-16 xl:w-20"></span>
                </div>

                <h2 class="m-0 text-2xl font-bold leading-[1.15] tracking-tight text-white sm:text-3xl md:text-4xl xl:text-5xl xl:leading-[1.1]">
                    Frequently Asked <span class="text-primary">Questions (FAQs)</span>
                </h2>
            </div>
        </div>
    </div>

    <div class="relative bg-white pb-12 sm:pb-16 md:pb-20 xl:pb-24">
        <div class="container relative z-10 mx-auto max-w-7xl px-4 sm:px-6 md:px-8 lg:px-14 2xl:px-0">
            <div class="grid grid-cols-1 items-stretch gap-8 sm:gap-10 md:gap-12 xl:grid-cols-[minmax(0,0.92fr)_minmax(0,1fr)] xl:gap-16">
                <div class="relative -mt-10 sm:-mt-14 md:-mt-20 xl:-mt-24">
                    <div class="service-faq-blob absolute -left-6 -top-5 h-44 w-44 rounded-full bg-primary/[0.08] opacity-80 blur-3xl sm:-left-8 sm:-top-6 sm:h-52 sm:w-52 md:-left-10 md:-top-8 md:h-64 md:w-64" aria-hidden="true"></div>
                    <div class="service-faq-blob service-faq-blob-delay absolute -bottom-6 -right-6 h-44 w-44 rounded-full bg-slate-100 opacity-90 blur-3xl sm:-bottom-8 sm:-right-8 sm:h-52 sm:w-52 md:-bottom-10 md:-right-10 md:h-64 md:w-64" aria-hidden="true"></div>

                    <div class="relative">
                        <div class="absolute -right-3 -top-3 -z-10 h-14 w-14 rotate-12 rounded-2xl bg-primary sm:-right-4 sm:-top-4 sm:h-16 sm:w-16 md:-right-6 md:-top-6 md:h-24 md:w-24 md:rounded-3xl" aria-hidden="true"></div>
                        <div class="absolute -bottom-3 -left-3 -z-10 h-20 w-20 rounded-full border-[3px] border-primary/10 sm:-bottom-4 sm:-left-4 sm:h-24 sm:w-24 md:-bottom-6 md:-left-6 md:h-32 md:w-32 md:border-4" aria-hidden="true"></div>
                        <div
                            class="absolute -right-4 top-1/2 -z-10 h-32 w-14 -translate-y-1/2 opacity-[0.13] sm:-right-7 sm:h-40 sm:w-16 md:-right-10 md:h-48 md:w-24 xl:-right-12"
                            style="background-image: radial-gradient(#5f2a7d 2px, transparent 2px); background-size: 15px 15px;"
                            aria-hidden="true"></div>

                        <div class="relative z-10 overflow-hidden rounded-[1.5rem] border-[6px] border-white shadow-2xl shadow-slate-300/70 sm:rounded-[2rem] sm:border-[8px] md:rounded-[2.5rem] md:border-[10px] xl:min-h-[600px] xl:rounded-[3rem] xl:border-[12px] 2xl:min-h-[630px]">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/get-the-clarity-you-deserve.jpg'); ?>"
                                alt="Ozland Care support coordinator helping with NDIS questions"
                                loading="lazy"
                                decoding="async"
                                class="h-[300px] w-full object-cover sm:h-[380px] md:h-[560px] lg:h-[640px] xl:h-[600px] 2xl:h-[630px]">
                        </div>
                    </div>
                </div>

                <div class="w-full xl:pt-12">
                    <div class="flex flex-col gap-2.5 sm:gap-3 md:gap-4">
                        <?php foreach ($service_faqs as $index => $faq) :
                            $question = isset($faq['q']) ? $faq['q'] : ($faq[0] ?? '');
                            $answer   = isset($faq['a']) ? $faq['a'] : ($faq[1] ?? '');
                            $answer_id = 'service-faq-answer-' . absint($index);
                        ?>
                            <div class="service-faq-card overflow-hidden rounded-xl border border-slate-200 bg-white shadow-md transition-all duration-300 sm:rounded-2xl">
                                <button
                                    type="button"
                                    class="service-faq-button group flex w-full items-center justify-between gap-3 px-4 py-3.5 text-left outline-none sm:gap-4 sm:px-5 sm:py-4 md:px-6 md:py-[1.125rem] xl:gap-5 xl:px-7 xl:py-5"
                                    aria-expanded="false"
                                    aria-controls="<?php echo esc_attr($answer_id); ?>">
                                    <span class="service-faq-question text-sm font-bold leading-snug tracking-[-0.01em] text-slate-950 transition-colors duration-300 group-hover:text-blue sm:text-[15px] md:text-base xl:text-[17px]">
                                        <?php echo esc_html($question); ?>
                                    </span>

                                    <span class="service-faq-icon flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full border border-slate-200 bg-slate-50 text-slate-500 transition-all duration-300 group-hover:border-blue group-hover:text-blue sm:h-10 sm:w-10 xl:h-11 xl:w-11">
                                        <svg class="h-3.5 w-3.5 transition-transform duration-300 sm:h-4 sm:w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </span>
                                </button>

                                <div id="<?php echo esc_attr($answer_id); ?>" class="service-faq-answer overflow-hidden transition-[max-height,opacity] duration-300 ease-out opacity-0" style="max-height: 0;" aria-hidden="true">
                                    <div class="border-t border-slate-100 px-4 pb-5 pt-4 sm:px-5 sm:pb-6 sm:pt-5 md:px-6 xl:px-7 xl:pb-7">
                                        <p class="m-0 text-sm font-medium leading-[1.7] text-slate-950 sm:text-[15px] md:leading-[1.75] xl:text-base">
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
