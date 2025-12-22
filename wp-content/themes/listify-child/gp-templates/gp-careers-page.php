<?php

/**
 * Template Name: GP – Career Page
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="gp-career-page">
    <?php
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>