<?php get_header(); ?>

<section class="location-hero">
  <?php
  $term = get_queried_object();
  $slider_alias = sanitize_title($term->name);

  echo do_shortcode('[rev_slider alias="location-' . esc_attr($slider_alias) . '"]');
  ?>
</section>

<section class="location-itineraries">
  <div class="container">
    <h2 class="section-title"><?php single_term_title(); ?> Itineraries</h2>

    <div class="swiper itinerary-swiper">
      <div class="swiper-wrapper">

        <?php
        $term = get_queried_object();

        $args = [
          'post_type' => 'itinerary',
          'posts_per_page' => -1,
          'tax_query' => [
            [
              'taxonomy' => 'location',
              'field'    => 'term_id',
              'terms'    => $term->term_id,
            ]
          ]
        ];

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
        ?>

          <div class="swiper-slide">
            <?php get_template_part('template-parts/card-itinerary'); ?>
          </div>

        <?php endwhile;
        wp_reset_postdata(); ?>

      </div>


    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</section>

<?php get_footer(); ?>