<?php

/**
 * Contact Form 7 configuration for the Feedback form.
 *
 * Mirrors the paper Participant Satisfactory Survey (NP FM-007.03): the
 * participant's name and date, fifteen No / Not sure / Yes statements, a
 * rating out of 10 and three open questions. The form is provisioned once per
 * schema version, then remains editable in Contact > Contact Forms >
 * Feedback Form in WordPress admin.
 *
 * @package ozlandcare
 */

defined('ABSPATH') || exit;

/**
 * The survey statements, in the order they appear on NP FM-007.03.
 *
 * Keys are the CF7 field names, so they also drive the notification email.
 */
function ozlandcare_feedback_statements()
{
	return array(
		'q1'  => 'I receive reliable and consistent support.',
		'q2'  => 'The support helps me to meet my needs.',
		'q3'  => 'The support helps me to achieve my goals.',
		'q4'  => 'I feel safe using the service.',
		'q5'  => 'My privacy is respected.',
		'q6'  => 'I know how to make a complaint (if I need to).',
		'q7'  => 'I feel comfortable to complain (if I need to).',
		'q8'  => 'Staff understand me and my needs.',
		'q9'  => 'Staff help me feel motivated.',
		'q10' => 'Staff involve me in all decisions about my supports.',
		'q11' => 'Staff help me to set goals and work towards them.',
		'q12' => 'Staff can help me to find other services, groups or activities.',
		'q13' => 'Staff support me to participate in my local community.',
		'q14' => 'Staff help me to develop skills.',
		'q15' => 'Overall, the support helps me with my life.',
	);
}

/**
 * Return the Contact Form 7 markup for the feedback form.
 *
 * Every field is a real CF7 tag, so its value reaches the notification email.
 */
function ozlandcare_feedback_cf7_template()
{
	$statements = ozlandcare_feedback_statements();

	$rows = '';
	$number = 0;
	foreach ($statements as $name => $statement) {
		$number++;
		$rows .= sprintf(
			'        <div class="survey-row" role="radiogroup" aria-labelledby="survey_%1$s_label">
            <span class="survey-num" aria-hidden="true">%2$d</span>
            <p id="survey_%1$s_label" class="survey-statement">%3$s</p>
            [radio %1$s use_label_element class:survey-choices "No" "Not sure" "Yes"]
        </div>
',
			$name,
			$number,
			esc_html($statement)
		);
	}

	$total = count($statements);

	$rating_options = implode(' ', array_map(
		static function ($score) {
			return '"' . $score . '"';
		},
		range(1, 10)
	));

	return <<<CF7
<div class="feedback-panel">
    <div class="feedback-panel-head">
        <span class="feedback-step" aria-hidden="true">1</span>
        <div>
            <h3 class="feedback-panel-title">About You</h3>
            <p class="feedback-panel-sub">So we know whose feedback this is.</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-[1fr_16rem] gap-5">
        <div class="group flex flex-col">
            <label for="feedback_participant_name" class="feedback-label">Participant Full Name <span class="text-primary">*</span></label>
            [text* participant_name id:feedback_participant_name class:feedback-input placeholder "Enter your full name"]
        </div>
        <div class="group flex flex-col">
            <label for="feedback_date" class="feedback-label">Date <span class="text-primary">*</span></label>
            [date* survey_date id:feedback_date class:feedback-input]
        </div>
    </div>
</div>

<div class="feedback-panel">
    <div class="feedback-panel-head feedback-panel-head--split">
        <span class="feedback-step" aria-hidden="true">2</span>
        <div>
            <h3 class="feedback-panel-title">Your Support</h3>
            <p class="feedback-panel-sub">Please read each statement and choose the response that best reflects what you think or how you feel about your support from us.</p>
        </div>
        <div class="survey-progress" aria-live="polite">
            <span class="survey-progress-text"><strong data-survey-count>0</strong> of {$total} answered</span>
            <span class="survey-progress-track" aria-hidden="true"><span class="survey-progress-bar" data-survey-bar></span></span>
        </div>
    </div>

    <div class="survey-table">
        <div class="survey-head" aria-hidden="true">
            <span>#</span>
            <span>Statement</span>
            <span class="survey-head-choices">
                <span class="is-no"><i class="fa-regular fa-face-frown"></i> No</span>
                <span class="is-unsure"><i class="fa-regular fa-face-meh"></i> Not sure</span>
                <span class="is-yes"><i class="fa-regular fa-face-smile"></i> Yes</span>
            </span>
        </div>
{$rows}    </div>
</div>

<div class="feedback-panel">
    <div class="feedback-panel-head">
        <span class="feedback-step" aria-hidden="true">3</span>
        <div>
            <h3 class="feedback-panel-title">Rate Our Services</h3>
            <p class="feedback-panel-sub">Overall, how would you rate the support you receive from us?</p>
        </div>
    </div>
    <div class="survey-rating" role="radiogroup" aria-labelledby="survey_rating_label">
        <p id="survey_rating_label" class="feedback-label">Please rate our services out of 10 <span class="text-primary">*</span><span class="sr-only"> (1 is very poor, 10 is excellent)</span></p>
        [radio overall_rating use_label_element class:rating-scale {$rating_options}]
        <div class="rating-legend" aria-hidden="true">
            <span class="is-poor"><i class="fa-regular fa-face-frown"></i> Very poor</span>
            <span class="is-average"><i class="fa-regular fa-face-meh"></i> Average</span>
            <span class="is-excellent"><i class="fa-regular fa-face-smile"></i> Excellent</span>
        </div>
        <p class="rating-readout" data-rating-readout aria-live="polite">Select a score from 1 to 10.</p>
    </div>
</div>

<div class="feedback-panel">
    <div class="feedback-panel-head">
        <span class="feedback-step" aria-hidden="true">4</span>
        <div>
            <h3 class="feedback-panel-title">Your Comments</h3>
            <p class="feedback-panel-sub">Optional, but every comment is read by our team.</p>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6">
        <div class="group flex flex-col">
            <label for="feedback_what_was_good" class="feedback-label feedback-label--question">What was <strong>good</strong> about the support you received from us?</label>
            [textarea what_was_good id:feedback_what_was_good rows:4 class:feedback-input placeholder "Tell us what has been working well for you..."]
        </div>
        <div class="group flex flex-col">
            <label for="feedback_what_to_improve" class="feedback-label feedback-label--question">What could be <strong>improved</strong> or <strong>changed</strong> about the support you received from us?</label>
            [textarea what_to_improve id:feedback_what_to_improve rows:4 class:feedback-input placeholder "Your suggestions help us do better..."]
        </div>
        <div class="group flex flex-col">
            <label for="feedback_other_comments" class="feedback-label feedback-label--question">Please make any other comments about the service you received. These may be <strong>issues, concerns</strong> or <strong>positive comments</strong>.</label>
            [textarea other_comments id:feedback_other_comments rows:4 class:feedback-input placeholder "Anything else you would like to share..."]
        </div>
    </div>
</div>

<div class="feedback-actions">
    <p class="feedback-privacy"><i class="fas fa-lock" aria-hidden="true"></i> Your feedback is confidential and only shared with the Ozland Care team.</p>
    <button type="submit" class="feedback-submit relative text-white font-bold px-9 py-4 rounded-2xl transition-all duration-300 hover:-translate-y-1 active:scale-95 flex items-center justify-center">
        <span>Submit Survey</span>
    </button>
</div>
CF7;
}

