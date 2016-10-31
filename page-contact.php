<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>

<section class="body">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include 'aside.php'; ?>
      </div>
      <div class="col-md-9 contact">
        <content>
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <hr>
          <?php the_content(); ?>  
          <?php endwhile; endif;?>
        </content>
      </div>
    </div>
  </div>
</section>


<?php include 'app/maps.php'; ?>

<?php get_footer(); ?>