<?php

/**
 * 404 - page not found.
 *
 * Light, on-brand page that helps people get back on track: a clear message,
 * a site search, links to the most-used pages and a phone number (from
 * Appearance > Customize > Contact & Social). No banner is shown here; see
 * header.php. Styles are plain CSS scoped to .oz-404 so the layout is correct
 * at first paint, before the Tailwind CDN script has built its utilities.
 *
 * @package ozlandcare
 */

get_header();

$oz404_links = array(
	array(
		'icon'  => 'fas fa-hand-holding-heart',
		'title' => __('Our Services', 'ozlandcare'),
		'text'  => __('Explore the NDIS supports we provide.', 'ozlandcare'),
		'url'   => home_url('/our-services/'),
	),
	array(
		'icon'  => 'fas fa-file-signature',
		'title' => __('Make a Referral', 'ozlandcare'),
		'text'  => __('Refer yourself or someone you support.', 'ozlandcare'),
		'url'   => home_url('/referral/'),
	),
	array(
		'icon'  => 'fas fa-circle-info',
		'title' => __('NDIS Information', 'ozlandcare'),
		'text'  => __('Plain-language answers about the NDIS.', 'ozlandcare'),
		'url'   => home_url('/ndis-information/'),
	),
	array(
		'icon'  => 'fas fa-envelope-open-text',
		'title' => __('Contact Us', 'ozlandcare'),
		'text'  => __('Send us a message and we will be in touch.', 'ozlandcare'),
		'url'   => home_url('/contact-us/'),
	),
);
?>