/**
 * Create or update the admin-editable CF7 feedback form once per schema version.
 */
function ozlandcare_provision_feedback_cf7_form()
{
	if (! class_exists('WPCF7_ContactForm')) {
		return 0;
	}

	$schema_version = '6';
	$contact_forms = WPCF7_ContactForm::find(array(
		'title'          => 'Feedback Form',
		'posts_per_page' => 1,
	));
	$contact_form = $contact_forms ? $contact_forms[0] : null;

	if (
		$contact_form
		&& $schema_version === get_option('ozlandcare_feedback_cf7_schema_version')
	) {
		return (int) $contact_form->id();
	}

	if (! $contact_form) {
		$contact_form = WPCF7_ContactForm::get_template(array(
			'title'  => 'Feedback Form',
			'locale' => get_locale(),
		));
	}

	$properties = $contact_form->get_properties();
	$mail = isset($properties['mail']) && is_array($properties['mail'])
		? $properties['mail']
		: array();

	$mail['active'] = true;
	$mail['subject'] = 'Participant Satisfactory Survey: [participant_name] ([overall_rating]/10)';
	$sender_domain = wp_parse_url(home_url('/'), PHP_URL_HOST);
	if (! $sender_domain || false === strpos($sender_domain, '.')) {
		$admin_email_parts = explode('@', 'dev@ausasiaonline.com.au');
		$sender_domain = end($admin_email_parts);
	}
	$mail['sender'] = sprintf(
		'[_site_title] <wordpress@%s>',
		sanitize_text_field($sender_domain)
	);
	$mail['recipient'] = 'dev@ausasiaonline.com.au';
	$mail['additional_headers'] = '';
	$mail['attachments'] = '';
	$mail['use_html'] = false;
	$mail['exclude_blank'] = true;

	$statement_lines = array();
	$number = 0;
	foreach (ozlandcare_feedback_statements() as $name => $statement) {
		$number++;
		$statement_lines[] = sprintf('%d. %s', $number, $statement);
		$statement_lines[] = sprintf('   Response: [%s]', $name);
	}

	$mail['body'] = implode("\n", array_merge(
		array(
			'A Participant Satisfactory Survey (NP FM-007.03) has been submitted through [_site_title].',
			'',
			'PARTICIPANT',
			'Full name: [participant_name]',
			'Date: [survey_date]',
			'',
			'STATEMENTS (No / Not sure / Yes)',
		),
		$statement_lines,
		array(
			'',
			'RATING OUT OF 10 (1-3 very poor, 4-7 average, 8-10 excellent)',
			'[overall_rating] / 10',
			'',
			'WHAT WAS GOOD ABOUT THE SUPPORT',
			'[what_was_good]',
			'',
			'WHAT COULD BE IMPROVED OR CHANGED',
			'[what_to_improve]',
			'',
			'OTHER COMMENTS (ISSUES, CONCERNS OR POSITIVE COMMENTS)',
			'[other_comments]',
			'',
			'OFFICE USE ONLY',
			'Survey feedback recorded in Compliments Register: Yes / No',
			'Survey feedback recorded in CI Register: Yes / No / N/A',
			'Employee name:',
			'Date:',
			'',
			'Submitted from: [_url]',
			'Submitted at: [_date] [_time]',
		)
	));

	$mail_2 = isset($properties['mail_2']) && is_array($properties['mail_2'])
		? $properties['mail_2']
		: array();
	$mail_2['active'] = false;

	$messages = isset($properties['messages']) && is_array($properties['messages'])
		? $properties['messages']
		: array();
	$messages['mail_sent_ok'] = 'Thank you for your time in completing this survey. Your feedback helps us improve our services.';
	$messages['validation_error'] = 'Some answers are missing or need checking. Please review the highlighted items and try again.';
	$messages['invalid_required'] = 'Please complete this field.';
	$messages['invalid_date'] = 'Enter a valid date.';

	$contact_form->set_title('Feedback Form');
	$contact_form->set_properties(array(
		'form'                => ozlandcare_feedback_cf7_template(),
		'mail'                => $mail,
		'mail_2'              => $mail_2,
		'messages'            => $messages,
		'additional_settings' => '',
	));

	$form_id = (int) $contact_form->save();
	if ($form_id) {
		update_option('ozlandcare_feedback_cf7_schema_version', $schema_version, false);
	}

	return $form_id;
}
add_action('init', 'ozlandcare_provision_feedback_cf7_form', 20);

