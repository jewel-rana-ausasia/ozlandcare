<?php
/**
 * Template Name: Incident Report
 * Description: HS FM-003.05 Incident Report Form.
 */
get_header();
?>

<main id="primary" class="incident-page">
    <section class="incident-hero">
        <div class="incident-hero__grid" aria-hidden="true"></div>
        <div class="incident-hero__glow incident-hero__glow--one" aria-hidden="true"></div>
        <div class="incident-hero__glow incident-hero__glow--two" aria-hidden="true"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="incident-hero__content">
                <span class="incident-eyebrow"><i class="fas fa-shield-halved" aria-hidden="true"></i> Confidential incident reporting</span>
                <h1>Incident <span>Report</span></h1>
                <div class="incident-hero__rule" aria-hidden="true"></div>
                <p>Help us respond quickly, support everyone involved and continuously improve the safety and quality of our services.</p>
                <div class="incident-meta">
                    <span><i class="fas fa-file-lines" aria-hidden="true"></i><b>HS FM-003</b><small>Controlled form</small></span>
                    <span><i class="fas fa-clock" aria-hidden="true"></i><b>10&ndash;15 minutes</b><small>Average completion</small></span>
                    <span><i class="fas fa-lock" aria-hidden="true"></i><b>Confidential</b><small>Handled securely</small></span>
                </div>
            </div>
        </div>
        <div class="incident-hero__fade" aria-hidden="true"></div>
    </section>

    <section class="incident-form-area">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
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
    .incident-page{--ink:#10233f;--muted:#5f6f84;--purple:#682f82;--blue:#0875bd;background:#f4f7fb;color:var(--ink)}
    .incident-hero{position:relative;isolation:isolate;overflow:hidden;padding:6.5rem 0 5.25rem;background:radial-gradient(125% 135% at 50% -25%,#1d4a80 0%,#12315a 42%,#08203c 72%,#051629 100%)}
    .incident-hero:before{content:"";position:absolute;inset:0 0 auto;height:3px;background:linear-gradient(90deg,#682f82,#0875bd 38%,#c99ddb 68%,#682f82);z-index:3}
    .incident-hero__grid{position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.05) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.05) 1px,transparent 1px);background-size:68px 68px;-webkit-mask-image:radial-gradient(80% 65% at 50% 32%,#000 0%,transparent 78%);mask-image:radial-gradient(80% 65% at 50% 32%,#000 0%,transparent 78%);pointer-events:none}
    .incident-hero__glow{position:absolute;border-radius:999px;filter:blur(90px);pointer-events:none}.incident-hero__glow--one{width:34rem;height:34rem;right:-11rem;top:-17rem;background:#8d4ca7;opacity:.42}.incident-hero__glow--two{width:26rem;height:26rem;left:-12rem;bottom:-15rem;background:#0a8fdc;opacity:.34}
    .incident-hero__fade{position:absolute;inset:auto 0 0;height:170px;background:linear-gradient(180deg,rgba(5,22,41,0),rgba(3,12,24,.6));pointer-events:none}
    .incident-hero__content{max-width:860px;margin:auto;text-align:center;color:#fff}
    .incident-eyebrow{display:inline-flex;gap:.6rem;align-items:center;padding:.58rem 1.15rem;border:1px solid rgba(201,157,219,.34);border-radius:99px;background:rgba(255,255,255,.06);color:#e9daf2;font-size:.7rem;font-weight:800;letter-spacing:.18em;text-transform:uppercase;backdrop-filter:blur(8px)}.incident-eyebrow i{color:#c99ddb}
    .incident-hero h1{margin:1.6rem 0 0;font-size:clamp(2.6rem,5.6vw,4.5rem);font-weight:850;line-height:1.04;letter-spacing:-.025em}.incident-hero h1 span{color:#c99ddb;font-family:Georgia,serif;font-style:italic;font-weight:500;letter-spacing:-.01em}
    .incident-hero__rule{width:74px;height:3px;margin:1.5rem auto;border-radius:99px;background:linear-gradient(90deg,#682f82,#0875bd)}
    .incident-hero p{max-width:650px;margin:auto;color:#c4d5e9;font-size:1.05rem;line-height:1.8}
    .incident-meta{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:1px;max-width:730px;margin:2.9rem auto 0;border:1px solid rgba(255,255,255,.13);border-radius:18px;background:rgba(255,255,255,.1);overflow:hidden;box-shadow:0 20px 45px rgba(2,10,22,.35)}
    .incident-meta span{display:flex;flex-direction:column;align-items:center;gap:.35rem;padding:1.15rem .9rem;background:rgba(9,27,50,.66);backdrop-filter:blur(10px)}
    .incident-meta i{color:#c99ddb;font-size:.95rem}.incident-meta b{color:#fff;font-size:.86rem;font-weight:800}.incident-meta small{color:#93a9c4;font-size:.66rem;font-weight:650;letter-spacing:.09em;text-transform:uppercase}
    .incident-form-area{position:relative;margin-top:0;padding:4rem 0 7rem}.incident-shell{position:relative;z-index:2;max-width:80rem;margin:auto;border:1px solid #e3eaf3;border-radius:28px;background:#fff;box-shadow:0 30px 80px rgba(15,35,64,.14);overflow:hidden}
    .incident-form-card{min-width:0;padding:2.2rem 2.5rem 2.5rem}.incident-progress{margin-bottom:2rem}.incident-progress__bar{height:6px;border-radius:99px;background:#e8edf3;overflow:hidden}.incident-progress__bar span{display:block;width:16.667%;height:100%;border-radius:inherit;background:linear-gradient(90deg,var(--purple),var(--blue));transition:width .35s ease}.incident-progress__copy{display:flex;justify-content:space-between;margin-top:.65rem;color:#7a8798;font-size:.74rem}.incident-progress__copy strong{color:var(--ink)}
    .incident-alert{display:flex;gap:.85rem;align-items:flex-start;margin-bottom:1.8rem;padding:1rem 1.1rem;border:1px solid #bae6fd;border-radius:14px;background:#f0f9ff;color:#174563;font-size:.82rem;line-height:1.6}.incident-alert i{margin-top:.25rem;color:var(--blue)}.incident-alert p{margin:0}
    .incident-step{display:none;animation:incidentFade .3s ease}.incident-step.is-active{display:block}@keyframes incidentFade{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:none}}.incident-section-heading{display:flex;align-items:center;gap:1rem;margin-bottom:1.7rem}.incident-section-heading>span{display:grid;place-items:center;width:46px;height:46px;flex:none;border-radius:14px;background:linear-gradient(135deg,var(--purple),var(--blue));color:#fff;font-weight:850}.incident-section-heading p{margin:0;color:var(--purple);font-size:.68rem;font-weight:850;letter-spacing:.13em;text-transform:uppercase}.incident-section-heading h2{margin:.15rem 0 0;font-size:1.55rem;font-weight:850}.incident-subsection{margin-top:1.35rem;padding:1.35rem;border:1px solid #e5eaf0;border-radius:18px;background:#fbfcfe}.incident-subsection h3{margin:0 0 1.1rem;font-size:1rem;font-weight:800}.incident-grid{display:grid;gap:1rem}.incident-grid--2{grid-template-columns:repeat(2,minmax(0,1fr))}.incident-grid--3{grid-template-columns:repeat(3,minmax(0,1fr))}.incident-span-2{grid-column:span 2}.incident-field{min-width:0;margin-bottom:1.05rem}.incident-field label,.incident-label{display:block;margin:0 0 .48rem .1rem;color:#263c57;font-size:.72rem;font-weight:800;letter-spacing:.04em;text-transform:uppercase}.incident-field em{color:#b13455;font-style:normal}.incident-field small{display:block;margin:.45rem 0 0 .1rem;color:#8491a2;font-size:.7rem}.incident-field[hidden]{display:none}.incident-conditional{max-width:520px;margin-top:-.35rem;padding-left:1rem;border-left:3px solid var(--purple);animation:incidentFade .25s ease}.incident-form-card .incident-input{display:block;width:100%;min-height:48px;padding:.77rem .95rem;border:1px solid #dce3eb;border-radius:12px;background:#f8fafc;color:#152b47;outline:none;transition:.2s}.incident-form-card textarea.incident-input{resize:vertical}.incident-form-card .incident-input:hover{border-color:#b8c5d4}.incident-form-card .incident-input:focus{border-color:var(--blue);background:#fff;box-shadow:0 0 0 4px rgba(8,117,189,.09)}.incident-form-card .wpcf7-form-control-wrap{display:block}.incident-options{display:grid!important;grid-template-columns:repeat(3,minmax(0,1fr));gap:.55rem}.incident-options .wpcf7-list-item{margin:0!important}.incident-options label{display:block;margin:0;cursor:pointer;text-transform:none;letter-spacing:0}.incident-options input{position:absolute;opacity:0;pointer-events:none}.incident-options .wpcf7-list-item-label{display:flex;align-items:center;min-height:43px;padding:.62rem .72rem;border:1px solid #dde4ec;border-radius:11px;background:#f9fafc;color:#54657a;font-size:.76rem;font-weight:700;line-height:1.35;transition:.18s}.incident-options .wpcf7-list-item-label:before{content:"";width:15px;height:15px;flex:none;margin-right:.5rem;border:2px solid #b9c5d3;border-radius:50%;background:#fff}.incident-options input:checked+.wpcf7-list-item-label{border-color:var(--purple);background:#f7f0fa;color:#54266a}.incident-options input:checked+.wpcf7-list-item-label:before{border:4px solid var(--purple)}.incident-options--checks .wpcf7-list-item-label:before{border-radius:4px}.incident-options--checks input:checked+.wpcf7-list-item-label:before{border:3px solid var(--purple);background:var(--purple);box-shadow:inset 0 0 0 2px #fff}
    .incident-options--flagged .wpcf7-list-item-label{position:relative}.incident-options--flagged input[value="Death"]+.wpcf7-list-item-label,.incident-options--flagged input[value^="Sexual or physical"]+.wpcf7-list-item-label,.incident-options--flagged input[value^="Abuse or neglect"]+.wpcf7-list-item-label,.incident-options--flagged input[value^="Injury"]+.wpcf7-list-item-label{padding-right:3.2rem;border-color:#eab308;background:#fffbeb;color:#713f12}.incident-options--flagged input[value="Death"]+.wpcf7-list-item-label:after,.incident-options--flagged input[value^="Sexual or physical"]+.wpcf7-list-item-label:after,.incident-options--flagged input[value^="Abuse or neglect"]+.wpcf7-list-item-label:after,.incident-options--flagged input[value^="Injury"]+.wpcf7-list-item-label:after{content:"NDIS";position:absolute;top:50%;right:.5rem;padding:.16rem .38rem;border-radius:5px;background:#facc15;color:#713f12;font-size:.56rem;font-weight:900;letter-spacing:.06em;transform:translateY(-50%)}.incident-options--flagged input[value="Death"]:checked+.wpcf7-list-item-label,.incident-options--flagged input[value^="Sexual or physical"]:checked+.wpcf7-list-item-label,.incident-options--flagged input[value^="Abuse or neglect"]:checked+.wpcf7-list-item-label,.incident-options--flagged input[value^="Injury"]:checked+.wpcf7-list-item-label{border-color:#d97706;background:#fef3c7;color:#78350f;box-shadow:0 0 0 3px rgba(234,179,8,.18)}.incident-options--flagged input[value="Death"]:checked+.wpcf7-list-item-label:before,.incident-options--flagged input[value^="Sexual or physical"]:checked+.wpcf7-list-item-label:before,.incident-options--flagged input[value^="Abuse or neglect"]:checked+.wpcf7-list-item-label:before,.incident-options--flagged input[value^="Injury"]:checked+.wpcf7-list-item-label:before{border-color:#b45309;background:#b45309}.incident-form-card input[type=file]{width:100%;padding:.75rem;border:1px dashed #aebccc;border-radius:12px;background:#f8fafc;color:#56667a;font-size:.78rem}.incident-reportable{margin:1.35rem 0;padding:1.25rem;border:1px solid #fdba74;border-left:4px solid #f97316;border-radius:14px;background:#fff8ed;color:#713f12;font-size:.8rem}.incident-reportable__title{display:flex;gap:.6rem;align-items:flex-start;color:#9a3412;line-height:1.5}.incident-reportable__title i{margin-top:.2rem;flex:none}.incident-ndis-chip{display:inline-block;padding:.1rem .35rem;border-radius:5px;background:#facc15;color:#713f12;font-size:.62rem;font-weight:900;letter-spacing:.06em;vertical-align:.05em}.incident-reportable p{margin:.55rem 0}.incident-reportable ul{margin:.5rem 0 0 1.1rem;list-style:disc;line-height:1.65}.incident-reportable li{margin-bottom:.25rem}.incident-staff-badge{display:inline-flex;gap:.45rem;align-items:center;margin-bottom:1.1rem;padding:.42rem .7rem;border-radius:99px;background:#edf2f7;color:#506176;font-size:.65rem;font-weight:850;letter-spacing:.08em;text-transform:uppercase}.incident-declaration{margin:1rem 0 1.3rem;padding:1rem;border:1px solid #dce4ec;border-radius:13px;background:#f8fafc;color:#506176;font-size:.82rem}.incident-declaration .wpcf7-list-item{margin:0}.incident-declaration label{display:flex;gap:.65rem;cursor:pointer}.incident-declaration input{width:18px;height:18px;accent-color:var(--purple)}.incident-actions{display:flex;justify-content:space-between;margin-top:1.5rem;padding-top:1.35rem;border-top:1px solid #e8edf3}.incident-button,.incident-submit{display:inline-flex;gap:.6rem;align-items:center;justify-content:center;min-height:48px;padding:.75rem 1.35rem;border:0;border-radius:13px;font-size:.8rem;font-weight:850;cursor:pointer;transition:.2s}.incident-button--back{background:#edf1f6;color:#526276}.incident-button--next,.incident-submit{margin-left:auto;background:linear-gradient(135deg,var(--purple),#7b3c96);color:#fff;box-shadow:0 12px 24px rgba(104,47,130,.2)}.incident-button:hover,.incident-submit:hover{transform:translateY(-2px)}.incident-button[hidden],.incident-submit[hidden]{display:none!important}.incident-submit{min-width:230px}.incident-form-card .wpcf7-not-valid-tip{margin-top:.35rem;color:#be123c;font-size:.7rem;font-weight:700}.incident-form-card .wpcf7-response-output{margin:1rem 0 0!important;padding:1rem!important;border:1px solid #86efac!important;border-radius:12px;background:#f0fdf4;color:#166534}.incident-form-card form.invalid .wpcf7-response-output,.incident-form-card form.failed .wpcf7-response-output{border-color:#fecaca!important;background:#fef2f2;color:#991b1b}.incident-unavailable{padding:1rem;border-radius:12px;background:#fef2f2;color:#991b1b}
    .incident-investigation-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:.75rem;margin-bottom:1.1rem}.incident-prompt{padding:.9rem;border:1px solid #e2e8ef;border-radius:13px;background:#fbfcfd}.incident-prompt>span{display:block;min-height:38px;margin-bottom:.6rem;color:#334961;font-size:.74rem;font-weight:750;line-height:1.4}.incident-options--compact{grid-template-columns:repeat(3,minmax(0,1fr))}.incident-options--compact .wpcf7-list-item-label{justify-content:center;min-height:36px;padding:.35rem;font-size:.69rem}.incident-options--compact .wpcf7-list-item-label:before{display:none}
    .incident-body-map-card{margin:1.5rem 0;padding:1.15rem;border:1px solid #dce5ef;border-radius:20px;background:linear-gradient(145deg,#fff,#f6f8fc);box-shadow:0 14px 35px rgba(21,43,71,.07)}.incident-body-map-heading{display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:.2rem .25rem 1rem}.incident-body-map-heading span{color:var(--purple);font-size:.65rem;font-weight:850;letter-spacing:.12em;text-transform:uppercase}.incident-body-map-heading h3{margin:.15rem 0 .25rem;font-size:1.15rem;font-weight:850}.incident-body-map-heading p{margin:0;color:#68798d;font-size:.76rem;line-height:1.5}.incident-body-map-count{display:flex;min-width:78px;flex-direction:column;align-items:center;padding:.65rem;border:1px solid #dbe4ee;border-radius:14px;background:#fff}.incident-body-map-count strong{color:var(--purple);font-size:1.35rem;line-height:1}.incident-body-map-count span{margin-top:.25rem;color:#7b899a;font-size:.58rem;letter-spacing:.06em}.incident-body-map-stage{position:relative;overflow:hidden;aspect-ratio:3/2;border:1px solid #253c5d;border-radius:16px;background:#07111f;cursor:crosshair;touch-action:manipulation;user-select:none}.incident-body-map-stage:focus-visible{outline:3px solid rgba(8,117,189,.35);outline-offset:3px}.incident-body-map-stage img{display:block;width:100%;height:100%;object-fit:cover;pointer-events:none}.incident-body-map-markers{position:absolute;inset:0}.incident-body-marker{position:absolute;display:grid;place-items:center;width:30px;height:30px;border:3px solid #fff;border-radius:50%;background:#e11d48;color:#fff;font-size:.68rem;font-weight:900;line-height:1;box-shadow:0 0 0 5px rgba(225,29,72,.23),0 7px 15px rgba(0,0,0,.3);transform:translate(-50%,-50%);cursor:pointer;animation:bodyMarkerIn .25s cubic-bezier(.2,.8,.2,1.2)}.incident-body-marker:hover{background:#be123c;transform:translate(-50%,-50%) scale(1.12)}@keyframes bodyMarkerIn{from{opacity:0;transform:translate(-50%,-50%) scale(.35)}to{opacity:1;transform:translate(-50%,-50%) scale(1)}}.incident-body-map-view{position:absolute;bottom:.75rem;padding:.35rem .65rem;border:1px solid rgba(255,255,255,.18);border-radius:99px;background:rgba(8,19,34,.75);color:#fff;font-size:.62rem;font-weight:850;letter-spacing:.12em;text-transform:uppercase;pointer-events:none;backdrop-filter:blur(8px)}.incident-body-map-view--front{left:25%;transform:translateX(-50%)}.incident-body-map-view--back{left:75%;transform:translateX(-50%)}.incident-body-map-toolbar{display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:.85rem .15rem .65rem}.incident-body-map-actions{display:flex;gap:.5rem}.incident-body-map-actions button{display:inline-flex;align-items:center;gap:.4rem;padding:.55rem .75rem;border:1px solid #dbe3ed;border-radius:10px;background:#fff;color:#42566e;font-size:.68rem;font-weight:800;cursor:pointer;transition:.18s}.incident-body-map-actions button:not(:disabled):hover{border-color:var(--blue);color:var(--blue)}.incident-body-map-actions button:disabled{opacity:.4;cursor:not-allowed}.incident-body-map-toolbar p{display:flex;gap:.4rem;align-items:center;margin:0;color:#7b899a;font-size:.68rem}.incident-body-map-toolbar p i{color:var(--blue)}.incident-body-map-list{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:.45rem;margin:0;padding:0;list-style:none}.incident-body-map-list li{padding:.55rem .7rem;border-radius:9px;background:#edf3f8;color:#3f5269;font-size:.69rem;font-weight:700}.incident-body-map-list li:not(.is-empty):before{content:counter(list-item);display:inline-grid;place-items:center;width:18px;height:18px;margin-right:.45rem;border-radius:50%;background:#e11d48;color:#fff;font-size:.58rem}.incident-body-map-list .is-empty{grid-column:1/-1;color:#8794a4;font-weight:600;text-align:center}
    @media(max-width:1023px){.incident-form-card{padding:2rem}.incident-options{grid-template-columns:repeat(2,minmax(0,1fr))}.incident-options--compact{grid-template-columns:repeat(3,minmax(0,1fr))}}
    @media(max-width:767px){.incident-hero{padding:4.25rem 0 3.5rem}.incident-hero__rule{margin:1.15rem auto}.incident-meta{grid-template-columns:1fr;margin-top:2.1rem;border-radius:16px}.incident-meta span{flex-direction:row;justify-content:center;gap:.55rem;padding:.85rem 1rem}.incident-meta small{display:none}.incident-form-area{margin-top:0;padding:2.5rem 0 4.5rem}.incident-shell{border-radius:20px}.incident-form-card{padding:1.2rem}.incident-grid--2,.incident-grid--3,.incident-options,.incident-investigation-grid{grid-template-columns:1fr}.incident-options--compact{grid-template-columns:repeat(3,minmax(0,1fr))}.incident-span-2{grid-column:auto}.incident-section-heading h2{font-size:1.3rem}.incident-section-heading>span{width:40px;height:40px}.incident-progress__copy{font-size:.68rem}.incident-body-map-heading{align-items:flex-start}.incident-body-map-toolbar{align-items:flex-start;flex-direction:column}.incident-body-map-list{grid-template-columns:1fr}.incident-body-map-count{min-width:65px}.incident-body-marker{width:26px;height:26px}}
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

    if (reportDate && !reportDate.value) {
        const today = new Date();
        reportDate.value = [today.getFullYear(), String(today.getMonth() + 1).padStart(2, '0'), String(today.getDate()).padStart(2, '0')].join('-');
    }
    form.querySelectorAll('[aria-required="true"]').forEach(function (field) { field.required = true; });
    ['work_location', 'person_status', 'initial_outcome'].forEach(function (name) {
        form.querySelectorAll('input[name="' + name + '"]').forEach(function (field) { field.required = true; });
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

    function showStep(index, shouldScroll = true) {
        current = Math.max(0, Math.min(index, steps.length - 1));
        steps.forEach((step, position) => step.classList.toggle('is-active', position === current));
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
