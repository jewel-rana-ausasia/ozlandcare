<?php

/**
 * Site-wide contact details and social links, editable in
 * Appearance > Customize > Contact & Social.
 *
 * Every template reads these through the helpers below instead of hard-coding
 * the phone number, email, address or social URLs, so one change in the
 * Customizer updates the header, footer, Contact Us page, CTAs, blog sidebar
 * and service pages together. Defaults are the details the site launched
 * with, so nothing changes until a value is edited.
 *
 * @package ozlandcare
 */

defined('ABSPATH') || exit;

/**
 * Default value for each contact setting.
 */
function ozlandcare_contact_defaults()
{
	return array(
		'phone'         => '1300 951 223',
		'email'         => 'admin@ozlandcare.com.au',
		'address'       => "Suite 101, Level 14, 3 Parramatta Square\n153 Macquarie St, Parramatta NSW 2150\nPO Box 1001, Green Valley NSW 2168",
		'map_url'       => 'https://share.google/x057P0vkYzs1N8xva',
		'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3932.088083646574!2d151.0051514!3d-33.8157505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12952eab3543f3%3A0x4861d417509fc72c!2sOzland%20Care!5e1!3m2!1sen!2sbd!4v1772598650253!5m2!1sen!2sbd',
		'abn'           => '12 345 678 901',
		'facebook'      => '#',
		'instagram'     => '#',
		'linkedin'      => '',
		'youtube'       => '',
		'x'             => '',
		'tiktok'        => '',
	);
}

/**
 * Social networks the theme can show, in display order. Brand colours match
 * the original Facebook / Instagram buttons in the header and footer.
 */
function ozlandcare_social_networks()
{
	return array(
		'facebook'  => array('label' => 'Facebook', 'icon' => 'fab fa-facebook-f', 'bg' => 'bg-[#1877F2] border-[#1877F2]', 'hover' => 'hover:bg-[#166FE5]'),
		'instagram' => array('label' => 'Instagram', 'icon' => 'fab fa-instagram', 'bg' => 'bg-[#E4405F] border-[#E4405F]', 'hover' => 'hover:bg-[#D93250]'),
		'linkedin'  => array('label' => 'LinkedIn', 'icon' => 'fab fa-linkedin-in', 'bg' => 'bg-[#0A66C2] border-[#0A66C2]', 'hover' => 'hover:bg-[#004182]'),
		'youtube'   => array('label' => 'YouTube', 'icon' => 'fab fa-youtube', 'bg' => 'bg-[#FF0000] border-[#FF0000]', 'hover' => 'hover:bg-[#CC0000]'),
		'x'         => array('label' => 'X (Twitter)', 'icon' => 'fab fa-x-twitter', 'bg' => 'bg-[#000000] border-[#000000]', 'hover' => 'hover:bg-[#333333]'),
		'tiktok'    => array('label' => 'TikTok', 'icon' => 'fab fa-tiktok', 'bg' => 'bg-[#010101] border-[#010101]', 'hover' => 'hover:bg-[#333333]'),
	);
}

/**
 * Read one contact setting, falling back to its default.
 */
function ozlandcare_contact($key)
{
	$defaults = ozlandcare_contact_defaults();
	$default = isset($defaults[$key]) ? $defaults[$key] : '';

	return trim((string) get_theme_mod('ozlandcare_contact_' . $key, $default));
}

/** Phone number as displayed, e.g. "1300 951 223". */
function ozlandcare_phone()
{
	return ozlandcare_contact('phone');
}

/** tel: link for the phone number (digits and a leading + only). */
function ozlandcare_phone_href()
{
	return 'tel:' . preg_replace('/[^\d+]/', '', ozlandcare_phone());
}

/** Email address. */
function ozlandcare_email()
{
	return sanitize_email(ozlandcare_contact('email'));
}

/** mailto: link for the email address. */
function ozlandcare_email_href()
{
	return 'mailto:' . ozlandcare_email();
}

/** Address as an array of non-empty lines. */
function ozlandcare_address_lines()
{
	$lines = preg_split('/\r\n|\r|\n/', ozlandcare_contact('address'));

	return array_values(array_filter(array_map('trim', $lines), 'strlen'));
}

/** Address lines joined with <br> for inline display (escaped). */
function ozlandcare_address_html($separator = '<br>')
{
	return implode($separator, array_map('esc_html', ozlandcare_address_lines()));
}

/**
 * Social links that have a URL set, each with its label, icon and colours.
 */
function ozlandcare_social_links()
{
	$links = array();

	foreach (ozlandcare_social_networks() as $key => $network) {
		$url = ozlandcare_contact($key);
		if ('' !== $url) {
			$links[$key] = $network + array('url' => $url);
		}
	}

	return $links;
}

/**
 * Print the round social buttons used in the header and footer.
 *
 * @param string $size_classes Box size classes, e.g. 'w-6 h-6'.
 * @param string $icon_classes Icon size classes, e.g. 'text-xs'.
 */
