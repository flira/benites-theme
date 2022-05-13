<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this
 * the readme will list any important c as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped andhanges.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>
<style>
.add_to_cart_button {
  display: block;
  margin-top: var(--grid-gap);
  text-align: center;
}

.onsale {
  background-color: var(--color-green-3);
  display: block;
  color: var(--color-light-1);
  line-height: 1;
  padding: calc(var(--grid-gap) *.618) var(--grid-gap);
  position: absolute;
}

.product-description {
  line-height: 1.382;
}

.products {
  list-style: none;
  padding: 0;
}

.product,
.product-item {
  display: flex;
  flex-direction: column;
  height: 100%;
  justify-content: space-between;
  text-align: center;
}

.product .attachment-woocommerce_thumbnail {
  width: 100%;
}

.product .woocommerce-loop-product__title {
  margin: .3em 0;
}

.woocommerce-loop-product__link,
.woocommerce-loop-product__link:focus,
.woocommerce-loop-product__link:hover {
  background: var(--color-light-1);
  color: var(--color-text);
  height: 100%;
  line-height: 0;
  padding: 16px;
  transition: box-shadow .3s ease;
  text-decoration: none;
}

.woocommerce-loop-product__link:focus,
.woocommerce-loop-product__link:hover {
  box-shadow: 0 0 8px rgba(0, 0, 0, .2);
}

.woocommerce-loop-product__title {
  font-size: 1.618rem;
}

.woocommerce-LoopProduct-link.woocommerce-loop-product__link {
  position: relative;
}

@media (min-width: 768px) {
  .products {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-column-gap: var(--grid-gap);
    grid-row-gap: var(--grid-gap);
  }
}

@media (min-width: 1024px) {
  .products {
    grid-template-columns: repeat(3, 1fr);
  }
}
</style>
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>
<article>
  <header class="woocommerce-products-header grid">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
    <h1 class="main-content__heading woocommerce-products-header__title page-title col-12">
      <?php woocommerce_page_title(); ?></h1>
    <?php endif; ?>

    <?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
  </header>
  <div class="content grid">
    <div class="col-12">
      <?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>
    </div>
  </div>
</article>
<?php  get_footer( 'shop' );