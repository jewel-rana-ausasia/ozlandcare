/**
 * Tailwind build config.
 *
 * Replaces the browser-side cdn.tailwindcss.com script, which downloaded
 * ~400 KB of JavaScript and compiled the CSS on every page view before the
 * layout could settle. Rebuild with `npm run build:tailwind` after adding or
 * changing Tailwind classes in the theme.
 *
 * tailwind/db-classes.txt lists the classes used in content stored in the
 * database (Contact Form 7 forms, page content), which the theme files do not
 * contain. Add any new ones there when a form is edited in wp-admin.
 *
 * @type {import('tailwindcss').Config}
 */
module.exports = {
	content: [
		'./*.php',
		'./inc/**/*.php',
		'./template-parts/**/*.php',
		'./js/**/*.js',
		'./tailwind/db-classes.txt',
	],
	theme: {
		extend: {
			colors: {
				primary: '#5f2a7d',
				primaryDark: '#4a2062',
				secondary: '#40b450',
				secondarySoft: '#d9f2b1',
				blue: '#0a74bb',
			},
			fontFamily: {
				sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
			},
		},
	},
	plugins: [],
};
