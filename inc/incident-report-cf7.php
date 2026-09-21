<?php
/**
 * Incident Report (HS FM-003.05) Contact Form 7 configuration.
 *
 * The source document is represented in full. The public-facing report and the
 * senior staff investigation remain in one submission so the completed record
 * can be reviewed and retained as a single incident file.
 */

if (! defined('ABSPATH')) {
	exit;
}

function ozlandcare_incident_report_cf7_template()
{
	$template = <<<'CF7'
<div class="incident-progress" aria-label="Form progress">
    <div class="incident-progress__bar"><span></span></div>
    <div class="incident-progress__copy"><strong>Section <span data-current-step>1</span> of 6</strong><span data-step-name>Report details</span></div>
</div>

<div class="incident-alert" role="note">
    <i class="fas fa-circle-info" aria-hidden="true"></i>
    <p>Complete this form for <strong>all incidents and accidents</strong> where an injury has or could have resulted. If anyone is in immediate danger, call <strong>000</strong> before completing this report.</p>
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
            <div class="incident-field"><label for="person_phone">Phone</label>[tel person_phone id:person_phone class:incident-input placeholder "e.g. 0400 000 000"]</div>
        </div>
        <div class="incident-field"><span class="incident-label">Gender</span>[radio person_gender use_label_element class:incident-options "Male" "Female" "Other / Prefer not to say"]</div>
    </div>
    <div class="incident-subsection"><h3>Witness details (if any)</h3>
        <div class="incident-grid incident-grid--3">
            <div class="incident-field"><label for="witness_1_name">Witness 1 name</label>[text witness_1_name id:witness_1_name class:incident-input placeholder "Full name of witness"]</div>
            <div class="incident-field"><label for="witness_1_phone">Phone</label>[tel witness_1_phone id:witness_1_phone class:incident-input placeholder "e.g. 0400 000 000"]</div>
            <div class="incident-field"><label for="witness_1_address">Address</label>[text witness_1_address id:witness_1_address class:incident-input placeholder "Street, suburb, state and postcode"]</div>
            <div class="incident-field"><label for="witness_2_name">Witness 2 name</label>[text witness_2_name id:witness_2_name class:incident-input placeholder "Full name of witness"]</div>
            <div class="incident-field"><label for="witness_2_phone">Phone</label>[tel witness_2_phone id:witness_2_phone class:incident-input placeholder "e.g. 0400 000 000"]</div>
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
        <div class="incident-field"><label for="manager_signature">Manager signature</label>[text manager_signature id:manager_signature class:incident-input placeholder "Type full name as signature"]</div>
        <div class="incident-field"><label for="manager_review_date">Review date</label>[date manager_review_date id:manager_review_date class:incident-input]</div>
    </div>
    <div class="incident-declaration">[acceptance declaration] I confirm that the information supplied in this incident report is true and complete to the best of my knowledge. [/acceptance]</div>
</section>

<div class="incident-actions">
    <button type="button" class="incident-button incident-button--back" data-incident-back><i class="fas fa-arrow-left" aria-hidden="true"></i><span>Back</span></button>
    <button type="button" class="incident-button incident-button--next" data-incident-next><span>Continue</span><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
    <button type="submit" class="incident-submit" data-incident-submit hidden><span>Submit incident report</span><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
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

	$schema_version = '10';
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
	$mail['recipient'] = 'dev@ausasiaonline.com.au';
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
	$messages['mail_sent_ok'] = 'Your incident report has been submitted securely. Thank you for providing this information.';
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