<style>
	.oz-404 {
		--oz-purple: #5f2a7d;
		--oz-purple-soft: rgba(95, 42, 125, 0.08);
		--oz-blue: #0a74bb;
		--oz-ink: #0f172a;
		--oz-text: #334155;
		--oz-line: #e2e8f0;
		position: relative;
		overflow: hidden;
		padding: clamp(3.5rem, 2rem + 6vw, 7rem) 0 clamp(4rem, 2.5rem + 6vw, 7.5rem);
		background:
			radial-gradient(circle at 12% 18%, rgba(10, 116, 187, 0.09), transparent 34%),
			radial-gradient(circle at 88% 12%, rgba(95, 42, 125, 0.10), transparent 32%),
			linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
		color: var(--oz-text);
	}

	/* Soft dot grid for texture */
	.oz-404::before {
		content: "";
		position: absolute;
		inset: 0;
		background-image: radial-gradient(rgba(15, 23, 42, 0.06) 1px, transparent 1px);
		background-size: 28px 28px;
		mask-image: radial-gradient(ellipse at center, #000 30%, transparent 75%);
		-webkit-mask-image: radial-gradient(ellipse at center, #000 30%, transparent 75%);
		pointer-events: none;
	}

	.oz-404__inner {
		position: relative;
		z-index: 1;
		width: 100%;
		max-width: 72rem;
		margin: 0 auto;
		padding: 0 1.5rem;
	}

	.oz-404__hero {
		max-width: 46rem;
		margin: 0 auto;
		text-align: center;
	}

	.oz-404__eyebrow {
		display: inline-flex;
		align-items: center;
		gap: 0.5rem;
		padding: 0.45rem 0.95rem;
		border: 1px solid rgba(95, 42, 125, 0.15);
		border-radius: 9999px;
		background: #fff;
		color: var(--oz-purple);
		font-size: 0.72rem;
		font-weight: 800;
		letter-spacing: 0.22em;
		text-transform: uppercase;
		box-shadow: 0 8px 24px rgba(15, 23, 42, 0.05);
	}

	.oz-404__eyebrow span {
		width: 0.45rem;
		height: 0.45rem;
		border-radius: 9999px;
		background: var(--oz-blue);
	}

	.oz-404__code {
		margin: 1.25rem 0 0;
		font-size: clamp(6rem, 3rem + 14vw, 11rem);
		font-weight: 900;
		line-height: 0.9;
		letter-spacing: -0.06em;
		background: linear-gradient(135deg, var(--oz-purple) 0%, #8a4fb0 45%, var(--oz-blue) 100%);
		-webkit-background-clip: text;
		background-clip: text;
		color: transparent;
		user-select: none;
	}

	.oz-404__title {
		margin: 1.25rem 0 0;
		color: var(--oz-ink);
		font-size: clamp(1.75rem, 1.2rem + 2.2vw, 2.75rem);
		font-weight: 800;
		line-height: 1.15;
		letter-spacing: -0.02em;
	}

	.oz-404__lead {
		margin: 1rem auto 0;
		max-width: 36rem;
		font-size: clamp(1rem, 0.94rem + 0.3vw, 1.125rem);
		line-height: 1.7;
	}

	/* Visually hidden, still announced by screen readers. */
	.oz-404 .screen-reader-text {
		position: absolute;
		width: 1px;
		height: 1px;
		margin: -1px;
		padding: 0;
		overflow: hidden;
		clip: rect(0, 0, 0, 0);
		white-space: nowrap;
		border: 0;
	}

	/* Search */
	.oz-404__search {
		display: flex;
		align-items: center;
		gap: 0.5rem;
		max-width: 34rem;
		margin: 2rem auto 0;
		padding: 0.4rem 0.4rem 0.4rem 1.1rem;
		border: 1px solid var(--oz-line);
		border-radius: 1rem;
		background: #fff;
		box-shadow: 0 18px 40px rgba(15, 23, 42, 0.07);
		transition: border-color 0.2s ease, box-shadow 0.2s ease;
	}

	.oz-404__search:focus-within {
		border-color: var(--oz-blue);
		box-shadow: 0 0 0 4px rgba(10, 116, 187, 0.12), 0 18px 40px rgba(15, 23, 42, 0.07);
	}

	.oz-404__search i {
		color: #94a3b8;
	}

	.oz-404__search input {
		flex: 1;
		min-width: 0;
		border: 0;
		outline: none;
		background: transparent;
		color: var(--oz-ink);
		font-size: 1rem;
		padding: 0.6rem 0;
	}

	.oz-404__search button {
		flex: 0 0 auto;
		border: 0;
		border-radius: 0.75rem;
		padding: 0.75rem 1.25rem;
		background: var(--oz-purple);
		color: #fff;
		font-size: 0.875rem;
		font-weight: 700;
		cursor: pointer;
		transition: background-color 0.25s ease;
	}

	.oz-404__search button:hover,
	.oz-404__search button:focus-visible {
		background: var(--oz-blue);
	}

	/* Buttons */
	.oz-404__actions {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		gap: 0.875rem;
		margin-top: 1.75rem;
	}

	.oz-404__btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		gap: 0.6rem;
		min-width: 12rem;
		padding: 0.95rem 1.75rem;
		border-radius: 1rem;
		font-size: 0.875rem;
		font-weight: 700;
		text-decoration: none;
		transition: background-color 0.25s ease, color 0.25s ease, border-color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
	}

	.oz-404__btn--primary {
		background: var(--oz-purple);
		color: #fff;
		box-shadow: 0 18px 35px rgba(95, 42, 125, 0.25);
	}

	.oz-404__btn--primary:hover,
	.oz-404__btn--primary:focus-visible {
		background: var(--oz-blue);
		color: #fff;
		box-shadow: 0 18px 35px rgba(10, 116, 187, 0.28);
		transform: translateY(-2px);
	}

	.oz-404__btn--ghost {
		border: 1px solid var(--oz-line);
		background: #fff;
		color: var(--oz-ink);
	}

	.oz-404__btn--ghost:hover,
	.oz-404__btn--ghost:focus-visible {
		border-color: var(--oz-purple);
		color: var(--oz-purple);
		transform: translateY(-2px);
	}

	.oz-404 a:focus-visible,
	.oz-404 button:focus-visible {
		outline: 2px solid var(--oz-blue);
		outline-offset: 3px;
	}

	/* Helpful links */
	.oz-404__links-title {
		margin: clamp(3rem, 2rem + 3vw, 4.5rem) 0 1.25rem;
		color: #64748b;
		font-size: 0.75rem;
		font-weight: 800;
		letter-spacing: 0.22em;
		text-align: center;
		text-transform: uppercase;
	}

	.oz-404__grid {
		display: grid;
		grid-template-columns: repeat(1, minmax(0, 1fr));
		gap: 1rem;
		margin: 0;
		padding: 0;
		list-style: none;
	}

	.oz-404__card {
		position: relative;
		display: flex;
		height: 100%;
		flex-direction: column;
		gap: 0.35rem;
		padding: 1.5rem;
		border: 1px solid #edf1f6;
		border-radius: 1.5rem;
		background: #fff;
		color: var(--oz-text);
		text-decoration: none;
		box-shadow: 0 12px 30px rgba(15, 23, 42, 0.05);
		transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
	}

	.oz-404__card:hover,
	.oz-404__card:focus-visible {
		border-color: rgba(95, 42, 125, 0.25);
		box-shadow: 0 24px 50px rgba(15, 23, 42, 0.09);
		transform: translateY(-4px);
	}

	.oz-404__icon {
		display: flex;
		width: 3rem;
		height: 3rem;
		align-items: center;
		justify-content: center;
		margin-bottom: 0.75rem;
		border-radius: 0.9rem;
		background: var(--oz-purple-soft);
		color: var(--oz-purple);
		font-size: 1.15rem;
		transition: background-color 0.3s ease, color 0.3s ease;
	}

	.oz-404__card:hover .oz-404__icon,
	.oz-404__card:focus-visible .oz-404__icon {
		background: var(--oz-purple);
		color: #fff;
	}

	.oz-404__card strong {
		display: flex;
		align-items: center;
		justify-content: space-between;
		gap: 0.5rem;
		color: var(--oz-ink);
		font-size: 1.05rem;
		font-weight: 800;
	}

	.oz-404__card strong i {
		color: #94a3b8;
		font-size: 0.8rem;
		transition: transform 0.3s ease, color 0.3s ease;
	}

	.oz-404__card:hover strong i {
		color: var(--oz-purple);
		transform: translateX(3px);
	}

	.oz-404__card span {
		font-size: 0.9rem;
		line-height: 1.6;
	}

	/* Help strip */
	.oz-404__help {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		justify-content: center;
		gap: 0.5rem 1rem;
		margin-top: 2rem;
		padding: 1.1rem 1.5rem;
		border-radius: 1.25rem;
		background: linear-gradient(135deg, rgba(95, 42, 125, 0.06), rgba(10, 116, 187, 0.06));
		color: var(--oz-ink);
		font-weight: 600;
		text-align: center;
	}

	.oz-404__help a {
		display: inline-flex;
		align-items: center;
		gap: 0.5rem;
		color: var(--oz-purple);
		font-weight: 800;
		text-decoration: none;
	}

	.oz-404__help a:hover {
		color: var(--oz-blue);
	}

	/* Gentle entrance; content is visible even if animations never run. */
	@keyframes oz404Rise {
		from {
			opacity: 0;
			transform: translateY(14px);
		}

		to {
			opacity: 1;
			transform: none;
		}
	}

	.oz-404__hero,
	.oz-404__links {
		animation: oz404Rise 0.7s cubic-bezier(0.2, 0.7, 0.2, 1) both;
	}

	.oz-404__links {
		animation-delay: 0.15s;
	}

	@media (prefers-reduced-motion: reduce) {

		.oz-404__hero,
		.oz-404__links {
			animation: none;
		}

		.oz-404__btn,
		.oz-404__card {
			transition: none;
		}
	}

	@media (min-width: 640px) {
		.oz-404__grid {
			grid-template-columns: repeat(2, minmax(0, 1fr));
		}
	}

	@media (min-width: 1024px) {
		.oz-404__grid {
			grid-template-columns: repeat(4, minmax(0, 1fr));
			gap: 1.25rem;
		}
	}

	@media (max-width: 479.98px) {
		.oz-404__btn {
			width: 100%;
		}

		.oz-404__search button span {
			display: none;
		}
	}
</style>

<main id="primary" class="oz-404">
	<div class="oz-404__inner">

		<section class="oz-404__hero" aria-labelledby="oz404-title">
			<p class="oz-404__eyebrow"><span aria-hidden="true"></span><?php esc_html_e('Error 404', 'ozlandcare'); ?></p>

			<p class="oz-404__code" aria-hidden="true">404</p>

			<h1 id="oz404-title" class="oz-404__title"><?php esc_html_e('Sorry, we can’t find that page', 'ozlandcare'); ?></h1>

			<p class="oz-404__lead">
				<?php esc_html_e('The page you’re looking for may have moved or no longer exists. Try searching below, or head to one of our most visited pages.', 'ozlandcare'); ?>
			</p>

			<form class="oz-404__search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
				<i class="fas fa-magnifying-glass" aria-hidden="true"></i>
				<label for="oz404-search" class="screen-reader-text"><?php esc_html_e('Search the website', 'ozlandcare'); ?></label>
				<input id="oz404-search" type="search" name="s" placeholder="<?php esc_attr_e('Search services, NDIS information…', 'ozlandcare'); ?>" value="<?php echo esc_attr(get_search_query()); ?>">
				<button type="submit"><i class="fas fa-arrow-right" aria-hidden="true"></i> <span><?php esc_html_e('Search', 'ozlandcare'); ?></span></button>
			</form>

			<div class="oz-404__actions">
				<a class="oz-404__btn oz-404__btn--primary" href="<?php echo esc_url(home_url('/')); ?>">
					<i class="fas fa-house" aria-hidden="true"></i><?php esc_html_e('Back to Home', 'ozlandcare'); ?>
				</a>
				<a class="oz-404__btn oz-404__btn--ghost" href="<?php echo esc_url(home_url('/contact-us/')); ?>">
					<i class="fas fa-headset" aria-hidden="true"></i><?php esc_html_e('Contact Our Team', 'ozlandcare'); ?>
				</a>
			</div>
		</section>

		<section class="oz-404__links" aria-labelledby="oz404-links-title">
			<h2 id="oz404-links-title" class="oz-404__links-title"><?php esc_html_e('Popular pages', 'ozlandcare'); ?></h2>

			<ul class="oz-404__grid">
				<?php foreach ($oz404_links as $oz404_link) : ?>
					<li>
						<a class="oz-404__card" href="<?php echo esc_url($oz404_link['url']); ?>">
							<span class="oz-404__icon" aria-hidden="true"><i class="<?php echo esc_attr($oz404_link['icon']); ?>"></i></span>
							<strong><?php echo esc_html($oz404_link['title']); ?> <i class="fas fa-arrow-right" aria-hidden="true"></i></strong>
							<span><?php echo esc_html($oz404_link['text']); ?></span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

			<?php if (ozlandcare_phone()) : ?>
				<p class="oz-404__help">
					<?php esc_html_e('Need help now?', 'ozlandcare'); ?>
					<a href="<?php echo esc_url(ozlandcare_phone_href()); ?>"><i class="fas fa-phone" aria-hidden="true"></i><?php echo esc_html(sprintf(__('Call %s', 'ozlandcare'), ozlandcare_phone())); ?></a>
				</p>
			<?php endif; ?>
		</section>

	</div>
</main>

<?php
get_footer();
