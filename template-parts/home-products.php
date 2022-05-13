<?php 
  $reeds = wc_get_products( array(
    'category' => array('cane-reeds'),
    'return' => 'ids'
  ));
  if ($reeds):
?>
<article class="products">
  <header class="grid">
    <h2 class="col-12">
      <?php echo get_category_by_slug('products')->cat_name?>
    </h2>
  </header>
  <ul class="products__list reset-list grid">
    <?php
    foreach($reeds as $reed_id):
      $reed = get_post($reed_id);
        setup_postdata(get_post($reed));
?>
    <li class="products__item col-4">
      <a class="products__anchor focus-animation" href="<?php echo get_the_permalink($reed)?>">
        <?php print_r(get_the_post_thumbnail($reed)) ?>
        <div class="products__name">
          <?php echo get_the_title($reed) ?>
        </div>
      </a>
    </li>
    <?php
        endforeach;
        $shop = get_page_by_path('/shop');
          if($shop):
      ?>
    <li class="products__item products__item-shop col-4">
      <a class="products__anchor focus-animation" href="<?php echo get_the_permalink($shop)?>">
        <?php print_r(get_the_post_thumbnail($shop)) ?>
        <div class="products__name">
          <?php echo get_the_title($shop) ?>
        </div>
      </a>
    </li>
    <?php
          endif;
        wp_reset_postdata();
      ?>
  </ul>
</article>
<?php endif;