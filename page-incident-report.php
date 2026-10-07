<?php
/**
 * Template Name: Incident Report
 * Description: HS FM-003.05 Incident Report Form.
 */
get_header();
?>

<main id="primary" class="incident-page">
    <section class="incident-form-area">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <div class="incident-intro max-w-4xl mx-auto text-center">
                <span class="text-primary font-bold tracking-[0.3em] uppercase text-xs mb-4 block">HS FM-003 &middot; Confidential</span>
                <h2 class="text-4xl md:text-5xl font-bold text-[#0A1D37] mb-6 leading-tight">
                    Report an <span class="text-primary">Incident</span>
                </h2>
                <p class="text-slate-950 text-base md:text-lg leading-relaxed">
                    Whether you are a support worker, participant, family member or visitor, use this form to report any
                    incident, accident, near miss or hazard involving Ozland Care services. Every report is treated
                    confidentially and helps us respond quickly, support everyone involved and meet our obligations to
                    the NDIS Commission.
                </p>
            </div>

            <div class="incident-shell">
                <div class="incident-form-card">
                    <?php
                    $incident_form = function_exists('ozlandcare_render_incident_report_cf7_form') ? ozlandcare_render_incident_report_cf7_form() : '';
                    echo $incident_form ?: '<div class="incident-unavailable">The incident report form is temporarily unavailable. Please contact Ozland Care directly.</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    .incident-page{--ink:#10233f;--muted:#5f6f84;--purple:#682f82;--blue:#0875bd;--brand-purple:#5f2a7d;--brand-blue:#0a74bb;background:#f4f7fb;color:var(--ink)}
    .incident-form-area{position:relative;margin-top:0;padding:6rem 0 7rem}.incident-intro{margin-bottom:2.75rem}.incident-shell{position:relative;z-index:2;max-width:80rem;margin:auto;border:1px solid #e6ecf4;border-radius:26px;background:#fff;box-shadow:0 1px 2px rgba(15,35,64,.04),0 12px 28px rgba(15,35,64,.06),0 40px 80px rgba(15,35,64,.09);overflow:hidden}
    .incident-form-card{min-width:0;padding:2.6rem 3rem 3rem}
    .incident-progress{margin-bottom:2.6rem}
    .incident-stepper{display:grid;grid-template-columns:repeat(6,minmax(0,1fr));margin:0 0 1.75rem;padding:0;list-style:none}
    .incident-stepper__item{position:relative;display:flex;flex-direction:column;align-items:center;gap:.7rem;text-align:center}
    .incident-stepper__item:not(:last-child):before{content:"";position:absolute;top:18px;left:calc(50% + 24px);right:calc(-50% + 24px);height:2px;background:#e7edf4}
    .incident-stepper__item:not(:last-child):after{content:"";position:absolute;top:18px;left:calc(50% + 24px);right:calc(-50% + 24px);height:2px;background:var(--brand-purple);transform:scaleX(0);transform-origin:left;transition:transform .45s cubic-bezier(.4,0,.2,1)}
    .incident-stepper__item.is-done:after{transform:scaleX(1)}
    .incident-stepper__dot{position:relative;z-index:1;display:grid;place-items:center;width:38px;height:38px;flex:none;border:1.5px solid #e2e9f2;border-radius:50%;background:#fff;color:#aab6c6;font-size:.8rem;font-weight:800;font-variant-numeric:tabular-nums;transition:border-color .3s,background .3s,color .3s,box-shadow .3s,transform .3s}
    .incident-stepper__label{max-width:11ch;color:#a3b0c0;font-size:.685rem;font-weight:700;line-height:1.4;transition:color .3s}
    .incident-stepper__item.is-done{cursor:pointer}
    .incident-stepper__item.is-done .incident-stepper__dot{border-color:var(--brand-purple);background:var(--brand-purple);color:transparent}
    .incident-stepper__item.is-done .incident-stepper__dot:after{content:"\f00c";font-family:"Font Awesome 6 Free","Font Awesome 5 Free";font-weight:900;position:absolute;inset:0;display:grid;place-items:center;color:#fff;font-size:.72rem}
    .incident-stepper__item.is-done .incident-stepper__label{color:#64748b}
    .incident-stepper__item.is-done:hover .incident-stepper__dot{background:var(--brand-blue);border-color:var(--brand-blue)}
    .incident-stepper__item.is-current .incident-stepper__dot{border-color:var(--brand-purple);border-width:2px;background:#fff;color:var(--brand-purple);box-shadow:0 0 0 6px rgba(95,42,125,.09)}
    .incident-stepper__item.is-current .incident-stepper__label{color:var(--ink);font-weight:850}
    .incident-progress__meter{display:flex;align-items:center;gap:1.35rem}
    .incident-progress__bar{flex:1;height:4px;border-radius:99px;background:#eaeff5;overflow:hidden}.incident-progress__bar span{display:block;width:16.667%;height:100%;border-radius:inherit;background:var(--brand-purple);transition:width .45s cubic-bezier(.4,0,.2,1)}
    .incident-progress__copy{display:flex;align-items:center;gap:.55rem;margin:0;color:#8593a6;font-size:.72rem;font-weight:650;white-space:nowrap}.incident-progress__copy strong{color:var(--ink);font-weight:800;font-variant-numeric:tabular-nums}.incident-progress__copy [data-step-name]{display:none}
    .incident-alert{display:flex;gap:.85rem;align-items:flex-start;margin-bottom:1.8rem;padding:1rem 1.1rem;border:1px solid #bae6fd;border-radius:14px;background:#f0f9ff;color:#174563;font-size:.82rem;line-height:1.6}.incident-alert i{margin-top:.25rem;color:var(--blue)}.incident-alert p{margin:0}
    .incident-step{display:none;animation:incidentFade .3s ease}.incident-step.is-active{display:block}@keyframes incidentFade{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:none}}.incident-section-heading{display:flex;align-items:center;gap:1.1rem;margin-bottom:1.9rem}.incident-section-heading>span{display:grid;place-items:center;width:50px;height:50px;flex:none;border-radius:16px;background:linear-gradient(135deg,var(--purple),var(--blue));color:#fff;font-size:.95rem;font-weight:850;box-shadow:0 10px 22px rgba(104,47,130,.22)}.incident-section-heading p{margin:0;color:var(--purple);font-size:.67rem;font-weight:850;letter-spacing:.15em;text-transform:uppercase}.incident-section-heading h2{margin:.2rem 0 0;font-size:1.6rem;font-weight:850;letter-spacing:-.015em}.incident-subsection{margin-top:1.5rem;padding:1.6rem;border:1px solid #e8edf4;border-radius:18px;background:linear-gradient(180deg,#fbfcfe,#f7f9fc)}.incident-subsection h3{margin:0 0 1.2rem;color:#1c3453;font-size:.95rem;font-weight:850;letter-spacing:.01em}.incident-grid{display:grid;gap:1rem}.incident-grid--2{grid-template-columns:repeat(2,minmax(0,1fr))}.incident-grid--3{grid-template-columns:repeat(3,minmax(0,1fr))}.incident-span-2{grid-column:span 2}.incident-field{min-width:0;margin-bottom:1.05rem}.incident-field label,.incident-label{display:block;margin:0 0 .48rem .1rem;color:#263c57;font-size:.72rem;font-weight:800;letter-spacing:.04em;text-transform:uppercase}.incident-field em{color:#b13455;font-style:normal}.incident-field small{display:block;margin:.45rem 0 0 .1rem;color:#8491a2;font-size:.7rem}.incident-field[hidden]{display:none}.incident-conditional{max-width:520px;animation:incidentFade .25s ease}.incident-form-card .incident-input{display:block;width:100%;min-height:50px;padding:.8rem 1rem;border:1px solid #dfe6ee;border-radius:12px;background:#f8fafc;color:#152b47;font-size:.88rem;outline:none;transition:border-color .18s,background .18s,box-shadow .18s}.incident-form-card textarea.incident-input{min-height:auto;line-height:1.65;resize:vertical}.incident-form-card .incident-input::placeholder{color:#a6b3c3}.incident-form-card .incident-input:hover{border-color:#c2cedc;background:#fbfcfe}.incident-form-card .incident-input:focus{border-color:var(--blue);background:#fff;box-shadow:0 0 0 4px rgba(8,117,189,.1)}.incident-form-card .incident-input--invalid{border-color:#e11d48;background:#fff5f7}.incident-form-card .incident-input--invalid:focus{border-color:#e11d48;box-shadow:0 0 0 4px rgba(225,29,72,.1)}.incident-form-card .wpcf7-form-control-wrap{display:block}.incident-options{display:grid!important;grid-template-columns:repeat(3,minmax(0,1fr));gap:.55rem}.incident-options .wpcf7-list-item{margin:0!important}.incident-options label{display:block;margin:0;cursor:pointer;text-transform:none;letter-spacing:0}.incident-options input{position:absolute;opacity:0;pointer-events:none}.incident-options .wpcf7-list-item-label{display:flex;align-items:center;min-height:46px;padding:.65rem .8rem;border:1px solid #e0e7ef;border-radius:12px;background:#fbfcfe;color:#54657a;font-size:.76rem;font-weight:700;line-height:1.35;transition:.18s}.incident-options .wpcf7-list-item-label:hover{border-color:#c0aed0;background:#fff;box-shadow:0 3px 10px rgba(15,35,64,.06)}.incident-options .wpcf7-list-item-label:before{content:"";width:15px;height:15px;flex:none;margin-right:.5rem;border:2px solid #b9c5d3;border-radius:50%;background:#fff}.incident-options input:checked+.wpcf7-list-item-label{border-color:var(--purple);background:#f7f0fa;color:#54266a}.incident-options input:checked+.wpcf7-list-item-label:before{border:4px solid var(--purple)}.incident-options--checks .wpcf7-list-item-label:before{border-radius:4px}.incident-options--checks input:checked+.wpcf7-list-item-label:before{border:3px solid var(--purple);background:var(--purple);box-shadow:inset 0 0 0 2px #fff}
    .incident-options--flagged .wpcf7-list-item-label{position:relative}.incident-options--flagged input[value="Death"]+.wpcf7-list-item-label,.incident-options--flagged input[value^="Sexual or physical"]+.wpcf7-list-item-label,.incident-options--flagged input[value^="Abuse or neglect"]+.wpcf7-list-item-label,.incident-options--flagged input[value^="Injury"]+.wpcf7-list-item-label{padding-right:3.2rem;border-color:#eab308;background:#fffbeb;color:#713f12}.incident-options--flagged input[value="Death"]+.wpcf7-list-item-label:after,.incident-options--flagged input[value^="Sexual or physical"]+.wpcf7-list-item-label:after,.incident-options--flagged input[value^="Abuse or neglect"]+.wpcf7-list-item-label:after,.incident-options--flagged input[value^="Injury"]+.wpcf7-list-item-label:after{content:"NDIS";position:absolute;top:50%;right:.5rem;padding:.16rem .38rem;border-radius:5px;background:#facc15;color:#713f12;font-size:.56rem;font-weight:900;letter-spacing:.06em;transform:translateY(-50%)}.incident-options--flagged input[value="Death"]:checked+.wpcf7-list-item-label,.incident-options--flagged input[value^="Sexual or physical"]:checked+.wpcf7-list-item-label,.incident-options--flagged input[value^="Abuse or neglect"]:checked+.wpcf7-list-item-label,.incident-options--flagged input[value^="Injury"]:checked+.wpcf7-list-item-label{border-color:#d97706;background:#fef3c7;color:#78350f;box-shadow:0 0 0 3px rgba(234,179,8,.18)}.incident-options--flagged input[value="Death"]:checked+.wpcf7-list-item-label:before,.incident-options--flagged input[value^="Sexual or physical"]:checked+.wpcf7-list-item-label:before,.incident-options--flagged input[value^="Abuse or neglect"]:checked+.wpcf7-list-item-label:before,.incident-options--flagged input[value^="Injury"]:checked+.wpcf7-list-item-label:before{border-color:#b45309;background:#b45309}.incident-form-card input[type=file]{width:100%;padding:.75rem;border:1px dashed #aebccc;border-radius:12px;background:#f8fafc;color:#56667a;font-size:.78rem}.incident-reportable{overflow:hidden;margin:1.6rem 0;border:1px solid #f8cf9a;border-radius:16px;background:#fff;box-shadow:0 6px 18px rgba(124,45,18,.06)}
    .incident-reportable__title{display:flex;gap:.75rem;align-items:flex-start;padding:1.05rem 1.3rem;border-bottom:1px solid #f8cf9a;background:#fff7ec;color:#7c2d12;font-size:.875rem;font-weight:800;line-height:1.5}
    .incident-reportable__title i{margin-top:.15rem;flex:none;color:#ea580c;font-size:.95rem}
    .incident-ndis-chip{display:inline-block;padding:.12rem .4rem;border-radius:5px;background:#facc15;color:#6b3410;font-size:.64rem;font-weight:900;letter-spacing:.06em;vertical-align:.08em}
    .incident-reportable__body{padding:1.2rem 1.3rem 1.3rem}
    .incident-reportable p{margin:0 0 .9rem;color:#7c2d12;font-size:.86rem;font-weight:700;line-height:1.6}
    .incident-reportable ul{display:grid;gap:.55rem;margin:0;padding:0;list-style:none}
    .incident-reportable li{position:relative;padding-left:1.4rem;color:#7c2d12;font-size:.85rem;font-weight:600;line-height:1.6}
    .incident-reportable li:before{content:"";position:absolute;top:.52rem;left:.35rem;width:6px;height:6px;border-radius:50%;background:#ea580c}.incident-staff-badge{display:inline-flex;gap:.45rem;align-items:center;margin-bottom:1.1rem;padding:.42rem .7rem;border-radius:99px;background:#edf2f7;color:#506176;font-size:.65rem;font-weight:850;letter-spacing:.08em;text-transform:uppercase}.incident-declaration{margin:1rem 0 1.3rem;padding:1rem;border:1px solid #dce4ec;border-radius:13px;background:#f8fafc;color:#506176;font-size:.82rem}.incident-declaration .wpcf7-list-item{margin:0}.incident-declaration label{display:flex;gap:.65rem;cursor:pointer}.incident-declaration input{width:18px;height:18px;accent-color:var(--purple)}.incident-actions{display:flex;justify-content:space-between;align-items:center;margin-top:2.2rem;padding-top:1.6rem;border-top:1px solid #eaeff5}.incident-button,.incident-submit{display:flex;gap:.55rem;align-items:center;justify-content:center;padding:1rem 2.25rem;border:0;border-radius:1rem;font-size:.875rem;font-weight:700;cursor:pointer;transition:all .3s}.incident-button--back{border:1px solid #e1e8f0;background:#fff;color:#56687e}.incident-button--back:hover{border-color:#c6d2e0;background:#f7f9fc;transform:translateY(-.25rem)}.incident-button--back:active{transform:scale(.95)}.incident-button--next,.incident-submit{margin-left:auto;background:var(--brand-purple);color:#fff;box-shadow:0 18px 35px rgba(95,42,125,.25)}.incident-button--next:hover,.incident-button--next:focus-visible,.incident-button--next:active,.incident-submit:hover,.incident-submit:focus-visible,.incident-submit:active{background:var(--brand-blue);box-shadow:0 18px 35px rgba(10,116,187,.3)}.incident-button--next:hover,.incident-submit:hover{transform:translateY(-.25rem)}.incident-button--next:active,.incident-submit:active{transform:scale(.95)}.incident-button:focus-visible,.incident-submit:focus-visible{outline:2px solid var(--brand-blue);outline-offset:3px}.incident-form-card form.submitting button[type="submit"]{opacity:.65;pointer-events:none}.incident-button[hidden],.incident-submit[hidden]{display:none!important}.incident-form-card .wpcf7-not-valid-tip{margin-top:.35rem;color:#be123c;font-size:.7rem;font-weight:700}.incident-form-card .wpcf7-response-output{margin:1rem 0 0!important;padding:1rem!important;border:1px solid #86efac!important;border-radius:12px;background:#f0fdf4;color:#166534}.incident-form-card form.invalid .wpcf7-response-output,.incident-form-card form.failed .wpcf7-response-output{border-color:#fecaca!important;background:#fef2f2;color:#991b1b}.incident-unavailable{padding:1rem;border-radius:12px;background:#fef2f2;color:#991b1b}
    .incident-investigation-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:.75rem;margin-bottom:1.1rem}.incident-prompt{padding:.9rem;border:1px solid #e2e8ef;border-radius:13px;background:#fbfcfd}.incident-prompt>span{display:block;min-height:38px;margin-bottom:.6rem;color:#334961;font-size:.74rem;font-weight:750;line-height:1.4}.incident-options--compact{grid-template-columns:repeat(3,minmax(0,1fr))}.incident-options--compact .wpcf7-list-item-label{justify-content:center;min-height:36px;padding:.35rem;font-size:.69rem}.incident-options--compact .wpcf7-list-item-label:before{display:none}
    .incident-body-map-card{margin:1.5rem 0;padding:1.15rem;border:1px solid #dce5ef;border-radius:20px;background:linear-gradient(145deg,#fff,#f6f8fc);box-shadow:0 14px 35px rgba(21,43,71,.07)}.incident-body-map-heading{display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:.2rem .25rem 1rem}.incident-body-map-heading span{color:var(--purple);font-size:.65rem;font-weight:850;letter-spacing:.12em;text-transform:uppercase}.incident-body-map-heading h3{margin:.15rem 0 .25rem;font-size:1.15rem;font-weight:850}.incident-body-map-heading p{margin:0;color:#68798d;font-size:.76rem;line-height:1.5}.incident-body-map-count{display:flex;min-width:78px;flex-direction:column;align-items:center;padding:.65rem;border:1px solid #dbe4ee;border-radius:14px;background:#fff}.incident-body-map-count strong{color:var(--purple);font-size:1.35rem;line-height:1}.incident-body-map-count span{margin-top:.25rem;color:#7b899a;font-size:.58rem;letter-spacing:.06em}.incident-body-map-stage{position:relative;overflow:hidden;aspect-ratio:3/2;border:1px solid #253c5d;border-radius:16px;background:#07111f;cursor:crosshair;touch-action:manipulation;user-select:none}.incident-body-map-stage:focus-visible{outline:3px solid rgba(8,117,189,.35);outline-offset:3px}.incident-body-map-stage img{display:block;width:100%;height:100%;object-fit:cover;pointer-events:none}.incident-body-map-markers{position:absolute;inset:0}.incident-body-marker{position:absolute;display:grid;place-items:center;width:30px;height:30px;border:3px solid #fff;border-radius:50%;background:#e11d48;color:#fff;font-size:.68rem;font-weight:900;line-height:1;box-shadow:0 0 0 5px rgba(225,29,72,.23),0 7px 15px rgba(0,0,0,.3);transform:translate(-50%,-50%);cursor:pointer;animation:bodyMarkerIn .25s cubic-bezier(.2,.8,.2,1.2)}.incident-body-marker:hover{background:#be123c;transform:translate(-50%,-50%) scale(1.12)}@keyframes bodyMarkerIn{from{opacity:0;transform:translate(-50%,-50%) scale(.35)}to{opacity:1;transform:translate(-50%,-50%) scale(1)}}.incident-body-map-view{position:absolute;bottom:.75rem;padding:.35rem .65rem;border:1px solid rgba(255,255,255,.18);border-radius:99px;background:rgba(8,19,34,.75);color:#fff;font-size:.62rem;font-weight:850;letter-spacing:.12em;text-transform:uppercase;pointer-events:none;backdrop-filter:blur(8px)}.incident-body-map-view--front{left:25%;transform:translateX(-50%)}.incident-body-map-view--back{left:75%;transform:translateX(-50%)}.incident-body-map-toolbar{display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:.85rem .15rem .65rem}.incident-body-map-actions{display:flex;gap:.5rem}.incident-body-map-actions button{display:inline-flex;align-items:center;gap:.4rem;padding:.55rem .75rem;border:1px solid #dbe3ed;border-radius:10px;background:#fff;color:#42566e;font-size:.68rem;font-weight:800;cursor:pointer;transition:.18s}.incident-body-map-actions button:not(:disabled):hover{border-color:var(--blue);color:var(--blue)}.incident-body-map-actions button:disabled{opacity:.4;cursor:not-allowed}.incident-body-map-toolbar p{display:flex;gap:.4rem;align-items:center;margin:0;color:#7b899a;font-size:.68rem}.incident-body-map-toolbar p i{color:var(--blue)}.incident-body-map-list{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:.45rem;margin:0;padding:0;list-style:none}.incident-body-map-list li{padding:.55rem .7rem;border-radius:9px;background:#edf3f8;color:#3f5269;font-size:.69rem;font-weight:700}.incident-body-map-list li:not(.is-empty):before{content:counter(list-item);display:inline-grid;place-items:center;width:18px;height:18px;margin-right:.45rem;border-radius:50%;background:#e11d48;color:#fff;font-size:.58rem}.incident-body-map-list .is-empty{grid-column:1/-1;color:#8794a4;font-weight:600;text-align:center}
    @media(max-width:1023px){.incident-form-card{padding:2rem}.incident-stepper__label{display:none}.incident-stepper{margin-bottom:1.35rem}.incident-progress__copy [data-step-name]{display:inline}.incident-progress__copy [data-step-name]:before{content:"·";margin-right:.55rem;color:#c3cdd9}.incident-options{grid-template-columns:repeat(2,minmax(0,1fr))}.incident-options--compact{grid-template-columns:repeat(3,minmax(0,1fr))}}
    @media(max-width:767px){.incident-form-area{margin-top:0;padding:4rem 0 4.5rem}.incident-intro{margin-bottom:2rem}.incident-shell{border-radius:20px}.incident-form-card{padding:1.35rem}.incident-stepper{display:none}.incident-progress{margin-bottom:1.8rem}.incident-progress__meter{flex-direction:column;align-items:stretch;gap:.7rem}.incident-progress__copy{justify-content:space-between}.incident-actions{flex-wrap:wrap;gap:.7rem;margin-top:1.6rem}.incident-button,.incident-submit{padding:.9rem 1.5rem}.incident-submit{flex:1 1 100%}.incident-grid--2,.incident-grid--3,.incident-options,.incident-investigation-grid{grid-template-columns:1fr}.incident-options--compact{grid-template-columns:repeat(3,minmax(0,1fr))}.incident-span-2{grid-column:auto}.incident-section-heading h2{font-size:1.3rem}.incident-section-heading>span{width:40px;height:40px}.incident-progress__copy{font-size:.68rem}.incident-body-map-heading{align-items:flex-start}.incident-body-map-toolbar{align-items:flex-start;flex-direction:column}.incident-body-map-list{grid-template-columns:1fr}.incident-body-map-count{min-width:65px}.incident-body-marker{width:26px;height:26px}}

    /*
     * Mobile + tablet only (<=1024px); desktop is unchanged.
     * iOS Safari zooms the page when a field under 16px is focused, so form
     * fields use 16px here. Empty date inputs on iOS also collapse to no
     * height; give them the same box as the text fields.
     */
    @media (max-width: 1024px) {
        .incident-intro h2 {
            font-size: clamp(1.875rem, 1.2rem + 2.6vw, 2.75rem);
        }

        .incident-intro p {
            font-size: clamp(1rem, 0.94rem + 0.3vw, 1.125rem);
        }

        .incident-page .incident-form-card .incident-input {
            font-size: 16px;
        }

        .incident-page .incident-form-card input[type="date"].incident-input {
            -webkit-appearance: none;
            appearance: none;
            min-height: 50px;
            text-align: left;
        }

        .incident-page .incident-form-card input[type="date"].incident-input::-webkit-date-and-time-value {
            text-align: left;
        }
    }

    /* Small phones: nested panels left too little room for the fields. */
    @media (max-width: 479.98px) {
        .incident-page .incident-form-card {
            padding: 1.1rem;
        }

        .incident-page .incident-subsection {
            padding: 1rem;
            border-radius: 14px;
        }

        .incident-page .incident-section-heading h2 {
            font-size: 1.15rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('incidentReportForm');
    if (!form) return;
    const steps = Array.from(form.querySelectorAll('.incident-step'));
    const next = form.querySelector('[data-incident-next]');
    const back = form.querySelector('[data-incident-back]');
    const currentLabel = form.querySelector('[data-current-step]');
    const nameLabel = form.querySelector('[data-step-name]');
    const bar = form.querySelector('.incident-progress__bar span');
    const submit = form.querySelector('[data-incident-submit]');
    const reportDate = form.querySelector('#report_date');
    let current = 0;

    const today = <?php echo wp_json_encode(current_time('Y-m-d')); ?>;

    // The report date records when the report is lodged, so it is locked to today.
    if (reportDate) {
        reportDate.min = today;
        reportDate.max = today;
        reportDate.value = today;
        reportDate.addEventListener('input', function () {
            markField(reportDate, reportDate.value !== today ? 'The report date must be today.' : '');
        });
    }
    form.querySelectorAll('[aria-required="true"]').forEach(function (field) { field.required = true; });
    ['work_location', 'person_status', 'initial_outcome'].forEach(function (name) {
        form.querySelectorAll('input[name="' + name + '"]').forEach(function (field) { field.required = true; });
    });

    // Name and mobile rules, matching the Referral form so both accept the same shapes.
    const singleNamePattern = /^[\p{L}\p{M}]+(?:['’-][\p{L}\p{M}]+)*$/u;
    const mobilePattern = /^04\d{8}$/;

    function markField(input, message) {
        input.setCustomValidity(message);
        input.classList.toggle('incident-input--invalid', Boolean(message));
    }

    [['person_first_name', 'given-name', 'Enter one first name without spaces.'],
     ['person_surname', 'family-name', 'Enter one surname without spaces.']].forEach(function (spec) {
        const input = form.querySelector('#' + spec[0]);
        if (!input) return;
        input.autocomplete = spec[1];
        input.title = spec[2];
        input.addEventListener('input', function () {
            markField(input, !input.value || singleNamePattern.test(input.value.trim()) ? '' : spec[2]);
        });
        input.addEventListener('blur', function () {
            input.value = input.value.trim();
            markField(input, !input.value || singleNamePattern.test(input.value) ? '' : spec[2]);
        });
    });

    const mobileMessage = 'Enter a 10-digit Australian mobile number starting with 04.';
    ['person_phone', 'witness_1_phone', 'witness_2_phone'].forEach(function (id) {
        const input = form.querySelector('#' + id);
        if (!input) return;
        let lastValid = input.value;
        input.pattern = '04[0-9]{8}';
        input.minLength = 10;
        input.maxLength = 10;
        input.inputMode = 'numeric';
        input.autocomplete = 'tel';
        input.title = mobileMessage;
        input.addEventListener('input', function () {
            const digits = input.value.replace(/\D/g, '').slice(0, 10);
            if (/^(?:|0|04\d{0,8})$/.test(digits)) {
                input.value = digits;
                lastValid = digits;
            } else {
                input.value = lastValid;
            }
            markField(input, !input.value || mobilePattern.test(input.value) ? '' : mobileMessage);
        });
    });

    // Dependent fields: only shown (and only required) once their trigger option is chosen.
    form.querySelectorAll('[data-reveal-when]').forEach(function (box) {
        const triggers = form.querySelectorAll('input[name="' + box.dataset.revealWhen + '"]');
        const target = box.querySelector('input, textarea, select');
        const wanted = box.dataset.revealValue;
        function sync() {
            const on = Array.prototype.some.call(triggers, function (t) { return t.checked && t.value === wanted; });
            box.hidden = !on;
            if (target) {
                target.required = on;
                if (!on) { target.value = ''; }
            }
        }
        triggers.forEach(function (t) { t.addEventListener('change', sync); });
        sync();
    });

    const bodyMapStage = form.querySelector('[data-body-map-stage]');
    const bodyMapMarkers = form.querySelector('[data-body-map-markers]');
    const bodyMapInput = form.querySelector('#body_map_points');
    const bodyMapList = form.querySelector('[data-body-map-list]');
    const bodyMapCount = form.querySelector('[data-body-map-count]');
    const bodyMapUndo = form.querySelector('[data-body-map-undo]');
    const bodyMapClear = form.querySelector('[data-body-map-clear]');
    let bodyMapPoints = [];

    function bodyRegion(x, y) {
        const view = x < 50 ? 'Front' : 'Back';
        const centre = view === 'Front' ? 33 : 67;
        const offset = x - centre;
        const anatomicalSide = Math.abs(offset) < 3 ? 'Centre' :
            (view === 'Front' ? (offset < 0 ? 'Right' : 'Left') : (offset < 0 ? 'Left' : 'Right'));
        let region;

        if (y < 16) region = 'head / face';
        else if (y < 23) region = Math.abs(offset) > 7 ? 'shoulder' : 'neck';
        else if (y < 34) region = Math.abs(offset) > 11 ? 'upper arm' : (view === 'Front' ? 'chest' : 'upper back');
        else if (y < 46) region = Math.abs(offset) > 12 ? 'forearm' : (view === 'Front' ? 'abdomen' : 'lower back');
        else if (y < 57) region = Math.abs(offset) > 12 ? 'hand / wrist' : 'hip / pelvis';
        else if (y < 72) region = 'thigh';
        else if (y < 82) region = 'knee';
        else if (y < 94) region = 'lower leg';
        else region = 'ankle / foot';

        return view + ' — ' + (anatomicalSide === 'Centre' ? '' : anatomicalSide + ' ') + region;
    }

    function renderBodyMap() {
        if (!bodyMapMarkers || !bodyMapInput || !bodyMapList) return;
        bodyMapMarkers.innerHTML = '';
        bodyMapList.innerHTML = '';

        bodyMapPoints.forEach(function (point, index) {
            const marker = document.createElement('button');
            marker.type = 'button';
            marker.className = 'incident-body-marker';
            marker.style.left = point.x + '%';
            marker.style.top = point.y + '%';
            marker.dataset.bodyMapIndex = index;
            marker.textContent = index + 1;
            marker.setAttribute('aria-label', 'Remove injury location ' + (index + 1) + ': ' + point.label);
            bodyMapMarkers.appendChild(marker);

            const item = document.createElement('li');
            item.textContent = point.label;
            bodyMapList.appendChild(item);
        });

        if (!bodyMapPoints.length) {
            const empty = document.createElement('li');
            empty.className = 'is-empty';
            empty.textContent = 'No injury locations marked yet.';
            bodyMapList.appendChild(empty);
        }

        bodyMapInput.value = bodyMapPoints.map(function (point, index) {
            return (index + 1) + '. ' + point.label + ' (' + point.x.toFixed(1) + '%, ' + point.y.toFixed(1) + '%)';
        }).join(' | ');
        bodyMapCount.textContent = bodyMapPoints.length;
        bodyMapUndo.disabled = !bodyMapPoints.length;
        bodyMapClear.disabled = !bodyMapPoints.length;
    }

    if (bodyMapStage) {
        bodyMapStage.addEventListener('click', function (event) {
            const existingMarker = event.target.closest('[data-body-map-index]');
            if (existingMarker) {
                bodyMapPoints.splice(Number(existingMarker.dataset.bodyMapIndex), 1);
                renderBodyMap();
                return;
            }

            const bounds = bodyMapStage.getBoundingClientRect();
            const x = Math.max(0, Math.min(100, ((event.clientX - bounds.left) / bounds.width) * 100));
            const y = Math.max(0, Math.min(100, ((event.clientY - bounds.top) / bounds.height) * 100));
            bodyMapPoints.push({ x: x, y: y, label: bodyRegion(x, y) });
            renderBodyMap();
        });

        bodyMapUndo.addEventListener('click', function () { bodyMapPoints.pop(); renderBodyMap(); });
        bodyMapClear.addEventListener('click', function () { bodyMapPoints = []; renderBodyMap(); });
        document.addEventListener('wpcf7reset', function (event) {
            if (event.target === form || event.target.contains(form)) {
                bodyMapPoints = [];
                renderBodyMap();
            }
        });
        renderBodyMap();
    }

    const stepperList = form.querySelector('[data-incident-stepper]');
    const stepperItems = [];
    if (stepperList) {
        steps.forEach(function (step, position) {
            const item = document.createElement('li');
            item.className = 'incident-stepper__item';
            item.innerHTML = '<span class="incident-stepper__dot">' + (position + 1) + '</span>'
                + '<span class="incident-stepper__label"></span>';
            item.querySelector('.incident-stepper__label').textContent = step.dataset.title;
            item.addEventListener('click', function () {
                if (position < current) showStep(position);
            });
            stepperList.appendChild(item);
            stepperItems.push(item);
        });
    }

    function showStep(index, shouldScroll = true) {
        current = Math.max(0, Math.min(index, steps.length - 1));
        steps.forEach((step, position) => step.classList.toggle('is-active', position === current));
        stepperItems.forEach(function (item, position) {
            item.classList.toggle('is-current', position === current);
            item.classList.toggle('is-done', position < current);
            item.setAttribute('aria-current', position === current ? 'step' : 'false');
        });
        currentLabel.textContent = current + 1;
        nameLabel.textContent = steps[current].dataset.title;
        bar.style.width = (((current + 1) / steps.length) * 100) + '%';
        const isLast = current === steps.length - 1;
        back.hidden = current === 0;
        next.hidden = isLast;
        if (submit) submit.hidden = !isLast;
        if (shouldScroll) form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function validateCurrentStep() {
        const required = Array.from(steps[current].querySelectorAll('[required]'));
        for (const field of required) {
            if (!field.checkValidity()) {
                field.reportValidity();
                return false;
            }
        }
        return true;
    }

    next.addEventListener('click', function () { if (validateCurrentStep()) showStep(current + 1); });
    back.addEventListener('click', function () { showStep(current - 1); });
    form.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' && event.target.tagName !== 'TEXTAREA' && current < steps.length - 1) {
            event.preventDefault();
            next.click();
        }
    });
    document.addEventListener('wpcf7invalid', function (event) {
        if (event.target !== form) return;
        const invalid = form.querySelector('.wpcf7-not-valid');
        const invalidStep = invalid && invalid.closest('.incident-step');
        if (invalidStep) showStep(steps.indexOf(invalidStep));
    });
    showStep(0, false);
});
</script>

<?php get_footer(); ?>
