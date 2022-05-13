<article class="grid">
  <style>
  .checkout textarea {
    width: 100%;
  }

  .checkout .select2-selection.select2-selection--single {
    border-radius: 0;
    border: solid 1px var(--color-main-1);
    width: 100%;
  }

  .payment_method_wc_piggly_pix_gateway .wpgly-pix-step::before {
    background: var(--color-alt-3);
    color: var(--color-light-1);
  }

  .product-total {
    text-align: center;
  }

  .required,
  abbr.required {
    color: var(--color-main-2);
    text-decoration: none;
  }

  .select2.select2-container.select2-container--default {
    min-width: 100%;
  }

  .shop_table.woocommerce-checkout-review-order-table {
    font-size: 1rem;
  }

  .variation {
    font-size: .8em;
  }

  .variation p {
    display: inline;
  }

  .wc_payment_method img {
    max-height: 1em;
    width: auto;
  }

  .woocommerce-checkout-payment {
    border-top: solid 2px var(--color-main-1);
  }

  .woocommerce-input-wrapper,
  #pagseguro-payment-form input,
  #pagseguro-payment-form select {
    display: block;
    margin: .15em 0 var(--grid-gap);
    min-width: 100%;
  }

  .woocommerce-input-wrapper input {
    width: 100%;
  }

  .woocommerce-privacy-policy-text,
  #ce4wp_checkout_consent_checkbox_field {
    display: none;
  }

  .wc_payment_methods,
  .woocommerce-shipping-methods {
    list-style: none;
    padding-left: 0;
  }

  .woocommerce #payment ul.payment_methods li #pagseguro-payment-methods li,
  .woocommerce-page #payment ul.payment_methods li #pagseguro-payment-methods li {
    background: var(--color-alt-4);
    border: none;
    border-radius: 0;
    color: var(--color-alt-3);
    margin-right: 4px;
    padding: calc(var(--grid-gap) * .618) var(--grid-gap);
  }

  .woocommerce #payment ul.payment_methods li #pagseguro-payment-methods li.active,
  .woocommerce-page #payment ul.payment_methods li #pagseguro-payment-methods li.active {
    border: none;
    background: var(--color-main-1);
    color: var(--color-light-1);
  }

  .wpgly-pix-img {
    display: none;
  }

  .wpgly-pix-description {
    max-width: 100%;
    padding-bottom: 1em;
  }

  #pagseguro-payment-form {
    border: none;
    padding: 0;
  }

  #pagseguro-payment-methods {
    border-bottom: solid 1px var(--color-main-1);
  }

  #pagseguro-payment-form .input-text {
    font-size: 1rem !important;
  }
  </style>
  <header class="main-content__header col-12">
    <h1 class="main-content__heading"><?php the_title();?></h1>
  </header>
  <div class="col-12">
    <?php the_content(); ?>
  </div>
</article>