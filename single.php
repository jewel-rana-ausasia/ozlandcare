<?php

/**
 * The template for displaying all single posts - Melvis Care Premium
 */
get_header(); ?>

<!-- PREMIUM TYPOGRAPHY STYLES -->
<style>
	.service-content {
		font-family: 'Inter', sans-serif;
		color: #1e293b;
		line-height: 1.75;
	}

	.service-content h1 {
		font-size: 3rem;
		font-weight: 800;
		color: #0f172a;
		margin-bottom: 1.25rem;
		line-height: 1.15;
	}

	.service-content h2 {
		font-size: 2rem;
		font-weight: 700;
		margin-top: 2rem;
		margin-bottom: 1rem;
		color: #0f172a;
	}

	.service-content h3 {
		font-size: 1.5rem;
		font-weight: 700;
		margin-top: 1.5rem;
		margin-bottom: 0.75rem;
		color: #0f172a;
	}

	.service-content p {
		font-size: 1rem;
		margin-bottom: 1.25rem;
		color: #0c0c0c;
	}

	.service-content ul,
	.service-content ol {
		list-style-position: inside;
		margin-left: 0;
		margin-bottom: 1.25rem;
		padding-left: 1rem;
	}

	.service-content ul {
		list-style-type: disc;
	}

	.service-content ol {
		list-style-type: decimal;
	}

	.service-content ul li::marker,
	.service-content ol li::marker {
		color: #0c0c0c;
		font-weight: bold;
	}

	.service-content a {
		color: #00A9E0;
		text-decoration: underline;
		font-weight: 500;
	}

	.service-content a:hover {
		color: #00A9E0;
		text-decoration: none;
	}

	.service-content strong {
		font-weight: 700;
		color: #0f172a;
	}

	.service-content img {
		max-width: 100%;
		border-radius: 1rem;
		margin: 1.5rem 0;
		box-shadow: 0 15px 25px rgba(0, 0, 0, 0.08);
	}

	.service-content blockquote {
		border-left: 4px solid #00A9E0;
		padding-left: 1rem;
		color: #475569;
		font-style: italic;
		margin: 1.5rem 0;
		background: #f1f5f9;
		padding: 1rem 1.25rem;
		border-radius: 0.5rem;
	}

	.service-content .callout {
		border-left: 5px solid #00A9E0;
		background: #f0f9ff;
		padding: 1rem 1.25rem;
		margin: 1.5rem 0;
		border-radius: 0.5rem;
		color: #0f172a;
		font-weight: 500;
	}
</style>

<main id="primary" class="site-main py-12 lg:py-20 bg-white">
	<div class="max-w-7xl mx-auto px-6 lg:px-8">

		<?php while (have_posts()) : the_post(); ?>



			<div class="grid grid-cols-1 lg:grid-cols-12 gap-20 items-start">


				<!-- MAIN CONTENT -->
				<div class="lg:col-span-8">
					<!-- FEATURE IMAGE -->
					<header class="relative w-full rounded-[2rem] overflow-hidden aspect-[14/9] mb-8 shadow-2xl">
						<?php if (has_post_thumbnail()) : ?>
							<img src="<?php the_post_thumbnail_url('full'); ?>" class="w-full h-full object-cover" alt="<?php the_title(); ?>">
						<?php endif; ?>
					</header>

					<!-- TITLE -->
					<div class="flex flex-wrap items-center justify-between py-6 mb-12 border-b border-slate-100 gap-6">
						<h1 class="text-3xl md:text-4xl font-semibold text-slate-900 max-w-3xl leading-tight">
							<?php the_title(); ?>
						</h1>
					</div>
					<div class="service-content">
						<?php the_content(); ?>
					</div>

					<!-- TAGS -->
					<div class="mt-16 pt-8 border-t border-slate-100">
						<div class="flex items-center space-x-3">
							<span class="text-xs font-black text-slate-900 uppercase">Tags:</span>
							<?php the_tags(
								'<span class="px-3 py-1 bg-slate-50 text-slate-400 text-[10px] font-bold rounded-lg border border-slate-100">',
								'</span> <span class="px-3 py-1 bg-slate-50 text-slate-400 text-[10px] font-bold rounded-lg border border-slate-100">',
								'</span>'
							); ?>
						</div>
					</div>
				</div>

				<!-- SIDEBAR -->
				<aside class="lg:col-span-4 sticky top-12 space-y-10">
					<h3 class="text-2xl font-black text-slate-900 mb-8 flex items-center">
						Popular <span class="text-blue ml-2">Posts</span>
						<span class="flex-grow h-px bg-slate-100 ml-4"></span>
					</h3>

					<div class="space-y-10">
						<?php
						$popular_query = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => 3,
							'post__not_in' => array(get_the_ID()),
							'orderby' => 'comment_count'
						));

						if ($popular_query->have_posts()) :
							while ($popular_query->have_posts()) : $popular_query->the_post(); ?>

								<article class="group flex flex-col space-y-4">
									<a href="<?php the_permalink(); ?>" class="block relative aspect-video rounded-3xl overflow-hidden shadow-sm">

										<img src="<?php the_post_thumbnail_url('medium'); ?>"
											class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
											alt="<?php the_title(); ?>">

										<div class="absolute top-4 left-4">
											<span class="px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-[9px] font-black uppercase text-blue tracking-widest shadow-sm">
												<?php $cat = get_the_category();
												echo esc_html($cat[0]->name); ?>
											</span>
										</div>

									</a>
									<div>
										<p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">
											<?php echo get_the_date('j F, Y'); ?> • By <?php the_author(); ?>
										</p>
										<h4 class="text-lg font-bold text-slate-900 group-hover:text-blue transition-colors leading-tight mb-3">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h4>
										<a href="<?php the_permalink(); ?>" class="text-[10px] font-black text-blue uppercase tracking-widest border-b-2 border-blue group-hover:border-blue transition-all pb-0.5">
											Learn More &rsaquo;
										</a>
									</div>
								</article>

						<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>

					<!-- CALL NOW CTA -->
					<div class="mt-12 bg-slate-900 rounded-[2rem] p-8 text-white relative overflow-hidden group">

						<div class="absolute -top-10 -right-10 w-32 h-32 bg-sky-600/20 rounded-full blur-3xl"></div>

						<h4 class="text-xl font-bold mb-4 relative z-10">Need Immediate Support?</h4>

						<p class="text-slate-400 text-sm mb-6 relative z-10">
							Speak directly with our friendly team and get the help you need for your NDIS plan today.
						</p>

						<div class="relative z-10">
							<a href="tel:1300951223"
								class="w-full inline-flex items-center justify-center bg-blue text-white font-black text-xs uppercase tracking-widest py-4 rounded-xl hover:bg-sky-500 transition-all shadow-lg shadow-sky-900/50">

								Call Now

								<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" d="M3 5h2l3.6 7.59-1.35 2.45A2 2 0 009 17h10v-2H9.42a.25.25 0 01-.22-.37L10.1 13h6.45a2 2 0 001.8-1.11L21 6H5.21"></path>
								</svg>

							</a>
						</div>

					</div>
				</aside>

			</div>

		<?php endwhile; ?>
	</div>
</main>

<?php get_footer(); ?>