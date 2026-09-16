<?php

/**
 * Contact Form 7 configuration for the Feedback form.
 *
 * @package ozlandcare
 */

defined('ABSPATH') || exit;

/**
 * Apply versioned message updates to the saved Feedback form.
 */
function ozlandcare_provision_feedback_cf7_form()
{
	if (! class_exists('WPCF7_ContactForm')) {
		return 0;
	}

	$schema_version = '1';
	$contact_forms = WPCF7_ContactForm::find(array(
		'title'          => 'Feedback Form',
		'posts_per_page' => 1,
	));
	$contact_form = $contact_forms ? $contact_forms[0] : null;

	if (! $contact_form) {
		return 0;
	}

	if ($schema_version === get_option('ozlandcare_feedback_cf7_schema_version')) {
		return (int) $contact_form->id();
	}

	$properties = $contact_form->get_properties();
	$messages = isset($properties['messages']) && is_array($properties['messages'])
		? $properties['messages']
		: array();
	$messages['mail_sent_ok'] = 'Thank you for submitting your feedback. A member of our team will be in touch soon.';
	$properties['messages'] = $messages;

	$contact_form->set_properties($properties);
	$form_id = (int) $contact_form->save();

	if ($form_id) {
		update_option('ozlandcare_feedback_cf7_schema_version', $schema_version, false);
	}

	return $form_id;
}
add_action('init', 'ozlandcare_provision_feedback_cf7_form', 20);
