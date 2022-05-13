<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<div class="grid">
  <div class="col-12">
    <?php do_action( 'woocommerce_before_single_product' );?>
  </div>
</div>
<?php 
  if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
  }
?>
<style>
.comment-form [type=email],
.comment-form [type=text] {
  display: block;
  margin: .15em 0 var(--grid-gap);
  min-width: 100%;
}

.onsale {
  background-color: var(--color-green-3);
  display: block;
  color: var(--color-light-1);
  left: var(--grid-gap);
  line-height: 1;
  padding: calc(var(--grid-gap) *.618) var(--grid-gap);
  position: absolute;
  top: var(--grid-gap);
}

.product-img {
  position: relative;
  text-align: center;
}

.products.related {
  display: none;
}

.required {
  color: var(--color-main-2);
}

.wc-tabs {
  align-items: end;
  border-bottom: solid 1px var(--color-main-1);
  display: flex;
  font-size: .875em;
  list-style: none;
  padding: 0;
}

.wc-tabs a {
  background: var(--color-alt-4);
  color: var(--color-alt-3);
  display: block;
  text-decoration: none;
  padding: calc(var(--grid-gap) * .618) var(--grid-gap);
}

.wc-tabs a:focus {
  background: var(--color-main-3);
  color: var(--color-light-1);
}

.wc-tabs .active a {
  background: var(--color-main-1);
  color: var(--color-light-1);
}

.wc-tabs li {
  margin-right: 4px;
}

.woocommerce-message {
  background: var(--color-light-1);
  border: solid 2px var(--color-alt-2);
  padding: var(--grid-gap);
}

.woocommerce-product-gallery__image a {
  background: var(--color-light-1);
  display: inline-block;
  padding: var(--grid-gap);
}

.woocommerce-variation-add-to-cart {
  display: flex;
  justify-content: center;
  padding: var(--grid-gap) 0;
}

.wp-post-image {
  display: block;
}

@media (min-width: 480px) {
  .wc-tabs {
    font-size: 1rem;
  }
}
</style>
<article id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
  <header class="grid">
    <div class="col-12">
      <?php woocommerce_template_single_title(); ?>
    </div>
    <div class="product-img col-4">
      <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
    </div>
    <div class="col-8">
      <?php
				woocommerce_template_single_price();
				woocommerce_template_single_excerpt();
			?>
    </div>
  </header>
  <div class="summary entry-summary grid">
    <div class="col-12">
      <?php
				woocommerce_template_single_add_to_cart();
				woocommerce_template_single_sharing();
				do_action( 'woocommerce_after_single_product_summary' );
			?>
    </div>
</article>
<?php do_action( 'woocommerce_after_single_product' ); ?>