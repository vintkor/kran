<aside>
  <h2 class="like-h1">Каталог продукции</h2>
  <hr>
  <div class="left-menu">
    <ul>
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
                 echo '<li>';
                     echo '<a href="' . get_term_link( $product_category ) . '">' . $product_category->name . '</a>';
                 echo '</li>';
            }
         }
      ?>
    </ul>
  </div>
</aside>