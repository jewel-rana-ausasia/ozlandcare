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

    /* Faint dot grid that fades out towards the form. */
    .feedback-page-intro::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(10, 29, 55, 0.07) 1px, transparent 1px);
        background-size: 22px 22px;
        -webkit-mask-image: radial-gradient(ellipse 70% 60% at 50% 30%, #000 20%, transparent 75%);
        mask-image: radial-gradient(ellipse 70% 60% at 50% 30%, #000 20%, transparent 75%);
        pointer-events: none;
    }

    .feedback-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        margin-bottom: 1.5rem;
        padding: 0.5rem 1.1rem;
        border: 1px solid rgba(95, 42, 125, 0.14);
        border-radius: 9999px;
        color: #5f2a7d;
        background: rgba(255, 255, 255, 0.75);
        font-size: 0.6875rem;
        font-weight: 800;
        letter-spacing: 0.24em;
        text-transform: uppercase;
        box-shadow: 0 8px 24px -12px rgba(95, 42, 125, 0.35);
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);
    }

    .feedback-eyebrow::before {
        content: "";
        width: 0.45rem;
        height: 0.45rem;
        border-radius: 9999px;
        background: #40b450;
        box-shadow: 0 0 0 4px rgba(64, 180, 80, 0.18);
    }

    .feedback-highlights {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.75rem;
        margin: 2.25rem 0 0;
        padding: 0;
        list-style: none;
    }

    .feedback-highlights li {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.45rem 1.1rem 0.45rem 0.45rem;
        border: 1px solid rgba(226, 232, 240, 0.9);
        border-radius: 9999px;
        background: rgba(255, 255, 255, 0.9);
        color: #334155;
        font-size: 0.8125rem;
        font-weight: 700;
        box-shadow: 0 10px 24px -14px rgba(15, 23, 42, 0.18);
    }

    .feedback-highlights i {
        display: inline-flex;
        width: 1.75rem;
        height: 1.75rem;
        align-items: center;
        justify-content: center;
        border-radius: 9999px;
        color: #5f2a7d;
        background: rgba(95, 42, 125, 0.08);
        font-size: 0.6875rem;
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
        counter-reset: feedback-step;
    }

    /* Gradient hairline border: neutral at rest, brand colours while in use. */
    .feedback-panel {
        position: relative;
        padding: 1.5rem;
        border: 1px solid transparent;
        border-radius: 1.75rem;
        background:
            linear-gradient(#fff, #fff) padding-box,
            linear-gradient(180deg, #e6ebf2, #f1f4f8) border-box;
        box-shadow:
            0 1px 2px rgba(15, 23, 42, 0.04),
            0 30px 60px -32px rgba(15, 23, 42, 0.2);
        transition: box-shadow 0.35s ease, transform 0.35s ease;
    }

    .feedback-panel:focus-within {
        background:
            linear-gradient(#fff, #fff) padding-box,
            linear-gradient(135deg, rgba(95, 42, 125, 0.55), rgba(10, 116, 187, 0.45) 55%, rgba(64, 180, 80, 0.45)) border-box;
        box-shadow:
            0 1px 2px rgba(15, 23, 42, 0.04),
            0 36px 70px -34px rgba(95, 42, 125, 0.35);
    }

    .feedback-panel-head {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.75rem;
        padding-bottom: 1.5rem;
        background: linear-gradient(90deg, #e9edf3, rgba(233, 237, 243, 0)) left bottom / 100% 1px no-repeat;
    }

    .feedback-step {
        position: relative;
        display: inline-flex;
        flex: 0 0 auto;
        width: 3rem;
        height: 3rem;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        color: #fff;
        background: linear-gradient(135deg, #5f2a7d 0%, #7b3aa3 45%, #0a74bb 100%);
        font-size: 1.0625rem;
        font-weight: 800;
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.35),
            0 0 0 5px rgba(95, 42, 125, 0.07),
            0 14px 24px -10px rgba(95, 42, 125, 0.6);
    }

    .feedback-panel-title {
        margin: 0 0 0.3rem;
        color: #0a1d37;
        font-size: 1.3125rem;
        font-weight: 800;
        letter-spacing: -0.01em;
        line-height: 1.3;
    }

    .feedback-panel-title::before {
        counter-increment: feedback-step;
        content: "Step " counter(feedback-step, decimal-leading-zero);
        display: block;
        margin-bottom: 0.3rem;
        color: #0a74bb;
        font-size: 0.6875rem;
        font-weight: 800;
        letter-spacing: 0.2em;
        text-transform: uppercase;
    }

    .feedback-panel-sub {
        margin: 0;
        color: #64748b;
        font-size: 0.9375rem;
        line-height: 1.65;
    }

    .feedback-label {
        display: block;
        margin: 0 0 0.55rem 0.25rem;
        color: #334155;
        font-size: 0.71875rem;
        font-weight: 800;
        letter-spacing: 0.12em;
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
        line-height: 1.55;
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
        min-height: 3.5rem;
        padding: 0.95rem 1.25rem;
        border: 1px solid #e2e8f0;
        border-radius: 1rem;
        outline: none;
        color: #0f172a;
        background: #fbfcfe;
        font-size: 1rem;
        box-shadow: inset 0 1px 2px rgba(15, 23, 42, 0.04);
        transition: border-color 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
    }

    .feedback-form-shell textarea.feedback-input {
        min-height: 8.5rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
        line-height: 1.6;
        resize: vertical;
    }

    .feedback-form-shell .feedback-input::placeholder {
        color: #94a3b8;
    }

    .feedback-form-shell .feedback-input:hover {
        border-color: #cbd5e1;
        background: #fff;
    }

    .feedback-form-shell .feedback-input:focus {
        border-color: #5f2a7d;
        background: #fff;
        box-shadow:
            0 0 0 4px rgba(95, 42, 125, 0.1),
            0 10px 24px -14px rgba(95, 42, 125, 0.35);
    }

    .feedback-form-shell input[type="date"].feedback-input::-webkit-calendar-picker-indicator {
        cursor: pointer;
        opacity: 0.55;
        transition: opacity 0.2s ease;
    }

    .feedback-form-shell input[type="date"].feedback-input:hover::-webkit-calendar-picker-indicator {
        opacity: 1;
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
        gap: 0.55rem;
        min-width: 11rem;
        padding: 0.75rem 0.9rem;
        border: 1px solid #eef2f6;
        border-radius: 1rem;
        background: #fbfcfe;
    }

    .survey-progress-text {
        color: #64748b;
        font-size: 0.8125rem;
        font-weight: 600;
        white-space: nowrap;
    }

    .survey-progress-text strong {
        color: #0a1d37;
        font-size: 1rem;
        font-weight: 800;
    }

    .survey-progress-track {
        display: block;
        height: 0.4rem;
        border-radius: 9999px;
        background: #e9eef4;
        overflow: hidden;
    }

    .survey-progress-bar {
        display: block;
        width: 0;
        height: 100%;
        border-radius: inherit;
        background: linear-gradient(90deg, #5f2a7d, #0a74bb 55%, #40b450);
        box-shadow: 0 0 12px rgba(10, 116, 187, 0.45);
        transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
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
        position: relative;
        display: grid;
        grid-template-columns: 2.25rem minmax(0, 1fr);
        column-gap: 0.875rem;
        row-gap: 0.875rem;
        align-items: center;
        padding: 1rem;
        border: 1px solid #eef2f6;
        border-radius: 1.125rem;
        background: #fff;
        transition: border-color 0.25s ease, background-color 0.25s ease, box-shadow 0.25s ease;
    }

    .survey-row:hover {
        border-color: #e2e8f0;
        box-shadow: 0 12px 28px -20px rgba(15, 23, 42, 0.3);
    }

    .survey-row:has(input:checked) {
        border-color: #e6f2e8;
        background: linear-gradient(90deg, rgba(64, 180, 80, 0.035), #fff 40%);
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
        border-radius: 0.75rem;
        color: #5f2a7d;
        background: rgba(95, 42, 125, 0.07);
        font-size: 0.875rem;
        font-weight: 800;
        transition: all 0.25s ease;
    }

    /* Answered statements swap their number for a tick. */
    .survey-row:has(input:checked) .survey-num {
        color: #fff;
        background: linear-gradient(135deg, #4cc35d, #2f9a3e);
        font-size: 0;
        box-shadow: 0 8px 16px -8px rgba(47, 154, 62, 0.7);
    }

    .survey-row:has(input:checked) .survey-num::before {
        content: "\f00c";
        font-family: "Font Awesome 6 Free";
        font-size: 0.8125rem;
        font-weight: 900;
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

    /* Segmented control: three answers sit in one soft track. */
    .survey-choices {
        display: grid !important;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 0.25rem;
        padding: 0.3rem;
        border-radius: 1rem;
        background: #f1f4f8;
        box-shadow: inset 0 1px 2px rgba(15, 23, 42, 0.05);
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
        min-height: 2.875rem;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.5rem;
        border: 1px solid transparent;
        border-radius: 0.75rem;
        color: #64748b;
        background: transparent;
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
        opacity: 0.5;
        transition: opacity 0.2s ease, transform 0.2s ease;
    }

    .survey-choices label:hover .wpcf7-list-item-label {
        color: var(--tone);
        background: rgba(255, 255, 255, 0.7);
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
        border-color: var(--edge);
        color: var(--tone);
        background: #fff;
        box-shadow:
            0 1px 2px rgba(15, 23, 42, 0.06),
            0 8px 18px -10px var(--tone);
    }

    .survey-choices input:checked+.wpcf7-list-item-label::before {
        font-weight: 900;
        opacity: 1;
        transform: scale(1.12);
    }

    /* ===== Rating out of 10 ===== */
    .survey-rating {
        padding: 1.5rem;
        border: 1px solid #eef2f6;
        border-radius: 1.25rem;
        background: linear-gradient(180deg, #fbfcfe, #fff);
    }

    .survey-rating .feedback-label {
        margin: 0 0 1.125rem;
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
        min-height: 3.75rem;
        align-items: center;
        justify-content: center;
        padding-bottom: 4px;
        border: 1.5px solid #e2e8f0;
        border-radius: 1rem;
        color: #1e293b;
        background: #fff;
        background: linear-gradient(0deg, color-mix(in srgb, var(--tone) 12%, #fff), #fff 70%);
        font-size: 1.125rem;
        font-weight: 800;
        font-variant-numeric: tabular-nums;
        box-shadow: 0 1px 2px rgba(15, 23, 42, 0.05);
        overflow: hidden;
        transition: all 0.2s ease;
    }

    /* Full-width colour strip along the bottom edge, as before. */
    .rating-scale .wpcf7-list-item-label::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 4px;
        background: var(--tone);
        transition: height 0.2s ease, opacity 0.2s ease;
    }

    .rating-scale label:hover .wpcf7-list-item-label {
        border-color: var(--tone);
        transform: translateY(-2px);
        box-shadow: 0 12px 20px -12px var(--tone);
    }

    .rating-scale label:hover .wpcf7-list-item-label::after {
        height: 6px;
    }

    .rating-scale input:checked+.wpcf7-list-item-label {
        border-color: var(--tone);
        color: var(--ink);
        background:
            linear-gradient(180deg, rgba(255, 255, 255, 0.22), rgba(255, 255, 255, 0)),
            var(--tone);
        transform: translateY(-3px);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.35),
            0 16px 28px -12px var(--tone);
    }

    .rating-scale input:checked+.wpcf7-list-item-label::after {
        background: rgba(0, 0, 0, 0.15);
    }

    .survey-rating:has(input:checked) .rating-scale input:not(:checked)+.wpcf7-list-item-label {
        opacity: 0.7;
    }

    .survey-rating:has(input:checked) .rating-scale label:hover input:not(:checked)+.wpcf7-list-item-label {
        opacity: 1;
    }

    .rating-legend {
        margin-top: 1rem;
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
        margin: 1.5rem auto 0;
        padding: 0.875rem 1.25rem;
        border: 1px dashed #dbe2ea;
        border-radius: 9999px;
        color: #64748b;
        background: #fff;
        font-size: 0.9375rem;
        font-weight: 600;
        text-align: center;
        transition: all 0.25s ease;
    }

    .rating-readout strong {
        color: inherit;
        font-weight: 800;
    }

    .rating-readout.is-poor {
        border: 1px solid #fed7aa;
        color: #9a3412;
        background: #fff4ed;
    }

    .rating-readout.is-average {
        border: 1px solid #fde68a;
        color: #854d0e;
        background: #fefce8;
    }

    .rating-readout.is-excellent {
        border: 1px solid #bbf7d0;
        color: #166534;
        background: #f0fdf4;
    }

    /* ===== Submit row ===== */
    .feedback-actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.25rem;
        padding: 1.25rem 1.25rem 1.25rem 1.5rem;
        border: 1px solid #e9edf3;
        border-radius: 1.75rem;
        background:
            radial-gradient(circle at 100% 0%, rgba(95, 42, 125, 0.08), transparent 45%),
            #fff;
        box-shadow:
            0 1px 2px rgba(15, 23, 42, 0.04),
            0 30px 60px -32px rgba(15, 23, 42, 0.2);
    }

    .feedback-privacy {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 0;
        color: #64748b;
        font-size: 0.875rem;
        line-height: 1.5;
    }

    .feedback-privacy i {
        display: inline-flex;
        flex: 0 0 auto;
        width: 2.25rem;
        height: 2.25rem;
        align-items: center;
        justify-content: center;
        border-radius: 0.75rem;
        color: #5f2a7d;
        background: rgba(95, 42, 125, 0.08);
        font-size: 0.8125rem;
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
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 0 !important;
        padding: 1.1rem 1.35rem !important;
        border: 1px solid #bbf7d0 !important;
        border-radius: 1.25rem;
        color: #166534;
        background: #f0fdf4;
        font-weight: 600;
        box-shadow: 0 18px 40px -26px rgba(22, 101, 52, 0.45);
    }

    .feedback-form-shell .wpcf7-response-output::before {
        content: "\f00c";
        display: inline-flex;
        flex: 0 0 auto;
        width: 2rem;
        height: 2rem;
        align-items: center;
        justify-content: center;
        border-radius: 9999px;
        color: #fff;
        background: #2f9a3e;
        font-family: "Font Awesome 6 Free";
        font-size: 0.8125rem;
        font-weight: 900;
    }

    .feedback-form-shell .wpcf7-response-output:empty,
    .feedback-form-shell .wpcf7-response-output[aria-hidden="true"] {
        display: none;
    }

    .feedback-form-shell form.invalid .wpcf7-response-output,
    .feedback-form-shell form.unaccepted .wpcf7-response-output,
    .feedback-form-shell form.failed .wpcf7-response-output,
    .feedback-form-shell form.spam .wpcf7-response-output {
        border-color: #fecaca !important;
        color: #991b1b;
        background: #fef2f2;
        box-shadow: 0 18px 40px -26px rgba(153, 27, 27, 0.4);
    }

    .feedback-form-shell form.invalid .wpcf7-response-output::before,
    .feedback-form-shell form.unaccepted .wpcf7-response-output::before,
    .feedback-form-shell form.failed .wpcf7-response-output::before,
    .feedback-form-shell form.spam .wpcf7-response-output::before {
        content: "\21";
        background: #dc2626;
    }

    @media (min-width: 768px) {
        .feedback-cf7-form {
            gap: 2rem;
        }

        .feedback-panel {
            padding: 2.5rem;
            border-radius: 2rem;
        }

        .feedback-panel-head {
            gap: 1.25rem;
            margin-bottom: 2rem;
        }

        .feedback-panel-head--split {
            display: grid;
            grid-template-columns: auto minmax(0, 1fr) auto;
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

        /* Matches the segmented track's padding and gap so headings sit over their column. */
        .survey-head-choices {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.25rem;
            padding: 0 0.3rem;
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
            padding: 0.75rem 0.75rem 0.75rem 1rem;
        }

        .survey-row .wpcf7-form-control-wrap {
            grid-column: auto;
        }

        .survey-choices .wpcf7-list-item-label {
            min-height: 2.75rem;
            font-size: 0.8125rem;
        }

        .survey-rating {
            padding: 2rem;
        }

        .rating-readout {
            max-width: 26rem;
        }

        .feedback-actions {
            padding: 1.25rem 1.25rem 1.25rem 1.75rem;
            border-radius: 2rem;
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
            padding: 1.25rem;
            text-align: left;
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
            border-radius: 1.375rem;
        }

        .feedback-step {
            width: 2.625rem;
            height: 2.625rem;
            border-radius: 0.875rem;
            font-size: 0.9375rem;
        }

        .feedback-panel-title {
            font-size: 1.1875rem;
        }

        .survey-row {
            padding: 0.875rem;
        }

        /* Ten buttons need the full width on phones, so the rating loses its inner card. */
        .survey-rating {
            padding: 0;
            border: 0;
            background: none;
        }

        .rating-scale,
        .rating-legend {
            gap: 0.25rem;
        }

        .rating-scale .wpcf7-list-item-label {
            min-height: 3.125rem;
            border-radius: 0.625rem;
            font-size: 0.9375rem;
        }

        .rating-legend {
            font-size: 0.6875rem;
        }

        .rating-legend i {
            display: none;
        }

        .rating-readout {
            border-radius: 1rem;
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
