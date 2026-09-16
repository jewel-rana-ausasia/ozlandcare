<?php

/**
 * The template for displaying all pages
 *
 * @package ozlandcare
 */

get_header();
?>

<div class="bg-[#f0f9ff] min-h-screen py-12 px-4 xl:px-0">
	<div class="max-w-6xl mx-auto">

		<div class="bg-white rounded-[2rem] shadow-2xl shadow-primary/10 overflow-hidden border-4 border-primary/5">

			<div class="bg-primary p-10 text-white relative overflow-hidden">
				<div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full"></div>

				<div class="relative z-10">
					<h1 class="text-3xl xl:text-4xl font-bold tracking-tight uppercase"><?php the_title(); ?></h1>
					<div class="h-1 w-20 bg-white mt-4 rounded-full"></div>
				</div>
			</div>

			<div class="p-8 md:p-14">
				<?php the_content(); ?>
			</div>

		</div>
	</div>
</div>

<style>
	.wpcf7 form {
		margin: 0;
	}

	.wpcf7 input,
	.wpcf7 textarea,
	.wpcf7 select {
		width: 100%;
	}

	.wpcf7-response-output {
		margin: 0 !important;
		padding: 1rem 1.25rem !important;
		border: 1px solid #bbf7d0 !important;
		border-radius: 1rem;
		color: #166534;
		background: #f0fdf4;
		font-weight: 600;
	}

	.wpcf7 form.invalid .wpcf7-response-output,
	.wpcf7 form.failed .wpcf7-response-output,
	.wpcf7 form.spam .wpcf7-response-output {
		border-color: #fecaca !important;
		color: #991b1b;
		background: #fef2f2;
	}
</style>

<?php
get_footer();