/**
 * Render the configured form without hard-coding its database ID.
 */
function ozlandcare_render_feedback_cf7_form()
{
	if (! class_exists('WPCF7_ContactForm')) {
		return '';
	}

	$contact_form = function_exists('wpcf7_get_contact_form_by_title')
		? wpcf7_get_contact_form_by_title('Feedback Form')
		: null;

	if (! $contact_form) {
		return '';
	}

	$GLOBALS['ozlandcare_rendering_feedback_cf7'] = true;

	$html = $contact_form->form_html(array(
		'html_id'    => 'feedbackForm',
		'html_class' => 'feedback-cf7-form',
	));

	unset($GLOBALS['ozlandcare_rendering_feedback_cf7']);

	return $html;
}

/**
 * Keep the structured feedback markup free from CF7's automatic paragraph
 * and line-break insertion.
 */
function ozlandcare_feedback_cf7_disable_autop($autop, $options)
{
	$contact_form = WPCF7_ContactForm::get_current();

	if (
		'form' === ($options['for'] ?? 'form')
		&& (
			($contact_form && 'Feedback Form' === $contact_form->title())
			|| ! empty($GLOBALS['ozlandcare_rendering_feedback_cf7'])
		)
	) {
		return false;
	}

	return $autop;
}
add_filter('wpcf7_autop_or_not', 'ozlandcare_feedback_cf7_disable_autop', 20, 2);

/**
 * Server-side checks, so the rules hold even if the browser-side script is
 * bypassed.
 */
function ozlandcare_validate_feedback_cf7_field($result, $tag)
{
	$contact_form = WPCF7_ContactForm::get_current();
	if (! $contact_form || 'Feedback Form' !== $contact_form->title()) {
		return $result;
	}

	$name = $tag->name;
	$value = isset($_POST[$name]) && is_scalar($_POST[$name])
		? trim(wp_unslash($_POST[$name]))
		: '';

	// Letters, with single spaces, apostrophes or hyphens between name parts.
	$full_name_pattern = '/^[\p{L}\p{M}]+(?:[ \'\x{2019}-][\p{L}\p{M}]+)*$/u';

	if ('participant_name' === $name && $value && ! preg_match($full_name_pattern, $value)) {
		$result->invalidate($tag, 'Enter your full name using letters only.');
	}

	// A day of slack covers participants ahead of the site's timezone.
	if ('survey_date' === $name && $value && $value > wp_date('Y-m-d', time() + DAY_IN_SECONDS)) {
		$result->invalidate($tag, 'The date cannot be in the future.');
	}

	return $result;
}
add_filter('wpcf7_validate_text', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
add_filter('wpcf7_validate_text*', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
add_filter('wpcf7_validate_date', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
add_filter('wpcf7_validate_date*', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
