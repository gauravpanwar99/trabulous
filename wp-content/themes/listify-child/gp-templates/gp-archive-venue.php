<?php

/**
 * Template Name: GP – Venue Archive
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="gp-venue-archive">

    <header class="gp-archive-header">
        <h1 class="gp-archive-title"><?php post_type_archive_title(); ?></h1>
    </header>

    <section class="gp-archive-body">
        <div class="gp-container">

            <aside class="gp-archive-sidebar">
                <!-- Filters will go here -->
            </aside>

            <div class="gp-archive-listing">

                <?php if (have_posts()) : ?>
                    <div class="gp-venue-grid">

                        <?php while (have_posts()) : the_post(); ?>
                            <article class="gp-venue-card">
                                <h2 class="gp-venue-card-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </article>
                        <?php endwhile; ?>

                    </div>

                    <div class="gp-pagination">
                        <?php the_posts_pagination(); ?>
                    </div>

                <?php else : ?>
                    <p>No venues found.</p>
                <?php endif; ?>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>