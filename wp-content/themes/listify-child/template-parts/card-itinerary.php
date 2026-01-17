<div class="itinerary-card">

  <!-- IMAGE SLIDER -->
  <div class="itinerary-images swiper inner-swiper">
    <div class="swiper-wrapper">
      <?php if (have_rows('gallery')): ?>
        <?php while (have_rows('gallery')): the_row(); ?>
          <div class="swiper-slide">
            <img src="<?php the_sub_field('image'); ?>" />
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <!-- CONTENT -->
  <div class="itinerary-body">
    <h3><?php the_title(); ?></h3>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>

    <p class="highlights"><?php the_field('highlights'); ?></p>
  </div>

  <!-- FOOTER -->
  <div class="itinerary-footer">
    <div class="price-col">
      <span class="old">₹<?php the_field('old_price'); ?></span>
      <span class="new">₹<?php the_field('deal_price'); ?></span>

      <div class="meta">
        <span class="badge"><?php the_field('discount'); ?>% OFF</span>
        <span class="duration"><?php the_field('duration'); ?></span>
      </div>
    </div>

    <div class="btn-col">
      <a href="<?php the_permalink(); ?>" class="btn-view">View</a>
    </div>
  </div>

</div>
