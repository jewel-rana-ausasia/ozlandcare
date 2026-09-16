<?php

/**
 * Contact Form 7 configuration for the Contact Us form.
 *
 * @package ozlandcare
 */

defined('ABSPATH') || exit;

/**
 * Return the Contact Us form markup.
 */
function ozlandcare_contact_cf7_template()
{
	return <<<'CF7'
<div id="contactForm" class="oz-contact-form flex flex-col gap-8 h-full">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="group flex flex-col">
            <label class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Client Name</label>
            [text* your-name id:contactName class:oz-contact-input placeholder "Enter first name"]
        </div>

        <div class="group flex flex-col">
            <label class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Surname</label>
            [text* your-surname id:contactSurname class:oz-contact-input placeholder "Enter surname"]
        </div>

        <div class="group flex flex-col">
            <label class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Phone Number</label>
            [tel* your-phone id:contactPhone class:oz-contact-input placeholder "0412345678"]
        </div>

        <div class="group flex flex-col">
            <label class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Your Email</label>
            [email* your-email id:contactEmail class:oz-contact-input placeholder "name@example.com"]
        </div>

        <div class="group flex flex-col md:col-span-2">
            <label class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Your Subject</label>
            [text* your-subject id:contactSubject class:oz-contact-input placeholder "How can we help?"]
        </div>
    </div>

    <div class="group flex flex-col flex-1">
        <label class="text-xs font-bold uppercase tracking-widest text-slate-900 mb-2 ml-1 group-focus-within:text-blue transition-colors">Message</label>
        [textarea* your-message id:contactMessage class:oz-contact-textarea placeholder "Write your message here..."]
    </div>

    <div class="flex justify-start">
        <button type="submit" class="oz-contact-submit group relative bg-primary text-white font-bold px-8 py-4 rounded-2xl hover:bg-[#0a74bb] transition-all duration-300 shadow-lg hover:shadow-blue/10 hover:-translate-y-1 active:scale-95 inline-flex items-center gap-3">
            <span>Send Message</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </button>
    </div>
</div>
CF7;
}

/**
 * Apply versioned Contact Us form updates to the saved CF7 record.
 */
function ozlandcare_provision_contact_cf7_form()
{
	if (! class_exists('WPCF7_ContactForm')) {
		return 0;
	}

	$schema_version = '2';
	$contact_forms = WPCF7_ContactForm::find(array(
		'title'          => 'Contact Us',
		'posts_per_page' => 1,
	));
	$contact_form = $contact_forms ? $contact_forms[0] : null;

	if (! $contact_form) {
		return 0;
	}

	if ($schema_version === get_option('ozlandcare_contact_cf7_schema_version')) {
		return (int) $contact_form->id();
	}

	$properties = $contact_form->get_properties();
	$mail = isset($properties['mail']) && is_array($properties['mail'])
		? $properties['mail']
		: array();

	if (! empty($mail['body'])) {
		$mail['body'] = str_replace(
			'From: [your-name] [your-email]',
			'From: [your-name] [your-surname] [your-email]',
			$mail['body']
		);
	}

	$properties['form'] = ozlandcare_contact_cf7_template();
	$properties['mail'] = $mail;
	$contact_form->set_properties($properties);
	$form_id = (int) $contact_form->save();

	if ($form_id) {
		update_option('ozlandcare_contact_cf7_schema_version', $schema_version, false);
	}

	return $form_id;
}
add_action('init', 'ozlandcare_provision_contact_cf7_form', 20);

/**
 * Require the Contact Us first-name and surname fields to contain one name.
 *
 * Hyphens and apostrophes are supported, but whitespace and other characters
 * that would turn the value into multiple words are rejected.
 */
function ozlandcare_validate_contact_name_fields($result, $tag)
{
	$contact_form = WPCF7_ContactForm::get_current();

	if (
		! $contact_form
		|| 'Contact Us' !== $contact_form->title()
		|| ! in_array($tag->name, array('your-name', 'your-surname'), true)
	) {
		return $result;
	}

	$value = isset($_POST[$tag->name]) && is_scalar($_POST[$tag->name])
		? trim(wp_unslash($_POST[$tag->name]))
		: '';

	if ($value && ! preg_match('/^[\p{L}\p{M}]+(?:[\'\x{2019}-][\p{L}\p{M}]+)*$/u', $value)) {
		$message = 'your-name' === $tag->name
			? 'Enter one first name without spaces.'
			: 'Enter one surname without spaces.';

		$result->invalidate($tag, $message);
	}

	return $result;
}
add_filter('wpcf7_validate_text', 'ozlandcare_validate_contact_name_fields', 20, 2);
add_filter('wpcf7_validate_text*', 'ozlandcare_validate_contact_name_fields', 20, 2);
