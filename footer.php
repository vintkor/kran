<div class="pre-footer">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="align">
      <h2><?php echo get_bloginfo('name');?></h2>
      <hr>      
    </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-4">
        <h3>Меню</h3>
        <?php wp_nav_menu( array( 'theme_location' => 'top-menu') ); ?>
      </div>
      <div class="col-md-4 align-center">
        <h3>Контакты</h3>
        <?php dynamic_sidebar('footer_contact'); ?>
      </div>
      <div class="col-md-4 align-right">
        <h3>Каталог продукции</h3>
        <?php dynamic_sidebar('footer_calalog'); ?>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6"><?php echo get_bloginfo('name');?> &copy; <?php echo date('Y'); ?></div>
      <div class="col-md-6 align-right"><a href="//mediaone.in.ua" target="_blank">Создание сайта <img src="<?php echo get_template_directory_uri(); ?>/app/img/maps.svg"></a></div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>