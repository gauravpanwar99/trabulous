<div class="itinerary-card card">



    <?php if (has_post_thumbnail()) : ?>

        <div style="position:relative;height:200px;overflow:hidden">
            <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
        </div>


    <?php endif; ?>

    <!-- <div class="itinerary-body "> -->
    <div class="card-body p-3 bg-white">
        <h6 class="fw-bold mb-2"><?php the_title(); ?></h6>
        <div class="card-meta small mb-3 d-flex align-items-center gap-1">
            <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>
            <?php the_field('subtitle'); ?>
        </div>

        <?php
        $highlights = get_field('highlights');
        ?>
        <ul class="highlights">
            <?php foreach ($highlights as $highlight): ?>
                <li class="highlights"><i class="bi bi-stars"></i><?php echo $highlight['highlight'] ?></li>
            <?php endforeach ?>
        </ul>
    </div>
    <hr class="m-0">
    <div class="card-footer d-flex justify-content-between align-items-center px-3 py-3" style="background:#F0F8FF">
        <div class="pricing-info">
            <div class="fw-bold" style="font-size:14px"><s>₹<?php the_field('original_price'); ?></s></div>
            <div class="fw-bold" style="font-size:22px">₹<?php the_field('deal_price'); ?></div>
            <div class="small"><?php the_field('night_per_person');
                                ?>
            </div>
        </div>
        <div class="user-actions">
            <i class="bi bi-telephone phone-icon"></i>
            <?php
            $contactPage = get_page_by_path('contact-us');
            ?>
            <a class="btn btn-coral open-pop-up-one" href="<?php echo get_permalink($contactPage->ID) ?>"><?php the_field('cta_text'); ?></a>

        </div>
    </div>


    <!-- </div> -->
</div>