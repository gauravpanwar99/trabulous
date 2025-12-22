<?php

/**
 * GP – Venue Taxonomy
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="gp-venue-taxonomy">

    <header class="gp-taxonomy-header">
        <h1 class="gp-taxonomy-title">
            <?php single_term_title(); ?>
        </h1>

        <div class="gp-taxonomy-description">
            <?php echo term_description(); ?>
        </div>
    </header>

    <section class="gp-taxonomy-body">
        <div class="gp-container">

            <aside class="gp-taxonomy-sidebar">
                <!-- Contextual sidebar -->
            </aside>

            <div class="gp-taxonomy-listing">

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