<?php

/**
 * The template for displaying the footer
 * @package ozlandcare
 */
?>

<footer class="bg-blue text-white relative overflow-hidden border-t border-slate-800">
	<div class="container mx-auto max-w-7xl 2xl:max-w-screen-2xl px-6 lg:px-10 xl:px-4 relative z-10">

		<!-- Main footer content -->
		<div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">

			<!-- Logo + Description — wider column -->
			<div class="lg:col-span-3 flex flex-col gap-5">

				<div>
					<?php if (has_custom_logo()) : ?>
						<?php
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
						?>

						<a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-white p-3 rounded-lg max-w-[240px]">
							<img
								src="<?php echo esc_url($logo[0]); ?>"
								alt="<?php bloginfo('name'); ?>"
								class="h-16 lg:h-20 w-auto object-contain mx-auto">
						</a>

					<?php endif; ?>
				</div>

				<p class="text-base text-white font-medium leading-relaxed max-w-md">
					<?php bloginfo('description'); ?>
				</p>

				<!-- Social icons -->
				<div class="flex items-center gap-3 pt-2">

					<!-- Facebook -->
					<a href="#" aria-label="Facebook" class="w-8 h-8 flex items-center justify-center rounded-full bg-[#1877F2] hover:bg-[#166FE5] transition-all border border-[#1877F2]">
						<i class="fab fa-facebook-f text-sm"></i>
					</a>
					<!-- Instagram -->
					<a href="#" aria-label="Instagram" class="w-8 h-8 flex items-center justify-center rounded-full bg-[#E4405F] hover:bg-[#D93250] transition-all border border-[#E4405F]">
						<i class="fab fa-instagram text-sm"></i>
					</a>

				</div>

			</div>

			<!-- Spacer on large screens -->
			<div class="hidden lg:block lg:col-span-1"></div>

			<!-- Quick Links -->
			<div class="lg:col-span-2">
				<h4 class="text-sm font-semibold tracking-widest uppercase text-white mb-6">Quick Links</h4>

				<?php
				wp_nav_menu(array(
					'theme_location' => 'quick-links',
					'container'      => false,
					'menu_class'     => 'space-y-5 text-base font-medium list-none m-0 p-0',
					'link_class'     => 'text-white hover:text-white/80 transition duration-300 no-underline block',
					'fallback_cb'    => false,
				));
				?>
			</div>

			<!-- Support Links -->
			<div class="lg:col-span-3">
				<h4 class="text-sm font-semibold tracking-widest uppercase text-white mb-6">Our Services</h4>

				<ul class="space-y-5 text-base font-medium list-none p-0 m-0 border-none outline-none">
					<?php
					// Top 5 services, in the same order as the Our Services page
					$footer_services = [
						['title' => 'Support Coordination',                'href' => site_url('/ndis-support-coordination/')],
						['title' => 'Supported Independent Living (SIL)',  'href' => site_url('/supported-independent-living-sil/')],
						['title' => 'Community Participation',             'href' => site_url('/assistance-with-social-and-community-participation/')],
						['title' => 'Assist-Personal Activities',          'href' => site_url('/assist-personal-activities/')],
						['title' => 'Innovative Community Participation',  'href' => site_url('/innovative-community-participation/')],
					];

					foreach ($footer_services as $service) {
					?>
						<li class="list-none before:hidden ml-0 pl-0">
							<a href="<?php echo esc_url($service['href']); ?>"
								class="text-white hover:text-white/80 transition-colors duration-300 inline-flex items-start gap-2 group no-underline">
								<span><?php echo esc_html($service['title']); ?></span>
							</a>
						</li>
					<?php
					}
					?>

					<!-- All Services Link -->
					<li class="list-none before:hidden ml-0 pl-0">
						<a href="<?php echo site_url('/our-services/'); ?>"
							class="text-white hover:text-white/80 transition-colors duration-300 inline-flex items-start gap-2 group no-underline">
							<span>All Services</span>
						</a>
					</li>
				</ul>
			</div>


			<!-- Contact Section (Static) -->
			<div class="lg:col-span-3">
				<h4 class="text-sm font-semibold tracking-widest uppercase text-white mb-6">
					Get in Touch
				</h4>

				<div class="text-base font-medium text-white space-y-5">

					<!-- Address -->
					<div class="flex items-start gap-3">
						<span class="text-white mt-1 w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-primary transition-all border border-white/10">
							<i class="fas fa-location-dot text-sm"></i>
						</span>
						<p class="hover:text-white/80 transition duration-300">
							Suite 101, Level 14, 3 Parramatta Square,<br>
							153 Macquarie St, Parramatta, NSW 2150<br>
							PO Box 1001, Green Valley NSW 2168
						</p>
					</div>

					<!-- Phone -->
					<div class="flex items-center gap-3">
						<span class="text-white w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-primary transition-all border border-white/10">
							<i class="fas fa-phone text-sm"></i>
						</span>
						<a href="tel:1300951223"
							class="hover:text-white/80 transition duration-300">
							1300 951 223
						</a>
					</div>

					<!-- Email -->
					<div class="flex items-center gap-3">
						<span class="text-white w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-primary transition-all border border-white/10">
							<i class="fas fa-envelope text-sm"></i>
						</span>
						<a href="mailto:admin@ozlandcare.com.au"
							class="hover:text-white/80 transition duration-300">
							admin@ozlandcare.com.au
						</a>
					</div>

					<!-- ABN -->
					<div class="flex items-center gap-3">
						<span class="text-white w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-primary transition-all border border-white/10">
							<i class="fas fa-id-card text-xs"></i>
						</span>
						<p>
							ABN: <span class="hover:text-white/80 transition duration-300">12 345 678 901</span>
						</p>
					</div>

				</div>
			</div>

		</div>

		<!-- Divider -->
		<div class="h-px bg-gradient-to-r from-transparent via-slate-700 to-transparent"></div>

		<!-- Bottom bar -->
		<div class="py-6 flex flex-col sm:flex-row justify-center items-center gap-4">

			<div class="copyright-area-content">
				<p class="text-sm text-center">
					Copyright © <?php echo date('Y'); ?> Ozland Care |<br class="sm:hidden">
					<span class="whitespace-nowrap">
						Website by
						<a href="https://www.ausasiaonline.com.au/" target="_blank" rel="noopener noreferrer" class="text-white hover:text-white/80 transition duration-300 font-semibold">
							Aus Asia Online
						</a>
					</span>
				</p>
			</div>

		</div>

	</div>
</footer>

<?php wp_footer(); ?>
<style>
	@keyframes footerFloat {
		0% {
			transform: translateY(0px);
		}

		50% {
			transform: translateY(-4px);
		}

		100% {
			transform: translateY(0px);
		}
	}

	.animate-footerFloat {
		animation: footerFloat 4.5s ease-in-out infinite;
	}

</style>
</body>

</html>
