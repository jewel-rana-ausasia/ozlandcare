<?php

/**
 * Template Name: Feedback Form
 * Description: Participant and family feedback form for Ozland Care.
 *
 * Used automatically for the page with the "feedback" slug. The form itself
 * lives in Contact > Contact Forms > Feedback Form (see inc/feedback-cf7.php)
 * and shares the Referral form's design, validation and messages.
 */

get_header();
?>

<main id="primary" class="site-main bg-slate-50">

    <!-- INTRO -->
    <section class="feedback-page-intro relative pt-16 lg:pt-24 pb-10 lg:pb-14 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-[30rem] h-[30rem] bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -bottom-48 -left-36 w-[28rem] h-[28rem] bg-blue/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="text-primary font-bold tracking-[0.3em] uppercase text-xs mb-4 block">Participant Feedback</span>
                <h1 class="text-4xl md:text-5xl font-bold text-[#0A1D37] mb-6 leading-tight">
                    Share Your <span class="text-primary">Feedback</span>
                </h1>
                <p class="text-slate-950 text-lg leading-relaxed">
                    Your experience matters to us. Tell us what is working well and where we can do better,
                    so we can keep improving the support we provide to you and your family.
                </p>

                <ul class="feedback-highlights" aria-label="About this form">
                    <li><i class="fas fa-lock" aria-hidden="true"></i> Confidential</li>
                    <li><i class="fas fa-clock" aria-hidden="true"></i> Takes about 3 minutes</li>
                    <li><i class="fas fa-heart" aria-hidden="true"></i> Read by our team</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FEEDBACK FORM -->
    <section class="feedback-form-section max-w-7xl mx-auto px-6 pb-20 lg:pb-28">
        <div class="feedback-form-shell bg-white rounded-[2rem] shadow-2xl shadow-slate-300/60 p-6 md:p-12 border border-white relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary via-blue to-primary"></div>

            <?php
            $feedback_form = function_exists('ozlandcare_render_feedback_cf7_form')
                ? ozlandcare_render_feedback_cf7_form()
                : '';

            if ($feedback_form) {
                echo $feedback_form; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            } else {
                echo '<div class="rounded-2xl bg-red-50 border border-red-200 text-red-800 px-6 py-4 font-medium">The feedback form is temporarily unavailable. Please contact Ozland Care directly.</div>';
            }
            ?>
        </div>
    </section>

</main>