function ozlandcare_render_social_links($size_classes = 'w-8 h-8', $icon_classes = 'text-sm')
{
	foreach (ozlandcare_social_links() as $link) {
		$is_external = 0 === strpos($link['url'], 'http');
		printf(
			'<a href="%1$s" aria-label="%2$s"%3$s class="%4$s flex items-center justify-center rounded-full %5$s %6$s transition-all border"><i class="%7$s %8$s" aria-hidden="true"></i></a>',
			esc_url($link['url']),
			esc_attr($link['label']),
			$is_external ? ' target="_blank" rel="noopener noreferrer"' : '',
			esc_attr($size_classes),
			esc_attr($link['bg']),
			esc_attr($link['hover']),
			esc_attr($link['icon']),
			esc_attr($icon_classes)
		);
	}
}

/**
 * [ozlandcare_contact field="phone|email|address|abn"] - the same Customizer
 * values for content managed in WordPress admin (widgets, pages, posts).
 * Phone and email are output as tap-to-call / tap-to-email links.
 */
function ozlandcare_contact_shortcode($atts)
{
	$atts = shortcode_atts(array('field' => 'phone'), $atts, 'ozlandcare_contact');

	switch ($atts['field']) {
		case 'phone':
			return sprintf('<a href="%s">%s</a>', esc_url(ozlandcare_phone_href()), esc_html(ozlandcare_phone()));
		case 'email':
			return sprintf('<a href="%s">%s</a>', esc_url(ozlandcare_email_href()), esc_html(ozlandcare_email()));
		case 'address':
			return ozlandcare_address_html(', ');
		case 'abn':
			return esc_html(ozlandcare_contact('abn'));
	}

	return '';
}
add_shortcode('ozlandcare_contact', 'ozlandcare_contact_shortcode');

/**
 * Sanitise a social URL: a full URL, or '#' as a placeholder.
 */
function ozlandcare_sanitize_social_url($value)
{
	$value = trim((string) $value);

	return '#' === $value ? '#' : esc_url_raw($value);
}

/**
 * Register the Contact & Social section in the Customizer.
 */
function ozlandcare_register_contact_customizer($wp_customize)
{
	$defaults = ozlandcare_contact_defaults();

	$wp_customize->add_section('ozlandcare_contact', array(
		'title'       => __('Contact & Social', 'ozlandcare'),
		'description' => __('Used in the header, footer, Contact Us page, call-to-action sections, blog sidebar and service pages. Leave a social link empty to hide its icon.', 'ozlandcare'),
		'priority'    => 30,
	));

	$fields = array(
		'phone'         => array('label' => __('Phone number', 'ozlandcare'), 'type' => 'text', 'sanitize' => 'sanitize_text_field', 'description' => __('Shown as typed. The call link uses the digits only.', 'ozlandcare')),
		'email'         => array('label' => __('Email address', 'ozlandcare'), 'type' => 'email', 'sanitize' => 'sanitize_email'),
		'address'       => array('label' => __('Address', 'ozlandcare'), 'type' => 'textarea', 'sanitize' => 'sanitize_textarea_field', 'description' => __('One line per row (e.g. street, suburb, PO Box).', 'ozlandcare')),
		'map_url'       => array('label' => __('Google Maps link', 'ozlandcare'), 'type' => 'url', 'sanitize' => 'esc_url_raw', 'description' => __('Opened when the address is clicked.', 'ozlandcare')),
		'map_embed_url' => array('label' => __('Google Maps embed URL', 'ozlandcare'), 'type' => 'url', 'sanitize' => 'esc_url_raw', 'description' => __('The src="..." value from Google Maps > Share > Embed a map. Shown on the Contact Us page.', 'ozlandcare')),
		'abn'           => array('label' => __('ABN', 'ozlandcare'), 'type' => 'text', 'sanitize' => 'sanitize_text_field', 'description' => __('Leave empty to hide it in the footer.', 'ozlandcare')),
	);

	foreach (ozlandcare_social_networks() as $key => $network) {
		$fields[$key] = array(
			/* translators: %s: social network name */
			'label'    => sprintf(__('%s URL', 'ozlandcare'), $network['label']),
			'type'     => 'url',
			'sanitize' => 'ozlandcare_sanitize_social_url',
		);
	}

	foreach ($fields as $key => $field) {
		$setting_id = 'ozlandcare_contact_' . $key;

		$wp_customize->add_setting($setting_id, array(
			'default'           => $defaults[$key],
			'sanitize_callback' => $field['sanitize'],
			'transport'         => 'refresh',
		));

		$wp_customize->add_control($setting_id, array(
			'label'       => $field['label'],
			'description' => isset($field['description']) ? $field['description'] : '',
			'section'     => 'ozlandcare_contact',
			'type'        => $field['type'],
		));
	}
}
add_action('customize_register', 'ozlandcare_register_contact_customizer');
