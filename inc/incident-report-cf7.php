<?php
/**
 * Incident Report (HS FM-003.05) Contact Form 7 configuration.
 *
 * The staff investigation and manager review are completed in one form. The
 * finished report and any supporting files are then emailed as one submission.
 */

if (! defined('ABSPATH')) {
	exit;
}

function ozlandcare_incident_report_cf7_template()
{
	$template = <<<'CF7'
<div class="incident-progress" aria-label="Form progress">
    <ol class="incident-stepper" data-incident-stepper></ol>
    <div class="incident-progress__meter">
        <div class="incident-progress__bar"><span></span></div>
        <p class="incident-progress__copy"><strong>Section <span data-current-step>1</span> of 6</strong><span data-step-name>Report details</span></p>
    </div>
</div>

<section class="incident-step is-active" data-step="1" data-title="Report details">
    <div class="incident-section-heading"><span>01</span><div><p>Initial information</p><h2>Report details</h2></div></div>
    <div class="incident-grid incident-grid--2">
        <div class="incident-field"><label for="report_date">Today's date <em>*</em></label>[date* report_date id:report_date class:incident-input]</div>
        <div class="incident-field"><label for="report_number">Incident report number</label>[text report_number id:report_number class:incident-input placeholder "e.g. IR-2026-001"]</div>
    </div>
    <div class="incident-field"><span class="incident-label">Work location <em>*</em></span>[radio work_location use_label_element class:incident-options "Organisation Facility" "In the Community" "Participant Home" "Other"]</div>
    <div class="incident-field incident-conditional" data-reveal-when="work_location" data-reveal-value="Other" hidden><label for="work_location_other">Please specify the other work location <em>*</em></label>[text work_location_other id:work_location_other class:incident-input placeholder "Describe where the incident occurred"]</div>
    <div class="incident-grid incident-grid--2">
        <div class="incident-field"><span class="incident-label">Status of involved person <em>*</em></span>[radio person_status use_label_element class:incident-options "Employee" "Participant" "General public" "Visitor" "Volunteer" "Contractor"]</div>
        <div class="incident-field"><span class="incident-label">Outcome <em>*</em></span>[radio initial_outcome use_label_element class:incident-options "Hazard" "Near Miss" "Non-First Aid" "Incident" "First Aid"]</div>
    </div>
    <div class="incident-subsection"><h3>Details of involved person</h3>
        <div class="incident-grid incident-grid--3">
            <div class="incident-field"><label for="person_surname">Surname <em>*</em></label>[text* person_surname id:person_surname class:incident-input placeholder "e.g. Nguyen"]</div>
            <div class="incident-field"><label for="person_first_name">First name <em>*</em></label>[text* person_first_name id:person_first_name class:incident-input placeholder "e.g. Sarah"]</div>
            <div class="incident-field"><label for="person_dob">Date of birth</label>[date person_dob id:person_dob class:incident-input]</div>
            <div class="incident-field incident-span-2"><label for="person_address">Home address</label>[text person_address id:person_address class:incident-input placeholder "Street, suburb, state and postcode"]</div>
            <div class="incident-field"><label for="person_phone">Phone</label>[tel person_phone id:person_phone class:incident-input placeholder "e.g. 0412345678"]</div>
        </div>
        <div class="incident-field"><span class="incident-label">Gender</span>[radio person_gender use_label_element class:incident-options "Male" "Female" "Other / Prefer not to say"]</div>
    </div>
    <div class="incident-subsection"><h3>Witness details (if any)</h3>
        <div class="incident-grid incident-grid--3">
            <div class="incident-field"><label for="witness_1_name">Witness 1 name</label>[text witness_1_name id:witness_1_name class:incident-input placeholder "Full name of witness"]</div>
            <div class="incident-field"><label for="witness_1_phone">Phone</label>[tel witness_1_phone id:witness_1_phone class:incident-input placeholder "e.g. 0412345678"]</div>
            <div class="incident-field"><label for="witness_1_address">Address</label>[text witness_1_address id:witness_1_address class:incident-input placeholder "Street, suburb, state and postcode"]</div>
            <div class="incident-field"><label for="witness_2_name">Witness 2 name</label>[text witness_2_name id:witness_2_name class:incident-input placeholder "Full name of witness"]</div>
            <div class="incident-field"><label for="witness_2_phone">Phone</label>[tel witness_2_phone id:witness_2_phone class:incident-input placeholder "e.g. 0412345678"]</div>
            <div class="incident-field"><label for="witness_2_address">Address</label>[text witness_2_address id:witness_2_address class:incident-input placeholder "Street, suburb, state and postcode"]</div>
        </div>
    </div>
</section>

<section class="incident-step" data-step="2" data-title="What happened">
    <div class="incident-section-heading"><span>02</span><div><p>Incident or accident</p><h2>What happened?</h2></div></div>
    <div class="incident-grid incident-grid--3">
        <div class="incident-field"><label for="incident_date">Incident date <em>*</em></label>[date* incident_date id:incident_date class:incident-input]</div>
        <div class="incident-field"><label for="incident_time">Time <em>*</em></label>[text* incident_time id:incident_time class:incident-input placeholder "e.g. 2:30 PM"]</div>
        <div class="incident-field"><label for="vehicle_registration">Vehicle registration</label>[text vehicle_registration id:vehicle_registration class:incident-input placeholder "If a motor vehicle accident"]</div>
    </div>
    <div class="incident-field"><label for="activity">Activity engaged in at the time <em>*</em></label>[text* activity id:activity class:incident-input placeholder "e.g. assisting with personal care, transferring a participant"]</div>
    <div class="incident-field"><label for="exact_location">Exact location of person at the time <em>*</em></label>[text* exact_location id:exact_location class:incident-input placeholder "e.g. bathroom at 12 Smith Street, Werribee"]</div>
    <div class="incident-field"><label for="incident_description">Describe how and what happened. Give full details. <em>*</em></label>[textarea* incident_description id:incident_description class:incident-input rows:8 placeholder "Include the sequence of events and all relevant details..."]</div>
    <div class="incident-field"><label for="incident_files">Diagram, separate sheet or supporting evidence</label>[file incident_files id:incident_files class:incident-file limit:2mb filetypes:jpg|jpeg|png|pdf|doc|docx]<small>Accepted: JPG, PNG, PDF, DOC or DOCX. Maximum 2 MB.</small></div>
</section>

<section class="incident-step" data-step="3" data-title="Injury and treatment">
    <div class="incident-section-heading"><span>03</span><div><p>If applicable</p><h2>Injury and treatment</h2></div></div>
    <div class="incident-alert" role="note"><i class="fas fa-user-nurse" aria-hidden="true"></i><p>Complete this section only where an injury has occurred. A supervisor may need to assist with completion.</p></div>
    <div class="incident-field"><span class="incident-label">Cause of injury</span>[checkbox injury_cause use_label_element class:incident-options class:incident-options--checks class:incident-options--flagged "Lift / bend / push / pull" "Psychological stress – bullying / harassment" "Death" "Lift / bend / push / pull – person" "Psychological stress – workload / organisation" "Electric shock" "Static or repetitive posture / arm usage" "Hazardous substance / material" "Sexual or physical assault" "Workplace violence" "Abuse or neglect" "Injury – hospitalisation" "Slip / trip / fall – indoor" "Vehicle accident – work vehicle" "Vehicle accident – own vehicle" "Slip / trip / fall – outdoors" "Waste incident" "Behaviour of concern" "Injury – medical treatment (participant)"]<small>Causes marked <b>NDIS</b> are reportable incidents and must be notified to the NDIS Commission immediately.</small></div>
    <div class="incident-field"><label for="injury_cause_other">Other cause</label>[text injury_cause_other id:injury_cause_other class:incident-input placeholder "Describe the cause if it is not listed above"]</div>
    <div class="incident-reportable">
        <div class="incident-reportable__title"><i class="fas fa-triangle-exclamation" aria-hidden="true"></i><strong>Immediately report any incident where a cause marked <span class="incident-ndis-chip">NDIS</span> above is ticked.</strong></div>
        <div class="incident-reportable__body">
            <p>The following incidents (including allegations) arising must be reported to the NDIS Commission:</p>
            <ul>
                <li>the death of an NDIS participant</li>
                <li>serious injury of an NDIS participant</li>
                <li>abuse or neglect of an NDIS participant</li>
                <li>unlawful sexual or physical contact with, or assault of, an NDIS participant</li>
                <li>sexual misconduct committed against, or in the presence of, an NDIS participant, including grooming of the NDIS participant for sexual activity</li>
                <li>the unauthorised use of a restrictive practice in relation to an NDIS participant</li>
            </ul>
        </div>
    </div>

    <div class="incident-body-map-card">
        <div class="incident-body-map-heading">
            <div><span>Interactive injury map</span><h3>Location on body</h3><p>Click every area where the injury occurred. Click a numbered marker again to remove it.</p></div>
            <div class="incident-body-map-count"><strong data-body-map-count>0</strong><span>locations</span></div>
        </div>
        <div class="incident-body-map-stage" data-body-map-stage role="group" aria-label="Front and back 3D body diagram. Click to mark an injury location.">
            <img src="{{INCIDENT_BODY_MAP_URL}}" alt="3D front and back body diagram for marking injury locations" loading="lazy" decoding="async" draggable="false">
            <div class="incident-body-map-markers" data-body-map-markers aria-live="polite"></div>
            <span class="incident-body-map-view incident-body-map-view--front">Front</span>
            <span class="incident-body-map-view incident-body-map-view--back">Back</span>
        </div>
        [hidden body_map_points id:body_map_points]
        <div class="incident-body-map-toolbar">
            <div class="incident-body-map-actions">
                <button type="button" data-body-map-undo disabled><i class="fas fa-rotate-left" aria-hidden="true"></i> Undo</button>
                <button type="button" data-body-map-clear disabled><i class="fas fa-trash-can" aria-hidden="true"></i> Clear all</button>
            </div>
            <p><i class="fas fa-circle-info" aria-hidden="true"></i> Multiple locations can be selected.</p>
        </div>
        <ol class="incident-body-map-list" data-body-map-list><li class="is-empty">No injury locations marked yet.</li></ol>
    </div>

    <div class="incident-grid incident-grid--2">
        <div class="incident-field"><label for="body_location">Specify location / additional details</label>[text body_location id:body_location class:incident-input placeholder "Add any detail not shown by the markers"]</div>
        <div class="incident-field"><label for="injury_how">How the injury occurred</label>[textarea injury_how id:injury_how class:incident-input rows:3 placeholder "e.g. fall, grabbed by person, muscular stress"]</div>
    </div>
    <div class="incident-subsection"><h3>Treatment administered</h3>
        <div class="incident-grid incident-grid--2">
            <div class="incident-field"><span class="incident-label">Was treatment administered?</span>[radio treatment_administered use_label_element class:incident-options "Yes" "No"]</div>
            <div class="incident-field"><span class="incident-label">Was a referral required?</span>[radio referral_required use_label_element class:incident-options "Yes" "No"]</div>
            <div class="incident-field incident-span-2"><label for="treatment_details">Treatment</label>[textarea treatment_details id:treatment_details class:incident-input rows:3 placeholder "Describe the treatment given, by whom and at what time"]</div>
            <div class="incident-field"><label for="referred_to">Referred to</label>[text referred_to id:referred_to class:incident-input placeholder "e.g. GP, hospital emergency, physiotherapist"]</div>
            <div class="incident-field"><label for="first_aid_name">First aid attendant (print name)</label>[text first_aid_name id:first_aid_name class:incident-input placeholder "Full name of the first aid attendant"]</div>
            <div class="incident-field"><label for="first_aid_signature">First aid attendant signature</label>[text first_aid_signature id:first_aid_signature class:incident-input placeholder "Type full name as signature"]</div>
        </div>
    </div>
</section>

<section class="incident-step incident-step--staff" data-step="4" data-title="Staff investigation">
    <div class="incident-staff-badge"><i class="fas fa-lock" aria-hidden="true"></i> Senior staff member on duty</div>
    <div class="incident-section-heading"><span>04</span><div><p>Incident or accident investigation</p><h2>Staff investigation</h2></div></div>
    <div class="incident-field"><span class="incident-label">Is this an NDIS reportable incident?</span>[radio ndis_reportable use_label_element class:incident-options "Yes" "No" "N/A"]</div>
    <div class="incident-grid incident-grid--2">
        <div class="incident-field"><label for="notifier_name">Authorised Reportable Incident Notifier (staff)</label>[text notifier_name id:notifier_name class:incident-input placeholder "Full name of the authorised notifier"]</div>
        <div class="incident-field"><label for="approver_name">Authorised Reportable Incident Approver (management)</label>[text approver_name id:approver_name class:incident-input placeholder "Full name of the authorised approver"]</div>
        <div class="incident-field"><label for="regulators_notified">Regulators notified</label>[text regulators_notified id:regulators_notified class:incident-input placeholder "e.g. NDIS Commission, WorkSafe, Police"]</div>
        <div class="incident-field"><label for="notification_datetime">Date and time of notification</label>[text notification_datetime id:notification_datetime class:incident-input placeholder "e.g. 21/09/2026 at 2:30 PM"]</div>
    </div>
    <div class="incident-investigation-grid">
        <div class="incident-prompt"><span>Did the incident occur during normal activities?</span>[radio normal_activities use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Did equipment contribute?</span>[radio equipment_contributed use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Was the equipment designed for the activity?</span>[radio equipment_designed use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Was the equipment properly maintained?</span>[radio equipment_maintained use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Did the equipment fail?</span>[radio equipment_failed use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Had a risk assessment been undertaken?</span>[radio risk_assessment use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Did safety instructions accompany the activity?</span>[radio safety_instructions use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Are there documented safe work procedures (SWP)?</span>[radio swp_documented use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Were the safe work procedures followed?</span>[radio swp_followed use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Was appropriate PPE used?</span>[radio ppe_used use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Was the involved person trained in this activity?</span>[radio person_trained use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Did a known behaviour problem contribute?</span>[radio behaviour_contributed use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Was there a known behaviour management plan?</span>[radio behaviour_plan use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Was the behaviour management plan followed?</span>[radio behaviour_plan_followed use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Did poor housekeeping contribute?</span>[radio housekeeping_contributed use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
        <div class="incident-prompt"><span>Did the work environment contribute?</span>[radio environment_contributed use_label_element class:incident-options class:incident-options--compact "Yes" "No" "N/A"]</div>
    </div>
    <div class="incident-field"><label for="identified_causes">Identified cause(s) after interviews and/or site visits</label>[textarea identified_causes id:identified_causes class:incident-input rows:6 placeholder "Summarise the findings from interviews, site visits and records reviewed"]</div>
</section>

<section class="incident-step incident-step--staff" data-step="5" data-title="Corrective actions">
    <div class="incident-staff-badge"><i class="fas fa-lock" aria-hidden="true"></i> Senior staff member on duty</div>
    <div class="incident-section-heading"><span>05</span><div><p>Prevention and follow-up</p><h2>Corrective actions</h2></div></div>
    <div class="incident-field"><span class="incident-label">Remedial actions recommended</span>[checkbox remedial_actions use_label_element class:incident-options class:incident-options--checks "Conduct task analysis" "Re-instruct persons involved" "Improve design / construction / guarding" "Conduct hazard systems audit" "Improve skills mix" "Add to inspection program" "Develop / review task procedures" "Provide debriefing and/or counselling" "Improve communication procedures" "Improve work environment" "Request maintenance" "Improve security" "Review WHS policy / programs" "Improve personal protection" "Temporarily relocate employees involved" "Provide or replace equipment / tools" "Improve work congestion / housekeeping" "Behaviour Support Plan review" "Improve work organisation" "Investigate safer alternatives" "Request MSDS" "Develop and/or provide training"]</div>
    <div class="incident-field"><label for="remedial_other">Other recommended action</label>[text remedial_other id:remedial_other class:incident-input placeholder "Describe any other action recommended"]</div>
    <div class="incident-field"><label for="prevention_plan">What has been implemented or planned to prevent recurrence?</label>[textarea prevention_plan id:prevention_plan class:incident-input rows:7 placeholder "Describe the controls implemented or planned, who is responsible and the due date"]</div>
    <div class="incident-field"><label for="actions_completed">Remedial actions completed</label>[textarea actions_completed id:actions_completed class:incident-input rows:6 placeholder "List each action completed, the date it was completed and who completed it"]</div>
</section>

<section class="incident-step incident-step--staff" data-step="6" data-title="Review and submit">
    <div class="incident-staff-badge"><i class="fas fa-lock" aria-hidden="true"></i> Senior staff member on duty</div>
    <div class="incident-section-heading"><span>06</span><div><p>Final assessment</p><h2>Review and submit</h2></div></div>
    <div class="incident-grid incident-grid--3">
        <div class="incident-field"><span class="incident-label">Related to staff?</span>[radio related_staff use_label_element class:incident-options "Yes" "No"]</div>
        <div class="incident-field"><span class="incident-label">Related to participants?</span>[radio related_participants use_label_element class:incident-options "Yes" "No"]</div>
        <div class="incident-field"><span class="incident-label">Did the injured person stop work?</span>[radio stopped_work use_label_element class:incident-options "Yes" "No"]</div>
        <div class="incident-field"><label for="work_stopped_date">If yes, date</label>[date work_stopped_date id:work_stopped_date class:incident-input]</div>
        <div class="incident-field"><label for="work_stopped_time">Time</label>[text work_stopped_time id:work_stopped_time class:incident-input placeholder "e.g. 2:30 PM"]</div>
    </div>
    <div class="incident-field"><span class="incident-label">Outcome</span>[checkbox final_outcome use_label_element class:incident-options class:incident-options--checks "Treated by Doctor" "Lodged workers compensation claim" "Contacted by RTW Coordinator" "WorkCover notified" "Insurer notified" "Returned to normal duties" "Returned to modified duties" "Hospitalised" "OHS Committee / Representative advised" "N/A"]</div>
    <div class="incident-field"><label for="manager_comments">Manager's review comments</label>[textarea manager_comments id:manager_comments class:incident-input rows:7 placeholder "Record the manager's assessment, findings and any further action required"]</div>
    <div class="incident-grid incident-grid--2">
        <div class="incident-field"><label for="manager_signature">Manager signature</label>[text* manager_signature id:manager_signature class:incident-input placeholder "Type full name as signature"]</div>
        <div class="incident-field"><label for="manager_review_date">Review date</label>[date* manager_review_date id:manager_review_date class:incident-input]</div>
    </div>
    <div class="incident-declaration">[acceptance declaration] I confirm that the information supplied in this incident report is true and complete to the best of my knowledge. [/acceptance]</div>
</section>

<div class="incident-actions">
    <button type="button" class="incident-button incident-button--back" data-incident-back><i class="fas fa-arrow-left" aria-hidden="true"></i><span>Back</span></button>
    <button type="button" class="incident-button incident-button--next" data-incident-next><span>Continue</span></button>
    <button type="submit" class="incident-submit" data-incident-submit hidden><span>Submit incident report</span></button>
</div>
CF7;

	return str_replace(
		'{{INCIDENT_BODY_MAP_URL}}',
		esc_url(get_template_directory_uri() . '/assets/images/incident-body-map-3d.png'),
		$template
	);
}

function ozlandcare_provision_incident_report_cf7_form()
{
	if (! class_exists('WPCF7_ContactForm')) {
		return 0;
	}

	$schema_version = '18';
	$forms = WPCF7_ContactForm::find(array('title' => 'Incident Report', 'posts_per_page' => 1));
	$form = $forms ? $forms[0] : WPCF7_ContactForm::get_template(array('title' => 'Incident Report', 'locale' => get_locale()));

	if ($forms && $schema_version === get_option('ozlandcare_incident_cf7_schema_version')) {
		return (int) $form->id();
	}

	$properties = $form->get_properties();
	$mail = isset($properties['mail']) && is_array($properties['mail']) ? $properties['mail'] : array();
	$sender_domain = wp_parse_url(home_url('/'), PHP_URL_HOST);
	if (! $sender_domain || false === strpos($sender_domain, '.')) {
		$sender_domain = 'ausasiaonline.com.au';
	}
	$mail['active'] = true;
	$mail['subject'] = 'Incident report: [person_first_name] [person_surname] — [incident_date]';
	$mail['sender'] = sprintf('[_site_title] <wordpress@%s>', sanitize_text_field($sender_domain));
	$mail['recipient'] = '[_site_admin_email]';
	$mail['additional_headers'] = '';
	$mail['attachments'] = '[incident_files]';
	$mail['use_html'] = false;
	$mail['exclude_blank'] = true;
	$mail['body'] = "A new HS FM-003.05 Incident Report has been submitted through [_site_title].\n\n"
		. "REPORT DETAILS\nToday's date: [report_date]\nReport number: [report_number]\nWork location: [work_location] [work_location_other]\nPerson status: [person_status]\nOutcome: [initial_outcome]\n\n"
		. "INVOLVED PERSON\nName: [person_first_name] [person_surname]\nDOB: [person_dob]\nAddress: [person_address]\nPhone: [person_phone]\nGender: [person_gender]\n\n"
		. "WITNESSES\n1: [witness_1_name] | [witness_1_phone] | [witness_1_address]\n2: [witness_2_name] | [witness_2_phone] | [witness_2_address]\n\n"
		. "INCIDENT\nDate/time: [incident_date] [incident_time]\nActivity: [activity]\nLocation: [exact_location]\nVehicle registration: [vehicle_registration]\nDescription: [incident_description]\n\n"
		. "INJURY / TREATMENT\nCause: [injury_cause] [injury_cause_other]\nBody map selections: [body_map_points]\nAdditional body location details: [body_location]\nHow injury occurred: [injury_how]\nTreatment administered: [treatment_administered]\nTreatment: [treatment_details]\nReferral required/to: [referral_required] [referred_to]\nFirst aid attendant/signature: [first_aid_name] / [first_aid_signature]\n\n"
		. "STAFF INVESTIGATION\nNDIS reportable: [ndis_reportable]\nNotifier: [notifier_name]\nApprover: [approver_name]\nRegulators notified: [regulators_notified]\nNotification date/time: [notification_datetime]\nNormal activities: [normal_activities]\nEquipment contributed: [equipment_contributed]\nEquipment designed for activity: [equipment_designed]\nEquipment maintained: [equipment_maintained]\nEquipment failed: [equipment_failed]\nRisk assessment: [risk_assessment]\nSafety instructions: [safety_instructions]\nDocumented SWP: [swp_documented]\nSWP followed: [swp_followed]\nPPE used: [ppe_used]\nPerson trained: [person_trained]\nBehaviour contributed: [behaviour_contributed]\nBehaviour plan: [behaviour_plan]\nBehaviour plan followed: [behaviour_plan_followed]\nPoor housekeeping contributed: [housekeeping_contributed]\nWork environment contributed: [environment_contributed]\nIdentified causes: [identified_causes]\n\n"
		. "REMEDIAL ACTIONS\nRecommended: [remedial_actions] [remedial_other]\nPrevention plan: [prevention_plan]\nCompleted: [actions_completed]\n\n"
		. "FINAL REVIEW\nRelated to staff: [related_staff]\nRelated to participants: [related_participants]\nStopped work: [stopped_work] [work_stopped_date] [work_stopped_time]\nOutcome: [final_outcome]\nManager comments: [manager_comments]\nManager signature/date: [manager_signature] / [manager_review_date]\nDeclaration: [declaration]\n\nSubmitted from: [_url]\nSubmitted at: [_date] [_time]";

	$messages = isset($properties['messages']) && is_array($properties['messages']) ? $properties['messages'] : array();
	$messages['mail_sent_ok'] = 'Thank you for submitting your incident report. A member of our team will be in touch soon.';
	$form->set_title('Incident Report');
	$form->set_properties(array(
		'form' => ozlandcare_incident_report_cf7_template(),
		'mail' => $mail,
		'messages' => $messages,
		'additional_settings' => '',
	));
	$form_id = (int) $form->save();
	if ($form_id) {
		update_option('ozlandcare_incident_cf7_schema_version', $schema_version, false);
	}
	return $form_id;
}
add_action('init', 'ozlandcare_provision_incident_report_cf7_form', 20);

function ozlandcare_render_incident_report_cf7_form()
{
	if (! class_exists('WPCF7_ContactForm')) {
		return '';
	}
	$form = function_exists('wpcf7_get_contact_form_by_title') ? wpcf7_get_contact_form_by_title('Incident Report') : null;
	if (! $form) {
		return '';
	}
	$GLOBALS['ozlandcare_rendering_incident_cf7'] = true;
	$html = $form->form_html(array('html_id' => 'incidentReportForm', 'html_class' => 'incident-report-form'));
	unset($GLOBALS['ozlandcare_rendering_incident_cf7']);
	return $html;
}

function ozlandcare_incident_cf7_disable_autop($autop, $options)
{
	$form = WPCF7_ContactForm::get_current();
	if ('form' === ($options['for'] ?? 'form') && (($form && 'Incident Report' === $form->title()) || ! empty($GLOBALS['ozlandcare_rendering_incident_cf7']) || is_page_template('page-incident-report.php'))) {
		return false;
	}
	return $autop;
}
add_filter('wpcf7_autop_or_not', 'ozlandcare_incident_cf7_disable_autop', 20, 2);

/** Create the page and place it under Resources immediately after Referral. */
function ozlandcare_provision_incident_report_page_and_menu()
{
	if ('2' === get_option('ozlandcare_incident_page_menu_version')) {
		return;
	}

	$page = get_page_by_path('incident-report');
	if (! $page) {
		$page_id = wp_insert_post(array(
			'post_title' => 'Incident Report',
			'post_name' => 'incident-report',
			'post_status' => 'publish',
			'post_type' => 'page',
			'post_content' => '',
		));
	} else {
		$page_id = $page->ID;
	}

	if (is_wp_error($page_id) || ! $page_id) {
		return;
	}
	update_post_meta($page_id, '_wp_page_template', 'page-incident-report.php');

	$locations = get_nav_menu_locations();
	$menu_id = ! empty($locations['primary_menu']) ? (int) $locations['primary_menu'] : 0;
	if (! $menu_id) {
		$menu = wp_get_nav_menu_object('Primary Menu');
		$menu_id = $menu ? (int) $menu->term_id : 0;
	}

	if ($menu_id) {
		$items = wp_get_nav_menu_items($menu_id) ?: array();
		$resources_id = 0;
		$referral_order = 0;
		$existing_id = 0;
		foreach ($items as $item) {
			if (0 === (int) $item->menu_item_parent && 'resources' === strtolower(trim($item->title))) {
				$resources_id = (int) $item->ID;
			}
			if ((int) $item->object_id === (int) $page_id || untrailingslashit($item->url) === untrailingslashit(get_permalink($page_id))) {
				$existing_id = (int) $item->ID;
			}
		}
		foreach ($items as $item) {
			if ($resources_id === (int) $item->menu_item_parent && 'referral' === strtolower(trim($item->title))) {
				$referral_order = (int) $item->menu_order;
				break;
			}
		}
		if ($resources_id && ! $existing_id) {
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => 'Incident Report',
				'menu-item-object' => 'page',
				'menu-item-object-id' => $page_id,
				'menu-item-type' => 'post_type',
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $resources_id,
				'menu-item-position' => $referral_order ? $referral_order + 1 : 0,
			));
		}
	}

	update_option('ozlandcare_incident_page_menu_version', '2', false);
}
add_action('init', 'ozlandcare_provision_incident_report_page_and_menu', 40);

/** Register private incident records for the two-stage manager workflow. */
if (false) { // Legacy two-stage workflow retained only to preserve existing database records.
function ozlandcare_register_incident_report_post_type()
{
	$manager_caps = array(
		'edit_post' => 'manage_options', 'read_post' => 'manage_options', 'delete_post' => 'manage_options',
		'edit_posts' => 'manage_options', 'edit_others_posts' => 'manage_options',
		'publish_posts' => 'manage_options', 'read_private_posts' => 'manage_options',
		'delete_posts' => 'manage_options',
		'create_posts' => 'do_not_allow',
	);
	register_post_type('oz_incident_report', array(
		'labels' => array(
			'name' => 'Incident reviews', 'singular_name' => 'Incident review',
			'menu_name' => 'Incident reviews', 'all_items' => 'All incident reports',
			'edit_item' => 'Review incident report', 'search_items' => 'Search incident reports',
			'not_found' => 'No incident reports found.',
		),
		'public' => false, 'show_ui' => false, 'show_in_menu' => false,
		'menu_icon' => 'dashicons-clipboard', 'supports' => array('title'),
		'capabilities' => $manager_caps, 'map_meta_cap' => false,
	));
}
add_action('init', 'ozlandcare_register_incident_report_post_type', 9);

/** Sanitize the CF7 values before retaining the staff stage. */
function ozlandcare_sanitize_incident_report_data($posted_data)
{
	$clean = array();
	$textarea_fields = array('incident_description', 'injury_how', 'treatment_details', 'identified_causes', 'prevention_plan', 'actions_completed');
	foreach ((array) $posted_data as $key => $value) {
		$key = sanitize_key($key);
		if (! $key || '_' === substr($key, 0, 1)) {
			continue;
		}
		if (is_array($value)) {
			$clean[$key] = array_values(array_map('sanitize_text_field', $value));
		} elseif (is_scalar($value)) {
			$clean[$key] = in_array($key, $textarea_fields, true) ? sanitize_textarea_field($value) : sanitize_text_field($value);
		}
	}
	return $clean;
}

/** Copy CF7 temporary uploads to a folder blocked from direct web access. */
function ozlandcare_store_incident_report_files($submission)
{
	$stored = array();
	$upload = wp_upload_dir();
	if (! empty($upload['error'])) {
		return $stored;
	}
	$directory = trailingslashit($upload['basedir']) . 'ozlandcare-private-incidents';
	if (! wp_mkdir_p($directory)) {
		return $stored;
	}
	$deny_file = trailingslashit($directory) . '.htaccess';
	if (! file_exists($deny_file)) {
		file_put_contents($deny_file, "Require all denied\nDeny from all\n");
		file_put_contents(trailingslashit($directory) . 'index.php', "<?php\n// Silence is golden.\n");
	}
	if (! is_file($deny_file)) {
		return $stored;
	}
	foreach ((array) $submission->uploaded_files() as $paths) {
		foreach ((array) $paths as $path) {
			if (! is_string($path) || ! is_file($path)) {
				continue;
			}
			$original_name = sanitize_file_name(wp_basename($path));
			$destination = trailingslashit($directory) . wp_generate_uuid4() . '-' . $original_name;
			if (copy($path, $destination)) {
				$stored[] = array('name' => $original_name, 'path' => $destination);
			}
		}
	}
	return $stored;
}

/** Save stage one to the manager's admin review list without sending email. */
function ozlandcare_save_incident_staff_stage($contact_form, &$abort, $submission)
{
	if ('Incident Report' !== $contact_form->title()) {
		return;
	}
	$data = ozlandcare_sanitize_incident_report_data($submission->get_posted_data());
	$name = trim(($data['person_first_name'] ?? '') . ' ' . ($data['person_surname'] ?? ''));
	$post_id = wp_insert_post(array(
		'post_type' => 'oz_incident_report', 'post_status' => 'private',
		'post_title' => 'Incident report - ' . ($name ?: current_time('d M Y, g:i a')),
	), true);
	if (is_wp_error($post_id)) {
		$abort = true;
		$submission->set_response('The incident report could not be saved. Please try again or contact the office.');
		return;
	}
	update_post_meta($post_id, '_oz_incident_stage', 'awaiting_manager');
	update_post_meta($post_id, '_oz_incident_staff_data', $data);
	update_post_meta($post_id, '_oz_incident_submitted_at', current_time('mysql'));
	$files = ozlandcare_store_incident_report_files($submission);
	update_post_meta($post_id, '_oz_incident_files', $files);
	$submission->add_result_props(array('incident_report_id' => $post_id));
	$GLOBALS['ozlandcare_skip_incident_report_mail'] = true;
}

function ozlandcare_skip_incident_report_initial_mail($skip_mail, $contact_form)
{
	return ('Incident Report' === $contact_form->title() && ! empty($GLOBALS['ozlandcare_skip_incident_report_mail'])) ? true : $skip_mail;
}

function ozlandcare_incident_field_label($key)
{
	$labels = array(
		'report_date' => 'Report date', 'report_number' => 'Report number', 'work_location' => 'Work location',
		'person_status' => 'Status of involved person', 'initial_outcome' => 'Initial outcome',
		'person_first_name' => 'First name', 'person_surname' => 'Surname', 'person_dob' => 'Date of birth',
		'person_address' => 'Home address', 'person_phone' => 'Phone', 'incident_date' => 'Incident date',
		'incident_time' => 'Incident time', 'incident_description' => 'Incident description',
		'exact_location' => 'Exact location', 'activity' => 'Activity at the time',
		'identified_causes' => 'Identified causes', 'remedial_actions' => 'Remedial actions',
		'prevention_plan' => 'Prevention plan', 'actions_completed' => 'Actions completed',
	);
	return $labels[$key] ?? ucwords(str_replace('_', ' ', $key));
}

/** Build the complete plain-text report sent after manager approval. */
function ozlandcare_incident_report_email_body($post_id, $data, $review = array())
{
	$final = ! empty($review);
	$lines = array(
		'OZLAND CARE - INCIDENT REPORT',
		$final ? 'Status: Completed manager review' : 'Status: Awaiting manager review',
		'Record: #' . $post_id,
		'Secure record: ' . admin_url('post.php?post=' . $post_id . '&action=edit'),
		'',
		'STAFF-SUBMITTED REPORT',
	);
	foreach ((array) $data as $key => $value) {
		if ('' === $value || array() === $value) {
			continue;
		}
		$lines[] = ozlandcare_incident_field_label($key) . ': ' . (is_array($value) ? implode(', ', $value) : $value);
	}
	if ($final) {
		$lines[] = '';
		$lines[] = "MANAGER'S REVIEW";
		$lines[] = 'Review comments: ' . ($review['comments'] ?? '');
		$lines[] = 'Manager signature: ' . ($review['signature'] ?? '');
		$lines[] = 'Review date: ' . ($review['date'] ?? '');
		$lines[] = 'Manager declaration: Confirmed';
	}
	$lines[] = '';
	$lines[] = 'Any supporting files submitted with this report are attached to this email.';
	return implode("\n", $lines);
}

function ozlandcare_add_incident_review_meta_boxes()
{
	remove_meta_box('submitdiv', 'oz_incident_report', 'side');
	add_meta_box('oz-incident-staff-report', 'Staff-submitted report', 'ozlandcare_render_incident_staff_report', 'oz_incident_report', 'normal', 'high');
	add_meta_box('oz-incident-manager-review', "Manager's review", 'ozlandcare_render_incident_manager_review', 'oz_incident_report', 'normal', 'high');
}
add_action('add_meta_boxes_oz_incident_report', 'ozlandcare_add_incident_review_meta_boxes');

function ozlandcare_render_incident_staff_report($post)
{
	$data = (array) get_post_meta($post->ID, '_oz_incident_staff_data', true);
	$files = (array) get_post_meta($post->ID, '_oz_incident_files', true);
	$stage = get_post_meta($post->ID, '_oz_incident_stage', true);
	$completed = 'completed' === $stage;
	$submitted_at = get_post_meta($post->ID, '_oz_incident_submitted_at', true);
	$groups = array(
		'Report overview' => array('report_date', 'report_number', 'work_location', 'work_location_other', 'person_status', 'initial_outcome'),
		'Involved person' => array('person_first_name', 'person_surname', 'person_dob', 'person_address', 'person_phone', 'person_gender'),
		'Witness information' => array('witness_1_name', 'witness_1_phone', 'witness_1_address', 'witness_2_name', 'witness_2_phone', 'witness_2_address'),
		'Incident details' => array('incident_date', 'incident_time', 'vehicle_registration', 'activity', 'exact_location', 'incident_description'),
		'Injury and treatment' => array('injury_cause', 'injury_cause_other', 'body_map_points', 'body_location', 'injury_how', 'treatment_administered', 'treatment_details', 'referral_required', 'referred_to', 'first_aid_name', 'first_aid_signature'),
		'Staff investigation' => array('ndis_reportable', 'notifier_name', 'approver_name', 'regulators_notified', 'notification_datetime', 'normal_activities', 'equipment_contributed', 'equipment_designed', 'equipment_maintained', 'equipment_failed', 'risk_assessment', 'safety_instructions', 'swp_documented', 'swp_followed', 'ppe_used', 'person_trained', 'behaviour_contributed', 'behaviour_plan', 'behaviour_plan_followed', 'housekeeping_contributed', 'environment_contributed', 'identified_causes'),
		'Corrective actions' => array('remedial_actions', 'remedial_other', 'prevention_plan', 'actions_completed'),
		'Final assessment' => array('related_staff', 'related_participants', 'stopped_work', 'work_stopped_date', 'work_stopped_time', 'final_outcome'),
	);
	$rendered = array();
	?>
	<div class="oz-incident-summary">
		<div class="oz-incident-summary__icon"><span class="dashicons dashicons-clipboard"></span></div>
		<div class="oz-incident-summary__copy">
			<span class="oz-incident-eyebrow">Incident case file</span>
			<h2><?php echo esc_html($post->post_title); ?></h2>
			<p>Submitted <?php echo esc_html($submitted_at ? mysql2date('j M Y \a\t g:i a', $submitted_at) : 'date unavailable'); ?> · Record #<?php echo (int) $post->ID; ?></p>
		</div>
		<span class="oz-incident-status <?php echo $completed ? 'is-complete' : 'is-pending'; ?>"><span></span><?php echo $completed ? 'Completed' : 'Awaiting review'; ?></span>
	</div>
	<div class="oz-incident-sections">
	<?php foreach ($groups as $title => $fields) :
		$has_content = false;
		foreach ($fields as $field) {
			if (isset($data[$field]) && '' !== $data[$field] && array() !== $data[$field]) {
				$has_content = true;
				break;
			}
		}
		if (! $has_content) {
			continue;
		}
	?>
		<section class="oz-incident-section">
			<h3><?php echo esc_html($title); ?></h3>
			<div class="oz-incident-fields">
			<?php foreach ($fields as $field) :
				if (! isset($data[$field]) || '' === $data[$field] || array() === $data[$field]) {
					continue;
				}
				$rendered[] = $field;
				$value = $data[$field];
				$is_long = is_array($value) || in_array($field, array('incident_description', 'injury_how', 'treatment_details', 'identified_causes', 'prevention_plan', 'actions_completed', 'remedial_actions', 'final_outcome'), true);
			?>
				<div class="oz-incident-field <?php echo $is_long ? 'is-wide' : ''; ?>">
					<span><?php echo esc_html(ozlandcare_incident_field_label($field)); ?></span>
					<strong><?php echo nl2br(esc_html(is_array($value) ? implode(' · ', $value) : $value)); ?></strong>
				</div>
			<?php endforeach; ?>
			</div>
		</section>
	<?php endforeach;
	$remaining = array_diff(array_keys($data), $rendered);
	if ($remaining) : ?>
		<section class="oz-incident-section">
			<h3>Additional information</h3>
			<div class="oz-incident-fields">
			<?php foreach ($remaining as $field) :
				$value = $data[$field];
				if ('' === $value || array() === $value) {
					continue;
				}
			?>
				<div class="oz-incident-field is-wide"><span><?php echo esc_html(ozlandcare_incident_field_label($field)); ?></span><strong><?php echo nl2br(esc_html(is_array($value) ? implode(' · ', $value) : $value)); ?></strong></div>
			<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>
	</div>
	<?php
	if ($files) {
		echo '<section class="oz-incident-files"><div><span class="dashicons dashicons-paperclip"></span><h3>Supporting files</h3><p>Files are protected and available only to authorised managers.</p></div><ul>';
		foreach ($files as $index => $file) {
			$url = wp_nonce_url(admin_url('admin-post.php?action=ozlandcare_incident_download&report=' . $post->ID . '&file=' . (int) $index), 'ozlandcare_incident_download_' . $post->ID);
			echo '<li><a href="' . esc_url($url) . '"><span class="dashicons dashicons-download"></span>' . esc_html($file['name'] ?? 'Supporting file') . '</a></li>';
		}
		echo '</ul></section>';
	}
}

function ozlandcare_render_incident_manager_review($post)
{
	$stage = get_post_meta($post->ID, '_oz_incident_stage', true);
	$review = (array) get_post_meta($post->ID, '_oz_incident_manager_review', true);
	$complete = 'completed' === $stage;
	wp_nonce_field('ozlandcare_save_incident_review', 'ozlandcare_incident_review_nonce');
	?>
	<div class="oz-review-heading">
		<div class="oz-review-heading__icon"><span class="dashicons <?php echo $complete ? 'dashicons-yes-alt' : 'dashicons-lock'; ?>"></span></div>
		<div><span class="oz-incident-eyebrow">Stage two</span><h2>Manager approval</h2><p><?php echo $complete ? 'This review is locked because the incident report has been finalised.' : 'Review the staff submission, record your assessment, and approve the final report.'; ?></p></div>
	</div>
	<div class="oz-review-state <?php echo $complete ? 'is-complete' : 'is-pending'; ?>">
		<span class="dashicons <?php echo $complete ? 'dashicons-yes-alt' : 'dashicons-clock'; ?>"></span>
		<div><strong><?php echo $complete ? 'Review completed' : 'Action required'; ?></strong><p><?php echo $complete ? 'Finalised on ' . esc_html(get_post_meta($post->ID, '_oz_incident_completed_at', true)) . '.' : 'All manager fields and the confirmation are required before final submission.'; ?></p></div>
	</div>
	<div class="oz-review-form">
		<div class="oz-review-field is-wide"><label for="oz_manager_comments">Manager's review comments <em>*</em></label><textarea id="oz_manager_comments" name="oz_manager_comments" rows="7" required placeholder="Record your assessment, findings and any further action required" <?php disabled($complete); ?>><?php echo esc_textarea($review['comments'] ?? ''); ?></textarea></div>
		<div class="oz-review-field"><label for="oz_manager_signature">Manager signature <em>*</em></label><input id="oz_manager_signature" name="oz_manager_signature" type="text" value="<?php echo esc_attr($review['signature'] ?? ''); ?>" required placeholder="Type your full name" <?php disabled($complete); ?>></div>
		<div class="oz-review-field"><label for="oz_manager_review_date">Review date <em>*</em></label><input id="oz_manager_review_date" name="oz_manager_review_date" type="date" value="<?php echo esc_attr($review['date'] ?? current_time('Y-m-d')); ?>" required <?php disabled($complete); ?>></div>
	</div>
	<label class="oz-review-confirm"><input name="oz_manager_confirm" type="checkbox" value="1" required <?php checked(! empty($review['confirmed'])); ?> <?php disabled($complete); ?>><span class="oz-review-confirm__box"><span class="dashicons dashicons-yes"></span></span><span><strong>Manager declaration</strong>I confirm that the information supplied in this incident report is true and complete to the best of my knowledge.</span></label>
	<?php if (! $complete) : ?>
		<div class="oz-review-submit"><div><span class="dashicons dashicons-shield"></span><p><strong>Ready to finalise?</strong><small>This action locks the manager review and marks the report as completed.</small></p></div><button type="submit" name="oz_finalize_incident" value="1" class="button button-primary button-large"><span class="dashicons dashicons-yes-alt"></span>Submit final report</button></div>
	<?php endif;
}

function ozlandcare_save_incident_manager_review($post_id)
{
	if (! isset($_POST['ozlandcare_incident_review_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['ozlandcare_incident_review_nonce'])), 'ozlandcare_save_incident_review')) {
		return;
	}
	if (! current_user_can('manage_options') || wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
		return;
	}
	if ('completed' === get_post_meta($post_id, '_oz_incident_stage', true)) {
		return;
	}

	$review = array(
		'comments' => sanitize_textarea_field(wp_unslash($_POST['oz_manager_comments'] ?? '')),
		'signature' => sanitize_text_field(wp_unslash($_POST['oz_manager_signature'] ?? '')),
		'date' => sanitize_text_field(wp_unslash($_POST['oz_manager_review_date'] ?? '')),
		'confirmed' => ! empty($_POST['oz_manager_confirm']) ? 1 : 0,
	);
	update_post_meta($post_id, '_oz_incident_manager_review', $review);
	if (empty($_POST['oz_finalize_incident'])) {
		return;
	}
	if (! $review['comments'] || ! $review['signature'] || ! $review['date'] || ! $review['confirmed']) {
		update_post_meta($post_id, '_oz_incident_admin_notice', array('error', 'Complete every manager review field and the confirmation before final submission.'));
		return;
	}

	$data = (array) get_post_meta($post_id, '_oz_incident_staff_data', true);
	$files = (array) get_post_meta($post_id, '_oz_incident_files', true);
	$attachments = array_values(array_filter(wp_list_pluck($files, 'path'), function ($path) {
		return is_string($path) && is_file($path);
	}));
	$mail_sent = wp_mail(
		get_option('admin_email'),
		'Final incident report #' . $post_id,
		ozlandcare_incident_report_email_body($post_id, $data, $review),
		array('Content-Type: text/plain; charset=UTF-8'),
		$attachments
	);
	if (! $mail_sent) {
		update_post_meta($post_id, '_oz_incident_admin_notice', array('error', 'The manager review was saved, but the final report email could not be sent. Check the site mail configuration and submit again.'));
		return;
	}

	update_post_meta($post_id, '_oz_incident_stage', 'completed');
	update_post_meta($post_id, '_oz_incident_completed_at', current_time('mysql'));
	update_post_meta($post_id, '_oz_incident_reviewed_by', get_current_user_id());
	update_post_meta($post_id, '_oz_incident_final_email_sent', 1);
	update_post_meta($post_id, '_oz_incident_admin_notice', array('success', 'The manager review is complete and the full incident report email has been sent.'));
}
add_action('save_post_oz_incident_report', 'ozlandcare_save_incident_manager_review');

function ozlandcare_incident_admin_notices()
{
	$screen = function_exists('get_current_screen') ? get_current_screen() : null;
	$post_id = isset($_GET['post']) ? absint($_GET['post']) : 0;
	if (! $screen || 'oz_incident_report' !== $screen->post_type || ! $post_id) {
		return;
	}
	$notice = get_post_meta($post_id, '_oz_incident_admin_notice', true);
	if (! is_array($notice) || count($notice) < 2) {
		return;
	}
	delete_post_meta($post_id, '_oz_incident_admin_notice');
	echo '<div class="notice notice-' . esc_attr($notice[0]) . ' is-dismissible"><p>' . esc_html($notice[1]) . '</p></div>';
}
add_action('admin_notices', 'ozlandcare_incident_admin_notices');

/** Premium, isolated styling for the Incident Reviews admin screens. */
function ozlandcare_incident_review_admin_styles()
{
	$screen = function_exists('get_current_screen') ? get_current_screen() : null;
	if (! $screen || 'oz_incident_report' !== $screen->post_type) {
		return;
	}
	?>
	<style>
		:root{--oz-navy:#102a43;--oz-blue:#0875bd;--oz-purple:#692b82;--oz-muted:#64748b;--oz-line:#e3eaf2;--oz-canvas:#f4f7fb}
		body.post-type-oz_incident_report{background:var(--oz-canvas)}
		body.post-type-oz_incident_report #wpcontent{background:linear-gradient(180deg,#f8fafc 0,#f4f7fb 420px)}
		body.post-type-oz_incident_report .wrap>h1{color:var(--oz-navy);font-size:28px;font-weight:750;letter-spacing:-.025em}
		body.post-type-oz_incident_report .page-title-action{border:0;border-radius:8px;background:var(--oz-purple);color:#fff;font-weight:650}
		body.post-type-oz_incident_report #titlediv,body.post-type-oz_incident_report #postbox-container-1{display:none}
		body.post-type-oz_incident_report #poststuff #post-body.columns-2{margin-right:0}
		body.post-type-oz_incident_report #post-body-content,body.post-type-oz_incident_report #postbox-container-2{width:100%}
		body.post-type-oz_incident_report #poststuff .postbox{overflow:hidden;border:1px solid rgba(214,224,235,.9);border-radius:18px;background:#fff;box-shadow:0 12px 35px rgba(25,49,77,.07)}
		body.post-type-oz_incident_report #poststuff .postbox .postbox-header{min-height:56px;border-bottom:1px solid #edf1f5;background:#fbfcfe}
		body.post-type-oz_incident_report #poststuff .postbox .hndle{padding:0 22px;color:var(--oz-purple);font-size:17px;font-weight:800}
		body.post-type-oz_incident_report #poststuff .postbox .inside{margin:0;padding:24px}
		.oz-incident-summary{display:flex;align-items:center;gap:18px;margin:-24px -24px 26px;padding:25px 28px;background:linear-gradient(120deg,#102a43 0,#173f63 55%,#612b79 135%);color:#fff}
		.oz-incident-summary__icon,.oz-review-heading__icon{display:grid;place-items:center;width:52px;height:52px;flex:none;border-radius:15px;background:rgba(255,255,255,.12);box-shadow:inset 0 0 0 1px rgba(255,255,255,.16)}
		.oz-incident-summary__icon .dashicons,.oz-review-heading__icon .dashicons{width:auto;height:auto;font-size:26px}
		.oz-incident-summary__copy{min-width:0;flex:1}.oz-incident-eyebrow{display:block;margin-bottom:5px;color:#6e34a0;font-size:10px;font-weight:800;letter-spacing:.16em;text-transform:uppercase}
		.oz-incident-summary .oz-incident-eyebrow{color:#9edbff}.oz-incident-summary h2{overflow:hidden;margin:0;color:#fff;font-size:21px;line-height:1.25;text-overflow:ellipsis;white-space:nowrap}.oz-incident-summary p{margin:6px 0 0;color:#c6d6e5;font-size:12px}
		.oz-incident-status{display:inline-flex;align-items:center;gap:8px;padding:9px 13px;border:1px solid rgba(255,255,255,.2);border-radius:99px;background:rgba(255,255,255,.1);font-size:11px;font-weight:750;letter-spacing:.025em}.oz-incident-status>span{width:8px;height:8px;border-radius:50%;background:#fbbf24;box-shadow:0 0 0 4px rgba(251,191,36,.15)}.oz-incident-status.is-complete>span{background:#4ade80;box-shadow:0 0 0 4px rgba(74,222,128,.15)}
		.oz-incident-sections{display:grid;grid-template-columns:1fr;gap:18px}.oz-incident-section{padding:20px;border:1px solid var(--oz-line);border-radius:14px;background:linear-gradient(180deg,#fff,#fbfcfe)}
		.oz-incident-section h3{display:flex;align-items:center;gap:10px;margin:0 0 18px;color:var(--oz-purple);font-size:18px;font-weight:800;letter-spacing:-.01em}.oz-incident-section h3:before{content:"";width:5px;height:22px;border-radius:5px;background:linear-gradient(var(--oz-purple),var(--oz-blue))}
		.oz-incident-fields{display:grid;grid-template-columns:1fr;gap:1px;background:var(--oz-line);border:1px solid var(--oz-line);border-radius:10px;overflow:hidden}.oz-incident-field{min-width:0;padding:13px 14px;background:#fff}.oz-incident-field.is-wide{grid-column:1}.oz-incident-field>span{display:block;margin-bottom:5px;color:#7b8a9b;font-size:10px;font-weight:750;letter-spacing:.055em;text-transform:uppercase}.oz-incident-field>strong{display:block;color:#233b55;font-size:12.5px;font-weight:550;line-height:1.55;overflow-wrap:anywhere}
		.oz-incident-files{display:flex;align-items:center;gap:16px;margin-top:18px;padding:18px 20px;border:1px solid #d8e5f1;border-radius:14px;background:#f5faff}.oz-incident-files>div{display:grid;grid-template-columns:auto 1fr;column-gap:10px;flex:1}.oz-incident-files>div>.dashicons{grid-row:1/3;color:var(--oz-blue);font-size:24px}.oz-incident-files h3{margin:0;color:var(--oz-navy);font-size:13px}.oz-incident-files p{margin:3px 0 0;color:var(--oz-muted);font-size:11px}.oz-incident-files ul{display:flex;gap:8px;margin:0}.oz-incident-files li{margin:0}.oz-incident-files a{display:inline-flex;align-items:center;gap:7px;padding:9px 12px;border:1px solid #c9dbea;border-radius:8px;background:#fff;text-decoration:none;font-size:11px;font-weight:650}.oz-incident-files a:hover{border-color:var(--oz-blue);color:var(--oz-blue)}
		.oz-review-heading{display:flex;align-items:center;gap:16px;margin:-24px -24px 22px;padding:23px 27px;border-bottom:1px solid #e9eef4;background:linear-gradient(110deg,#faf7fc,#f4f9fd)}.oz-review-heading__icon{background:linear-gradient(135deg,var(--oz-purple),var(--oz-blue));color:#fff;box-shadow:0 9px 22px rgba(74,54,125,.2)}.oz-review-heading h2{margin:0;color:var(--oz-navy);font-size:20px}.oz-review-heading p{margin:5px 0 0;color:var(--oz-muted);font-size:12px}
		.oz-review-state{display:flex;align-items:center;gap:12px;margin-bottom:20px;padding:14px 16px;border:1px solid #fed7aa;border-radius:11px;background:#fff9ed;color:#9a4e08}.oz-review-state.is-complete{border-color:#bbefce;background:#f0fdf5;color:#15723b}.oz-review-state>.dashicons{width:auto;height:auto;font-size:22px}.oz-review-state strong{display:block;font-size:12px}.oz-review-state p{margin:2px 0 0;color:inherit;font-size:11px}
		.oz-review-form{display:grid;grid-template-columns:1fr;gap:17px}.oz-review-field.is-wide{grid-column:1}.oz-review-field label{display:block;margin:0 0 7px 2px;color:#263d57;font-size:11px;font-weight:750;text-transform:uppercase;letter-spacing:.04em}.oz-review-field label em{color:#db3158;font-style:normal}.oz-review-field input,.oz-review-field textarea{box-sizing:border-box;width:100%;min-height:47px;margin:0;padding:11px 13px;border:1px solid #d7e0e9;border-radius:10px;background:#f9fbfd;color:#18324d;font-size:13px;box-shadow:none}.oz-review-field textarea{line-height:1.6;resize:vertical}.oz-review-field input:focus,.oz-review-field textarea:focus{border-color:var(--oz-blue);background:#fff;box-shadow:0 0 0 3px rgba(8,117,189,.1);outline:0}.oz-review-field input:disabled,.oz-review-field textarea:disabled{color:#50677d;background:#f1f5f8}
		.oz-review-confirm{display:flex;align-items:flex-start;gap:12px;margin-top:18px;padding:16px;border:1px solid #dce5ed;border-radius:11px;background:#f8fafc;cursor:pointer}.oz-review-confirm>input{position:absolute;opacity:0}.oz-review-confirm__box{display:grid;place-items:center;width:20px;height:20px;flex:none;border:1.5px solid #aab8c7;border-radius:5px;background:#fff;color:transparent}.oz-review-confirm input:checked+.oz-review-confirm__box{border-color:var(--oz-purple);background:var(--oz-purple);color:#fff}.oz-review-confirm__box .dashicons{width:auto;height:auto;font-size:16px}.oz-review-confirm strong{display:block;margin-bottom:3px;color:var(--oz-navy);font-size:12px}.oz-review-confirm>span:last-child{color:#66788a;font-size:11.5px;line-height:1.5}
		.oz-review-submit{display:flex;align-items:center;justify-content:space-between;gap:20px;margin:22px -24px -24px;padding:19px 24px;border-top:1px solid #e7edf3;background:#f8fafc}.oz-review-submit>div{display:flex;align-items:center;gap:10px}.oz-review-submit>div>.dashicons{color:var(--oz-purple);font-size:24px}.oz-review-submit p{margin:0}.oz-review-submit p strong,.oz-review-submit p small{display:block}.oz-review-submit p strong{color:var(--oz-navy);font-size:12px}.oz-review-submit p small{margin-top:2px;color:var(--oz-muted);font-size:10.5px}.oz-review-submit .button{display:inline-flex;align-items:center;gap:7px;min-height:43px;padding:0 18px;border:0;border-radius:9px;background:linear-gradient(135deg,var(--oz-purple),#813b9c);font-weight:700;box-shadow:0 8px 20px rgba(105,43,130,.2)}.oz-review-submit .button:hover,.oz-review-submit .button:focus{background:linear-gradient(135deg,var(--oz-blue),#0b8bdc)}.oz-review-submit .button .dashicons{width:auto;height:auto;font-size:17px}
		.post-type-oz_incident_report .wp-list-table{overflow:hidden;border:1px solid #dfe7ef;border-radius:12px;box-shadow:0 7px 24px rgba(25,49,77,.05)}.post-type-oz_incident_report .wp-list-table thead th{padding-top:12px;padding-bottom:12px;background:#f7f9fc;color:#435a70;font-weight:700}.post-type-oz_incident_report .wp-list-table tbody tr:hover{background:#f8fbfe}.oz-list-status{display:inline-flex;align-items:center;gap:7px;padding:6px 10px;border-radius:99px;font-size:10.5px;font-weight:750}.oz-list-status:before{content:"";width:7px;height:7px;border-radius:50%}.oz-list-status.is-pending{background:#fff4df;color:#92510d}.oz-list-status.is-pending:before{background:#f59e0b}.oz-list-status.is-complete{background:#eafaf0;color:#16733b}.oz-list-status.is-complete:before{background:#22c55e}
		@media(max-width:782px){body.post-type-oz_incident_report #poststuff .postbox .inside{padding:16px}.oz-incident-summary,.oz-review-heading{margin:-16px -16px 20px;padding:20px}.oz-incident-summary{align-items:flex-start;flex-wrap:wrap}.oz-incident-status{margin-left:70px}.oz-review-form{grid-template-columns:1fr}.oz-review-field{grid-column:1}.oz-incident-files,.oz-review-submit{align-items:stretch;flex-direction:column}.oz-review-submit{margin:20px -16px -16px}.oz-review-submit .button{justify-content:center}.oz-incident-files ul{flex-direction:column}}
	</style>
	<?php
}
add_action('admin_head', 'ozlandcare_incident_review_admin_styles');

function ozlandcare_incident_review_columns($columns)
{
	return array(
		'cb' => $columns['cb'], 'title' => 'Incident', 'report_number' => 'Incident report number', 'incident_date' => 'Incident date',
		'incident_stage' => 'Review status', 'date' => 'Staff submitted',
	);
}
add_filter('manage_oz_incident_report_posts_columns', 'ozlandcare_incident_review_columns');

function ozlandcare_incident_review_column_content($column, $post_id)
{
	$data = (array) get_post_meta($post_id, '_oz_incident_staff_data', true);
	if ('report_number' === $column) {
		echo esc_html($data['report_number'] ?? '—');
	} elseif ('incident_date' === $column) {
		echo esc_html($data['incident_date'] ?? '—');
	} elseif ('incident_stage' === $column) {
		$completed = 'completed' === get_post_meta($post_id, '_oz_incident_stage', true);
		echo $completed ? '<span class="oz-list-status is-complete">Completed</span>' : '<span class="oz-list-status is-pending">Awaiting manager review</span>';
	}
}
add_action('manage_oz_incident_report_posts_custom_column', 'ozlandcare_incident_review_column_content', 10, 2);

function ozlandcare_download_incident_file()
{
	$post_id = isset($_GET['report']) ? absint($_GET['report']) : 0;
	$index = isset($_GET['file']) ? absint($_GET['file']) : -1;
	if (! current_user_can('manage_options') || ! $post_id || ! check_admin_referer('ozlandcare_incident_download_' . $post_id)) {
		wp_die('You are not allowed to download this file.', 403);
	}
	$files = (array) get_post_meta($post_id, '_oz_incident_files', true);
	$file = $files[$index] ?? array();
	$path = isset($file['path']) ? realpath($file['path']) : false;
	$upload = wp_upload_dir();
	$private_root = realpath(trailingslashit($upload['basedir']) . 'ozlandcare-private-incidents');
	if (! $path || ! $private_root || 0 !== strpos(strtolower($path), strtolower($private_root . DIRECTORY_SEPARATOR)) || ! is_file($path)) {
		wp_die('The requested file could not be found.', 404);
	}
	nocache_headers();
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="' . rawurlencode($file['name'] ?? wp_basename($path)) . '"');
	header('Content-Length: ' . filesize($path));
	readfile($path);
	exit;
}
add_action('admin_post_ozlandcare_incident_download', 'ozlandcare_download_incident_file');

/** Remove retained private uploads when an incident record is permanently deleted. */
function ozlandcare_delete_incident_report_files($post_id)
{
	if ('oz_incident_report' !== get_post_type($post_id)) {
		return;
	}
	foreach ((array) get_post_meta($post_id, '_oz_incident_files', true) as $file) {
		if (! empty($file['path']) && is_file($file['path'])) {
			unlink($file['path']);
		}
	}
}
add_action('before_delete_post', 'ozlandcare_delete_incident_report_files');
}

/**
 * Server-side validation for the Incident Report form.
 *
 * Mirrors the rules used by the Referral form so both forms accept names and
 * mobile numbers in the same shape.
 */
function ozlandcare_validate_incident_report_cf7_field($result, $tag)
{
	$contact_form = WPCF7_ContactForm::get_current();
	if (! $contact_form || 'Incident Report' !== $contact_form->title()) {
		return $result;
	}

	$name = $tag->name;
	$value = isset($_POST[$name]) && is_scalar($_POST[$name])
		? trim(wp_unslash($_POST[$name]))
		: '';

	$single_name = '/^[\p{L}\p{M}]+(?:[\'\x{2019}-][\p{L}\p{M}]+)*$/u';

	if ('person_first_name' === $name && $value && ! preg_match($single_name, $value)) {
		$result->invalidate($tag, 'Enter one first name without spaces.');
	}

	if ('person_surname' === $name && $value && ! preg_match($single_name, $value)) {
		$result->invalidate($tag, 'Enter one surname without spaces.');
	}

	$phone_fields = array('person_phone', 'witness_1_phone', 'witness_2_phone');
	if (in_array($name, $phone_fields, true) && $value && ! preg_match('/^04\d{8}$/', $value)) {
		$result->invalidate($tag, 'Enter a 10-digit Australian mobile number starting with 04.');
	}

	// The report date records when the report is lodged, so it must be today.
	if ('report_date' === $name && $value !== current_time('Y-m-d')) {
		$result->invalidate($tag, 'The report date must be today.');
	}

	return $result;
}
add_filter('wpcf7_validate_text', 'ozlandcare_validate_incident_report_cf7_field', 20, 2);
add_filter('wpcf7_validate_text*', 'ozlandcare_validate_incident_report_cf7_field', 20, 2);
add_filter('wpcf7_validate_tel', 'ozlandcare_validate_incident_report_cf7_field', 20, 2);
add_filter('wpcf7_validate_tel*', 'ozlandcare_validate_incident_report_cf7_field', 20, 2);
add_filter('wpcf7_validate_date', 'ozlandcare_validate_incident_report_cf7_field', 20, 2);
add_filter('wpcf7_validate_date*', 'ozlandcare_validate_incident_report_cf7_field', 20, 2);
