<?php

/**
 * Template Name: Referral Form
 * Description: Client Referral Form (NP FM-022.03) for Ozland Care - Tailwind CSS
 */

get_header();
?>

<main id="primary" class="site-main bg-slate-50">

    <!-- INTRO / HOW IT WORKS -->
    <section class="referral-page-intro relative pt-16 lg:pt-24 pb-10 lg:pb-14 bg-slate-50 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-[30rem] h-[30rem] bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -bottom-48 -left-36 w-[28rem] h-[28rem] bg-blue/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="text-primary font-bold tracking-[0.3em] uppercase text-xs mb-4 block">Client Referral Form</span>
                <h1 class="text-4xl md:text-5xl font-bold text-[#0A1D37] mb-6 leading-tight">
                    Refer a Client to <span class="text-primary">Ozland Care</span>
                </h1>
                <p class="text-slate-950 text-lg leading-relaxed">
                    Whether you are a support coordinator, health professional, family member or self-referring,
                    our team makes it simple to connect a client with compassionate, high-quality NDIS support.
                </p>
            </div>
        </div>
    </section>

    <!-- REFERRAL FORM -->
    <section class="max-w-7xl mx-auto px-6 pb-20 lg:pb-28">
        <div>

            <!-- Form -->
            <div class="w-full">
                <div class="referral-form-shell bg-white rounded-[2rem] shadow-2xl shadow-slate-300/60 p-6 md:p-12 border border-white relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary via-blue to-primary"></div>


                    <?php
                    $referral_form = ozlandcare_render_referral_cf7_form();

                    if ($referral_form) {
                        echo $referral_form; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    } else {
                        echo '<div class="rounded-2xl bg-red-50 border border-red-200 text-red-800 px-6 py-4 font-medium">The referral form is temporarily unavailable. Please contact Ozland Care directly.</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
    .referral-page-intro {
        background:
            radial-gradient(circle at 15% 20%, rgba(10, 116, 187, 0.09), transparent 34%),
            radial-gradient(circle at 85% 10%, rgba(95, 42, 125, 0.1), transparent 32%),
            #f8fafc;
    }

    .referral-form-shell {
        background-image: linear-gradient(145deg, rgba(255, 255, 255, 1), rgba(248, 250, 252, 0.72));
    }

    .referral-panel {
        box-shadow: 0 12px 35px rgba(15, 23, 42, 0.045);
        transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }

    .referral-panel:focus-within {
        border-color: rgba(10, 116, 187, 0.35);
        box-shadow: 0 18px 45px rgba(10, 116, 187, 0.08);
    }

    .referral-input:hover {
        border-color: #cbd5e1;
    }

    .referral-form-shell .wpcf7-form-control-wrap {
        display: block;
        width: 100%;
    }

    .referral-cf7-form {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .referral-form-shell .referral-input {
        width: 100%;
        padding: 0.875rem 1.25rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.75rem;
        outline: none;
        color: #0f172a;
        background: #f8fafc;
        transition: border-color 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
    }

    .referral-form-shell textarea.referral-input {
        padding-top: 1rem;
        padding-bottom: 1rem;
        resize: none;
    }

    .referral-form-shell .referral-input::placeholder {
        color: #94a3b8;
    }

    .referral-form-shell .referral-input:focus {
        border-color: #0a74bb;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(10, 116, 187, 0.1);
    }

    .referral-form-shell input[type="date"].referral-input {
        cursor: pointer;
    }

    .referral-choice-group {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.75rem;
    }

    .referral-choice-group .wpcf7-list-item,
    .referral-yesno .wpcf7-list-item {
        margin: 0;
    }

    .referral-choice-group label,
    .referral-yesno label {
        display: block;
        cursor: pointer;
    }

    .referral-choice-group input,
    .referral-yesno input {
        position: absolute;
        width: 1px;
        height: 1px;
        overflow: hidden;
        opacity: 0;
    }

    .referral-choice-group .wpcf7-list-item-label {
        display: flex;
        min-height: 2.875rem;
        align-items: center;
        justify-content: center;
        padding: 0.75rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.75rem;
        color: #475569;
        background: #f8fafc;
        font-size: 0.875rem;
        font-weight: 600;
        text-align: center;
        transition: all 0.2s ease;
    }

    .referral-choice-group label:hover .wpcf7-list-item-label,
    .referral-yesno label:hover .wpcf7-list-item-label {
        border-color: #0a74bb;
    }

    .referral-choice-group input:checked+.wpcf7-list-item-label,
    .referral-yesno input:checked+.wpcf7-list-item-label {
        color: #fff;
        border-color: #5f2a7d;
        background: #5f2a7d;
    }

    .referral-yesno {
        display: flex !important;
        gap: 0.75rem;
    }

    .referral-yesno .wpcf7-list-item {
        flex: 1 1 0;
    }

    .referral-yesno .wpcf7-list-item-label {
        display: block;
        padding: 0.75rem 1rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.75rem;
        color: #475569;
        background: #f8fafc;
        font-size: 0.875rem;
        font-weight: 600;
        text-align: center;
        transition: all 0.2s ease;
    }

    .referral-form-shell .wpcf7-form-control-wrap[data-name="consent"] {
        display: block;
        margin-bottom: 1.5rem;
    }

    .referral-form-shell .wpcf7-form-control-wrap[data-name="consent"] .wpcf7-list-item {
        margin: 0;
    }

    .referral-form-shell .wpcf7-form-control-wrap[data-name="consent"] label {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        color: #475569;
        font-size: 0.875rem;
        line-height: 1.625;
        cursor: pointer;
    }

    .referral-form-shell .wpcf7-form-control-wrap[data-name="consent"] input {
        width: 1.25rem;
        height: 1.25rem;
        flex: 0 0 auto;
        margin-top: 0.25rem;
        accent-color: #5f2a7d;
    }

    .referral-form-shell .wpcf7-not-valid-tip {
        margin: 0.45rem 0 0 0.25rem;
        color: #dc2626;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .referral-form-shell .wpcf7-response-output {
        margin: 0 !important;
        padding: 1rem 1.25rem !important;
        border: 1px solid #bbf7d0 !important;
        border-radius: 1rem;
        color: #166534;
        background: #f0fdf4;
        font-weight: 600;
    }

    .referral-form-shell form.invalid .wpcf7-response-output,
    .referral-form-shell form.failed .wpcf7-response-output,
    .referral-form-shell form.spam .wpcf7-response-output {
        border-color: #fecaca !important;
        color: #991b1b;
        background: #fef2f2;
    }

    .referral-form-shell form.submitting button[type="submit"] {
        opacity: 0.65;
        pointer-events: none;
    }

    .referral-input:invalid:not(:placeholder-shown),
    .referral-input.field-invalid {
        border-color: #ef4444;
        background-color: #fef2f2;
    }

    @media (min-width: 768px) {
        .referral-form-shell {
            margin-top: -1rem;
        }

        .referral-cf7-form {
            gap: 2.5rem;
        }
    }

    @media (min-width: 640px) {
        .referral-choice-group {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('referralForm');
        if (!form) {
            return;
        }

        const phoneInput = document.getElementById('client_phone');
        const emailInput = document.getElementById('client_email');
        const referrerContact = document.getElementById('referrer_contact');
        const declarationDate = document.getElementById('declaration_date');
        const dateInputs = Array.from(form.querySelectorAll('input[type="date"]'));
        const firstNameInputs = [
            document.getElementById('client_name'),
            document.getElementById('referrer_name')
        ].filter(Boolean);
        const fullNameInputs = [
            document.getElementById('declaration_name')
        ].filter(Boolean);
        const surnameInputs = [
            document.getElementById('client_surname'),
            document.getElementById('referrer_surname')
        ].filter(Boolean);
        const requiredInputs = [
            document.getElementById('client_name'),
            document.getElementById('referrer_name'),
            document.getElementById('referrer_contact'),
            document.getElementById('declaration_name'),
            document.getElementById('declaration_date'),
            form.querySelector('input[name="consent"]')
        ].filter(Boolean);

        requiredInputs.forEach(input => {
            input.required = true;
        });

        const mobilePattern = /^04\d{8}$/;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        const fullNamePattern = /^\S+(?:\s+\S+)*$/;
        const singleNamePattern = /^[\p{L}\p{M}]+(?:['’-][\p{L}\p{M}]+)*$/u;
        const today = <?php echo wp_json_encode(current_time('Y-m-d')); ?>;

        let lastValidPhoneValue = phoneInput ? phoneInput.value : '';
        let referrerContactMode = null;
        let lastValidReferrerMobileValue = '';

        if (phoneInput) {
            phoneInput.pattern = '04[0-9]{8}';
            phoneInput.minLength = 10;
            phoneInput.maxLength = 10;
            phoneInput.inputMode = 'numeric';
            phoneInput.autocomplete = 'tel';
            phoneInput.title = 'Enter a 10-digit Australian mobile number starting with 04.';
        }

        if (emailInput) {
            emailInput.autocomplete = 'email';
            emailInput.title = 'Enter a complete email address such as name@example.com.';
        }

        if (referrerContact) {
            referrerContact.title = 'Enter a valid email address or a 10-digit Australian mobile number starting with 04 (e.g. 0412345678).';
            referrerContact.inputMode = 'text';
            referrerContact.autocomplete = 'email';
            referrerContact.maxLength = 254;
        }

        surnameInputs.forEach(input => {
            input.autocomplete = 'family-name';
            input.title = 'Enter one surname without spaces.';
        });

        firstNameInputs.forEach(input => {
            input.autocomplete = 'given-name';
            input.title = 'Enter one first name without spaces.';
        });

        const updateFieldState = (input, message) => {
            input.setCustomValidity(message);
            input.classList.toggle('field-invalid', Boolean(message));
        };

        dateInputs.forEach(input => {
            input.addEventListener('click', () => {
                if (typeof input.showPicker === 'function') {
                    try {
                        input.showPicker();
                    } catch (error) {
                        // The browser's native icon remains available as fallback.
                    }
                }
            });
        });

        if (phoneInput) {
            phoneInput.addEventListener('input', () => {
                const digitsOnly = phoneInput.value.replace(/\D/g, '').slice(0, 10);
                if (/^(?:|0|04\d{0,8})$/.test(digitsOnly)) {
                    phoneInput.value = digitsOnly;
                    lastValidPhoneValue = digitsOnly;
                } else {
                    phoneInput.value = lastValidPhoneValue;
                }

                updateFieldState(
                    phoneInput,
                    phoneInput.value && !mobilePattern.test(phoneInput.value) ?
                    'Enter a 10-digit Australian mobile number starting with 04.' :
                    ''
                );
            });
        }

        if (emailInput) {
            emailInput.addEventListener('input', () => {
                updateFieldState(
                    emailInput,
                    emailInput.value && !emailPattern.test(emailInput.value.trim()) ?
                    'Enter a complete email address such as name@example.com.' :
                    ''
                );
            });
        }

        fullNameInputs.forEach(input => {
            input.addEventListener('input', () => {
                updateFieldState(
                    input,
                    input.value && !fullNamePattern.test(input.value.trim()) ?
                    'Enter a first name and surname.' :
                    ''
                );
            });
        });

        firstNameInputs.forEach(input => {
            input.addEventListener('input', () => {
                updateFieldState(
                    input,
                    input.value && !singleNamePattern.test(input.value.trim()) ?
                    'Enter one first name without spaces.' :
                    ''
                );
            });
        });

        surnameInputs.forEach(input => {
            input.addEventListener('input', () => {
                updateFieldState(
                    input,
                    input.value && !singleNamePattern.test(input.value.trim()) ?
                    'Enter one surname without spaces.' :
                    ''
                );
            });
        });

        if (referrerContact) {
            referrerContact.addEventListener('input', () => {
                if (!referrerContact.value) {
                    referrerContactMode = null;
                    lastValidReferrerMobileValue = '';
                    referrerContact.inputMode = 'text';
                    referrerContact.autocomplete = 'email';
                    referrerContact.maxLength = 254;
                    updateFieldState(referrerContact, '');
                    return;
                }

                if (!referrerContactMode) {
                    referrerContactMode = /^\d/.test(referrerContact.value) ? 'mobile' : 'email';
                }

                if (referrerContactMode === 'mobile') {
                    const digitsOnly = referrerContact.value.replace(/\D/g, '').slice(0, 10);
                    const validPartialMobile = /^(?:|0|04\d{0,8})$/;

                    if (validPartialMobile.test(digitsOnly)) {
                        referrerContact.value = digitsOnly;
                        lastValidReferrerMobileValue = digitsOnly;
                    } else {
                        referrerContact.value = lastValidReferrerMobileValue;
                    }

                    referrerContact.inputMode = 'numeric';
                    referrerContact.autocomplete = 'tel';
                    referrerContact.maxLength = 10;

                    updateFieldState(
                        referrerContact,
                        mobilePattern.test(referrerContact.value) ? '' :
                        'Enter a valid 10-digit Australian mobile number starting with 04 (e.g. 0412345678).'
                    );
                    return;
                }

                let emailValue = referrerContact.value
                    .replace(/\s/g, '')
                    .replace(/[^A-Za-z0-9.!#$%&'*+/=?^_`{|}~@-]/g, '');
                const atPosition = emailValue.indexOf('@');

                if (atPosition !== -1) {
                    emailValue = emailValue.slice(0, atPosition + 1) +
                        emailValue.slice(atPosition + 1).replace(/@/g, '');
                }

                referrerContact.value = emailValue.slice(0, 254);
                referrerContact.inputMode = 'email';
                referrerContact.autocomplete = 'email';
                referrerContact.maxLength = 254;

                updateFieldState(
                    referrerContact,
                    emailPattern.test(referrerContact.value) ? '' :
                    'Please enter a valid email address.'
                );
            });
        }

        if (declarationDate) {
            declarationDate.min = today;
            declarationDate.max = today;
            declarationDate.value = today;
            declarationDate.addEventListener('input', () => {
                updateFieldState(
                    declarationDate,
                    declarationDate.value !== today ? 'The declaration date must be today.' : ''
                );
            });
        }

        form.addEventListener('submit', event => {
            [phoneInput, emailInput, referrerContact, declarationDate, ...firstNameInputs, ...fullNameInputs, ...surnameInputs]
            .filter(Boolean)
                .forEach(input => input.dispatchEvent(new Event('input')));

            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopImmediatePropagation();
                form.reportValidity();
            }
        }, true);

        document.addEventListener('wpcf7reset', event => {
            if (event.target.contains(form)) {
                referrerContactMode = null;
                lastValidReferrerMobileValue = '';

                if (referrerContact) {
                    referrerContact.inputMode = 'text';
                    referrerContact.autocomplete = 'email';
                    referrerContact.maxLength = 254;
                    updateFieldState(referrerContact, '');
                }

                if (declarationDate) {
                    declarationDate.value = today;
                }

                surnameInputs.forEach(input => updateFieldState(input, ''));
                firstNameInputs.forEach(input => updateFieldState(input, ''));
            }
        });
    });
</script>

<?php get_footer(); ?>
