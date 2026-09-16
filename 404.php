<?php

/**
 * Ultra-Minimalist Professional 404 Page
 * Optimized with Tailwind CSS & Inter-style Typography
 * @package ozlandcare
 */

get_header();
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap');

	body {
		font-family: 'Inter', sans-serif;
	}

	.line-shimmer {
		background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0) 100%);
		background-size: 200% 100%;
		animation: shimmer 3s infinite linear;
	}

	@keyframes shimmer {
		0% {
			background-position: -200% 0;
		}

		100% {
			background-position: 200% 0;
		}
	}

	/* Remove WP wrapper constraints */
	#primary {
		max-width: 100% !important;
		padding: 0 !important;
		margin: 0 !important;
	}
</style>

<main class="relative min-h-[90vh] flex flex-col items-center justify-center bg-[#080808] text-white overflow-hidden">

	<div class="absolute inset-0 z-0 opacity-20"
		style="background-image: linear-gradient(#1a1a1a 1px, transparent 1px), linear-gradient(90deg, #1a1a1a 1px, transparent 1px); background-size: 50px 50px;">
	</div>

	<div class="relative z-10 w-full max-w-5xl px-8 text-center">

		<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 select-none">
			<h1 id="error-code" class="text-[20vw] font-black opacity-[0.03] leading-none">404</h1>
		</div>

		<div id="content-load" class="opacity-0 translate-y-10">
			<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 mb-8">
				<span class="relative flex h-2 w-2">
					<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
					<span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
				</span>
				<span class="text-[10px] uppercase tracking-[0.3em] font-bold text-gray-400">Connection Error</span>
			</div>

			<h2 class="text-5xl md:text-7xl font-bold tracking-tight mb-6">
				Page <span class="italic font-light text-gray-500">Not</span> Found.
			</h2>

			<p class="text-gray-400 text-lg md:text-xl max-w-xl mx-auto mb-12 font-light leading-relaxed">
				The resource you are looking for has been moved or no longer exists.
				Please verify the URL or return to the dashboard.
			</p>

			<div class="flex flex-col sm:flex-row items-center justify-center gap-6">
				<a href="<?php echo esc_url(home_url('/')); ?>"
					class="w-full sm:w-auto px-10 py-4 bg-white text-black text-sm font-bold uppercase tracking-widest hover:bg-gray-200 transition-all duration-300">
					Return to Homepage
				</a>
				<a href="javascript:history.back()"
					class="w-full sm:w-auto px-10 py-4 border border-white/20 text-sm font-bold uppercase tracking-widest hover:bg-white/5 transition-all duration-300">
					Previous Page
				</a>
			</div>
		</div>

	</div>
</main>

<script>
	// Professional GSAP Animation Sequence
	window.addEventListener('load', () => {
		const tl = gsap.timeline();

		tl.to("#content-load", {
				opacity: 1,
				y: 0,
				duration: 1,
				ease: "power4.out"
			})
			.to("#error-code", {
				opacity: 0.05,
				duration: 2
			}, "-=0.5")
			.to("#search-load", {
				opacity: 1,
				duration: 1.5
			}, "-=1");
	});
</script>

<?php
get_footer();
