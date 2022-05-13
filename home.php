<?php get_header(); ?>
<style>
.products__anchor,
.products__anchor:focus,
.products__anchor:hover {
  color: var(--color-text);
}
.products__anchor {
  font-family: var(--font-family-titles);
  line-height: 1.1;
  text-decoration: none;
}

.products__item {
  display: flex;
}

.products__item-shop {
  justify-self: end;
}

.products__item-shop .products__anchor {
  background: var(--color-alt-2);
  color: var(--color-light-1);
}

.products__item-shop .focus-animation:focus::before,
.products__item-shop  .focus-animation:hover::before {
    transform: scale(1.05); 
}

.products__list {
  padding-bottom: calc(var(--grid-gap) * 2.618)
}

.products__name {
  padding: calc(var(--grid-gap) * .618) 0;
}

.read-more,
.read-more::before {
  border-radius: 100%;
}

.read-more {
  align-items: center;
  display: flex;
  font-size: 24px;
  height: 18px;  
  justify-content: center;
  margin: var(--grid-gap) auto 0;
  text-decoration: none;
  width: 18px;
}

.read-more::before {
  transform: scale(.7);
}
</style>
<?php
get_template_part( 'template-parts/home', 'banner' );
get_template_part( 'template-parts/home', 'products' );
get_template_part( 'template-parts/home', 'about' );
?>
<?php get_footer();