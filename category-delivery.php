<?php get_header(); ?>

<section class="body">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include_once 'aside.php'; ?>
      </div>
      <div class="col-md-9">
        <content>
          <h1><?php if( is_category() ) echo get_queried_object()->name; ?></h1>
          <hr>
          <?php if( is_category() ) { echo "<p>"; echo get_queried_object()->description; echo "</p><hr>";}?>
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="row delivery flex">
              <div class="col-md-3">
                <?php the_post_thumbnail('', 'class=img-thumbnail'); ?>
              </div>
              <div class="col-md-9">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
              </div>
            </div>
            <hr>
          <?php endwhile; endif;?>
        </content>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>