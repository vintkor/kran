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
            <div class="row news">
              <div class="col-md-3">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('', 'class=img-thumbnail'); ?>
                </a>
              </div>
              <div class="col-md-9">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
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