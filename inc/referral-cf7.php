<?php

/**
 * Contact Form 7 configuration for the Client Referral form.
 *
 * The form is provisioned once, then remains fully editable in
 * Contact > Contact Forms > Referral in WordPress admin.
 *
 * @package ozlandcare
 */

defined('ABSPATH') || exit;

/**
 * Return the Contact Form 7 markup for the referral form.
 */
function ozlandcare_referral_cf7_template()
{
	return <<<'CF7'
<div class="referral-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <span class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-4 block">Referral Type</span>
    [radio enquiry_type use_label_element default:1 class:referral-choice-group "Enquiry" "New Client" "Previous Client" "Existing Client"]
</div>

<div class="referral-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <h3 class="text-lg font-bold text-slate-900 mb-5 flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm font-black">1</span>
        Client Information
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="group flex flex-col">
            <label for="client_name" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Client Name <span class="text-primary">*</span></label>
            [text* client_name id:client_name class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Enter first name"]
        </div>
        <div class="group flex flex-col">
            <label for="client_surname" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Surname <span class="text-primary">*</span></label>
            [text* client_surname id:client_surname class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Enter surname"]
        </div>
        <div class="group flex flex-col">
            <label for="client_dob" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Date of Birth</label>
            [date client_dob id:client_dob class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all]
        </div>
        <div class="group flex flex-col">
            <label for="client_address" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Address</label>
            [text client_address id:client_address class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Street, suburb, state, postcode"]
        </div>
        <div class="group flex flex-col">
            <label for="client_phone" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Mobile <span class="text-primary">*</span></label>
            [tel* client_phone id:client_phone class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Mobile"]
        </div>
        <div class="group flex flex-col">
            <label for="client_email" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Email <span class="text-primary">*</span></label>
            [email* client_email id:client_email class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Enter email address"]
        </div>
        <div class="group flex flex-col md:col-span-2">
            <label for="present_situation" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Present Situation <span class="text-primary">*</span></label>
            [textarea* present_situation id:present_situation rows:3 class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-4 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all class:resize-none placeholder "Describe the client's current situation..."]
        </div>
        <div class="group flex flex-col md:col-span-2">
            <label for="identified_needs" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Specific Requirements/Preferences <span class="text-primary">*</span></label>
            [textarea* identified_needs id:identified_needs rows:3 class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-4 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all class:resize-none placeholder "(interests, physical/cultural/belief-based requirements including any worker preferences)"]
        </div>
        <div class="group flex flex-col md:col-span-2">
            <label for="risk_behaviours" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Identified Risks &amp; Behaviours of Concern <span class="text-primary">*</span></label>
            [textarea* risk_behaviours id:risk_behaviours rows:3 class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-4 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all class:resize-none placeholder "(e.g. lifting, medication, mental issues, dietary, swallowing)"]
        </div>
        <div class="group flex flex-col md:col-span-2">
            <label for="risk_management" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Risk Management Plan (if behaviours of concern) <span class="text-primary">*</span></label>
            [textarea* risk_management id:risk_management rows:3 class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-4 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all class:resize-none placeholder "Describe strategies currently in place..."]
        </div>
    </div>
</div>

<div class="referral-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <h3 class="text-lg font-bold text-slate-900 mb-5 flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm font-black">2</span>
        Referrer Information
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="group flex flex-col">
            <label for="referrer_name" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Name <span class="text-primary">*</span></label>
            [text* referrer_name id:referrer_name class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Enter first name"]
        </div>
        <div class="group flex flex-col">
            <label for="referrer_surname" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Surname <span class="text-primary">*</span></label>
            [text* referrer_surname id:referrer_surname class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Enter surname"]
        </div>
        <div class="group flex flex-col">
            <label for="referrer_position" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Position <span class="text-primary">*</span></label>
            [text* referrer_position id:referrer_position class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "e.g. Support Coordinator"]
        </div>
        <div class="group flex flex-col">
            <label for="referrer_org" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Organisation <span class="text-primary">*</span></label>
            [text* referrer_org id:referrer_org class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Organisation name"]
        </div>
        <div class="group flex flex-col md:col-span-2">
            <label for="referrer_contact" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Contact Details <span class="text-primary">*</span></label>
            [text* referrer_contact id:referrer_contact class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Email address or Australian mobile"]
        </div>
        <div class="group flex flex-col md:col-span-2">
            <label for="referral_reason" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Referral Reason <span class="text-primary">*</span></label>
            [textarea* referral_reason id:referral_reason rows:3 class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-4 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all class:resize-none placeholder "Why is this referral being made..."]
        </div>
    </div>
</div>

<div class="referral-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <h3 class="text-lg font-bold text-slate-900 mb-5 flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm font-black">3</span>
        Further Client Details
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="group flex flex-col">
            <label for="country_of_birth" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Country of Birth</label>
            [text country_of_birth id:country_of_birth class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Enter country"]
        </div>
        <div class="group flex flex-col">
            <label for="preferred_language" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Preferred Language</label>
            [text preferred_language id:preferred_language class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Enter language"]
        </div>
        <div class="flex flex-col">
            <span class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1">Aboriginal or Torres Strait Islander?</span>
            [checkbox atsi use_label_element exclusive class:referral-yesno "Yes" "No"]
        </div>
        <div class="flex flex-col">
            <span class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1">Interpreter Required?</span>
            [checkbox interpreter use_label_element exclusive class:referral-yesno "Yes" "No"]
        </div>
        <div class="group flex flex-col md:col-span-2">
            <label for="other_support" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Other Support Required</label>
            [textarea other_support id:other_support rows:2 class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-4 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all class:resize-none placeholder "Any additional support requirements..."]
        </div>
    </div>
</div>

<div class="referral-panel rounded-2xl border border-slate-100 bg-white p-5 md:p-7">
    <h3 class="text-lg font-bold text-slate-900 mb-5 flex items-center gap-3">
        <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm font-black">4</span>
        Additional Notes
    </h3>
    <div class="grid grid-cols-1 gap-5">
        <div class="group flex flex-col">
            <label for="notes" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Additional Notes</label>
            [textarea notes id:notes rows:4 class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-4 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all class:resize-none placeholder "Anything else we should know..."]
        </div>
    </div>
</div>

<div class="referral-panel bg-gradient-to-br from-slate-50 to-white rounded-2xl p-6 md:p-8 border border-slate-200">
    <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-3">
        <i class="fas fa-shield-halved text-primary"></i>
        Client / Guardian Declaration
    </h3>
    [acceptance consent class:referral-consent] I consent to my information being provided to Ozland Care for the purposes of referral, service delivery and inclusion in de-identified data reporting. <span class="text-primary">*</span> [/acceptance]
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="group flex flex-col">
            <label for="declaration_name" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Full Name (Client / Guardian) <span class="text-primary">*</span></label>
            [text* declaration_name id:declaration_name class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all placeholder "Type full name as signature"]
        </div>
        <div class="group flex flex-col">
            <label for="declaration_date" class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Date <span class="text-primary">*</span></label>
            [date* declaration_date id:declaration_date class:referral-input class:bg-slate-50 class:border class:border-slate-200 class:rounded-xl class:px-5 class:py-3.5 class:focus:outline-none class:focus:border-blue class:focus:bg-white class:focus:ring-4 class:focus:ring-blue/10 class:transition-all]
        </div>
    </div>
    <p class="text-xs text-slate-400 mt-4">Typing your full name above acts as your electronic signature for this referral.</p>
</div>

<div class="flex justify-end">
    <button type="submit" class="referral-submit relative text-white font-bold px-9 py-4 rounded-2xl transition-all duration-300 hover:-translate-y-1 active:scale-95 flex items-center justify-center">
        <span>Submit Referral</span>
    </button>
</div>
CF7;
}

/**
 * Create or update the admin-editable CF7 referral form once per schema version.
 */
function ozlandcare_provision_referral_cf7_form()
{
	if (! class_exists('WPCF7_ContactForm')) {
		return 0;
	}

	$schema_version = '12';
	$contact_forms = WPCF7_ContactForm::find(array(
		'title'          => 'Referral',
		'posts_per_page' => 1,
	));
	$contact_form = $contact_forms ? $contact_forms[0] : null;

	if (
		$contact_form
		&& $schema_version === get_option('ozlandcare_referral_cf7_schema_version')
	) {
		return (int) $contact_form->id();
	}

	if (! $contact_form) {
		$contact_form = WPCF7_ContactForm::get_template(array(
			'title'  => 'Referral',
			'locale' => get_locale(),
		));
	}

	$properties = $contact_form->get_properties();
	$mail = isset($properties['mail']) && is_array($properties['mail'])
		? $properties['mail']
		: array();

	$mail['active'] = true;
	$mail['subject'] = 'New client referral: [client_name]';
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
	$mail['body'] = implode("\n", array(
		'A new referral has been submitted through [_site_title].',
		'',
		'REFERRAL TYPE',
		'[enquiry_type]',
		'',
		'CLIENT INFORMATION',
		'Name: [client_name]',
		'Surname: [client_surname]',
		'Date of birth: [client_dob]',
		'Address: [client_address]',
		'Mobile: [client_phone]',
		'Email: [client_email]',
		'Present situation: [present_situation]',
		'Specific requirements/preferences: [identified_needs]',
		'Risks / behaviours of concern: [risk_behaviours]',
		'Risk management plan: [risk_management]',
		'',
		'REFERRER INFORMATION',
		'Name: [referrer_name]',
		'Surname: [referrer_surname]',
		'Position: [referrer_position]',
		'Organisation: [referrer_org]',
		'Contact details: [referrer_contact]',
		'Referral reason: [referral_reason]',
		'',
		'FURTHER CLIENT DETAILS',
		'Country of birth: [country_of_birth]',
		'Preferred language: [preferred_language]',
		'Aboriginal or Torres Strait Islander: [atsi]',
		'Interpreter required: [interpreter]',
		'Other support required: [other_support]',
		'',
		'ADDITIONAL NOTES',
		'[notes]',
		'',
		'DECLARATION',
		'Consent: [consent]',
		'Name: [declaration_name]',
		'Date: [declaration_date]',
		'',
		'Submitted from: [_url]',
		'Submitted at: [_date] [_time]',
	));

	$messages = isset($properties['messages']) && is_array($properties['messages'])
		? $properties['messages']
		: array();
	$messages['mail_sent_ok'] = 'Thank you for submitting your referral. A member of our team will be in touch soon.';

	$contact_form->set_title('Referral');
	$contact_form->set_properties(array(
		'form'                => ozlandcare_referral_cf7_template(),
		'mail'                => $mail,
		'messages'            => $messages,
		'additional_settings' => '',
	));

	$form_id = (int) $contact_form->save();
	if ($form_id) {
		update_option('ozlandcare_referral_cf7_schema_version', $schema_version, false);
	}

	return $form_id;
}
add_action('init', 'ozlandcare_provision_referral_cf7_form', 20);

/**
 * Render the configured form without hard-coding its database ID.
 */
function ozlandcare_render_referral_cf7_form()
{
	if (! class_exists('WPCF7_ContactForm')) {
		return '';
	}

	$contact_form = function_exists('wpcf7_get_contact_form_by_title')
		? wpcf7_get_contact_form_by_title('Referral')
		: null;

	if (! $contact_form) {
		return '';
	}

	$GLOBALS['ozlandcare_rendering_referral_cf7'] = true;

	$html = $contact_form->form_html(array(
		'html_id'    => 'referralForm',
		'html_class' => 'referral-cf7-form',
	));

	unset($GLOBALS['ozlandcare_rendering_referral_cf7']);

	return $html;
}

/**
 * Keep the carefully structured referral markup free from CF7's automatic
 * paragraph and line-break insertion.
 */
function ozlandcare_referral_cf7_disable_autop($autop, $options)
{
	$contact_form = WPCF7_ContactForm::get_current();

	if (
		'form' === ($options['for'] ?? 'form')
		&& (
			($contact_form && 'Referral' === $contact_form->title())
			|| ! empty($GLOBALS['ozlandcare_rendering_referral_cf7'])
			|| is_page_template('page-referral.php')
		)
	) {
		return false;
	}

	return $autop;
}
add_filter('wpcf7_autop_or_not', 'ozlandcare_referral_cf7_disable_autop', 20, 2);

/**
 * Preserve the page's stricter validation when CF7 validates server-side.
 */
function ozlandcare_validate_referral_cf7_field($result, $tag)
{
	$contact_form = WPCF7_ContactForm::get_current();
	if (! $contact_form || 'Referral' !== $contact_form->title()) {
		return $result;
	}

	$name = $tag->name;
	$value = isset($_POST[$name]) && is_scalar($_POST[$name])
		? trim(wp_unslash($_POST[$name]))
		: '';

	if (
		in_array($name, array('client_name', 'referrer_name'), true)
		&& $value
		&& ! preg_match('/^[\p{L}\p{M}]+(?:[\'\x{2019}-][\p{L}\p{M}]+)*$/u', $value)
	) {
		$result->invalidate($tag, 'Enter one first name without spaces.');
	}

	if (
		'declaration_name' === $name
		&& $value
		&& ! preg_match('/^\S+(?:\s+\S+)*$/u', $value)
	) {
		$result->invalidate($tag, 'Please enter a valid name.');
	}

	if (
		in_array($name, array('client_surname', 'referrer_surname'), true)
		&& $value
		&& ! preg_match('/^[\p{L}\p{M}]+(?:[\'\x{2019}-][\p{L}\p{M}]+)*$/u', $value)
	) {
		$result->invalidate($tag, 'Enter one surname without spaces.');
	}

	if ('client_phone' === $name && $value && ! preg_match('/^04\d{8}$/', $value)) {
		$result->invalidate($tag, 'Enter a 10-digit Australian mobile number starting with 04.');
	}

	if (
		'referrer_contact' === $name
		&& $value
		&& ! preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/', $value)
		&& ! preg_match('/^04\d{8}$/', $value)
	) {
		$result->invalidate($tag, 'Enter a valid email address or a 10-digit Australian mobile number starting with 04 (e.g. 0412345678).');
	}

	if ('declaration_date' === $name && $value !== current_time('Y-m-d')) {
		$result->invalidate($tag, 'The declaration date must be today.');
	}

	return $result;
}
add_filter('wpcf7_validate_text', 'ozlandcare_validate_referral_cf7_field', 20, 2);
add_filter('wpcf7_validate_text*', 'ozlandcare_validate_referral_cf7_field', 20, 2);
add_filter('wpcf7_validate_tel', 'ozlandcare_validate_referral_cf7_field', 20, 2);
add_filter('wpcf7_validate_tel*', 'ozlandcare_validate_referral_cf7_field', 20, 2);
add_filter('wpcf7_validate_date', 'ozlandcare_validate_referral_cf7_field', 20, 2);
add_filter('wpcf7_validate_date*', 'ozlandcare_validate_referral_cf7_field', 20, 2);
