<?php
/*
Template Name: Каталог
*/
?>

<?php get_header(); ?>

<section class="catalog">
  <div class="container">
    <div class="row">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php endwhile; endif;?>
    </div>
  </div>
</section>

<?php get_footer(); ?>