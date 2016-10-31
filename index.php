<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

<section class="body">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include_once 'aside.php'; ?>
      </div>
      <div class="col-md-9">
        <content>
          <h1><?php the_title(); ?></h1>
          <hr>
          <?php the_content(); ?>
        </content>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif;?>
<?php get_footer(); ?>
