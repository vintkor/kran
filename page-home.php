<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
<section class="body">
  <div class="container">
    <div class="row">
      <content class="col-md-12">
        <div class="align-center">
          <h1><?php the_title(); ?></h1>          
        </div>
        <hr>
        <?php the_content('Перейти к полной статье...'); ?>
      </content>
    </div>
  </div>
</section>
<?php endwhile; endif;?>

<section class="triggers">
<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Наша продукция</h2>
      </div>
      <div class="row">
        <?php
          $args = array(
           'number'     => $number,
           'orderby'    => $orderby,
           'order'      => $order,
           'hide_empty' => $hide_empty,
           'include'    => $ids,
           'parent'     => 0
           );
          $product_categories = get_terms( 'product_cat', $args );
          $count = count($product_categories);
           if ( $count > 0 ){
               foreach ( $product_categories as $product_category ) {
                   $thumbnail_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
                   $thumbnail_url = wp_get_attachment_thumb_url( $thumbnail_id );
                   echo '<div class="col-md-3 align-center relative">';
                       echo '<a href="' . get_term_link( $product_category ) . '">';
                          echo '<img src="' . $thumbnail_url . '" alt="Купить ' . $product_category->name . ' в Киеве">';
                          echo '<h3>' . $product_category->name . '</h3>';
                       echo '</a>';
                   echo '</div>';
              }
           }
        ?>
      </div>
    </div>
  </div>  
</div>
</section>

<?php include 'app/maps.php'; ?>

<?php get_footer(); ?>
