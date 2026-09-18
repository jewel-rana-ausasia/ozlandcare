<?php

/**
 * Support Coordination - hero, overview and the 3 levels.
 *
 * Splits the ACF "service_details" rich text into its three parts (intro copy,
 * the "What is Support Coordination?" paragraphs and the 3 levels list) so each
 * one can be laid out on its own. Falls back to the plain rich text when the
 * content no longer carries those headings.
 *
 * @package ozlandcare
 */

if (! defined('ABSPATH')) {
    exit;
}

$service_title   = function_exists('get_field') ? get_field('service_title') : '';
$service_details = function_exists('get_field') ? get_field('service_details') : '';
$service_image   = function_exists('get_field') ? get_field('service_hero_image') : '';

$support_coordination_content = [
    'intro'        => [],
    'overview'     => [],
    'levels_intro' => [],
    'levels'       => [],
];

if ($service_details && class_exists('DOMDocument')) {
    $document = new DOMDocument();
    $previous_libxml_state = libxml_use_internal_errors(true);
    $document->loadHTML(
        '<?xml encoding="utf-8" ?><div id="support-coordination-content">' . wp_kses_post($service_details) . '</div>',
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );
    libxml_clear_errors();
    libxml_use_internal_errors($previous_libxml_state);

    $content_root  = $document->getElementById('support-coordination-content');
    $content_phase = 'intro';

    if ($content_root) {
        foreach (iterator_to_array($content_root->childNodes) as $content_node) {
            $node_text = trim(preg_replace('/\s+/', ' ', $content_node->textContent));

            if (preg_match('/^what is\s+(?:the\s+)?(?:ndis\s+)?support\s+coordination\s*\??/i', $node_text)) {
                $content_phase = 'overview';
                continue;
            }

            if (preg_match('/^the\s+3\s+levels\s+of\s+(?:ndis\s+)?support\s+coordination/i', $node_text)) {
                $content_phase = 'levels_intro';
                continue;
            }

            $node_html = trim($document->saveHTML($content_node));
            if ($node_html === '') {
                continue;
            }

            if ($content_phase === 'levels_intro' && strtolower($content_node->nodeName) === 'ul') {
                $content_phase = 'levels';
            }

            $support_coordination_content[$content_phase][] = $node_html;
        }
    }
}

$has_support_coordination_layout =
    !empty($support_coordination_content['intro'])
    && !empty($support_coordination_content['overview'])
    && !empty($support_coordination_content['levels']);

$support_intro_html = $has_support_coordination_layout
    ? implode('', $support_coordination_content['intro'])
    : $service_details;
?>

<style>
    .support-intro-copy p + p {
        margin-top: 1.25rem;
    }

    .support-overview-paragraph p {
        margin: 0;
    }

    /*
     * The level title and body arrive as one WYSIWYG <ul>, so the card's
     * typography is set here to match the icon cards in the "Why Choose"
     * section: first item is the h4-equivalent title, the rest is body copy.
     */
    .support-level-card ul {
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        z-index: 10;
    }

    .support-level-card li {
        color: #020617;
        font-size: 0.875rem;
        line-height: 1.625;
    }

    .support-level-card li:first-child {
        color: #0f172a;
        font-size: 1.25rem;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 0.75rem;
    }
</style>

<section class="relative py-24 lg:py-32">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <div class="lg:col-span-6 order-2 lg:order-1 reveal">
                <h1 class="font-serif text-3xl lg:text-5xl text-slate-900 leading-[1.1] mb-8">
                    <?php echo $service_title ? wp_kses_post($service_title) : 'Support Coordination'; ?>
                </h1>
                <div class="support-intro-copy max-w-2xl text-base text-slate-700 font-normal leading-relaxed">
                    <?php echo wp_kses_post($support_intro_html); ?>
                </div>
            </div>

            <div class="lg:col-span-6 order-1 lg:order-2 reveal" style="transition-delay: 0.2s">
                <div class="relative">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
                    <div class="image-mask overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.2)] aspect-[16/10] sm:aspect-[3/2] lg:aspect-[4/3] relative">
                        <?php if ($service_image) : ?>
                            <img
                                src="<?php echo esc_url($service_image['url']); ?>"
                                class="w-full h-full object-cover"
                                alt="<?php echo esc_attr($service_image['alt'] ?? 'Support Coordination'); ?>">
                        <?php else : ?>
                            <img
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-hero.jpg'); ?>"
                                class="w-full h-full object-cover"
                                alt="Support Coordination">
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php if ($has_support_coordination_layout) : ?>
    <section class="pb-16 lg:pb-24">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="reveal">
                <div class="max-w-4xl mb-7">
                    <h2 class="font-serif text-3xl lg:text-4xl text-slate-900 leading-tight">What is Support Coordination?</h2>
                </div>

                <div class="w-full border-y border-primary/15 divide-y divide-primary/15">
                    <?php foreach ($support_coordination_content['overview'] as $overview_index => $overview_block) : ?>
                        <div class="support-overview-paragraph w-full flex gap-5 md:gap-8 py-6 md:py-7 text-base leading-relaxed text-slate-700">
                            <span class="shrink-0 pt-1 text-sm font-bold text-primary">
                                <?php echo esc_html(sprintf('%02d', $overview_index + 1)); ?>
                            </span>
                            <div class="max-w-5xl">
                                <?php echo wp_kses_post($overview_block); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-24 lg:pb-32">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="max-w-3xl mb-10 reveal">
                <h2 class="font-serif text-3xl lg:text-4xl text-slate-900 leading-tight mb-5">The 3 Levels of Support Coordination</h2>
                <div class="text-slate-700 leading-relaxed">
                    <?php echo wp_kses_post(implode('', $support_coordination_content['levels_intro'])); ?>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $level_icons = ['fas fa-link', 'fas fa-compass', 'fas fa-user-gear'];

                foreach ($support_coordination_content['levels'] as $level_index => $level_block) :
                    $level_icon = $level_icons[$level_index] ?? 'fas fa-circle-check';
                ?>
                    <div class="support-level-card group relative p-10 rounded-[2.5rem] bg-[#eef1f5] border border-slate-200 transition-all duration-500 hover:bg-white hover:shadow-[0_30px_60px_rgba(15,23,42,0.08)] overflow-hidden reveal" style="transition-delay: <?php echo $level_index * 100; ?>ms">

                        <!-- Background Icon -->
                        <div class="absolute -top-6 -right-6 text-primary/5 group-hover:text-primary/10 transition-colors duration-500 pointer-events-none">
                            <i class="<?php echo esc_attr($level_icon); ?> text-9xl"></i>
                        </div>

                        <!-- Icon Box -->
                        <div class="w-14 h-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-8 transition-all duration-300 group-hover:bg-primary group-hover:scale-110 relative z-10">
                            <i class="<?php echo esc_attr($level_icon); ?> text-3xl text-primary group-hover:text-white transition-colors"></i>
                        </div>

                        <?php echo wp_kses_post($level_block); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
