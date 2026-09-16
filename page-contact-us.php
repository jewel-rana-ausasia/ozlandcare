<?php

/**
 * Template Name: Contact Us
 * Description: Professional Contact Us Page - Tailwind CSS
 */

get_header();
?>

<main id="primary" class="site-main bg-slate-50">

    <!-- Info Cards Section -->
    <section class="relative w-full mx-auto px-4 py-24 bg-slate-50/50 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-slate-50/50 -skew-x-12 translate-x-1/4 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch relative z-10">

            <!-- Card 1 -->
            <div class="group relative flex h-full">
                <div class="relative w-full backdrop-blur-xl bg-white/40 rounded-3xl p-8 border border-primary/10 shadow-[0_8px_32px_0_rgba(13,148,136,0.05)] transition-all duration-500 hover:bg-white/60 hover:shadow-[0_30px_60px_rgba(15,23,42,0.05)] hover:border-primary/20 flex flex-col overflow-hidden">
                    <div class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent via-white/40 to-transparent group-hover:animate-[shine_1.5s_ease-in-out] pointer-events-none"></div>

                    <div class="mb-5">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-primary shadow-inner transition-all duration-500 group-hover:bg-blue group-hover:scale-110">
                            <i class="fas fa-location-dot text-xl group-hover:text-white transition-colors"></i>
                        </div>
                    </div>

                    <div class="flex-grow">
                        <h3 class="text-xs font-black uppercase tracking-[0.4em] text-teal-800/40 mb-3">Location</h3>
                        <address class="not-italic text-sm text-base text-slate-950 font-semibold leading-relaxed space-y-2">
                            <p>Suite 101, Level 14, 3 Parramatta Square</p>
                            <p>153 Macquarie St, Parramatta NSW 2150</p>
                            <p>PO Box 1001, Green Valley NSW 2168</p>
                        </address>
                    </div>

                    <div class="mt-5">
                        <a href="https://share.google/x057P0vkYzs1N8xva" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white group-hover:w-full group-hover:rounded-xl group-hover:bg-blue transition-all duration-500 overflow-hidden">
                            <span class="hidden group-hover:block text-xs font-bold tracking-widest mr-2 opacity-0 group-hover:opacity-100 transition-opacity">DIRECTIONS</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group relative flex h-full">
                <div class="relative w-full backdrop-blur-xl bg-white/40 rounded-3xl p-10 border border-primary/10 shadow-[0_8px_32px_0_rgba(13,148,136,0.05)] transition-all duration-500 hover:bg-white/60 hover:shadow-[0_30px_60px_rgba(15,23,42,0.05)] hover:border-primary/20 flex flex-col overflow-hidden">
                    <div class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent via-white/40 to-transparent group-hover:animate-[shine_1.5s_ease-in-out] pointer-events-none"></div>

                    <div class="mb-5">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-primary shadow-inner transition-all duration-500 group-hover:bg-blue group-hover:scale-110">
                            <i class="fas fa-envelope text-xl group-hover:text-white transition-colors"></i>
                        </div>
                    </div>

                    <div class="flex-grow">
                        <h3 class="text-xs font-black uppercase tracking-[0.4em] text-teal-800/40 mb-3 block">Connect</h3>
                        <h4 class="text-2xl font-bold text-slate-800 mb-4 tracking-tight">Email Support</h4>
                        <a href="mailto:admin@ozlandcare.com.au" class="lg:text-lg text-primary font-bold group-hover:text-blue transition-colors">admin@ozlandcare.com.au</a>
                    </div>

                    <div class="mt-5">
                        <a href="mailto:admin@ozlandcare.com.au" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white group-hover:w-full group-hover:rounded-xl group-hover:bg-blue transition-all duration-500 overflow-hidden">
                            <span class="hidden group-hover:block text-xs font-bold tracking-widest mr-2 opacity-0 group-hover:opacity-100 transition-opacity">SEND MAIL</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group relative flex h-full">
                <div class="relative w-full backdrop-blur-xl bg-white/40 rounded-3xl p-10 border border-primary/10 shadow-[0_8px_32px_0_rgba(13,148,136,0.05)] transition-all duration-500 hover:bg-white/60 hover:shadow-[0_30px_60px_rgba(15,23,42,0.05)] hover:border-primary/20 flex flex-col overflow-hidden">
                    <div class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent via-white/40 to-transparent group-hover:animate-[shine_1.5s_ease-in-out] pointer-events-none"></div>

                    <div class="mb-5">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-primary shadow-inner transition-all duration-500 group-hover:bg-blue group-hover:scale-110">
                            <i class="fas fa-phone text-xl group-hover:text-white transition-colors"></i>
                        </div>
                    </div>

                    <div class="flex-grow">
                        <h3 class="text-xs font-black uppercase tracking-[0.4em] text-teal-800/40 mb-3 block">Hotline</h3>
                        <h4 class="text-2xl font-bold text-slate-800 mb-4 tracking-tight">Call Anytime</h4>
                        <a href="tel:1300951223" class="block text-lg text-primary font-black group-hover:text-blue">1300 951 223</a>
                    </div>

                    <div class="mt-5">
                        <a href="tel:0416247317" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white group-hover:w-full group-hover:rounded-xl group-hover:bg-blue transition-all duration-500 overflow-hidden">
                            <span class="hidden group-hover:block text-xs font-bold tracking-widest mr-2 opacity-0 group-hover:opacity-100 transition-opacity">CALL NOW</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <style>
        @keyframes shine {
            100% {
                left: 125%;
            }
        }
    </style>

    <!-- Contact Section -->
    <section class="max-w-7xl mx-auto px-4 py-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">Get In Touch</h2>
            <p class="text-lg text-slate-900 max-w-3xl mx-auto leading-relaxed">Contact us to access compassionate, high-quality NDIS support and empower independent living across NSW.</p>
        </div>

        <div class="flex flex-col xl:flex-row gap-8 items-stretch">

            <!-- Left Section -->
            <div class="xl:w-2/5">
                <div class="relative group bg-primary rounded-[2.5rem] p-8 md:p-12 text-white overflow-hidden h-full flex flex-col transition-all duration-500">
                    <div class="absolute -top-24 -right-24 w-64 h-64 bg-white/10 rounded-full blur-3xl group-hover:bg-white/20 transition-colors duration-700"></div>
                    <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-black/10 rounded-full blur-3xl"></div>
                    <div class="absolute inset-0 border border-white/10 rounded-[2.5rem] pointer-events-none"></div>

                    <div class="relative z-10 flex-1 flex flex-col">
                        <div class="mb-12">
                            <h3 class="text-4xl font-extrabold tracking-tight mb-4">Contact <span class="text-white">Information</span></h3>
                            <p class="text-white/90 leading-relaxed max-w-xs">Empowering independent living across NSW with compassionate, high-quality NDIS support.</p>
                        </div>

                        <div class="space-y-10">

                            <div class="flex items-center gap-6 group/item">
                                <div class="flex-shrink-0 w-14 h-14 flex items-center justify-center bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-lg group-hover/item:bg-blue transition-all duration-300">
                                    <i class="fas fa-phone-alt text-xl"></i>
                                </div>

                                <div>
                                    <p class="text-white text-xs uppercase tracking-widest mb-1">Call Us</p>
                                    <a href="tel:1300951223" class="text-base font-bold transition-colors block">1300 951 223</a>
                                </div>
                            </div>

                            <div class="flex items-center gap-6 group/item">
                                <div class="flex-shrink-0 w-14 h-14 flex items-center justify-center bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-lg group-hover/item:bg-blue transition-all duration-300">
                                    <i class="fas fa-envelope-open text-xl"></i>
                                </div>

                                <div>
                                    <p class="text-white text-xs uppercase tracking-widest mb-1">Email Us</p>
                                    <a href="mailto:admin@ozlandcare.com.au" class="text-lg font-bold transition-colors block break-all">admin@ozlandcare.com.au</a>
                                </div>
                            </div>

                            <div class="flex items-center gap-6 group/item">
                                <div class="flex-shrink-0 w-14 h-14 flex items-center justify-center bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-lg group-hover/item:bg-blue transition-all duration-300">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>

                                <div>
                                    <p class="text-white text-xs uppercase tracking-widest mb-1">VISIT US (By appointments only)</p>
                                    <a href="https://share.google/x057P0vkYzs1N8xva" target="_blank" rel="noopener" class="text-base font-bold transition-colors duration-300">Suite 101, Level 14, 3 Parramatta Square, 153 Macquarie St, Parramatta, NSW 2150 PO Box 1001, Green Valley NSW 2168</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section: Contact Form 7 -->
            <div class="xl:w-3/5">
                <div class="contact-cf7-shell bg-white rounded-3xl shadow-2xl shadow-slate-200/60 p-8 md:p-12 min-h-full border border-slate-50 overflow-hidden">
                    <?php echo do_shortcode('[contact-form-7 id="c3e0c15" title="Contact Us"]'); ?>
                </div>
            </div>

        </div>
    </section>

    <!-- Map Section -->
    <section class="w-full bg-white p-4 lg:p-5">
        <div class="w-full h-96 md:h-[550px] rounded-2xl overflow-hidden shadow-xl">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3932.088083646574!2d151.0051514!3d-33.8157505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12952eab3543f3%3A0x4861d417509fc72c!2sOzland%20Care!5e1!3m2!1sen!2sbd!4v1772598650253!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

