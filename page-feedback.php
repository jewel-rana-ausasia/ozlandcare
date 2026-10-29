<?php

/**
 * Template Name: Feedback Form
 * Description: Participant Satisfactory Survey (NP FM-007.03) for Ozland Care.
 *
 * Used automatically for the page with the "feedback" slug. The form itself
 * lives in Contact > Contact Forms > Feedback Form (see inc/feedback-cf7.php).
 */

get_header();
?>

<main id="primary" class="site-main bg-slate-50">

    <!-- INTRO -->
    <section class="feedback-page-intro relative pt-16 lg:pt-24 pb-14 lg:pb-20 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-[30rem] h-[30rem] bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -bottom-48 -left-36 w-[28rem] h-[28rem] bg-blue/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="feedback-eyebrow">Participant Satisfaction Survey</span>
                <h1 class="text-4xl md:text-5xl font-bold text-[#0A1D37] mb-6 leading-tight">
                    Tell Us How <span class="text-primary">We&rsquo;re Doing</span>
                </h1>
                <p class="text-slate-950 text-lg leading-relaxed">
                    We appreciate your feedback as it helps us to improve our services.
                    It only takes a few minutes, and there are no right or wrong answers.
                </p>

                <ul class="feedback-highlights" aria-label="About this survey">
                    <li><i class="fas fa-lock" aria-hidden="true"></i> Confidential</li>
                    <li><i class="fas fa-clock" aria-hidden="true"></i> About 5 minutes</li>
                    <li><i class="fas fa-heart" aria-hidden="true"></i> Read by our team</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- SURVEY FORM -->
    <section class="feedback-form-section max-w-5xl mx-auto px-6 pb-20 lg:pb-28">
        <div class="feedback-form-shell">
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
    /* ===== Intro ===== */
    .feedback-page-intro {
        background:
            radial-gradient(circle at 15% 20%, rgba(10, 116, 187, 0.09), transparent 34%),
            radial-gradient(circle at 85% 10%, rgba(95, 42, 125, 0.1), transparent 32%),
            #f8fafc;
    }

    .feedback-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        margin-bottom: 1.25rem;
        color: #5f2a7d;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.28em;
        text-transform: uppercase;
    }

    .feedback-eyebrow::before,
    .feedback-eyebrow::after {
        content: "";
        width: 1.75rem;
        height: 1px;
        background: currentColor;
        opacity: 0.4;
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

    /* ===== Shell + panels ===== */
    .feedback-form-shell {
        position: relative;
        margin-top: -1.5rem;
    }

    .feedback-cf7-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .feedback-panel {
        position: relative;
        padding: 1.5rem;
        border: 1px solid #e9edf3;
        border-radius: 1.5rem;
        background: #fff;
        box-shadow:
            0 1px 2px rgba(15, 23, 42, 0.04),
            0 18px 40px -18px rgba(15, 23, 42, 0.12);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .feedback-panel:focus-within {
        border-color: rgba(95, 42, 125, 0.25);
        box-shadow:
            0 1px 2px rgba(15, 23, 42, 0.04),
            0 24px 50px -20px rgba(95, 42, 125, 0.22);
    }

    .feedback-panel-head {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.75rem;
        padding-bottom: 1.25rem;
        border-bottom: 1px solid #f1f5f9;
    }

    .feedback-step {
        display: inline-flex;
        flex: 0 0 auto;
        width: 2.5rem;
        height: 2.5rem;
        align-items: center;
        justify-content: center;
        border-radius: 0.875rem;
        color: #fff;
        background: linear-gradient(135deg, #5f2a7d 0%, #0a74bb 100%);
        font-size: 0.9375rem;
        font-weight: 800;
        box-shadow: 0 10px 20px -8px rgba(95, 42, 125, 0.55);
    }

    .feedback-panel-title {
        margin: 0.1rem 0 0.25rem;
        color: #0a1d37;
        font-size: 1.25rem;
        font-weight: 800;
        line-height: 1.3;
    }

    .feedback-panel-sub {
        margin: 0;
        color: #64748b;
        font-size: 0.9375rem;
        line-height: 1.6;
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

    .feedback-label--question {
        margin-left: 0;
        color: #1e293b;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 0;
        text-transform: none;
    }

    .feedback-label--question strong {
        color: #5f2a7d;
        font-weight: 800;
    }

    .feedback-panel .group:focus-within .feedback-label:not(.feedback-label--question) {
        color: #5f2a7d;
    }

    .feedback-form-shell .wpcf7-form-control-wrap {
        display: block;
        width: 100%;
    }

    .feedback-form-shell .feedback-input {
        display: block;
        width: 100%;
        min-height: 3.25rem;
        padding: 0.875rem 1.25rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.875rem;
        outline: none;
        color: #0f172a;
        background: #f8fafc;
        font-size: 1rem;
        transition: border-color 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
    }

    .feedback-form-shell textarea.feedback-input {
        padding-top: 1rem;
        padding-bottom: 1rem;
        resize: vertical;
    }

    .feedback-form-shell .feedback-input::placeholder {
        color: #94a3b8;
    }

    .feedback-form-shell .feedback-input:hover {
        border-color: #cbd5e1;
    }

    .feedback-form-shell .feedback-input:focus {
        border-color: #5f2a7d;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(95, 42, 125, 0.1);
    }

    .feedback-form-shell .feedback-input.field-invalid,
    .feedback-form-shell .feedback-input.wpcf7-not-valid {
        border-color: #ef4444;
        background-color: #fef2f2;
    }

    /* ===== Statements: No / Not sure / Yes ===== */
    .survey-progress {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        min-width: 10rem;
    }

    .survey-progress-text {
        color: #64748b;
        font-size: 0.8125rem;
        font-weight: 600;
        white-space: nowrap;
    }

    .survey-progress-text strong {
        color: #0a1d37;
        font-weight: 800;
    }

    .survey-progress-track {
        display: block;
        height: 0.375rem;
        border-radius: 9999px;
        background: #eef2f6;
        overflow: hidden;
    }

    .survey-progress-bar {
        display: block;
        width: 0;
        height: 100%;
        border-radius: inherit;
        background: linear-gradient(90deg, #5f2a7d, #40b450);
        transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .survey-table {
        display: flex;
        flex-direction: column;
        gap: 0.625rem;
    }

    .survey-head {
        display: none;
    }

    .survey-row {
        display: grid;
        grid-template-columns: 2.25rem minmax(0, 1fr);
        column-gap: 0.875rem;
        row-gap: 0.875rem;
        align-items: center;
        padding: 1rem;
        border: 1px solid #eef2f6;
        border-radius: 1rem;
        background: #fbfcfe;
        transition: border-color 0.25s ease, background-color 0.25s ease;
    }

    .survey-row:hover {
        border-color: #e2e8f0;
        background: #fff;
    }

    .survey-row:has(input:checked) {
        background: #fff;
    }

    .survey-row:has(.wpcf7-not-valid) {
        border-color: #fca5a5;
        background: #fff7f7;
    }

    .survey-num {
        display: inline-flex;
        width: 2.25rem;
        height: 2.25rem;
        align-items: center;
        justify-content: center;
        border-radius: 9999px;
        color: #5f2a7d;
        background: rgba(95, 42, 125, 0.08);
        font-size: 0.875rem;
        font-weight: 800;
        transition: all 0.25s ease;
    }

    .survey-row:has(input:checked) .survey-num {
        color: #fff;
        background: #40b450;
    }

    .survey-statement {
        margin: 0;
        color: #1e293b;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.5;
    }

    .survey-row .wpcf7-form-control-wrap {
        grid-column: 1 / -1;
    }

    .survey-choices {
        display: grid !important;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 0.5rem;
    }

    .survey-choices .wpcf7-list-item,
    .rating-scale .wpcf7-list-item {
        margin: 0;
    }

    .survey-choices label,
    .rating-scale label {
        position: relative;
        display: block;
        cursor: pointer;
    }

    /* Visually hidden, but pinned to the button's bottom edge so the browser's
       "please select" bubble points at the right answer group. */
    .survey-choices input,
    .rating-scale input {
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 1px;
        height: 1px;
        margin: 0;
        overflow: hidden;
        opacity: 0;
    }

    /* Each choice carries its own tone: red, amber, green - as on the paper form. */
    .survey-choices .wpcf7-list-item:nth-child(1) {
        --tone: #dc2626;
        --tint: #fef2f2;
        --edge: #fca5a5;
        --face: "\f119";
    }

    .survey-choices .wpcf7-list-item:nth-child(2) {
        --tone: #d97706;
        --tint: #fffbeb;
        --edge: #fcd34d;
        --face: "\f11a";
    }

    .survey-choices .wpcf7-list-item:nth-child(3) {
        --tone: #2f9a3e;
        --tint: #f0fdf4;
        --edge: #86efac;
        --face: "\f118";
    }

    .survey-choices .wpcf7-list-item-label {
        display: flex;
        min-height: 3rem;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.5rem;
        border: 1.5px solid #e2e8f0;
        border-radius: 0.875rem;
        color: #475569;
        background: #fff;
        font-size: 0.875rem;
        font-weight: 700;
        line-height: 1.2;
        text-align: center;
        transition: all 0.2s ease;
    }

    .survey-choices .wpcf7-list-item-label::before {
        content: var(--face);
        color: var(--tone);
        font-family: "Font Awesome 6 Free";
        font-size: 1.25rem;
        font-weight: 400;
        opacity: 0.55;
        transition: opacity 0.2s ease, transform 0.2s ease;
    }

    .survey-choices label:hover .wpcf7-list-item-label {
        border-color: var(--edge);
        color: var(--tone);
    }

    .survey-choices label:hover .wpcf7-list-item-label::before {
        opacity: 1;
    }

    .survey-choices input:focus-visible+.wpcf7-list-item-label,
    .rating-scale input:focus-visible+.wpcf7-list-item-label {
        outline: 2px solid #5f2a7d;
        outline-offset: 2px;
    }

    .survey-choices input:checked+.wpcf7-list-item-label {
        border-color: var(--tone);
        color: var(--tone);
        background: var(--tint);
        box-shadow: 0 8px 18px -10px var(--tone);
    }

    .survey-choices input:checked+.wpcf7-list-item-label::before {
        font-weight: 900;
        opacity: 1;
        transform: scale(1.12);
    }

    /* ===== Rating out of 10 ===== */
    .survey-rating .feedback-label {
        margin: 0 0 1rem;
    }

    .rating-scale,
    .rating-legend {
        display: grid !important;
        grid-template-columns: repeat(10, minmax(0, 1fr));
        gap: 0.5rem;
    }

    /* Tones follow the paper scale: burnt orange through yellow to green. */
    .rating-scale .wpcf7-list-item:nth-child(1) { --tone: #c2410c; --ink: #fff; }
    .rating-scale .wpcf7-list-item:nth-child(2) { --tone: #e2703a; --ink: #fff; }
    .rating-scale .wpcf7-list-item:nth-child(3) { --tone: #ef9a68; --ink: #431407; }
    .rating-scale .wpcf7-list-item:nth-child(4) { --tone: #f5c451; --ink: #422006; }
    .rating-scale .wpcf7-list-item:nth-child(5) { --tone: #f1b51c; --ink: #422006; }
    .rating-scale .wpcf7-list-item:nth-child(6) { --tone: #f1b51c; --ink: #422006; }
    .rating-scale .wpcf7-list-item:nth-child(7) { --tone: #f5c451; --ink: #422006; }
    .rating-scale .wpcf7-list-item:nth-child(8) { --tone: #9ccc84; --ink: #14532d; }
    .rating-scale .wpcf7-list-item:nth-child(9) { --tone: #6cb556; --ink: #fff; }
    .rating-scale .wpcf7-list-item:nth-child(10) { --tone: #3f8f32; --ink: #fff; }

    .rating-scale .wpcf7-list-item-label {
        position: relative;
        display: flex;
        min-height: 3.5rem;
        align-items: center;
        justify-content: center;
        border: 1.5px solid #e2e8f0;
        border-radius: 0.875rem;
        color: #334155;
        background: #fff;
        font-size: 1.0625rem;
        font-weight: 800;
        overflow: hidden;
        transition: all 0.2s ease;
    }

    .rating-scale .wpcf7-list-item-label::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 4px;
        background: var(--tone);
    }

    .rating-scale label:hover .wpcf7-list-item-label {
        border-color: var(--tone);
        transform: translateY(-2px);
    }

    .rating-scale input:checked+.wpcf7-list-item-label {
        border-color: var(--tone);
        color: var(--ink);
        background: var(--tone);
        transform: translateY(-3px);
        box-shadow: 0 14px 24px -12px var(--tone);
    }

    .survey-rating:has(input:checked) .rating-scale input:not(:checked)+.wpcf7-list-item-label {
        opacity: 0.6;
    }

    .survey-rating:has(input:checked) .rating-scale label:hover input:not(:checked)+.wpcf7-list-item-label {
        opacity: 1;
    }

    .rating-legend {
        margin-top: 0.875rem;
        color: #64748b;
        font-size: 0.8125rem;
        font-weight: 700;
    }

    .rating-legend span {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        padding-top: 0.625rem;
        border-top: 2px solid;
    }

    .rating-legend .is-poor {
        grid-column: span 3;
        border-color: #ef9a68;
    }

    .rating-legend .is-poor i {
        color: #dc2626;
    }

    .rating-legend .is-average {
        grid-column: span 4;
        border-color: #f5c451;
    }

    .rating-legend .is-average i {
        color: #d97706;
    }

    .rating-legend .is-excellent {
        grid-column: span 3;
        border-color: #9ccc84;
    }

    .rating-legend .is-excellent i {
        color: #2f9a3e;
    }

    .rating-readout {
        margin: 1.5rem 0 0;
        padding: 0.875rem 1.125rem;
        border-radius: 0.875rem;
        color: #64748b;
        background: #f8fafc;
        font-size: 0.9375rem;
        font-weight: 600;
        text-align: center;
        transition: all 0.25s ease;
    }

    .rating-readout strong {
        color: #0a1d37;
        font-weight: 800;
    }

    .rating-readout.is-poor {
        color: #9a3412;
        background: #fff4ed;
    }

    .rating-readout.is-average {
        color: #854d0e;
        background: #fefce8;
    }

    .rating-readout.is-excellent {
        color: #166534;
        background: #f0fdf4;
    }

    /* ===== Submit row ===== */
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

    /* Same button as the Referral form. */
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

    .feedback-form-shell .wpcf7-spinner {
        display: none;
    }

    /* The browser bubble already shows the message; don't repeat it below the
       field - same treatment as the Referral form. */
    .feedback-form-shell .wpcf7-not-valid-tip {
        display: none;
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
        .feedback-cf7-form {
            gap: 2rem;
        }

        .feedback-panel {
            padding: 2.25rem;
            border-radius: 1.75rem;
        }

        .feedback-panel-head {
            gap: 1.25rem;
        }

        .feedback-panel-head--split {
            display: grid;
            grid-template-columns: auto minmax(0, 1fr) auto;
        }

        .survey-progress {
            padding-top: 0.25rem;
        }

        /* Statements read as a table: number, statement, three answer columns. */
        .survey-head {
            display: grid;
            grid-template-columns: 2.25rem minmax(0, 1fr) 21rem;
            column-gap: 1.25rem;
            align-items: center;
            padding: 0 1rem 0.375rem;
            color: #94a3b8;
            font-size: 0.6875rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .survey-head-choices {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.5rem;
            text-align: center;
        }

        .survey-head-choices span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.35rem;
        }

        .survey-head .is-no { color: #dc2626; }
        .survey-head .is-unsure { color: #d97706; }
        .survey-head .is-yes { color: #2f9a3e; }

        .survey-row {
            grid-template-columns: 2.25rem minmax(0, 1fr) 21rem;
            column-gap: 1.25rem;
            padding: 0.875rem 1rem;
        }

        .survey-row .wpcf7-form-control-wrap {
            grid-column: auto;
        }

        .survey-choices .wpcf7-list-item-label {
            min-height: 2.875rem;
            font-size: 0.8125rem;
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
        .feedback-panel-head--split {
            flex-wrap: wrap;
        }

        .feedback-panel-head--split .survey-progress {
            flex-basis: 100%;
        }

        /* Full-width submit is easier to tap, as on the Referral form. */
        .feedback-actions {
            flex-direction: column-reverse;
            align-items: stretch;
            text-align: center;
        }

        .feedback-privacy {
            justify-content: center;
        }

        .feedback-form-shell .feedback-submit {
            width: 100%;
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

        .feedback-panel {
            padding: 1.25rem 1rem;
            border-radius: 1.25rem;
        }

        .survey-row {
            padding: 0.875rem;
        }

        .rating-scale,
        .rating-legend {
            gap: 0.25rem;
        }

        .rating-scale .wpcf7-list-item-label {
            min-height: 3rem;
            border-radius: 0.625rem;
            font-size: 0.9375rem;
        }

        .rating-legend {
            font-size: 0.6875rem;
        }

        .rating-legend i {
            display: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .feedback-form-shell *,
        .feedback-form-shell *::before,
        .feedback-form-shell *::after {
            transition: none !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('feedbackForm');
        if (!form) {
            return;
        }

        const nameInput = document.getElementById('feedback_participant_name');
        const dateInput = document.getElementById('feedback_date');
        const countOutput = form.querySelector('[data-survey-count]');
        const progressBar = form.querySelector('[data-survey-bar]');
        const readout = form.querySelector('[data-rating-readout]');
        const statementGroups = [...form.querySelectorAll('.survey-row')];

        // Same rule as the server: letters, with spaces, apostrophes or hyphens between parts.
        const fullNamePattern = /^[\p{L}\p{M}]+(?:[ '’-][\p{L}\p{M}]+)*$/u;
        const nameMessage = 'Enter your full name using letters only.';

        const today = <?php echo wp_json_encode(current_time('Y-m-d')); ?>;

        // Mark every required field, including each answer group, so the
        // browser shows its own message, as on the Referral form.
        [
            nameInput,
            dateInput,
            ...form.querySelectorAll('.survey-choices input, .rating-scale input')
        ].filter(Boolean).forEach(input => {
            input.required = true;
        });

        if (nameInput) {
            nameInput.autocomplete = 'name';
            nameInput.title = nameMessage;
        }

        if (dateInput) {
            dateInput.max = today;
            if (!dateInput.value) {
                dateInput.value = today;
            }

            dateInput.addEventListener('click', () => {
                if (typeof dateInput.showPicker === 'function') {
                    try {
                        dateInput.showPicker();
                    } catch (error) {
                        // The browser's native icon remains available as fallback.
                    }
                }
            });
        }

        const updateFieldState = (input, message) => {
            input.setCustomValidity(message);
            input.classList.toggle('field-invalid', Boolean(message));
        };

        const validateName = () => {
            const value = nameInput.value.trim().replace(/\s+/g, ' ');
            updateFieldState(nameInput, value && !fullNamePattern.test(value) ? nameMessage : '');
        };

        if (nameInput) {
            nameInput.addEventListener('input', validateName);
            nameInput.addEventListener('blur', () => {
                nameInput.value = nameInput.value.trim().replace(/\s+/g, ' ');
            });
        }

        const updateProgress = () => {
            const answered = statementGroups.filter(row => row.querySelector('input:checked')).length;
            if (countOutput) {
                countOutput.textContent = answered;
            }
            if (progressBar) {
                progressBar.style.width = `${(answered / (statementGroups.length || 1)) * 100}%`;
            }
        };

        const bands = [
            { max: 3, key: 'is-poor', label: 'Very poor' },
            { max: 7, key: 'is-average', label: 'Average' },
            { max: 10, key: 'is-excellent', label: 'Excellent' },
        ];

        const updateReadout = () => {
            if (!readout) {
                return;
            }

            const selected = form.querySelector('input[name="overall_rating"]:checked');
            readout.classList.remove(...bands.map(band => band.key));

            if (!selected) {
                readout.textContent = 'Select a score from 1 to 10.';
                return;
            }

            const score = Number(selected.value);
            const band = bands.find(item => score <= item.max);
            readout.classList.add(band.key);
            readout.innerHTML = `You rated us <strong>${score} out of 10</strong> &middot; ${band.label}`;
        };

        form.addEventListener('change', event => {
            if (event.target.type !== 'radio') {
                return;
            }

            // Clear CF7's error state on a group as soon as it is answered.
            const control = event.target.closest('.wpcf7-form-control');
            if (control) {
                control.classList.remove('wpcf7-not-valid');
                control.removeAttribute('aria-invalid');
            }

            updateProgress();
            updateReadout();
        });

        form.addEventListener('submit', event => {
            if (nameInput) {
                validateName();
            }

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

            const invalid = form.querySelector('.wpcf7-not-valid');
            if (invalid) {
                (invalid.closest('.survey-row, .survey-rating') || invalid).scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        });

        // After a successful send, reset the extras and show the thank-you message.
        document.addEventListener('wpcf7mailsent', event => {
            if (event.target !== form) {
                return;
            }

            const response = form.querySelector('.wpcf7-response-output');
            if (response) {
                response.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        });

        // CF7 clears the form after a successful send; restore the date and counters.
        document.addEventListener('wpcf7reset', event => {
            if (!event.target.contains(form)) {
                return;
            }

            if (nameInput) {
                updateFieldState(nameInput, '');
            }
            if (dateInput) {
                dateInput.value = today;
            }
            updateProgress();
            updateReadout();
        });

        updateProgress();
        updateReadout();
    });
</script>

<?php get_footer(); ?>
