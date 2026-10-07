<?php

/**
 * Contact Form 7 configuration for the Feedback form.
 *
 * The form is provisioned once per schema version, then remains editable in
 * Contact > Contact Forms > Feedback Form in WordPress admin. It follows the
 * same structure, validation rules and messages as the Referral form.
 *
 * @package ozlandcare
 */

defined('ABSPATH') || exit;

/**
 * Return the Contact Form 7 markup for the feedback form.
 *
 * Every field is a real CF7 tag, so its value reaches the notification email.
 */
function ozlandcare_feedback_cf7_template()
{
	return <<<'CF7'
<div class="feedback-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <h3 class="feedback-panel-title text-lg font-bold text-slate-900 mb-5 flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm font-black">1</span>
        Your Details
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="group flex flex-col">
            <label for="feedback_first_name" class="feedback-label">First Name <span class="text-primary">*</span></label>
            [text* fname id:feedback_first_name class:feedback-input placeholder "Enter first name"]
        </div>
        <div class="group flex flex-col">
            <label for="feedback_surname" class="feedback-label">Surname <span class="text-primary">*</span></label>
            [text* lname id:feedback_surname class:feedback-input placeholder "Enter surname"]
        </div>
        <div class="group flex flex-col">
            <label for="feedback_phone" class="feedback-label">Mobile <span class="text-primary">*</span></label>
            [tel* cnumber id:feedback_phone class:feedback-input placeholder "0412345678"]
        </div>
        <div class="group flex flex-col">
            <label for="feedback_email" class="feedback-label">Email</label>
            [email femail id:feedback_email class:feedback-input placeholder "name@example.com"]
        </div>
        <div class="group flex flex-col md:col-span-2">
            <label for="feedback_address" class="feedback-label">Residential Address</label>
            [text raddress id:feedback_address class:feedback-input placeholder "Street, suburb, state, postcode"]
        </div>
    </div>
</div>

<div class="feedback-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <h3 class="feedback-panel-title text-lg font-bold text-slate-900 mb-5 flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm font-black">2</span>
        Your Experience
    </h3>
    <div class="grid grid-cols-1 gap-5">
        <div class="group flex flex-col">
            <label for="feedback_service_so_far" class="feedback-label">How have you found our service so far? <span class="text-primary">*</span></label>
            [textarea* servicesofar id:feedback_service_so_far rows:3 class:feedback-input placeholder "Tell us about your experience with Ozland Care..."]
        </div>
        <div class="group flex flex-col">
            <label for="feedback_like_most" class="feedback-label">What do you like most about our service?</label>
            [textarea aboutourservice id:feedback_like_most rows:3 class:feedback-input placeholder "What is working well for you..."]
        </div>
        <div class="group flex flex-col">
            <label for="feedback_improve" class="feedback-label">If there was anything we could improve on, what would it be?</label>
            [textarea whatwoulditbe id:feedback_improve rows:3 class:feedback-input placeholder "Your suggestions help us do better..."]
        </div>
    </div>
</div>

<div class="feedback-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <h3 class="feedback-panel-title text-lg font-bold text-slate-900 mb-2 flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm font-black">3</span>
        Rate Our Service
    </h3>
    <p class="feedback-rating-hint">1 = Poor &nbsp;&middot;&nbsp; 5 = Excellent</p>
    <div class="feedback-ratings">
        <div class="feedback-rating">
            <span class="feedback-label">Overall service <span class="text-primary">*</span></span>
            [radio rateoverall use_label_element class:feedback-scale "1" "2" "3" "4" "5"]
        </div>
        <div class="feedback-rating">
            <span class="feedback-label">Fairness &amp; equality <span class="text-primary">*</span></span>
            [radio beingfairandequal use_label_element class:feedback-scale "1" "2" "3" "4" "5"]
        </div>
        <div class="feedback-rating">
            <span class="feedback-label">Transparency <span class="text-primary">*</span></span>
            [radio beingtransparent use_label_element class:feedback-scale "1" "2" "3" "4" "5"]
        </div>
    </div>
</div>

<div class="feedback-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <h3 class="feedback-panel-title text-lg font-bold text-slate-900 mb-5 flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm font-black">4</span>
        Anything Else
    </h3>
    <div class="group flex flex-col">
        <label for="feedback_anything_else" class="feedback-label">Is there anything else you would like us to know?</label>
        [textarea likeustoknow id:feedback_anything_else rows:4 class:feedback-input placeholder "Anything else you would like to share..."]
    </div>
</div>

<div class="feedback-actions">
    <p class="feedback-privacy"><i class="fas fa-lock"></i> Your feedback is confidential and only shared with the Ozland Care team.</p>
    <button type="submit" class="feedback-submit relative text-white font-bold px-9 py-4 rounded-2xl transition-all duration-300 hover:-translate-y-1 active:scale-95 flex items-center justify-center">
        <span>Submit Feedback</span>
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

	$schema_version = '4';
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
	$mail['subject'] = 'New feedback: [fname] [lname]';
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
	$mail['additional_headers'] = 'Reply-To: [femail]';
	$mail['attachments'] = '';
	$mail['use_html'] = false;
	$mail['exclude_blank'] = true;
	$mail['body'] = implode("\n", array(
		'New feedback has been submitted through [_site_title].',
		'',
		'YOUR DETAILS',
		'Name: [fname] [lname]',
		'Mobile: [cnumber]',
		'Email: [femail]',
		'Residential address: [raddress]',
		'',
		'YOUR EXPERIENCE',
		'How have you found our service so far?',
		'[servicesofar]',
		'',
		'What do you like most about our service?',
		'[aboutourservice]',
		'',
		'If there was anything we could improve on, what would it be?',
		'[whatwoulditbe]',
		'',
		'RATINGS (1 = Poor, 5 = Excellent)',
		'Overall service: [rateoverall] / 5',
		'Fairness & equality: [beingfairandequal] / 5',
		'Transparency: [beingtransparent] / 5',
		'',
		'ANYTHING ELSE',
		'[likeustoknow]',
		'',
		'Submitted from: [_url]',
		'Submitted at: [_date] [_time]',
	));

	$mail_2 = isset($properties['mail_2']) && is_array($properties['mail_2'])
		? $properties['mail_2']
		: array();
	$mail_2['active'] = false;

	$messages = isset($properties['messages']) && is_array($properties['messages'])
		? $properties['messages']
		: array();
	$messages['mail_sent_ok'] = 'Thank you for submitting your feedback. A member of our team will be in touch soon.';
	$messages['validation_error'] = 'One or more fields have an error. Please check and try again.';
	$messages['invalid_required'] = 'Please fill out this field.';
	$messages['invalid_email'] = 'Enter a complete email address such as name@example.com.';
	$messages['invalid_tel'] = 'Enter a 10-digit Australian mobile number starting with 04.';

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
 * Apply the same server-side rules as the Referral and Contact Us forms, so
 * the checks hold even if the browser-side script is bypassed.
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
	$single_name_pattern = '/^[\p{L}\p{M}]+(?:[\'\x{2019}-][\p{L}\p{M}]+)*$/u';

	if ('fname' === $name && $value && ! preg_match($single_name_pattern, $value)) {
		$result->invalidate($tag, 'Enter one first name without spaces.');
	}

	if ('lname' === $name && $value && ! preg_match($single_name_pattern, $value)) {
		$result->invalidate($tag, 'Enter one surname without spaces.');
	}

	if ('cnumber' === $name && $value && ! preg_match('/^04\d{8}$/', $value)) {
		$result->invalidate($tag, 'Enter a 10-digit Australian mobile number starting with 04.');
	}

	if ('femail' === $name && $value && ! preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/', $value)) {
		$result->invalidate($tag, 'Enter a complete email address such as name@example.com.');
	}

	return $result;
}
add_filter('wpcf7_validate_text', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
add_filter('wpcf7_validate_text*', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
add_filter('wpcf7_validate_tel', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
add_filter('wpcf7_validate_tel*', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
add_filter('wpcf7_validate_email', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
add_filter('wpcf7_validate_email*', 'ozlandcare_validate_feedback_cf7_field', 20, 2);
