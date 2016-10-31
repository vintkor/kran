<!--
  __  __            _  _          ____                   _
 |  \/  |          | |(_)        / __ \                 (_)
 | \  / |  ___   __| | _   __ _ | |  | | _ __    ___     _  _ __     _   _   __ _
 | |\/| | / _ \ / _` || | / _` || |  | || '_ \  / _ \   | || '_ \   | | | | / _` |
 | |  | ||  __/| (_| || || (_| || |__| || | | ||  __/ _ | || | | | _| |_| || (_| |
 |_|  |_| \___| \__,_||_| \__,_| \____/ |_| |_| \___|(_)|_||_| |_|(_)\__,_| \__,_|

-->

<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('&#8594;', true, 'right'); echo get_bloginfo('name');?> - <?php echo get_bloginfo('description') ?></title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkyjbb4D65AJGUvunNlN0CNMSspPjp2Ag"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/libs.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/main.css">
    <script src="<?php echo get_template_directory_uri(); ?>/app/js/libs.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/app/js/main.js"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/app/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/app/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/app/img/manifest.json">
    <meta name="msapplication-TileColor" content="#FD7B12">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/app/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#FD7B12">

</head>
<body <?php body_class(); ?>>

<script>
$.mFancyTitle({
  mftMissYou: true,
  mftMissYouTitle: '<?php echo get_bloginfo('name');?> ждет!',
  mftMissYouFavicon: {
    'apple-touch-icon-precomposed': 'view-source:<?php echo get_template_directory_uri(); ?>/app/img/new/apple-icon-152x152.png',
    'icon': 'view-source:<?php echo get_template_directory_uri(); ?>/app/img/new/favicon-32x32.png',
    'shortcut icon': 'view-source:<?php echo get_template_directory_uri(); ?>/app/img/new/favicon-16x16.png'
  },
  mftTitleBlink: [false, false],
  mftTitleBlinkInterval: [1000, 1000],
  mftTitleAltText: ['',''],
  mftFaviconBlink: [false, true],
  mftFaviconBlinkInterval: 500,
  mftFaviconAltIcon: {
    'visible': {
      'apple-touch-icon-precomposed': 'view-source:<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-152x152.png',
      'icon': 'view-source:<?php echo get_template_directory_uri(); ?>/app/img/favicon-32x32.png',
      'shortcut icon': 'view-source:<?php echo get_template_directory_uri(); ?>/app/img/favicon-16x16.png'
    },
    'hidden': {
      'apple-touch-icon-precomposed': 'view-source:<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-152x152.png',
          'icon': 'view-source:<?php echo get_template_directory_uri(); ?>/app/img/favicon-32x32.png',
          'shortcut icon': 'view-source:<?php echo get_template_directory_uri(); ?>/app/new/favicon-16x16.png'
    }
  },
  mftTitleMarquee: [true, false],
  mftTitleMarqueeDir: ['left', 'right'],
  mftTitleMarqueeDelay: [200, 200]
});
</script>

<header>
  <div class="container">
    <div class="row">
      <div class="col-md-5 flex logotype">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/app/img/logo.svg"" alt="">
          <h2>Кранекспорт</h2>
        <a href="/" class="h2">
        </a>
      </div>
      <div class="col-md-7 top-tel">
        <div class="row">
          <div class="col-md-3">
              <img class="icon" src="<?php echo get_template_directory_uri(); ?>/app/img/phone-call.svg">+38 093 824-85-26
          </div>
          <div class="col-md-3">
              <img class="icon" src="<?php echo get_template_directory_uri(); ?>/app/img/mail.svg">
              <a href="mailto:cranexport@mail.ru">cranexport@mail.ru</a>
          </div>
          <div class="col-md-6 align-right">
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
                <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Введите текст...">
                <input type="submit" value="Найти...">
            </form>
          </div>
        </div>
      </div>    
    </div>
  </div>
</header>

<section class="slider">
  <div class="slide-img flex" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/img/banner.jpg)">
  <div class="owl-carousel">
      <?php $idObj = get_category_by_slug('slider'); $id = $idObj->term_id;
            $n=4;
            $recent = new WP_Query("cat=$id&showposts=$n&order=asc");?>
            <?php while($recent->have_posts()) : $recent->the_post();?>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-6 align-right">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_excerpt(); ?></p>
                  <a class="align-right" href="<?php the_permalink() ?>">Подробнее</a>
                  <hr>
                </div>
              </div>
            </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>

<nav class="top-nav">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php wp_nav_menu( array( 'theme_location' => 'top-menu') ); ?>
      </div>
    </div>
  </div>
</nav>

<?php if( !is_front_page()  ): ?>
<section class="bread">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
          <?php if(function_exists('bcn_display')) { bcn_display(); }?>        
        </div>
        <hr>
      </div>
    </div>
  </div>
</section>
<?php endif;?>
