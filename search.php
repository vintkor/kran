<?php get_header(); ?>

<section class="body">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php include_once 'aside.php'; ?>
      </div>
      <div class="col-md-9">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <div class="row">
            <div class="col-md-12 sec-search">
              <content>
                <a href="<?php the_permalink() ?>">
                  <h2><?php the_title(); ?></h2>
                </a>
                <hr>
                <?php the_excerpt(); ?>
              </content>      
            </div>
          </div>
        <?php endwhile; endif;?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>