</main>

<style>
    .contact-cf7-shell {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }

    .contact-cf7-shell .wpcf7 {
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        width: 100%;
        height: 100%;
    }

    .contact-cf7-shell .wpcf7-form {
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        width: 100%;
        min-height: 100%;
        margin: 0;
    }

    .contact-cf7-shell .oz-contact-form {
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        width: 100%;
        gap: 2rem;
    }

    .contact-cf7-shell .wpcf7-form-control-wrap {
        display: block;
        width: 100%;
    }

    .contact-cf7-shell .oz-contact-input {
        width: 100%;
        box-sizing: border-box;
        padding: 0.75rem 1.5rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.75rem;
        outline: none;
        color: #0f172a;
        background: #f8fafc;
        transition: border-color 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-cf7-shell .oz-contact-textarea {
        width: 100%;
        min-height: 132px;
        box-sizing: border-box;
        padding: 1rem 1.5rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.75rem;
        outline: none;
        resize: none;
        color: #0f172a;
        background: #f8fafc;
        transition: border-color 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-cf7-shell .oz-contact-input::placeholder,
    .contact-cf7-shell .oz-contact-textarea::placeholder {
        color: #94a3b8;
    }

    .contact-cf7-shell .oz-contact-input:focus,
    .contact-cf7-shell .oz-contact-textarea:focus {
        border-color: #0a74bb;
        background: #ffffff;
        box-shadow: 0 0 0 4px rgba(10, 116, 187, 0.1);
    }

    .contact-cf7-shell .oz-contact-submit {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 0;
        cursor: pointer;
    }

    .contact-cf7-shell .wpcf7-not-valid,
    .contact-cf7-shell .input-error {
        border-color: #ef4444 !important;
        background-color: #fef2f2 !important;
    }

    .contact-cf7-shell .wpcf7-not-valid-tip {
        display: block;
        margin-top: 0.45rem;
        margin-left: 0.25rem;
        color: #dc2626;
        font-size: 0.75rem;
        font-weight: 600;
        line-height: 1.4;
    }

    /* Hide CF7 response box initially */
    .contact-cf7-shell .wpcf7-response-output {
        display: none !important;
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box !important;
        margin: 1.5rem 0 0 !important;
        padding: 1rem 1.25rem !important;
        border-radius: 1rem !important;
        font-size: 0.875rem !important;
        font-weight: 600 !important;
        line-height: 1.6 !important;
        clear: both;
    }

    /* Show only after CF7 returns a status */
    .contact-cf7-shell form.sent .wpcf7-response-output,
    .contact-cf7-shell form.invalid .wpcf7-response-output,
    .contact-cf7-shell form.failed .wpcf7-response-output,
    .contact-cf7-shell form.spam .wpcf7-response-output,
    .contact-cf7-shell form.aborted .wpcf7-response-output,
    .contact-cf7-shell form.unaccepted .wpcf7-response-output {
        display: block !important;
    }

    /* Success */
    .contact-cf7-shell form.sent .wpcf7-response-output {
        border: 1px solid #bbf7d0 !important;
        color: #166534 !important;
        background: #f0fdf4 !important;
    }

    /* Error */
    .contact-cf7-shell form.invalid .wpcf7-response-output,
    .contact-cf7-shell form.failed .wpcf7-response-output,
    .contact-cf7-shell form.spam .wpcf7-response-output,
    .contact-cf7-shell form.aborted .wpcf7-response-output,
    .contact-cf7-shell form.unaccepted .wpcf7-response-output {
        border: 1px solid #fecaca !important;
        color: #991b1b !important;
        background: #fef2f2 !important;
    }

    .contact-cf7-shell .wpcf7-spinner {
        margin: 0 0 0 12px;
        vertical-align: middle;
    }

    .contact-cf7-shell form.submitting .oz-contact-submit {
        opacity: 0.65;
        pointer-events: none;
    }

    .contact-cf7-shell p {
        margin: 0;
    }

    @media (max-width: 767px) {
        .contact-cf7-shell .wpcf7-response-output {
            margin-top: 1.25rem !important;
            padding: 0.875rem 1rem !important;
            font-size: 0.8125rem !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const phoneInput = document.getElementById('contactPhone');
        const emailInput = document.getElementById('contactEmail');
        const firstNameInput = document.getElementById('contactName');
        const surnameInput = document.getElementById('contactSurname');

        if (!phoneInput || !emailInput || !firstNameInput || !surnameInput) {
            return;
        }

        const australianMobileRegex = /^04\d{8}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        const singleNameRegex = /^[\p{L}\p{M}]+(?:['’-][\p{L}\p{M}]+)*$/u;

        phoneInput.setAttribute('inputmode', 'numeric');
        phoneInput.setAttribute('autocomplete', 'tel');
        phoneInput.setAttribute('pattern', '04[0-9]{8}');
        phoneInput.setAttribute('minlength', '10');
        phoneInput.setAttribute('maxlength', '10');
        phoneInput.setAttribute('title', 'Enter a valid 10-digit Australian mobile number starting with 04.');

        emailInput.setAttribute('autocomplete', 'email');
        emailInput.setAttribute('title', 'Enter a valid email address such as name@example.com.');

        surnameInput.setAttribute('autocomplete', 'family-name');
        surnameInput.setAttribute('title', 'Enter one surname without spaces.');

        firstNameInput.setAttribute('autocomplete', 'given-name');
        firstNameInput.setAttribute('title', 'Enter one first name without spaces.');

        let lastValidPhoneValue = phoneInput.value || '';

        phoneInput.addEventListener('input', function() {
            const digitsOnly = phoneInput.value.replace(/\D/g, '').slice(0, 10);
            const validPartialAustralianMobile = /^(?:|0|04\d{0,8})$/;

            if (validPartialAustralianMobile.test(digitsOnly)) {
                phoneInput.value = digitsOnly;
                lastValidPhoneValue = digitsOnly;
            } else {
                phoneInput.value = lastValidPhoneValue;
            }

            phoneInput.setCustomValidity('');

            if (phoneInput.value && !australianMobileRegex.test(phoneInput.value)) {
                phoneInput.setCustomValidity('Enter a valid 10-digit Australian mobile number starting with 04.');
                phoneInput.classList.add('input-error');
            } else {
                phoneInput.classList.remove('input-error');
            }
        });

        emailInput.addEventListener('input', function() {
            const email = emailInput.value.trim();

            emailInput.setCustomValidity('');

            if (email && !emailRegex.test(email)) {
                emailInput.setCustomValidity('Enter a valid email address such as name@example.com.');
                emailInput.classList.add('input-error');
            } else {
                emailInput.classList.remove('input-error');
            }
        });

        firstNameInput.addEventListener('input', function() {
            const firstName = firstNameInput.value.trim();

            firstNameInput.setCustomValidity('');

            if (firstName && !singleNameRegex.test(firstName)) {
                firstNameInput.setCustomValidity('Enter one first name without spaces.');
                firstNameInput.classList.add('input-error');
            } else {
                firstNameInput.classList.remove('input-error');
            }
        });

        surnameInput.addEventListener('input', function() {
            const surname = surnameInput.value.trim();

            surnameInput.setCustomValidity('');

            if (surname && !singleNameRegex.test(surname)) {
                surnameInput.setCustomValidity('Enter one surname without spaces.');
                surnameInput.classList.add('input-error');
            } else {
                surnameInput.classList.remove('input-error');
            }
        });

        document.addEventListener('submit', function(event) {
            const cf7Form = event.target;

            if (!cf7Form.classList.contains('wpcf7-form') || !cf7Form.contains(phoneInput)) {
                return;
            }

            const phone = phoneInput.value.trim();
            const email = emailInput.value.trim();
            const firstName = firstNameInput.value.trim();
            const surname = surnameInput.value.trim();

            phoneInput.setCustomValidity('');
            emailInput.setCustomValidity('');
            firstNameInput.setCustomValidity('');
            surnameInput.setCustomValidity('');
            phoneInput.classList.remove('input-error');
            emailInput.classList.remove('input-error');
            firstNameInput.classList.remove('input-error');
            surnameInput.classList.remove('input-error');

            if (!singleNameRegex.test(firstName)) {
                event.preventDefault();
                event.stopImmediatePropagation();

                firstNameInput.setCustomValidity('Enter one first name without spaces.');
                firstNameInput.classList.add('input-error');
                firstNameInput.reportValidity();
                firstNameInput.focus();

                return;
            }

            if (!singleNameRegex.test(surname)) {
                event.preventDefault();
                event.stopImmediatePropagation();

                surnameInput.setCustomValidity('Enter one surname without spaces.');
                surnameInput.classList.add('input-error');
                surnameInput.reportValidity();
                surnameInput.focus();

                return;
            }

            if (!australianMobileRegex.test(phone)) {
                event.preventDefault();
                event.stopImmediatePropagation();

                phoneInput.setCustomValidity('Enter a valid 10-digit Australian mobile number starting with 04.');
                phoneInput.classList.add('input-error');
                phoneInput.reportValidity();
                phoneInput.focus();

                return;
            }

            if (!emailRegex.test(email)) {
                event.preventDefault();
                event.stopImmediatePropagation();

                emailInput.setCustomValidity('Enter a valid email address such as name@example.com.');
                emailInput.classList.add('input-error');
                emailInput.reportValidity();
                emailInput.focus();

                return;
            }
        }, true);

        document.addEventListener('wpcf7mailsent', function(event) {
            if (event.target && event.target.contains(phoneInput)) {
                lastValidPhoneValue = '';

                phoneInput.setCustomValidity('');
                emailInput.setCustomValidity('');
                firstNameInput.setCustomValidity('');
                surnameInput.setCustomValidity('');

                phoneInput.classList.remove('input-error');
                emailInput.classList.remove('input-error');
                firstNameInput.classList.remove('input-error');
                surnameInput.classList.remove('input-error');
            }
        });
    });
</script>

<?php get_footer(); ?>
