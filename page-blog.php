<?php
/*
Template Name: Blog Page
*/
get_header(); ?>

<style>
    /*
     * Mobile + tablet only (<=1024px); desktop keeps the Tailwind values in the
     * markup. Two-class selectors outrank Tailwind utilities.
     */
    @media (max-width: 1024px) {
        .blog-page.blog-page {
            padding-top: clamp(3rem, 2rem + 4vw, 5rem);
            padding-bottom: clamp(3rem, 2rem + 4vw, 5rem);
        }

        .blog-page .blog-head {
            margin-bottom: clamp(2rem, 1.5rem + 2vw, 3rem);
        }

        .blog-page .blog-title {
            font-size: clamp(1.875rem, 1.2rem + 2.6vw, 2.75rem);
            line-height: 1.15;
        }

        .blog-page .blog-grid {
            gap: clamp(1.25rem, 0.9rem + 1.4vw, 2rem);
        }
    }

    @media (max-width: 639.98px) {
        .blog-page .blog-card-body {
            padding: 1.5rem;
        }

        .blog-page .blog-card-media {
            height: 13rem;
        }
    }
</style>

<section class="blog-page py-24 bg-slate-50/40 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Header Section -->
        <div class="blog-head flex flex-col md:flex-row md:items-end justify-between mb-16 pb-6 border-b border-slate-200/60 gap-6">
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-widest text-primary mb-3">Insights & Community</p>
                <h1 class="blog-title text-4xl md:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                    Latest Blogs from <span class="text-primary font-bold">Ozland Care</span>
                </h1>
            </div>
        </div>

        <!-- Premium Card Grid -->
        <div class="blog-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>

                    <article class="group flex flex-col bg-white rounded-2xl overflow-hidden border border-slate-200/60 shadow-[0_2px_8px_-3px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.08)] hover:border-slate-300/80 transition-all duration-500 relative">

                        <!-- Image Container -->
                        <div class="blog-card-media relative h-60 overflow-hidden bg-slate-100">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium_large'); ?>"
                                    alt="<?php the_title_attribute(); ?>"
                                    class="w-full h-full object-cover transition-transform duration-1000 ease-out group-hover:scale-105">
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 00-2 2z"></path>
                                    </svg>
                                </div>
                            <?php endif; ?>

                            <!-- Premium Minimal Category Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="px-3.5 py-1.5 bg-white/90 backdrop-blur-md rounded-lg text-[10px] font-bold uppercase tracking-wider text-primary shadow-sm border border-white/40">
                                    <?php
                                    $categories = get_the_category();
                                    echo !empty($categories) ? esc_html($categories[0]->name) : 'Support';
                                    ?>
                                </span>
                            </div>
                        </div>

                        <!-- Card Body Content -->
                        <div class="blog-card-body p-7 flex flex-col flex-grow">

                            <!-- Metadata Grid Row -->
                            <div class="flex items-center space-x-2.5 mb-4 text-slate-400 text-[11px] font-semibold uppercase tracking-wider">
                                <div class="flex items-center">
                                    <svg class="w-3.5 h-3.5 mr-1.5 text-slate-400/80" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 00-2 2z"></path>
                                    </svg>
                                    <?php echo get_the_date(); ?>
                                </div>
                                <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                <div class="flex items-center">
                                    <?php
                                    $word_count = str_word_count(strip_tags(get_the_content()));
                                    echo ceil($word_count / 200) . ' min read';
                                    ?>
                                </div>
                            </div>

                            <!-- Post Title -->
                            <h2 class="text-xl font-semibold text-slate-900 mb-3 group-hover:text-primary transition-colors duration-300 line-clamp-2 leading-snug tracking-tight">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <!-- Post Excerpt -->
                            <div class="text-slate-900 text-sm font-medium mb-6 leading-relaxed line-clamp-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </div>

                            <!-- Interactive Call To Action Footer -->
                            <div class="mt-auto pt-5 border-t border-slate-100">
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary font-bold text-xs uppercase tracking-wider group/link">
                                    Read Article
                                    <svg class="w-3.5 h-3.5 ml-1.5 transition-transform duration-300 group-hover/link:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </article>

            <?php endwhile;
                wp_reset_postdata();
            endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>