<style>
    .feedback-page-intro {
        background:
            radial-gradient(circle at 15% 20%, rgba(10, 116, 187, 0.09), transparent 34%),
            radial-gradient(circle at 85% 10%, rgba(95, 42, 125, 0.1), transparent 32%),
            #f8fafc;
    }

    .feedback-highlights {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.75rem;
        margin: 2rem 0 0;
        padding: 0;
        list-style: none;
    }

    .feedback-highlights li {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.55rem 1rem;
        border: 1px solid #e2e8f0;
        border-radius: 9999px;
        background: rgba(255, 255, 255, 0.85);
        color: #334155;
        font-size: 0.8125rem;
        font-weight: 600;
        box-shadow: 0 6px 18px rgba(15, 23, 42, 0.04);
    }

    .feedback-highlights i {
        color: #5f2a7d;
        font-size: 0.75rem;
    }

    .feedback-form-shell {
        background-image: linear-gradient(145deg, rgba(255, 255, 255, 1), rgba(248, 250, 252, 0.72));
    }

    .feedback-cf7-form {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .feedback-panel {
        box-shadow: 0 12px 35px rgba(15, 23, 42, 0.045);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .feedback-panel:focus-within {
        border-color: rgba(10, 116, 187, 0.35);
        box-shadow: 0 18px 45px rgba(10, 116, 187, 0.08);
    }

    .feedback-label {
        display: block;
        margin: 0 0 0.5rem 0.25rem;
        color: #0f172a;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        line-height: 1.5;
        text-transform: uppercase;
        transition: color 0.2s ease;
    }

    .feedback-panel .group:focus-within .feedback-label {
        color: #0a74bb;
    }

    .feedback-form-shell .wpcf7-form-control-wrap {
        display: block;
        width: 100%;
    }

    .feedback-form-shell .feedback-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.25rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.75rem;
        outline: none;
        color: #0f172a;
        background: #f8fafc;
        font-size: 1rem;
        transition: border-color 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
    }

    .feedback-form-shell textarea.feedback-input {
        padding-top: 1rem;
        padding-bottom: 1rem;
        resize: none;
    }

    .feedback-form-shell .feedback-input::placeholder {
        color: #94a3b8;
    }

    .feedback-form-shell .feedback-input:hover {
        border-color: #cbd5e1;
    }

    .feedback-form-shell .feedback-input:focus {
        border-color: #0a74bb;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(10, 116, 187, 0.1);
    }

    .feedback-form-shell .feedback-input.field-invalid,
    .feedback-form-shell .feedback-input.wpcf7-not-valid {
        border-color: #ef4444;
        background-color: #fef2f2;
    }

    /* Ratings: three 1-5 scales, each a row of selectable score buttons. */
    .feedback-rating-hint {
        margin: 0 0 1.25rem 2.75rem;
        color: #64748b;
        font-size: 0.8125rem;
        font-weight: 600;
    }

    .feedback-ratings {
        display: grid;
        gap: 1.75rem;
    }

    .feedback-scale {
        display: grid !important;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 0.5rem;
    }

    .feedback-scale .wpcf7-list-item {
        margin: 0;
    }

    .feedback-scale label {
        display: block;
        cursor: pointer;
    }

    .feedback-scale input {
        position: absolute;
        width: 1px;
        height: 1px;
        overflow: hidden;
        opacity: 0;
    }

    .feedback-scale .wpcf7-list-item-label {
        display: flex;
        min-height: 2.875rem;
        align-items: center;
        justify-content: center;
        border: 1px solid #e2e8f0;
        border-radius: 0.75rem;
        color: #475569;
        background: #f8fafc;
        font-size: 1rem;
        font-weight: 700;
        transition: all 0.2s ease;
    }

    .feedback-scale label:hover .wpcf7-list-item-label {
        border-color: #0a74bb;
        color: #0a74bb;
    }

    .feedback-scale input:focus-visible+.wpcf7-list-item-label {
        outline: 2px solid #0a74bb;
        outline-offset: 2px;
    }

    .feedback-scale input:checked+.wpcf7-list-item-label {
        color: #fff;
        border-color: #5f2a7d;
        background: #5f2a7d;
        box-shadow: 0 10px 20px rgba(95, 42, 125, 0.2);
    }

    /* Submit row */
    .feedback-actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.25rem;
    }

    .feedback-privacy {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin: 0;
        color: #64748b;
        font-size: 0.8125rem;
    }

    .feedback-privacy i {
        color: #5f2a7d;
    }

    .feedback-form-shell .feedback-submit {
        flex: 0 0 auto;
        background: #5f2a7d;
        box-shadow: 0 18px 35px rgba(95, 42, 125, 0.25);
    }

    .feedback-form-shell .feedback-submit:hover,
    .feedback-form-shell .feedback-submit:focus-visible,
    .feedback-form-shell .feedback-submit:active {
        background: #0a74bb;
        box-shadow: 0 18px 35px rgba(10, 116, 187, 0.3);
    }

    .feedback-form-shell .feedback-submit:focus-visible {
        outline: 2px solid #0a74bb;
        outline-offset: 3px;
    }

    .feedback-form-shell form.submitting button[type="submit"] {
        opacity: 0.65;
        pointer-events: none;
    }

    /* Validation and response messages - same treatment as the Referral form. */
    .feedback-form-shell .wpcf7-not-valid-tip {
        margin: 0.45rem 0 0 0.25rem;
        color: #dc2626;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .feedback-form-shell .wpcf7-response-output {
        margin: 0 !important;
        padding: 1rem 1.25rem !important;
        border: 1px solid #bbf7d0 !important;
        border-radius: 1rem;
        color: #166534;
        background: #f0fdf4;
        font-weight: 600;
    }

    .feedback-form-shell form.invalid .wpcf7-response-output,
    .feedback-form-shell form.unaccepted .wpcf7-response-output,
    .feedback-form-shell form.failed .wpcf7-response-output,
    .feedback-form-shell form.spam .wpcf7-response-output {
        border-color: #fecaca !important;
        color: #991b1b;
        background: #fef2f2;
    }

    @media (min-width: 768px) {
        .feedback-form-shell {
            margin-top: -1rem;
        }

        .feedback-cf7-form {
            gap: 2.5rem;
        }

    }

    /* Three rating groups side by side only where each still has room. */
    @media (min-width: 1024px) {
        .feedback-ratings {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            column-gap: 3rem;
        }
    }

    /* Mobile + tablet type scale; desktop keeps the Tailwind values. */
    @media (max-width: 1024px) {
        .feedback-page-intro h1 {
            font-size: clamp(1.875rem, 1.2rem + 2.6vw, 2.75rem);
        }

        .feedback-page-intro p {
            font-size: clamp(1rem, 0.94rem + 0.3vw, 1.125rem);
        }
    }

    @media (max-width: 767.98px) {
        .feedback-actions {
            flex-direction: column-reverse;
            align-items: stretch;
        }

        .feedback-privacy {
            justify-content: center;
            text-align: center;
        }
    }

    @media (max-width: 639px) {
        .feedback-page-intro {
            padding-top: 3rem;
        }

        .feedback-form-section {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .feedback-form-shell {
            padding-left: 0;
            padding-right: 0;
        }

        .feedback-panel {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .feedback-rating-hint {
            margin-left: 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('feedbackForm');
        if (!form) {
            return;
        }

        const firstNameInput = document.getElementById('feedback_first_name');
        const surnameInput = document.getElementById('feedback_surname');
        const phoneInput = document.getElementById('feedback_phone');
        const emailInput = document.getElementById('feedback_email');

        // Same rules and wording as the Referral and Contact Us forms.
        const mobilePattern = /^04\d{8}$/;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        const singleNamePattern = /^[\p{L}\p{M}]+(?:['’-][\p{L}\p{M}]+)*$/u;

        let lastValidPhoneValue = phoneInput ? phoneInput.value : '';

        if (firstNameInput) {
            firstNameInput.required = true;
            firstNameInput.autocomplete = 'given-name';
            firstNameInput.title = 'Enter one first name without spaces.';
        }

        if (surnameInput) {
            surnameInput.required = true;
            surnameInput.autocomplete = 'family-name';
            surnameInput.title = 'Enter one surname without spaces.';
        }

        if (phoneInput) {
            phoneInput.required = true;
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

        const updateFieldState = (input, message) => {
            input.setCustomValidity(message);
            input.classList.toggle('field-invalid', Boolean(message));
        };

        const validateName = (input, message) => {
            updateFieldState(
                input,
                input.value && !singleNamePattern.test(input.value.trim()) ? message : ''
            );
        };

        if (firstNameInput) {
            firstNameInput.addEventListener('input', () => validateName(firstNameInput, 'Enter one first name without spaces.'));
        }

        if (surnameInput) {
            surnameInput.addEventListener('input', () => validateName(surnameInput, 'Enter one surname without spaces.'));
        }

        if (phoneInput) {
            // Accept digits only, and only while they still form a valid 04 mobile.
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

        form.addEventListener('submit', event => {
            [firstNameInput, surnameInput, phoneInput, emailInput]
            .filter(Boolean)
                .forEach(input => input.dispatchEvent(new Event('input')));

            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopImmediatePropagation();
                form.reportValidity();
            }
        }, true);

        // Bring the first problem into view when CF7 rejects the submission.
        document.addEventListener('wpcf7invalid', event => {
            if (event.target !== form) {
                return;
            }

            const invalid = form.querySelector('.wpcf7-not-valid, .wpcf7-not-valid-tip');
            if (invalid) {
                invalid.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        });

        // After a successful send, clear states and show the success message.
        document.addEventListener('wpcf7mailsent', event => {
            if (event.target !== form) {
                return;
            }

            lastValidPhoneValue = '';
            [firstNameInput, surnameInput, phoneInput, emailInput]
            .filter(Boolean)
                .forEach(input => updateFieldState(input, ''));

            const response = form.querySelector('.wpcf7-response-output');
            if (response) {
                response.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        });
    });
</script>

<?php get_footer(); ?>
